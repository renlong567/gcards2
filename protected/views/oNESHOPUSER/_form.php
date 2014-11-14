<?php
/* @var $this ONESHOPUSERController */
/* @var $model ONESHOPUSER */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oneshopuser-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIGAVATAR'); ?>
		<?php echo $form->textField($model,'BIGAVATAR',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'BIGAVATAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MIDDLEAVATAR'); ?>
		<?php echo $form->textField($model,'MIDDLEAVATAR',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'MIDDLEAVATAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SMALLAVATAR'); ?>
		<?php echo $form->textField($model,'SMALLAVATAR',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'SMALLAVATAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREDIT'); ?>
		<?php echo $form->textField($model,'CREDIT',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'CREDIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BALANCE'); ?>
		<?php echo $form->textField($model,'BALANCE'); ?>
		<?php echo $form->error($model,'BALANCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REGTIME'); ?>
		<?php echo $form->textField($model,'REGTIME'); ?>
		<?php echo $form->error($model,'REGTIME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISDELED'); ?>
		<?php echo $form->textField($model,'ISDELED'); ?>
		<?php echo $form->error($model,'ISDELED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REALNAME'); ?>
		<?php echo $form->textField($model,'REALNAME',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'REALNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEX'); ?>
		<?php echo $form->textField($model,'SEX'); ?>
		<?php echo $form->error($model,'SEX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS'); ?>
		<?php echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIRTHDAY'); ?>
		<?php echo $form->textField($model,'BIRTHDAY',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'BIRTHDAY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONTACTEMAIL'); ?>
		<?php echo $form->textField($model,'CONTACTEMAIL',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'CONTACTEMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QQ'); ?>
		<?php echo $form->textField($model,'QQ',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'QQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MSN'); ?>
		<?php echo $form->textField($model,'MSN',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'MSN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AWORD'); ?>
		<?php echo $form->textField($model,'AWORD',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'AWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOMAIN'); ?>
		<?php echo $form->textField($model,'DOMAIN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'DOMAIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NICKNAME'); ?>
		<?php echo $form->textField($model,'NICKNAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'NICKNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PENNAME'); ?>
		<?php echo $form->textField($model,'PENNAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'PENNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CARDNUMBER'); ?>
		<?php echo $form->textField($model,'CARDNUMBER',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'CARDNUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROLES'); ?>
		<?php echo $form->textField($model,'ROLES',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ROLES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESUME'); ?>
		<?php echo $form->textField($model,'RESUME',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'RESUME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PHONE'); ?>
		<?php echo $form->textField($model,'PHONE',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'PHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DETAILADDRESS'); ?>
		<?php echo $form->textField($model,'DETAILADDRESS',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'DETAILADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ZIPCODE'); ?>
		<?php echo $form->textField($model,'ZIPCODE',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ZIPCODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RELATESOURCEID'); ?>
		<?php echo $form->textField($model,'RELATESOURCEID',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'RELATESOURCEID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REGSOURCE'); ?>
		<?php echo $form->textField($model,'REGSOURCE'); ?>
		<?php echo $form->error($model,'REGSOURCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISCHECKEDEMAIL'); ?>
		<?php echo $form->textField($model,'ISCHECKEDEMAIL'); ?>
		<?php echo $form->error($model,'ISCHECKEDEMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISSIGNED'); ?>
		<?php echo $form->textField($model,'ISSIGNED'); ?>
		<?php echo $form->error($model,'ISSIGNED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISINVOKED'); ?>
		<?php echo $form->textField($model,'ISINVOKED'); ?>
		<?php echo $form->error($model,'ISINVOKED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INVOKECODE'); ?>
		<?php echo $form->textField($model,'INVOKECODE',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'INVOKECODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INVOKETIME'); ?>
		<?php echo $form->textField($model,'INVOKETIME'); ?>
		<?php echo $form->error($model,'INVOKETIME'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->