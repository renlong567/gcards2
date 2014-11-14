<?php
/* @var $this ONESHOPUSERController */
/* @var $model ONESHOPUSER */

//$this->breadcrumbs=array(
//	'Oneshopusers'=>array('index'),
//	'Manage',
//);

//$this->menu=array(
//	array('label'=>'List ONESHOPUSER', 'url'=>array('index')),
//	array('label'=>'Create ONESHOPUSER', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#oneshopuser-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'oneshopuser-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'NAME',
		'PASSWORD',
		'EMAIL',
//		'BIGAVATAR',
//		'MIDDLEAVATAR',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
