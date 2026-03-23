<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Iniciar sesión';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login login-hero">
    <div class="login-card">
        <div class="login-header text-center mb-4">
            <h1>Iniciar sesión</h1>
            <p class="text-muted">Accede a tu cuenta en MOOC IA</p>
        </div>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'form-label'],
                'inputOptions' => ['class' => 'form-control login-input'],
                'errorOptions' => ['class' => 'invalid-feedback d-block'],
            ],
        ]); ?>

        <div class="mb-3">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Usuario o correo']) ?>
        </div>

        <div class="mb-3">
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Contraseña']) ?>
        </div>

        <div class="mb-3">
            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"form-check\">{input} {label}</div>\n{error}",
                'labelOptions' => ['class' => 'form-check-label'],
            ]) ?>
        </div>

        <div class="d-grid gap-2 mb-3">
            <?= Html::submitButton('Iniciar sesión', ['class' => 'btn btn-login', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="login-info text-center">
            <small>
                Para pruebas: <strong>admin/admin</strong> o <strong>demo/demo</strong>
            </small>
        </div>
    </div>
</div>
