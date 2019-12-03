<option value="<?= $categoryVideo['id'] ?>"
  <?php if($categoryVideo['id'] == $this->model->category_video_id) echo ' selected'?>>
  <?= $tab . $categoryVideo['name']?> <!--поставить отступы-->
</option>

<?php if( isset($categoryVideo['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($categoryVideo['childs'], $tab . '-')?> <!--$tab-пустая строка + тире-->
    </ul>
<?php endif;?>
