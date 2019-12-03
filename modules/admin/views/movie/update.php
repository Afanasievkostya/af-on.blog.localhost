<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoryVideo */

$this->title = 'Изменить видео тему: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Category Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="update">
   <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
