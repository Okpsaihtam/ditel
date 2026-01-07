<?php
/**
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 */

use \PrestaChamps\WebPGenerator\Services\ImageResizeService;
use \PrestaChamps\WebPGenerator\Services\ImageDeleteService;

/**
 * Class AdminWebpgeneratorRegenerateController
 *
 * @property $context Context
 */
class AdminWebpgeneratorRegenerateController extends ModuleAdminController
{
    public $bootstrap = true;
    const IMAGE_TYPE_SINGULAR = array(
        'category' => 'categories',
        'manufacturer' => 'manufacturers',
        'supplier' => 'suppliers',
        'product' => 'products',
        'store' => 'stores',
    );

    const IMG_DIR = array(
        array('type' => 'category', 'dir' => _PS_CAT_IMG_DIR_),
        array('type' => 'manufacturer', 'dir' => _PS_MANU_IMG_DIR_),
        array('type' => 'supplier', 'dir' => _PS_SUPP_IMG_DIR_),
        array('type' => 'product', 'dir' => _PS_PROD_IMG_DIR_),
        array('type' => 'store', 'dir' => _PS_STORE_IMG_DIR_),
    );

    /**
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function initContent()
    {
        $images = $this->getImages();
        $this->context->smarty->assign(array(
            'productImageCount' => count($images['product']['todo']),
            'categoryImageCount' => count($images['category']['todo']),
            'supplierImageCount' => count($images['supplier']['todo']),
            'manufacturerImageCount' => count($images['manufacturer']['todo']),
            'storeImageCount' => count($images['store']['todo']),
            'productProgress' => WebPGeneratorConfig::getRegenerationProgress('product'),
            'categoryProgress' => WebPGeneratorConfig::getRegenerationProgress('category'),
            'supplierProgress' => WebPGeneratorConfig::getRegenerationProgress('supplier'),
            'manufacturerProgress' => WebPGeneratorConfig::getRegenerationProgress('manufacturer'),
            'storeProgress' => WebPGeneratorConfig::getRegenerationProgress('store'),
        ));
        $this->content .= $this->context->smarty->fetch($this->getTemplatePath() . 'regenerate.tpl');
        $this->addCSS($this->module->getLocalPath() . 'views/css/toastr.css');
        $this->addJS($this->module->getLocalPath() . 'views/js/toastr.min.js');
        $this->addJS($this->module->getLocalPath() . 'views/js/ajaxq.js');
        $this->addJS($this->module->getLocalPath() . 'views/js/regenerate.js');
        if (!function_exists('mime_content_type')) {
            $this->errors[] = $this->l('Please enable the PHP fileinfo extension');
        }
        Media::addJsDef(array(
            'ajaxUrl' => $this->context->link->getAdminLink($this->controller_name),
            'imageList' => $this->getImages(),
            'productProgress' => WebPGeneratorConfig::getRegenerationProgress('product'),
            'categoryProgress' => WebPGeneratorConfig::getRegenerationProgress('category'),
            'supplierProgress' => WebPGeneratorConfig::getRegenerationProgress('supplier'),
            'manufacturerProgress' => WebPGeneratorConfig::getRegenerationProgress('manufacturer'),
            'storeProgress' => WebPGeneratorConfig::getRegenerationProgress('store'),
        ));

        parent::initContent();
    }

    /**
     * @throws PrestaShopException
     */
    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();
        $this->page_header_toolbar_btn['config'] = array(
            'short' => $this->l('Configure'),
            'href' => $this->context->link->getAdminLink('AdminWebpgeneratorConfig'),
            'icon' => 'process-icon-configure',
            'desc' => $this->l('Configure WebP'),
        );
    }

    /**
     * @throws PrestaShopDatabaseException
     */
    public function ajaxProcessRegenerate()
    {
        $baseType = (string)Tools::getValue('type');
        $type = ImageType::getImagesTypes(self::IMAGE_TYPE_SINGULAR[$baseType]);
        $currentIndex = (int)Tools::getValue('currentIndex', 0);
        $image = Tools::getValue('image');
        try {
            if ($baseType == 'product') {
                $result = ImageResizeService::resizeProductImage($image, $type);
            } else {
                $result = ImageResizeService::resizeOtherImage($image, $baseType, $type);
            }
            if (!$result) {
                throw new RuntimeException("Can't resize image");
            }
        } catch (Exception $exception) {
            $this->ajaxDie(array('success' => false, 'error' => $exception->getMessage()));
        }
        WebPGeneratorConfig::updateRegenerationProgress($baseType, $currentIndex);
        $this->ajaxDie(array(
            'success' => true,
            'error' => null,
            'current_index' => WebPGeneratorConfig::getRegenerationProgress($baseType)
        ));
    }

    /**
     * @throws PrestaShopDatabaseException
     */
    public function ajaxProcessDelete()
    {
        $baseType = (string)Tools::getValue('type');
        $type = ImageType::getImagesTypes(self::IMAGE_TYPE_SINGULAR[$baseType]);

        $image = Tools::getValue('image');

        try {
            if ($baseType !== 'product') {
                $result = ImageDeleteService::deleteOtherImage($image, $baseType, $type);
            } else {
                $result = ImageDeleteService::deleteProductImage($image);
            }
            if (!$result) {
                throw new RuntimeException("Can't resize image");
            }
        } catch (Exception $exception) {
            $this->ajaxDie(array('success' => false, 'error' => $exception->getMessage()));
        }

        $this->ajaxDie(array('success' => true, 'error' => null));
    }

    /**
     * Returns an ajax response
     *
     * @param null $value
     * @param null $controller
     * @param null $method
     * @param int $statusCode
     * @throws PrestaShopException
     */
    public function ajaxDie($value = null, $controller = null, $method = null, $statusCode = 200)
    {
        header('Content-Type: application/json');
        if (!is_scalar($value)) {
            $value = json_encode($value);
        }

        http_response_code($statusCode);
        parent::ajaxDie($value, $controller, $method);
    }

    protected function getImages()
    {
        $images = Image::getAllImages();
        $list = array();
        $imageTypes = self::IMG_DIR;
        foreach ($imageTypes as $imageType) {
            $list[$imageType['type']] = array('todo' => array(), 'done' => array(), 'errors' => array());
            if ($imageType['type'] === 'product') {
                foreach ($images as $img) {
                    $list['product']['todo'][] = $img['id_image'];
                }
            } else {
                $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imageType['dir']));
                foreach ($iterator as $filename) {
                    /**
                     * @var $filename SplFileInfo
                     */
                    if (preg_match('/^\d*\.jpg$/', $filename->getBasename())) {
                        $list[$imageType['type']]['todo'][] = $filename->getBasename();
                    }
                }
            }
        }

        return $list;
    }
}
