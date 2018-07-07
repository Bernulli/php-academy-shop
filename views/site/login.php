<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = 'Авторизація';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-login">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Будь ласка заповніть всі поля:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->label('Логін') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                <?= $form->field($model, 'rememberMe')->checkbox()->label('Запам\'ятати мене') ?>
                <div style="color:#999;margin:1em 0">
<!--                    Якщо ви забули свій пароль --><?//= Html::a('reset it', ['user/request-password-reset']) ?><!--.-->
                    Щоб зареєструватись <?= Html::a('Натисність сюди', ['/site/signup']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Увійти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
