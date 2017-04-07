<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\canonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="canon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcanon') ?>

    <?= $form->field($model, 'nroSerie') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'calibre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
