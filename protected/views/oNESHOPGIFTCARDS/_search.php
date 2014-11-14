<?php
/* @var $this ONESHOPGIFTCARDSController */
/* @var $model ONESHOPGIFTCARDS */
/* @var $form CActiveForm */
?>

<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>信息搜索</h5>
        </div>

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'action' => Yii::app()->createUrl($this->route),
            'method' => 'get',
            'htmlOptions' => array('class' => "form-horizontal"),
        ));
        ?>
        <div class="control-group">
            <label class="control-label">读书卡ID :</label>
            <div class="controls">
                <?php echo $form->textField($model, 'ID', array('class' => 'span6', 'placeholder' => '读书卡ID')); ?>
                <?php echo $form->error($model, 'ID'); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">激活日期搜索 :</label>
            <div class="controls">
                开始日期：<?php echo CHtml::textField('start_date', '', array('class' => 'span2', 'placeholder' => '开始日期')); ?>
                <?php // echo $form->error($model, 'USERINVOKETIME'); ?>
                结束日期：<?php echo CHtml::textField('end_date', '', array('class' => 'span2', 'placeholder' => '结束日期')); ?>
                <?php // echo $form->error($model, 'USERINVOKETIME'); ?>
            </div>
        </div>
        <div class="form-actions">
            <?php echo CHtml::submitButton('搜索', array('class' => 'btn btn-success')); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>搜索结果</h5>
        </div>
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
                'dataProvider' => $model->search(),
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
                    'ID',
                    'PAYVALUE',
                    'BALANCE',
                    array(
                        'name' => '绑定用户',
                        'value' => '$data->users[\'NAME\']',
//                        'value' => function($data) {
//                    var_dump($data);
//                    exit;
//                }
                    ),
                    array(
                        'name' => 'USERINVOKETIME',
                        'value' => function($data) {
                    return ($data->USERINVOKETIME != 0) ? date('Y-m-d H:i:s', $data->USERINVOKETIME) : '未激活';
                }
//                        'value' => '$data->USERINVOKETIME',
//                        'type' => 'datetime',
                    ),
                    array(
                        'name' => 'USEDTIME',
                        'value' => function($data) {
                    return ($data->USEDTIME != 0) ? date('Y-m-d H:i:s', $data->USEDTIME) : '未使用';
                }
//                        'type' => 'datetime',
                    ),
                ),
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>