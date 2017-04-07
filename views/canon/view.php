<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\canon */

$this->title = $model->idcanon;
$this->params['breadcrumbs'][] = ['label' => 'Canons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idcanon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idcanon], [
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
            'nroSerie',
            'descripcion',
            'calibre',
        ],
    ]) ?>

</div>
