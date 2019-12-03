<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
   <head>
     <meta charset="<?= Yii::$app->charset ?>">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://vk.com/js/api/openapi.js?162" type="text/javascript"></script>
     <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
   </head>
   <body>
     <?php $this->beginBody() ?>
      <header>
         <div class="container">
            <ul class="logo">
               <li>
                  <?= Html::a('<p class="logo--text1">af-on<br></p>
                  <span class="logo--text2">blog</span>', ['site/index'], ['class'=>'brand'])?>
               </li>
               <li>
                  <h1>Константин</h1>
               </li>
            </ul>
            <div class="nav-wrap">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li <?php if ($action == "index") { ?>class="nav-item active"<?php } else {
                          ?>class="nav-item"<?php
                        } ?>>
                           <?= Html::a('Главная', ['site/index'], ['class'=>'nav-link'])?>
                        </li>
                        <li <?php if ($action == "articles") { ?>class="nav-item active"<?php } else {
                          ?>class="nav-item"<?php
                        }  ?>>
                           <?= Html::a('Публикации', ['category/articles'], ['class'=>'nav-link'])?>
                        </li>
                        <li <?php if ($action == "clip") { ?>class="nav-item active"<?php } else {
                          ?>class="nav-item"<?php
                        }  ?>>
                           <?= Html::a('Видео', ['video/clip'], ['class'=>'nav-link'])?>
                        </li>
                        <li <?php if ($action == "author") { ?>class="nav-item active"<?php } else {
                          ?>class="nav-item"<?php
                        }  ?>>
                           <?= Html::a('Об авторе', ['site/author'], ['class'=>'nav-link'])?>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
                            Контакты
                          </a>
                        </li>
                     </ul>
                  </div>
               </nav>
               <ul class="nav-right">
                  <li class="nav-right--item">
                     <div class="dropdown">
                        <button type="button" class="btn btn-fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span style="font-size: 1.2rem; color: #46505a;"><i class="fas fa-search"></i></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                           <form class="form-inline my-2 my-lg-0" method="get" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q" data-toggle="tooltip" data-placement="bottom" title="Поиск статьи по названию.">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                           </form>
                        </div>
                     </div>
                  </li>
                  <?php if (!Yii::$app->user->isGuest): ?>
                    <li class="nav-right--item"><a class="top-user" href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><?= Yii::$app->user->identity['username']?> (Выход)</a>
                    </li>
                  <?php endif;?>
                  <li class="nav-right--item"><a href="<?= \yii\helpers\Url::to('/admin')?>"><img src="/img/User.png" alt="вход"></a></li>
               </ul>
            </div>
         </div>
      </header>
        <?= $content ?>
      <footer>
         <div class="container">
            <div class="row">
               <div class="logo col-md-3">
                 <?= Html::a('<p class="logo--text1">af-on<br></p>
                 <span class="logo--text2">blog</span>', ['site/index'], ['class'=>'brand'])?>
               </div>
               <ul class="info col-md-4">
                  <li class="info-item">  <a class="info-click" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
                      Контакты
                    </a></li>
                    <li class="info-item"><span class="counter"></span></li>
               </ul>
               <div class="nav-social col-md-5">
                  <ul class="social">
                     <li class="nav-item">
                        <a class="nav-link" href="https://facebook.com"><span style="font-size: 18px; color: #46505a;"><i class="fab fa-facebook-f"></i></span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com"><span style="font-size: 18px; color: #46505a;"><i class="fab fa-twitter"></i></span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://plus.google.com"><span style="font-size: 18px; color: #46505a;"><i class="fab fa-google-plus-g"></i></span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com"><span style="font-size: 18px; color: #46505a;"><i class="fab fa-instagram"></i></span></a>
                     </li>
                  </ul>
                  <div class="nav-social--bottom">
                     <p class="info-text">Сайт разработчика:  <a href="https://af-on.ru" class="info-click">af-on.ru</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Контакты</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <table class="modal-body">
        <tr align="center">
          <td><span style="font-size: 42px; color: #e8871d"><i class="far fa-envelope"></i></span></td>
          <td>afonas48@yandex.ru</td>
          <td><a href="<?= \yii\helpers\Url::to(['/site/contact'])?>">Написать</a></td>
        </tr>
      </table>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <?php $this->endBody() ?>
   </body>
</html>
<?php $this->endPage() ?>
