<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\mantenimientosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mantenimientos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMantenimiento') ?>

    <?= $form->field($model, 'nroTarjeta') ?>

    <?= $form->field($model, 'idUnidad') ?>

    <?= $form->field($model, 'fechaCumplimiento') ?>

    <?= $form->field($model, 'fechaCumplido') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'idcanon') ?>

    <?php // echo $form->field($model, 'porcentaje') ?>

    <?php // echo $form->field($model, 'cumplido') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
