<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Articles */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="view">
  <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'category_id',
            [
              'attribute' => 'category_id',
              'value' => function($data) {
                return $data->category->name;
              }
            ],
            'name',
            //'image',
            'content_info:html',
            'content:html',
            //'date',
            [
              'attribute' => 'date',
              'value' => $model->date,
            ],
            'keywords',
            'description',
            'like',
            //'active',
            [
              'attribute' => 'active',
              'value' => function($data) {
                return !$data->active ? '<span class="text-danger">Черновик</span>' : '<span class="text-success">Опубликован</span>';
              },
              'format' => 'html',
            ],
            //archive
            [
            'attribute' => 'archive',
            'value' => function($data) {
              return !$data->archive ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
            },
            'format' => 'html',
          ],

        ],
    ]) ?>

</div>
