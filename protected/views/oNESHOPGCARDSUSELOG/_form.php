<?php
/* @var $this ONESHOPGCARDSUSELOGController */
/* @var $model ONESHOPGCARDSUSELOG */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oneshopgcardsuselog-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDTIME'); ?>
		<?php echo $form->textField($model,'ADDTIME'); ?>
		<?php echo $form->error($model,'ADDTIME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOGTYPE'); ?>
		<?php echo $form->textField($model,'LOGTYPE'); ?>
		<?php echo $form->error($model,'LOGTYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JCDKHID'); ?>
		<?php echo $form->textField($model,'JCDKHID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'JCDKHID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORDERSN'); ?>
		<?php echo $form->textField($model,'ORDERSN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ORDERSN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AMOUNT'); ?>
		<?php echo $form->textField($model,'AMOUNT'); ?>
		<?php echo $form->error($model,'AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'DESCRIPTION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->