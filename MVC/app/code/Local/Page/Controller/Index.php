<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $banner= $layout->createBlock('banner/banner');                          
        $layout->getChild('content')
                        ->addChild('banner',$banner);
        $layout->toHtml();
    }
}