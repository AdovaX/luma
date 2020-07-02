<?php
/**
 *
 * Copyright © 2015 Icosmozcommerce. All rights reserved.
 */
namespace Icosmoz\Unicenta\Controller\Adminhtml\Home;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory; 
use Magento\Framework\App\Bootstrap;
class Index extends \Magento\Backend\App\Action
{

	/**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    /**
     * Check the permission to run it
     *
     * @return bool
     */
   /*  protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magento_Cms::page');
    } */

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
$resultPage = $this->resultPageFactory->create();

 $w = $this->make_category();


//$block = $resultPage->getLayout()->getBlock('home_index');
//$block->setData('custom_parameter',  'test');


return $resultPage;
    }



function make_category(){


include('./app/bootstrap.php');
$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();
$url = \Magento\Framework\App\ObjectManager::getInstance();
$storeManager = $url->get('\Magento\Store\Model\StoreManagerInterface');
$mediaurl= $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
$state = $objectManager->get('\Magento\Framework\App\State');
$state->setAreaCode('frontend');
/// Get Website ID
//$websiteId = $storeManager->getWebsite()->getWebsiteId();
//echo 'websiteId: '.$websiteId." ";

/// Get Store ID
$store = $storeManager->getStore();
$storeId = $store->getStoreId();
//echo 'storeId: '.$storeId." ";

/// Get Root Category ID
$rootNodeId = $store->getRootCategoryId();
//echo 'rootNodeId: '.$rootNodeId." ";
/// Get Root Category
$rootCat = $objectManager->get('Magento\Catalog\Model\Category');
$cat_info = $rootCat->load($rootNodeId);

$categorys="erp5"; // Category Names
 

$name=ucfirst($categorys);
$url=strtolower($categorys);
$cleanurl = trim(preg_replace('/ +/', '', preg_replace('/[^A-Za-z0-9 ]/', '', urldecode(html_entity_decode(strip_tags($url))))));
$categoryFactory=$objectManager->get('\Magento\Catalog\Model\CategoryFactory');
/// Add a new sub category under root category
$categoryTmp = $categoryFactory->create();
$categoryTmp->setName($name);
$categoryTmp->setIsActive(true);
$categoryTmp->setUrlKey($cleanurl);
$categoryTmp->setData('description', 'description');
$categoryTmp->setParentId($rootCat->getId());
  
$categoryTmp->setStoreId($storeId);
$categoryTmp->setPath($rootCat->getPath());
$categoryTmp->save();
 



return 1;

}


 
}
