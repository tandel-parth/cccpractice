<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action{
public function formAction(){
    $layout = $this->getLayout();
    $this->includeCss($layout, 'productForms.css');
    $child = $layout->getChild('content');
    $productForm = $layout->createBlock('catalog/admin_product_form');
    $child->addChild('form',$productForm);
    $layout->toHtml();  
}
public function saveAction(){
    echo "<pre>";
    $data = $this->getRequest()->getParams('ccc_product');
    // var_dump($data);
    $product = Mage::getModel('catalog/product')
                    ->setData($data)->save();
}
public function includeCss($layout, $file = null)
    {
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss($file);
        $layout->getChild('head')->addCss('footer.css');
    }
}
?>