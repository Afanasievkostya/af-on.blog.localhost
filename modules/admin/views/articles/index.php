<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список статей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">
  <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <p>
        <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success admin-button']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            //'content_info:ntext',
            //'content:ntext',
            //'date',
            //'keywords',
            //'description',
            'like',
            //'active',
            [
              'attribute' => 'active',
              'value' => function($data) {
                return !$data->active ? '<span class="text-danger">Черновик</span>' : '<span class="text-success">Опубликован</span>';
              },
              'format' => 'html',
            ],
            //'archive',
            [
            'attribute' => 'archive',
            'value' => function($data) {
              return !$data->archive ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
            },
            'format' => 'html',
          ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
