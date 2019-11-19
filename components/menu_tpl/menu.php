<li class="categories-item">

      <a class="categories-item--click" href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>">

        <?= $tab . $category['name']?>
        <?php if( isset($category['childs']) ): ?>
          <a class="categories-item--click dropdown-toggle" href=""></a>
        <?php endif;?>
    </a>
    <?php if( isset($category['childs']) ): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs'], $tab . ' -')?>
        </ul>
    <?php endif;?>
</li>
