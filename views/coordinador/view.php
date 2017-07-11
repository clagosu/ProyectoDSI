<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinador */

$this->title = $model->id_coordinador_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Coordinadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_coordinador_convenio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_coordinador_convenio], [
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
            'id_coordinador_convenio',
            'rut_coordinador_convenio',
            'nombre_coordinador_convenio',
            'fecha_inicio',
            'fecha_fin',
            'vigente',
            'esexterno',
            'unidad_academica',
            'email:email',
        ],
    ]) ?>

</div>
