<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tarjeta */

$this->title = $model->nroTarjeta;
$this->params['breadcrumbs'][] = ['label' => 'Tarjetas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarjeta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nroTarjeta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nroTarjeta], [
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
            'nroTarjeta',
            'codigo',
            'Componente',
            'subSistema',
            'mantenimineto',
            'horasHombre',
            'cantidadHombres',
            'tiempoTotal',
            'descripcion',
            'peridiocidad',
            'mantenimientoRelacionado',
            'sistema',
            'grado',
        ],
    ]) ?>

</div>
