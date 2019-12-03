<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Video */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="view">
  <div class="admin-title">
    <h2><?= Html::encode($this->title) ?></h2>
  </div>
    <div class="category-view--bottons">
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить видео: ' . $model->name . '?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'category_video_id',
            [
              'attribute' => 'category_video_id',
              'value' => function($data) {
                return $data->category->name;
              }
            ],
            'name',
            'content:html',
            //'date',
            [
              'attribute' => 'date',
              'value' => $model->date,
            ],
            'keywords',
            'description',
            'views',
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
        ],
    ]) ?>

</div>
