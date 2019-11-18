<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Articles */

$this->title = 'Редактировать статью: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
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
