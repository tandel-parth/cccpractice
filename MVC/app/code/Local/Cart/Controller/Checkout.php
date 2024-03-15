<?php

class Cart_Controller_Checkout extends Core_Controller_Front_Action{
    protected $_loginRequiredActions = [];

    public function init(){
        // $action = $this->getRequest()->getActionName();
        // echo (in_array($action, $this->_loginRequiredActions));
        // if( in_array($action, $this->_loginRequiredActions) ) {
            $customerId = Mage::getSingleton('core/session')
                ->get('logged_in_customer_id');
            if( !$customerId ) {
                $quoteId = Mage::getSingleton("core/session")->get('quote_id');
                Mage::getSingleton("core/session")->set("checkout",$quoteId );
                $this->setRedirect('customer/account/login');
                exit() ;
            }
        // }
    }
    public function indexAction(){
        $this->includeCss('carts.css');
        $this->includeCss('checkouts.css');
        $this->includeCss('formss.css');
        $layout = $this->getLayout();
        $child = $layout->getchild('content');
        $checkout = $layout->createBlock('cart/checkout');
        $child->addChild('checkout',$checkout);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $address = $this->getRequest()->getparams("checkout_customer");
        $payment = $this->getRequest()->getparams("payment");
        $shipping = $this->getRequest()->getparams("shipping");

        $model=Mage::getSingleton('sales/quote');
        $model->saveAddress($address);
        $model->savePayment($payment);
        $model->saveShipping($shipping);
        //method
        
        // $this->setRedirect('')
    }
}


?>