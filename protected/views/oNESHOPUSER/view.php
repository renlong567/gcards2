<?php
/* @var $this ONESHOPUSERController */
/* @var $model ONESHOPUSER */

$this->breadcrumbs=array(
	'Oneshopusers'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List ONESHOPUSER', 'url'=>array('index')),
	array('label'=>'Create ONESHOPUSER', 'url'=>array('create')),
	array('label'=>'Update ONESHOPUSER', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ONESHOPUSER', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ONESHOPUSER', 'url'=>array('admin')),
);
?>

<h1>View ONESHOPUSER #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NAME',
		'PASSWORD',
		'EMAIL',
		'BIGAVATAR',
		'MIDDLEAVATAR',
		'SMALLAVATAR',
		'CREDIT',
		'BALANCE',
		'REGTIME',
		'ISDELED',
		'REALNAME',
		'SEX',
		'ADDRESS',
		'BIRTHDAY',
		'CONTACTEMAIL',
		'QQ',
		'MSN',
		'AWORD',
		'DOMAIN',
		'NICKNAME',
		'PENNAME',
		'CARDNUMBER',
		'ROLES',
		'RESUME',
		'PHONE',
		'DETAILADDRESS',
		'ZIPCODE',
		'RELATESOURCEID',
		'REGSOURCE',
		'ISCHECKEDEMAIL',
		'ISSIGNED',
		'ISINVOKED',
		'INVOKECODE',
		'INVOKETIME',
	),
)); ?>
