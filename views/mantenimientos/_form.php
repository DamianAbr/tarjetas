<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\mantenimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mantenimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nroTarjeta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idUnidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaCumplimiento')->textInput() ?>

    <?= $form->field($model, 'fechaCumplido')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcanon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'porcentaje')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cumplido')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
