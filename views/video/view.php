<?php
   use yii\helpers\Html;
   
   ?>
<main class="page-articles">
   <div class="container">
      <div class="row">
         <div class="col-text col-lg-9">
            <section class="text">
               <?php if (!empty($videos)): ?>
               <div class="text-title">
                  <h2><?= $categoryVideo->name?></h2>
               </div>
               <?php foreach ($videos as $video): ?>
               <div class="card mb-3 card-video">
                  <div class="card-body">
                     <h5 class="card-title"><?= $video->name?></h5>
                     <p class="card-text"><?= $video->content?></p>
                     <a href="<?= \yii\helpers\Url::to(['video/movie', 'id' => $video->id]) ?>" class="btn btn-primary">Комментировать</a>
                     <ul class="card-text card-text--wrap">
                        <li><small class="text-muted text-muted--date"><?= $video->date?></small></li>
                        <!--<li><span style="color: #666;"><i class="far fa-eye"></i> <?= $video->views?></span></li>-->
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
               <div class="pagination-wrap">
                  <?php
                     echo \yii\widgets\LinkPager::widget([
                     'pagination' => $pages,]);
                     ?>
               </div>
               <?php else: ?>
               <div class="articles-error">
                  <h2><?= $category->name?></h2>
                  <p>Здесь публикаций пока нет...</p>
               </div>
               <?php endif; ?>
               <!--  product    -->
               <div class="product">
                  <div class="card product-card">
                     <div class="product-body">
                        <h5 class="product-body__title">В этом месте может быть ваша рекламма</h5>
                     </div>
                  </div>
               </div>
            </section>
            <!-- ***************************************** -->
            <div class="social-box">
               <?= \app\components\SocialWidget::widget() ?>
            </div>
         </div>
         <!--**********************************-->
         <div class="col-lg-3">
            <aside>
               <!-- category -->
               <!-- **************************** -->
               <section class="categories navbar-expand">
                  <h3 class="title-product title-product--active">Видео по темам</h3>
                  <ul class="categories-sheps">
                     <?= \app\components\VideoWidget::widget(['tplVideo' => 'menuVideo']) ?>
                  </ul>
               </section>
               <hr align="center" color="#ccc" />
               <!-- ********************************************-->
               <div class="archive navbar-expand">
                  <div class="collapse navbar-collapse">
                     <div class="archive-wrap">
                        <a class="archive-wrap--click" href="#" data-toggle="collapse" data-target="#navbarTogglerDemo05">Архив</a>
                        <div class="collapse" id="navbarTogglerDemo05">
                           <ul class="archive-sheps">
                              <li class="archive-item">
                                 <?= Html::a('статьи', ['category/archive'], ['class'=>'archive-item--click'])?>
                              </li>
                              <li class="archive-item">
                                 <a class="archive-item--click" href="#">Видео</a>
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