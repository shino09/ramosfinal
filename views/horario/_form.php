<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Horario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HOR_CODIGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASI_CODIGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HOR_INICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HOR_FINAL')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
