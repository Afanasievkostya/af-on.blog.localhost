<?php
   use yii\helpers\Html;
   
   ?>
<main class="page-articles">
   <div class="container">
      <div class="row">
         <div class="col-text col-lg-9">
            <section class="text">
               <?php if (!empty($cards)): ?>
               <div class="text-title">
                  <h2>Все публикации</h2>
               </div>
               <?php foreach ($cards as $card): ?>
               <div class="card mb-3 card-video">
                  <div class="card-body">
                     <h5 class="card-title"><?= $card->name?></h5>
                     <p class="card-text"><?= $card->content?></p>
                     <a href="<?= \yii\helpers\Url::to(['video/movie', 'id' => $card->id]) ?>" class="btn btn-primary">Комментировать</a>
                     <ul class="card-text card-text--wrap">
                        <li><small class="text-muted text-muted--date"><?= $card->date?></small></li>
                        <!-- <li><span style="color: #666;"><i class="far fa-eye"></i> <?= $card->views?></span></li> -->
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
               <!--  product    -->
               <div class="product">
                  <div class="card product-card">
                     <div class="product-body">
                        <h5 class="product-body__title">В этом месте может быть ваша рекламма</h5>
                     </div>
                  </div>
               </div>
               <?php endif; ?>
            </section>
         </div>
         <div class="col-lg-3">
            <aside>
               <hr align="center" color="#ccc" />
               <!-- **************************** -->
               <section class="categories navbar-expand">
                  <h3 class="title-product title-product--active">Темы публикации</h3>
                  <ul class="categories-sheps">
                     <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                  </ul>
               </section>
               <hr align="center" color="#ccc" />
               <!-- ********************************************-->
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