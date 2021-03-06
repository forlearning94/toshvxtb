<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $date
 * @property string|null $image
 * @property int|null $viewed
 * @property int|null $user_id
 * @property int|null $status
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'description', 'content'], 'string'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value'=>date('Y-m-d')],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }

    public function saveImage($fileName)
    {
        $this->image = $fileName;
        return $this->save(false);
    }

    public function getImage()
    {
        return Yii::getAlias('@web') . '/uploads/' . $this->image;
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }
  

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }

    public function saveArticle()
    {
        $this->user_id = Yii::$app->user->id;
        return $this->save();
    }

    public static function getAll($pageSize = 5)
    {
        $query = Article::find();
        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);

        $articles = $query->offset($pagination->offset)
            ->limit(3)
            ->all();

        $data['articles'] = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }

    public static function getPopular()
    {
        return Article::find()->orderBy('viewed desc')->limit(3)->all();
    }

    public static function getRecent()
    {
        return Article::find()->orderBy('date')->limit(4)->all();
    }

    public static function getLastOne()
    {
        return Article::find()->orderBy('id DESC')->one(); //orderBy('id DESC')
    }
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function viewedCounter()
    {
        $this->viewed += 1;
        return $this->save(false);
    }

    public static function publishToTelegram($photo, $caption)
    {
        file_get_contents("https://api.telegram.org/bot1453691326:AAH1g-NUo3SFk7l_iar0bQk8pJ4AP1VNUHc/sendPhoto?chat_id=@vxtbtest&photo=".$photo."&caption=".$caption."%0A%0A%3Ca%20href=%22https://t.me/toshkentvxtb%22%3ETelegram%3C/a%3E | %0A%0A%3Ca%20href=%22https://t.me/toshkentvxtb%22%3ETelegram 2%3C/a%3E&parse_mode=HTML");
    }    

    public static function publishToFacebook($photo, $caption)
    {
        //
    } 

    public static function publishToInstagram($photo, $caption)
    {
        //
    } 
}
