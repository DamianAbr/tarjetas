<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tarjetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarjeta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nroTarjeta') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'Componente') ?>

    <?= $form->field($model, 'subSistema') ?>

    <?= $form->field($model, 'mantenimineto') ?>

    <?php // echo $form->field($model, 'horasHombre') ?>

    <?php // echo $form->field($model, 'cantidadHombres') ?>

    <?php // echo $form->field($model, 'tiempoTotal') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'peridiocidad') ?>

    <?php // echo $form->field($model, 'mantenimientoRelacionado') ?>

    <?php // echo $form->field($model, 'sistema') ?>

    <?php // echo $form->field($model, 'grado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
