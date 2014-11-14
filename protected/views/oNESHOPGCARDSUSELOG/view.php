<?php
/* @var $this ONESHOPGCARDSUSELOGController */
/* @var $model ONESHOPGCARDSUSELOG */

$this->breadcrumbs=array(
	'oneshopgcardsuselogs'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ONESHOPGCARDSUSELOG', 'url'=>array('index')),
	array('label'=>'Create ONESHOPGCARDSUSELOG', 'url'=>array('create')),
	array('label'=>'Update ONESHOPGCARDSUSELOG', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ONESHOPGCARDSUSELOG', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ONESHOPGCARDSUSELOG', 'url'=>array('admin')),
);
?>

<h1>View ONESHOPGCARDSUSELOG #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ADDTIME',
		'LOGTYPE',
		'JCDKHID',
		'ORDERSN',
		'AMOUNT',
		'DESCRIPTION',
	),
)); ?>
