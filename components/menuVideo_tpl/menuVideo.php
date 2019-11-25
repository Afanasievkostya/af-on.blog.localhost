<li class="categories-item">

      <a class="categories-item--click" href="<?= \yii\helpers\Url::to(['video/view', 'id' => $categoryVideo['id']]) ?>">

        <?= $tab . $categoryVideo['name']?>
        <?php if( isset($categoryVideo['childs']) ): ?>
          <a class="categories-item--click dropdown-toggle" href=""></a>
        <?php endif;?>
    </a>
    <?php if( isset($categoryVideo['childs']) ): ?>
        <ul>
            <?= $this->getMenuHtml($categoryVideo['childs'], $tab . '-')?>
        </ul>
    <?php endif;?>
</li>
