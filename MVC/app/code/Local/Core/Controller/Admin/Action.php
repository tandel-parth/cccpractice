<?php
class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{
    protected $_allowedActions = [];
    public function init()
    {
        $this->getLayout()->removeChild("header")->removeChild("footer");
        $this->getRequest()->getActionName();
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedActions) &&
            $this->getRequest()->getModuleName() == 'admin' &&
            !Mage::getSingleton('core/session')->get("logged_in_admin_user_id")
        ) {
            $this->setRedirect('admin/user/login');
        }
    }

}
?>