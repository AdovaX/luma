<?php
namespace FME\Banners\Controller\Adminhtml\Index\InlineEdit;

/**
 * Interceptor class for @see \FME\Banners\Controller\Adminhtml\Index\InlineEdit
 */
class Interceptor extends \FME\Banners\Controller\Adminhtml\Index\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \FME\Banners\Controller\Adminhtml\Index\PostDataProcessor $dataProcessor, \FME\Banners\Model\Banners $BannersModel, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $dataProcessor, $BannersModel, $jsonFactory);
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
