<?php

class ONESHOPGCARDSUSELOGController extends Controller
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
                'actions' => array(''),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'excel', 'count'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
//    public function actionView($id)
//    {
//        $this->render('view', array(
//            'model' => $this->loadModel($id),
//        ));
//    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
//    public function actionCreate()
//    {
//        $model = new ONESHOPGCARDSUSELOG;
//
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
//        if (isset($_POST['ONESHOPGCARDSUSELOG']))
//        {
//            $model->attributes = $_POST['ONESHOPGCARDSUSELOG'];
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
//    public function actionUpdate($id)
//    {
//        $model = $this->loadModel($id);
//
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
//        if (isset($_POST['ONESHOPGCARDSUSELOG']))
//        {
//            $model->attributes = $_POST['ONESHOPGCARDSUSELOG'];
//            if ($model->save())
//                $this->redirect(array('view', 'id' => $model->ID));
//        }
//
//        $this->render('update', array(
//            'model' => $model,
//        ));
//    }

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
        $model = new ONESHOPGCARDSUSELOG('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ONESHOPGCARDSUSELOG']))
            $model->attributes = $_POST['ONESHOPGCARDSUSELOG'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * @remark 统计
     */
    public function actionCount()
    {
        $model = new ONESHOPGCARDSUSELOG('search');
        $model->unsetAttributes();
        if (isset($_POST['ONESHOPGCARDSUSELOG']))
        {
            $model->attributes = $_POST['ONESHOPGCARDSUSELOG'];
        }

        $this->render('count', array(
            'model' => $model,
        ));
    }

    /**
     * @remark 导出excel
     */
    public function actionExcel()
    {
        $data = '';
        $date = date('Ymd');
        $filename = '新建Excel表';
        $data .= "所属店名称\t时间\t工作站号\t工号\t小票号\t读书卡号\t金额（元）\t备注\n";

        header("Content-type: application/vnd.ms-excel; charset=UTF-8");
        header("Content-Disposition: attachment; filename=$filename$date.xls");

        $search_data = $this->Excel();
        foreach ($search_data as $value)
        {
            $jcd_name = $value->jcd->DWMQC;
            $data .= "$jcd_name\t";
            $date = date('Y-m-d H:i:s', $value->ADDTIME);
            $data .= "$date\t";
            $data .= "$value->POSID\t";
            $data .= "$value->WORKERID\t";
            $data .= "$value->ORDERSN\t";
            $data .= "$value->GIFTCARDSSN\t";
            $data .= "$value->AMOUNT\t";
            $data .= "$value->DESCRIPTION\n";
        }

        echo iconv('UTF-8', 'GB18030', $data);   //为兼容office
        Yii::app()->end();
    }

    /**
     * @remark 导出Excel
     */
    protected function Excel()
    {
        $start_date = empty($_REQUEST['ONESHOPGCARDSUSELOG']['ADDTIME']['start_date']) ? null : strtotime($_REQUEST['ONESHOPGCARDSUSELOG']['ADDTIME']['start_date']);
        $end_date = empty($_REQUEST['ONESHOPGCARDSUSELOG']['ADDTIME']['end_date']) ? null : strtotime($_REQUEST['ONESHOPGCARDSUSELOG']['ADDTIME']['end_date']);
        if (!is_null($start_date) && !is_null($end_date) && $start_date == $end_date)
        {
            $end_date = ONESHOPGIFTCARDS::model()->addsec($end_date);
        }

        $criteria = new CDbCriteria();
        if (!empty($_REQUEST['ONESHOPGCARDSUSELOG']['ORDERSN']))
        {
            $criteria->compare('ORDERSN', $_REQUEST['ONESHOPGCARDSUSELOG']['ORDERSN'], true);
        }
        if (!empty($_REQUEST['ONESHOPGCARDSUSELOG']['GIFTCARDSSN']))
        {
            $criteria->compare('GIFTCARDSSN', $_REQUEST['ONESHOPGCARDSUSELOG']['GIFTCARDSSN'], true);
        }
        if (!empty($end_date))
        {
            $criteria->compare('ADDTIME', '<=' . $end_date);
        }
        if (!empty($start_date))
        {
            $criteria->compare('ADDTIME', '>=' . $start_date);
        }
        if (!empty($_REQUEST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['enable']) && empty($_REQUEST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['disable']))
        {
            $criteria->compare('DESCRIPTION', '实体店刷卡消费');
        }
        if (!empty($_REQUEST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['disable']) && empty($_REQUEST['ONESHOPGCARDSUSELOG']['DESCRIPTION']['enable']))
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

        $criteria->with = 'jcd';

        return ONESHOPGCARDSUSELOG::model()->findAll($criteria);
    }

    /**
     * Manages all models.
     */
//    public function actionAdmin()
//    {
//        $model = new ONESHOPGCARDSUSELOG('search');
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_GET['ONESHOPGCARDSUSELOG']))
//            $model->attributes = $_GET['ONESHOPGCARDSUSELOG'];
//
//        $this->render('admin', array(
//            'model' => $model,
//        ));
//    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ONESHOPGCARDSUSELOG the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = ONESHOPGCARDSUSELOG::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ONESHOPGCARDSUSELOG $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'oneshopgcardsuselog-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
