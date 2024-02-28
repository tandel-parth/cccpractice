<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('navigation.js');
        $layout->getChild('head')->addJs('page.js');

        
        $banner= $layout->createBlock('core/template')
                    ->setTemplate('banner/banner.phtml');
                    
        
        $layout->getChild('content')
                        ->addChild('banner',$banner);
        $layout->toHtml();
    }
}