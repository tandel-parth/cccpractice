<?php 
class Catalog_Controller_Category extends Core_Controller_Front_Action {

    public function viewAction()
    {
        // $this->includeCss("views.css");
        $layout = $this->getLayout();
        $child = $layout->getchild('content');
        $categoryView = $layout->createBlock('catalog/category_view');
        $child->addChild('category_view',$categoryView);
        $layout->toHtml();
    }
}
?>