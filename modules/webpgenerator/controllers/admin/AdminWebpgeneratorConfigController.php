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
 *
 * Ignore line length issue, because the PrestaShop translate finder does not finds the translatable strings if
 *            they are split in multiple lines
 * @codingStandardsIgnoreFile
 */

use PrestaChamps\WebPGenerator\Commands\DeleteWebPImagesCommand;

/**
 * Class AdminWebPGeneratorConfigController
 *
 * @property Context $context
 */
class AdminWebpgeneratorConfigController extends ModuleAdminController
{
    public $bootstrap = true;
    private static $formName = 'WebPGenerator_config_form';

    public function init()
    {
        $this->meta_title = $this->l('WebP Generator Configuration');
        $this->toolbar_title = $this->l('WebP Generator Configuration');
        parent::init();
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();
        $this->page_header_toolbar_btn['config'] = array(
            'short' => $this->l('Regenerate images'),
            'href'  => $this->context->link->getAdminLink('AdminWebpgeneratorRegenerate'),
            'icon'  => 'process-icon-refresh',
            'desc'  => $this->l('Regenerate'),
        );
    }

    /**
     * Save a configuration value
     *
     * @param string $configKey
     */
    public function saveConfigValue($configKey)
    {
        Configuration::updateValue($configKey, Tools::getValue($configKey));

        $languages = Language::getLanguages(false, false, false);
        foreach ($languages as $language) {
            if (Tools::getValue($configKey . "_{$language['id_lang']}", false)) {
                Configuration::updateValue(
                    $configKey,
                    array($language['id_lang'] => (string)Tools::getValue($configKey . '_' . $language['id_lang'], '')),
                    true
                );
            }
        }
    }

    /**
     * Process, normalise and save configuration values
     */
    public function processConfiguration()
    {
        foreach ($_REQUEST as $key => $value) {
            $normalizedKey = preg_replace('/_\d{1,}$/', '', $key);
            unset($value);
            $this->saveConfigValue($normalizedKey);
        }
        Configuration::loadConfiguration();

        $this->confirmations[] = $this->l('Configuration updated');
    }


    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array('title' => $this->l('Configuration'), 'icon' => 'icon-wrench'),
                'input'  => array(
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::DEMO_MODE,
                        'label'   => $this->l('Demo mode'),
                        'hint'    => $this->l(
                            'This option is recommended during image generation process to avoid 404 errors of images that have not yet been generated. Once the process is complete you will need to turn this option off in order for the webp images to appear on the website.'
                        ),
                        'desc'    => $this->l(
                            'This option is recommended during image generation process to avoid 404 errors of images that have not yet been generated. Once the process is complete you will need to turn this option off in order for the webp images to appear on the website.'
                        ),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'demo-mode_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'demo-mode_off',
                                'value' => '0',
                            ),
                        ),
                    ),
                    array(
                        'type'     => 'radio',
                        'label'    => $this->l('Converter to use'),
                        'name'     => WebPGeneratorConfig::CONVERTER_TO_USE,
                        'required' => true,
                        'size'     => '5',
                        'lang'     => false,
                        'hint'     => $this->l(
                            'Set the conversion methods to use depending on your server setup'
                        ),
                        'values'   => array(
                            array(
                                'id'       => WebPGeneratorConfig::CONVERTER_CWEBP,
                                'value'    => WebPGeneratorConfig::CONVERTER_CWEBP,
                                'label'    => $this->l('CWebP (Calls cwebp binary directly)') .
                                    (!$this->isCwebpCompatible()
                                        ?
                                        '<b class="conversion-not-available"> ' .
                                        $this->l('Not available') .
                                        '</b>'
                                        :
                                        ''),
                                'disabled' => !$this->isCwebpCompatible(),
                            ),
                            array(
                                'id'       => WebPGeneratorConfig::CONVERTER_IMAGICK,
                                'value'    => WebPGeneratorConfig::CONVERTER_IMAGICK,
                                'label'    => $this->l('Imagick extension (ImageMagick wrapper)') .
                                    (!$this->isImagickCompatible()
                                        ?
                                        '<b class="conversion-not-available"> ' .
                                        $this->l('Not available') .
                                        '</b>'
                                        :
                                        ''),
                                'disabled' => !$this->isImagickCompatible(),
                            ),
                            array(
                                'id'       => WebPGeneratorConfig::CONVERTER_GMAGICK,
                                'value'    => WebPGeneratorConfig::CONVERTER_GMAGICK,
                                'label'    => $this->l('Gmagick extension (ImageMagick wrapper)') .
                                    (!$this->isGmagickCompatible()
                                        ?
                                        '<b class="conversion-not-available"> ' .
                                        $this->l('Not available') .
                                        '</b>'
                                        :
                                        ''),
                                'disabled' => !$this->isGmagickCompatible(),
                            ),
                            array(
                                'id'       => WebPGeneratorConfig::CONVERTER_GD,
                                'value'    => WebPGeneratorConfig::CONVERTER_GD,
                                'label'    => $this->l('GD Graphics (Draw) extension (LibGD wrapper)') .
                                    (!$this->isGdCompatible()
                                        ?
                                        '<b class="conversion-not-available"> ' .
                                        $this->l('Not available') .
                                        '</b>'
                                        :
                                        ''),
                                'disabled' => !$this->isGdCompatible(),
                            ),
                            array(
                                'id'    => WebPGeneratorConfig::CONVERTER_EWWW,
                                'value' => WebPGeneratorConfig::CONVERTER_EWWW,
                                'label' => $this->l('EWW Connects to EWWW Image Optimizer cloud service') .
                                    (!$this->isEwwwCompatible()
                                        ?
                                        '<b class="conversion-not-available"> ' .
                                        $this->l('Not available') .
                                        '</b>'
                                        :
                                        ''),

                                'disabled' => !$this->isEwwwCompatible(),
                            ),
                        ),
                    ),
                    array(
                        'type'    => 'select',
                        'label'   => $this->l('Quality'),
                        'hint'    => $this->l('Specify the compression factor for RGB channels between 0 and 100'),
                        'name'    => WebPGeneratorConfig::CONFIG_COMMON_QUALITY,
                        'options' => array(
                            'query' => array(
                                array(
                                    'id'   => 10,
                                    'name' => 10,
                                ),
                                array(
                                    'id'   => 20,
                                    'name' => 20,
                                ),
                                array(
                                    'id'   => 30,
                                    'name' => 30,
                                ),
                                array(
                                    'id'   => 40,
                                    'name' => 40,
                                ),
                                array(
                                    'id'   => 50,
                                    'name' => 50,
                                ),
                                array(
                                    'id'   => 60,
                                    'name' => 60,
                                ),
                                array(
                                    'id'   => 70,
                                    'name' => 70,
                                ),
                                array(
                                    'id'   => 80,
                                    'name' => 80,
                                ),
                                array(
                                    'id'   => 90,
                                    'name' => 90,
                                ),
                                array(
                                    'id'   => 100,
                                    'name' => 100,
                                ),
                            ),
                            'id'    => 'id',
                            'name'  => 'name',
                        ),
                    ),
                    array(
                        'type'     => 'radio',
                        'label'    => $this->l('Method'),
                        'name'     => WebPGeneratorConfig::CONFIG_COMMON_METHOD,
                        'required' => true,
                        'size'     => '5',
                        'lang'     => false,
                        'hint'     => $this->l(
                            'You can choose between encoding speed or the compressed file size and quality based on your needs. 1 - best performance = low image quality 7 - lower performance.'
                        ),
                        'values'   => array(
                            array(
                                'id'    => 'method_radio_0',
                                'value' => 0,
                                'label' => $this->l('1 (best performance)'),
                            ),
                            array(
                                'id'    => 'method_radio_1',
                                'value' => 1,
                                'label' => $this->l('2 (good performance)'),
                            ),
                            array(
                                'id'    => 'method_radio_2',
                                'value' => 2,
                                'label' => $this->l('3 (decent performance with better quality)'),
                            ),
                            array(
                                'id'    => 'method_radio_3',
                                'value' => 3,
                                'label' => $this->l('4 (balance between performance and quality)'),
                            ),
                            array(
                                'id'    => 'method_radio_4',
                                'value' => 4,
                                'label' => $this->l('5 (decent quality with better performance)'),
                            ),
                            array(
                                'id'    => 'method_radio_5',
                                'value' => 5,
                                'label' => $this->l('6 (high quality)'),
                            ),
                            array(
                                'id'    => 'method_radio_6',
                                'value' => 6,
                                'label' => $this->l('7 (best quality)'),
                            ),
                        ),
                    ),
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::CONFIG_COMMON_LOW_MEMORY,
                        'label'   => $this->l('Low memory'),
                        'hint'    => $this->l(
                            'Reduce memory usage of lossy encoding at the cost of ~30% longer encoding time and marginally larger output size.'
                        ),
                        'desc'    => $this->l(
                            'In case of low or limited server resources (specifically memory) enabling this option will reduce memory usage.'
                        ),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'low-memory_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'low-memory_off',
                                'value' => '0',
                            ),
                        ),
                    ),
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::CONFIG_COMMON_LOSSLESS,
                        'label'   => $this->l('Lossless'),
                        'hint'    => $this->l(
                            'Encode the image without any quality loss. The option is ignored for PNG\'s. Recommended to No'
                        ),
                        'desc'    => $this->l('Recommended to no'),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'lossless_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'lossless_off',
                                'value' => '0',
                            ),
                        ),
                    ),
                    array(
                        'type'     => 'radio',
                        'label'    => $this->l('Metadata'),
                        'name'     => WebPGeneratorConfig::CONFIG_COMMON_META_DATA,
                        'required' => true,
                        'size'     => '5',
                        'lang'     => false,
                        'hint'     => $this->l(
                            'Metadata to copy from the input to the output if present'
                        ),
                        'desc'     => $this->l(
                            'Note: Only cwebp supports all values. gd will always remove all metadata. ewww, imagick and gmagick can either strip all, or keep all (they will keep all, unless metadata is set to none)'
                        ),
                        'values'   => array(
                            array(
                                'id'    => 'metadata_all',
                                'value' => 'all',
                                'label' => $this->l('All'),
                            ),
                            array(
                                'id'    => 'metadata_none',
                                'value' => 'none',
                                'label' => $this->l('None (recommended)'),
                            ),
                            array(
                                'id'    => 'metadata_exif',
                                'value' => 'exif',
                                'label' => $this->l('EXIF'),
                            ),
                            array(
                                'id'    => 'metadata_icc',
                                'value' => 'icc',
                                'label' => $this->l('ICC'),
                            ),
                            array(
                                'id'    => 'metadata_xmp',
                                'value' => 'xmp',
                                'label' => $this->l('XMP'),
                            ),

                        ),
                    ),
                ),
                'submit' => array('title' => $this->l('Save')),
            ),
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?: 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = self::$formName;
        $helper->currentIndex = $this->context->link->getAdminLink($this->controller_name, false);
        $helper->token = Tools::getAdminTokenLite($this->controller_name);
        $helper->tpl_vars = array(
            'fields_value' => WebPGeneratorConfig::getConfigurationValues(),
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }

    /**
     * @return string
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function renderCwebpForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array('title' => $this->l('CWebP conversion settings'), 'icon' => 'icon-terminal'),
                'input'  => array(
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::CONVERTER_CWEBP_USE_NICE,
                        'label'   => $this->l('Use `nice` command'),
                        'hint'    => $this->l(
                            'If `nice` command is found on host, binary is executed with low priority in order to save system resources'
                        ),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'use-nice_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'use-nice_off',
                                'value' => '0',
                            ),
                        ),
                    ),
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::CONVERTER_CWEBP_TRY_COMMON_SYSTEM_PATHS,
                        'label'   => $this->l('Try common system paths'),
                        'hint'    => $this->l(
                            'It is tested whether cwebp is available in a common system path (eg /usr/bin/cwebp, ..)'
                        ),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'try-common-system_paths_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'try-common-system_paths_off',
                                'value' => '0',
                            ),
                        ),
                    ),
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::CONVERTER_CWEBP_TRY_SUPPLIED_BINARY,
                        'label'   => $this->l('Try supplied binary'),
                        'hint'    => $this->l(
                            'If CWebP is not installed on the server, then supplied binary is selected from Converters/Binaries (according to OS) - after validating checksum'
                        ),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'try-supplied_binary_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'try-supplied_binary_off',
                                'value' => '0',
                            ),
                        ),
                    ),
                    array(
                        'type'    => 'switch',
                        'name'    => WebPGeneratorConfig::CONVERTER_CWEBP_AUTO_FILTER,
                        'label'   => $this->l('Turns auto-filter on'),
                        'hint'    => $this->l(
                            'This algorithm will spend additional time optimizing the filtering strength to reach a well-balanced quality. Unfortunately, it is extremely expensive in terms of computation. It takes about 5-10 times longer to do a conversion. A 1MB picture which perhaps typically takes about 2 seconds to convert, will takes about 15 seconds to convert with auto-filter. So in most cases, you will want to leave this at its default, which is off.'
                        ),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'auto_filter_on',
                                'value' => '1',
                            ),
                            array(
                                'id'    => 'auto_filter_off',
                                'value' => '0',
                            ),
                        ),
                    ),

                    array(
                        'type'  => 'text',
                        'name'  => WebPGeneratorConfig::CONVERTER_CWEBP_CMD_OPTIONS,
                        'label' => $this->l('Command line options'),
                        'hint'  => $this->l(
                            'This allows you to set any parameter available for cwebp in the same way as you would do when executing cwebp. You could ie set it to "-sharpness 5 -mt -crop 10 10 40 40". '
                        ),
                        'desc'  =>
                            $this->l(
                                'Read more about all the available parameters here: https://developers.google.com/speed/webp/docs/cwebp#additional_options'
                            ),
                    ),
                ),
                'submit' => array('title' => $this->l('Save')),
            ),
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?: 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = self::$formName;
        $helper->currentIndex = $this->context->link->getAdminLink($this->controller_name, false);
        $helper->token = Tools::getAdminTokenLite($this->controller_name);
        $helper->tpl_vars = array(
            'fields_value' => WebPGeneratorConfig::getConfigurationValues(),
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }

    /**
     * @return string
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function renderEwwwForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array('title' => $this->l('EWWW cloud convert'), 'icon' => 'icon-cloud'),
                'input'  => array(
                    array(
                        'type'         => 'html',
                        'name'         => 'content',
                        'html_content' =>
                            $this->l(
                                'EWWW Image Optimizer is a very cheap cloud service for optimizing images. After purchasing an API key, add the converter in the extra-converters option, with key set to the key.'
                            ),
                    ),
                    array(
                        'type'         => 'html',
                        'name'         => 'content',
                        'html_content' =>
                            $this->l(
                                'The EWWW api doesn\'t support the lossless option, but it does automatically convert PNG\'s losslessly. Metadata is either all or none. If you have set it to something else than one of these, all metadata will be preserved.'
                            ),
                    ),
                    array(
                        'type'  => 'text',
                        'name'  => WebPGeneratorConfig::CONVERTER_EWWW_API_KEY,
                        'label' => $this->l('API Key'),
                    ),
                ),
                'submit' => array('title' => $this->l('Save')),
            ),
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?: 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = self::$formName;
        $helper->currentIndex = $this->context->link->getAdminLink($this->controller_name, false);
        $helper->token = Tools::getAdminTokenLite($this->controller_name);
        $helper->tpl_vars = array(
            'fields_value' => WebPGeneratorConfig::getConfigurationValues(),
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }

    /**
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function initContent()
    {
        if (method_exists($this, 'addMetaTitle')) {
            $this->addMetaTitle($this->l('WebP generator settings'));
        }
        if (Tools::isSubmit(self::$formName)) {
            $this->processConfiguration();
        }
        if (!function_exists('mime_content_type')) {
            $this->errors[] = $this->l('Please enable the PHP fileinfo extension');
        }
        $this->context->controller->addCSS(
            $this->module->getLocalPath() .
            'views/css/banner.css'
        );
        $this->context->smarty->assign(array(
            'moduleVersion' => $this->module->version,
            'modulePath'    => $this->module->getPathUri()
        ));
        $this->content .= $this->context->smarty->fetch($this->getTemplatePath() . 'banner.tpl');
        $this->content .= $this->renderForm();
        $this->content .= $this->renderEwwwForm();
        $this->content .= $this->renderCwebpForm();
        parent::initContent();
    }

    /**
     * @param string $string
     * @param null $class
     * @param bool $addSlashes
     * @param bool $htmlEntities
     *
     * @return string
     */
    protected function l($string, $class = null, $addSlashes = false, $htmlEntities = true)
    {
        return parent::l($string, $class, $addSlashes, $htmlEntities);
    }

    protected function isCwebpCompatible()
    {
        return function_exists('exec');
    }

    /**
     * Check for Imagick WebP conversion compatibility
     *
     * @return bool
     */
    protected function isImagickCompatible()
    {
        try {
            if (!class_exists('Imagick')) {
                return false;
            }

            /**
             * Check if the Imagick::queryFormats method exists
             */
            if (!method_exists(\Imagick::class, 'queryFormats')) {
                return false;
            }

            return in_array('WEBP', \Imagick::queryFormats(), false);
        } catch (Exception $exception) {
            return false;
        }
    }

    /**
     * Check for Gmagick WebP conversion compatibility
     *
     * @return bool
     */
    protected function isGmagickCompatible()
    {
        try {
            if (!extension_loaded('Gmagick')) {
                // Required Gmagick extension is not available.
                return false;
            }

            if (!class_exists('Gmagick')) {
                // 'Gmagick is installed, but not correctly. The class Gmagick is not available'
                return false;
            }

            $gmagick = new Gmagick();

            if (!in_array('WEBP', $gmagick->queryformats(), false)) {
                // 'Gmagick was compiled without WebP support.'
                return false;
            }
        } catch (GmagickException $e) {
            return false;
        }

        return true;
    }

    /**
     * Check for GD WebP conversion compatibility
     *
     * @return bool
     */
    protected function isGdCompatible()
    {
        if (!extension_loaded('gd')) {
            // Required Gd extension is not available
            return false;
        }

        if (!function_exists('imagewebp')) {
            // Required imagewebp() function is not available. It seems Gd has been compiled without webp support
            return false;
        }

        if (!function_exists('imagecreatefrompng')) {
            // Required imagecreatefrompng() function is not available
            return false;
        }

        if (!function_exists('imagecreatefromjpeg')) {
            // Required imagecreatefromjpeg() function is not available
            return false;
        }

        return true;
    }

    /**
     * Check for EWWW WebP conversion compatibility
     *
     * @return bool
     */
    protected function isEwwwCompatible()
    {
        if (!extension_loaded('curl')) {
            // Required cURL extension is not available
            return false;
        }

        if (!function_exists('curl_init')) {
            // Required url_init() function is not available
            return false;
        }

        if (!function_exists('curl_file_create')) {
            // Required curl_file_create() function is not available (requires PHP > 5.5).
            return false;
        }

        return true;
    }

    public function processDeleteWebP()
    {
        $path = _PS_IMG_DIR_;
        $command = new DeleteWebPImagesCommand($path);
        if ($command->execute()) {
            $this->informations[] = $this->l("We've deleted the WebP images from {$path}");
        } else {
            $this->errors[] = $this->l("Unknown error while deleting WebP images from {$path}");
        }
    }
}
