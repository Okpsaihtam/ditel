<?php
/**
 * Creative Elements - live Theme & Page Builder
 *
 * @author    WebshopWorks, Elementor
 * @copyright 2019-2022 WebshopWorks.com & Elementor.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.html
 */

namespace CE;

defined('_PS_VERSION_') or die;

class WidgetProductBrandImage extends WidgetImage
{
    public function getName()
    {
        return 'product-brand-image';
    }

    public function getTitle()
    {
        return __('Brand Image');
    }

    public function getIcon()
    {
        return 'eicon-favorite';
    }

    public function getCategories()
    {
        return ['product-elements'];
    }

    public function getKeywords()
    {
        return ['shop', 'store', 'brand', 'manufacturer', 'image', 'product'];
    }

    protected function _registerControls()
    {
        parent::_registerControls();

        $this->updateControl(
            'image',
            [
                'type' => ControlsManager::HIDDEN,
            ]
        );

        $this->startInjection([
            'of' => 'align',
        ]);

        $this->addControl(
            'show_caption',
            [
                'label' => __('Caption'),
                'type' => ControlsManager::SWITCHER,
                'label_on' => __('Show'),
                'label_off' => __('Hide'),
            ]
        );

        $this->endInjection();

        $this->updateControl(
            'caption',
            [
                'type' => ControlsManager::HIDDEN,
            ]
        );

        $this->updateControl(
            'link_to',
            [
                'options' => [
                    'none' => __('None'),
                    'custom' => __('Brand'),
                ],
                'default' => 'custom',
            ]
        );

        $this->updateControl(
            'link',
            [
                'type' => ControlsManager::HIDDEN,
            ]
        );
    }

    protected function getHtmlWrapperClass()
    {
        return parent::getHtmlWrapperClass() . ' elementor-widget-' . parent::getName();
    }

    protected function render()
    {
        if (is_admin()) {
            return print '<div class="ce-remote-render"></div>';
        }

        $vars = \Context::getContext()->smarty->tpl_vars;

        if (!isset($vars['product_manufacturer']->value->id, $vars['manufacturer_image_url']->value)) {
            return;
        }

        $this->setSettings('image', [
            'id' => '',
            'url' => $vars['manufacturer_image_url']->value,
            'alt' => $vars['product_manufacturer']->value->name,
        ]);
        $this->setSettings('link', [
            'url' => $vars['product_brand_url']->value,
            'is_external' => false,
        ]);
        $this->getSettings('show_caption') && $this->setSettings('caption', $vars['product_manufacturer']->value->name);

        parent::render();
    }

    public function renderPlainContent()
    {
    }

    protected function _contentTemplate()
    {
    }
}
