<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Отправка почты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact container">

    <h2><?= Html::encode($this->title) ?></h2>


    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
        </div>

        <p>
            <!-- Обратите внимание, что если вы включите отладчик Yii, вы сможете просматривать почтовое сообщение на почтовой панели отладчика. -->
            <?php if (Yii::$app->mailer->useFileTransport): ?>
              Поскольку приложение находится в режиме разработки, электронное письмо не отправляется, а сохраняется как
                Файл под <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Пожалуйста, настройте <code>useFileTransport</code> property of the <code>mail</code>
                Компонент приложения должен быть ложным, чтобы включить отправку электронной почты.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
          Если у вас есть деловые вопросы или другие вопросы, пожалуйста, заполните следующую форму, чтобы связаться сомной. Спасибо.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
