<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\canonunidad */

$this->title = 'Update Canonunidad: ' . $model->idcanon;
$this->params['breadcrumbs'][] = ['label' => 'Canonunidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcanon, 'url' => ['view', 'idcanon' => $model->idcanon, 'unidadID' => $model->unidadID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="canonunidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
