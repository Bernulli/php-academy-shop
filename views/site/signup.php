<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = 'Реєстрація';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="site-signup">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Будь ласка заповніть всі поля:</p>
        <?= Html::errorSummary($model)?>
        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username')->label('Логін') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                <div class="form-group">
                    <?= Html::submitButton('Зареєструватись', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
