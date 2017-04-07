<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tarjeta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarjeta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Componente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subSistema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mantenimineto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horasHombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadHombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiempoTotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peridiocidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mantenimientoRelacionado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sistema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
