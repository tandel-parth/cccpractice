<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $this->includeCss($layout, 'productForm.css');
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $productModel = $this->getRequest()->getParams('catalog_product');
        Mage::getModel('catalog/product')
            ->setData($productModel)
            ->save();
    }
    public function deleteAction()
    {
        $productId = $this->getRequest()->getParams('id');
        Mage::getModel('catalog/product')->load($productId)
            ->delete();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $this->includeCss($layout, 'list.css');
        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
    public function includeCss($layout, $file = null)
    {
        $layout->getChild('head')->addCss('header.css');
        if (!is_null($file)) {
            $layout->getChild('head')->addCss($file);
        }
        $layout->getChild('head')->addCss('footer.css');
    }
}
?>