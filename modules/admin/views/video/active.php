<?php
 use yii\helpers\Html;

?>

<main class="page-article">
         <div class="container">
            <div class="row">
               <div class="col-text col-lg-9">
                  <!-- ***************************************** -->
                  <section class="text">
                    <?php if (!empty($cards)): ?>
                      <?php foreach ($cards as $card): ?>
                    <div class="text-title">
                        <h2>Видео: <?= $card->name?></h2>
                     </div>

                       <div class="card mb-3 card-video">
                         <div>
                           <video width="100%" height="300" preload="none" controls="controls" poster="/img/headr-fon.png">
                           <source src="/video/<?= $card->video?>" type='video/ogg; codecs="theora, vorbis"'>
                           <source src="/video/<?= $card->video?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                           <source src="/video/<?= $card->video?>" type='video/webm; codecs="vp8, vorbis"'>
                              Тег video не поддерживается вашим браузером.
                         </video>
                           </div>
                          <div class="card-body">
                             <h5 class="card-title"><?= $card->name?></h5>
                             <p class="card-text"><?= $card->content?></p>

                             <p class="card-text"><small class="text-muted"><?= $card->date?></small></p>
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
               </div>
               <div class="col-lg-3">
                 <aside>
                 </aside>
               </div>
            </div>
         </div>
      </main>
