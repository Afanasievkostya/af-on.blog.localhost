<option value="<?= $category['id'] ?>"
  <?php if($category['id'] == $this->model->category_id) echo ' selected'?>>
  <?= $tab . $category['name']?> <!--поставить отступы-->
</option>

<?php if( isset($category['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab . '-')?> <!--$tab-пустая строка + тире-->
    </ul>
<?php endif;?>
