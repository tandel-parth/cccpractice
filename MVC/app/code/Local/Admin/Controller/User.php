<?php

class Admin_Controller_User extends Core_Controller_Admin_Action{
    protected $_allowedActions = array('login');
    public function loginAction()
    {
        $layout = $this->getLayout();
        $this->includeCss('form.css');
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $login = $layout->createBlock('customer/login');
        $child->addChild('login', $login);
        $layout->toHtml();
    }
}