<?php
namespace GymBeam\Casestudy\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Template
{
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getGreetingMessage()
    {
        return $this->scopeConfig->getValue('casestudy_section/casestudy_group/greeting_message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
