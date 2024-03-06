<?php

class Admin_Controller_User extends Core_Controller_Admin_Action{
    protected $_allowedActions = array('login');

    protected $_userName = 'admin@gmail.com';
    protected $_password = '123';
    protected $_loginRequiredActions = [
        'dashboard'
    ];

    public function init(){
        $action = $this->getRequest()->getActionName();
        if( in_array($action, $this->_loginRequiredActions) ) {
            $customerId = Mage::getSingleton('core/session')
                ->get('logged_in_admin_user_id');
            if( !$customerId ) {
                $this->setRedirect('customer/account/login');
                exit() ;
            }
        }
    }
    public function loginAction()
    {
        if(isset($_POST['Submit'])) {
            $data = $this->getRequest()->getParams("admin");
            if($this->_userName == $data['admin_email'] && $this->_password == $data['password']){
                
                Mage::getSingleton("core/session")->set("logged_in_admin_user_id",$this->_userName);
                // die();
                $this->setRedirect('admin/user/dashboard');
            }else{
                echo '<script>alert("Dofa password to sarkho nakh!!!!!")</script>';
                echo "<script>location.href='" . Mage::getBaseUrl() . 'catalog/admin_account/login' . "'</script>";

            }
        }else{
            $layout = $this->getLayout();
            $layout->removeChild('header')->removeChild('footer');
            $this->includeCss('form.css');
            $child = $layout->getChild('content');
            $login = $layout->createBlock('catalog/admin_account_login');
            $child->addChild('login', $login);
            $layout->toHtml();
        }
    }
    public function dashboardAction(){
        $sessionId = Mage::getSingleton("core/session")->get("logged_in_admin_user_id");
        if($sessionId){
            $layout = $this->getLayout();
            $this->includeCss('dashboard.css');
            $child = $layout->getChild('content');
            $login = $layout->createBlock('catalog/admin_account_dashboard');
            $child->addChild('login', $login);
            $layout->toHtml();
         
        }
     }
}