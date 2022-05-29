<?php

namespace TinxIT\Core\Block\Adminhtml\System\Config;
use Magento\Framework\App\Config\ScopeConfigInterface;

class General extends \Magento\Config\Block\System\Config\Form\Field
{
protected $_template = 'TinxIT_Core::system/config/general.phtml';

const TEMPLATE = 'TinxIT_Core::system/config/general.phtml';

protected $_moduleManager;

/**
*
* @param \Magento\Backend\Block\Template\Context $context
* @param ScopeConfigInterface $scopeConfig
* @param \Magento\Framework\Module\Manager $moduleManager
* @param \Magento\Framework\ObjectManagerInterface $objectmanager
* @param array $data
*/
public function __construct(
\Magento\Backend\Block\Template\Context $context,
\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
\Magento\Framework\Module\Manager $moduleManager,
array $data = []
)
{
$this->_scopeConfig     = $scopeConfig;
$this->_moduleManager   = $moduleManager;
parent::__construct($context, $data);
}

/**
*
* @return $this
*/
protected function _prepareLayout()
{
parent::_prepareLayout();
if (!$this->getTemplate()) {
$this->setTemplate(static::TEMPLATE);
}
return $this;
}
/**
* Retrieve element HTML markup.
*
* @param \Magento\Framework\Data\Form\Element\AbstractElement $element
*
* @return string
*/
protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
{
$this->setNamePrefix($element->getName())
->setHtmlId($element->getHtmlId());

return $this->_toHtml();
}

}