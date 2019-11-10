<?php
 use yii\helpers\Html;

?>

     <main class="page-articles">
        <div class="container">
           <div class="row">
              <div class="col-text col-lg-9">
                 <section class="text">
                   <?php if( !empty($cards) ): ?>
                    <div class="text-title">
                       <h2>Все публикации</h2>
                    </div>
                    <?php foreach ($cards as $card): ?>
                      <div class="card text-center card-text">
                       <div class="card-header text-left">
                          <?= $card->date?>
                       </div>
                       <div class="card-body">
                          <h5 class="card-title"><?= $card->name?></h5>
                          <div class="card-text text-left">
                            <?= Html::img("@web/img/{$card->image}", ['alt' => $card->name])?>
                             <p class="contects-text"><?= $card->content_info?></p>

                           </div>
                           <div class="button">
                          <a href="<?= \yii\helpers\Url::to(['articles/view', 'id' => $card->id]) ?>" class="btn btn-primary">Подробнее</a>
                        </div>
                       </div>
                       <ul class="card-footer text-muted text-left">
                          <li class="click-wrap"><span class="card-footer-text"><?= $card->sums?></span>
                             <span class="card-footer--click" style="font-size: 30px"><i class="fas fa-comment-alt"></i></span>
                          </li>
                          <li class="click-wrap"><a href="#"><span class="card-footer--click" style="font-size: 30px"><i class="fas fa-thumbs-up"></i></span></a></li>
                          <li class="click-wrap"><a href="#"><span class="card-footer--click" style="font-size: 30px"><i class="fas fa-thumbs-down"></i></span></a></li>
                       </ul>
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
                    <section class="abounts">
                       <div class="text-abounts">
                          <h3>Об авторе</h3>
                       </div>
                       <div class="card">
                          <div class="abounts-img">
                             <img src="/img/admin1.png" class="card-img-top" alt="автор1">
                          </div>
                          <div class="card-body">
                             <p class="card-title">Афанасьев Константин</p>
                             <p class="card-text">Автор статей.</p>
                             <?= Html::a('Подробнее', ['site/author'], ['class'=>'btn btn-primary'])?>
                          </div>
                       </div>
                    </section>
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
