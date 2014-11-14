<div id="content-header">
    <div id="breadcrumb">
        <a href="index.php" class="tip-bottom" title="首页"><i class="icon-home"></i>首页</a>
        <a href="#" class="current">贵宾卡查询</a>
    </div>
</div>
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>贵宾卡查询</h5>
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
                <label class="control-label">贵宾卡卡号 :</label>
                <div class="controls">
                    <?php echo $form->textField($model, 'SN', array('class' => 'span4', 'placeholder' => '贵宾卡卡号')); ?>
                    <span class='zoom' id='ex1'>
                        <img src="images/oldcard.jpg" width="99" height="34" />
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
            <div class="control-group">
                <label class="control-label">业务员 :</label>
                <div class="controls">
                    <?php echo $form->textField($model, 'SALESMAN', array('class' => 'span4', 'placeholder' => '业务员')); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">激活状态 :</label>
                <div class="controls">
                    <?php echo $form->checkBox($model, 'INVOKESTATE[enable]', array('style' => 'opacity: 0;', 'value' => '2', 'uncheckValue' => null)); ?>已激活&nbsp;&nbsp;&nbsp;
                    <?php echo $form->checkBox($model, 'INVOKESTATE[disable]', array('style' => 'opacity: 0;', 'value' => '1', 'uncheckValue' => null)); ?>未激活
                </div>
            </div>
            <div class="form-actions">
                <div style="margin-left: 97px;">
                    <?php echo CHtml::submitButton('查询', array('class' => 'btn btn-success')); ?>
                    <span style="margin-left: 30px;"><?php echo CHtml::button('导出Excel', array('class' => 'btn btn-success', 'id' => 'excel_oldcard')); ?></span>&nbsp;注：无输入条件则导出全部记录
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
            <h5>信息列表</h5>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab0">信息列表</a></li>
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
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'test-grid',
                'dataProvider' => $model->oldsearch(),
//            'filter' => $model,
                'cssFile' => 'css/page.css',
                'pager' => array(
                    'class' => 'MyPage', //定义要调用的分页器类，默认是CLinkPager，需要完全自定义，还可以重写一个，参考我的另一篇博文：http://blog.sina.com.cn/s/blog_71d4414d0100yu6k.html
                    'cssFile' => false, //定义分页器的要调用的css文件，false为不调用，不调用则需要亲自己css文件里写这些样式
                    'header' => '', //定义的文字将显示在pager的最前面
                    'footer' => '', //定义的文字将显示在pager的最后面
                    'firstPageLabel' => '首页', //定义首页按钮的显示文字
                    'lastPageLabel' => '尾页', //定义末页按钮的显示文字
                    'nextPageLabel' => '下一页', //定义下一页按钮的显示文字
                    'prevPageLabel' => '前一页', //定义上一页按钮的显示文字
                ),
                'template' => '{items}<div id="list_footer">{pager}{summary}<div style="clear: both"></div></div>',
                'itemsCssClass' => 'table table-bordered data-table dataTable',
                'htmlOptions' => array('class' => 'tab-pane active'),
                'columns' => array(
                    array(
                        'name' => '所属店名称',
                        'value' => '$data->jcd_name[\'DWMQC\']',
                    ),
                    array(
                        'name' => 'SN',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                    ),
                    array(
                        'name' => 'ADMININVOKETIME',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                        'value' => function($data) {
                    return ($data->ADMININVOKETIME != 0) ? date('Y-m-d H:i:s', $data->ADMININVOKETIME) : '未激活';
                }
                    ),
                    array(
                        'name' => 'SALESMAN',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                    ),
                    array(
                        'name' => 'PAYVALUE',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                    ),
                    array(
                        'name' => 'BALANCE',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                    ),
                    array(
                        'name' => '已消费（元）',
                        'value' => function($data) {
                    return ($data->PAYVALUE - $data->BALANCE);
                }
                    ),
                    array(
                        'name' => 'INVOKESTATE',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                        'value' => function($data) {
                    switch ($data->INVOKESTATE)
                    {
                        case -1:
                            return '已作废';
                        case 1:
                            return '已售出';
                        case 2:
                            return '已售出';
                        default:
                            return null;
                    }
                }
//                        'value' => '$data->USERINVOKETIME',
//                        'type' => 'datetime',
                    ),
                    array(
                        'name' => '最终使用用户',
                        'value' => '$data->users[\'NAME\']',
                    ),
                    array(
                        'name' => 'USEDTIME',
                        'headerHtmlOptions' => array('title' => '点击排序'),
                        'value' => function($data) {
                    return ($data->USEDTIME != 0) ? date('Y-m-d H:i:s', $data->USEDTIME) : '未使用';
                }
                    ),
//                                array(
//                                          'selectableRows' => 2 ,
//                                          'class' => 'CCheckBoxColumn' ,
//                                ) ,
//                    array(
//                        'class' => 'CButtonColumn',
//                        'header' => '操作',
//                        'template' => '{view}',
//                        'template' => '{update}{delete}',
//                        'deleteConfirmation' => "js:'你确定要毙掉 \"'+$(this).parent().parent().children(':first-child').next().text()+'\" 吗？'",
//                    ),
                ),
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>