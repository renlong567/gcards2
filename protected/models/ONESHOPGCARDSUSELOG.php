<?php

/**
 * This is the model class for table "ONESHOP_GCARDSUSELOG".
 *
 * The followings are the available columns in table 'ONESHOP_GCARDSUSELOG':
 * @property integer $ID
 * @property integer $USERID
 * @property integer $ADDTIME
 * @property double $AMOUNT
 * @property string $GIFTCARDSSN
 * @property string $ORDERSN
 * @property string $DESCRIPTION
 * @property string $JCDKHID
 * @property string $POSID
 * @property string $WORKERID
 */
class ONESHOPGCARDSUSELOG extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'ONESHOP_GCARDSUSELOG';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ORDERSN, GIFTCARDSSN', 'required'),
            array('ADDTIME', 'numerical', 'integerOnly' => true),
            array('AMOUNT', 'numerical'),
            array('JCDKHID', 'length', 'max' => 10),
            array('ORDERSN', 'length', 'max' => 20),
            array('DESCRIPTION', 'length', 'max' => 500),
            array('POSID', 'length', 'max' => 10),
            array('WORKER', 'length', 'max' => 8),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, USERID, ADDTIME, AMOUNT, GIFTCARDSSN, ORDERSN, DESCRIPTION, JCDKHID, POSID, WORKERID', 'safe', 'on' => 'search'),
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
            'jcd' => array(self::BELONGS_TO, 'ONESHOPJCDJCXXB', '', 'on' => 'KHID=' . Yii::app()->user->khid, 'select' => 'DWMQC')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'ID' => 'ID',
            'USERID' => '用户ID',
            'ADDTIME' => '生成时间',
            'AMOUNT' => '金额（元）',
            'GIFTCARDSSN' => '读书卡号',
            'ORDERSN' => '小票号',
            'DESCRIPTION' => '备注',
            'JCDKHID' => '店号',
            'POSID' => '工作站号',
            'WORKERID' => '工号',
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
        $start_date = empty($_POST['ONESHOPGCARDSUSELOG']['ADDTIME']['start_date']) ? null : strtotime($_POST['ONESHOPGCARDSUSELOG']['ADDTIME']['start_date']);
        $end_date = empty($_POST['ONESHOPGCARDSUSELOG']['ADDTIME']['end_date']) ? null : strtotime($_POST['ONESHOPGCARDSUSELOG']['ADDTIME']['end_date']);
        if (!is_null($start_date) && !is_null($end_date) && $start_date == $end_date)
        {
            $end_date = ONESHOPGIFTCARDS::model()->addsec($end_date);
        }

        $criteria = new CDbCriteria;
        if (!empty($_POST['ONESHOPGCARDSUSELOG']['ORDERSN']))
        {
            $criteria->compare('ORDERSN', $_POST['ONESHOPGCARDSUSELOG']['ORDERSN'], true);
        }
        if (!empty($_POST['ONESHOPGCARDSUSELOG']['GIFTCARDSSN']))
        {
            $criteria->compare('GIFTCARDSSN', $_POST['ONESHOPGCARDSUSELOG']['GIFTCARDSSN'], true);
        }
        if (!empty($end_date))
        {
            $criteria->compare('ADDTIME', '<=' . $end_date);
        }
        if (!empty($start_date))
        {
            $criteria->compare('ADDTIME', '>=' . $start_date);
        }
        if (!empty($_POST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['enable']) && empty($_POST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['disable']))
        {
            $criteria->compare('DESCRIPTION', '实体店刷卡消费');
        }
        if (!empty($_POST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['disable']) && empty($_POST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['enable']))
        {
            $criteria->compare('DESCRIPTION', '实体店退款');
        }
        if (!empty($_POST['ONESHOPGCARDSUSELOG']['POSID']))
        {
            $criteria->compare('POSID', $_POST['ONESHOPGCARDSUSELOG']['POSID']);
        }
        if (!empty($_POST['ONESHOPGCARDSUSELOG']['WORKERID']))
        {
            $criteria->compare('WORKERID', $_POST['ONESHOPGCARDSUSELOG']['WORKERID']);
        }
        $criteria->compare('JCDKHID', Yii::app()->user->khid);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 30)
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ONESHOPGCARDSUSELOG the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
