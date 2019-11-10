<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

?>

<main class="page-author">
         <div class="container">
            <div class="row">
               <div class="col-text col-lg-9">
                 <section class="author">
                     <div class="text-title">
                        <h2>О себе и о блоге</h2>
                     </div>
                     <div class="author-text">
                        <div class="author-img">
                         <img src="/img/admin1.png" alt="автор">
                         </div>
                         <div class="name">
                             <h4 class="name-text"><span>имя:</span> Константин<span></span></h4>
                         </div>
                         <p class="author-data"><span>дата рождения:</span> 30 января 1969 года.</p>
                         <p class="biography">Родился, вырос и живу в городе Москве. Мне за 50 и это вносит некоторые особенности в общении.</p>
                         <p>Совсем недавно, года 2 назад, захотелось что то поменять в жизни, и я стал изучать вёрстку. С тех пор любопытство переросло в увлечение, и как итог -  создание своего блога на фрейворке Yii2. При создании блога, я преследовал несколько целей: </p>
                         <ol start="1">
                         <li>Улучшить свои знания в программировании.</li>
                         <li>Изучить особенности сайта-блога.</li>
                         <li>Создать реальный, рабочий проект для демонстрации.</li>
                         <li>Для общения с друзьями и единомышлинниками.</li>
                         </ol>
                     </div>
                 </section>
               </div>
               <div class="col-lg-3">
                  <aside>
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
