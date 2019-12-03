<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php //echo $form->field($model, 'category_video_id')->textInput() ?>

    <div class="form-group field-video-category_video_id has-success">
        <label class="control-label" for="video-category_video_id">Родительская категория</label>
        <select id="video-category_video_id" class="form-control" name="Video[category_video_id]">
            <?= \app\components\VideoWidget::widget(['tplVideo' => 'select_movie', 'model' => $model])?>
        </select>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

     <?php //echo $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php
     echo $form->field($model, 'content')->widget(CKEditor::className(),[
      'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
      ],
    ]);
    ?>

    <?php //echo $form->field($model, 'date')->textInput() ?>

    <div class="form-group field-video-date">
      <label class="control-label" for="video-date">Дата</label>
      <input type="text" id="video-date" class="form-control" name="Video[date]" value="<?= gmdate('U'); ?>">
      <div class="help-block"></div>
    </div>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'active')->dropDownList(['Черновик', 'Опубликован']) ?>

    <?php //echo $form->field($model, 'archive')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>
    <div class="form-group field-video-archive">
      <input type="hidden" name="Video[archive]" value="0"><label class="control-label" style="cursor: pointer;"><input type="checkbox" id="video-archive" name="Video[archive]" value="1"> Архив</label>
        <div class="help-block"></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
