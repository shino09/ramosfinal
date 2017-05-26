<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FacultadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facultad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FAC_CORREL') ?>

    <?= $form->field($model, 'CAM_CORREL') ?>

    <?= $form->field($model, 'FAC_NOMBRE') ?>

    <?= $form->field($model, 'FAC_DESCRIPCION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
