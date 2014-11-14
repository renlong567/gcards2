<?php
/* @var $this ONESHOPGIFTCARDSController */
/* @var $model ONESHOPGIFTCARDS */

$this->breadcrumbs=array(
	'Oneshopgiftcards'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ONESHOPGIFTCARDS', 'url'=>array('index')),
	array('label'=>'Create ONESHOPGIFTCARDS', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#oneshopgiftcards-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Oneshopgiftcards</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'oneshopgiftcards-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'CATEGORYID',
		'SN',
		'PWD',
		'ADDTIME',
		'USEDTIME',
		/*
		'ORDERSN',
		'USERID',
		'USEDSTATE',
		'EXPIREDTIME',
		'ADMININVOKETIME',
		'CREATOR',
		'ADMININVOKOR',
		'BALANCE',
		'INVOKESTATE',
		'USERINVOKETIME',
		'PAYVALUE',
		'ISPHYSICAL',
		'ISONSALE',
		'ISSALED',
		'RECHARGENAME',
		'RECHARGETIME',
		'AGENTID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
