<?php
namespace Sparsh\Banner\Controller\Adminhtml\Banner\Grid;

/**
 * Interceptor class for @see \Sparsh\Banner\Controller\Adminhtml\Banner\Grid
 */
class Interceptor extends \Sparsh\Banner\Controller\Adminhtml\Banner\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Sparsh\Banner\Model\BannerFactory $bannerFactory, \Sparsh\Banner\Model\ResourceModel\Banner $bannerResource)
    {
        $this->___init();
        parent::__construct($context, $bannerFactory, $bannerResource);
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
