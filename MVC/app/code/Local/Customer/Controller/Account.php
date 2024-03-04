<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    // protected $_allowedActions = ['login', 'register'];
    protected $_loginRequiredActions = [
        'dashboard'
    ];

    public function init(){
        $action = $this->getRequest()->getActionName();
        if( in_array($action, $this->_loginRequiredActions) ) {
            $customerId = Mage::getSingleton('core/session')
                ->get('logged_in_customer_id');
            if( !$customerId ) {
                $this->setRedirect('customer/account/login');
                exit() ;
            }
        }
        
        
    }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $this->includeCss('form.css');
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $register = $layout->createBlock('customer/register');
        $child->addChild('register', $register);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $registerData = $this->getRequest()->getParams('customer');
        $result = Mage::getModel('customer/customer')
            ->setData($registerData)
            ->save();
        if ($registerData['category_id']) {
            if ($result) {
                echo '<script>alert("Data Update successfully")</script>';
                echo "<script>location.href='" . Mage::getBaseUrl() . '/admin/catalog_category/list' . "'</script>";
            } else {
                echo '<script>alert("Dofa Code Ma Locha Chhe")</script>';
            }
        } else {
            if ($result) {
                echo '<script>alert("Data Insert successfully")</script>';
                echo "<script>location.href='" . Mage::getBaseUrl() . '/admin/catalog_category/list' . "'</script>";
            } else {
                echo '<script>alert("Dofa Code Ma Locha Chhe")</script>';
            }
        }
    }
    public function loginAction()
    {
        if(isset($_POST['Submit'])) {
            $data = $this->getRequest()->getParams("customer");
            $model= Mage::getModel("customer/customer");
            $result =   $model->getCollection()
            ->addFieldToFilter("customer_email", $data["customer_email"])
            ->addFieldToFilter("password", $data["password"]);;
            $count=0;
            $customerId =0;
            foreach($result->getData() as $row){
                $count++;
                $customerId = $row->getCustomerId();
                
            }
            if($count){
                
                Mage::getSingleton("core/session")->set("logged_in_customer_id",$customerId);
                print_r($_SESSION);
                // die();
                $this->setRedirect('customer/account/dashboard');
            }else{
                echo '<script>alert("Dofa password to sarkho nakh!!!!!")</script>';
                echo "<script>location.href='" . Mage::getBaseUrl() . '/customer/account/login' . "'</script>";

            }
        }else{
            $layout = $this->getLayout();
            $layout->removeChild('header')->removeChild('footer');
            $this->includeCss('form.css');
            $child = $layout->getChild('content');
            $login = $layout->createBlock('customer/login');
            $child->addChild('login', $login);
            $layout->toHtml();
        }
    }
    public function dashboardAction(){
        $sessionId = Mage::getSingleton("core/session")->get("logged_in_customer_id");
        if($sessionId){
            $layout = $this->getLayout();
            $this->includeCss('dashboard.css');
            $child = $layout->getChild('content');
            $login = $layout->createBlock('customer/dashboard');
            $child->addChild('login', $login);
            $layout->toHtml();
         
        }
     }
}