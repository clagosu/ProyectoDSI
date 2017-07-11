<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_convenio') ?>

    <?= $form->field($model, 'id_tipo_convenio') ?>

    <?= $form->field($model, 'id_coordinador_convenio') ?>

    <?= $form->field($model, 'id_estado_convenio') ?>

    <?= $form->field($model, 'nombre_convenio') ?>

    <?php // echo $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_termino') ?>

    <?php // echo $form->field($model, 'fecha_firma') ?>

    <?php // echo $form->field($model, 'fecha_decreto') ?>

    <?php // echo $form->field($model, 'numero_decreto') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'vigente') ?>

    <?php // echo $form->field($model, 'vigencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
