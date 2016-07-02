<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\changeSerach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="change-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'beginDate') ?>

    <?= $form->field($model, 'endDate') ?>

    <?php // echo $form->field($model, 'theme') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'keyman') ?>

    <?php // echo $form->field($model, 'keymanImpact') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'article') ?>

    <?php // echo $form->field($model, 'recordTime') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
