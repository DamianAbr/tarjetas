<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\mantenimientos */

$this->title = $model->idMantenimiento;
$this->params['breadcrumbs'][] = ['label' => 'Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mantenimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idMantenimiento' => $model->idMantenimiento, 'nroTarjeta' => $model->nroTarjeta, 'idUnidad' => $model->idUnidad], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idMantenimiento' => $model->idMantenimiento, 'nroTarjeta' => $model->nroTarjeta, 'idUnidad' => $model->idUnidad], [
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
            'idMantenimiento',
            'nroTarjeta',
            'idUnidad',
            'fechaCumplimiento',
            'fechaCumplido',
            'descripcion',
            'idcanon',
            'porcentaje',
            'cumplido',
        ],
    ]) ?>

</div>
