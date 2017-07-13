<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjetivoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objetivo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_convenio') ?>

    <?= $form->field($model, 'texto_objetivo') ?>

    <?= $form->field($model, 'vigente') ?>

    <?= $form->field($model, 'id_objetivo_convenio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
