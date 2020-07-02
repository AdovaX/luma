<?php
namespace FME\Banners\Controller\Adminhtml\Index\Save;

/**
 * Interceptor class for @see \FME\Banners\Controller\Adminhtml\Index\Save
 */
class Interceptor extends \FME\Banners\Controller\Adminhtml\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Magento\Framework\Escaper $escaper, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Stdlib\DateTime\DateTimeFactory $dateFactory)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $escaper, $inlineTranslation, $scopeConfig, $dateFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
