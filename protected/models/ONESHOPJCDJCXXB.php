<?php

/**
 * This is the model class for table "ONESHOP_JCDJCXXB".
 *
 * The followings are the available columns in table 'ONESHOP_JCDJCXXB':
 * @property string $KHID
 * @property string $DWMQC
 * @property string $DWJC
 * @property string $KHLXBH_FK
 * @property string $JJXZBM_FK
 * @property string $SFCBS
 * @property string $CWKHLB
 * @property string $KHLB
 * @property string $DWDZ
 * @property string $DWDH
 * @property string $FR
 * @property string $FRTXTZ
 * @property string $FRYB
 * @property string $FRDH
 * @property string $FRCZ
 * @property string $FREMAIL
 * @property string $KHYH
 * @property string $HH
 * @property string $ZH
 * @property string $SWH
 * @property string $SPDH
 * @property string $SPDDH
 * @property double $SPQD
 * @property string $TSDH
 * @property double $JSQD
 * @property string $JSBZ
 * @property string $JSFS
 * @property string $DZJS
 * @property integer $XYDJ
 * @property string $XZKHBZ
 * @property string $XZDKH
 * @property string $JKBZ
 * @property string $PFBZ
 * @property double $YSK
 * @property double $YFK
 * @property string $KHSDBZ
 * @property string $KHJYMM
 * @property double $HTFHZK
 * @property double $HTGHZK
 * @property string $ZKLX
 * @property string $KYBZ
 * @property string $CJRQ
 * @property string $BZR
 * @property string $BZ
 * @property string $BMBH
 * @property double $NZXSMY
 * @property double $NZGHMY
 * @property string $DMJB
 * @property string $CSPC
 * @property string $CSBZ
 * @property string $CSCLZT
 * @property string $FGR
 * @property string $GHSXL
 * @property string $XHDXL
 * @property string $TSDW_MCSX
 * @property integer $ID
 * @property string $USERNAME
 * @property string $USERPASS
 */
class ONESHOPJCDJCXXB extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'ONESHOP_JCDJCXXB';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('USERNAME,USERPASS', 'required'),
//			array('XYDJ', 'numerical', 'integerOnly'=>true),
//			array('SPQD, JSQD, YSK, YFK, HTFHZK, HTGHZK, NZXSMY, NZGHMY', 'numerical'),
//			array('KHID, JJXZBM_FK, SFCBS, SPDH, TSDH, JSBZ, JSFS, DZJS, XZKHBZ, JKBZ, PFBZ, KHSDBZ, KHJYMM, ZKLX, KYBZ, DMJB, CSBZ, CSCLZT, FGR, GHSXL, XHDXL', 'length', 'max'=>10),
//			array('DWMQC', 'length', 'max'=>60),
//			array('DWJC', 'length', 'max'=>50),
//			array('KHLXBH_FK, CWKHLB, KHLB', 'length', 'max'=>1),
//			array('DWDZ, BZ', 'length', 'max'=>100),
//			array('DWDH', 'length', 'max'=>13),
//			array('FR, XZDKH, CSPC, TSDW_MCSX', 'length', 'max'=>8),
//			array('FRTXTZ, KHYH', 'length', 'max'=>40),
//			array('FRYB', 'length', 'max'=>6),
//			array('FRDH, FRCZ, SPDDH', 'length', 'max'=>14),
//			array('FREMAIL, SWH, CJRQ, USERNAME', 'length', 'max'=>20),
//			array('HH, BZR', 'length', 'max'=>5),
//			array('ZH', 'length', 'max'=>24),
//			array('BMBH', 'length', 'max'=>2),
            array('USERPASS', 'length', 'max' => 32),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('KHID, DWMQC, DWJC, KHLXBH_FK, JJXZBM_FK, SFCBS, CWKHLB, KHLB, DWDZ, DWDH, FR, FRTXTZ, FRYB, FRDH, FRCZ, FREMAIL, KHYH, HH, ZH, SWH, SPDH, SPDDH, SPQD, TSDH, JSQD, JSBZ, JSFS, DZJS, XYDJ, XZKHBZ, XZDKH, JKBZ, PFBZ, YSK, YFK, KHSDBZ, KHJYMM, HTFHZK, HTGHZK, ZKLX, KYBZ, CJRQ, BZR, BZ, BMBH, NZXSMY, NZGHMY, DMJB, CSPC, CSBZ, CSCLZT, FGR, GHSXL, XHDXL, TSDW_MCSX, ID, USERNAME, USERPASS', 'safe', 'on' => 'search'),
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
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'KHID' => 'Khid',
            'DWMQC' => 'Dwmqc',
            'DWJC' => 'Dwjc',
            'KHLXBH_FK' => 'Khlxbh Fk',
            'JJXZBM_FK' => 'Jjxzbm Fk',
            'SFCBS' => 'Sfcbs',
            'CWKHLB' => 'Cwkhlb',
            'KHLB' => 'Khlb',
            'DWDZ' => 'Dwdz',
            'DWDH' => 'Dwdh',
            'FR' => 'Fr',
            'FRTXTZ' => 'Frtxtz',
            'FRYB' => 'Fryb',
            'FRDH' => 'Frdh',
            'FRCZ' => 'Frcz',
            'FREMAIL' => 'Fremail',
            'KHYH' => 'Khyh',
            'HH' => 'Hh',
            'ZH' => 'Zh',
            'SWH' => 'Swh',
            'SPDH' => 'Spdh',
            'SPDDH' => 'Spddh',
            'SPQD' => 'Spqd',
            'TSDH' => 'Tsdh',
            'JSQD' => 'Jsqd',
            'JSBZ' => 'Jsbz',
            'JSFS' => 'Jsfs',
            'DZJS' => 'Dzjs',
            'XYDJ' => 'Xydj',
            'XZKHBZ' => 'Xzkhbz',
            'XZDKH' => 'Xzdkh',
            'JKBZ' => 'Jkbz',
            'PFBZ' => 'Pfbz',
            'YSK' => 'Ysk',
            'YFK' => 'Yfk',
            'KHSDBZ' => 'Khsdbz',
            'KHJYMM' => 'Khjymm',
            'HTFHZK' => 'Htfhzk',
            'HTGHZK' => 'Htghzk',
            'ZKLX' => 'Zklx',
            'KYBZ' => 'Kybz',
            'CJRQ' => 'Cjrq',
            'BZR' => 'Bzr',
            'BZ' => 'Bz',
            'BMBH' => 'Bmbh',
            'NZXSMY' => 'Nzxsmy',
            'NZGHMY' => 'Nzghmy',
            'DMJB' => 'Dmjb',
            'CSPC' => 'Cspc',
            'CSBZ' => 'Csbz',
            'CSCLZT' => 'Csclzt',
            'FGR' => 'Fgr',
            'GHSXL' => 'Ghsxl',
            'XHDXL' => 'Xhdxl',
            'TSDW_MCSX' => 'Tsdw Mcsx',
            'ID' => 'ID',
            'USERNAME' => 'Username',
            'USERPASS' => '登录密码',
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

        $criteria->compare('KHID', $this->KHID, true);
        $criteria->compare('DWMQC', $this->DWMQC, true);
        $criteria->compare('DWJC', $this->DWJC, true);
        $criteria->compare('KHLXBH_FK', $this->KHLXBH_FK, true);
        $criteria->compare('JJXZBM_FK', $this->JJXZBM_FK, true);
        $criteria->compare('SFCBS', $this->SFCBS, true);
        $criteria->compare('CWKHLB', $this->CWKHLB, true);
        $criteria->compare('KHLB', $this->KHLB, true);
        $criteria->compare('DWDZ', $this->DWDZ, true);
        $criteria->compare('DWDH', $this->DWDH, true);
        $criteria->compare('FR', $this->FR, true);
        $criteria->compare('FRTXTZ', $this->FRTXTZ, true);
        $criteria->compare('FRYB', $this->FRYB, true);
        $criteria->compare('FRDH', $this->FRDH, true);
        $criteria->compare('FRCZ', $this->FRCZ, true);
        $criteria->compare('FREMAIL', $this->FREMAIL, true);
        $criteria->compare('KHYH', $this->KHYH, true);
        $criteria->compare('HH', $this->HH, true);
        $criteria->compare('ZH', $this->ZH, true);
        $criteria->compare('SWH', $this->SWH, true);
        $criteria->compare('SPDH', $this->SPDH, true);
        $criteria->compare('SPDDH', $this->SPDDH, true);
        $criteria->compare('SPQD', $this->SPQD);
        $criteria->compare('TSDH', $this->TSDH, true);
        $criteria->compare('JSQD', $this->JSQD);
        $criteria->compare('JSBZ', $this->JSBZ, true);
        $criteria->compare('JSFS', $this->JSFS, true);
        $criteria->compare('DZJS', $this->DZJS, true);
        $criteria->compare('XYDJ', $this->XYDJ);
        $criteria->compare('XZKHBZ', $this->XZKHBZ, true);
        $criteria->compare('XZDKH', $this->XZDKH, true);
        $criteria->compare('JKBZ', $this->JKBZ, true);
        $criteria->compare('PFBZ', $this->PFBZ, true);
        $criteria->compare('YSK', $this->YSK);
        $criteria->compare('YFK', $this->YFK);
        $criteria->compare('KHSDBZ', $this->KHSDBZ, true);
        $criteria->compare('KHJYMM', $this->KHJYMM, true);
        $criteria->compare('HTFHZK', $this->HTFHZK);
        $criteria->compare('HTGHZK', $this->HTGHZK);
        $criteria->compare('ZKLX', $this->ZKLX, true);
        $criteria->compare('KYBZ', $this->KYBZ, true);
        $criteria->compare('CJRQ', $this->CJRQ, true);
        $criteria->compare('BZR', $this->BZR, true);
        $criteria->compare('BZ', $this->BZ, true);
        $criteria->compare('BMBH', $this->BMBH, true);
        $criteria->compare('NZXSMY', $this->NZXSMY);
        $criteria->compare('NZGHMY', $this->NZGHMY);
        $criteria->compare('DMJB', $this->DMJB, true);
        $criteria->compare('CSPC', $this->CSPC, true);
        $criteria->compare('CSBZ', $this->CSBZ, true);
        $criteria->compare('CSCLZT', $this->CSCLZT, true);
        $criteria->compare('FGR', $this->FGR, true);
        $criteria->compare('GHSXL', $this->GHSXL, true);
        $criteria->compare('XHDXL', $this->XHDXL, true);
        $criteria->compare('TSDW_MCSX', $this->TSDW_MCSX, true);
        $criteria->compare('ID', $this->ID);
        $criteria->compare('USERNAME', $this->USERNAME, true);
        $criteria->compare('USERPASS', $this->USERPASS, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ONESHOPJCDJCXXB the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
