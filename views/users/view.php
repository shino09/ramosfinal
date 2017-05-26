<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'rut',
            'email:email',
            'password',
            'authKey',
            'accessToken',
            'activate',
            'verification_code',
            'role',
            'COM_CORREL',
            'CAR_CODIGO',
            'ALU_NOMBRES',
            'ALU_PATERNO',
            'ALU_MATERNO',
            'ALU_FONO',
            'ALU_DIRECCION',
            'ALU_SITUACION',
        ],
    ]) ?>

</div>
