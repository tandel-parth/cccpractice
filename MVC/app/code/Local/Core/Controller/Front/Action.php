<?php
class Core_Controller_Front_Action
{
    protected $_layout = null;
    public function __construct()
    {
        $this->init();
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css');
    }
    public function init(){
        return $this;
    }
    public function getLayout()
    {
        if (is_null($this->_layout)) {
            $this->_layout = Mage::getBlock('core/layout');
        }
        return $this->_layout;
    }
    public function getRequest()
    {
        return Mage::getModel('core/request');
    }
    public function includeCss($file = null)
    {
        if (!is_null($file)) {
            $this->_layout->getChild('head')->addCss($file);
        }
    }

    public function setRedirect($url){
        $url = Mage::getBaseUrla().$url;
        header('Location: '.$url);
    }
    
}