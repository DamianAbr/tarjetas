<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\canonunidad */

$this->title = 'Create Canonunidad';
$this->params['breadcrumbs'][] = ['label' => 'Canonunidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canonunidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
