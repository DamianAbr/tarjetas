<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\canon */

$this->title = 'Create Canon';
$this->params['breadcrumbs'][] = ['label' => 'Canons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
