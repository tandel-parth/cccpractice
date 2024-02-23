<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $this->includeCss($layout);
        $layout->getChild('head');
        $layout->getChild('head')->addJs('navigation.js');
        $layout->getChild('head')->addJs('page.js');

        
        $banner= $layout->createBlock('core/template')
                    ->setTemplate('banner/banner.phtml');
        
        $layout->getChild('content')
                        ->addChild('banner',$banner);
        $layout->toHtml();
    }
    public function includeCss($layout, $file = null)
    {
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss($file);
        $layout->getChild('head')->addCss('footer.css');
    }

    public function saveAction()
    {
        echo "Save Page";
    }
    public function listAction()
    {
        echo "List Page";
    }
}