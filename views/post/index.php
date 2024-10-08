<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>



<section class="bg-text-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-text">
                    <h3>Classic BLOG Design</h3>
                    <h4><a href="https://www.youtube.com/playlist?list=PLD-piGJ3Dtl04HdGz2nMMgdK0eik8VvR2" style="color: white;">Сайт создан для обучения на движке yii2 по видео https://www.youtube.com/playlist?list=PLD-piGJ3Dtl04HdGz2nMMgdK0eik8VvR2</a></h4>
                    <h4><a href="https://github.com/romanov1239/yii2example1.git" style="color: white;">Ссылка на мой гит репозиторий проекта https://github.com/romanov1239/yii2example1.git</a></h4>


                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="blog-post-area-style">
                <div class="col-md-12">
                    <div class="single-post-big">
                        <div class="big-image">
                            <img src="img/post-image1.jpg" alt="">
                        </div>
                        <div class="big-text">
                            <h3><a href="#">Post Title Goes Here.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <h4><span class="date">25 February 2017</span><span class="author">Posted By: <span class="author-name">Kabbo Liate</span></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php foreach ($posts as $post):?>
                <div class="col-md-3">
                    <div class="single-post">
                        <?=\yii\helpers\Html::img("@web/{$post->img}")?>

                        <h3><a href="<?= \yii\helpers\Url::to(['post/view', 'id'=>$post->id]) ?>"><?=$post->title?></a></h3>
                        <h4><span>Category: <span class="author-name">
                                    <a href="<?= \yii\helpers\Url::to(['category/view', 'alias'=>$post->category->alias]) ?>">
                                    <?= $post->category->title ?>
                                    </a>
                                    </span></span>

                        </h4>
                        <?= $post->excerpt ?>
                        <h4><span><?= Yii::$app->formatter->asDate($post->created_at,'php:d.m.Y') ?></span></h4>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="pegination">
        <!--
        <ul>
            <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
            <li class="active">1</li>
            <li>2</li>
            <li>3</li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        </ul>
-->

        <div class="nav-links">
            <?=\yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
            ])
            ?>
            <!--<span class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        -->
        </div>
    </div>
</section>
