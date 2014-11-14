<?php

/**
 * This is the model class for table "ONESHOP_GIFTCARDS".
 *
 * The followings are the available columns in table 'ONESHOP_GIFTCARDS':
 * @property integer $ID
 * @property integer $CATEGORYID
 * @property string $SN
 * @property string $PWD
 * @property integer $ADDTIME
 * @property integer $USEDTIME
 * @property string $ORDERSN
 * @property integer $USERID
 * @property double $USEDSTATE
 * @property integer $EXPIREDTIME
 * @property integer $ADMININVOKETIME
 * @property string $CREATOR
 * @property string $ADMININVOKOR
 * @property double $BALANCE
 * @property double $INVOKESTATE
 * @property integer $USERINVOKETIME
 * @property integer $PAYVALUE
 * @property integer $ISPHYSICAL
 * @property integer $ISONSALE
 * @property integer $ISSALED
 * @property string $RECHARGENAME
 * @property integer $RECHARGETIME
 * @property integer $AGENTID
 * @property string $BINDNAME
 * @property integer $BINDTIME
 * @property string $SALESMAN
 */
class ONESHOPGIFTCARDS extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'ONESHOP_GIFTCARDS';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ID,SALESMAN', 'required'),
//            array('CATEGORYID, ADDTIME, USEDTIME, USERID, EXPIREDTIME, ADMININVOKETIME, USERINVOKETIME, PAYVALUE, ISPHYSICAL, ISONSALE, ISSALED, RECHARGETIME, AGENTID', 'numerical', 'integerOnly' => true),
//            array('USEDSTATE, BALANCE, INVOKESTATE', 'numerical'),
//            array('SN, PWD', 'length', 'max' => 80),
//            array('ORDERSN, RECHARGENAME', 'length', 'max' => 128),
//            array('CREATOR, ADMININVOKOR', 'length', 'max' => 64),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, CATEGORYID, SN, PWD, ADDTIME, USEDTIME, ORDERSN, USERID, USEDSTATE, EXPIREDTIME, ADMININVOKETIME, CREATOR, ADMININVOKOR, BALANCE, INVOKESTATE, USERINVOKETIME, PAYVALUE, ISPHYSICAL, ISONSALE, ISSALED, RECHARGENAME, RECHARGETIME, AGENTID,BINDNAME,BINDTIME,SALESMAN', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'users' => array(self::BELONGS_TO, 'ONESHOPUSER', 'USERID'),
            'jcd_name' => array(self::BELONGS_TO, 'ONESHOPJCDJCXXB', 'AGENTID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'ID' => '读书卡ID',
            'CATEGORYID' => 'Categoryid',
            'SN' => '贵宾卡卡号',
            'PWD' => 'Pwd',
            'ADDTIME' => 'Addtime',
            'USEDTIME' => '用户最近使用时间',
            'ORDERSN' => 'Ordersn',
            'USERID' => '用户ID',
            'USEDSTATE' => 'Usedstate',
            'EXPIREDTIME' => 'Expiredtime',
            'ADMININVOKETIME' => '激活时间',
            'CREATOR' => 'Creator',
            'ADMININVOKOR' => '激活时间',
            'BALANCE' => '余额（元）',
            'INVOKESTATE' => '状态',
            'USERINVOKETIME' => '激活时间',
            'PAYVALUE' => '面值（元）',
            'ISPHYSICAL' => 'Isphysical',
            'ISONSALE' => 'Isonsale',
            'ISSALED' => 'Issaled',
            'RECHARGENAME' => 'Rechargename',
            'RECHARGETIME' => 'Rechargetime',
            'AGENTID' => 'Agentid',
            'BINDNAME' => 'BINDNAME',
            'BINDTIME' => 'BINDTIME',
            'SALESMAN' => '业务员',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $where = $this->card_condition();
        $where .= $this->search_key();
//        print_r($where);exit;
//        var_dump($where);exit;
        $criteria = new CDbCriteria;

//        $criteria->compare('ID', $this->ID);
//        $criteria->addSearchCondition('ID', $this->ID); //模糊查询
//        $criteria->addBetweenCondition('USERINVOKETIME', $start_date, $end_date); //模糊查询
//        $criteria->compare('CATEGORYID', $this->CATEGORYID);
//        $criteria->compare('SN', $this->SN, true);
//        $criteria->compare('PWD', $this->PWD, true);
//        $criteria->compare('ADDTIME', $this->ADDTIME);
//        $criteria->compare('USEDTIME', $this->USEDTIME);
//        $criteria->compare('ORDERSN', $this->ORDERSN, true);
//        $criteria->compare('USERID', $this->USERID);
//        $criteria->compare('USEDSTATE', $this->USEDSTATE);
//        $criteria->compare('EXPIREDTIME', $this->EXPIREDTIME);
//        $criteria->compare('ADMININVOKETIME', $this->ADMININVOKETIME);
//        $criteria->compare('CREATOR', $this->CREATOR, true);
//        $criteria->compare('ADMININVOKOR', $this->ADMININVOKOR, true);
//        $criteria->compare('BALANCE', $this->BALANCE);
//        $criteria->compare('INVOKESTATE', $this->INVOKESTATE);
//        $criteria->compare('USERINVOKETIME', $this->USERINVOKETIME);
//        $criteria->compare('PAYVALUE', $this->PAYVALUE);
//        $criteria->compare('ISPHYSICAL', $this->ISPHYSICAL);
//        $criteria->compare('ISONSALE', $this->ISONSALE);
//        $criteria->compare('ISSALED', $this->ISSALED);
//        $criteria->compare('RECHARGENAME', $this->RECHARGENAME, true);
//        $criteria->compare('RECHARGETIME', $this->RECHARGETIME);
        $criteria->compare('AGENTID', Yii::app()->user->id);
//        $criteria->compare('BINDNAME', $this->BINDNAME);
//        $criteria->compare('BINDTIME', $this->BINDTIME);
//        $criteria->compare('SALESMAN', $this->SALESMAN);
        $criteria->condition = $where;
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 30),
        ));
    }

    public function card_count()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $where = $this->card_condition();
        $where .= $this->search_key('', FALSE);
//        print_r($where);exit;
//        var_dump($where);exit;
        $criteria = new CDbCriteria;
        $criteria->select = 'sum(PAYVALUE) as PAYVALUE,sum(BALANCE) as BALANCE';

//        $criteria->compare('ID', $this->ID);
//        $criteria->addSearchCondition('ID', $this->ID); //模糊查询
//        $criteria->addBetweenCondition('USERINVOKETIME', $start_date, $end_date); //模糊查询
//        $criteria->compare('CATEGORYID', $this->CATEGORYID);
//        $criteria->compare('SN', $this->SN, true);
//        $criteria->compare('PWD', $this->PWD, true);
//        $criteria->compare('ADDTIME', $this->ADDTIME);
//        $criteria->compare('USEDTIME', $this->USEDTIME);
//        $criteria->compare('ORDERSN', $this->ORDERSN, true);
//        $criteria->compare('USERID', $this->USERID);
//        $criteria->compare('USEDSTATE', $this->USEDSTATE);
//        $criteria->compare('EXPIREDTIME', $this->EXPIREDTIME);
//        $criteria->compare('ADMININVOKETIME', $this->ADMININVOKETIME);
//        $criteria->compare('CREATOR', $this->CREATOR, true);
//        $criteria->compare('ADMININVOKOR', $this->ADMININVOKOR, true);
//        $criteria->compare('BALANCE', $this->BALANCE);
//        $criteria->compare('INVOKESTATE', $this->INVOKESTATE);
//        $criteria->compare('USERINVOKETIME', $this->USERINVOKETIME);
//        $criteria->compare('PAYVALUE', $this->PAYVALUE);
//        $criteria->compare('ISPHYSICAL', $this->ISPHYSICAL);
//        $criteria->compare('ISONSALE', $this->ISONSALE);
//        $criteria->compare('ISSALED', $this->ISSALED);
//        $criteria->compare('RECHARGENAME', $this->RECHARGENAME, true);
//        $criteria->compare('RECHARGETIME', $this->RECHARGETIME);
        $criteria->compare('AGENTID', Yii::app()->user->id);
//        $criteria->compare('BINDNAME', $this->BINDNAME);
//        $criteria->compare('BINDTIME', $this->BINDTIME);
//        $criteria->compare('SALESMAN', $this->SALESMAN);
        $criteria->condition = $where;
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function oldsearch()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $where = $this->card_condition('old');
        $where .= $this->search_old_key();

        $criteria = new CDbCriteria;

//        $criteria->compare('ID', $this->ID);
//        $criteria->addSearchCondition('ID', $this->ID); //模糊查询
//        $criteria->addBetweenCondition('USERINVOKETIME', $start_date, $end_date); //模糊查询
//        $criteria->compare('CATEGORYID', $this->CATEGORYID);
//        $criteria->compare('SN', $this->SN, true);
//        $criteria->compare('PWD', $this->PWD, true);
//        $criteria->compare('ADDTIME', $this->ADDTIME);
//        $criteria->compare('USEDTIME', $this->USEDTIME);
//        $criteria->compare('ORDERSN', $this->ORDERSN, true);
//        $criteria->compare('USERID', $this->USERID);
//        $criteria->compare('USEDSTATE', $this->USEDSTATE);
//        $criteria->compare('EXPIREDTIME', $this->EXPIREDTIME);
//        $criteria->compare('ADMININVOKETIME', $this->ADMININVOKETIME);
//        $criteria->compare('CREATOR', $this->CREATOR, true);
//        $criteria->compare('ADMININVOKOR', $this->ADMININVOKOR, true);
//        $criteria->compare('BALANCE', $this->BALANCE);
//        $criteria->compare('INVOKESTATE', $this->INVOKESTATE);
//        $criteria->compare('USERINVOKETIME', $this->USERINVOKETIME);
//        $criteria->compare('PAYVALUE', $this->PAYVALUE);
//        $criteria->compare('ISPHYSICAL', $this->ISPHYSICAL);
//        $criteria->compare('ISONSALE', $this->ISONSALE);
//        $criteria->compare('ISSALED', $this->ISSALED);
//        $criteria->compare('RECHARGENAME', $this->RECHARGENAME, true);
//        $criteria->compare('RECHARGETIME', $this->RECHARGETIME);
        $criteria->compare('AGENTID', Yii::app()->user->id);
//        $criteria->compare('BINDNAME', $this->BINDNAME);
//        $criteria->compare('BINDTIME', $this->BINDTIME);
//        $criteria->compare('SALESMAN', $this->SALESMAN);
        $criteria->condition = $where;
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 30),
        ));
    }

    public function oldcard_count()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $where = $this->card_condition('old');
        $where .= $this->search_old_key();

        $criteria = new CDbCriteria;
        $criteria->select = 'sum(PAYVALUE) as PAYVALUE,sum(BALANCE) as BALANCE';

//        $criteria->compare('ID', $this->ID);
//        $criteria->addSearchCondition('ID', $this->ID); //模糊查询
//        $criteria->addBetweenCondition('USERINVOKETIME', $start_date, $end_date); //模糊查询
//        $criteria->compare('CATEGORYID', $this->CATEGORYID);
//        $criteria->compare('SN', $this->SN, true);
//        $criteria->compare('PWD', $this->PWD, true);
//        $criteria->compare('ADDTIME', $this->ADDTIME);
//        $criteria->compare('USEDTIME', $this->USEDTIME);
//        $criteria->compare('ORDERSN', $this->ORDERSN, true);
//        $criteria->compare('USERID', $this->USERID);
//        $criteria->compare('USEDSTATE', $this->USEDSTATE);
//        $criteria->compare('EXPIREDTIME', $this->EXPIREDTIME);
//        $criteria->compare('ADMININVOKETIME', $this->ADMININVOKETIME);
//        $criteria->compare('CREATOR', $this->CREATOR, true);
//        $criteria->compare('ADMININVOKOR', $this->ADMININVOKOR, true);
//        $criteria->compare('BALANCE', $this->BALANCE);
//        $criteria->compare('INVOKESTATE', $this->INVOKESTATE);
//        $criteria->compare('USERINVOKETIME', $this->USERINVOKETIME);
//        $criteria->compare('PAYVALUE', $this->PAYVALUE);
//        $criteria->compare('ISPHYSICAL', $this->ISPHYSICAL);
//        $criteria->compare('ISONSALE', $this->ISONSALE);
//        $criteria->compare('ISSALED', $this->ISSALED);
//        $criteria->compare('RECHARGENAME', $this->RECHARGENAME, true);
//        $criteria->compare('RECHARGETIME', $this->RECHARGETIME);
        $criteria->compare('AGENTID', Yii::app()->user->id);
//        $criteria->compare('BINDNAME', $this->BINDNAME);
//        $criteria->compare('BINDTIME', $this->BINDTIME);
//        $criteria->compare('SALESMAN', $this->SALESMAN);
        $criteria->condition = $where;
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function search_old_key()
    {
        $date_where = '';

        if (isset($_REQUEST['ONESHOPGIFTCARDS']))
        {
            if (isset($_REQUEST['ONESHOPGIFTCARDS']['SN']))
            {
                $base_id = trim($_REQUEST['ONESHOPGIFTCARDS']['SN']);
                $date_where .= " AND SN LIKE '%" . $base_id . "%'";
            }
            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['start_date']))
            {
                $start = strtotime($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['start_date']);
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['end_date']))
            {
                $end = strtotime($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['end_date']);
            }

            if (!empty($start) && empty($end))
            {
                $date_where .= ' AND BINDTIME>=' . $start;
            }

            if (empty($start) && !empty($end))
            {
                $date_where .= ' AND BINDTIME<=' . $end;
            }

            if (!empty($start) && !empty($end))
            {
                if ($start == $end)
                {
                    $end = $this->addsec($end);
                }
                $date_where .= ' AND BINDTIME BETWEEN ' . $start . ' AND ' . $end;
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['start_date']))
            {
                $start_ad = strtotime($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['start_date']);
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['end_date']))
            {
                $end_ad = strtotime($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['end_date']);
            }

            if (!empty($start_ad) && empty($end_ad))
            {
                $date_where .= ' AND ADMININVOKETIME>=' . $start_ad;
            }

            if (empty($start_ad) && !empty($end_ad))
            {
                $date_where .= ' AND ADMININVOKETIME<=' . $end_ad;
            }

            if (!empty($start_ad) && !empty($end_ad))
            {
                if ($start_ad == $end_ad)
                {
                    $end_ad = $this->addsec($end_ad);
                }
                $date_where .= ' AND ADMININVOKETIME BETWEEN ' . $start_ad . ' AND ' . $end_ad;
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['SALESMAN']))
            {
                $date_where .= ' AND SALESMAN LIKE \'%' . $_REQUEST['ONESHOPGIFTCARDS']['SALESMAN'] . '%\'';
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['enable']))
            {
                $stat_en = $_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['enable'];
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['disable']))
            {
                $stat_dis = $_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['disable'];
            }

            if (!empty($stat_dis) && empty($stat_en))
            {
                $date_where .= ' AND INVOKESTATE = 0';
            }

            if (!empty($stat_en) && empty($stat_dis))
            {
                $date_where .= ' AND INVOKESTATE BETWEEN 1 AND 2';
            }

            if (!empty($stat_en) && !empty($stat_dis))
            {
                $date_where .= '';
            }
        }

        return $date_where;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ONESHOPGIFTCARDS the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @date 2014-01-23
     * @remark 搜索
     * @param str $act 表名别名
     * @param bool $res_mod true=模糊查询,false=精确查询
     * @return string
     */
    public function search_key($act = '', $res_mod = true)
    {
        $date_where = '';

        if (isset($_REQUEST['ONESHOPGIFTCARDS']))
        {
            $base_id = trim($_REQUEST['ONESHOPGIFTCARDS']['ID']);
            if (stristr($base_id, '-'))
            {
                $temp = explode('-', $base_id);
                if (is_numeric($temp[0]) && is_numeric($temp[1]))
                {
                    $num1 = explode('888', $temp[0]);
                    $num2 = explode('888', $temp[1]);
                    $num1 = empty($num1[1]) ? 0 : intval($num1[1]);
                    $num2 = empty($num2[1]) ? 0 : intval($num2[1]);
                }
                else
                {
                    $num1 = 0;
                    $num2 = 0;
                }

                if ($act)
                {
                    $date_where .= ' AND "' . $act . '".ID BETWEEN ' . $num1 . ' AND ' . $num2;
                }
                else
                {
                    $date_where .= ' AND ID BETWEEN ' . $num1 . ' AND ' . $num2;
                }
            }
            else
            {
                $check = explode('888', $base_id);
                $check[0] = intval($check[0]);
                $card_id = empty($check[0]) ? isset($check[1]) ? intval($check[1]) : '' : $check[0];

                if (is_numeric($card_id))
                {
                    $card_id = intval($card_id);
                    if ($res_mod)
                    {
                        if ($act)
                        {
                            $date_where .= ' AND "' . $act . '".ID LIKE \'%' . $card_id . "%'";
                        }
                        else
                        {
                            $date_where .= " AND ID LIKE '%" . $card_id . "%'";
                        }
                    }
                    else
                    {
                        if ($act)
                        {
                            $date_where .= ' AND "' . $act . '".ID = ' . $card_id;
                        }
                        else
                        {
                            $date_where .= ' AND ID = ' . $card_id;
                        }
                    }
                }
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['start_date']))
            {
                $start = strtotime($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['start_date']);
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['end_date']))
            {
                $end = strtotime($_REQUEST['ONESHOPGIFTCARDS']['BINDTIME']['end_date']);
            }

            if (!empty($start) && empty($end))
            {
                $date_where .= ' AND BINDTIME>=' . $start;
            }

            if (empty($start) && !empty($end))
            {
                $date_where .= ' AND BINDTIME<=' . $end;
            }

            if (!empty($start) && !empty($end))
            {
                if ($start == $end)
                {
                    $end = $this->addsec($end);
                }
                $date_where .= ' AND BINDTIME BETWEEN ' . $start . ' AND ' . $end;
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['start_date']))
            {
                $start_ad = strtotime($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['start_date']);
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['end_date']))
            {
                $end_ad = strtotime($_REQUEST['ONESHOPGIFTCARDS']['ADMININVOKETIME']['end_date']);
            }

            if (!empty($start_ad) && empty($end_ad))
            {
                $date_where .= ' AND ADMININVOKETIME>=' . $start_ad;
            }

            if (empty($start_ad) && !empty($end_ad))
            {
                $date_where .= ' AND ADMININVOKETIME<=' . $end_ad;
            }

            if (!empty($start_ad) && !empty($end_ad))
            {
                if ($start_ad == $end_ad)
                {
                    $end_ad = $this->addsec($end_ad);
                }
                $date_where .= ' AND ADMININVOKETIME BETWEEN ' . $start_ad . ' AND ' . $end_ad;
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['SALESMAN']))
            {
                $date_where .= ' AND SALESMAN LIKE \'%' . $_REQUEST['ONESHOPGIFTCARDS']['SALESMAN'] . '%\'';
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['enable']))
            {
                $stat_en = $_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['enable'];
            }

            if (!empty($_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['disable']))
            {
                $stat_dis = $_REQUEST['ONESHOPGIFTCARDS']['INVOKESTATE']['disable'];
            }

            if (!empty($stat_dis) && empty($stat_en))
            {
                $date_where .= ' AND INVOKESTATE = 0';
            }

            if (!empty($stat_en) && empty($stat_dis))
            {
                $date_where .= ' AND INVOKESTATE BETWEEN 1 AND 2';
            }

            if (!empty($stat_en) && !empty($stat_dis))
            {
                $date_where .= '';
            }
        }

        return $date_where;
    }

    /**
     * @author RenLong
     * @date 2014-03-04
     * @param str $source 数据库中原始数据
     * @param int $bit 去除前缀后的总位数
     * @param str $filler 填充值
     * @param str $pre 前缀
     * @remark 添加读书卡前缀
     * @return str
     */
    public function addprefix($source = '', $bit = 9, $filler = '0', $pre = '888')
    {
        $source_data = str_pad($source, $bit, $filler, STR_PAD_LEFT);
        $dis_data = $pre . $source_data;
        return $dis_data;
    }

    /**
     * @author RenLong
     * @date 2014-03-18
     * @param str $source 数据库中原始数据
     * @param str $sec 增加秒数，默认一天
     * @remark 增加日期判断已符合习惯
     * @return str
     */
    public function addsec($source = '', $sec = 86399)
    {
        $source += $sec;
        return $source;
    }

    /**
     * @author RenLong
     * @date 2014-03-20
     * @param str $batch 批次判断
     * @remark 获得对应店卡信息条件
     * @return string
     */
    public function card_condition($batch = 'new')
    {
        switch ($batch)
        {
            case 'old':
                $than = '<=';
                break;
            default:
                $than = '>';
                break;
        }
        $condition = ' AGENTID = ' . Yii::app()->user->id . ' AND categoryid ' . $than . ' 4 AND invokestate >= 0';
        return $condition;
    }

}
