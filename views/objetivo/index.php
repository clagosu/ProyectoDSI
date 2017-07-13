<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjetivoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objetivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Objetivo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_convenio',
            'texto_objetivo',
            'vigente',
            'id_objetivo_convenio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
