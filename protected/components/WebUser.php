<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebUser
 *
 * @author 7sins
 */
class WebUser extends CWebUser
{

    private $_model;

//    function getFirst_Name()
//    {
//        $user = $this->loadUser(Yii::app()->user->id);
//        return $user->USERNAME;
//    }

    function isAdmin()
    {
        $user = $this->loadUser(Yii::app()->session['id']);
        if (!$user)
        {
            return 0;
        }
        else
        {
            return 'admin';
        }
    }

    protected function loadUser($id = null)
    {
        if ($this->_model === null)
        {
            if ($id !== null && $id == '2527')
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

}
