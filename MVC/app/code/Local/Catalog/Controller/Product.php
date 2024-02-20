<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action{
public function formAction(){
    $layout = $this->getLayout();
    $child = $layout->getChild('content');
    $productForm = $layout->createBlock('catalog/admin_product');
    $child->addChild('form',$productForm);
    $layout->toHtml();
}
public function saveAction(){
    echo "<pre>";
    $data = $this->getRequest()->getParams('ccc_product');
    $product = Mage::getModel('catalog/product')
                    ->setData($data)->save();   
    // print_r($product);
}
}
?>