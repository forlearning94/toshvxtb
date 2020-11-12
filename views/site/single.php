<?php 
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="#"><img src=<?= $article->getImage(); ?> alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            

                            <h1 class="entry-title"><a href="#"><?= $article->title ?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content ?> 
                            <br><br>                         
                        </div>

                        <div class="social-share">
							<span class="social-share-title pull-left text-capitalize">
                                By <?= $article->author->name; ?> On <?= $article->getDate() ?>
                            </span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>

            </div>
            <?= 
                $this->render('/partials/sidebar.php', [
                    'popular' => $popular,
                    'recent' => $recent
                ]);
            ?>
        </div>
    </div>
</div>
<!-- end main content-->