<?php

namespace Gelo\Slideout\Block;

class Slideout extends \Magento\Framework\View\Element\Template
{

    protected $scopeConfig;
    
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []) 
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }  
    public function enabled() 
    {
        return $this->scopeConfig->getValue('slideout/general/enable', 
                                             \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
   
    public function headerText() 
    {
        return $this->scopeConfig->getValue('slideout/general/header_text',
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    } 
    public function content() 
    {
        $blockId = $this->scopeConfig->getValue('slideout/general/content_block',
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
                                                                             
        return $this->getLayout()
              ->createBlock('Magento\Cms\Block\Block')
              ->setBlockId($blockId)
              ->toHtml();
    }
}

