<?php
 use yii\helpers\Html;

?>

     <main class="page-articles">
        <div class="container">
           <div class="row">
              <div class="col-text col-lg-9">
                 <section class="text">
                   <?php if( !empty($articles) ): ?>
                    <div class="text-title">
                       <h2><?= $category->name?></h2>
                    </div>
                    <?php foreach ($articles as $article): ?>
                      <div class="card text-center card-text">
                       <div class="card-header text-left">
                         <ul class="card-header--wrap">
                           <li class="card-header--item"><?= $article->date?></li>
                           <li class="card-header--item"><span style="color: #666;"><i class="fas fa-book-open"></i></span>
                           <?= $article->views?></li>
                         </ul>
                       </div>
                       <div class="card-body">
                          <h5 class="card-title"><?= $article->name?></h5>
                          <div class="card-text text-left">
                            <?= $article->content_info?>
                          </div>
                           <div class="button">
                          <a href="<?= \yii\helpers\Url::to(['articles/view', 'id' => $article->id]) ?>" class="btn btn-primary">Подробнее</a>
                        </div>
                       </div>
                       <div class="card-footer text-muted text-left">
                         <div id="vk_like<?= $article->id?>"></div>
                           <script type="text/javascript">
                            window.onload = function () {
                           VK.init({apiId: 111, onlyWidgets: true});
                            VK.Widgets.Like('vk_like<?= $article->id?>', {width: 300});
                             }
                           </script>
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
              <div class="col-lg-3">
                 <aside>
                    <!-- category -->
                    <section class="categories navbar-expand">
                       <h3 class="title-product title-product--active">Темы публикации</h3>
                       <ul class="categories-sheps">
                       <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
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
