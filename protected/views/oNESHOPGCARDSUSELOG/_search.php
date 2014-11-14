<?php
/* @var $this ONESHOPGCARDSUSELOGController */
/* @var $model ONESHOPGCARDSUSELOG */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDTIME'); ?>
		<?php echo $form->textField($model,'ADDTIME'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOGTYPE'); ?>
		<?php echo $form->textField($model,'LOGTYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JCDKHID'); ?>
		<?php echo $form->textField($model,'JCDKHID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORDERSN'); ?>
		<?php echo $form->textField($model,'ORDERSN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AMOUNT'); ?>
		<?php echo $form->textField($model,'AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->