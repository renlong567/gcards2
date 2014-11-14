<?php
/* @var $this ONESHOPJCDJCXXBController */
/* @var $model ONESHOPJCDJCXXB */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'KHID'); ?>
		<?php echo $form->textField($model,'KHID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DWMQC'); ?>
		<?php echo $form->textField($model,'DWMQC',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DWJC'); ?>
		<?php echo $form->textField($model,'DWJC',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KHLXBH_FK'); ?>
		<?php echo $form->textField($model,'KHLXBH_FK',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JJXZBM_FK'); ?>
		<?php echo $form->textField($model,'JJXZBM_FK',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SFCBS'); ?>
		<?php echo $form->textField($model,'SFCBS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CWKHLB'); ?>
		<?php echo $form->textField($model,'CWKHLB',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KHLB'); ?>
		<?php echo $form->textField($model,'KHLB',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DWDZ'); ?>
		<?php echo $form->textField($model,'DWDZ',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DWDH'); ?>
		<?php echo $form->textField($model,'DWDH',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FR'); ?>
		<?php echo $form->textField($model,'FR',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FRTXTZ'); ?>
		<?php echo $form->textField($model,'FRTXTZ',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FRYB'); ?>
		<?php echo $form->textField($model,'FRYB',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FRDH'); ?>
		<?php echo $form->textField($model,'FRDH',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FRCZ'); ?>
		<?php echo $form->textField($model,'FRCZ',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FREMAIL'); ?>
		<?php echo $form->textField($model,'FREMAIL',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KHYH'); ?>
		<?php echo $form->textField($model,'KHYH',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HH'); ?>
		<?php echo $form->textField($model,'HH',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ZH'); ?>
		<?php echo $form->textField($model,'ZH',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SWH'); ?>
		<?php echo $form->textField($model,'SWH',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SPDH'); ?>
		<?php echo $form->textField($model,'SPDH',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SPDDH'); ?>
		<?php echo $form->textField($model,'SPDDH',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SPQD'); ?>
		<?php echo $form->textField($model,'SPQD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TSDH'); ?>
		<?php echo $form->textField($model,'TSDH',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JSQD'); ?>
		<?php echo $form->textField($model,'JSQD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JSBZ'); ?>
		<?php echo $form->textField($model,'JSBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JSFS'); ?>
		<?php echo $form->textField($model,'JSFS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DZJS'); ?>
		<?php echo $form->textField($model,'DZJS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'XYDJ'); ?>
		<?php echo $form->textField($model,'XYDJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'XZKHBZ'); ?>
		<?php echo $form->textField($model,'XZKHBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'XZDKH'); ?>
		<?php echo $form->textField($model,'XZDKH',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JKBZ'); ?>
		<?php echo $form->textField($model,'JKBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PFBZ'); ?>
		<?php echo $form->textField($model,'PFBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YSK'); ?>
		<?php echo $form->textField($model,'YSK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YFK'); ?>
		<?php echo $form->textField($model,'YFK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KHSDBZ'); ?>
		<?php echo $form->textField($model,'KHSDBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KHJYMM'); ?>
		<?php echo $form->textField($model,'KHJYMM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HTFHZK'); ?>
		<?php echo $form->textField($model,'HTFHZK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HTGHZK'); ?>
		<?php echo $form->textField($model,'HTGHZK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ZKLX'); ?>
		<?php echo $form->textField($model,'ZKLX',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KYBZ'); ?>
		<?php echo $form->textField($model,'KYBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CJRQ'); ?>
		<?php echo $form->textField($model,'CJRQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BZR'); ?>
		<?php echo $form->textField($model,'BZR',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BZ'); ?>
		<?php echo $form->textField($model,'BZ',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BMBH'); ?>
		<?php echo $form->textField($model,'BMBH',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NZXSMY'); ?>
		<?php echo $form->textField($model,'NZXSMY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NZGHMY'); ?>
		<?php echo $form->textField($model,'NZGHMY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DMJB'); ?>
		<?php echo $form->textField($model,'DMJB',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CSPC'); ?>
		<?php echo $form->textField($model,'CSPC',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CSBZ'); ?>
		<?php echo $form->textField($model,'CSBZ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CSCLZT'); ?>
		<?php echo $form->textField($model,'CSCLZT',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FGR'); ?>
		<?php echo $form->textField($model,'FGR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GHSXL'); ?>
		<?php echo $form->textField($model,'GHSXL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'XHDXL'); ?>
		<?php echo $form->textField($model,'XHDXL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TSDW_MCSX'); ?>
		<?php echo $form->textField($model,'TSDW_MCSX',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->