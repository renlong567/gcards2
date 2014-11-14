<div id="content-header">
    <div id="breadcrumb">
        <a href="index.php" class="tip-bottom" title="首页"><i class="icon-home"></i>首页</a>
        <a href="#" class="current">读书卡统计</a>
    </div>
</div>
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>读书卡统计</h5>
        </div>
        <div class="search-form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'action' => Yii::app()->createUrl($this->route),
                'method' => 'post',
                'htmlOptions' => array('class' => "form-horizontal"),
            ));
            ?>
            <div class="control-group">
                <label class="control-label">读书卡ID :</label>
                <div class="controls">
                    <?php echo $form->textField($model, 'ID', array('class' => 'span4', 'placeholder' => '读书卡ID')); ?>
                    例:1-100
                    <span class='zoom' id='ex1'>
                        <img src="images/cardid.jpg" width="99" height="34" />
                    </span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">申领时间 :</label>
                <div class="controls">
                    <?php echo $form->textField($model, 'BINDTIME[start_date]', array('class' => 'datepicker span2', 'data-date-format' => 'yyyy-mm-dd', 'placeholder' => '开始日期')); ?>
                    <span style=" font-size: 14px;margin: 0 19px;">至</span>
                    <?php echo $form->textField($model, 'BINDTIME[end_date]', array('class' => 'datepicker span2', 'data-date-format' => 'yyyy-mm-dd', 'placeholder' => '结束日期')); ?>
                    例:2014-01-01&nbsp;&nbsp;&nbsp;注:申领时间为基层店在省店财务领卡时间
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">激活时间 :</label>
                <div class="controls">
                    <?php echo $form->textField($model, 'ADMININVOKETIME[start_date]', array('class' => 'datepicker span2', 'data-date-format' => 'yyyy-mm-dd', 'placeholder' => '开始日期')); ?>
                    <span style=" font-size: 14px;margin: 0 19px;">至</span>
                    <?php echo $form->textField($model, 'ADMININVOKETIME[end_date]', array('class' => 'datepicker span2', 'data-date-format' => 'yyyy-mm-dd', 'placeholder' => '结束日期')); ?>
                    例:2014-01-01
                </div>
            </div>
            <!--            <div class="control-group">
                            <label class="control-label">激活状态 :</label>
                            <div class="controls">
            <?php // echo $form->checkBox($model, 'INVOKESTATE[enable]', array('style' => 'opacity: 0;', 'value' => '2', 'uncheckValue' => null)); ?>已激活&nbsp;&nbsp;&nbsp;
            <?php // echo $form->checkBox($model, 'INVOKESTATE[disable]', array('style' => 'opacity: 0;', 'value' => '1', 'uncheckValue' => null)); ?>未激活
                            </div>
                        </div>-->
            <div class="control-group">
                <label class="control-label">业务员 :</label>
                <div class="controls">
                    <?php echo $form->textField($model, 'SALESMAN', array('class' => 'span4', 'placeholder' => '业务员')); ?>
                </div>
            </div>
            <div class="form-actions">
                <div style="margin-left: 97px;">
                    <?php echo CHtml::submitButton('统计', array('class' => 'btn btn-success')); ?>
                    <span style="margin-left: 30px;"><?php echo CHtml::button('导出Excel', array('class' => 'btn btn-success', 'id' => 'excel_count')); ?></span>&nbsp;注：无输入条件则导出全部记录
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>统计结果</h5>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab0">统计结果</a></li>
        </ul>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'list_table',
            'enableAjaxValidation' => false,
            'htmlOptions' => array('class' => "form-horizontal"),
        ));
        ?>
        <div class="widget-content tab-content">
            <?php
            if (!$stat):
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'test-grid',
                    'dataProvider' => $model->card_count(),
                    'cssFile' => 'css/page.css',
                    'template' => '{items}',
                    'itemsCssClass' => 'table table-bordered data-table dataTable',
                    'htmlOptions' => array('class' => 'tab-pane active'),
                    'columns' => array(
                        array(
                            'name' => '读书卡号段',
                            'value' => '',
                        ),
                        array(
                            'name' => '面值总计（元）',
                            'value' => ''
                        ),
                        array(
                            'name' => '余额总计（元）',
                            'value' => ''
                        ),
                        array(
                            'name' => '已消费总计（元）',
                            'value' => ''
                        ),
                        array(
                            'name' => '已激活卡总计（张）',
                            'value' => "'$state_en_count'"
                        ),
                        array(
                            'name' => '已激活卡面值总计（元）',
                            'value' => "'$state_en_palvalue_count'"
                        ),
                        array(
                            'name' => '未激活卡总计（张）',
                            'value' => "'$state_dis_count'"
                        ),
                        array(
                            'name' => '已售出卡总计（张）',
                            'value' => "'$used_count'"
                        ),
                        array(
                            'name' => '未售出卡总计（张）',
                            'value' => "'$unused_count'"
                        ),
                    ),
                ));
            else :
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'test-grid',
                    'dataProvider' => $model->card_count(),
                    'cssFile' => 'css/page.css',
                    'template' => '{items}',
                    'itemsCssClass' => 'table table-bordered data-table dataTable',
                    'htmlOptions' => array('class' => 'tab-pane active'),
                    'columns' => array(
                        array(
                            'name' => '读书卡号段',
                            'value' => "'$id_range'",
                        ),
                        array(
                            'name' => '面值总计（元）',
                            'value' => function($data) {
                        return $data['PAYVALUE'];
                    }
                        ),
                        array(
                            'name' => '余额总计（元）',
                            'value' => function($data) {
                        return $data['BALANCE'];
                    }
                        ),
                        array(
                            'name' => '已消费总计（元）',
                            'value' => function ($data) {
                        return ($data['PAYVALUE'] - $data['BALANCE']);
                    }
                        ),
                        array(
                            'name' => '已激活卡总计（张）',
                            'value' => "'$state_en_count'"
                        ),
                        array(
                            'name' => '已激活卡面值总计（元）',
                            'value' => "'$state_en_palvalue_count'"
                        ),
                        array(
                            'name' => '未激活卡总计（张）',
                            'value' => "'$state_dis_count'"
                        ),
                        array(
                            'name' => '已售出卡总计（张）',
                            'value' => "'$used_count'"
                        ),
                        array(
                            'name' => '未售出卡总计（张）',
                            'value' => "'$unused_count'"
                        ),
                    ),
                ));
            endif;
            ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>