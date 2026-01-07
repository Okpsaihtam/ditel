<?php
/**
 * Creative Elements - live Theme & Page Builder
 *
 * @author    WebshopWorks
 * @copyright 2019-2022 WebshopWorks.com
 * @license   One domain support license
 */

namespace CE;

defined('_PS_VERSION_') or die;

class WidgetProductName extends WidgetHeading
{
    public function getName()
    {
        return 'product-name';
    }

    public function getTitle()
    {
        return __('Product Name');
    }

    public function getIcon()
    {
        return 'eicon-product-title';
    }

    public function getCategories()
    {
        return ['product-elements'];
    }

    public function getKeywords()
    {
        return ['shop', 'store', 'title', 'name', 'heading', 'product'];
    }

    protected function _registerControls()
    {
        parent::_registerControls();

        $this->updateControl('title', ['type' => ControlsManager::HIDDEN]);

        $this->updateControl('link', ['type' => ControlsManager::HIDDEN]);

        $this->updateControl('header_size', ['default' => 'h1']);
    }

    protected function getHtmlWrapperClass()
    {
        return parent::getHtmlWrapperClass() . ' elementor-widget-' . parent::getName();
    }

    protected function addInlineEditingAttributes($key, $toolbar = 'basic')
    {
        // Prevent inline editing
    }

    protected function render()
    {
        if (is_admin()) {
            return print '<div class="ce-remote-render"></div>';
        }
        $product = &\Context::getContext()->smarty->tpl_vars['product']->value;

        $this->setSettings('title', $product['name']);
        $this->addRenderAttribute('title', 'itemprop', 'name');

        parent::render();
    }

    public function renderPlainContent()
    {
    }

    protected function _contentTemplate()
    {
    }
}
