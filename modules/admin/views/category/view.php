<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="view">
  <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <div class="category-view--bottons">
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить тему: ' . $model->name . '?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
          //  'parent_id',
          [
            'attribute' => 'parent_id',
            'value' => $model->category->name ? $model->category->name : 'Самостоятельная категория',
          ],
            'name',
            'keywords',
            'description',
        ],
    ]) ?>

</div>
