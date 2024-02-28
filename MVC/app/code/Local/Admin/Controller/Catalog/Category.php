<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action{
    public function formAction(){
        $layout = $this->getLayout();
        $this->includeCss('form.css');
        $child = $layout->getChild('content');
        $form = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $form);
        $layout->toHtml(); 
    }
    public function saveAction()
    {
        $categoryData = $this->getRequest()->getParams('catalog_category');
        Mage::getModel('catalog/category')
            ->setData($categoryData)
            ->save();
    }
    public function deleteAction()
    {
        Mage::getModel('catalog/category')
            ->setId($this->getRequest()->getParams('id'))
            ->delete();
    }
    public function listAction(){
        $layout = $this->getLayout();
        $this->includeCss('list.css');
        $child = $layout->getChild('content');
        $categoryList = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $categoryList);
        $layout->toHtml();
    }
}