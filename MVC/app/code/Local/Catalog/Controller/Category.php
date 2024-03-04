<?php 
class Catalog_Controller_Category extends Core_Controller_Front_Action {

    public function viewAction()
    {
        $this->includeCss("view.css");
        $layout = $this->getLayout();
        $child = $layout->getchild('content');
        $productForm = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list',$productForm);
        $layout->toHtml();
    }
}
?>