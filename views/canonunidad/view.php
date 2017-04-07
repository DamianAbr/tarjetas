<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\canonunidad */

$this->title = $model->idcanon;
$this->params['breadcrumbs'][] = ['label' => 'Canonunidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canonunidad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idcanon' => $model->idcanon, 'unidadID' => $model->unidadID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idcanon' => $model->idcanon, 'unidadID' => $model->unidadID], [
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
            'idcanon',
            'unidadID',
            'activo',
        ],
    ]) ?>

</div>
