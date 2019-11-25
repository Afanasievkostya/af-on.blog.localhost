<?php
 use yii\helpers\Html;

?>

<main class="page-article">
         <div class="container">
            <div class="row">
               <div class="col-text col-lg-9">
                  <!-- ***************************************** -->
                  <section class="text">
                    <?php if( !empty($articles) ): ?>
                     <div class="text-title">
                        <h2>Опубликованная статья</h2>
                     </div>
                     <div class="card card-text">
                        <div class="card-header text-left">
                          <ul class="card-header--wrap">
                            <li class="card-header--item"><?= $articles->date?></li>
                            <li class="card-header--item"><span style="color: #666;"><i class="fas fa-book-open"></i></span>
                            <?= $articles->views?></li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="text-center">
                            <h5 class="card-title"><?= $articles->name?></h5>
                            </div>
                           <div class="card-text article-card-text">
                             <?= $articles->content?>
                          </div>
                        </div>
                        <div class="card-footer text-muted text-left">
                          <div id="vk_like"></div>
                            <script type="text/javascript">
                             window.onload = function () {
                            VK.init({apiId: 111, onlyWidgets: true});
                             VK.Widgets.Like('vk_like', {width: 500, page_id: '1'}, 321);
                              }
                            </script>
                        </div>
                     </div>
                     <?php endif; ?>
                  </section>
                  <!-- ***************************************** -->
                  <section class="comments">

                     <h2>Комментарии</h2>

                      <div id="vk_comments"></div>
                        <script type="text/javascript">
                        window.onload = function () {
                        VK.init({apiId: 111, onlyWidgets: true});
                        VK.Widgets.Comments('vk_comments', {width: 500, limit: 15, page_id: '2'}, 321);
                         }
                      </script>

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
                  <!-- ***************************************** -->
               </div>
               <div class="col-lg-3">
                 <aside>
                    <hr align="center" color="#ccc" />
              <!-- *************************************** -->
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
