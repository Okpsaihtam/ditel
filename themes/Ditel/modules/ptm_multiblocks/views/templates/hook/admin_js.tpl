{*
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
*}

{literal}
<script>
var iso = 'iso_user';
var pathCSS = "{/literal}{$theme_css_dir|escape:'htmlall':'UTF-8'}{literal}";
var ad = "{/literal}{$ad|escape:'htmlall':'UTF-8'}{literal}";

$(function() {
    var $myMultiBlocks = $("#customblocks_displayHome, #customblocks_displayTop, #customblocks_displayTopColumn, #customblocks_displayFooter, #customblocks_displayFooterProduct, #customblocks_displayLeftColumn, #customblocks_displayLeftColumnProduct, #customblocks_displayRightColumn, #customblocks_displayRightColumnProduct, #customblocks_displayAfterBodyOpeningTag, #customblocks_displayBeforeBodyClosingTag, #customblocks_displayMaintenance, #customblocks_displayMyAccountBlock, #customblocks_displayShoppingCart, #customblocks_displayShoppingCartFooter, #customblocks_displayPDFinvoice");
    $myMultiBlocks.sortable({
        opacity: 0.6,
        cursor: "move",
        update: function() {
            var order = $(this).sortable("serialize") + "&action=updateMultiblocksPosition";
            $.post("{/literal}{$virtual_uri}{literal}modules/{/literal}{$name|escape:'htmlall':'UTF-8'}{literal}/ajax_{/literal}{$name|escape:'htmlall':'UTF-8'}{literal}.php?secure_key={/literal}{$secure_key|escape:'htmlall':'UTF-8'}{literal}", order);
            }
        });
    $myMultiBlocks.hover(function() {
        $(this).css("cursor","move");
        },
        function() {
        $(this).css("cursor","auto");
    });

    var $mySubMultiBlocks = $("#subCustomblocks_displayHome, #subCustomblocks_displayTop, #subCustomblocks_displayTopColumn, #subCustomblocks_displayFooter, #subCustomblocks_displayFooterProduct, #subCustomblocks_displayLeftColumn, #subCustomblocks_displayLeftColumnProduct, #subCustomblocks_displayRightColumn, #subCustomblocks_displayRightColumnProduct, #subCustomblocks_displayAfterBodyOpeningTag, #customblocks_displayBeforeBodyClosingTag, #subCustomblocks_displayMaintenance, #subCustomblocks_displayMyAccountBlock, #subCustomblocks_displayShoppingCart, #subCustomblocks_displayShoppingCartFooter, #subCustomblocks_displayPDFinvoice");
    $mySubMultiBlocks.sortable({
        opacity: 0.6,
        cursor: "move",
        update: function() {
            var order = $(this).sortable("serialize") + "&action=updateMultiblocksPosition";
            $.post("{/literal}{$virtual_uri}{literal}modules/{/literal}{$name|escape:'htmlall':'UTF-8'}{literal}/ajax_{/literal}{$name|escape:'htmlall':'UTF-8'}{literal}.php?secure_key={/literal}{$secure_key|escape:'htmlall':'UTF-8'}{literal}", order);
            }
        });
    $mySubMultiBlocks.hover(function() {
        $(this).css("cursor","move");
        },
        function() {
        $(this).css("cursor","auto");
    });
});
</script>
{/literal}