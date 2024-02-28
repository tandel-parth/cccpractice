<?php
class Customer_Controller_Account extends Core_Controller_Front_Action{
    public function registerAction()
    {
        $layout = $this->getLayout();
        $this->includeCss('form.css');
        $child = $layout->getChild('content');
        $register = $layout->createBlock('customer/register');
        $child->addChild('register', $register);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $registerModel = $this->getRequest()->getParams('customer');
        Mage::getModel('customer/Register')
            ->setData($registerModel)
            ->save();
    }
}