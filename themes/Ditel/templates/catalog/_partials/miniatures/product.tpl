{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='product_miniature_item'}
  <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
            {block name='product_name'}
          {if $page.page_name == 'index'}
            <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>
          {else}
            <h2 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h2>
          {/if}
        {/block}
      <div class="row">
        <div class="col-lg-5">
          {block name='product_thumbnail'}
            {if $product.cover}
              <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img
                  src="{$product.cover.bySize.home_default.url}"
                  alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                  data-full-size-image-url="{$product.cover.large.url}"
                />
              </a>
            {else}
              <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img src="{$urls.no_picture_image.bySize.home_default.url}" />
              </a>
            {/if}
          {/block}
        </div>
  
        <div class="col-lg-7">
          <div class="product-description">
    
            {block name='product_price_and_shipping'}
              {if $product.show_price}
                <div class="product-price-and-shipping">
                  {if $product.has_discount}
                    {hook h='displayProductPriceBlock' product=$product type="old_price"}
    
                    <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                    <span class="regular-price">{$product.regular_price}</span>
                    {if $product.discount_type === 'percentage'}
                      <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                    {elseif $product.discount_type === 'amount'}
                      <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                    {/if}
                  {/if}
    
                  {hook h='displayProductPriceBlock' product=$product type="before_price"}
    
                  <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
                  <span itemprop="price" class="price">{$product.price}</span>
    
                  {hook h='displayProductPriceBlock' product=$product type='unit_price'}
    
                  {hook h='displayProductPriceBlock' product=$product type='weight'}

                    <div class="tax-shipping-delivery-label">
                        {if !$configuration.taxes_enabled}
                            {l s='no tax' d='Shop.Theme.Catalog'}
                        {elseif $configuration.display_taxes_label}
                            {$product.labels.tax_long}
                        {/if}
                        {hook h='displayProductPriceBlock' product=$product type="price"}
                        {hook h='displayProductPriceBlock' product=$product type="after_price"}
                        {if $product.additional_delivery_times == 1}
                            {if $product.delivery_information}
                                <span class="delivery-information">{$product.delivery_information}</span>
                            {/if}
                        {elseif $product.additional_delivery_times == 2}
                            {if $product.quantity > 0}
                                <span class="delivery-information">{$product.delivery_in_stock}</span>
                            {elseif $product.quantity <= 0 && $product.add_to_cart_url}
                                <span class="delivery-information">{$product.delivery_out_stock}</span>
                            {/if}
                        {/if}
                    </div>
                </div>
              {/if}
            {/block}


        {*{$product.description_short nofilter}*}
              {$product.description_short|truncate:110:'...'|escape:'htmlall':'UTF-8' nofilter}
        </div>
      </div>

        {block name='product_reviews'}
          {hook h='displayProductListReviews' product=$product}
        {/block}
      </div>

      <!-- @todo: use include file='catalog/_partials/product-flags.tpl'} -->
      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="product-flag {$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
      {/block}

      <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
        <div class="row">
        <div class="col-xs-12">
            {block name='product_variants'}
              {if $product.main_variants}
                {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
              {/if}
            {/block}
        </div>
          <div class="col-xs-6">
            {block name='quick_view'}
              <a class="quick-views" href="{$product.url}" {*data-link-action="quickview"*}>
                {* <i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'} *}
                <img src="{$urls.img_url}/picto-loupe.png" class="img_fluid">
              </a>
            {/block}
          </div>
  
          <div class="col-xs-6">
              <form action="{$urls.pages.cart}" method="post">
                <input type="hidden" name="token" value="{$static_token}">
                <input type="hidden" value="{$product.id_product}" name="id_product">
                <input type="number" class="qty input-group form-control" name="qty" value="1">
                <button data-button-action="add-to-cart" {if !$product.add_to_cart_url}disabled{/if} class="panier-produit"><img src="{$urls.img_url}/picto-panier2.png" class="img_fluid"></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </article>
{/block}
