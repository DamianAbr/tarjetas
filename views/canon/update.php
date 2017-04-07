<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\canon */

$this->title = 'Update Canon: ' . $model->idcanon;
$this->params['breadcrumbs'][] = ['label' => 'Canons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcanon, 'url' => ['view', 'id' => $model->idcanon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="canon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
