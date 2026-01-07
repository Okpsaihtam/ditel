<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:06:27
  from 'module:rc_pganalyticsviewstemplateshookfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc5639c98d2_31016289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0057fd001ccea5d472d4b8e1f23e2351389778bb' => 
    array (
      0 => 'module:rc_pganalyticsviewstemplateshookfooter.tpl',
      1 => 1589148000,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc5639c98d2_31016289 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    // Instantiate the tracking class
    var rcAnalyticsEvents = new RcAnalyticsEvents();

    // page controller
    var controllerName = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['controller_name']->value, ENT_QUOTES, 'UTF-8');?>
';
    var compliantModules = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['compliant_modules']->value ));?>
;
    var compliantModuleName = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['compliant_module_name']->value, ENT_QUOTES, 'UTF-8');?>
';
    var skipCartStep = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['skip_cart_step']->value, ENT_QUOTES, 'UTF-8');?>
';
    var isOrder = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_order']->value, ENT_QUOTES, 'UTF-8');?>
';
    var isCheckout = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_checkout']->value, ENT_QUOTES, 'UTF-8');?>
';
    var isClientId = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_client_id']->value, ENT_QUOTES, 'UTF-8');?>
;
    var gaOrder;
    var gaProducts;
    ////////////////////////////

    // set tracking features
    rcAnalyticsEvents.trackingFeatures = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['gtag_tracking_features']->value ));?>
;

    // set checkout values
    rcAnalyticsEvents.controllerName = controllerName;
    rcAnalyticsEvents.isCheckout = isCheckout;
    rcAnalyticsEvents.compliantModuleName = compliantModuleName;
    rcAnalyticsEvents.skipCartStep = skipCartStep;

    // list names
    rcAnalyticsEvents.lists = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['lists']->value ));?>
;

    // Google remarketing - page type
    rcAnalyticsEvents.ecommPageType = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ecomm_pagetype']->value, ENT_QUOTES, 'UTF-8');?>
';

    <?php if ((isset($_smarty_tpl->tpl_vars['products_list_cache']->value))) {?>
        // get products list to cache
        rcAnalyticsEvents.productsListCache = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['products_list_cache']->value ));?>
;
    <?php }?>

    // Listing products
    <?php if ((isset($_smarty_tpl->tpl_vars['ga_products']->value))) {?>
        // checkout pages
        gaProducts = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['ga_products']->value ));?>
;
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['ga_order']->value))) {?>
        // Order complete
        gaOrder = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['ga_order']->value ));?>
;
    <?php }?>
    /////////////////////////////////

    // init gtag
    rcAnalyticsEvents.sendGtagConfig('analyticsId');
    rcAnalyticsEvents.sendGtagConfig('adwordsId');
    ///////////////////////////////////////////////

    // Initialize all user events when DOM ready
    document.addEventListener('DOMContentLoaded', initTrackingEvents, false);
    window.addEventListener('pageshow', fireEventsOnPageShow, false);
    ///////////////////////////////////////////////
    function initTrackingEvents() {
        // Events binded on all pages
        // Events binded to document.body to avoid firefox fire events on right/central click
        document.body.addEventListener('click', rcAnalyticsEvents.eventClickPromotionItem, false);

        // bind prestashop events with tracking events
        prestashop.on(
            'updateCart',
            function (event) {
                rcAnalyticsEvents.eventAddCartProduct(event);
            }
        );
        prestashop.on(
            'clickQuickView',
            function (event) {
                rcAnalyticsEvents.eventProductView(event)
            }
        );
        prestashop.on(
            'updatedProduct',
            function (event) {
                rcAnalyticsEvents.eventProductView(event)
            }
        );

        if (!isCheckout && !isOrder) {
            // init first scroll action for those products all ready visible on screen
            rcAnalyticsEvents.eventScrollList();
            // bind event to scroll
            window.addEventListener('scroll', rcAnalyticsEvents.eventScrollList, false);

            // init Event Listeners
            document.body.addEventListener('click', rcAnalyticsEvents.eventClickProductList, false);

            if (rcAnalyticsEvents.trackingFeatures.goals.socialAction) {
                document.body.addEventListener('click', rcAnalyticsEvents.eventSocialShareProductView, false);
            }
            ////////////////////////
            // SEARCH PAGE
            if (controllerName === 'search') {
                rcAnalyticsEvents.onSearchResults();
            }
            ////////////////////////
            // PRODUCT PAGE
            if (controllerName === 'product') {
                // send product detail view
                rcAnalyticsEvents.eventProductView();
            }
        }

        ////////////////////////
        // CHECKOUT PROCESS
        if (isCheckout) {
            // SUMMARY CART
            if (controllerName === 'cart') {
                // events on summary Cart
                document.body.addEventListener('click', rcAnalyticsEvents.eventCartQuantityDelete, false);
                document.body.addEventListener('click', rcAnalyticsEvents.eventCartQuantityUp, false);
                document.body.addEventListener('click', rcAnalyticsEvents.eventCartQuantityDown, false);
            }
            ////////////////////////
            // CHECKOUT
            if (!compliantModuleName && controllerName === 'order') {
                // Events on Checkout Process
                document.body.addEventListener('click', rcAnalyticsEvents.eventPrestashopCheckout, false);
            } else if (
                compliantModuleName === 'supercheckout'
                && controllerName === compliantModules[compliantModuleName]
            ) {
                // Compatible with super-checkout by Knowband
                document.body.addEventListener('click', rcAnalyticsEvents.eventOpcSuperCheckout, false);
                document.body.addEventListener('click', rcAnalyticsEvents.eventCartOpcSuperCheckout, false);
            } else if (
                compliantModuleName === 'onepagecheckoutps'
                && controllerName === compliantModules[compliantModuleName]
            ) {
                // compatible with OPC by PrestaTeamShop
                document.body.addEventListener('click', rcAnalyticsEvents.eventOpcPrestaTeam, false);
                document.body.addEventListener('click', rcAnalyticsEvents.eventCartOpcPrestaTeam, false);
            } else if (
                compliantModuleName === 'thecheckout'
                && controllerName === compliantModules[compliantModuleName]
            ) {
                // Compatible with thecheckout by Zelarg
                document.body.addEventListener('click', rcAnalyticsEvents.eventOpcTheCheckout, false);
                document.body.addEventListener('click', rcAnalyticsEvents.eventCartOpcTheCheckout, false);
            }
        }
    }

    function fireEventsOnPageShow(event){
        // fixes safari back cache button
        if (event.persisted) {
            window.location.reload()
        }

        // Sign up feature
        if (rcAnalyticsEvents.trackingFeatures.goals.signUp && rcAnalyticsEvents.trackingFeatures.isNewSignUp) {
            rcAnalyticsEvents.onSignUp();
        }

        if (isClientId) {
            rcAnalyticsEvents.setClientId();
        }

        // Checkout and order complete
        if (isCheckout && gaProducts) {
            rcAnalyticsEvents.onCheckoutProducts(gaProducts);
        } else if (isOrder && gaOrder && gaProducts) {
            rcAnalyticsEvents.onAddOrder(gaOrder, gaProducts, rcAnalyticsEvents.trackingFeatures.idShop);
        }
    }
<?php echo '</script'; ?>
><?php }
}
