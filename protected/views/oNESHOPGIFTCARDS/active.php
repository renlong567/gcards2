<div id="content-header">
    <div id="breadcrumb">
        <a href="index.php" class="tip-bottom" title="首页"><i class="icon-home"></i>首页</a>
        <a href="#" class="current">读书卡激活</a>
    </div>
</div>
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>读书卡激活</h5>
        </div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'active',
            'htmlOptions' => array('class' => "form-horizontal"),
            'enableAjaxValidation' => false,
        ));
        ?>
        <div class="control-group">
            <label class="control-label">输入激活ID :</label>
            <div class="controls">
                <?php echo $form->textField($model, 'ID', array('class' => 'span4', 'placeholder' => '例:1,2,3-10', 'onkeypress' => 'return noNumbers(event)')); ?>
                例:1,2,3-10
                <span class='zoom' id='ex1'>
                    <img src="images/cardid.jpg" width="99" height="34" />
                </span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">所属业务员 :</label>
            <div class="controls">
                <?php echo $form->textField($model, 'SALESMAN', array('class' => 'span4', 'onkeypress' => 'return noNumbers(event)')); ?>
            </div>
        </div>
        <div class="form-actions">
            <div style="margin-left: 97px;">
                <?php echo CHtml::button('激活', array('class' => 'btn btn-success', 'onclick' => "ajaxSubmitForm('#active', 'add')")); ?>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'list_table',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => "form-horizontal"),
        ));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'test-grid',
    'dataProvider' => $model->card_count(),
    'cssFile' => 'css/page.css',
    'template' => '',
    'itemsCssClass' => 'table table-bordered data-table dataTable',
    'htmlOptions' => array('class' => 'tab-pane active'),
    'columns' => array(
        array(
            'name' => '',
            'value' => '',
        ),
    ),
));
$this->endWidget();
?>