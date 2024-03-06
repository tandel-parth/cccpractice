<?php

class Admin_Controller_Tempconverter_Index extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $this->includeCss('form.css');
        $child = $layout->getChild('content');
        $form = $layout->createBlock('tempconverter/admin_form');
        $child->addChild('form', $form);
        $layout->toHtml();
    }
    public function saveAction()
    {

        // Mage::getSingleton("core/session")->set("session_id", "1");
        $data = $this->getRequest()->getparams("tempconverter");
        print_r($data);
        $userName = $data['user_name'];
        $tamp = $data['temprature'];
        $unit = $data['unit'];
        $convertUnit = $data['convert_unit'];

        if($unit == $convertUnit){
            $data['temprature'] = $tamp;
        }else{
            if($unit == 'Farenheit'){
                if($convertUnit == 'Celsius'){
                    $data['temprature'] = ((5/9)*$tamp - 32);
                }
            }elseif($unit == 'Celsius'){
                if($convertUnit == 'Farenheit'){
                    $data['temprature'] = ($tamp*(9/5)) + 32;
                }
            }
        }
        $tempcon = Mage::getModel('tempconverter/tempconverter')
            ->setData($data);
        $result = $tempcon->save();
        if ($data['user_name']) {
            if ($result) {
                echo '<script>alert("Data updated successfully")</script>';
                echo "<script>location.href='" . Mage::getBaseUrl() . '/admin/tempconverter_index/list' . "'</script>";
            }
        } else {
            echo '<script>alert("Data inserted successfully")</script>';
            echo "<script>location.href='" . Mage::getBaseUrl() . '/admin/tempconverter/list' . "'</script>";
        }

    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $this->includeCss('list.css');
        $child = $layout->getChild('content');
        $list = $layout->createBlock('tempconverter/admin_list');
        $child->addChild('list', $list);
        $layout->toHtml();
    }
}



?>