<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoordinadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordinadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Coordinador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_coordinador_convenio',
            'rut_coordinador_convenio',
            'nombre_coordinador_convenio',
            'fecha_inicio',
            'fecha_fin',
            // 'vigente',
            // 'esexterno',
            // 'unidad_academica',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
