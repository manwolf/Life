<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\database\Change */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="change-form">

    <?php $form = ActiveForm::begin([
        'id' => 'change-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-10\">{input}</div>\n<div class=\"col-lg-20\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'user')->hiddenInput(['value'=>1])?>
	<?= $form->field($model, 'type')->radioList(array(1=>'变化',2=>'不变'))?>
    <?= $form->field($model, 'theme')->textInput(['maxlength' => true,'autofocus' => true]) ?>

    <?= $form->field($model, 'beginDate')-> widget(DatePicker::className(),
    		[        'inline' => true, 
    				'language' => 'zh-CN' ,
    				'clientOptions'=>['autoclose' => false,	]])
    ->textInput(['placeholder'=>Yii::t('app', '开始日期')])?>

    <?= $form->field($model, 'endDate')->widget(DatePicker::className(),
    		[        'inline' => true, 
    				'language' => 'zh-CN' ,
    				'clientOptions'=>['autoclose' => false,	]])    
    ->textInput() ?>


    <?= $form->field($model, 'keywords')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keymanImpact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->radioList(array(1=>'积极',2=>'消极'))?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    	<?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>    	
    </div>

    <?php ActiveForm::end(); ?>

</div>
