<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Video */

$this->title = 'Добавить видео';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create">
   <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
