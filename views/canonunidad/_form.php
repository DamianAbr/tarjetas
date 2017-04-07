<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\canonunidad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="canonunidad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcanon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unidadID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
