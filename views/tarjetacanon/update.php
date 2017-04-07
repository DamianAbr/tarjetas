<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tarjetacanon */

$this->title = 'Update Tarjetacanon: ' . $model->nroTarjeta;
$this->params['breadcrumbs'][] = ['label' => 'Tarjetacanons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nroTarjeta, 'url' => ['view', 'nroTarjeta' => $model->nroTarjeta, 'idcanon' => $model->idcanon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarjetacanon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
