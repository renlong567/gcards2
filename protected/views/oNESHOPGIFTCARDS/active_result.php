<div id="content-header">
    <div id="breadcrumb">
        <a href="index.php" class="tip-bottom" title="首页"><i class="icon-home"></i>首页</a>
        <a href="index.php?r=ONESHOPGIFTCARDS/active" class="tip-bottom" title="读书卡激活">读书卡激活</a>
        <a href="#" class="current">激活结果</a>
    </div>
</div>
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>激活结果</h5>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab0">激活结果</a></li>
        </ul>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'list_table',
            'enableAjaxValidation' => false,
            'htmlOptions' => array('class' => "form-horizontal"),
        ));
        ?>
        <div class="widget-content tab-content">
            <!--<table class="table table-bordered data-table dataTable">-->
                <table class=" table table-bordered table-striped">
               
                <thead>
                    <tr>
                        <th>成功</th>
                        <th>失败</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="50%" style="word-wrap:break-word;word-break:break-all;"><?php echo empty($act_cardid) ? '无' : implode(',', $act_cardid); ?></td>
                        <td width="50%" style="word-wrap:break-word;word-break:break-all;"><?php echo empty($fail_cardid) ? '无' : implode(',', $fail_cardid); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>