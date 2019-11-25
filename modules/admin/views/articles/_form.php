<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group field-articles-category_id has-success">
        <label class="control-label" for="articles-category_id">Родительская категория</label>
        <select id="articles-category_id" class="form-control" name="Articles[category_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_articles', 'model' => $model])?>
        </select>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <!--текстовый редактор-->
    <?php
        echo $form->field($model, 'content_info')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
        ]);
     ?>

    <!--текстовый редактор без добавления фото-->
    <?php
    //  echo $form->field($model, 'content')->widget(CKEditor::className(),[
    //   'editorOptions' => [
    //     'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
    //     'inline' => false, //по умолчанию false
    //   ],
    // ]);
    ?>

    <!--текстовый редактор-->
    <?php
        echo $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
        ]);
     ?>

    <?php //echo $form->field($model, 'date')->textInput() ?>

    <div class="form-group field-articles-date">
<label class="control-label" for="articles-date">Дата</label>
<input type="text" id="articles-date" class="form-control" name="Articles[date]" value="<?= gmdate('U'); ?>">

<div class="help-block"></div>
</div>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'active')->dropDownList([ 'Черновик', 'Опубликован', ]) ?>

    <?php //echo $form->field($model, 'archive')->checkbox() ?>
    <div class="form-group field-articles-archive">
      <input type="hidden" name="Articles[archive]" value="0"><label class="control-label" style="cursor: pointer;"><input type="checkbox" id="articles-archive" name="Articles[archive]" value="1"> Архив</label>
        <div class="help-block"></div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
