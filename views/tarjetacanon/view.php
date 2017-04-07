<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tarjetacanon */

$this->title = $model->nroTarjeta;
$this->params['breadcrumbs'][] = ['label' => 'Tarjetacanons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarjetacanon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nroTarjeta' => $model->nroTarjeta, 'idcanon' => $model->idcanon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nroTarjeta' => $model->nroTarjeta, 'idcanon' => $model->idcanon], [
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
            'idcanon',
        ],
    ]) ?>

</div>
