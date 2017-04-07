<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\unidades */

$this->title = 'Update Unidades: ' . $model->unidadID;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unidadID, 'url' => ['view', 'id' => $model->unidadID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
