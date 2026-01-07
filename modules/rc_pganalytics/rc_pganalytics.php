<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a trade license awared by
 * Garamo Online L.T.D.
 *
 * Any use, reproduction, modification or distribution
 * of this source file without the written consent of
 * Garamo Online L.T.D It Is prohibited.
 *
 *  @author    ReactionCode <info@reactioncode.com>
 *  @copyright 2015-2020 Garamo Online L.T.D
 *  @license   Commercial license
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__) . '/vendor/autoload.php');

class Rc_PgAnalytics extends Module
{
    // delimiter for domain list
    const _DML_DELIMITER_ = "\n";

    private $default_values = array(
        'RC_PGANALYTICS_PR' => 25,
        'RC_PGANALYTICS_SSSR' => 1,
        'RC_PGANALYTICS_D1' => 1,
        'RC_PGANALYTICS_D2' => 2,
        'RC_PGANALYTICS_D3' => 3,
        'RC_PGANALYTICS_D4' => 4,
        'RC_PGANALYTICS_D5' => 5,
        'RC_PGANALYTICS_D6' => 6,
        'RC_PGANALYTICS_D7' => 7,
        'RC_PGANALYTICS_D8' => 8,
        'RC_PGANALYTICS_OPT_HCN' => 'optimize-loading',
        'RC_PGANALYTICS_OPT_HTO' => 4000,
        'RC_PGANALYTICS_IOS' => '6,7,8',
        'RC_PGANALYTICS_ROS' => '6,7'
    );

    public $secret_key;

    // add custom error messages
    protected $errors = array();

    public function __construct()
    {
        $this->name = 'rc_pganalytics';
        $this->tab = 'analytics_stats';
        $this->version = '4.5.1';
        $this->author = 'ReactionCode';
        $this->author_address = '0xf21e54Ea7B0D8e4413f99D60a3CC1dc49C5ffEf8';
        $this->module_key = '5cb794f64177737254aef9f263fe8dbc';
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => '1.7.99');
        $this->bootstrap = true;

        // avoid fatal error on PS16
        if (method_exists('Tools', 'hash')) {
            $this->secret_key = Tools::hash($this->name . $this->version . Configuration::get('PS_SHOP_NAME'));
        }

        parent::__construct();

        $this->displayName = 'Premium Google Analytics Enhanced Ecommerce';
        $this->description = $this->l('Enable Google Enhanced Ecommerce Analytics, and knows in detail how users interact in your online Store');

        // update default value with referral exclusion list (self domain)
        $this->default_values['RC_PGANALYTICS_REL'] = parse_url(
            Tools::getHttpHost(true),
            PHP_URL_HOST
        );
    }

    public function install()
    {
        // Simple database to register orders set to GA
        include(dirname(__FILE__).'/sql/install.php');

        $hooks = array(
            'header',
            'orderConfirmation',
            'displayBeforeBodyClosingTag',
            'backOfficeHeader',
            'displayAdminOrderTabOrder',
            'displayAdminOrderContentOrder',
            'updateOrderStatus'
        );

        $installed = parent::install() && $this->registerHook($hooks);

        if ($installed) {
            foreach ($this->default_values as $key => $value) {
                if (!Configuration::get($key)) {
                    // Set default value for all shops
                    Configuration::updateGlobalValue($key, $value);
                }
            }
            // clear all PS cache
            Tools::clearSmartyCache();
            Tools::clearXMLCache();
            Media::clearCache();
            Tools::generateIndex();

            return true;
        } else {
            // if some thing blocks the hook registration uninstall the module
            $this->uninstall();
            return false;
        }
    }

    public function uninstall()
    {
        // Delete data base
        include(dirname(__FILE__).'/sql/uninstall.php');

        // Uninstall Module
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    public function getContent()
    {
        $message = '';
        if (Tools::isSubmit('submit'.$this->name)) {
            $this->postProcess();
            if (count($this->errors) > 0) {
                $message = $this->displayError(implode('<br />', $this->errors));
            } else {
                $message = $this->displayConfirmation($this->l('Settings updated successfully'));
            }
        }

        $this->context->controller->addCSS($this->_path.'views/css/admin/common_form.css');
        $this->context->controller->addJS($this->_path.'views/js/admin/common_form.js');
        $this->context->controller->addJS($this->_path.'views/js/admin/configure/form.js');

        return $message.$this->renderForm();
    }

    /* PREPARE HELPER FOR GENERATE FORM */
    public function renderForm()
    {
        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;

        // Language
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->submit_action = 'submit'.$this->name;
        $helper->tpl_vars = array(
            // vertical tabs
            'vertical_tabs' => $this->getTabsForm(),
            // form values
            'fields_value' => $this->getConfigFormValues()
        );

        // allow multiple forms to combine with tabs
        $helper->multiple_fieldsets = true;

        return $helper->generateForm($this->getConfigForm());
    }

    public function getTabsForm()
    {
        $lang_iso = $this->context->language->iso_code === 'es' ? 'es' : 'en';
        $doc_base_url = 'https://docs.reactioncode.com/';
        $doc_module_urls = array(
            'en' => $doc_base_url.'en/modules/prestashop/premium-google-analytics-enhanced-ecommerce/',
            'es' => $doc_base_url.'es/modulos/prestashop/premium-google-analytics-enhanced-ecommerce/'
        );

        $doc_module_url = $doc_module_urls[$lang_iso];
        $addons_support_url = 'https://addons.prestashop.com/contact-form.php?id_product=18623';
        $addons_ratings_url = 'https://addons.prestashop.com/ratings.php';

        return array(
            'form' => array(
                'property_tab' => array(
                    'name' => $this->l('Property'),
                    'active' => 1
                ),
                'tracking_tab' => array(
                    'name' => $this->l('Tracking Features')
                ),
                'remarketing_tab' => array(
                    'name' => $this->l('Dynamic Remarketing')
                ),
                'googleads_tab' => array(
                    'name' => 'Google Ads'
                ),
                'optimize_tab' => array(
                    'name' => 'Google Optimize'
                ),
                'goal_tab' => array(
                    'name' => $this->l('Goals')
                ),
                'orderstatus_tab' => array(
                    'name' => $this->l('Transaction Behaviours')
                )
            ),
            'link_tabs' => array(
                'documentation' => array(
                    'icon' => 'book',
                    'name' => $this->l('Documentation'),
                    'link' => $doc_module_url,
                    'target' => '_blank'
                ),
                'support' => array(
                    'icon' => 'support',
                    'name' => $this->l('Support'),
                    'link' => $addons_support_url,
                    'target' => '_blank'
                ),
                'rate' => array(
                    'icon' => 'star',
                    'name' => $this->l('Suggestions and Improvements'),
                    'link' => $addons_ratings_url,
                    'target' => '_blank'
                )
            )
        );
    }

    /* CONFIGURATION FORM */
    public function getConfigForm()
    {
        $order_states = OrderState::getOrderStates($this->context->language->id);

        $products_rate = array(
            array(
                'id' => 10,
                'name' => 10
            ),
            array(
                'id' => 15,
                'name' => 15
            ),
            array(
                'id' => 20,
                'name' => 20
            ),
            array(
                'id' => 25,
                'name' => 25
            ),
            array(
                'id' => 30,
                'name' => 30
            )
        );

        $index_dimension = array();
        for ($i=1; $i <= 17; $i++) {
            $index_dimension[] = array(
                'id' => $i,
                'name' => $i
            );
        }

        $hiding_time_value = 2000;
        $hiding_time = array();
        for ($i=1; $i <= 5; $i++) {
            $hiding_time[] = array(
                'id' => $hiding_time_value,
                'name' => $hiding_time_value
            );
            $hiding_time_value = $hiding_time_value + 1000;
        }

        $config_form = array(
            'property_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs'
                    ),
                    'warning' => $this->l('To achieve a perfect tracking is required to follow a specific integration, please read the documentation'),
                    'input' => array(
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Exclude Internal Traffic'),
                            'name' => 'RC_PGANALYTICS_NO_IT',
                            'desc' => $this->l('Disable the GA tracking for your internal traffic.'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Respect Do Not Track'),
                            'name' => 'RC_PGANALYTICS_DNT',
                            'desc' => $this->l('Disable customers tracking with browser Do Not Track feature enabled.'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'text',
                            'label' => 'Google Analytics ID',
                            'name' => 'RC_PGANALYTICS_ID',
                            'class' => 'fixed-width-xl',
                            'required' => true,
                            'desc' => $this->l('The format is') . ': UA-XXXX-Y'
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('Max Products Rate'),
                            'name' => 'RC_PGANALYTICS_PR',
                            'desc' => $this->l('Split the payload in packs of x products, to send to GA.'),
                            'hint' => $this->l('Depending your language, you can send more or less products at once'),
                            'options' => array(
                                'query' => $products_rate,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Site Speed Sample Rate'),
                            'name' => 'RC_PGANALYTICS_SSSR',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Percentage of users to include in site speed data reports'),
                            'hint' => 'Min: 1 - Max: 100',
                            'validate' => array(
                                'type' => 'is_int'
                            )
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            ),
            'tracking_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Anonymize IP'),
                            'name' => 'RC_PGANALYTICS_IF',
                            'desc' => $this->l('Need in some countries, for privacy policies.'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'switch',
                            'label' => 'User-ID',
                            'name' => 'RC_PGANALYTICS_UF',
                            'desc' => $this->l('Unify the customer sessions if they use diferent devices.'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Enhanced Link Attribution'),
                            'name' => 'RC_PGANALYTICS_LF',
                            'desc' => $this->l('Allows a better track links on your page.'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'textarea',
                            'label' => $this->l('Cross Domain List'),
                            'name' => 'RC_PGANALYTICS_DML',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Track your linked domains with the same GA ID'),
                            'hint' => $this->l('Include one domain by line')
                        ),
                        array(
                            'type' => 'textarea',
                            'label' => $this->l('Referral Exclusion List'),
                            'name' => 'RC_PGANALYTICS_REL',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Exclude source domains on manual transactions'),
                            'hint' => $this->l('Include one domain by line')
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            ),
            'remarketing_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Retail Remarketing (ecomm Tags)'),
                            'name' => 'RC_PGANALYTICS_DF',
                            'desc' => $this->l('Remarketing with Merchant Center'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('ecomm_prodid Index'),
                            'name' => 'RC_PGANALYTICS_D1',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('ecomm_pagetype Index'),
                            'name' => 'RC_PGANALYTICS_D2',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('ecomm_totalvalue Index'),
                            'name' => 'RC_PGANALYTICS_D3',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('ecomm_category Index'),
                            'name' => 'RC_PGANALYTICS_D4',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Merchant Center Prefix'),
                            'name' => 'RC_PGANALYTICS_MC_PF',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Add a prefix to match with product ID from your merchant center feed'),
                            'hint' => $this->l('Use {lang} or {country} vars for language or country iso values. {LANG} or {COUNTRY} for uppercase mode')
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Merchant Center Suffix'),
                            'name' => 'RC_PGANALYTICS_MC_SF',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Add a suffix to match with product ID from your merchant center feed'),
                            'hint' => $this->l('Use {lang} or {country} vars for language or country iso values. {LANG} or {COUNTRY} for uppercase mode')
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Merchant Center Variant'),
                            'name' => 'RC_PGANALYTICS_MC_VT',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Add key for variant ID / Leaves empty for disable.'),
                            'hint' => $this->l('Ex. Use "v" for split the product ID(55) and variant ID(7) - Result: 55v7')
                        ),
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Business Data (dynx Tags)'),
                            'name' => 'RC_PGANALYTICS_BD',
                            'desc' => $this->l('Remarketing for countries where Merchant Center is not available'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('dynx_itemid Index'),
                            'name' => 'RC_PGANALYTICS_D5',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('dynx_itemid2 Index'),
                            'name' => 'RC_PGANALYTICS_D6',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('dynx_pagetype Index'),
                            'name' => 'RC_PGANALYTICS_D7',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('dynx_totalvalue Index'),
                            'name' => 'RC_PGANALYTICS_D8',
                            'desc' => $this->l('This index must match the index of the GA custom dimension'),
                            'options' => array(
                                'query' => $index_dimension,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Business Data Prefix'),
                            'name' => 'RC_PGANALYTICS_BD_PF',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Add a prefix to match with product ID from your Business Data feed'),
                            'hint' => $this->l('Use {lang} or {country} vars for language or country iso values. {LANG} or {COUNTRY} for uppercase mode')
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Business Data Variant'),
                            'name' => 'RC_PGANALYTICS_BD_VT',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Add key for variant ID / Leaves empty for disable.'),
                            'hint' => $this->l('Use variant separator to concatenate product and attribute id in dynx_itemid, or disable it to use dynx_itemid for product id and dynx_itemid2 for attribute id')
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            ),
            'googleads_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'text',
                            'label' => 'Google Ads ID',
                            'name' => 'RC_PGANALYTICS_AW_ID',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('The format is') . ': AW-123456789'
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Purchase Conversion Label'),
                            'name' => 'RC_PGANALYTICS_AW_CL',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Conversion label for purchase event'),
                            'hint' => $this->l('For track conversions is required to set a Google Ads ID')
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            ),
            'optimize_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'text',
                            'label' => 'Google Optimize Id',
                            'name' => 'RC_PGANALYTICS_OPT_ID',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('The format is') . ': GTM-XXXXXXX'
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Hiding Class'),
                            'name' => 'RC_PGANALYTICS_OPT_HCN',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('CSS class name'),
                            'hint' => $this->l('An empty value disables the page hiding snippet')
                        ),
                        array(
                            'type' => 'select',
                            'label' => $this->l('Hiding Time'),
                            'name' => 'RC_PGANALYTICS_OPT_HTO',
                            'class' => 'fixed-width-xl',
                            'desc' => $this->l('Hiding timeout (milliseconds)'),
                            'options' => array(
                                'query' => $hiding_time,
                                'id' => 'id',
                                'name' => 'name'
                            )
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            ),
            'goal_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Track Sign Ups'),
                            'name' => 'RC_PGANALYTICS_GOAL_SU',
                            'desc' => $this->l('Send Goal when new customer has signed up'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Sign Up Value'),
                            'name' => 'RC_PGANALYTICS_EVENT_VAL_SU',
                            'class' => 'js-event-value fixed-width-xl',
                            'desc' => $this->l('Virtual value for this event'),
                            'hint' => $this->l('Only positive integers'),
                            'validate' => array(
                                'type' => 'is_int'
                            )
                        ),
                        array(
                            'type' => 'switch',
                            'label' => $this->l('Track Social Actions'),
                            'name' => 'RC_PGANALYTICS_GOAL_SA',
                            'desc' => $this->l('Send a goal when customer shares product'),
                            'hint' => $this->l('compatible with standard social sharing module'),
                            'values' => array(
                                array(
                                    'value' => true,
                                ),
                                array(
                                    'value' => false
                                )
                            )
                        ),
                        array(
                            'type' => 'text',
                            'label' => $this->l('Social Action Value'),
                            'name' => 'RC_PGANALYTICS_EVENT_VAL_SA',
                            'class' => 'js-event-value fixed-width-xl',
                            'desc' => $this->l('Virtual value for this event'),
                            'hint' => $this->l('Only positive integers'),
                            'validate' => array(
                                'type' => 'is_int'
                            )
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            ),
            'orderstatus_tab' => array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->l('Settings'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'checkbox',
                            'multiple' => true,
                            'label' => $this->l('Invalid Order Statuses'),
                            'name' => 'RC_PGANALYTICS_IOS',
                            'hint' => $this->l('Select which order statuses do not sends a transaction to GA'),
                            'desc' => $this->l('Warning! bad selection could has negative impact on transactions'),
                            'expand' => array(
                                'default' => 'show',
                                'show' => array(
                                    'icon' => 'gear',
                                    'text' => $this->l('Show Options'),
                                ),
                                'hide' => array(
                                    'icon' => 'gear',
                                    'text' => $this->l('Hide Options'),
                                )
                            ),
                            'values' => array(
                                'query' => $order_states,
                                'id' => 'id_order_state',
                                'name' => 'name'
                            )
                        ),
                        array(
                            'type' => 'checkbox',
                            'multiple' => true,
                            'label' => $this->l('Refund statuses'),
                            'name' => 'RC_PGANALYTICS_ROS',
                            'hint' => $this->l('Select which order statuses sends a refund to GA'),
                            'desc' => $this->l('Warning! bad selection could has negative impact on transactions'),
                            'expand' => array(
                                'default' => 'show',
                                'show' => array(
                                    'icon' => 'gear',
                                    'text' => $this->l('Show Options'),
                                ),
                                'hide' => array(
                                    'icon' => 'gear',
                                    'text' => $this->l('Hide Options'),
                                )
                            ),
                            'values' => array(
                                'query' => $order_states,
                                'id' => 'id_order_state',
                                'name' => 'name'
                            )
                        )
                    ),
                    'submit' => array(
                        'title' => $this->l('Save')
                    )
                )
            )
        );

        return $config_form;
    }

    /* LOAD VALUES TO FORM */
    protected function getConfigFormValues($post_process = false)
    {
        // Prepare Domain List
        $search = ',';
        $replace = self::_DML_DELIMITER_;
        $forms = $this->getConfigForm();
        $inputs = array();
        $config_form_values = array();

        foreach ($forms as $form) {
            if (isset($form['form']['input'])) {
                $inputs = array_merge($inputs, $form['form']['input']);
            }
        }

        foreach ($inputs as $input) {
            $input_value = Tools::getValue($input['name'], Configuration::get($input['name']));

            if ($input['type'] === 'text') {
                $input_value = trim($input_value);
                // validate text input as int
                if (isset($input['validate'])) {
                    if ($input['validate']['type'] === 'is_int') {
                        // convert all data to an integer
                        $input_value = (int)$input_value;

                        if ($input['name'] === 'RC_PGANALYTICS_SSSR' &&
                            ($input_value < 1 || $input_value > 100)) {
                            $input_value = $this->default_values[$input['name']];
                        } elseif ($input_value < 0) {
                            // set default for negative values
                            $input_value = $this->default_values[$input['name']];
                        }
                    }
                }
            }

            // special treatment for some input values
            if ($input['name'] === 'RC_PGANALYTICS_DML' || $input['name'] === 'RC_PGANALYTICS_REL') {
                // parse form domains list to
                $input_value = str_replace($search, $replace, $input_value);
            }

            // handle checkbox options
            if ($input['name'] === 'RC_PGANALYTICS_IOS' || $input['name'] === 'RC_PGANALYTICS_ROS') {
                $input_value = $this->getCheckboxFormValues(
                    $input['name'],
                    $input['values']['query'],
                    $input['values']['id'],
                    $post_process
                );
            }

            // if input value is array means checkbox options
            if (is_array($input_value)) {
                // add all checkbox options to config_form_values
                $config_form_values = array_merge($config_form_values, $input_value);
            } else {
                // add basic value to config_form_values
                $config_form_values[$input['name']] = $input_value;
            }
        }

        return $config_form_values;
    }

    /**
     * @param $configuration_key
     * @param $checkbox_values
     * @param $checkbox_id
     * @param bool $post_process
     * @return array
     */
    protected function getCheckboxFormValues($configuration_key, $checkbox_values, $checkbox_id, $post_process = false)
    {
        $post_count = 0;
        $checkbox_fields = array();
        $process_values = array();

        foreach ($checkbox_values as $value) {
            $post_field = Tools::getValue($configuration_key.'_'.$value[$checkbox_id]);

            if ($post_field) {
                // if post field exist count and process data
                $post_count ++;

                if (!$post_process) {
                    // parse data to be loaded in form
                    $checkbox_fields[$configuration_key . '_' . $value[$checkbox_id]] = 'on';
                } else {
                    // collect the id results on array to implode later
                    $process_values[] = $value[$checkbox_id];
                }
            }
        }

        if ($post_count && $post_process) {
            // parse data to be saved on database
            $checkbox_fields[$configuration_key] = implode(',', $process_values);
        } elseif (!$post_count && !$post_process) {
            // on first form load will get data from configuration table
            $db_values = Configuration::get($configuration_key);

            // split values into array
            $db_values = $db_values ? explode(',', $db_values) : null;

            if (!empty($db_values)) {
                // if has values parse form fields
                foreach ($db_values as $db_value) {
                    $checkbox_fields[$configuration_key . '_' . $db_value] = 'on';
                }
            }
        }

        return $checkbox_fields;
    }

    /**
     * @param $domain_list
     * @param bool $is_rel
     * @return array|bool|string
     */
    protected function checkDomainList($domain_list, $is_rel = false)
    {
        $filtered_domains = array();
        $domains = explode(self::_DML_DELIMITER_, Tools::strtolower($domain_list));
        $pattern = '/^(?=.{3,256}$)((?:(?!-)[a-z0-9-]{2,63}(?<!-)\.){1,127}(?:(?!\.)[a-z]{2,6}(?<!\.)))$/';

        foreach ($domains as $domain) {
            // remove al spaces
            $domain = trim($domain);
            // check if domain is not empty
            if ($domain) {
                // check if domain is ok
                if (preg_match($pattern, $domain)) {
                    $filtered_domains[] = $domain;
                } else {
                    $this->errors[] = sprintf($this->l('The domain "%s" are not write properly!'), $domain);
                    return false;
                }
            }
        }

        // check if is referral exclusion list
        if ($is_rel) {
            // get default host value
            $self_host = $this->default_values['RC_PGANALYTICS_REL'];
            // if is not in domains add it
            if (!in_array($self_host, $filtered_domains)) {
                $filtered_domains[] = $self_host;
            }
        }

        $filtered_domains = implode(',', $filtered_domains);

        return $filtered_domains;
    }

    /* SAVE FORM VALUES TO DATABASE */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues(true);

        if (empty($form_values['RC_PGANALYTICS_ID'])) {
            $this->errors[] = $this->l('Google Analytics ID is required');
        }

        if (!empty($form_values['RC_PGANALYTICS_DML'])) {
            $form_values['RC_PGANALYTICS_DML'] = $this->checkDomainList($form_values['RC_PGANALYTICS_DML']);
        }

        if (!empty($form_values['RC_PGANALYTICS_REL'])) {
            $form_values['RC_PGANALYTICS_REL'] = $this->checkDomainList(
                $form_values['RC_PGANALYTICS_REL'],
                true
            );
        }

        foreach ($form_values as $key => $value) {
            if (($key == 'RC_PGANALYTICS_DML' || $key == 'RC_PGANALYTICS_REL') && !$value) {
                continue;
            } else {
                Configuration::updateValue($key, $value);
            }
        }
    }

    /* DISPLAY HOOKS */
    public function hookHeader()
    {
        $analytics_id = (string)Configuration::get('RC_PGANALYTICS_ID');

        if (!$analytics_id) {
            // If not set the Analytics ID no load
            return false;
        }

        // Tracking options
        $internal_tracking_feature = (int)Configuration::get('RC_PGANALYTICS_NO_IT');
        $product_send_rate = (int)Configuration::get('RC_PGANALYTICS_PR');
        $simple_speed_sample_rate = (int)Configuration::get('RC_PGANALYTICS_SSSR');
        $check_do_not_track = (int)Configuration::get('RC_PGANALYTICS_DNT');

        // GA Features
        $anonymize_ip_feature = (int)Configuration::get('RC_PGANALYTICS_IF');
        $link_attribution = (int)Configuration::get('RC_PGANALYTICS_LF');
        $user_id_feature = (int)Configuration::get('RC_PGANALYTICS_UF');

        // Remarketing Dynamic
        $remarketing_feature = (int)Configuration::get('RC_PGANALYTICS_DF');
        $ecomm_prodid_index = (int)Configuration::get('RC_PGANALYTICS_D1');
        $ecomm_pagetype_index = (int)Configuration::get('RC_PGANALYTICS_D2');
        $ecomm_totalvalue_index = (int)Configuration::get('RC_PGANALYTICS_D3');
        $ecomm_category_index = (int)Configuration::get('RC_PGANALYTICS_D4');
        $ga_merchant_prefix = (string)Configuration::get('RC_PGANALYTICS_MC_PF');
        $ga_merchant_suffix = (string)Configuration::get('RC_PGANALYTICS_MC_SF');
        $ga_merchant_variant = (string)Configuration::get('RC_PGANALYTICS_MC_VT');

        // Business Data
        $business_data_feature = (int)Configuration::get('RC_PGANALYTICS_BD');
        $dynx_itemid_index = (int)Configuration::get('RC_PGANALYTICS_D5');
        $dynx_itemid2_index = (int)Configuration::get('RC_PGANALYTICS_D6');
        $dynx_pagetype_index = (int)Configuration::get('RC_PGANALYTICS_D7');
        $dynx_totalvalue_index = (int)Configuration::get('RC_PGANALYTICS_D8');
        $ga_business_data_prefix = (string)Configuration::get('RC_PGANALYTICS_BD_PF');
        $ga_business_data_variant = (string)Configuration::get('RC_PGANALYTICS_BD_VT');

        // AdWords Conversion
        $adwords_id = (string)Configuration::get('RC_PGANALYTICS_AW_ID');
        $adwords_cl = (string)Configuration::get('RC_PGANALYTICS_AW_CL');

        // Google Optimize
        $optimize_id = (string)Configuration::get('RC_PGANALYTICS_OPT_ID');
        $optimize_class_name = (string)Configuration::get('RC_PGANALYTICS_OPT_HCN');
        $optimize_time_out = (int)Configuration::get('RC_PGANALYTICS_OPT_HTO');

        // Cross Domain
        $domain_list = (string)Configuration::get('RC_PGANALYTICS_DML');

        // Goals
        $goal_sign_up = (int)Configuration::get('RC_PGANALYTICS_GOAL_SU');
        $goal_social_action = (int)Configuration::get('RC_PGANALYTICS_GOAL_SA');

        // Event values
        $event_value_sign_up = (int)Configuration::get('RC_PGANALYTICS_EVENT_VAL_SU');
        $event_value_social_action = (int)Configuration::get('RC_PGANALYTICS_EVENT_VAL_SA');

        // Prestashop basic data
        $cart_ajax = (int)Configuration::get('PS_BLOCK_CART_AJAX');
        $products_per_page = (int)Configuration::get('PS_PRODUCTS_PER_PAGE');
        $currency_iso = $this->context->currency->iso_code;
        $user_id = $this->context->customer->id;

        // Values for internal tracking
        $ga_cookie_exist = Rc_PgAnalyticsTools::isAdminGaCookieExist();
        $disable_internal_tracking = false;

        $is_client_id = 0;
        $client_id = 0;

        if ($user_id) {
            // get client id
            $client_id = Rc_PgAnalyticsClientId::getClientIdByCustomerId($user_id);
            $is_client_id = 1;
        }

        // Process the internal tracking feature - Disables tracking if feature active and user has accessed to BO
        if ($internal_tracking_feature && $ga_cookie_exist) {
            $disable_internal_tracking = true;
        }

        // Cross domain Feature
        if (!empty($domain_list)) {
            # Split domain list into array
            $domain_list = explode(',', $domain_list);
        }

        // Values for sign up goal
        $max_lapse = 100;
        $is_new_sign_up = false;
        $controller_name = Tools::getValue('controller');
        $sign_up_types = array('new customer', 'guest customer');
        $is_guest = 0;

        $controllers_with_sign_up = array(
            'index',
            'order',
            'supercheckout'
        );

        // Process sign up feature
        // index for sign up before checkout
        // order for sign up on checkout
        // supercheckout for concrete OPC 3rd party
        if (in_array($controller_name, $controllers_with_sign_up)) {
            // get customer date creation on timestamp
            $customer_date_add = strtotime($this->context->customer->date_add);

            if ($customer_date_add) {
                // calc sign up time lapse
                $sign_up_lapse = time() - $customer_date_add;

                if ($sign_up_lapse < $max_lapse) {
                    $is_new_sign_up = true;
                    // check if customer type is guest
                    $is_guest = $this->context->customer->is_guest;
                }
            }
        }

        // merchant center acronyms
        $ga_merchant_acronyms = Rc_PgAnalyticsTools::getFeedAcronyms($ga_merchant_prefix, $ga_merchant_suffix);

        // business data acronyms
        $ga_business_data_acronyms = Rc_PgAnalyticsTools::getFeedAcronyms($ga_business_data_prefix);

        // generate module token to avoid csrf
        $token = $this->secret_key;

        $id_shop = Context::getContext()->shop->id;

        $gtag_tracking_features = array(
            // gtag Ids
            'analyticsId' => $analytics_id,
            'adwordsId' => $adwords_id,
            'adwordsCl' => $adwords_cl,

            // basic
            'productSendRate' => $product_send_rate,
            'merchantPrefix' => $ga_merchant_acronyms['prefix'],
            'merchantSuffix' => $ga_merchant_acronyms['suffix'],
            'merchantVariant' => $ga_merchant_variant,
            'businessDataPrefix' => $ga_business_data_acronyms['prefix'],
            'businessDataVariant' => $ga_business_data_variant,
            'currency' => $currency_iso,
            'idShop' => $id_shop,

            // related to tracking
            'productsPerPage' => $products_per_page,
            'cartAjax' => $cart_ajax,
            'token' => $token,
            'disableInternalTracking' => $disable_internal_tracking,
            'signUpTypes' => $sign_up_types,
            'isNewSignUp' => $is_new_sign_up,
            'isGuest' => $is_guest,
            'checkDoNotTrack' => $check_do_not_track,

            // tracking config
            'config' => array(
                'optimizeId' => $optimize_id,
                'simpleSpeedSampleRate' => $simple_speed_sample_rate,
                'anonymizeIp' => $anonymize_ip_feature,
                'linkAttribution' => $link_attribution,
                'userIdFeature' => $user_id_feature,
                'userIdValue' => $user_id,
                'remarketing' => $remarketing_feature,
                'crossDomainList' => $domain_list,
                'clientId' => $client_id,
                'businessData' => $business_data_feature,
                'customDimensions' => array(
                    'ecommProdId' => $ecomm_prodid_index,
                    'ecommPageType' => $ecomm_pagetype_index,
                    'ecommTotalValue' => $ecomm_totalvalue_index,
                    'ecommCategory' => $ecomm_category_index,
                    'dynxItemId' => $dynx_itemid_index,
                    'dynxItemId2' => $dynx_itemid2_index,
                    'dynxPageType' => $dynx_pagetype_index,
                    'dynxTotalValue' => $dynx_totalvalue_index,
                )
            ),
            'goals' => array(
                'signUp' => $goal_sign_up,
                'socialAction' => $goal_social_action
            ),
            'eventValues' => array(
                'signUp' => $event_value_sign_up,
                'socialAction' => $event_value_social_action
            )
        );

        $this->context->smarty->assign(array(
            'gtag_tracking_features' => $gtag_tracking_features,
            'analytics_id' => $analytics_id,
            'optimize_id' => $optimize_id,
            'optimize_class_name' => $optimize_class_name,
            'optimize_time_out' => $optimize_time_out,
            'is_client_id' => $is_client_id,
        ));

        $this->context->controller->registerJavascript(
            'modules-'.$this->name,
            'modules/'.$this->name.'/views/js/hook/RcAnalyticsEvents.js',
            array('position' => 'head', 'priority' => 150)
        );

        return $this->fetch('module:'.$this->name.'/views/templates/hook/header.tpl');
    }

    public function hookOrderConfirmation($params)
    {
        $obj_order = $params['order'];
        $invalid_statuses = explode(',', Configuration::get('RC_PGANALYTICS_IOS'));

        if (Validate::isLoadedObject($obj_order)) {
            // Validate all orders except invalid statuses
            if (!in_array($obj_order->current_state, $invalid_statuses)) {
                // convert object to array
                $order = get_object_vars($obj_order);

                $order_id = $order['id'];
                $id_shop = $order['id_shop'];
                $id_lang = $order['id_lang'];

                $order_sent = (bool)Rc_PgAnalyticsOrderSent::getOrderReport($order_id, $id_shop);

                // common value to know the order status
                $this->context->smarty->assign(array(
                    'order_sent' => $order_sent
                ));

                if (!$order_sent) {
                    $order_products = $obj_order->getProducts();
                    $order_products = Rc_PgAnalyticsTools::getNamesWithoutVariant($order_products, $id_lang, $id_shop);
                    $order_products = Rc_PgAnalyticsTools::getGaCategories($order_products);
                    $order_products = Rc_PgAnalyticsTools::getManufacturerNames($order_products);
                    $order_products = Rc_PgAnalyticsTools::getVariants($order_products);

                    // Get affiliation name
                    $affiliation = Rc_PgAnalyticsTools::getAffiliation();

                    // Get coupon name
                    $coupon = Rc_PgAnalyticsTools::getCoupon($obj_order);

                    $products = Rc_PgAnalyticsTools::tagProducts($order_products, null, null, true);
                    $order = Rc_PgAnalyticsTools::tagOrder($order, $affiliation, $coupon);

                    $this->context->smarty->assign(array(
                        'id_shop' => $id_shop,
                        'ga_order' => $order,
                        'ga_products' => $products
                    ));
                }
            }
        }
    }

    public function hookDisplayBeforeBodyClosingTag()
    {
        $analytics_id = Configuration::get('RC_PGANALYTICS_ID');

        if (!$analytics_id) {
            // If not set the Analytics ID no load
            return false;
        }

        // Get controller name
        $controller_name = Tools::getValue('controller');

        // List of executed hooks on the page
        $active_hooks = Hook::$executed_hooks;

        // Set default values
        $is_checkout = false;
        $is_order = false;

        // list names
        $lists = array(
            'default' => $controller_name,
            'filter' => 'filtered_results',
            'productView' => 'product_page'
        );

        $controllers_with_product_lists = array(
            'product',
            'category',
            'manufacturer',
            'supplier',
            'bestsales',
            'newproducts',
            'search'
        );
        $products_list_cache = array();

        $ecomm_pagetype = 'other';
        $compliant_module_name = 'default';
        // some opc can skip the cart summary
        $skip_cart_step = false;

        // List of compliant 3rd party checkout modules (module => controller)
        $compliant_modules = array(
            'default' => 'order',
            'supercheckout' => 'supercheckout',
            'onepagecheckoutps' => 'order',
            'sveacheckout' => 'sveapaypage',
            'thecheckout' => 'order'
        );

        // check if some compliant module are enabled
        foreach (array_keys($compliant_modules) as $compliant_module) {
            // Check if compliant checkout module is enabled
            if (Module::isEnabled($compliant_module)) {
                $compliant_module_name = $compliant_module;
                break;
            }
        }

        if ($compliant_module_name === 'onepagecheckoutps' && Configuration::get('OPC_REDIRECT_DIRECTLY_TO_OPC')) {
            $skip_cart_step = true;
        }

        // set list and ecomm_pagetype depending controller active
        switch ($controller_name) {
            case 'index':
                $lists['default'] = 'home';
                $ecomm_pagetype = 'home';
                break;

            case 'category':
                $lists['default'] = 'category';
                $ecomm_pagetype = 'category';
                break;

            case 'manufacturer':
                $lists['default'] = 'manufacturer';
                $ecomm_pagetype = 'category';
                break;

            case 'supplier':
                $lists['default'] = 'supplier';
                $ecomm_pagetype = 'category';
                break;

            case 'bestsales':
                $lists['default'] = 'best_sales';
                $ecomm_pagetype = 'category';
                break;

            case 'newproducts':
                $lists['default'] = 'new_products';
                $ecomm_pagetype = 'category';
                break;

            case 'product':
                $lists['default'] = 'accessories';
                $ecomm_pagetype = 'product';
                break;

            case 'search':
                $lists['default'] = 'search_results';
                $ecomm_pagetype = 'searchresults';
                break;

            // SUMMARY CART
            case 'cart':
                $lists['default'] = 'begin_checkout';
                $ecomm_pagetype = 'cart';
                break;

            // CHECKOUT
            case $compliant_modules[$compliant_module_name]:
                $ecomm_pagetype = 'cart';
                break;
        }

        if (in_array('displayOrderConfirmation', $active_hooks) || in_array('displayPaymentReturn', $active_hooks)) {
            $is_order = true;
            $ecomm_pagetype = 'purchase';
        }

        if (!$is_order) {
            // check if page is on checkout process
            if ($controller_name == 'cart' ||
                $controller_name == 'order' ||
                (!empty($compliant_module_name) && $controller_name === $compliant_modules[$compliant_module_name])
            ) {
                // set checkout flag
                $is_checkout = true;

                // Get cart products
                $products = $this->context->cart->getProducts();

                if (!empty($products)) {
                    // add products to cache
                    $products_list_cache = Rc_PgAnalyticsTools::indexProductsCache($products);

                    // Get GA Category
                    $products = Rc_PgAnalyticsTools::getGaCategories($products);

                    // Get Combination names
                    $products = Rc_PgAnalyticsTools::getVariants($products);

                    // Get Manufacturer Name
                    $products = Rc_PgAnalyticsTools::getManufacturerNames($products);

                    // Tag the product data for GA
                    $ga_products = Rc_PgAnalyticsTools::tagProducts($products, null, null, true);

                    $this->context->smarty->assign(array(
                        'ga_products' => $ga_products
                    ));
                }
            } elseif (in_array($controller_name, $controllers_with_product_lists)) {
                $template_products = array();

                if ($controller_name === 'product') {
                    // handle product var
                    $product_view = $this->context->smarty->getTemplateVars('product');
                    if ($product_view) {
                        $template_products[] = $product_view;
                    }

                    // handle accessories var
                    $accessories = $this->context->smarty->getTemplateVars('accessories');
                    if ($accessories) {
                        $template_products = array_merge($template_products, $accessories);
                    }
                } else {
                    // rest of controllers will have listing var
                    $listing = $this->context->smarty->getTemplateVars('listing');
                    $template_products = $listing['products'];
                }

                // index template products
                if (is_array($template_products) && $template_products) {
                    $products_list_cache = Rc_PgAnalyticsTools::indexProductsCache($template_products);
                }
            }
        }

        $this->context->smarty->assign(array(
            'controller_name' => $controller_name,
            'compliant_modules' => $compliant_modules,
            'compliant_module_name' => $compliant_module_name,
            'skip_cart_step' => $skip_cart_step,
            'ecomm_pagetype' => $ecomm_pagetype,
            'lists' => $lists,
            'is_checkout' => $is_checkout,
            'is_order' => $is_order,
            'products_list_cache' => $products_list_cache
        ));

        return $this->fetch('module:' . $this->name . '/views/templates/hook/footer.tpl');
    }

    public function hookBackOfficeHeader()
    {
        if (Configuration::get('RC_PGANALYTICS_NO_IT')) {
            // If Exclude internal tracking enabled
            // always confirm GA cookie is created
            Rc_PgAnalyticsTools::setAdminGaCookie();
        }
    }

    public function hookDisplayAdminOrderTabOrder()
    {
        return $this->display(__FILE__, 'views/templates/admin/controllers/order/tab_order.tpl');
    }

    public function hookDisplayAdminOrderContentOrder($params)
    {
        // get actual id_shop
        $id_shop = Context::getContext()->shop->id;

        // get real base with or without SSL
        $base_url = Tools::getHttpHost(true);

        // get shop config to retrieve virtual uri
        $shop = Shop::getShop($id_shop);

        // build module url
        $module_url = $base_url.$shop['uri'].'modules/'.$this->name.'/';

        $tracking_statuses = array(
            'st' => $this->l('Setup'),
            'bo' => $this->l('Back Office'),
            'fo' => $this->l('Front Office')
        );

        $order_id = (int)$params['order']->id;
        $order_id_shop = (int)$params['order']->id_shop;

        $tracking_report = Rc_PgAnalyticsOrderSent::getOrderReport($order_id, $order_id_shop);

        $this->context->smarty->assign(array(
            'tracking_report' => $tracking_report,
            'tracking_statuses' => $tracking_statuses,
            'rc_order_id' => $order_id,
            'rc_order_id_shop' => $order_id_shop,
            'moduleUrl' => $module_url,
            'rcToken' => $this->secret_key
        ));

        $this->context->controller->addJS($this->_path.'views/js/admin/controllers/order/content_order.js');

        return $this->display(__FILE__, 'views/templates/admin/controllers/order/tab_content_order.tpl');
    }

    /* ACTION HOOKS */
    public function hookUpdateOrderStatus($params)
    {
        // List of executed hooks on the page
        $active_hooks = Hook::$executed_hooks;

        // Get the GA property
        $analytics_id = Configuration::get('RC_PGANALYTICS_ID');

        if (in_array('displayBackOfficeHeader', $active_hooks) && $analytics_id) {
            // Order state list to avoid send order to GA
            $invalid_statuses = explode(',', Configuration::get('RC_PGANALYTICS_IOS'));

            // Order state list to send a refund event
            $refund_statuses = explode(',', Configuration::get('RC_PGANALYTICS_ROS'));

            // Get Order ID
            $id_order = $params['id_order'];

            if (empty($id_order)) {
                return false;
            }

            // Get the new State ID
            $order_status = $params['newOrderStatus']->id;

            // Get all Order Data
            $obj_order = new Order($id_order);

            // Get id_lang placed on order
            $id_lang = $obj_order->id_lang;

            // Get id_shop placed on order
            $id_shop = $obj_order->id_shop;

            // convert object to array
            $ga_order = get_object_vars($obj_order);

            $currency = Currency::getCurrency($obj_order->id_currency);

            $ga_order['currency_iso_code'] = $currency['iso_code'];

            // Check if order has been sent to GA
            $order_sent = (bool)Rc_PgAnalyticsOrderSent::getOrderReport($id_order, $id_shop);

            if (!$order_sent) {
                // order has not been sent, check if new order_status are not on invalid status list
                if (!in_array($order_status, $invalid_statuses)) {
                    // Set Coupon name
                    $ga_order['coupon'] = Rc_PgAnalyticsTools::getCoupon($obj_order);

                    // Get affiliation name
                    $ga_order['affiliation'] = Rc_PgAnalyticsTools::getAffiliation();

                    // Get reference url
                    $ga_order['document_reference'] = Rc_PgAnalyticsTools::getSourceConnection(
                        $id_order,
                        $obj_order->date_add
                    );

                    // get ga utm campaign
                    $ga_order['ga_utm'] = Rc_PgAnalyticsTools::getGaUtmValues(
                        $ga_order['module'],
                        $ga_order['document_reference']
                    );

                    // Get order products
                    $products = $obj_order->getProducts();

                    if ($products) {
                        // normalize product data
                        $products = Rc_PgAnalyticsTools::getNamesWithoutVariant($products, $id_lang, $id_shop);
                        $products = Rc_PgAnalyticsTools::getGaCategories($products);
                        $products = Rc_PgAnalyticsTools::getManufacturerNames($products);
                        $products = Rc_PgAnalyticsTools::getVariants($products);

                        // Tag the product data for GA
                        $products = Rc_PgAnalyticsTools::tagProducts($products, null, null, true);

                        // Tag order refund to send it to GA
                        $transaction = Rc_PgAnalyticsTools::curlTagTransaction(
                            $analytics_id,
                            $ga_order,
                            $products,
                            'event',
                            'purchase'
                        );

                        // send the order to GA by CURL
                        Rc_PgAnalyticsTools::curlSendGaTransaction($transaction);

                        // set order to database
                        Rc_PgAnalyticsTools::setOrderSend($id_order, $id_shop, 'bo');
                    }
                }
            } else {
                // order has been sent, check if order has a refund status
                if (in_array($order_status, $refund_statuses)) {
                    // Get products refund, if products are not refunded will send full order refund
                    $products_refund = Rc_PgAnalyticsTools::getProductsRefund(
                        $id_order,
                        $id_lang,
                        $id_shop
                    );

                    // Tag order refund to send it to GA
                    $transaction = Rc_PgAnalyticsTools::curlTagTransaction(
                        $analytics_id,
                        $ga_order,
                        $products_refund,
                        'event',
                        'refund'
                    );

                    // Send order refund by CURL
                    Rc_PgAnalyticsTools::curlSendGaTransaction($transaction);
                }
            }
        }
    }

    /* AJAX REQUEST */
    public function ajaxCall($params)
    {
        $response = '';
        if (!empty($params['action'])) {
            $action = $params['action'];

            if ($action === 'product') {
                $response = Rc_PgAnalyticsTools::ajaxActionProduct($params);
            } elseif ($action === 'orderComplete') {
                $response = Rc_PgAnalyticsTools::ajaxActionOrderComplete($params);
            } elseif ($action === 'abortedTransaction') {
                $response = Rc_PgAnalyticsTools::ajaxActionAbortedTransaction($params);
            } elseif ($action === 'clientId') {
                $response = Rc_PgAnalyticsTools::ajaxActionClientId($params);
            } elseif ($action === 'deleteFromControlTable') {
                $response = Rc_PgAnalyticsTools::ajaxActionDeleteFromControlTable($params);
            } elseif ($action === 'forceTransaction') {
                $response = Rc_PgAnalyticsTools::ajaxActionForceTransaction($params);
            }

            // check if response is not an array
            if (!is_array($response)) {
                // convert response in array to get properly response
                $response = array(
                    'result' => $response
                );
            }

            header('Content-Type: application/json');
            die(json_encode($response));
        } else {
            throw new Exception('no action detected');
        }
    }
}
