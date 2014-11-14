<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $user = ONESHOPJCDJCXXB::model()->findByAttributes(array('USERNAME' => $this->username));

        if ($user == null)
        {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        }
        elseif ($user->USERPASS != md5($this->password))
        {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        else
        {
            Yii::app()->user->name = $user->USERNAME;
            $this->setState('id', $user->ID);
            $this->setState('dwmqc', $user->DWMQC);
            $this->setState('khid', $user->KHID);
            //将登录用户信息存入session
//            $session = Yii::app()->session;
//            $session['id'] = $user->ID;
//            $session['dwmqc'] = $user->DWMQC;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

}
