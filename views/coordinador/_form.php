<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rut_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inicio')->Input("date") ?>

    <?= $form->field($model, 'fecha_fin')->Input("date") ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esexterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unidad_academica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
