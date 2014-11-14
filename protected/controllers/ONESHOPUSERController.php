<?php

class ONESHOPUSERController extends Controller
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
                'actions' => array(''),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'index', 'view', 'create', 'update', 'logout', 'login'),
                'users' => array('admin'),
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
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new ONESHOPUSER;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ONESHOPUSER']))
        {
            $model->attributes = $_POST['ONESHOPUSER'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ONESHOPUSER']))
        {
            $model->attributes = $_POST['ONESHOPUSER'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('ONESHOPUSER');
        $model = new ONESHOPUSER('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ONESHOPUSER']))
        {
            $model->attributes = $_POST['ONESHOPUSER'];
        }

        $this->render('view1', array(
            'dataProvider' => $dataProvider,
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new ONESHOPUSER('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ONESHOPUSER']))
            $model->attributes = $_GET['ONESHOPUSER'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ONESHOPUSER the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = ONESHOPUSER::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ONESHOPUSER $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'oneshopuser-form')
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
        $model = new LoginForm;
        $result = array('status' => 0, 'msg' => '');
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
            {
                $result['status'] = 1;
                $result['msg'] = '登陆成功，正在转至后台首页...';
                $result['url'] = 'index.php?r=ONESHOPUSER';
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

}
