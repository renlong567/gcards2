<?php

/**
 * This is the model class for table "ONESHOP_USER".
 *
 * The followings are the available columns in table 'ONESHOP_USER':
 * @property integer $ID
 * @property string $NAME
 * @property string $PASSWORD
 * @property string $EMAIL
 * @property string $BIGAVATAR
 * @property string $MIDDLEAVATAR
 * @property string $SMALLAVATAR
 * @property string $CREDIT
 * @property double $BALANCE
 * @property integer $REGTIME
 * @property integer $ISDELED
 * @property string $REALNAME
 * @property integer $SEX
 * @property string $ADDRESS
 * @property string $BIRTHDAY
 * @property string $CONTACTEMAIL
 * @property string $QQ
 * @property string $MSN
 * @property string $AWORD
 * @property string $DOMAIN
 * @property string $NICKNAME
 * @property string $PENNAME
 * @property string $CARDNUMBER
 * @property string $ROLES
 * @property string $RESUME
 * @property string $PHONE
 * @property string $DETAILADDRESS
 * @property string $ZIPCODE
 * @property string $RELATESOURCEID
 * @property integer $REGSOURCE
 * @property integer $ISCHECKEDEMAIL
 * @property integer $ISSIGNED
 * @property integer $ISINVOKED
 * @property string $INVOKECODE
 * @property integer $INVOKETIME
 */
class ONESHOPUSER extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'ONESHOP_USER';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('PASSWORD, EMAIL, NICKNAME', 'required'),
            array('REGTIME, ISDELED, SEX, REGSOURCE, ISCHECKEDEMAIL, ISSIGNED, ISINVOKED, INVOKETIME', 'numerical', 'integerOnly' => true),
            array('BALANCE', 'numerical'),
            array('NAME, PASSWORD, AWORD, NICKNAME, PENNAME, INVOKECODE', 'length', 'max' => 128),
            array('EMAIL, CONTACTEMAIL', 'length', 'max' => 256),
            array('BIGAVATAR, MIDDLEAVATAR, SMALLAVATAR', 'length', 'max' => 512),
            array('CREDIT', 'length', 'max' => 64),
            array('REALNAME, QQ, MSN', 'length', 'max' => 32),
            array('ADDRESS, BIRTHDAY, DETAILADDRESS', 'length', 'max' => 200),
            array('DOMAIN', 'length', 'max' => 20),
            array('CARDNUMBER, ROLES, PHONE, ZIPCODE', 'length', 'max' => 40),
            array('RESUME', 'length', 'max' => 1000),
            array('RELATESOURCEID', 'length', 'max' => 500),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, NAME, PASSWORD, EMAIL, BIGAVATAR, MIDDLEAVATAR, SMALLAVATAR, CREDIT, BALANCE, REGTIME, ISDELED, REALNAME, SEX, ADDRESS, BIRTHDAY, CONTACTEMAIL, QQ, MSN, AWORD, DOMAIN, NICKNAME, PENNAME, CARDNUMBER, ROLES, RESUME, PHONE, DETAILADDRESS, ZIPCODE, RELATESOURCEID, REGSOURCE, ISCHECKEDEMAIL, ISSIGNED, ISINVOKED, INVOKECODE, INVOKETIME', 'safe', 'on' => 'search'),
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
            'orders' => array(self::HAS_MANY, 'ONESHOPORDER', 'USERID'),
        );
    }

    public function contactsToString()
    {
        $return = '';
        foreach ($this->orders as $order)
        {
            $return .= $order->SN . ' ';
        }
        return $return;
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'ID' => 'ID',
            'NAME' => '用户名',
            'EMAIL' => 'Email',
            'BIGAVATAR' => 'Bigavatar',
            'MIDDLEAVATAR' => 'Middleavatar',
            'SMALLAVATAR' => 'Smallavatar',
            'CREDIT' => 'Credit',
            'BALANCE' => 'Balance',
            'REGTIME' => 'Regtime',
            'ISDELED' => 'Isdeled',
            'REALNAME' => 'Realname',
            'SEX' => 'Sex',
            'ADDRESS' => 'Address',
            'BIRTHDAY' => 'Birthday',
            'CONTACTEMAIL' => 'Contactemail',
            'QQ' => 'Qq',
            'MSN' => 'Msn',
            'AWORD' => 'Aword',
            'DOMAIN' => 'Domain',
            'NICKNAME' => 'Nickname',
            'PENNAME' => 'Penname',
            'CARDNUMBER' => 'Cardnumber',
            'ROLES' => 'Roles',
            'RESUME' => 'Resume',
            'PHONE' => 'Phone',
            'DETAILADDRESS' => 'Detailaddress',
            'ZIPCODE' => 'Zipcode',
            'RELATESOURCEID' => 'Relatesourceid',
            'REGSOURCE' => 'Regsource',
            'ISCHECKEDEMAIL' => 'Ischeckedemail',
            'ISSIGNED' => 'Issigned',
            'ISINVOKED' => 'Isinvoked',
            'INVOKECODE' => 'Invokecode',
            'INVOKETIME' => 'Invoketime',
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
        $criteria->compare('NAME', $this->NAME, true);
        $criteria->compare('PASSWORD', $this->PASSWORD, true);
        $criteria->compare('EMAIL', $this->EMAIL, true);
        $criteria->compare('BIGAVATAR', $this->BIGAVATAR, true);
        $criteria->compare('MIDDLEAVATAR', $this->MIDDLEAVATAR, true);
        $criteria->compare('SMALLAVATAR', $this->SMALLAVATAR, true);
        $criteria->compare('CREDIT', $this->CREDIT, true);
        $criteria->compare('BALANCE', $this->BALANCE);
        $criteria->compare('REGTIME', $this->REGTIME);
        $criteria->compare('ISDELED', $this->ISDELED);
        $criteria->compare('REALNAME', $this->REALNAME, true);
        $criteria->compare('SEX', $this->SEX);
        $criteria->compare('ADDRESS', $this->ADDRESS, true);
        $criteria->compare('BIRTHDAY', $this->BIRTHDAY, true);
        $criteria->compare('CONTACTEMAIL', $this->CONTACTEMAIL, true);
        $criteria->compare('QQ', $this->QQ, true);
        $criteria->compare('MSN', $this->MSN, true);
        $criteria->compare('AWORD', $this->AWORD, true);
        $criteria->compare('DOMAIN', $this->DOMAIN, true);
        $criteria->compare('NICKNAME', $this->NICKNAME, true);
        $criteria->compare('PENNAME', $this->PENNAME, true);
        $criteria->compare('CARDNUMBER', $this->CARDNUMBER, true);
        $criteria->compare('ROLES', $this->ROLES, true);
        $criteria->compare('RESUME', $this->RESUME, true);
        $criteria->compare('PHONE', $this->PHONE, true);
        $criteria->compare('DETAILADDRESS', $this->DETAILADDRESS, true);
        $criteria->compare('ZIPCODE', $this->ZIPCODE, true);
        $criteria->compare('RELATESOURCEID', $this->RELATESOURCEID, true);
        $criteria->compare('REGSOURCE', $this->REGSOURCE);
        $criteria->compare('ISCHECKEDEMAIL', $this->ISCHECKEDEMAIL);
        $criteria->compare('ISSIGNED', $this->ISSIGNED);
        $criteria->compare('ISINVOKED', $this->ISINVOKED);
        $criteria->compare('INVOKECODE', $this->INVOKECODE, true);
        $criteria->compare('INVOKETIME', $this->INVOKETIME);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ONESHOPUSER the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
