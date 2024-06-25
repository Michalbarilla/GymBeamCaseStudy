<?php
namespace GymBeam\Casestudy\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
