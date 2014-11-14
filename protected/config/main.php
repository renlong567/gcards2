<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    'language' => 'zh_cn',
    'defaultController' => 'ONESHOPGIFTCARDS/index',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
    // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            'loginUrl' => array('ONESHOPGIFTCARDS/login'),
            // enable cookie-based authentication
            'allowAutoLogin' => true,
//            'class'=>'WebUser',
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),

          'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ),
         */
        // uncomment the following to use a MySQL database
//		'db'=>array(
//			'connectionString' => 'mysql:host=localhost;dbname=test',
//			'emulatePrepare' => true,
//			'username' => 'root',
//			'password' => '',
//			'charset' => 'utf8',
//		),
//        'db' => array(
//            'connectionString' => 'oci:dbname=192.168.51.7:1521/orcl;charset=UTF8',
//            'username' => 'yanfatest',
//            'password' => 'yanfatest',
//            'emulatePrepare' => true, // needed by some MySQL installations
//            'enableParamLogging' => true,
//            'enableProfiling' => true,
//            'tablePrefix' => 'oneshop_', //表的前缀
//        ),
        'db' => array(
            'connectionString' => 'oci:dbname=192.168.51.21:1521/edidb;charset=UTF8',
            'username' => 'testdb',
            'password' => 'testdb',
            'emulatePrepare' => true, // needed by some MySQL installations
            'enableParamLogging' => true,
            'enableProfiling' => true,
            'tablePrefix' => 'oneshop_', //表的前缀
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
//            'errorAction' => 'site/error',
            'errorAction' => 'ONESHOPGIFTCARDS/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
