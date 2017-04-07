<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\unidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'unidadID',
            'nombre',
            'descripcion',
            'contrasenia',
            'autorizacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
