<?php
/* @var $this ONESHOPJCDJCXXBController */
/* @var $data ONESHOPJCDJCXXB */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KHID')); ?>:</b>
	<?php echo CHtml::encode($data->KHID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DWMQC')); ?>:</b>
	<?php echo CHtml::encode($data->DWMQC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DWJC')); ?>:</b>
	<?php echo CHtml::encode($data->DWJC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KHLXBH_FK')); ?>:</b>
	<?php echo CHtml::encode($data->KHLXBH_FK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JJXZBM_FK')); ?>:</b>
	<?php echo CHtml::encode($data->JJXZBM_FK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SFCBS')); ?>:</b>
	<?php echo CHtml::encode($data->SFCBS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CWKHLB')); ?>:</b>
	<?php echo CHtml::encode($data->CWKHLB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KHLB')); ?>:</b>
	<?php echo CHtml::encode($data->KHLB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DWDZ')); ?>:</b>
	<?php echo CHtml::encode($data->DWDZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DWDH')); ?>:</b>
	<?php echo CHtml::encode($data->DWDH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FR')); ?>:</b>
	<?php echo CHtml::encode($data->FR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FRTXTZ')); ?>:</b>
	<?php echo CHtml::encode($data->FRTXTZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FRYB')); ?>:</b>
	<?php echo CHtml::encode($data->FRYB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FRDH')); ?>:</b>
	<?php echo CHtml::encode($data->FRDH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FRCZ')); ?>:</b>
	<?php echo CHtml::encode($data->FRCZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FREMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->FREMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KHYH')); ?>:</b>
	<?php echo CHtml::encode($data->KHYH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HH')); ?>:</b>
	<?php echo CHtml::encode($data->HH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ZH')); ?>:</b>
	<?php echo CHtml::encode($data->ZH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SWH')); ?>:</b>
	<?php echo CHtml::encode($data->SWH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SPDH')); ?>:</b>
	<?php echo CHtml::encode($data->SPDH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SPDDH')); ?>:</b>
	<?php echo CHtml::encode($data->SPDDH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SPQD')); ?>:</b>
	<?php echo CHtml::encode($data->SPQD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TSDH')); ?>:</b>
	<?php echo CHtml::encode($data->TSDH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JSQD')); ?>:</b>
	<?php echo CHtml::encode($data->JSQD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JSBZ')); ?>:</b>
	<?php echo CHtml::encode($data->JSBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JSFS')); ?>:</b>
	<?php echo CHtml::encode($data->JSFS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DZJS')); ?>:</b>
	<?php echo CHtml::encode($data->DZJS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('XYDJ')); ?>:</b>
	<?php echo CHtml::encode($data->XYDJ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('XZKHBZ')); ?>:</b>
	<?php echo CHtml::encode($data->XZKHBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('XZDKH')); ?>:</b>
	<?php echo CHtml::encode($data->XZDKH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JKBZ')); ?>:</b>
	<?php echo CHtml::encode($data->JKBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PFBZ')); ?>:</b>
	<?php echo CHtml::encode($data->PFBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YSK')); ?>:</b>
	<?php echo CHtml::encode($data->YSK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YFK')); ?>:</b>
	<?php echo CHtml::encode($data->YFK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KHSDBZ')); ?>:</b>
	<?php echo CHtml::encode($data->KHSDBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KHJYMM')); ?>:</b>
	<?php echo CHtml::encode($data->KHJYMM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HTFHZK')); ?>:</b>
	<?php echo CHtml::encode($data->HTFHZK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HTGHZK')); ?>:</b>
	<?php echo CHtml::encode($data->HTGHZK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ZKLX')); ?>:</b>
	<?php echo CHtml::encode($data->ZKLX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KYBZ')); ?>:</b>
	<?php echo CHtml::encode($data->KYBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CJRQ')); ?>:</b>
	<?php echo CHtml::encode($data->CJRQ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BZR')); ?>:</b>
	<?php echo CHtml::encode($data->BZR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BZ')); ?>:</b>
	<?php echo CHtml::encode($data->BZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BMBH')); ?>:</b>
	<?php echo CHtml::encode($data->BMBH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NZXSMY')); ?>:</b>
	<?php echo CHtml::encode($data->NZXSMY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NZGHMY')); ?>:</b>
	<?php echo CHtml::encode($data->NZGHMY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DMJB')); ?>:</b>
	<?php echo CHtml::encode($data->DMJB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CSPC')); ?>:</b>
	<?php echo CHtml::encode($data->CSPC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CSBZ')); ?>:</b>
	<?php echo CHtml::encode($data->CSBZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CSCLZT')); ?>:</b>
	<?php echo CHtml::encode($data->CSCLZT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FGR')); ?>:</b>
	<?php echo CHtml::encode($data->FGR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GHSXL')); ?>:</b>
	<?php echo CHtml::encode($data->GHSXL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('XHDXL')); ?>:</b>
	<?php echo CHtml::encode($data->XHDXL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TSDW_MCSX')); ?>:</b>
	<?php echo CHtml::encode($data->TSDW_MCSX); ?>
	<br />

	*/ ?>

</div>