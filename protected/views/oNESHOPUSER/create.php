<?php
/* @var $this ONESHOPUSERController */
/* @var $model ONESHOPUSER */

$this->breadcrumbs=array(
	'Oneshopusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ONESHOPUSER', 'url'=>array('index')),
	array('label'=>'Manage ONESHOPUSER', 'url'=>array('admin')),
);
?>

<h1>Create ONESHOPUSER</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>