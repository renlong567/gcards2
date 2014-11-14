<div id="content-header">
    <div id="breadcrumb">
        <a href="index.php" title="回到首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
        <a href="index.php?r=ONESHOPGIFTCARDS/index" class="tip-bottom"> 读书卡信息管理</a>
        <a href="javasrcipt:void(0);" class="current"><?php echo $model->ID; ?></a>
    </div>
</div>
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-th"></i>
            </span>
            <h5>成员列表</h5>
            <div id="options">
                <!--<a class="btn btn-success btn-mini" href="index.php?r=ONESHOPORDER/create">添加新成员</a>-->
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab0">所有成员</a></li>
            <?php // $unit = Unit::model()->findAll();      ?>
            <?php // foreach ( $unit as $b ): ?>
                <!--<li><a data-toggle="tab" href="#tab<?php // echo $b['id'];               ?>"><?php // echo $b['name'];               ?></a></li>-->
            <?php // endforeach  ?>
        </ul>
        <div class="widget-content tab-content">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider' => $model,
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
                'id' => 'tab0',
                'columns' => array(
                    'ID',
//                                array(
//                                          'selectableRows' => 2 ,
//                                          'class' => 'CCheckBoxColumn' ,
//                                ) ,
//                    'PHONE',
//                    array(
//                        'name' => 'SN',
//                        'value' => '$data->contactsToString()',
//                                          'type' => 'html',
//                    ),
//                                'sex' ,
//                                'phone' ,
//                                'personal_ID' ,
//                    array(
//                        'class' => 'CButtonColumn',
//                        'header' => '操作',
//                        'template' => '{update}{delete}',
//                        'deleteConfirmation' => "js:'老婆，你确定要毙掉 \"'+$(this).parent().parent().children(':first-child').next().text()+'\" 这娃子吗？'",
//                    ),
                ),
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>