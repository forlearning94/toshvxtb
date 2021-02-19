<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Article;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {


        // https://api.telegram.org/bot
        // 1453691326:AAH1g-NUo3SFk7l_iar0bQk8pJ4AP1VNUHc
        // /sendPhoto?chat_id=@vxtbtest&photo=https://storage.kun.uz/source/6/yhQ6zC_ZYfRfF4uv7R58SR0tiLcdsYkJ.jpg
        // &caption=description%20written%20by

        // $sLink .= "<a href='".$Row->link_url."'>".$Row->link_name."</a>";
        // $URL = "https://api.telegram.org/bot".$Token."/sendMessage?chat_id=".$ChatID."&text=".$Text."&parse_mode=HTML&reply_markup=".json_encode($KB);

        // in url should be https://api.telegram.org/bot1453691326:AAH1g-NUo3SFk7l_iar0bQk8pJ4AP1VNUHc/sendPhoto?chat_id=@vxtbtest&photo=https://storage.kun.uz/source/6/yhQ6zC_ZYfRfF4uv7R58SR0tiLcdsYkJ.jpg&caption=buasdubad%20u%20dkasduuasdasd%20asd%20asdassfdvdkjsabbasjdb%20asjhvdsjad%20avzasdan%20boshlanadi%0A%0A%3Ca%20href=%22https://t.me/toshkentvxtb%22%3EToshvil%20xtb%20kanali%3C/a%3E&parse_mode=HTML
        
        //  <  %3C
        //  =  %3D
        //  >  %3E
        //$photo = "https://storage.kun.uz/source/6/yhQ6zC_ZYfRfF4uv7R58SR0tiLcdsYkJ.jpg";
        //$caption = "buasdubad%20u%20dkasduuasdasd%20asd%20asdassfdvdkjsabbasjdb%20asjhvdsjad%20avzasdan%20boshlanadi";
        //$token = "1453691326:AAH1g-NUo3SFk7l_iar0bQk8pJ4AP1VNUHc";
        //file_get_contents("https://api.telegram.org/bot1453691326:AAH1g-NUo3SFk7l_iar0bQk8pJ4AP1VNUHc/sendPhoto?chat_id=@vxtbtest&photo=".$photo."&caption=".$caption."%0A%0A%3Ca%20href=%22https://t.me/toshkentvxtb%22%3ETelegram%3C/a%3E | %0A%0A%3Ca%20href=%22https://t.me/toshkentvxtb%22%3ETelegram 2%3C/a%3E&parse_mode=HTML");
        



        $lastArticle = Article::getLastOne();
        $photo = "toshvxtb.uz" .$lastArticle->getImage();
        //var_dump($lastArticle->title);die;
        $caption = $lastArticle->title;

        //Article::publishToTelegram($photo, $caption);

        //var_dump("article has been published successfully");die;
        //var_dump((new \yii\web\Request)->getBaseUrl());die;
        


        $data = Article::getAll(3);
        
        $popular = Article::getPopular();
        $recent = Article::getRecent();

        return $this->render('index', [
            'articles' => $data['articles'],
            'pagination' => $data['pagination'],
            'popular' => $popular,
            'recent' => $recent
        ]);
    }

    public function actionView($id)
    {
        $article = Article::findOne($id);

        $popular = Article::getPopular();
        $recent = Article::getRecent();


        $article->viewedCounter();

        return $this->render('single', [
            'article' => $article,
            'popular' => $popular,
            'recent' => $recent
        ]);
    }
    
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
