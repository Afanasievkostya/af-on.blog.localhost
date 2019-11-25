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
                       <h2>Поиск по запросу: <?= Html::encode($q)?></h2>
                    </div>
                    <?php foreach ($articles as $article): ?>
                      <div class="card text-center card-text">
                       <div class="card-header text-left">
                          <?= $article->date?>
                       </div>
                       <div class="card-body">
                          <h5 class="card-title"><?= $article->name?></h5>
                          <div class="card-text text-left">
                            <?= Html::img("@web/img/{$article->image}", ['alt' => $article->name])?>
                             <p class="contects-text"><?= $article->content_info?></p>

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
                <?php else: ?>
                  <div class="articles-error">
                  <h2><?= $category->name?></h2>
                  <p>Ничего не найдено...</p>
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
              </div>
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
                             <p class="card-text">Автор статей.</p>
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

                 <!-- ********************************************-->
                 
                    <div class="archive navbar-expand">
                       <div class="collapse navbar-collapse">
                          <div class="archive-wrap">
                                <a class="archive-wrap--click" href="#" data-toggle="collapse" data-target="#navbarTogglerDemo05">Архив</a>
                                <div class="collapse" id="navbarTogglerDemo05">
                                   <ul class="archive-sheps">
                                      <li class="archive-item">
                                         <a class="archive-item--click" href="#">Статьи</a>
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
