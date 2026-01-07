<?php
/**
* 2016 - 2018 PrestaBuilder
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement.
*
* You must not modify, adapt or create derivative works of this source code.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future.
*
*  @author    PrestaBuilder <prestabuilder@gmail.com>
*  @copyright 2016 - 2018 PrestaBuilder
*  @license   Do not distribute this module without permission from the author
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

include_once(_PS_MODULE_DIR_.'ptm_multiblocks/classes/PTMMultiBlocksModel.php');

class Ptm_MultiBlocks extends Module implements WidgetInterface
{
    protected $_html = '';
    // these hooks don't need visibility
    protected static $hooksWithNoVisibility = [
        'displayHome','header', 'displayPDFinvoice', 'displayFooterProduct', 'displayLeftColumnProduct','displayRightColumnProduct', 'displayShoppingCart', 'displayShoppingCartFooter', 'displayMaintenance', 'displayMyAccountBlock', 'displayCustomerAccount', 'displayInvoiceLegalFreeText', 'displayProductButtons','displayCustomerAccountForm', 'displayCustomerAccountFormTop', 'displayProductAdditionalInfo'
    ];

    public function __construct()
    {
        $this->name = 'ptm_multiblocks';
        $this->tab = 'front_office_features';
        $this->version = '1.7.0';
        $this->author = 'Presta Theme Maker';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

        parent::__construct();

        $this->displayName = $this->l('Multi Custom HTML JS Blocks');
        $this->description = $this->l('Custom HTML/JS/CSS code in various hooks of the eshop.');
        $this->module_key = '6f95ba049b96141cb21f9beb60822ad9';
    }

        /**
     * @see Module::install()
     */
    public function install()
    {
        /* Adds Module */
        if (parent::install() &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('header') &&
            $this->registerHook('displayHome') && 
            $this->registerHook('displayTop') && 
            $this->registerHook('displayNavFullWidth') && 
            $this->registerHook('displayTopColumn') && 
            $this->registerHook('displayFooter') && 
            $this->registerHook('displayFooterAfter') && 
            $this->registerHook('displayFooterProduct') && 
            $this->registerHook('displayLeftColumn') && 
            $this->registerHook('displayLeftColumnProduct') && 
            $this->registerHook('displayRightColumn') && 
            $this->registerHook('displayRightColumnProduct') && 
            $this->registerHook('displayAfterBodyOpeningTag') &&
            $this->registerHook('displayContentWrapperTop') &&
            $this->registerHook('displayContentWrapperBottom') &&
            $this->registerHook('displayWrapperBottom') &&
            $this->registerHook('displayBeforeBodyClosingTag') && 
            $this->registerHook('displayMaintenace') && 
            $this->registerHook('displayMyAccountBlock') && 
            $this->registerHook('displayShoppingCart') && 
            $this->registerHook('displayShoppingCartFooter') && 
            $this->registerHook('displayMaintenance') && 
            $this->registerHook('displayCustomerAccount') && 
            $this->registerHook('displayCustomerAccountForm') && 
            $this->registerHook('displayCustomerAccountFormTop') && 
            $this->registerHook('displayInvoiceLegalFreeText') && 
            $this->registerHook('displayProductButtons') && 
            $this->registerHook('displayPDFinvoice') &&
            $this->registerHook('displayProductAdditionalInfo')
            
        ) {
            /* Creates tables */
            $this->createTables();

            /* Insatll fixtures */
            $this->installSamples();

            return true;
        }

        return false;
    }

    /**
     * @see Module::uninstall()
     */
    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            /* Deletes tables */
            $this->deleteTables();

            return true;
        }

        return false;
    }

    /**
     * Creates tables
     */
    protected function createTables()
    {
        /* multiblocks configuration */
        $res = Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ptm_multiblocks` (
              `id_multiblock` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `hook` varchar(100) NOT NULL,
              `hook_name` varchar(100) NOT NULL,
              `target_group` tinyint(2) NULL DEFAULT \'0\',
              `visibility` varchar(100) NULL DEFAULT NULL,
              `position` int(10) unsigned NOT NULL DEFAULT \'0\',
              `active` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
              `id_shop` int(10) unsigned NOT NULL,
              PRIMARY KEY (`id_multiblock`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        /* multiblocks lang configuration */
        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ptm_multiblocks_lang` (
              `id_lang` int(10) unsigned NOT NULL,
              `id_multiblock` int(10) unsigned NOT NULL,
              `html_code` text NULL DEFAULT NULL,
              `js_code` text NULL DEFAULT NULL
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }

    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        $multiblocks = PTMMultiBlocksModel::getCustomBlocksForFrontEnd();
        foreach ($multiblocks as $multiblock) {
            $to_del = new PTMMultiBlocksModel($multiblock['id_multiblock']);
            $to_del->delete();
        }

        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS `'._DB_PREFIX_.'ptm_multiblocks`, `'._DB_PREFIX_.'ptm_multiblocks_lang`;
        ');
    }

    public function getContent()
    {
        $this->_html .= $this->headerHTML();

        /* Validate & process */
        if (Tools::isSubmit('submitMultiBlockForm') || Tools::isSubmit('delete_id_multiblock') ||
            Tools::isSubmit('submitMultiBlock') || Tools::isSubmit('changeStatus')
        ) {
            if ($this->_postValidation()) {
                $this->_postProcess();
                $this->_html .= $this->renderList();
            } else {
                $this->_html .= $this->renderAddForm();
            }

            $this->clearCache();
        } else if (Tools::isSubmit('addMultiBlock') || (Tools::isSubmit('id_multiblock') && PTMMultiBlocksModel::isExists((int)Tools::getValue('id_multiblock')))) {
            $mode = 'edit';
            
            if (Tools::isSubmit('addMultiBlock')) {
                $mode = 'add';
            }

            if ($mode == 'add') {
                if (Shop::getContext() != Shop::CONTEXT_GROUP && Shop::getContext() != Shop::CONTEXT_ALL) {
                    $this->_html .= $this->renderAddForm();
                } else {
                    $this->_html .= $this->getShopContextError(null, $mode);
                }
            } else {
                $this->_html .= $this->renderAddForm();
            }
        } else {
            if (Shop::getContext() != Shop::CONTEXT_GROUP && Shop::getContext() != Shop::CONTEXT_ALL) {
                $this->_html .= $this->renderList();
            }
        }

        return $this->_html;
    }

    public function renderForm()
    {
        return "";
    }

    public function renderAddForm()
    {
        $fields_form = array(
            'form' => array(
                'tinymce' => true,
                'legend' => array(
                    'title' => $this->l('Multi Custom Block Information'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Name of the hook'),
                        'name' => 'hook_name',
                        'required' => true
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Custom Code (HTML/JS)'),
                        'name' => 'html_code',
                        'class' => 'custom_code rtepro',
                        'form_group_class' => 'html_code_container',
                        'autoload_rte' => true,
                        'lang' => true,
                        'required' => false,
                        'hint' => $this->l('In order to add JS, disable HTMLPurifier Library (Shop Parameters > General > Disable HTMLPurifier Library)')
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Javascript Code Snippet'),
                        'name' => 'js_code',
                        'form_group_class' => 'javascript_code_snippet',
                        'class' => 'js_code',
                        'lang' => true,
                        'required' => false,
                        'hint' => $this->l('Please paste in the JS/CSS code snippet including the opening/closing tags')
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Where to hook'),
                        'class' => 'fixed-width-sm',
                        'name' => 'hook',
                        'required' => true,
                        'options' => array(
                            'query' => $this->_getSelectValues()['where_to_hook'],
                            'id'   => 'id',
                            'name' => 'name'
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Target group'),
                        'class' => 'fixed-width-sm',
                        'form_group_class' => 'target_group-wrapper',
                        'name' => 'target_group',
                        'options' => array(
                            'query' => $this->_getSelectValues()['target_group'],
                            'id'   => 'id',
                            'name' => 'name'
                        ),
                    ),
                    array(
                        'type' => 'checkbox',
                        'label' => $this->l('Visibility'),
                        'class' => 'fixed-width-sm',
                        'form_group_class' => 'visibility-wrapper',
                        'name' => 'visibility',
                        'values' => array(
                            'query' => $this->_getSelectValues()['visibility'],
                            'id'   => 'id',
                            'name' => 'name'
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enabled'),
                        'name' => 'active_multiblock',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        if (Tools::isSubmit('id_multiblock') && PTMMultiBlocksModel::isExists((int)Tools::getValue('id_multiblock'))) {
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_multiblock');
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitMultiBlockForm';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->tpl_vars = array(
            'base_url' => $this->context->shop->getBaseURL(),
            'language' => array(
                'id_lang' => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value' => $this->getAddFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'id_shop'       => $this->context->shop->id,
            'mod_name'      => $this->name,
            'secure_key'    => $this->secure_key,
        );

        $helper->override_folder = '/';

        return $helper->generateForm(array($fields_form));   
    }

    protected function _postValidation()
    {
        $errors = array();

        /* Validation for custom blocks configuration */
        if (Tools::isSubmit('changeStatus')) {
            if (!Validate::isInt(Tools::getValue('id_multiblock'))) {
                $errors[] = $this->l('Invalid custom block');
            }
        } elseif (Tools::isSubmit('submitMultiBlockForm')) {
            /* Checks state (active) */
            if (!Validate::isInt(Tools::getValue('active_multiblock')) || (Tools::getValue('active_multiblock') != 0 && Tools::getValue('active_multiblock') != 1)) {
                $errors[] = $this->l('Invalid custom block state.');
            }

            // check hook
            if (!Tools::isSubmit('hook') || Tools::isEmpty(Tools::getValue('hook'))) {
                $errors[] = $this->l('Please choose where to hook.');
            }

            /* If edit : checks id_multiblock */
            if (Tools::isSubmit('id_multiblock')) {
                if (!Validate::isInt(Tools::getValue('id_multiblock')) && !PTMMultiBlocksModel::isExists(Tools::getValue('id_multiblock'))) {
                    $errors[] = $this->l('Invalid custom block ID');
                }
            }

            if (Tools::strlen(Tools::getValue('hook_name')) > 100) {
                $errors[] = $this->l('Name of the hook is too long.');
            } else if (Tools::isEmpty(Tools::getValue('hook_name'))) {
                $errors[] = $this->l('Please enter a name of the hook.');

            }
        } elseif (Tools::isSubmit('delete_id_multiblock') && (!Validate::isInt(Tools::getValue('delete_id_multiblock')) || !PTMMultiBlocksModel::isExists((int)Tools::getValue('delete_id_multiblock')))) {
            $errors[] = $this->l('Invalid text ID');
        }

        /* Display errors if needed */
        if (count($errors)) {
            foreach ($errors as $error) {
                $this->_html .= $this->displayError($error);
            }

            return false;
        }

        /* Returns if validation is ok */
        return true;
    }

    protected function _postProcess()
    {
        $errors = array();

        if (Tools::isSubmit('changeStatus') && Tools::isSubmit('id_multiblock')) {
            $customblock = new PTMMultiBlocksModel((int)Tools::getValue('id_multiblock'));

            if ($customblock->active == 0) {
                $customblock->active = 1;
            } else {
                $customblock->active = 0;
            }

            $res = $customblock->update();
            $this->clearCache();

            $this->_html .= ($res ? $this->displayConfirmation($this->l('Configuration updated')) : $this->displayError($this->l('The configuration could not be updated.')));
        } elseif (Tools::isSubmit('submitMultiBlockForm')) {
            /* Sets ID if needed */
            if ($id_multiblock = (int)Tools::getValue('id_multiblock')) {
                $customblock = new PTMMultiBlocksModel($id_multiblock);
                if (!Validate::isLoadedObject($customblock)) {
                    $this->_html .= $this->displayError($this->l('Invalid row ID'));
                    return false;
                }
            } else {
                $customblock = new PTMMultiBlocksModel();
            }

            $id_shop = $this->context->shop->id;
            
            /* Sets position */
            if (!$id_multiblock)
                $customblock->position = (int)PTMMultiBlocksModel::getNextPosition();
            
            /* Sets active */
            $customblock->active  = (int)Tools::getValue('active_multiblock');
            /* Sets id_shop */
            $hook                   = Tools::getValue('hook');
            $customblock->id_shop   = (int)$id_shop;
            $customblock->hook      = $hook;
            $customblock->target_group = (int)Tools::getValue('target_group');
            $visibilities = [];

            // loop through visibility
            if (!in_array($hook, self::$hooksWithNoVisibility)) {
                $getVisibilities = $this->_getSelectValues()['visibility'];
                $countVisibilities = count($getVisibilities);
                for ($v=1; $v <= $countVisibilities; $v++) {
                    if (Tools::isSubmit('visibility_'. $v)) {
                        $visibilities[] = Tools::getValue('visibility_'. $v);
                    }
                }
            }

            $customblock->visibility = serialize($visibilities);
            $customblock->hook_name = Tools::getValue('hook_name');

            /* Sets each langue fields */
            $languages = Language::getLanguages(false);

            foreach ($languages as $language) {
                if ($hook == 'header') {
                    $customblock->js_code[$language['id_lang']] = Tools::getValue('js_code_'.$language['id_lang']);
                } else {
                    $customblock->html_code[$language['id_lang']] = Tools::getValue('html_code_'.$language['id_lang']);
                }
            }

            /* Processes if no errors  */
            if (!$errors) {
                /* Adds */
                if (!$id_multiblock) {
                    if (!$customblock->add()) {
                        $errors[] = $this->displayError($this->l('The custom block could not be added.'));
                    }
                } elseif (!$customblock->update()) {
                    $errors[] = $this->displayError($this->l('The custom block could not be updated.'));
                }
                $this->clearCache();
            }
        } elseif (Tools::isSubmit('delete_id_multiblock')) {
            $customblock = new PTMMultiBlocksModel((int)Tools::getValue('delete_id_multiblock'));
            $res         = $customblock->delete();
            $this->clearCache();
            
            if (!$res) {
                $this->_html .= $this->displayError('Could not delete.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=1&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
            }
        }

        /* Display errors if needed */
        if (count($errors)) {
            foreach ($errors as $error) {
                $this->_html .= $this->displayError($error);
            }
        } elseif (Tools::isSubmit('submitMultiBlockForm') && Tools::getValue('id_multiblock')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=4&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
        } elseif (Tools::isSubmit('submitMultiBlockForm')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=3&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
        }
    }

    public function renderList()
    {
        $ptmmultiblocksmodel = new PTMMultiBlocksModel();
        $customblocks        = $ptmmultiblocksmodel->getCustomBlocks(true);

        $this->context->smarty->assign(
            array(
                'link'         => $this->context->link,
                'customblocks' => $customblocks
            )
        );

        return $this->display(__FILE__, 'list.tpl');
    }

    public function clearCache()
    {
        $this->_clearCache('multiblocks.tpl');
    }

    public function displayStatus($id_multiblock, $active)
    {
        $title = ((int)$active == 0 ? $this->l('Disabled') : $this->l('Enabled'));
        $icon = ((int)$active == 0 ? 'icon-remove' : 'icon-check');
        $class = ((int)$active == 0 ? 'btn-danger' : 'btn-success');

        return [
            'link'  => AdminController::$currentIndex. '&configure='. $this->name .'&token='. Tools::getAdminTokenLite('AdminModules'). '&changeStatus&id_multiblock='. (int)$id_multiblock,
            'title' => $title,
            'href_class' => $class,
            'icon_class'  => $icon
        ];
    }

    public function getAddFieldsValues()
    {
        $fields = array();
        $visibilities      = $this->_getSelectValues()['visibility'];
        $countVisibilities = count($visibilities);

        if (Tools::isSubmit('id_multiblock') && PTMMultiBlocksModel::isExists((int)Tools::getValue('id_multiblock'))) {
            $multiblock = new PTMMultiBlocksModel((int)Tools::getValue('id_multiblock'));
            $fields['id_multiblock'] = (int)Tools::getValue('id_multiblock', $multiblock->id);
            $fields['active_multiblock'] = Tools::getValue('active_multiblock', $multiblock->active);

            $getVisibility = unserialize($multiblock->visibility);
            $countAvailableVisibilities = count($getVisibility);

            // check selected visibilities if already checked
            if ($countAvailableVisibilities) {
                foreach ($visibilities as $visibiliti) {
                    for ($v = 0; $v < $countAvailableVisibilities; $v++) {
                        if ($getVisibility[$v] == $visibiliti['val']) {
                            $fields['visibility_'. $visibiliti['id']] = true;
                        }
                    }
                }
            }

        } else {
            $multiblock = new PTMMultiBlocksModel();

            // check all visibilities by default
            for ($v = 1; $v <= $countVisibilities; $v++) {
                $fields['visibility_'. $v] = Tools::getValue('visibility_'. $v, true);
            }

            // enable the custom block by default
            $fields['active_multiblock'] = (int)Tools::getValue('active_multiblock', true);
        }

        $fields['target_group'] = (int)Tools::getValue('target_group', $multiblock->target_group);

        if (Tools::getValue('selectedHook')) {
            $fields['hook'] = Tools::getValue('hook', Tools::getValue('selectedHook'));
        } else {
            $fields['hook'] = Tools::getValue('hook', $multiblock->hook);
        }

        $fields['hook_name'] = Tools::getValue('hook_name', $multiblock->hook_name);
        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $fields['html_code'][$lang['id_lang']] = Tools::getValue('html_code_'. $lang['id_lang'], $multiblock->html_code[$lang['id_lang']]);
            $fields['js_code'][$lang['id_lang']] = Tools::getValue('js_code_'. $lang['id_lang'], $multiblock->js_code[$lang['id_lang']]);
        }

        return $fields;
    }

    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name) {
            return;
        }

        $this->context->controller->addJqueryUI('ui.sortable');
        
        /* Style & js for fieldset 'multiblocks configuration' */

        $this->context->smarty->assign(
            array(
                'ad'            => dirname($_SERVER["PHP_SELF"]),
                'theme_css_dir' => _THEME_CSS_DIR_,
                'virtual_uri'   => $this->context->shop->physical_uri.$this->context->shop->virtual_uri,
                'name'          => $this->name,
                'secure_key'    => $this->secure_key,
            )
        );
        return $this->display(__FILE__, 'admin_js.tpl');
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));

        return $this->display(__FILE__, 'customblocks.tpl');
    }

    public function getWidgetVariables($hookName, array $configuration = [])
    {
        $customblocks = PTMMultiBlocksModel::getCustomBlocksForFrontEnd(true, $hookName);

        if($this->context->customer){
            $isLogged = $this->context->customer->isLogged();
        }else{
            $isLogged = false;
        }

        return [
            'currentHook'  => $hookName, 
            'is_logged'    => $isLogged,
            'customblocks' => $customblocks,
            'noVisibilityAvailable' => self::$hooksWithNoVisibility,
        ];
    }

    public function hookHeader($params)
    {
        $getJsCode = PTMMultiBlocksModel::getCustomBlocksForFrontEnd(true, 'header');

        if (!count($getJsCode)) {
            return;
        }

        $js_code = '';
        foreach ($getJsCode as $js) {
            $js_code .= $js['js_code'] ."\n";
        }

        $this->context->smarty->assign('js_code_snippet', $js_code);
        
        return $this->fetch($this->local_path .'views/templates/hook/js_snippet_header.tpl');
    }

    public function hookDisplayBackOfficeHeader($params)
    {
        if (!Tools::getValue('configure') || Tools::getValue('configure') != $this->name) {
            return;
        }

        // css
        $this->context->controller->addCSS($this->_path.'views/css/multiblocks_backend.css');
        $this->context->controller->addCSS($this->_path.'views/css/ptm_bk.css');

        // js
        $this->context->controller->addJquery();
        if (Tools::getValue('addMultiBlock') || Tools::getValue('id_multiblock')) {
            if (Tools::version_compare(_PS_VERSION_, '1.7.1.0', '<')) {
                $this->context->controller->addJS($this->_path.'views/js/tinymce16.inc.js');
            }
        }

        $this->context->controller->addJS($this->_path.'views/js/multiblocks_backend.js');
    }

    protected function getWarningMultishopHtml()
    {
        if (Shop::getContext() == Shop::CONTEXT_GROUP || Shop::getContext() == Shop::CONTEXT_ALL) {
            return $this->displayError($this->l('You cannot manage texts services from a "All Shops" or a "Group Shop" context, select directly the shop you want to edit'));
        } else {
            return '';
        }
    }

    protected function getShopContextError($shop_contextualized_name, $mode)
    {
        if (is_array($shop_contextualized_name)) {
            $shop_contextualized_name = implode(', ', $shop_contextualized_name);
        }

        if ($mode == 'edit') {
            return $this->displayError(sprintf($this->l('You can only edit this service from the shop(s) context: %s'), $shop_contextualized_name));
        } else {
            return $this->displayError(sprintf($this->l('You cannot add services from a "All Shops" or a "Group Shop" context')));
        }
    }

    protected function getCurrentShopInfoMsg()
    {
        $shop_info = null;

        if (Shop::isFeatureActive()) {
            if (Shop::getContext() == Shop::CONTEXT_SHOP) {
                $shop_info = sprintf($this->l('The modifications will be applied to shop: %s'), $this->context->shop->name);
            } else if (Shop::getContext() == Shop::CONTEXT_GROUP) {
                $shop_info = sprintf($this->l('The modifications will be applied to this group: %s'), Shop::getContextShopGroup()->name);
            } else {
                $shop_info = $this->l('The modifications will be applied to all shops and shop groups');
            }

            return $this->displayConfirmation($shop_info);
        } else {
            return '';
        }
    }

    /**
     * Adds samples
     */
    protected function installSamples()
    {
        $id_shop = Shop::getContextShopID();

        $customblock        = new PTMMultiBlocksModel();
        $customblock->hook  = 'displayTop';
        $customblock->target_group  = 1;
        $customblock->visibility    = serialize(['index','category','product','cms','other']);
        $customblock->position      = 0;
        $customblock->active        = 1;
        $customblock->id_shop       = $id_shop;
        $customblock->hook_name     = 'Your first custom block';

        $languages = Language::getLanguages(false);

        $sampleContent = Tools::file_get_contents(dirname(__FILE__).'/samples/sample1.txt');

        foreach ($languages as $lang) {
            $customblock->html_code[$lang['id_lang']] = $sampleContent;
            $customblock->js_code[$lang['id_lang']] = '';
        }
        
        $customblock->add();

        return true;
    }

    /**
     * Global select values
     */
    private function _getSelectValues()
    {
        return [
            'where_to_hook' => [
                ['id' => '', 'name' => ''],
                ['id' => 'displayTop', 'name' => 'displayTop'],
                ['id' => 'displayTopColumn', 'name' => 'displayTopColumn'],
                ['id' => 'header', 'name' => 'header'],
                ['id' => 'displayNavFullWidth', 'name' => 'displayNavFullWidth'],
                ['id' => 'displayFooter', 'name' => 'displayFooter'],
                ['id' => 'displayFooterAfter', 'name' => 'displayFooterAfter'],
                ['id' => 'displayHome', 'name' => 'displayHome'],
                ['id' => 'displayLeftColumn', 'name' => 'displayLeftColumn'],
                ['id' => 'displayRightColumn', 'name' => 'displayRightColumn'],
                ['id' => 'displayFooterProduct', 'name' => 'displayFooterProduct'],
                ['id' => 'displayLeftColumnProduct', 'name' => 'displayLeftColumnProduct'],
                ['id' => 'displayRightColumnProduct', 'name' => 'displayRightColumnProduct'],
                ['id' => 'displayContentWrapperBottom', 'name' => 'displayContentWrapperBottom'],
                ['id' => 'displayWrapperBottom', 'name' => 'displayWrapperBottom'],
                ['id' => 'displayProductButtons', 'name' => 'displayProductButtons'],
                ['id' => 'displayAfterBodyOpeningTag', 'name' => 'displayAfterBodyOpeningTag'],
                ['id' => 'displayBeforeBodyClosingTag', 'name' => 'displayBeforeBodyClosingTag'],
                ['id' => 'displayMyAccountBlock', 'name' => 'displayMyAccountBlock'],
                ['id' => 'displayCustomerAccount', 'name' => 'displayCustomerAccount'],
                /*['id' => 'displayCustomerAccountForm', 'name' => 'displayCustomerAccountForm'],*/
                ['id' => 'displayCustomerAccountFormTop', 'name' => 'displayCustomerAccountFormTop'],
                ['id' => 'displayShoppingCart', 'name' => 'displayShoppingCart'],
                ['id' => 'displayShoppingCartFooter', 'name' => 'displayShoppingCartFooter'],
                // ['id' => 'displayPDFinvoice', 'name' => 'displayPDFinvoice'],
                ['id' => 'displayInvoiceLegalFreeText', 'name' => 'displayInvoiceLegalFreeText'],
                ['id' => 'displayMaintenance', 'name' => 'displayMaintenance'],
                ['id' => 'displayProductAdditionalInfo', 'name' => 'displayProductAdditionalInfo'],
                ['id' => 'displayBandeau', 'name' => 'displayBandeau'],
            ],
            'target_group' => [
                ['id' => 1, 'name' => 'Display for all visitors'],
                ['id' => 2, 'name' => 'Display only for users who are signed in'],
                ['id' => 3, 'name' => 'Display only for users who are not signed in'],
            ],
            'visibility' => [
                ['val' => 'index', 'id' => 1, 'name' => 'Show on homepage'],
                ['val' => 'category', 'id' => 2, 'name' => 'Show on category page'],
                ['val' => 'product', 'id' => 3, 'name' => 'Show on product page'],
                ['val' => 'cms', 'id' => 4, 'name' => 'Show on CMS page'],
                ['val' => 'other', 'id' => 5, 'name' => 'Show on other pages'],
            ]
        ];
    }
}