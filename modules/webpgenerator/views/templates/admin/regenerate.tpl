{*
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
 *}
<div class="alert alert-info">
    <p>
        <b>WebP</b> is a modern image format that provides superior <b>lossless and lossy</b> compression for images on
        the web. Using WebP, webmasters and web developers can create smaller, richer images that make the web faster.
    </p>
    <p>
        WebP lossless images are <a
            href="https://developers.google.com/speed/webp/docs/webp_lossless_alpha_study#results">26% smaller</a> in
        size compared to PNGs. WebP lossy images are <a href="https://developers.google.com/speed/webp/docs/webp_study">25-34%
            smaller</a> than comparable JPEG images at equivalent SSIM quality index.
    </p>
    <p>
        Lossless WebP <b>supports transparency</b> (also known as alpha channel) at a cost of just 22% additional bytes.
        For cases when lossy RGB compression is acceptable, <b>lossy WebP also supports transparency</b>, typically
        providing 3× smaller file sizes compared to PNG.
    </p>
</div>

<div class="panel">
    <h3>{l s='Regenarate WebP images' mod='webpgenerator'}</h3>
    <p>{l s='You can regenerate all your images safely.' mod='webpgenerator'}</p>
    {include file='./_image-section.tpl' imageType='product' imageCount=$productImageCount}
    {include file='./_image-section.tpl' imageType='category' imageCount=$categoryImageCount}
    {include file='./_image-section.tpl' imageType='supplier' imageCount=$supplierImageCount}
    {include file='./_image-section.tpl' imageType='store' imageCount=$storeImageCount}
    {include file='./_image-section.tpl' imageType='manufacturer' imageCount=$manufacturerImageCount}
</div>