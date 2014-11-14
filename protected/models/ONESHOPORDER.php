<?php

/**
 * This is the model class for table "ONESHOP_ORDER".
 *
 * The followings are the available columns in table 'ONESHOP_ORDER':
 * @property integer $ID
 * @property integer $USERID
 * @property string $SN
 * @property integer $STATE
 * @property integer $PAYSTATE
 * @property integer $ADDTIME
 * @property integer $PAYTIME
 * @property integer $PAYMENTID
 * @property double $AMOUNT
 * @property double $SHIPPINGFEE
 * @property double $PAYFEE
 * @property double $GOODSAMOUNT
 * @property string $PAYMENTNAME
 * @property integer $CONFIRMTIME
 * @property integer $SHIPPINGID
 * @property integer $SHIPPINGSTATE
 * @property integer $SHIPPINGTIME
 * @property double $TAX
 * @property string $INVOICENO
 * @property double $ISSYNTOERP
 * @property double $INVOICEID
 * @property double $PARTNERSTOREID
 * @property integer $MASTERORDERID
 * @property double $SUBORDERCOUNT
 * @property string $CONSIGNEEDESC
 * @property string $SHIPPINGDESC
 * @property double $PAIDAMOUNT
 * @property double $DISCOUNTAMOUNT
 * @property integer $ISCOD
 * @property string $FAVOURACTNAME
 * @property string $FEEDBACK
 * @property integer $USEDGIFTCARDS
 * @property string $GIFTCARDSPAYDETAIL
 * @property double $GIFTCARDSPAYAMOUNT
 * @property double $GCARDSPAIDAMOUNT
 * @property double $BALANCEPAIDAMOUNT
 */
class ONESHOPORDER extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'ONESHOP_ORDER';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('USERID, SN', 'required'),
            array('USERID, STATE, PAYSTATE, ADDTIME, PAYTIME, PAYMENTID, CONFIRMTIME, SHIPPINGID, SHIPPINGSTATE, SHIPPINGTIME, MASTERORDERID, ISCOD, USEDGIFTCARDS', 'numerical', 'integerOnly' => true),
            array('AMOUNT, SHIPPINGFEE, PAYFEE, GOODSAMOUNT, TAX, ISSYNTOERP, INVOICEID, PARTNERSTOREID, SUBORDERCOUNT, PAIDAMOUNT, DISCOUNTAMOUNT, GIFTCARDSPAYAMOUNT, GCARDSPAIDAMOUNT, BALANCEPAIDAMOUNT', 'numerical'),
            array('SN', 'length', 'max' => 40),
            array('PAYMENTNAME', 'length', 'max' => 240),
            array('INVOICENO, FAVOURACTNAME', 'length', 'max' => 510),
            array('CONSIGNEEDESC', 'length', 'max' => 4000),
            array('SHIPPINGDESC, FEEDBACK', 'length', 'max' => 2000),
            array('GIFTCARDSPAYDETAIL', 'length', 'max' => 1400),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, USERID, SN, STATE, PAYSTATE, ADDTIME, PAYTIME, PAYMENTID, AMOUNT, SHIPPINGFEE, PAYFEE, GOODSAMOUNT, PAYMENTNAME, CONFIRMTIME, SHIPPINGID, SHIPPINGSTATE, SHIPPINGTIME, TAX, INVOICENO, ISSYNTOERP, INVOICEID, PARTNERSTOREID, MASTERORDERID, SUBORDERCOUNT, CONSIGNEEDESC, SHIPPINGDESC, PAIDAMOUNT, DISCOUNTAMOUNT, ISCOD, FAVOURACTNAME, FEEDBACK, USEDGIFTCARDS, GIFTCARDSPAYDETAIL, GIFTCARDSPAYAMOUNT, GCARDSPAIDAMOUNT, BALANCEPAIDAMOUNT', 'safe', 'on' => 'search'),
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
            'user' => array(self::BELONGS_TO, 'ONESHOPUSER', 'USERID'),
//            'giftcards' => array(self::HAS_MANY, 'ONESHOPGIFTCARDS', '', 'on' => 'ORDERSN=SN'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'ID' => 'ID',
            'USERID' => 'Userid',
            'SN' => '订单号',
            'STATE' => 'State',
            'PAYSTATE' => 'Paystate',
            'ADDTIME' => 'Addtime',
            'PAYTIME' => 'Paytime',
            'PAYMENTID' => 'Paymentid',
            'AMOUNT' => 'Amount',
            'SHIPPINGFEE' => 'Shippingfee',
            'PAYFEE' => 'Payfee',
            'GOODSAMOUNT' => 'Goodsamount',
            'PAYMENTNAME' => 'Paymentname',
            'CONFIRMTIME' => 'Confirmtime',
            'SHIPPINGID' => 'Shippingid',
            'SHIPPINGSTATE' => 'Shippingstate',
            'SHIPPINGTIME' => 'Shippingtime',
            'TAX' => 'Tax',
            'INVOICENO' => 'Invoiceno',
            'ISSYNTOERP' => 'Issyntoerp',
            'INVOICEID' => 'Invoiceid',
            'PARTNERSTOREID' => 'Partnerstoreid',
            'MASTERORDERID' => 'Masterorderid',
            'SUBORDERCOUNT' => 'Subordercount',
            'CONSIGNEEDESC' => 'Consigneedesc',
            'SHIPPINGDESC' => 'Shippingdesc',
            'PAIDAMOUNT' => 'Paidamount',
            'DISCOUNTAMOUNT' => 'Discountamount',
            'ISCOD' => 'Iscod',
            'FAVOURACTNAME' => 'Favouractname',
            'FEEDBACK' => 'Feedback',
            'USEDGIFTCARDS' => 'Usedgiftcards',
            'GIFTCARDSPAYDETAIL' => 'Giftcardspaydetail',
            'GIFTCARDSPAYAMOUNT' => 'Giftcardspayamount',
            'GCARDSPAIDAMOUNT' => 'Gcardspaidamount',
            'BALANCEPAIDAMOUNT' => 'Balancepaidamount',
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

        $criteria = new CDbCriteria;

        $criteria->compare('ID', $this->ID);
        $criteria->compare('USERID', $this->USERID);
        $criteria->compare('SN', $this->SN, true);
        $criteria->compare('STATE', $this->STATE);
        $criteria->compare('PAYSTATE', $this->PAYSTATE);
        $criteria->compare('ADDTIME', $this->ADDTIME);
        $criteria->compare('PAYTIME', $this->PAYTIME);
        $criteria->compare('PAYMENTID', $this->PAYMENTID);
        $criteria->compare('AMOUNT', $this->AMOUNT);
        $criteria->compare('SHIPPINGFEE', $this->SHIPPINGFEE);
        $criteria->compare('PAYFEE', $this->PAYFEE);
        $criteria->compare('GOODSAMOUNT', $this->GOODSAMOUNT);
        $criteria->compare('PAYMENTNAME', $this->PAYMENTNAME, true);
        $criteria->compare('CONFIRMTIME', $this->CONFIRMTIME);
        $criteria->compare('SHIPPINGID', $this->SHIPPINGID);
        $criteria->compare('SHIPPINGSTATE', $this->SHIPPINGSTATE);
        $criteria->compare('SHIPPINGTIME', $this->SHIPPINGTIME);
        $criteria->compare('TAX', $this->TAX);
        $criteria->compare('INVOICENO', $this->INVOICENO, true);
        $criteria->compare('ISSYNTOERP', $this->ISSYNTOERP);
        $criteria->compare('INVOICEID', $this->INVOICEID);
        $criteria->compare('PARTNERSTOREID', $this->PARTNERSTOREID);
        $criteria->compare('MASTERORDERID', $this->MASTERORDERID);
        $criteria->compare('SUBORDERCOUNT', $this->SUBORDERCOUNT);
        $criteria->compare('CONSIGNEEDESC', $this->CONSIGNEEDESC, true);
        $criteria->compare('SHIPPINGDESC', $this->SHIPPINGDESC, true);
        $criteria->compare('PAIDAMOUNT', $this->PAIDAMOUNT);
        $criteria->compare('DISCOUNTAMOUNT', $this->DISCOUNTAMOUNT);
        $criteria->compare('ISCOD', $this->ISCOD);
        $criteria->compare('FAVOURACTNAME', $this->FAVOURACTNAME, true);
        $criteria->compare('FEEDBACK', $this->FEEDBACK, true);
        $criteria->compare('USEDGIFTCARDS', $this->USEDGIFTCARDS);
        $criteria->compare('GIFTCARDSPAYDETAIL', $this->GIFTCARDSPAYDETAIL, true);
        $criteria->compare('GIFTCARDSPAYAMOUNT', $this->GIFTCARDSPAYAMOUNT);
        $criteria->compare('GCARDSPAIDAMOUNT', $this->GCARDSPAIDAMOUNT);
        $criteria->compare('BALANCEPAIDAMOUNT', $this->BALANCEPAIDAMOUNT);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ONESHOPORDER the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
