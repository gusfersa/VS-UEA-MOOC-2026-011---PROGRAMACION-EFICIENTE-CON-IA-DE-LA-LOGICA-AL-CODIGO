<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact contact-hero">
    <div class="contact-card">
        <div class="contact-header text-center mb-4">
            <h1>Contacto</h1>
            <p class="text-muted">Ponte en contacto con nosotros</p>
        </div>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Éxito!</strong> Gracias por contactarnos. Pronto nos pondremos en contacto contigo.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                <div class="alert alert-info">
                    <small>El email ha sido guardado en modo desarrollo en: <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code></small>
                </div>
            <?php endif; ?>

        <?php else: ?>

            <p class="contact-intro">
                Si tienes consultas o dudas sobre el curso, completa el siguiente formulario y nos comunicaremos contigo pronto.
            </p>

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <div class="mb-3">
                    <?= $form->field($model, 'name')->textInput([
                        'autofocus' => true,
                        'placeholder' => 'Tu nombre',
                        'class' => 'form-control contact-input'
                    ])->label('Nombre') ?>
                </div>

                <div class="mb-3">
                    <?= $form->field($model, 'email')->textInput([
                        'placeholder' => 'tu@correo.com',
                        'class' => 'form-control contact-input'
                    ])->label('Correo') ?>
                </div>

                <div class="mb-3">
                    <?= $form->field($model, 'subject')->textInput([
                        'placeholder' => 'Asunto',
                        'class' => 'form-control contact-input'
                    ])->label('Asunto') ?>
                </div>

                <div class="mb-3">
                    <?= $form->field($model, 'body')->textarea([
                        'rows' => 5,
                        'placeholder' => 'Tu mensaje aquí...',
                        'class' => 'form-control contact-input'
                    ])->label('Mensaje') ?>
                </div>

                <div class="mb-3">
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="d-flex gap-2 align-items-center"><div>{image}</div><div class="flex-grow-1">{input}</div></div>',
                        'captchaAction' => '/site/captcha'
                    ])->label('Verifica que eres humano') ?>
                </div>

                <div class="d-grid gap-2 mb-3">
                    <?= Html::submitButton('Enviar mensaje', ['class' => 'btn btn-contact', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

        <?php endif; ?>
    </div>
</div>
