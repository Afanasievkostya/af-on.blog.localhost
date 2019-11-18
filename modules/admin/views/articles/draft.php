<?php
 use yii\helpers\Html;

?>

<main class="page-article">
         <div class="container">
            <div class="row">
               <div class="col-text col-lg-9">
                  <!-- ***************************************** -->
                  <section class="text">
                    <?php if( !empty($cards) ): ?>
                     <div class="text-title">
                        <h2>Черновик</h2>
                     </div>
                      <?php foreach ($cards as $card): ?>
                     <div class="card card-text">
                        <div class="card-header text-left">
                           <?= $card->date?>
                        </div>
                        <div class="card-body">
                          <div class="text-center">
                            <h5 class="card-title"><?= $card->name?></h5>
                            </div>
                           <div class="card-text article-card-text">
                             <?= $card->content?>
                          </div>
                        </div>
                        <ul class="card-footer text-muted text-left">
                           <li class="click-wrap"><span class="card-footer-text"><?= $card->like?></span>
                              <span class="card-footer--click" style="font-size: 30px"><i class="fas fa-comment-alt"></i></span>
                           </li>
                           <li class="click-wrap"><a href="#"><span class="card-footer--click" style="font-size: 30px"><i class="fas fa-thumbs-up"></i></span></a></li>
                           <li class="click-wrap"><a href="#"><span class="card-footer--click" style="font-size: 30px"><i class="fas fa-thumbs-down"></i></span></a></li>
                        </ul>
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
