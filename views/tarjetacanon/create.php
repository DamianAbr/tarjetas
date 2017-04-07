<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tarjetacanon */

$this->title = 'Create Tarjetacanon';
$this->params['breadcrumbs'][] = ['label' => 'Tarjetacanons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarjetacanon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
