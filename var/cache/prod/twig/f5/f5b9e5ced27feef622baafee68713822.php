<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c058ea98d98a4adab3b5869b7938301a */
class __TwigTemplate_1224eee72cc39bba87e4a60cbfa393b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Marketplace • Ditel </title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsMboModule';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.2.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '992f3a8666b2c93388534fe2f7531e5d';
    var currentIndex = 'index.php?controller=AdminPsMboModule';
    var employee_token = 'b8d36634d1be970a8a3d3cce05e6d99f';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/admin564yalcuf/index.php/improve/modules/manage?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU';
    var admin_notification_get_link = '/admin564yalcuf/index.php/common/notifications?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU';
    var admin_notification_push_link = adminNotificationPushLink = '/admin564yalcuf/index.php/common/notifications/ack?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for ";
        // line 43
        echo "a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin564yalcuf/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin564yalcuf/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin564yalcuf/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin564yalcuf/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/hide-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_blog/views/css/admin_all.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/autoupgrade/views/css/autoupgrade-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin564yalcuf\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin564yalcuf\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\";
var contextPsAccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_mbo\",\"psIs17\":true,\"psAccountsVersion\":\"7.2.1\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"https:\\/\\/www.ditelweb.com\\/admin564yalcuf\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"ditel@ditel.fr\",\"employeeId\":5,\"isSuperAdmin\":true},\"curr";
        // line 68
        echo "entShop\":{\"id\":\"1\",\"name\":\"Ditel\",\"domain\":\"www.ditelweb.com\",\"domainSsl\":\"www.ditelweb.com\",\"physicalUri\":\"\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/www.ditelweb.com\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAMYh8TCuwIeDw3pWSJEUed\\/ALo1HKDLoS+q589nxrGRHXRUVu+BLOCjz\\r\\nc5eGIME4okcK+oYGf0FaV9W06IewQ8rlS0O02FpPFdGSHyiN4h6w6lbch47RQJ6W\\r\\n7B1wavTsZZq0IznAOYOdxvoxXeWhOlZExMT2xzve8g9OGl1HctT9AgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"https:\\/\\/www.ditelweb.com\\/admin564yalcuf\\/index.php?controller=AdminDashboard\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_mbo\",\"psVersion\":\"8.2.1\"},\"isShopContext\":true,\"superAdminEmail\":null,\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IkRpdGVsIiwiZG9tYWluIjoid3d3LmRpdGVsd2ViLmNvbSIsImRvbWFpblNzbCI6Ind3dy5kaXRlbHdlYi5jb20iLCJwaHlzaWNhbFVyaSI6IlwvIiwidmlydHVhbFVyaSI6IiIsImZyb250VXJsIjoiaHR0cHM6XC9cL3d3dy5kaXRlbHdlYi5jb21cLyIsInV1aWQiOm51bGwsInB1YmxpY0tleSI6Ii0tLS0tQkVHSU4gUlNBIFBVQkxJQyBLRVktLS0tLVxyXG5NSUdKQW9HQkFNWWg4VEN1d0llRHczcFdTSkVVZWRcL0FMbzFIS0RMb1MrcTU4OW54ckdSSFhSVVZ1K0JMT0NqelxyXG5jNWVHSU1FNG9rY0srb1lHZjBGYVY5VzA2SWV3UThybFMwTzAyRnBQRmRHU0h5aU40aDZ3NmxiY2g0N1JRSjZXXHJcbjdCMXdhdlRzWlpxMEl6bkFPWU9keHZveFhlV2hPbFpFeE1UMnh6dmU4ZzlPR2wxSGN0VDlBZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0tIiwiZW1wbG95ZWVJZCI6IjUiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHBzOlwvXC93d3cuZGl0ZWx3ZWIuY29tXC9hZG1pbjU2NHlhbGN1ZlwvaW5kZXgucGhwP2NvbnRyb2xsZXI9QWRtaW5EYXNoYm9hcmQiLCJpc0xpbmtlZFY0IjpmYWxzZSwidW5saW5rZWRBdXRvIjpmYWxzZSwibXVsdGlzaG9wIjpmYWxzZSwibW9kdWxlTmFtZSI6InBzX21ibyIsInBzVmVyc2lvbiI6IjguMi4xIn1d\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=fr\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1";
        echo "\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"Ditel\",\"domain\":\"www.ditelweb.com\",\"domainSsl\":\"www.ditelweb.com\",\"physicalUri\":\"\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/www.ditelweb.com\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAMYh8TCuwIeDw3pWSJEUed\\/ALo1HKDLoS+q589nxrGRHXRUVu+BLOCjz\\r\\nc5eGIME4okcK+oYGf0FaV9W06IewQ8rlS0O02FpPFdGSHyiN4h6w6lbch47RQJ6W\\r\\n7B1wavTsZZq0IznAOYOdxvoxXeWhOlZExMT2xzve8g9OGl1HctT9AgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"https:\\/\\/www.ditelweb.com\\/admin564yalcuf\\/index.php?controller=AdminDashboard\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_mbo\",\"psVersion\":\"8.2.1\",\"moduleVersion\":\"7.2.1\"}],\"multishop\":false,\"moduleName\":\"ps_mbo\",\"psVersion\":\"8.2.1\"}],\"adminAjaxLink\":\"https:\\/\\/www.ditelweb.com\\/admin564yalcuf\\/index.php?controller=AdminAjaxPsAccounts&ajax=1&token=47642ba3f6dfafae3b3e086608f103d4\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"https:\\/\\/www.ditelweb.com\\/admin564yalcuf\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\",\"isEnabled\":true,\"enableLink\":\"https:\\/\\/www.ditelweb.com\\/admin564yalcuf\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\"}}};
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifica";
        // line 71
        echo "tions = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin564yalcuf/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin564yalcuf/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin564yalcuf/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin564yalcuf/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/upload_module_with_cdc.js?v=4.13.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.13.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize";
        // line 95
        echo "({
      backgroundColor: '#DF0067',
      textColor: '#ffffff',
      notificationGetUrl: '/admin564yalcuf/index.php/common/notifications?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
  var AutoUpgradeVariables = {\"token\":\"77d778324ad908b91865791b41e197a8\",\"admin_url\":\"\\/admin564yalcuf\",\"admin_dir\":\"admin564yalcuf\",\"module_version\":\"7.2.0\",\"php_version\":\"8.4.15\",\"anonymous_id\":\"f637eccaaf6384dced060afa62397963f1484e38c4795fca7342804b148e939e\",\"ps_version\":\"8.2.1\",\"bo_language\":\"fr-FR\",\"bo_timezone\":\"Europe\\/Paris\"}
</script>
<script type=\"module\" src=\"/modules/autoupgrade/views/js/autoupgrade-notification.js?version=8.2.1\" defer></script>


";
        // line 112
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpsmbomodule\"
  data-base-url=\"/admin564yalcuf/index.php\"  data-token=\"xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminDashboard&amp;token=61d3b149a686a1d986734741b1fc648f\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;&amp;conf=4&amp;configure=ptm_multiblocks&amp;tab_module=front_office_features&amp;module_name=ptm_multiblocks&amp;token=60b2e415b4716c4a5dfcd3e5d372048d\"
                 data-item=\"Blocs\"
      >Blocs</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/orders?token=2157c3e2b05f46d2c548c6d4a57da920\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=301129ef19bc4a23809e03c933e414c6\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=ptm_multiblocks&amp;token=60b2e415b4";
        // line 146
        echo "716c4a5dfcd3e5d372048d\"
                 data-item=\"Modification accueil\"
      >Modification accueil</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/improve/modules/manage?token=2157c3e2b05f46d2c548c6d4a57da920\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=19d5dc521bad40366883b69c9cc5716a\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/catalog/products/new?token=2157c3e2b05f46d2c548c6d4a57da920\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCategories&amp;addcategory&amp;token=2864c421450eeb3d875aafd04f52f71b\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=revsliderprestashop&amp;tab_module=front_office_features&amp;module_name=revsliderprestashop&amp;token=60b2e415b4716c4a5dfcd3e5d372048d\"
                 data-item=\"Revolution Slider\"
      >Revolution Slider</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"195\"
        data-icon=\"icon-AdminPsMboModuleParent\"
        data-method=\"add\"
        data-url=\"index.php/modules/mbo/modules/catalog/?-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\"
        data-post-link=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesse";
        // line 177
        echo "s&token=2cc1da82f3770db9a1f44b7686daa92d\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Marketplace - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=2cc1da82f3770db9a1f44b7686daa92d\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin564yalcuf/index.php?controller=AdminSearch&amp;token=65869cd6e767f6b5bf3119dd9d6c4e3c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> ";
        // line 209
        echo "Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;&amp;conf=4&amp;configure=ptm_multiblocks&amp;tab_module=front_office_features&amp;module_name=ptm_multiblocks&amp;token=60b2e41";
        // line 235
        echo "5b4716c4a5dfcd3e5d372048d\"
             data-item=\"Blocs\"
    >Blocs</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/orders?token=2157c3e2b05f46d2c548c6d4a57da920\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=301129ef19bc4a23809e03c933e414c6\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=ptm_multiblocks&amp;token=60b2e415b4716c4a5dfcd3e5d372048d\"
             data-item=\"Modification accueil\"
    >Modification accueil</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/improve/modules/manage?token=2157c3e2b05f46d2c548c6d4a57da920\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=19d5dc521bad40366883b69c9cc5716a\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/catalog/products/new?token=2157c3e2b05f46d2c548c6d4a57da920\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCategories&amp;addcategory&amp;token=2864c421450eeb3d875aafd04f52f71b\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?";
        // line 267
        echo "controller=AdminModules&amp;configure=revsliderprestashop&amp;tab_module=front_office_features&amp;module_name=revsliderprestashop&amp;token=60b2e415b4716c4a5dfcd3e5d372048d\"
             data-item=\"Revolution Slider\"
    >Revolution Slider</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"3\"
      data-icon=\"icon-AdminPsMboModuleParent\"
      data-method=\"add\"
      data-url=\"index.php/modules/mbo/modules/catalog/?-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\"
      data-post-link=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=2cc1da82f3770db9a1f44b7686daa92d\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Marketplace - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=2cc1da82f3770db9a1f44b7686daa92d\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://www.ditelweb.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"cou";
        // line 310
        echo "nt hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=4a33007572e9708c261078e1dcdb68ba\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pa";
        // line 362
        echo "ne  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-c";
        // line 413
        echo "ircle\" src=\"https://www.ditelweb.com/img/pr/default.jpg\" alt=\"Ditel\" /></span>
        <span class=\"employee_profile\">Welcome back Ditel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin564yalcuf/index.php/configure/advanced/employees/5/edit?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item Autoupgrade\" href=\"https://build.prestashop-project.org/tag/releases/\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">history</i> Discover the latest releases
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-fr\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-fr\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=g7S36jIHnVsDD011mu1kLBG6PzhR__4j_dnMC91Q-WE&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-fr\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-fr\"  target=\"_blank\" r";
        // line 437
        echo "el=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                          <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=www.ditelweb.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminLogin&amp;logout=1&amp;token=dd853749787861a3a6ec3f7056f0cf89\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin564yalcuf/index.php/configure/advanced/employees/toggle-navigation?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminDashboard&amp;token=61d3b149a686a1d986734741b1fc648f\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminDashboard&amp;token=61d3b149a686a1d986734741b1fc648f\" class=\"link\" >
                <i class=\"material-icons\">trendin";
        // line 475
        echo "g_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin564yalcuf/index.php/sell/orders/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
     ";
        // line 515
        echo "                           <a href=\"/admin564yalcuf/index.php/sell/orders/invoices/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/credit-slips/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/delivery-slips/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarts&amp;token=4a33007572e9708c261078e1dcdb68ba\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
            ";
        // line 546
        echo "      
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin564yalcuf/index.php/sell/catalog/products?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/products?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/categories?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
       ";
        // line 578
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/monitoring/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminAttributesGroups&amp;token=d504d0c69fca1026f3528c5972cc07e6\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/brands/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin564yalcuf/index.php/sell/attachments/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Files
                                </a>
                   ";
        // line 606
        echo "           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;token=19d5dc521bad40366883b69c9cc5716a\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin564yalcuf/index.php/sell/stocks/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin564yalcuf/index.php/sell/customers/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                           ";
        // line 638
        echo " </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin564yalcuf/index.php/sell/customers/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin564yalcuf/index.php/sell/addresses/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCustomerThreads&amp;token=657fdc1d124c290f74f0a71a4c25abfa\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tab";
        // line 669
        echo "s-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCustomerThreads&amp;token=657fdc1d124c290f74f0a71a4c25abfa\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin564yalcuf/index.php/sell/customer-service/order-messages/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminReturn&amp;token=80d9dae39a752c8c8320c6955fc42ae5\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul";
        // line 698
        echo ">
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;token=301129ef19bc4a23809e03c933e414c6\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                           ";
        // line 736
        echo "         keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"197\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin564yalcuf/index.php/improve/modules/manage?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminWebpgeneratorConfig\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminWebpgeneratorConfig&amp;token=3863a9651ddd4dc15cfc82e3f078788c\" class=\"link\"> WebP Config
                                </a>
                              </li>
";
        // line 763
        echo "
                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"183\" id=\"subtab-AdminParentCEContent\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEContent&amp;token=666551cb3127bb73e90e92cb4c4c17c6\" class=\"link\">
                      <i class=\"material-icons mi-ce\">ce</i>
                      <span>
                      Creative Elements
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-183\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminCEContent\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEContent&amp;token=666551cb3127bb73e90e92cb4c4c17c6\" class=\"link\"> Contenu n’importe où
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminCEThemes\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller";
        // line 793
        echo "=AdminCEThemes&amp;token=4097a11fb19a43c74bd6e9b3372b2724\" class=\"link\"> Constructeur de thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminCETemplates\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCETemplates&amp;token=4ab047a0a4ca69129f8a645381de5440\" class=\"link\"> Modèles enregistrés
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminCEFonts\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEFonts&amp;token=563514408f322cb099ed9fd787f0f67e\" class=\"link\"> Polices personnalisées
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminCESettings\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCESettings&amp;token=e7761e2272e31fd53cfe8ac485653257\" class=\"link\"> Réglages
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
       ";
        // line 823
        echo "                                       
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin564yalcuf/index.php/improve/design/themes/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/themes/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin564yalcuf/index.php/modules/mbo/themes/catalog/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                     ";
        // line 854
        echo "                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/mail_theme/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/cms-pages/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/modules/positions/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminImages&amp;token=79b3e24c728a123a21fd18ae0215bd08\" class=\"";
        // line 882
        echo "link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin564yalcuf/index.php/modules/link-widget/list?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarriers&amp;token=a893ec7627bce2ce3f95981948d11b97\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                          ";
        // line 915
        echo "      <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarriers&amp;token=a893ec7627bce2ce3f95981948d11b97\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin564yalcuf/index.php/improve/shipping/preferences/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin564yalcuf/index.php/improve/payment/payment_methods?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
             ";
        // line 947
        echo "                 <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin564yalcuf/index.php/improve/payment/payment_methods?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin564yalcuf/index.php/improve/payment/preferences?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin564yalcuf/index.php/improve/international/localization/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                             ";
        // line 977
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/localization/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/zones/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/taxes/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/translations/settings?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Translat";
        // line 1005
        echo "ions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminEmarketing&amp;token=d216fb3a27689d9c30bdd88c74b8c20b\" class=\"link\">
                      <i class=\"material-icons mi-track_changes\">track_changes</i>
                      <span>
                      Advertising
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"190\" id=\"subtab-AdminBlmVuln\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminBlmVuln&amp;token=1de5e1caa21b9f65cb024b8c33395d34\" class=\"link\">
                      <i class=\"material-icons mi-whatshot\">whatshot</i>
                      <span>
                      BLM vulnerability
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                   ";
        // line 1040
        echo "                     </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/preferences/preferences?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/preferences/preferences?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-l";
        // line 1077
        echo "eveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/order-preferences/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/product-preferences/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/customer-preferences/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/contacts/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Contact
                                </a>
                              </li>

                                                             ";
        // line 1106
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminSearchConf&amp;token=a9cca1b97298279de68dcae1b1db10bb\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin564yalcuf/index.php/configure/advanced/system-information/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
  ";
        // line 1137
        echo "                                          </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/system-information/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/performance/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/administration/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmai";
        // line 1166
        echo "ls\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/emails/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/import/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/employees/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/sql-requests/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
   ";
        // line 1198
        echo "                           <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/logs/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/webservice-keys/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminWebpgeneratorRegenerate\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminWebpgeneratorRegenerate&amp;token=36169318b63469e31d887adfef2be793\" class=\"link\"> Regenerate WebP
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/feature-flags/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> New &amp;";
        // line 1223
        echo " Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/security/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"161\" id=\"subtab-AdminFaqs\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsCategory&amp;token=c7fa7ebbb9b951204471d5e8e1affc70\" class=\"link\">
                      <i class=\"material-icons mi-live_help\">live_help</i>
                      <span>
                      Faqs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-161\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminFaqsCategory\">
                               ";
        // line 1256
        echo " <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsCategory&amp;token=c7fa7ebbb9b951204471d5e8e1affc70\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminFaqsPost\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsPost&amp;token=844fb8d03c913d237be748806cd5f4a9\" class=\"link\"> Questions/Answers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminFaqsSettings\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsSettings&amp;token=7f72d24103f5a9f3d5544984401bce52\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"168\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminSelfUpgrade&amp;token=6da0449430e32e4db2b164663ae32f44\" class=\"link\">
                      <i class=\"material-icons mi-arrow_upward\">arrow_upward</i>
                      <span>
                      Update assistant
      ";
        // line 1287
        echo "                </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-AdminRevolutionslider\">
                <span class=\"title\">Revolution Slider</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevolutionsliderSettings\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminRevolutionsliderSettings&amp;token=53e84a3345d7649e7927ee7bfbf949b1\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Configurer
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminRevolutionsliderNavigation\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminRevolutionsliderNavigation&amp;token=24e0c14aff363427deac22c5246";
        // line 1323
        echo "3ee87\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Navigation
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"147\" id=\"tab-AdminYbcBlog\">
                <span class=\"title\">Blog</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"148\" id=\"subtab-AdminYbcBlogPost\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogPost&amp;token=f0ef7bdf3703938776f177240059f72b\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminPriceRule\">icon icon-AdminPriceRule</i>
                      <span>
                      Articles
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminYbcBlogCategory\">
                    <a hre";
        // line 1363
        echo "f=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogCategory&amp;token=510b19a02387f405b948e12eb8e0c161\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminCatalog\">icon icon-AdminCatalog</i>
                      <span>
                      Catégories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminYbcBlogComment\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogComment&amp;token=ab273d9744fdcb0f77a679bf8a32417d\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-comments\">icon icon-comments</i>
                      <span>
                      Commentaires
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminYbcBlogPolls\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogPolls&amp;token=3db4d7cd668e5ceb65b612e32b6edd05\" cl";
        // line 1393
        echo "ass=\"link\">
                      <i class=\"material-icons mi-icon icon-polls\">icon icon-polls</i>
                      <span>
                      Sondages
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminYbcBlogSlider\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogSlider&amp;token=88a95a14f8794c6639b95a3ed8ff116c\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminParentModules\">icon icon-AdminParentModules</i>
                      <span>
                      Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminYbcBlogGallery\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogGallery&amp;token=3946d587ea020a14df87cfba0c20487e\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminDashboard\">icon icon-AdminDashboard</i>
               ";
        // line 1425
        echo "       <span>
                      Galerie photo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminYbcBlogAuthor\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogAuthor&amp;token=9b01cf7af30831fd8cfeba2067048fb4\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-user\">icon icon-user</i>
                      <span>
                      Auteurs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"155\" id=\"subtab-AdminYbcBlogStatistics\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogStatistics&amp;token=7124e3cef142c517b114979a55077b44\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-chart\">icon icon-chart</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"materia";
        // line 1458
        echo "l-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminYbcBlogSetting\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogSetting&amp;token=77e2f3f634e86635fc7b0a7097b2a2b5\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminAdmin\">icon icon-AdminAdmin</i>
                      <span>
                      Paramètres globaux
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Marketplace</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Marketplace          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  titl";
        // line 1511
        echo "e=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin564yalcuf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.2.1%2526country%253Dfr/Help?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\" id=\"subtab-AdminPsMboModule\" class=\"nav-link tab active current\" data-submenu=\"134\">
                      Marketplace
                      <span class=\"notific";
        // line 1539
        echo "ation-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"m";
        // line 1549
        echo "aterial-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin564yalcuf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.2.1%2526country%253Dfr/Help?_token=xLi-HTyD1gkMgkANN6rHapeSW551r27VpMww8QWNkgU\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1586
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminDashboard&amp;token=61d3b149a686a1d986734741b1fc648f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <script type=\"text/javascript\">
var link_ajax='https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&token=60b2e415b4716c4a5dfcd3e5d372048d&configure=ybc_blog&tab_module=front_office_features&module_name=ybc_blog';
\$(document).ready(function(){
    \$.ajax({
        url: link_ajax,
        data: 'action=getCountMessageYbcBlog',
        type: 'post',
        dataType: 'json',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if(\$('#subtab-AdminYbcBlogComment span').length)
                    \$('#subtab-AdminYbcBlogComment span').append('<span class=\"count_messages \">'+json.count+'</span>'); 
                else
                    \$('#subtab-AdminYbcBlogComment a').append('<span class=\"count_messages \">'+json.count+'</span>');
            }
            else
            {
                if(\$('#subtab-AdminYbcBlogComment span').length)
                    \$('#subtab-AdminYbcBlogComment span').append('<span class=\"count_messages hide\">'+json.count+'</span>'); 
                else
                    \$('#subtab-AdminYbcBlogComment a').append('<span class=\"count_messages hide\">'+json.count+'</span>');
            }
                                                              
        },
    });
});
</script>
</div>
  

     ";
        // line 1643
        echo " <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1647
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 112
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1586
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1647
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__c058ea98d98a4adab3b5869b7938301a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1845 => 1647,  1824 => 1586,  1813 => 112,  1804 => 1647,  1798 => 1643,  1735 => 1586,  1696 => 1549,  1684 => 1539,  1654 => 1511,  1599 => 1458,  1564 => 1425,  1530 => 1393,  1498 => 1363,  1456 => 1323,  1418 => 1287,  1385 => 1256,  1350 => 1223,  1323 => 1198,  1289 => 1166,  1258 => 1137,  1225 => 1106,  1194 => 1077,  1155 => 1040,  1118 => 1005,  1088 => 977,  1056 => 947,  1022 => 915,  987 => 882,  957 => 854,  924 => 823,  892 => 793,  860 => 763,  831 => 736,  791 => 698,  760 => 669,  727 => 638,  693 => 606,  663 => 578,  629 => 546,  596 => 515,  554 => 475,  514 => 437,  488 => 413,  435 => 362,  381 => 310,  336 => 267,  302 => 235,  274 => 209,  240 => 177,  207 => 146,  168 => 112,  149 => 95,  123 => 71,  117 => 68,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c058ea98d98a4adab3b5869b7938301a", "");
    }
}
