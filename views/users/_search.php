<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rut') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'authKey') ?>

    <?php // echo $form->field($model, 'accessToken') ?>

    <?php // echo $form->field($model, 'activate') ?>

    <?php // echo $form->field($model, 'verification_code') ?>

    <?php // echo $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'COM_CORREL') ?>

    <?php // echo $form->field($model, 'CAR_CODIGO') ?>

    <?php // echo $form->field($model, 'ALU_NOMBRES') ?>

    <?php // echo $form->field($model, 'ALU_PATERNO') ?>

    <?php // echo $form->field($model, 'ALU_MATERNO') ?>

    <?php // echo $form->field($model, 'ALU_FONO') ?>

    <?php // echo $form->field($model, 'ALU_DIRECCION') ?>

    <?php // echo $form->field($model, 'ALU_SITUACION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
