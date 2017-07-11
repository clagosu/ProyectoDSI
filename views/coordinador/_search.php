<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_coordinador_convenio') ?>

    <?= $form->field($model, 'rut_coordinador_convenio') ?>

    <?= $form->field($model, 'nombre_coordinador_convenio') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?= $form->field($model, 'fecha_fin') ?>

    <?php // echo $form->field($model, 'vigente') ?>

    <?php // echo $form->field($model, 'esexterno') ?>

    <?php // echo $form->field($model, 'unidad_academica') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
