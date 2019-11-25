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
                      <li class="card-header--item"><span style="color: #666;"><i class="fas fa-book-open"></i></span>
                      <?= $card->views?></li>
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
                 <video width="auto" height="300" preload="none" controls="controls" poster="/img/headr-fon.png">
                   <source src="/video/<?= $clip->video?>" type='video/ogg; codecs="theora, vorbis"'>
                   <source src="/video/<?= $clip->video?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                   <source src="/video/<?= $clip->video?>" type='video/webm; codecs="vp8, vorbis"'>
                      Тег video не поддерживается вашим браузером.
                 </video>
                  <div class="card-body">
                     <h5 class="card-title"><?= $clip->name?></h5>
                     <p class="card-text"><?= $clip->content?></p>
                     <a href="<?= \yii\helpers\Url::to(['video/movie', 'id' => $clip->id]) ?>" class="btn btn-primary">Комментировать</a>
                     <p class="card-text"><small class="text-muted"><?= $clip->date?></small></p>
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
              <ul class="social-box--wrap">
                <li class="social-box--item"><a href="https://facebook.com" class="btn btn-secondary"><span style="font-size: 18px; color: #fff;"><i class="fab fa-facebook-f"></i></span></a></li>
                <li class="social-box--item"><a href="https://twitter.com" class="btn btn-warning"><span style="font-size: 18px; color: #46505a;"><i class="fab fa-twitter"></i></span></a></li>
                <li class="social-box--item"><a href="https://plus.google.com" class="btn btn-danger"><span style="font-size: 18px; color: #fff;"><i class="fab fa-google-plus-g"></i></span></a></li>
                <li class="social-box--item"><a href="https://www.whatsapp.com" class="btn btn-info"><span style="font-size: 20px; color: #fff;"><i class="fab fa-whatsapp"></i></span></a></li>
                <li class="social-box--item"><a href="https://www.instagram.com" class="btn btn-success"><span style="font-size: 20px; color: #fff;"><i class="fab fa-instagram"></i></span></a></li>
                <li class="social-box--item"><a href="https://www.vk.com" class="btn btn-dark"><span style="font-size: 20px; color: #fff;"><i class="fab fa-vk"></i></span></a></li>
              </ul>
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
