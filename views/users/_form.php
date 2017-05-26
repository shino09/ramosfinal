<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accessToken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activate')->textInput() ?>

    <?= $form->field($model, 'verification_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'COM_CORREL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CAR_CODIGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_PATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_MATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_FONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_SITUACION')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
