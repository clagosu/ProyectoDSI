<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivo */

$this->title = $model->id_objetivo_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Objetivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_objetivo_convenio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_objetivo_convenio], [
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
            'id_convenio',
            'texto_objetivo',
            'vigente',
            'id_objetivo_convenio',
        ],
    ]) ?>

</div>
