<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\canonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Canons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Canon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcanon',
            'nroSerie',
            'descripcion',
            'calibre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
