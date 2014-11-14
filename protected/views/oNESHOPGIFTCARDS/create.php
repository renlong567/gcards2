<div id="content-header">
    <div id="breadcrumb">
        <a href="index.php" class="tip-bottom" title="首页"><i class="icon-home"></i>首页</a>
        <a href="index.php?r=ONESHOPGIFTCARDS/update" class="tip-bottom" title="登陆密码修改"><i></i>登陆密码修改</a>
        <a href="#" class="current"><?php echo '修改 ' . Yii::app()->user->name . ' 的登陆密码'; ?></a>
    </div>
</div>
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>登陆密码修改</h5>
        </div>
        <div class="widget-content nopadding">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'update',
                'htmlOptions' => array('class' => "form-horizontal"),
                'enableAjaxValidation' => false,
            ));
            ?>
            <div class="control-group">
                <label class="control-label">输入旧密码 :</label>
                <div class="controls">
                    <?php echo CHtml::passwordField('ONESHOPJCDJCXXB[USEDUSERPASS]', '', array('class' => 'span4', 'onkeypress' => 'return noNumbers(event)')); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">输入新密码 :</label>
                <div class="controls">
                    <?php echo CHtml::passwordField('ONESHOPJCDJCXXB[USERPASS]', '', array('class' => 'span4', 'onkeypress' => 'return noNumbers(event)')); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">再次输入新密码 :</label>
                <div class="controls">
                    <?php echo CHtml::passwordField('ONESHOPJCDJCXXB[USERPASS1]', '', array('class' => 'span4', 'onkeypress' => 'return noNumbers(event)')); ?>
                </div>
            </div>
            <div class="form-actions">
                <div style="margin-left: 97px;">
                    <?php echo CHtml::button('提交修改', array('class' => 'btn btn-success', 'onclick' => "ajaxSubmitForm('#update', 'update')")); ?>
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>