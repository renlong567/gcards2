<?php
/* @var $this ONESHOPUSERController */
/* @var $model ONESHOPUSER */

$this->breadcrumbs=array(
	'Oneshopusers'=>array('index'),
	$model->NAME=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ONESHOPUSER', 'url'=>array('index')),
	array('label'=>'Create ONESHOPUSER', 'url'=>array('create')),
	array('label'=>'View ONESHOPUSER', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage ONESHOPUSER', 'url'=>array('admin')),
);
?>

<h1>Update ONESHOPUSER <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>