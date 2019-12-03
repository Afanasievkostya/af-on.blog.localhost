<?php
   /* @var $this yii\web\View */
   use yii\helpers\Html;
   
   ?>
<main class="page-main">
   <div class="container">
      <div class="row">
         <div class="col-text col-lg-9">
            <section class="text">
               <div class="text-title">
                  <h2>Последнии публикации</h2>
               </div>
               <?php if( !empty($cards) ): ?>
               <?php foreach ($cards as $card): ?>
               <div class="card text-center card-text">
                  <div class="card-header text-left">
                     <ul class="card-header--wrap">
                        <li class="card-header--item"><?= $card->date?></li>
                        <!-- <li class="card-header--item"><span style="color: #666;"><i class="far fa-eye"></i></span>
                           <?= $card->views?></li> -->
                     </ul>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title"><?= $card->name?></h5>
                     <div class="card-text text-left">
                        <?= $card->content_info?>
                     </div>
                     <div class="button">
                        <a href="<?= \yii\helpers\Url::to(['articles/view', 'id' => $card->id]) ?>" class="btn btn-primary">Подробнее</a>
                     </div>
                  </div>
                  <div class="card-footer text-muted text-left">
                     <div id="vk_like<?= $card->id?>"></div>
                     <script type="text/javascript">
                        window.onload = function () {
                        VK.init({apiId: 111, onlyWidgets: true});
                        VK.Widgets.Like('vk_like<?= $card->id?>', {width: 300});
                         }
                     </script>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
            </section>
            <!--  product    -->
            <section class="product">
               <div class="card product-card">
                  <div class="product-body">
                     <h5 class="product-body__title">В этом месте может быть ваша рекламма</h5>
                  </div>
               </div>
            </section>
            <!-- ***********************************-->
            <section class="video">
               <div class="text-title">
                  <h2>Последнии опубликованные видео</h2>
               </div>
               <?php if( !empty($clips) ): ?>
               <?php foreach ($clips as $clip): ?>
               <div class="card mb-3 card-video">
                  <div class="card-body">
                     <h5 class="card-title"><?= $clip->name?></h5>
                     <p class="card-text video-container"><?= $clip->content?></p>
                     <a href="<?= \yii\helpers\Url::to(['video/movie', 'id' => $clip->id]) ?>" class="btn btn-primary">Комментировать</a>
                     <ul class="card-text card-text--wrap">
                        <li><small class="text-muted text-muted--date"><?= $clip->date?></small></li>
                        <!-- <li><span style="color: #666;"><i class="far fa-eye"></i> <?= $clip->views?></span></li> -->
                     </ul>
                     <div class="card-footer text-muted">
                        <div id="vk_like"></div>
                        <script type="text/javascript">
                           window.onload = function () {
                           VK.init({apiId: 111, onlyWidgets: true});
                           VK.Widgets.Like('vk_like', {width: 300});
                            }
                        </script>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
            </section>
            <!-- ***************************************** -->
            <div class="social-box">
               <?= \app\components\SocialWidget::widget() ?>
            </div>
         </div>
         <!-- ********************************* -->
         <div class="col-lg-3">
            <aside>
               <section class="abounts">
                  <div class="text-abounts">
                     <h3>Об авторе</h3>
                  </div>
                  <div class="card">
                     <div class="abounts-img">
                        <img src="/img/admin.png" class="card-img-top" alt="автор1">
                     </div>
                     <div class="card-body">
                        <p class="card-title">Афанасьев Константин</p>
                        <p class="card-text">Автор</p>
                        <?= Html::a('Подробнее', ['site/author'], ['class'=>'btn btn-primary'])?>
                     </div>
                  </div>
               </section>
               <hr align="center" color="#ccc" />
               <!-- category -->
               <section class="categories navbar-expand">
                  <h3 class="title-product title-product--active">Темы публикации</h3>
                  <ul class="categories-sheps">
                     <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                  </ul>
               </section>
               <hr align="center" color="#ccc" />
               <!-- ********************************************-->
               <section class="categories navbar-expand">
                  <h3 class="title-product title-product--active">Видео по темам</h3>
                  <ul class="categories-sheps">
                     <?= \app\components\VideoWidget::widget(['tplVideo' => 'menuVideo']) ?>
                  </ul>
               </section>
               <hr align="center" color="#ccc" />
               <!-- *********************************************-->
               <div class="archive navbar-expand">
                  <div class="collapse navbar-collapse">
                     <div class="archive-wrap">
                        <a class="archive-wrap--click" href="#" data-toggle="collapse" data-target="#navbarTogglerDemo05">Архив</a>
                        <div class="collapse" id="navbarTogglerDemo05">
                           <ul class="archive-sheps">
                              <li class="archive-item">
                                 <?= Html::a('Статьи', ['category/archive'], ['class'=>'archive-item--click'])?>
                              </li>
                              <li class="archive-item">
                                 <?= Html::a('Видео', ['video/archive'], ['class'=>'archive-item--click'])?>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <hr align="center" color="#ccc" />
               <!--  element    -->
               <div class="element">
                  <div class="card product-card">
                     <div class="product-body">
                        <h5 class="product-body__title">В этом месте может быть ваша рекламма</h5>
                     </div>
                  </div>
               </div>
            </aside>
         </div>
      </div>
   </div>
</main>