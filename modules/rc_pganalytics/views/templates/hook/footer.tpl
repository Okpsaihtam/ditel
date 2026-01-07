{*
* NOTICE OF LICENSE
*
* This source file is subject to a trade license awared by
* Garamo Online L.T.D.
*
* Any use, reproduction, modification or distribution 
* of this source file without the written consent of 
* Garamo Online L.T.D It Is prohibited.
*
*  @author    ReactionCode <info@reactioncode.com>
*  @copyright 2015-2020 Garamo Online L.T.D
*  @license   Commercial license
*}
<script type="text/javascript">
    // Instantiate the tracking class
    var rcAnalyticsEvents = new RcAnalyticsEvents();

    // page controller
    var controllerName = '{$controller_name}';
    var compliantModules = {$compliant_modules|json_encode nofilter};
    var compliantModuleName = '{$compliant_module_name}';
    var skipCartStep = '{$skip_cart_step}';
    var isOrder = '{$is_order}';
    var isCheckout = '{$is_checkout}';
    var isClientId = {$is_client_id};
    var gaOrder;
    var gaProducts;
    ////////////////////////////

    // set tracking features
    rcAnalyticsEvents.trackingFeatures = {$gtag_tracking_features|json_encode nofilter};

    // set checkout values
    rcAnalyticsEvents.controllerName = controllerName;
    rcAnalyticsEvents.isCheckout = isCheckout;
    rcAnalyticsEvents.compliantModuleName = compliantModuleName;
    rcAnalyticsEvents.skipCartStep = skipCartStep;

    // list names
    rcAnalyticsEvents.lists = {$lists|json_encode nofilter};

    // Google remarketing - page type
    rcAnalyticsEvents.ecommPageType = '{$ecomm_pagetype}';

    {if isset($products_list_cache)}
        // get products list to cache
        rcAnalyticsEvents.productsListCache = {$products_list_cache|json_encode nofilter};
    {/if}

    // Listing products
    {if isset($ga_products)}
        // checkout pages
        gaProducts = {$ga_products|json_encode nofilter};
    {/if}

    {if isset($ga_order)}
        // Order complete
        gaOrder = {$ga_order|json_encode nofilter};
    {/if}
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
</script>