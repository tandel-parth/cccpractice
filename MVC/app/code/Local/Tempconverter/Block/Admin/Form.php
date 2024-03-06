<?php

class Tempconverter_Block_Admin_Form extends Core_Block_Template
{
    public function __construct(){
        $this->setTemplate("tempconverter/admin/form.phtml");
    }

    public function getTempconverter(){  
        return Mage::getModel('banner/banner')->load($this->getRequest()->getParams('id',0));
      }
      
    

}