<?php
/* @var $this ONESHOPGCARDSUSELOGController */
/* @var $data ONESHOPGCARDSUSELOG */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDTIME')); ?>:</b>
	<?php echo CHtml::encode($data->ADDTIME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOGTYPE')); ?>:</b>
	<?php echo CHtml::encode($data->LOGTYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JCDKHID')); ?>:</b>
	<?php echo CHtml::encode($data->JCDKHID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORDERSN')); ?>:</b>
	<?php echo CHtml::encode($data->ORDERSN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->AMOUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>