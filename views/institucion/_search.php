<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstitucionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institucion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tipo_institucion') ?>

    <?= $form->field($model, 'nombre_institucion') ?>

    <?= $form->field($model, 'id_institucion') ?>

    <?= $form->field($model, 'id_pais') ?>

    <?= $form->field($model, 'vigente') ?>

    <?php // echo $form->field($model, 'id_internacional') ?>

    <?php // echo $form->field($model, 'rut_institucion') ?>

    <?php // echo $form->field($model, 'razon_social_institucion') ?>

    <?php // echo $form->field($model, 'direccion_institucion') ?>

    <?php // echo $form->field($model, 'telefono_institucion') ?>

    <?php // echo $form->field($model, 'email_institucion') ?>

    <?php // echo $form->field($model, 'link_institucion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
