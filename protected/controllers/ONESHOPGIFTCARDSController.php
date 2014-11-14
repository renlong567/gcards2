<?php

class ONESHOPGIFTCARDSController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('login', 'captcha'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'logout', 'excel', 'count', 'active', 'active_result', 'update', 'excelcount', 'oldcard', 'exceloldcard', 'oldcardcount', 'exceloldcardcount', 'help', 'error'),
                'users' => array('@'),
            ),
//            array('allow',
//                'actions' => array('oldcard', 'exceloldcard', 'oldcardcount', 'exceloldcardcount'),
//                'expression' => 'yii::app()->user->isAdmin()',
//            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'maxLength' => '8', // 最多生成几个字符
                'minLength' => '7', // 最少生成几个字符
                'height' => '70',
                'width' => '180',
                'testLimit' => '0'
            )
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $agentid = Yii::app()->user->id;

        $where = ' AND "t"' . '."ID"' . "=$id";
        $dataProvider = new CActiveDataProvider('ONESHOPGIFTCARDS', array(
            'criteria' => array(
                'condition' => "AGENTID=$agentid" . $where,
                'with' => 'users',
            ),
        ));
        $this->render('view', array(
            'id' => $id,
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
//    public function actionCreate()
//    {
//        $model = new ONESHOPGIFTCARDS;
//
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
//        if (isset($_POST['ONESHOPGIFTCARDS']))
//        {
//            $model->attributes = $_POST['ONESHOPGIFTCARDS'];
//            if ($model->save())
//                $this->redirect(array('view', 'id' => $model->ID));
//        }
//
//        $this->render('create', array(
//            'model' => $model,
//        ));
//    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate()
    {
        $id = Yii::app()->user->id;
        $model = ONESHOPJCDJCXXB::model()->findByPk($id);

        if (isset($_POST['ONESHOPJCDJCXXB']))
        {
            $data = $_POST['ONESHOPJCDJCXXB'];

            if (empty($data['USERPASS']) || empty($data['USERPASS1']) || empty($data['USEDUSERPASS']))
            {
                $this->stat_prompt(0, '密码不可为空');
            }

            if (md5($data['USEDUSERPASS']) != $model->USERPASS)
            {
                $this->stat_prompt(0, '旧密码错误');
            }

            if ($data['USERPASS'] != $data['USERPASS1'])
            {
                $this->stat_prompt(0, '两次密码不一致');
            }

            $data['USERPASS'] = md5($data['USERPASS']);
            $model->attributes = $data;
            if ($model->save())
            {
                $this->stat_prompt($model, '修改成功', 'ONESHOPGIFTCARDS/index');
            }
            else
            {
                $this->stat_prompt($model);
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionOldcard()
    {
        $model = new ONESHOPGIFTCARDS('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ONESHOPGIFTCARDS']))
            $model->attributes = $_POST['ONESHOPGIFTCARDS'];

        $this->render('oldcard', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
//    public function actionDelete($id)
//    {
//        $this->loadModel($id)->delete();
//
//        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//        if (!isset($_GET['ajax']))
//            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
//    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $model = new ONESHOPGIFTCARDS('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ONESHOPGIFTCARDS']))
            $model->attributes = $_POST['ONESHOPGIFTCARDS'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionExcel()
    {
        $data = '';
        $date = date('Ymd');
        $filename = '新建Excel表';

        $criteria = new CDbCriteria;
        $where = ONESHOPGIFTCARDS::model()->card_condition();
        $where .= ONESHOPGIFTCARDS::model()->search_key('t');
        $criteria->addCondition($where);

        $criteria->with = 'users'; //调用relations   
        $search_data = ONESHOPGIFTCARDS::model()->findAll($criteria);

        $data .= "所属店名称\t读书卡ID\t激活时间\t业务员\t面值（元）\t余额（元）\t已消费（元）\t状态\t最终使用用户\t用户最近使用时间\n";

        header("Content-type: application/vnd.ms-excel; charset=UTF-8");
        header("Content-Disposition: attachment; filename=$filename$date.xls");

        foreach ($search_data as $value)
        {
            $data .= Yii::app()->user->dwmqc;
            $data .= "\t";
            $data .= ONESHOPGIFTCARDS::model()->addprefix($value->ID);
            $data .= "\t";
            switch ($value->ADMININVOKETIME)
            {
                case 0:
                    $data .= '未激活';
                    break;
                default:
                    $format_jihuo = date('Y-m-d H:i:s', $value->ADMININVOKETIME);
                    $data .= $format_jihuo;
                    break;
            }
            $data .="\t";
            $data.= $value->SALESMAN;
            $data .= "\t";
            $data .= $value->PAYVALUE;
            $data .= "\t";
            $data .= $value->BALANCE;
            $data .= "\t";
            $data .= ($value->PAYVALUE - $value->BALANCE);
            $data .= "\t";
            switch ($value->INVOKESTATE)
            {
                case -1:
                    $data .='已作废';
                    break;
                case 1:
                    $data .= '已售出';
                    break;
                case 2:
                    $data .= '已售出';
                    break;
                default:
                    $data .= '';
                    break;
            }
            $data .= "\t";
            $data .= $value->users['NAME'];
            $data .= "\t";
            switch ($value->USEDTIME)
            {
                case 0:
                    $data .= '未使用';
                    break;
                default:
                    $format_usedtime = date('Y-m-d H:i:s', $value->USEDTIME);
                    $data .= $format_usedtime;
                    break;
            }
            $data .= "\n";
        }

        echo iconv("UTF-8", "GB18030", $data);   //为兼容office
        Yii::app()->end();
    }

    public function actionActive()
    {
        $model = new ONESHOPGIFTCARDS;

        if (isset($_POST['ONESHOPGIFTCARDS']) || !empty($_POST['js_check']))
        {
            Yii::app()->session['ok'] = '';
            Yii::app()->session['fail'] = '';
            $card_str = empty($_POST['ONESHOPGIFTCARDS']['ID']) ? '' : trim($_POST['ONESHOPGIFTCARDS']['ID']);
            $salesman_str = empty($_POST['ONESHOPGIFTCARDS']['SALESMAN']) ? '' : trim($_POST['ONESHOPGIFTCARDS']['SALESMAN']);
            $card_arr = explode(',', $card_str);

            if (empty($card_str) || empty($salesman_str))
            {
                $this->stat_prompt($model);
            }
            $jcd_id = Yii::app()->user->id;
            $dwmqc = Yii::app()->user->name;

            //读书卡ID过滤与整理
            $unique_data = $this->cardsinfo_sort($card_arr);

            //数据筛选准备,获得基层店所绑定卡ID集合
            $base_data = '';
            $where = "AGENTID=$jcd_id";
            $criteria = new CDbCriteria();
            $criteria->addCondition($where);
            $criteria->addCondition('invokestate BETWEEN 0 AND 1');   //只要未激活卡
            $criteria->select = 'ID';
            $criteria->order = 'ID ASC';
            $base_data = ONESHOPGIFTCARDS::model()->findAll($criteria);
            $base_data_arr = array();
            foreach ($base_data as $value)
            {
                $base_data_arr[] = $value['ID'];
            }

            //恢复卡前缀函数
            $addprefix = function($value) {
                $dis_data = ONESHOPGIFTCARDS::model()->addprefix($value);
                return $dis_data;
            };

            //数据对比
            $result = array();
            $result = array_intersect($base_data_arr, $unique_data);

            //非法卡号
            $tem = array_diff($unique_data, $result);   //放这里是为了照顾JS
            //用于JS反馈
            if (!empty($_POST['js_check']))
            {
                if (!empty($result))
                {
                    $js_sql = 'SELECT count(payvalue),sum(payvalue),payvalue FROM {{GIFTCARDS}} WHERE';
                    foreach ($result as $val)
                    {
                        $js_sql .= ' id =' . $val . ' OR';
                    }
                    $js_sql = rtrim($js_sql, 'OR');
                    $js_sql .= ' GROUP BY payvalue';
                    $callback = '';
                    $connection = Yii::app()->db;
                    $command = $connection->createCommand($js_sql);
                    $callback = $command->queryAll();
                    $a = '';    //最终回调信息容器
                    $b = 0;     //总激活金额
                    $c = 0;     //总激活卡数
                    foreach ($callback as $value)
                    {
                        $a .= $value['PAYVALUE'] . '面值，激活卡数：' . $value['COUNT(PAYVALUE)'] . ' 张，合计金额：' . $value['SUM(PAYVALUE)'] . '元<br />';
                        $b += $value['SUM(PAYVALUE)'];
                        $c += $value['COUNT(PAYVALUE)'];
                    }
                    $a .= '总激活卡数：' . $c . '张，总激活金额：' . $b . '元';
                    if ($tem)
                    {
                        $a .='<br /><span style="color:red;">错误提示：</span><br />不属于该店的卡ID合计：' . count($tem) . '个';
                    }
                    $a .='<br />确定要激活吗？';
                    $this->stat_prompt(0, $a, 1);
                }
                elseif (!empty($tem))
                {
                    $this->stat_prompt(0, '这批卡均不属于该基层店');
                }
            }

            //合法卡号
            if (!empty($result))
            {
                $is_new_result = $this->check_is_new($result);

                if (!empty($is_new_result['new']))
                {
                    $admininvoketime = time();
                    $sql = 'UPDATE {{GIFTCARDS}} SET agentid =' . $jcd_id . ',invokestate = 1' . ',admininvoketime =' . $admininvoketime . ',salesman =\'' . $salesman_str . '\',admininvokor=\'' . $dwmqc . '\' WHERE';

                    foreach ($is_new_result['new'] as $val)
                    {
                        $sql .= ' id =' . $val . ' OR';
                    }
                    $sql = rtrim($sql, 'OR');

                    $connection = Yii::app()->db;
                    $command = $connection->createCommand($sql);
                    $command->execute();
                }

                if (!empty($is_new_result['old']))
                {
                    $sql = 'UPDATE {{GIFTCARDS}} SET agentid =' . $jcd_id . ',salesman =\'' . $salesman_str . '\',admininvokor=\'' . $dwmqc . '\' WHERE';

                    foreach ($is_new_result['old'] as $val)
                    {
                        $sql .= ' id =' . $val . ' OR';
                    }
                    $sql = rtrim($sql, 'OR');

                    $connection = Yii::app()->db;
                    $command = $connection->createCommand($sql);
                    $command->execute();
                }

                $fixed_cardid_ok = array();
                $fixed_cardid_ok = array_map($addprefix, $result);
                Yii::app()->session['ok'] = $fixed_cardid_ok;
            }

            //非法卡号恢复前缀并记录
            $fixed_cardid_fail = array();
            $fixed_cardid_fail = array_map($addprefix, $tem);
            Yii::app()->session['fail'] = $fixed_cardid_fail;

            $this->stat_prompt(0, '正在激活', 'ONESHOPGIFTCARDS/active_result');
        }

        $this->render('active', array(
            'model' => $model,
        ));
    }

    public function actionActive_result()
    {
        $ok = isset(Yii::app()->session['ok']) ? Yii::app()->session['ok'] : '';
        $fail = isset(Yii::app()->session['fail']) ? Yii::app()->session['fail'] : '';

        $this->render('active_result', array(
            'act_cardid' => $ok,
            'fail_cardid' => $fail,
        ));
    }

    public function actionCount()
    {
        $id_range = '';
        $stat = 0;
        $state_en_count = 0;
        $state_en_palvalue_count = 0;
        $state_dis_count = 0;
        $used_count = 0;
        $unused_count = 0;

        $model = new ONESHOPGIFTCARDS('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ONESHOPGIFTCARDS']))
        {
            $stat = 1;
            $model->attributes = $_POST['ONESHOPGIFTCARDS'];

            $criteria = new CDbCriteria;
            $where = ONESHOPGIFTCARDS::model()->card_condition();
            $where .= ONESHOPGIFTCARDS::model()->search_key('', FALSE);

            $criteria->select = 'ID,INVOKESTATE,USEDTIME,PAYVALUE';
            $criteria->order = 'ID ASC';
            $criteria->addCondition($where);
            $search_data = ONESHOPGIFTCARDS::model()->findAll($criteria);
            $id_arr_count = count($search_data);

            if (!empty($search_data))
            {
                $id_range = $this->arrToInterval($search_data);
            }

            foreach ($search_data as $value)
            {
                switch ($value->INVOKESTATE)
                {
                    case 1:
                        $state_en_count++;
                        $used_count++;
                        $state_en_palvalue_count += $value->PAYVALUE;
                        break;
                    case 2:
                        $state_en_count++;
                        $used_count++;
                        $state_en_palvalue_count += $value->PAYVALUE;
                        break;
                }
            }

            $state_dis_count = $id_arr_count - $state_en_count;
            $unused_count = $id_arr_count - $used_count;
        }

        $this->render('count', array(
            'model' => $model,
            'id_range' => $id_range,
            'stat' => $stat,
            'state_en_count' => $state_en_count,
            'state_dis_count' => $state_dis_count,
            'state_en_palvalue_count' => $state_en_palvalue_count,
            'used_count' => $used_count,
            'unused_count' => $unused_count,
        ));
    }

    public function actionExcelcount()
    {
        $data = '';
        $payvalue_count = 0;
        $balance_count = 0;
        $state_en_count = 0;
        $state_en_palvalue_count = 0;
        $id_range = '';
        $date = date('Ymd');
        $filename = !empty($_REQUEST['ONESHOPGIFTCARDS']['SALESMAN']) ? $_REQUEST['ONESHOPGIFTCARDS']['SALESMAN'] : '';

        $criteria = new CDbCriteria;
        $where = ONESHOPGIFTCARDS::model()->card_condition();
        $where .= ONESHOPGIFTCARDS::model()->search_key('t');
        $criteria->addCondition($where);
        $criteria->select = 'ID,PAYVALUE,BALANCE,INVOKESTATE,USEDTIME';
        $criteria->order = 'ID ASC';
        $search_data = ONESHOPGIFTCARDS::model()->findAll($criteria);

        $id_range = $this->arrToInterval($search_data);

        $data .= "读书卡号段\t面值总计（元）\t余额总计（元）\t已消费总计（元）\t已激活卡总计（张）\t已激活卡面值总计（元）\t未激活卡总计（张）\t已售出卡总计（张）\t未售出卡总计（张）\n";

        header("Content-type: application/vnd.ms-excel; charset=UTF-8");
        header("Content-Disposition: attachment; filename=读书卡统计$filename$date.xls");

        $data .= $id_range;
        $data .= "\t";

        foreach ($search_data as $value)
        {
            $payvalue_count += $value->PAYVALUE;
        }
        $data.=$payvalue_count;
        $data .= "\t";
        foreach ($search_data as $value)
        {
            $balance_count += $value->BALANCE;
        }
        $data .=$balance_count;
        $data .= "\t";
        $data .= ($payvalue_count - $balance_count);
        $data .= "\t";
        foreach ($search_data as $value)
        {
            if ($value->INVOKESTATE == 2 || $value->INVOKESTATE == 1)
            {
                $state_en_count++;
                $state_en_palvalue_count += $value->PAYVALUE;
            }
        }
        $data.= $state_en_count;
        $data .= "\t";
        $data.= $state_en_palvalue_count;
        $data .= "\t";
        $data.= (count($search_data) - $state_en_count);
        $data .= "\t";
        $data.= $state_en_count;
        $data .= "\t";
        $data.= (count($search_data) - $state_en_count);
        $data .= "\n";

        echo iconv("UTF-8", "GB18030", $data);   //为兼容office
        Yii::app()->end();
    }

    public function actionExceloldcard()
    {
        $data = '';
        $date = date('Ymd');
        $filename = '新建Excel表';

        $criteria = new CDbCriteria;
        $where = ONESHOPGIFTCARDS::model()->card_condition('old');
        $where .= ONESHOPGIFTCARDS::model()->search_old_key();
        $criteria->addCondition($where);

        $criteria->with = 'users'; //调用relations   
        $search_data = ONESHOPGIFTCARDS::model()->findAll($criteria);

        $data .= "所属店名称\t读书卡卡号\t激活时间\t业务员\t面值（元）\t余额（元）\t已消费（元）\t状态\t最终使用用户\t用户最近使用时间\n";

        header("Content-type: application/vnd.ms-excel; charset=UTF-8");
        header("Content-Disposition: attachment; filename=$filename$date.xls");

        foreach ($search_data as $value)
        {
            $data .= Yii::app()->user->dwmqc;
            $data .= "\t";
            $data .= $value->SN;
            $data .= "\t";
            switch ($value->ADMININVOKETIME)
            {
                case 0:
                    $data .= '未激活';
                    break;
                default:
                    $format_jihuo = date('Y-m-d H:i:s', $value->ADMININVOKETIME);
                    $data .= $format_jihuo;
                    break;
            }
            $data .="\t";
            $data.= $value->SALESMAN;
            $data .= "\t";
            $data .= $value->PAYVALUE;
            $data .= "\t";
            $data .= $value->BALANCE;
            $data .= "\t";
            $data .= ($value->PAYVALUE - $value->BALANCE);
            $data .= "\t";
            switch ($value->INVOKESTATE)
            {
                case 1:
                    $data .= '已售出';
                    break;
                case 2:
                    $data .= '已售出';
                    break;
                default:
                    $data .= '';
                    break;
            }
            $data .= "\t";
            $data .= $value->users['NAME'];
            $data .= "\t";
            switch ($value->USEDTIME)
            {
                case 0:
                    $data .= '未使用';
                    break;
                default:
                    $format_usedtime = date('Y-m-d H:i:s', $value->USEDTIME);
                    $data .= $format_usedtime;
                    break;
            }
            $data .= "\n";
        }

        echo iconv("UTF-8", "GB18030", $data);   //为兼容office
        Yii::app()->end();
    }

    public function actionOldcardcount()
    {
        $stat = 0;
        $state_en_count = 0;
        $state_en_palvalue_count = 0;
        $state_dis_count = 0;
        $used_count = 0;
        $unused_count = 0;

        $model = new ONESHOPGIFTCARDS('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ONESHOPGIFTCARDS']))
        {
            $stat = 1;
            $model->attributes = $_POST['ONESHOPGIFTCARDS'];

            $criteria = new CDbCriteria;
            $where = ONESHOPGIFTCARDS::model()->card_condition('old');
            $where .= ONESHOPGIFTCARDS::model()->search_old_key();
            $criteria->select = 'ID,INVOKESTATE,USEDTIME,PAYVALUE';
            $criteria->order = 'ID ASC';
            $criteria->addCondition($where);
            $search_data = ONESHOPGIFTCARDS::model()->findAll($criteria);

            $id_arr_count = count($search_data);

            foreach ($search_data as $value)
            {
                switch ($value->INVOKESTATE)
                {
                    case 1:
                        $state_en_count++;
                        $used_count++;
                        $state_en_palvalue_count += $value->PAYVALUE;
                        break;
                    case 2:
                        $state_en_count++;
                        $used_count++;
                        $state_en_palvalue_count += $value->PAYVALUE;
                        break;
                }
            }

            $state_dis_count = $id_arr_count - $state_en_count;
            $unused_count = $id_arr_count - $used_count;
        }

        $this->render('oldcardcount', array(
            'model' => $model,
            'stat' => $stat,
            'state_en_count' => $state_en_count,
            'state_en_palvalue_count' => $state_en_palvalue_count,
            'state_dis_count' => $state_dis_count,
            'used_count' => $used_count,
            'unused_count' => $unused_count,
        ));
    }

    public function actionExceloldcardcount()
    {
        $data = '';
        $payvalue_count = 0;
        $balance_count = 0;
        $state_en_count = 0;
        $state_en_palvalue_count = 0;

        $date = date('Ymd');
        $salesman = !empty($_REQUEST['ONESHOPGIFTCARDS']['SALESMAN']) ? $_REQUEST['ONESHOPGIFTCARDS']['SALESMAN'] : '';
        $filename = Yii::app()->user->dwmqc . '-' . $salesman;

        $criteria = new CDbCriteria;
        $where = ONESHOPGIFTCARDS::model()->card_condition('old');
        $where .= ONESHOPGIFTCARDS::model()->search_old_key();
        $criteria->addCondition($where);
        $criteria->select = 'ID,PAYVALUE,BALANCE,INVOKESTATE,USEDTIME';
        $criteria->order = 'ID ASC';
        $search_data = ONESHOPGIFTCARDS::model()->findAll($criteria);

        $data .= "所属店名称\t面值总计（元）\t余额总计（元）\t已消费总计（元）\t已激活卡总计（张）\t已激活卡面值总计（元）\t未激活卡总计（张）\t已售出卡总计（张）\t未售出卡总计（张）\n";

        header("Content-type: application/vnd.ms-excel; charset=UTF-8");
        header("Content-Disposition: attachment; filename=$filename-$date.xls");

        $data .= Yii::app()->user->dwmqc;
        $data .= "\t";

        foreach ($search_data as $value)
        {
            $payvalue_count += $value->PAYVALUE;
        }
        $data.=$payvalue_count;
        $data .= "\t";
        foreach ($search_data as $value)
        {
            $balance_count += $value->BALANCE;
        }
        $data .=$balance_count;
        $data .= "\t";
        $data .= ($payvalue_count - $balance_count);
        $data .= "\t";
        foreach ($search_data as $value)
        {
            if ($value->INVOKESTATE == 2 || $value->INVOKESTATE == 1)
            {
                $state_en_count++;
                $state_en_palvalue_count += $value->PAYVALUE;
            }
        }
        $data.= $state_en_count;
        $data .= "\t";
        $data.= $state_en_palvalue_count;
        $data .= "\t";
        $data.= (count($search_data) - $state_en_count);
        $data .= "\t";
        $data.= $state_en_count;
        $data .= "\t";
        $data.= (count($search_data) - $state_en_count);
        $data .= "\n";

        echo iconv("UTF-8", "GB18030", $data);   //为兼容office
        Yii::app()->end();
    }

    public function actionHelp()
    {
        $model = new ONESHOPGIFTCARDS;
        $this->render('help', array(
            'model' => $model,
        ));
    }

    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error)
        {
            $this->render('error', array('error' => $error));
        }
    }

    /**
     * Manages all models.
     */
//    public function actionAdmin()
//    {
//        $model = new ONESHOPGIFTCARDS('search');
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_GET['ONESHOPGIFTCARDS']))
//            $model->attributes = $_GET['ONESHOPGIFTCARDS'];
//
//        $this->render('admin', array(
//            'model' => $model,
//        ));
//    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ONESHOPGIFTCARDS the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = ONESHOPGIFTCARDS::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ONESHOPGIFTCARDS $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'oneshopgiftcards-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    // 用户登录
    public function actionLogin()
    {
        if (!Yii::app()->user->isGuest)
        {
            $this->redirect('index');
            Yii::app()->end();
        }
        $this->layout = '//layouts/column';
        $model = new LoginForm('login');
        $result = array('status' => 0, 'msg' => '');
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->validateVerifyCode($this->createAction('captcha')->getVerifyCode()) && $model->login())
            {
                $result['status'] = 1;
                $result['msg'] = '登陆成功，正在转至后台首页...';
                $result['url'] = Yii::app()->user->returnUrl;
            }
            else
            {
                $res = CActiveForm::validate($model);
                $res_array = json_decode($res, true);
                $result['msg'] = current($res_array);
            }
            echo json_encode($result);
            Yii::app()->end();
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    // 用户退出
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function stat_prompt($model = '', $msg = '', $url = '')
    {
        $result = array('msg' => '');

        if ($model)
        {
            $res = CActiveForm::validate($model);
            $res_array = json_decode($res, true);
            $result['msg'] = current($res_array);
        }

        if ($msg)
        {
            $result['msg'] = $msg;
        }

        if ($url)
        {
            $result['status'] = 1;
            $result['url'] = 'index.php?r=' . $url;
        }

        echo json_encode($result);
        Yii::app()->end();
    }

    public function arrToInterval($arr)
    {
        sort($arr);
        $str = "";
        $nstr = "";
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($i + 1 < count($arr))
            {
                if (($arr[$i]->ID + 1) != ($arr[$i + 1]->ID))
                {
                    $str.=$arr[$i]->ID . "|";
                }
                else
                {
                    $str.=$arr[$i]->ID . "-";
                    continue;
                }
            }
            else
            {
                $str.=$arr[$i]->ID;
            }
        }
        $strarr = explode("|", $str);
        foreach ($strarr as $k => $v)
        {
            if (strstr($v, "-"))
            {
                $varr = explode("-", $v);
                $nstr.=ONESHOPGIFTCARDS::model()->addprefix($varr[0]) . "-" . ONESHOPGIFTCARDS::model()->addprefix($varr[count($varr) - 1]) . "|";
            }
            else
            {
                $nstr.=ONESHOPGIFTCARDS::model()->addprefix($v) . "|";
            }
        }
        return rtrim($nstr, '|');
    }

    public function cardsinfo_sort($card_arr)
    {
        foreach ($card_arr as $value)
        {
            if (stristr($value, '-'))
            {
                $temp = explode('-', $value);
                if (is_numeric($temp[0]) && is_numeric($temp[1]))
                {
                    $card_id_check1 = stripos($temp[0], '888');
                    $card_id_check2 = stripos($temp[1], '888');
                    if ($card_id_check1 === FALSE || $card_id_check2 === FALSE || $card_id_check1 != 0 || $card_id_check2 != 0)
                    {
                        $this->stat_prompt(0, '卡号输入错误');
                    }

                    if ($temp[0] > $temp[1])
                    {
                        $this->stat_prompt(0, '开始ID大于结束ID，请检查');
                    }

                    $num1 = ltrim($temp[0], '888');
                    $num2 = ltrim($temp[1], '888');
                    $num1 = isset($num1) ? intval($num1) : '';
                    $num2 = isset($num2) ? intval($num2) : '';

                    if (empty($num1) || empty($num2))
                    {
                        $this->stat_prompt(0, '卡号输入错误');
                    }
                }
                else
                {
                    $this->stat_prompt(0, '含有非法参数');
                }
                $temp_arr = range($num1, $num2);

                $id_str[] = implode(',', $temp_arr);
            }
            else
            {
                if (!is_numeric($value))
                {
                    $this->stat_prompt(0, '含有非法参数');
                }

                $card_id_check = stripos($value, '888');

                if ($card_id_check === FALSE || $card_id_check != 0)
                {
                    $this->stat_prompt(0, '卡号输入错误');
                }

                $num1 = ltrim($value, '888');
                $num1 = isset($num1) ? intval($num1) : '';
                if (empty($num1))
                {
                    $this->stat_prompt(0, '卡号输入错误');
                }
                $id_str[] = $num1;
            }
        }

        //数据整理
        $convid_str = implode(',', $id_str);    //转为字符串
        $convid_arr = explode(',', $convid_str);     //转为数组
        $unique_data = array_unique($convid_arr);   //过滤重复ID

        return $unique_data;
    }

    public function check_is_new($data = array())
    {
        $id_where = '';
        $old_cards_id = $data;
        $new_cards_id = '';

        foreach ($data as $val)
        {
            $id_where .= ' id =' . $val . ' OR';
        }
        $id_where = rtrim($id_where, 'OR');

        $criteria = new CDbCriteria();
        $criteria->addCondition($id_where);
        $criteria->addCondition('admininvoketime=0');   //只要未激活卡
        $criteria->select = 'ID';
        $criteria->order = 'ID ASC';
        $new_cards = ONESHOPGIFTCARDS::model()->findAll($criteria);

        if (!empty($new_cards))
        {
            foreach ($new_cards as $value)
            {
                $new_cards_id[] = $value->ID;
            }

            $old_cards_id = array_diff($data, $new_cards_id);
        }

        $result = array('new' => $new_cards_id, 'old' => $old_cards_id);

        return $result;
    }

}
