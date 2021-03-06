<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CopiadoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="copiadora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_COPIADORA') ?>

    <?= $form->field($model, 'ID_DEPARTAMENTO') ?>

    <?= $form->field($model, 'DESCRIPCION') ?>

    <?= $form->field($model, 'FECHA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
