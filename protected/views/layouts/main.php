<!DOCTYPE html>
<html>
    <head>
        <title>云书网读书卡管理系统</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
        <link rel="stylesheet" href="css/matrix-style.css" />
        <link rel="stylesheet" href="css/matrix-media.css" />
        <link rel="stylesheet" href="css/font-awesome.css"  />  <!--显示小标签-->
        <link rel="stylesheet" href="css/uniform.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="js/jBox/Skins/Red/jbox.css" rel="stylesheet" type="text/css" />
        <script src="js/common.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/excanvas.min.js"></script>
        <script src="js/jquery.ui.custom.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/matrix.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/matrix.form_common.js"></script>
        <script src="js/bootstrap-colorpicker.js"></script>
        <script src="js/jquery.uniform.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jBox/jquery.jBox-2.3.min.js"></script>
        <script src="js/jBox/jquery.jBox-zh-CN.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            function noNumbers(e)
            {
                var keynum;

                if (window.event) // IE
                {
                    keynum = e.keyCode;
                }
                else if (e.which) // Netscape/Firefox/Opera
                {
                    keynum = e.which;
                }
                if (keynum == 13)
                {
                    return false;
                }
            }
        </script>
        <!--Header-part-->
        <div id="header">
            <h1></h1>
        </div>
        <!--close-Header-part--> 

        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li class="">
                    <a title="" href="javascript:;">
                        <i class="icon icon-user"></i> 
                        <span class="text">您好,<?php echo Yii::app()->user->dwmqc . '的' . Yii::app()->user->name; ?>！</span>
                    </a>
                </li>
                <li class=""><a title="退出" href="index.php?r=ONESHOPGIFTCARDS/logout"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
            </ul>
        </div>
        <!--close-top-Header-menu-->

        <!--sidebar-menu-->
        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
            <ul>
                <?php
                $act_id = strtoupper(Yii::app()->controller->id);
                $r = $act_id . '/' . $this->getAction()->getId();
//                $navs = array(
//                    '读书卡查询' => array(
//                        'ONESHOPGIFTCARDS/index',
//                        'icon-file',
//                        array(
////                            '所有成员列表' => 'ONESHOPORDER/index',
////                            '分组显示' => '#',
//                        )
//                    ),
//                    '读书卡激活' => array(
//                        'ONESHOPGIFTCARDS/active',
//                        'icon-file',
//                        array(
////                            '所有成员列表' => 'ONESHOPORDER/index',
////                            '分组显示' => '#',
//                        )
//                    ),
//                    '读书卡统计' => array('ONESHOPGIFTCARDS/count', 'icon-file', array()),
//                    '贵宾卡查询' => array('ONESHOPGIFTCARDS/oldcard', 'icon-file', array()),
//                    '贵宾卡统计' => array('ONESHOPGIFTCARDS/oldcardcount', 'icon-file', array()),
//                    '实体店消费记录查询' => array('ONESHOPGCARDSUSELOG/index', 'icon-file', array()),
//                    '登陆密码修改' => array('ONESHOPGIFTCARDS/update', 'icon-file', array()),
//                    '帮助' => array('ONESHOPGIFTCARDS/help', 'icon-file', array()),
//                );

                $navs = array(
                    '查询' => array(
                        '',
                        'icon-file',
                        array(
                            '读书卡查询' => 'ONESHOPGIFTCARDS/index',
                            '贵宾卡查询' => 'ONESHOPGIFTCARDS/oldcard',
                            '实体店消费记录查询' => 'ONESHOPGCARDSUSELOG/index',
                        )
                    ),
                    '激活' => array(
                        '',
                        'icon-file',
                        array(
                            '读书卡激活' => 'ONESHOPGIFTCARDS/active',
                        )
                    ),
                    '统计' => array(
                        '',
                        'icon-file',
                        array(
                            '读书卡统计' => 'ONESHOPGIFTCARDS/count',
                            '贵宾卡统计' => 'ONESHOPGIFTCARDS/oldcardcount',
                            '刷卡信息统计' => 'ONESHOPGCARDSUSELOG/count',
                        )
                    ),
                    '修改' => array(
                        '',
                        'icon-file',
                        array(
                            '登陆密码修改' => 'ONESHOPGIFTCARDS/update',
                        )
                    ),
                    '帮助' => array('ONESHOPGIFTCARDS/help', 'icon-file', array()),
                );

                $html = '';
                foreach ($navs as $key => $value)
                {
                    $num = $child = '';
                    $class = $r == $value[0] ? 'active ' : '';
                    $url = "index.php?r={$value[0]}";
                    $count = count($value[2]);
                    if ($count > 0)
                    {
                        $show = '';
                        $url = '#';
                        $class .= 'submenu ';
                        if (in_array($r, $value[2]))
                        {
                            $class .= 'active nobdtom';
                            $show = 'style="display:block"';
                        }
                        $num = "<span class='label label-important'>{$count}</span>";
                        $child = "<ul {$show}>";
                        foreach ($value[2] as $k => $v)
                        {
                            $cs = $r == $v ? 'current ' : '';
                            $child .= <<<ETO
                                <li><a class="{$cs}" href="index.php?r={$v}">{$k}</a></li>
ETO;
                        }
                        $child .= '</ul>';
                    }
                    $html .= <<<ETO
                        <li class="{$class}"><a href="{$url}"><i class="icon {$value[1]}"></i><span>{$key}</span>{$num}</a>{$child}</li>
ETO;
                }
                echo $html;
                ?>
            </ul>
        </div>
        <!--sidebar-menu-->

        <!--main-container-part-->
        <div id="content">
            <?php echo $content; ?>
        </div>
        <!--end-main-container-part-->

        <!--Footer-part-->
        <div class="row-fluid">
            <div id="footer" class="span12"> 2014 &copy; Coded by R.L of the iyunshu.com </div>
        </div>
        <!--end-Footer-part-->
    </body>
</html>