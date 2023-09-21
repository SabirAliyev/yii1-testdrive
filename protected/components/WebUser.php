<?php

Yii::import('application.components.UserIdentity');

class WebUser extends CWebUser
{
    public function isAdmin()
    {
        return (Yii::app()->user->getState('role') === 'admin');
    }
}
