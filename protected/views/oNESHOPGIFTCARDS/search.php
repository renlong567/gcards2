<?php
/* @var $this ONESHOPGIFTCARDSController */
/* @var $model ONESHOPGIFTCARDS */

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
<!--<div style="display:block;">-->
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
<!--</div>-->