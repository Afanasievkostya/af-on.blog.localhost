<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Темы публикации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">
  <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <p>
        <?= Html::a('добавить тему', ['create'], ['class' => 'btn btn-success admin-button']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
          //  'parent_id',
            [
              'attribute' => 'parent_id',
              'value' => function($data) {
              return $data->category->name ? $data->category->name : 'Самостоятельная категория';
              }
            ],
            'name',
            'keywords',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
