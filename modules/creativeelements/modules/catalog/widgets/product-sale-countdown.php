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

class WidgetProductSaleCountdown extends WidgetCountdown
{
    public function getName()
    {
        return 'product-sale-countdown';
    }

    public function getTitle()
    {
        return __('Sale Countdown');
    }

    public function getIcon()
    {
        return 'eicon-countdown';
    }

    public function getCategories()
    {
        return ['product-elements'];
    }

    public function getKeywords()
    {
        return ['shop', 'store', 'countdown', 'timer', 'date', 'sale', 'discount', 'product'];
    }

    protected function _registerControls()
    {
        parent::_registerControls();

        $this->updateControl(
            'due_date',
            [
                'type' => ControlsManager::HIDDEN,
                'default' => '',
            ]
        );
    }

    protected function render()
    {
        if (is_admin()) {
            return print '<div class="ce-remote-render"></div>';
        }
        $product = &\Context::getContext()->smarty->tpl_vars['product']->value;

        if (!$product['has_discount'] ||
            empty($product['specific_prices']['to']) || '0000-00-00 00:00:00' === $product['specific_prices']['to']
        ) {
            return;
        }
        $this->setSettings('due_date', $product['specific_prices']['to']);

        parent::render();
    }
}
