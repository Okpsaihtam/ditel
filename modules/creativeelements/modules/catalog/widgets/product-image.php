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

class WidgetProductImage extends WidgetImage
{
    public function getName()
    {
        return 'product-image';
    }

    public function getTitle()
    {
        return __('Product Image');
    }

    public function getIcon()
    {
        return 'eicon-image';
    }

    public function getCategories()
    {
        return ['product-elements'];
    }

    public function getKeywords()
    {
        return ['shop', 'store', 'image', 'product', 'cover', 'lightbox'];
    }

    protected function _registerControls()
    {
        parent::_registerControls();

        $this->startInjection([
            'type' => 'section',
            'at' => 'start',
            'of' => 'section_image',
        ]);

        $index_options = range(1, 10);
        $index_options = array_combine($index_options, $index_options);

        $this->addControl(
            'image_index',
            [
                'label' => __('Image'),
                'type' => ControlsManager::SELECT,
                'options' => [
                    '' => __('Cover'),
                ] + $index_options,
                'default' => 1,
            ]
        );

        $image_size_options = GroupControlImageSize::getProductImageSizes();

        $this->addControl(
            'image_size',
            [
                'label' => __('Image Size'),
                'type' => ControlsManager::SELECT,
                'options' => &$image_size_options,
                'default' => key($image_size_options),
            ]
        );

        $this->endInjection();

        $this->updateControl(
            'image',
            [
                'label' => __('Fallback'),
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
                'label' => __('Fallback'),
                'condition' => [
                    'show_caption!' => '',
                ],
            ]
        );

        $this->updateControl(
            'link_to',
            [
                'options' => [
                    'none' => __('None'),
                    'file' => __('Lightbox'),
                    'custom' => __('Custom URL'),
                ],
                'default' => 'file',
            ]
        );

        $this->removeControl('open_lightbox');
    }

    public function onImport($widget)
    {
        $sizes = array_map(function ($size) {
            return $size['name'];
        }, \ImageType::getImagesTypes('products'));

        if (isset($widget['settings']['image_size']) && !in_array($widget['settings']['image_size'], $sizes)) {
            $home = \ImageType::getFormattedName('home');

            $widget['settings']['image_size'] = in_array($home, $sizes) ? $home : reset($sizes);
        }

        return $widget;
    }

    protected function shouldPrintEmpty()
    {
        return true;
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

        $product = &\Context::getContext()->smarty->tpl_vars['product']->value;
        $settings = $this->getSettingsForDisplay();
        $index = (int) (!$settings['image_index'] && !empty($product['cover']['position'])
            ? $product['cover']['position']
            : $settings['image_index']
        ) - 1;

        if (isset($product['images'][$index])) {
            $image = $product['images'][$index];
            $caption = $image['legend'];
            $image_by_size = &$image['bySize'][$settings['image_size']];

            $this->addRenderAttribute('image', [
                'width' => $image_by_size['width'],
                'height' => $image_by_size['height'],
                'src' => $image_by_size['url'],
                'alt' => $caption,
                'srcset' => implode(', ', array_map(
                    function ($image) {
                        return "{$image['url']} {$image['width']}w";
                    },
                    $image['bySize']
                )),
                'sizes' => "(max-width: {$image_by_size['width']}px) 100vw, {$image_by_size['width']}px",
            ]);

            if (!empty($settings['hover_animation'])) {
                $this->addRenderAttribute('image', 'class', 'elementor-animation-' . $settings['hover_animation']);
            }
        } elseif (!empty($settings['image']['url'])) {
            $caption = $settings['caption'];
        } else {
            return;
        }

        $this->addRenderAttribute('wrapper', 'class', 'ce-product-image elementor-image');

        if (!empty($settings['shape'])) {
            $this->addRenderAttribute('wrapper', 'class', 'elementor-image-shape-' . $settings['shape']);
        }

        $has_caption = $settings['show_caption'] && $caption;
        $has_link = 'none' !== $settings['link_to'];

        if ($has_link) {
            $this->addRenderAttribute('link', 'custom' === $settings['link_to'] ? [
                'href' => $settings['link']['url'],
                'target' => $settings['link']['is_external'] ? '_blank' : '_self',
                'rel' => $settings['link']['nofollow'] ? 'nofollow' : '',
            ] : [
                'href' => isset($image) ? Helper::getProductImageLink($image) : $settings['image']['url'],
                'data-elementor-lightbox-slideshow' => "p-{$product['id_product']}-{$product['id_product_attribute']}",
            ]);
        }
        ?>
        <div <?= $this->getRenderAttributeString('wrapper') ?>>
        <?php if ($has_caption) : ?>
            <figure class="ce-caption">
        <?php endif ?>
        <?php if ($has_link) : ?>
            <a <?= $this->getRenderAttributeString('link') ?>>
        <?php endif ?>
        <?php if (isset($image)) : ?>
            <img <?= $this->getRenderAttributeString('image') ?> itemprop="image">
        <?php else : ?>
            <?= GroupControlImageSize::getAttachmentImageHtml($settings) ?>
        <?php endif ?>
        <?php if ($has_link) : ?>
            </a>
        <?php endif ?>
        <?php if ($has_caption) : ?>
            <figcaption class="widget-image-caption ce-caption-text"><?= $caption ?></figcaption>
            </figure>
        <?php endif ?>
        </div>
        <?php
    }

    public function renderPlainContent()
    {
    }

    protected function _contentTemplate()
    {
    }
}
