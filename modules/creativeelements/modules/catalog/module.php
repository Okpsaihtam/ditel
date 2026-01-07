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

use CE\CoreXBaseXModule as BaseModule;
use CE\CoreXDocumentTypesXProduct as ProductDocument;

class ModulesXCatalogXModule extends BaseModule
{
    public function getName()
    {
        return 'catalog';
    }

    public function getProductWidgets()
    {
        return [
            'product-name',
            'product-badges',
            'product-images',
            'product-image',
            'product-price',
            'product-rating',
            'product-meta',
            'product-description-short',
            'product-variants',
            'product-stock',
            'product-quantity',
            'product-add-to-cart',
            'product-description',
            'product-add-to-wishlist',
            'product-features',
            'product-attachments',
            'product-sale-countdown',
            'product-brand-image',
            'product-share',
            'product-block',
        ];
    }

    public function initWidgets()
    {
        $uid = \CreativeElements::getPreviewUId(false) ?: get_the_ID();

        if (\Tools::getIsset('submitOptionsce_template') ||
            UId::PRODUCT === $uid->id_type && \Configuration::get('CE_PRODUCT') ||
            UId::CONTENT === $uid->id_type && \Configuration::get('CE_PRODUCT') && \Tools::getValue('footerProduct') ||
            UId::THEME === $uid->id_type && Plugin::$instance->documents->get($uid) instanceof ProductDocument ||
            UId::TEMPLATE === $uid->id_type && Plugin::$instance->documents->get($uid) instanceof ProductDocument
        ) {
            $widget_manager = Plugin::$instance->widgets_manager;

            foreach ($this->getProductWidgets() as $widget) {
                include dirname(__FILE__) . "/widgets/$widget.php";

                $class_name = str_replace('-', '', $widget);
                $class_name = __NAMESPACE__ . '\Widget' . $class_name;

                $widget_manager->registerWidgetType(new $class_name());
            }
        }
    }

    public function refreshProduct($content)
    {
        if (UId::$_ID->id_type !== UId::THEME) {
            return $content;
        }

        $context = \Context::getContext();
        $groups = \Tools::getValue('group');
        $id_product = (int) \Tools::getValue('id_product');
        $ipa = $groups ? (int) \Product::getIdProductAttributeByIdAttributes($id_product, $groups, true) : null;
        $product_url = $context->link->getProductLink(
            $id_product,
            null,
            null,
            null,
            $context->language->id,
            null,
            $ipa,
            false,
            false,
            true
        );
        $args = ${'_GET'};
        unset(
            $args['controller'],
            $args['id_product'],
            $args['id_product_attribute'],
            $args['rewrite'],
            $args['isolang'],
            $args['id_lang']
        );
        $getProductMinimalQuantity = new \ReflectionMethod($context->controller, 'getProductMinimalQuantity');
        $getProductMinimalQuantity->setAccessible(true);

        wp_send_json([
            'product_content' => $content,
            'product_url' => !$args ? $product_url : str_replace(
                '#',
                (strrpos('?', $product_url) === false ? '?' : '&') . http_build_query($args) . '#',
                $product_url
            ),
            'product_minimal_quantity' => (int) $getProductMinimalQuantity->invoke($context->controller, [
                'id_product_attribute' => $ipa,
            ]),
            'id_product_attribute' => $ipa,
            'product_title' => $context->smarty->tpl_vars['product']->value['title'],
            'is_quick_view' => \Tools::getValue('quickview'),
        ]);
    }

    public function handleProductQuickView()
    {
        add_filter('template_include', function () {
            return _CE_TEMPLATES_ . 'front/theme/layouts/layout-canvas.tpl';
        }, 12);

        add_action('wp_footer', function () {
            ?>
            <script>
            // Init Lightbox
            $('html').attr({
                id: 'ce-product-quick-view',
            }).addClass('dialog-widget dialog-lightbox-widget dialog-type-lightbox elementor-lightbox')
            $('body').addClass('dialog-widget-content dialog-lightbox-widget-content');
            $('main').addClass('dialog-message dialog-lightbox-message')
            $('<div class="dialog-close-button dialog-lightbox-close-button"><i class="ceicon-close">')
                .appendTo('.dialog-message');

            // Init Form
            var $form = $('<form>').attr({
                action: prestashop.urls.pages.product,
                method: 'post',
                id: 'add-to-cart-or-refresh-' + location.search.match(/preview_id=(\d+)\d{6}/)[1],
                style: 'display: none',
            }).prependTo('main');
            $('<input>').attr({
                type: 'hidden',
                name: 'token',
                value: prestashop.static_token,
            }).appendTo($form);
            $('<input>').attr({
                type: 'hidden',
                id: 'product_page_product_id',
                name: 'id_product',
                value: ceFrontend.config.post.id.match(/(\d+)\d{6}/)[1],
            }).appendTo($form);
            $('<input>').attr({
                type: 'hidden',
                id: 'quantity_wanted',
                name: 'qty',
                value: 1,
            }).appendTo($form);
            $('<input>').attr({
                type: 'submit',
                'class': 'ce-add-to-cart',
                'data-button-action': 'add-to-cart',
            }).appendTo($form);

            // Entrance Animation Preview
            if (top.elementor && top.elementor.settings) {
                var prev = {
                    entranceAnimation: {
                        desktop: null,
                        tablet: null,
                        mobile: null
                    },
                    closeButtonPosition: null
                };
                var previewModalSettings = function () {
                    var device = $('body').attr('data-elementor-device-mode'),
                        control = device === 'desktop' ? 'entrance_animation' : 'entrance_animation_' + device;
                        entranceAnimation = top.elementor.settings.page.model.get(control),
                        closeButtonPosition = top.elementor.settings.page.model.get('close_button_position');

                    if (entranceAnimation && entranceAnimation !== prev.entranceAnimation[device]) {
                        $('.dialog-message').removeClass([
                            prev.entranceAnimation.desktop,
                            prev.entranceAnimation.tablet,
                            prev.entranceAnimation.mobile,
                            'animated'
                        ].join(' '));

                        setTimeout(function () {
                            $('.dialog-message').addClass(entranceAnimation + ' animated');
                        });

                        prev.entranceAnimation[device] = entranceAnimation;
                    }
                    if (closeButtonPosition !== prev.closeButtonPosition) {
                        $('.dialog-close-button').prependTo(
                            'outside' === closeButtonPosition ? 'body' : '.dialog-message'
                        );
                    }
                };
                top.elementor.on('preview:loaded', previewModalSettings);
                top.elementor.settings.page.model.on('change', previewModalSettings);
            }
            </script>
            <?php
        });
    }

    public function __construct()
    {
        add_action('elementor/widgets/widgets_registered', [$this, 'initWidgets']);

        if (\Tools::getValue('refresh') === 'product' &&
            \Context::getContext()->controller instanceof \ProductController
        ) {
            add_filter('the_content', [$this, 'refreshProduct'], 999999);
        }
    }
}
