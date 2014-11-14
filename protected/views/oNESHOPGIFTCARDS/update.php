<?php

/* @var $this ONESHOPGIFTCARDSController */
/* @var $model ONESHOPGIFTCARDS */

$this->breadcrumbs = array(
    'Oneshopgiftcards' => array('index'),
    $model->ID => array('view', 'id' => $model->ID),
    'Update',
);
?>

<?php $this->renderPartial('create', array('model' => $model)); ?>