<option
    value="<?= $categoryVideo['id']?>"
    <?php if($categoryVideo['id'] == $this->model->parent_id) echo ' selected'?>
    <?php if($categoryVideo['id'] == $this->model->id) echo ' disabled'?>
    ><?= $tab . $categoryVideo['name']?>
  </option>

<?php if( isset($categoryVideo['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($categoryVideo['childs'], $tab . '-')?> <!--$tab-пустая строка + тире-->
    </ul>
<?php endif;?>
