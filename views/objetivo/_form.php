<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objetivo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_convenio')->textInput() ?>

    <?= $form->field($model, 'texto_objetivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_objetivo_convenio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
