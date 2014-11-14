<?php
/* @var $this ONESHOPJCDJCXXBController */
/* @var $model ONESHOPJCDJCXXB */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oneshopjcdjcxxb-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'KHID'); ?>
		<?php echo $form->textField($model,'KHID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'KHID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DWMQC'); ?>
		<?php echo $form->textField($model,'DWMQC',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'DWMQC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DWJC'); ?>
		<?php echo $form->textField($model,'DWJC',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DWJC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KHLXBH_FK'); ?>
		<?php echo $form->textField($model,'KHLXBH_FK',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KHLXBH_FK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JJXZBM_FK'); ?>
		<?php echo $form->textField($model,'JJXZBM_FK',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'JJXZBM_FK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SFCBS'); ?>
		<?php echo $form->textField($model,'SFCBS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'SFCBS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CWKHLB'); ?>
		<?php echo $form->textField($model,'CWKHLB',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CWKHLB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KHLB'); ?>
		<?php echo $form->textField($model,'KHLB',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KHLB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DWDZ'); ?>
		<?php echo $form->textField($model,'DWDZ',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DWDZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DWDH'); ?>
		<?php echo $form->textField($model,'DWDH',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'DWDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FR'); ?>
		<?php echo $form->textField($model,'FR',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'FR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FRTXTZ'); ?>
		<?php echo $form->textField($model,'FRTXTZ',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'FRTXTZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FRYB'); ?>
		<?php echo $form->textField($model,'FRYB',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'FRYB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FRDH'); ?>
		<?php echo $form->textField($model,'FRDH',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'FRDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FRCZ'); ?>
		<?php echo $form->textField($model,'FRCZ',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'FRCZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FREMAIL'); ?>
		<?php echo $form->textField($model,'FREMAIL',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FREMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KHYH'); ?>
		<?php echo $form->textField($model,'KHYH',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'KHYH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HH'); ?>
		<?php echo $form->textField($model,'HH',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'HH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ZH'); ?>
		<?php echo $form->textField($model,'ZH',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'ZH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SWH'); ?>
		<?php echo $form->textField($model,'SWH',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SWH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SPDH'); ?>
		<?php echo $form->textField($model,'SPDH',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SPDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SPDDH'); ?>
		<?php echo $form->textField($model,'SPDDH',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'SPDDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SPQD'); ?>
		<?php echo $form->textField($model,'SPQD'); ?>
		<?php echo $form->error($model,'SPQD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TSDH'); ?>
		<?php echo $form->textField($model,'TSDH',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TSDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JSQD'); ?>
		<?php echo $form->textField($model,'JSQD'); ?>
		<?php echo $form->error($model,'JSQD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JSBZ'); ?>
		<?php echo $form->textField($model,'JSBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'JSBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JSFS'); ?>
		<?php echo $form->textField($model,'JSFS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'JSFS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DZJS'); ?>
		<?php echo $form->textField($model,'DZJS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'DZJS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'XYDJ'); ?>
		<?php echo $form->textField($model,'XYDJ'); ?>
		<?php echo $form->error($model,'XYDJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'XZKHBZ'); ?>
		<?php echo $form->textField($model,'XZKHBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'XZKHBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'XZDKH'); ?>
		<?php echo $form->textField($model,'XZDKH',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'XZDKH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JKBZ'); ?>
		<?php echo $form->textField($model,'JKBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'JKBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PFBZ'); ?>
		<?php echo $form->textField($model,'PFBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'PFBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YSK'); ?>
		<?php echo $form->textField($model,'YSK'); ?>
		<?php echo $form->error($model,'YSK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YFK'); ?>
		<?php echo $form->textField($model,'YFK'); ?>
		<?php echo $form->error($model,'YFK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KHSDBZ'); ?>
		<?php echo $form->textField($model,'KHSDBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KHSDBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KHJYMM'); ?>
		<?php echo $form->textField($model,'KHJYMM',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'KHJYMM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HTFHZK'); ?>
		<?php echo $form->textField($model,'HTFHZK'); ?>
		<?php echo $form->error($model,'HTFHZK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HTGHZK'); ?>
		<?php echo $form->textField($model,'HTGHZK'); ?>
		<?php echo $form->error($model,'HTGHZK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ZKLX'); ?>
		<?php echo $form->textField($model,'ZKLX',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ZKLX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KYBZ'); ?>
		<?php echo $form->textField($model,'KYBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KYBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CJRQ'); ?>
		<?php echo $form->textField($model,'CJRQ'); ?>
		<?php echo $form->error($model,'CJRQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BZR'); ?>
		<?php echo $form->textField($model,'BZR',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'BZR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BZ'); ?>
		<?php echo $form->textField($model,'BZ',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'BZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BMBH'); ?>
		<?php echo $form->textField($model,'BMBH',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'BMBH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NZXSMY'); ?>
		<?php echo $form->textField($model,'NZXSMY'); ?>
		<?php echo $form->error($model,'NZXSMY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NZGHMY'); ?>
		<?php echo $form->textField($model,'NZGHMY'); ?>
		<?php echo $form->error($model,'NZGHMY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DMJB'); ?>
		<?php echo $form->textField($model,'DMJB',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'DMJB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CSPC'); ?>
		<?php echo $form->textField($model,'CSPC',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'CSPC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CSBZ'); ?>
		<?php echo $form->textField($model,'CSBZ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CSBZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CSCLZT'); ?>
		<?php echo $form->textField($model,'CSCLZT',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CSCLZT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FGR'); ?>
		<?php echo $form->textField($model,'FGR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FGR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GHSXL'); ?>
		<?php echo $form->textField($model,'GHSXL',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'GHSXL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'XHDXL'); ?>
		<?php echo $form->textField($model,'XHDXL',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'XHDXL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TSDW_MCSX'); ?>
		<?php echo $form->textField($model,'TSDW_MCSX',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'TSDW_MCSX'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->