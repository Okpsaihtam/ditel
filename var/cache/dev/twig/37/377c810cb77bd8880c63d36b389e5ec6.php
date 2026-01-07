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

/* __string_template__164a7762a1c07ce5168b1992619598e2 */
class __TwigTemplate_8a0654a0bdbb9930c5848b464ec69404 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__164a7762a1c07ce5168b1992619598e2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__164a7762a1c07ce5168b1992619598e2"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO & URLs • Ditel </title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMeta';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
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
    var token = '519e3117f628206e7c4a40d06c315629';
    var currentIndex = 'index.php?controller=AdminMeta';
    var employee_token = 'b43d9c17a07263afb6421a29560289d8';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/admin564yalcuf/index.php/improve/modules/manage?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58';
    var admin_notification_get_link = '/admin564yalcuf/index.php/common/notifications?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58';
    var admin_notification_push_link = adminNotificationPushLink = '/admin564yalcuf/index.php/common/notifications/ack?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
";
        // line 44
        echo "  </script>



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
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_blog/views/css/admin_all.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/autoupgrade/views/css/autoupgrade-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin564yalcuf\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin564yalcuf\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\"";
        // line 70
        echo ",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
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
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.13.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#ffffff',
      notificationGetUrl: '/admin564yalcuf/index.php/common/notifications?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58',
      CHECKBOX_ORDER: 1,
    ";
        // line 98
        echo "  CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
  var AutoUpgradeVariables = {\"token\":\"1fef4148cf5647660e422693f7f6ac87\",\"admin_url\":\"\\/admin564yalcuf\",\"admin_dir\":\"admin564yalcuf\",\"module_version\":\"7.2.0\",\"php_version\":\"8.4.15\",\"anonymous_id\":\"f637eccaaf6384dced060afa62397963f1484e38c4795fca7342804b148e939e\",\"ps_version\":\"8.2.1\",\"bo_language\":\"en-US\",\"bo_timezone\":\"Europe\\/Paris\"}
</script>
<script type=\"module\" src=\"/modules/autoupgrade/views/js/autoupgrade-notification.js?version=8.2.1\" defer></script>


";
        // line 110
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmeta developer-mode\"
  data-base-url=\"/admin564yalcuf/index.php\"  data-token=\"1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.ditelweb.com/admin564yalcuf/&amp;token=d82f6a27debc1f04233f722df63a94fa\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;&amp;conf=4&amp;configure=ptm_multiblocks&amp;tab_module=front_office_features&amp;module_name=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
                 data-item=\"Blocs\"
      >Blocs</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0c8fd2f3c98dca61ef24a01fbaa4d338\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/improve/modules/manage?token=ae696dcb71effb40f3bb0f43408e5bab\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89a";
        // line 144
        echo "fb93ccb55c\"
                 data-item=\"Modification accueil\"
      >Modification accueil</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCategories&amp;addcategory&amp;token=8a197e4f1e28e33ff8970f89180b9bd0\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/catalog/products/new?token=ae696dcb71effb40f3bb0f43408e5bab\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8989774796a007d168846eed7b08a074\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/orders?token=ae696dcb71effb40f3bb0f43408e5bab\"
                 data-item=\"Orders\"
      >Orders</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=revsliderprestashop&amp;tab_module=front_office_features&amp;module_name=revsliderprestashop&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
                 data-item=\"Revolution Slider\"
      >Revolution Slider</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"47\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls/?-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
        data-post-link=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\"
        data-prompt-text=\"Please name this shortcut:\"
        dat";
        // line 177
        echo "a-link=\"SEO &amp; URLs - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\">
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
      action=\"/admin564yalcuf/index.php?controller=AdminSearch&amp;token=ead2deee921335a9a807b2f4a4ec5c98\"
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
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-";
        // line 208
        echo "placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
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
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;&amp;conf=4&amp;configure=ptm_multiblocks&amp;tab_module=front_office_features&amp;module_name=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
             data-item=\"Blocs\"
    >Blocs</a>
      <a class=\"dropdown-item q";
        // line 236
        echo "uick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0c8fd2f3c98dca61ef24a01fbaa4d338\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/improve/modules/manage?token=ae696dcb71effb40f3bb0f43408e5bab\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
             data-item=\"Modification accueil\"
    >Modification accueil</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCategories&amp;addcategory&amp;token=8a197e4f1e28e33ff8970f89180b9bd0\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/catalog/products/new?token=ae696dcb71effb40f3bb0f43408e5bab\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8989774796a007d168846eed7b08a074\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/orders?token=ae696dcb71effb40f3bb0f43408e5bab\"
             data-item=\"Orders\"
    >Orders</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=revsliderprestashop&amp;tab_module=front_office_features&amp;module_name=revsliderprestashop&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"";
        // line 265
        echo "
             data-item=\"Revolution Slider\"
    >Revolution Slider</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"59\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls/?-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
      data-post-link=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"SEO &amp; URLs - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/admin564yalcuf/index.php/configure/advanced/performance/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-";
        // line 310
        echo "list\">
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
    <span id=\"notifications-total\" class=\"count hide\">0</span>
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
";
        // line 366
        echo "                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=90a21ad26836391102fbe824812d3c87\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
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
      <i class=\"material-icons\">fiber_manual_record</i> _st";
        // line 409
        echo "atus_
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://www.ditelweb.com/img/pr/default.jpg\" alt=\"Contact\" /></span>
        <span class=\"employee_profile\">Welcome back Contact</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin564yalcuf/index.php/configure/advanced/employees/2/edit?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item Autoupgrade\" href=\"https://build.prestashop-project.org/tag/releases/\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">history</i> Discover the latest releases
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=";
        // line 445
        echo "\"dropdown-item ps_mbo\" href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                          <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=www.ditelweb.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminLogin&amp;logout=1&amp;token=fd6fb4ec8fb90a8f321f16ffef5708da\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin564yalcuf/index.php/configure/advanced/employees/toggle-navigation?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https";
        // line 475
        echo "://www.ditelweb.com/admin564yalcuf/&amp;token=d82f6a27debc1f04233f722df63a94fa\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminDashboard&amp;token=62648370ac450290b87bfb736fff5539\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin564yalcuf/index.php/sell/orders/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-levelt";
        // line 517
        echo "wo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/invoices/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/credit-slips/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/delivery-slips/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                      ";
        // line 548
        echo "      
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarts&amp;token=90a21ad26836391102fbe824812d3c87\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin564yalcuf/index.php/sell/catalog/products?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
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
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/products?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
     ";
        // line 580
        echo "                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/categories?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/monitoring/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminAttributesGroups&amp;token=560912befe7cb77f4af91f326a560c0f\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/brands/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Brands &amp; Suppliers
             ";
        // line 608
        echo "                   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin564yalcuf/index.php/sell/attachments/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;token=8989774796a007d168846eed7b08a074\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin564yalcuf/index.php/sell/stocks/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
 ";
        // line 642
        echo "                   <a href=\"/admin564yalcuf/index.php/sell/customers/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin564yalcuf/index.php/sell/customers/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin564yalcuf/index.php/sell/addresses/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                   ";
        // line 672
        echo "   
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCustomerThreads&amp;token=9fc34c7669abda8b943200936f076f85\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCustomerThreads&amp;token=9fc34c7669abda8b943200936f076f85\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin564yalcuf/index.php/sell/customer-service/order-messages/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                     ";
        // line 701
        echo "             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminReturn&amp;token=2022e86ef7b5261a0ae07090eb397f70\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;token=0c8fd2f3c98dca61ef24a01fbaa4d338\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentMod";
        // line 740
        echo "ulesSf\">
                    <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"197\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin564yalcuf/index.php/improve/modules/manage?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                        
         ";
        // line 768
        echo "                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminWebpgeneratorConfig\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminWebpgeneratorConfig&amp;token=ca7a4bbd275fe03a5be1b9faae33202b\" class=\"link\"> WebP Config
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"183\" id=\"subtab-AdminParentCEContent\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEContent&amp;token=66a3b5a0a1cb45ed26086f5a4ba7ef81\" class=\"link\">
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
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEContent&amp;token=66a3b5a0a1cb45ed26086f5a4ba7ef81\" class=\"link\"> Content An";
        // line 796
        echo "ywhere
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminCEThemes\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEThemes&amp;token=0ad43071a86fe8002cf7ee0aadabd6fe\" class=\"link\"> Theme Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminCETemplates\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCETemplates&amp;token=7112f9cca8116d461855ab0425ba6fbc\" class=\"link\"> Saved Templates
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminCEFonts\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEFonts&amp;token=be5592fdcecbaccc433311f63a6f922b\" class=\"link\"> Custom Fonts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminCESettings\">
                  ";
        // line 828
        echo "              <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCESettings&amp;token=e0b8121acb076f280d340c7dfbb592b9\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin564yalcuf/index.php/improve/design/themes/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
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
                                <a href=\"/admin564yalcuf/index.php/improve/design/themes/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
          ";
        // line 859
        echo "                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin564yalcuf/index.php/modules/mbo/themes/catalog/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/mail_theme/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/cms-pages/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/modules/positions/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Positions
                                </a>
                              </li>

             ";
        // line 889
        echo "                                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminImages&amp;token=7a91f82cb9295924093991e3d03ec1a2\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin564yalcuf/index.php/modules/link-widget/list?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarriers&amp;token=1d7d31bda93f8be3c01c49b87c7e7613\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            <";
        // line 919
        echo "/i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarriers&amp;token=1d7d31bda93f8be3c01c49b87c7e7613\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin564yalcuf/index.php/improve/shipping/preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin564yalcuf/index.php/improve/payment/payment_methods?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                   ";
        // line 951
        echo "                                 keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin564yalcuf/index.php/improve/payment/payment_methods?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin564yalcuf/index.php/improve/payment/preferences?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin564yalcuf/index.php/improve/international/localization/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span";
        // line 982
        echo ">
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/localization/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/zones/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/taxes/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Taxes
                                </a>
                              </li>

                                       ";
        // line 1012
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/translations/settings?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminEmarketing&amp;token=2ab7fe7bf3ca20668c12d39879692aa1\" class=\"link\">
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
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminBlmVuln&amp;token=cb03720e541cf9151fbd23f363a83ca0\" class=\"link\">
                      <i class=\"material-icons mi-whatshot\">w";
        // line 1043
        echo "hatshot</i>
                      <span>
                      BLM vulnerability
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/preferences/preferences?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-";
        // line 1080
        echo "AdminParentPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/preferences/preferences?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/order-preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/product-preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/customer-preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                ";
        // line 1109
        echo "  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/contacts/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminSearchConf&amp;token=4e2712adf4def312121060cf0507fc13\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin564yalcuf/index.php/configure/advanced/system-information/?_t";
        // line 1140
        echo "oken=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/system-information/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/performance/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
              ";
        // line 1170
        echo "                  <a href=\"/admin564yalcuf/index.php/configure/advanced/administration/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/emails/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/import/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/employees/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                        ";
        // line 1201
        echo "      <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/sql-requests/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/logs/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/webservice-keys/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminWebpgeneratorRegenerate\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminWebpgeneratorRegenerate&amp;token=24ee29507ab9f661df4427f43ae1d9d7\" class=\"link\"> Regenerate WebP
                 ";
        // line 1227
        echo "               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/feature-flags/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/security/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"161\" id=\"subtab-AdminFaqs\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsCategory&amp;token=dd1d26bccd585ffa79cbba8a894939b4\" class=\"link\">
                      <i class=\"material-icons mi-live_help\">live_help</i>
                      <span>
                      Faqs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keybo";
        // line 1259
        echo "ard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-161\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminFaqsCategory\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsCategory&amp;token=dd1d26bccd585ffa79cbba8a894939b4\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminFaqsPost\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsPost&amp;token=6e2686825784f5d152ca512ff16aabf6\" class=\"link\"> Questions/Answers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminFaqsSettings\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsSettings&amp;token=aa282e81d63f5c1721f93de7cc77500a\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                        ";
        // line 1289
        echo "      
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"168\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminSelfUpgrade&amp;token=b8d68f5b01bafd7869b5e91ececbce34\" class=\"link\">
                      <i class=\"material-icons mi-arrow_upward\">arrow_upward</i>
                      <span>
                      Update assistant
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-AdminRevolutionslider\">
                <span class=\"title\">Revolution Slider</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevolutionsliderSettings\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminRevolutionsliderSettings&amp;token=eb80fa44e45b18a64d9466e1c571699c\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Configure
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                       ";
        // line 1326
        echo "     </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminRevolutionsliderNavigation\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminRevolutionsliderNavigation&amp;token=38f55d2a061276fa761af1b9182624eb\" class=\"link\">
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
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogPost&amp;token=4fb2556be8ea3e2ce3e9426686949bba\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminPriceRule\">icon icon-AdminPriceRule</i>
                      <span>
                      Articles
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">";
        // line 1364
        echo "
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminYbcBlogCategory\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogCategory&amp;token=910af4e4d534128793ec87745b0318a9\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminCatalog\">icon icon-AdminCatalog</i>
                      <span>
                      Categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminYbcBlogComment\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogComment&amp;token=a6cdb5e8513d7f1d0b2ff31fe945c389\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-comments\">icon icon-comments</i>
                      <span>
                      Commentaires
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                     ";
        // line 1396
        echo "                       </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminYbcBlogPolls\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogPolls&amp;token=4f81d2bcaab29f9a69646e1e319799a9\" class=\"link\">
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
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogSlider&amp;token=e37a276309cc3e6ce09a1c8e8718f6fa\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminParentModules\">icon icon-AdminParentModules</i>
                      <span>
                      Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
             ";
        // line 1429
        echo "                                 
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminYbcBlogGallery\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogGallery&amp;token=4b5bf74f6193add6c7e864407b971405\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminDashboard\">icon icon-AdminDashboard</i>
                      <span>
                      Galerie photo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminYbcBlogAuthor\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogAuthor&amp;token=7290d70a834b0c47497a5b9b41b18d58\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-user\">icon icon-user</i>
                      <span>
                      Auteurs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
         ";
        // line 1463
        echo "         <li class=\"link-levelone\" data-submenu=\"155\" id=\"subtab-AdminYbcBlogStatistics\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogStatistics&amp;token=290a2a24824b5011924c42eadbbd3884\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-chart\">icon icon-chart</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminYbcBlogSetting\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogSetting&amp;token=819ab077fde34336a37de1acf942e6a8\" class=\"link\">
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
                      <li class=\"breadc";
        // line 1504
        echo "rumb-item\">Traffic &amp; SEO</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" aria-current=\"page\">SEO &amp; URLs</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            SEO &amp; URLs          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/new?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"                  title=\"Add a new page\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add a new page
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin564yalcuf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252F%252Fdoc%252FAdminMeta%253Fversion%253D8.2.1%2526country%253D/Help?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
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
                                                                                                                                                                                       ";
        // line 1549
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <li class=\"nav-item\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"97\">
                      SEO & URLs
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/search-engines/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" id=\"sub";
        // line 1558
        echo "tab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"98\">
                      Search Engines
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/new?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"              title=\"Add a new page\"            >
              Add a new page
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
     ";
        // line 1584
        echo "          data-target=\"#right-sidebar\"
               data-url=\"/admin564yalcuf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252F%252Fdoc%252FAdminMeta%253Fversion%253D8.2.1%2526country%253D/Help?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /home/www/public/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Improve SEO',
        'Close': 'Close',
      },
      recommendedModulesUrl: '/admin564yalcuf/index.php/modules/mbo/modules/recommended/?tabClassName=AdminMeta&recommendation_format=modal&_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /home/www/public/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1621
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
  <a href=\"https://www.ditelweb.com/admin564yalcuf/&amp;token=d82f6a27debc1f04233f722df63a94fa\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <script type=\"text/javascript\">
var link_ajax='https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&token=87f84366ca6e29d2b1e89afb93ccb55c&configure=ybc_blog&tab_module=front_office_features&module_name=ybc_blog';
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
  

      <div class=\"bootstrap\">
      
   ";
        // line 1680
        echo " </div>
  
";
        // line 1682
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 110
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1621
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1682
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__164a7762a1c07ce5168b1992619598e2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1963 => 1682,  1894 => 1621,  1859 => 110,  1844 => 1682,  1840 => 1680,  1775 => 1621,  1736 => 1584,  1708 => 1558,  1697 => 1549,  1650 => 1504,  1607 => 1463,  1571 => 1429,  1536 => 1396,  1502 => 1364,  1462 => 1326,  1423 => 1289,  1391 => 1259,  1357 => 1227,  1329 => 1201,  1296 => 1170,  1264 => 1140,  1231 => 1109,  1200 => 1080,  1161 => 1043,  1128 => 1012,  1096 => 982,  1063 => 951,  1029 => 919,  997 => 889,  965 => 859,  932 => 828,  898 => 796,  868 => 768,  838 => 740,  797 => 701,  766 => 672,  734 => 642,  698 => 608,  668 => 580,  634 => 548,  601 => 517,  557 => 475,  525 => 445,  487 => 409,  442 => 366,  384 => 310,  337 => 265,  306 => 236,  276 => 208,  243 => 177,  208 => 144,  169 => 110,  155 => 98,  125 => 70,  97 => 44,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO & URLs • Ditel </title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminMeta\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'8.2.1\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'519e3117f628206e7c4a40d06c315629\\';
    var currentIndex = \\'index.php?controller=AdminMeta\\';
    var employee_token = \\'b43d9c17a07263afb6421a29560289d8\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'2\\';
    var admin_modules_link = \\'/admin564yalcuf/index.php/improve/modules/manage?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\\';
    var admin_notification_get_link = \\'/admin564yalcuf/index.php/common/notifications?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin564yalcuf/index.php/common/notifications/ack?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
' | raw }}{{ '  </script>



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
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_blog/views/css/admin_all.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/autoupgrade/views/css/autoupgrade-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin564yalcuf\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin564yalcuf\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\"' | raw }}{{ ',\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
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
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.13.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#ffffff\\',
      notificationGetUrl: \\'/admin564yalcuf/index.php/common/notifications?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\\',
      CHECKBOX_ORDER: 1,
    ' | raw }}{{ '  CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
  var AutoUpgradeVariables = {\"token\":\"1fef4148cf5647660e422693f7f6ac87\",\"admin_url\":\"\\\\/admin564yalcuf\",\"admin_dir\":\"admin564yalcuf\",\"module_version\":\"7.2.0\",\"php_version\":\"8.4.15\",\"anonymous_id\":\"f637eccaaf6384dced060afa62397963f1484e38c4795fca7342804b148e939e\",\"ps_version\":\"8.2.1\",\"bo_language\":\"en-US\",\"bo_timezone\":\"Europe\\\\/Paris\"}
</script>
<script type=\"module\" src=\"/modules/autoupgrade/views/js/autoupgrade-notification.js?version=8.2.1\" defer></script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminmeta developer-mode\"
  data-base-url=\"/admin564yalcuf/index.php\"  data-token=\"1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.ditelweb.com/admin564yalcuf/&amp;token=d82f6a27debc1f04233f722df63a94fa\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;&amp;conf=4&amp;configure=ptm_multiblocks&amp;tab_module=front_office_features&amp;module_name=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
                 data-item=\"Blocs\"
      >Blocs</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0c8fd2f3c98dca61ef24a01fbaa4d338\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/improve/modules/manage?token=ae696dcb71effb40f3bb0f43408e5bab\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89a' | raw }}{{ 'fb93ccb55c\"
                 data-item=\"Modification accueil\"
      >Modification accueil</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCategories&amp;addcategory&amp;token=8a197e4f1e28e33ff8970f89180b9bd0\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/catalog/products/new?token=ae696dcb71effb40f3bb0f43408e5bab\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8989774796a007d168846eed7b08a074\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/orders?token=ae696dcb71effb40f3bb0f43408e5bab\"
                 data-item=\"Orders\"
      >Orders</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=revsliderprestashop&amp;tab_module=front_office_features&amp;module_name=revsliderprestashop&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
                 data-item=\"Revolution Slider\"
      >Revolution Slider</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"47\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls/?-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
        data-post-link=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\"
        data-prompt-text=\"Please name this shortcut:\"
        dat' | raw }}{{ 'a-link=\"SEO &amp; URLs - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\">
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
      action=\"/admin564yalcuf/index.php?controller=AdminSearch&amp;token=ead2deee921335a9a807b2f4a4ec5c98\"
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
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-' | raw }}{{ 'placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
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
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;&amp;conf=4&amp;configure=ptm_multiblocks&amp;tab_module=front_office_features&amp;module_name=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
             data-item=\"Blocs\"
    >Blocs</a>
      <a class=\"dropdown-item q' | raw }}{{ 'uick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0c8fd2f3c98dca61ef24a01fbaa4d338\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/improve/modules/manage?token=ae696dcb71effb40f3bb0f43408e5bab\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=ptm_multiblocks&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"
             data-item=\"Modification accueil\"
    >Modification accueil</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCategories&amp;addcategory&amp;token=8a197e4f1e28e33ff8970f89180b9bd0\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/catalog/products/new?token=ae696dcb71effb40f3bb0f43408e5bab\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8989774796a007d168846eed7b08a074\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php/sell/orders?token=ae696dcb71effb40f3bb0f43408e5bab\"
             data-item=\"Orders\"
    >Orders</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&amp;configure=revsliderprestashop&amp;tab_module=front_office_features&amp;module_name=revsliderprestashop&amp;token=87f84366ca6e29d2b1e89afb93ccb55c\"' | raw }}{{ '
             data-item=\"Revolution Slider\"
    >Revolution Slider</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"59\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls/?-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
      data-post-link=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"SEO &amp; URLs - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminQuickAccesses&token=bbf20b532238f115c68f820ba7d5212c\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/admin564yalcuf/index.php/configure/advanced/performance/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-' | raw }}{{ 'list\">
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
    <span id=\"notifications-total\" class=\"count hide\">0</span>
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
' | raw }}{{ '                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=90a21ad26836391102fbe824812d3c87\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
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
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _st' | raw }}{{ 'atus_
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://www.ditelweb.com/img/pr/default.jpg\" alt=\"Contact\" /></span>
        <span class=\"employee_profile\">Welcome back Contact</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin564yalcuf/index.php/configure/advanced/employees/2/edit?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item Autoupgrade\" href=\"https://build.prestashop-project.org/tag/releases/\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">history</i> Discover the latest releases
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=' | raw }}{{ '\"dropdown-item ps_mbo\" href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                          <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=www.ditelweb.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminLogin&amp;logout=1&amp;token=fd6fb4ec8fb90a8f321f16ffef5708da\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin564yalcuf/index.php/configure/advanced/employees/toggle-navigation?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https' | raw }}{{ '://www.ditelweb.com/admin564yalcuf/&amp;token=d82f6a27debc1f04233f722df63a94fa\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminDashboard&amp;token=62648370ac450290b87bfb736fff5539\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin564yalcuf/index.php/sell/orders/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-levelt' | raw }}{{ 'wo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/invoices/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/credit-slips/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin564yalcuf/index.php/sell/orders/delivery-slips/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                      ' | raw }}{{ '      
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarts&amp;token=90a21ad26836391102fbe824812d3c87\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin564yalcuf/index.php/sell/catalog/products?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
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
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/products?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
     ' | raw }}{{ '                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/categories?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/monitoring/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminAttributesGroups&amp;token=560912befe7cb77f4af91f326a560c0f\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin564yalcuf/index.php/sell/catalog/brands/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Brands &amp; Suppliers
             ' | raw }}{{ '                   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin564yalcuf/index.php/sell/attachments/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCartRules&amp;token=8989774796a007d168846eed7b08a074\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin564yalcuf/index.php/sell/stocks/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
 ' | raw }}{{ '                   <a href=\"/admin564yalcuf/index.php/sell/customers/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin564yalcuf/index.php/sell/customers/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin564yalcuf/index.php/sell/addresses/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                   ' | raw }}{{ '   
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCustomerThreads&amp;token=9fc34c7669abda8b943200936f076f85\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCustomerThreads&amp;token=9fc34c7669abda8b943200936f076f85\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin564yalcuf/index.php/sell/customer-service/order-messages/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                     ' | raw }}{{ '             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminReturn&amp;token=2022e86ef7b5261a0ae07090eb397f70\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminStats&amp;token=0c8fd2f3c98dca61ef24a01fbaa4d338\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentMod' | raw }}{{ 'ulesSf\">
                    <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"197\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin564yalcuf/index.php/modules/mbo/modules/catalog/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin564yalcuf/index.php/improve/modules/manage?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                        
         ' | raw }}{{ '                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminWebpgeneratorConfig\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminWebpgeneratorConfig&amp;token=ca7a4bbd275fe03a5be1b9faae33202b\" class=\"link\"> WebP Config
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"183\" id=\"subtab-AdminParentCEContent\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEContent&amp;token=66a3b5a0a1cb45ed26086f5a4ba7ef81\" class=\"link\">
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
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEContent&amp;token=66a3b5a0a1cb45ed26086f5a4ba7ef81\" class=\"link\"> Content An' | raw }}{{ 'ywhere
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminCEThemes\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEThemes&amp;token=0ad43071a86fe8002cf7ee0aadabd6fe\" class=\"link\"> Theme Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminCETemplates\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCETemplates&amp;token=7112f9cca8116d461855ab0425ba6fbc\" class=\"link\"> Saved Templates
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminCEFonts\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCEFonts&amp;token=be5592fdcecbaccc433311f63a6f922b\" class=\"link\"> Custom Fonts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminCESettings\">
                  ' | raw }}{{ '              <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCESettings&amp;token=e0b8121acb076f280d340c7dfbb592b9\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin564yalcuf/index.php/improve/design/themes/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
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
                                <a href=\"/admin564yalcuf/index.php/improve/design/themes/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
          ' | raw }}{{ '                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin564yalcuf/index.php/modules/mbo/themes/catalog/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/mail_theme/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/cms-pages/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin564yalcuf/index.php/improve/design/modules/positions/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Positions
                                </a>
                              </li>

             ' | raw }}{{ '                                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminImages&amp;token=7a91f82cb9295924093991e3d03ec1a2\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin564yalcuf/index.php/modules/link-widget/list?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarriers&amp;token=1d7d31bda93f8be3c01c49b87c7e7613\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            <' | raw }}{{ '/i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminCarriers&amp;token=1d7d31bda93f8be3c01c49b87c7e7613\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin564yalcuf/index.php/improve/shipping/preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin564yalcuf/index.php/improve/payment/payment_methods?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                   ' | raw }}{{ '                                 keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin564yalcuf/index.php/improve/payment/payment_methods?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin564yalcuf/index.php/improve/payment/preferences?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin564yalcuf/index.php/improve/international/localization/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span' | raw }}{{ '>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/localization/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/zones/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/taxes/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Taxes
                                </a>
                              </li>

                                       ' | raw }}{{ '                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin564yalcuf/index.php/improve/international/translations/settings?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminEmarketing&amp;token=2ab7fe7bf3ca20668c12d39879692aa1\" class=\"link\">
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
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminBlmVuln&amp;token=cb03720e541cf9151fbd23f363a83ca0\" class=\"link\">
                      <i class=\"material-icons mi-whatshot\">w' | raw }}{{ 'hatshot</i>
                      <span>
                      BLM vulnerability
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/preferences/preferences?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-' | raw }}{{ 'AdminParentPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/preferences/preferences?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/order-preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/product-preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/customer-preferences/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                ' | raw }}{{ '  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/contacts/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminSearchConf&amp;token=4e2712adf4def312121060cf0507fc13\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin564yalcuf/index.php/configure/advanced/system-information/?_t' | raw }}{{ 'oken=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/system-information/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/performance/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
              ' | raw }}{{ '                  <a href=\"/admin564yalcuf/index.php/configure/advanced/administration/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/emails/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/import/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/employees/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                        ' | raw }}{{ '      <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/sql-requests/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/logs/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/webservice-keys/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminWebpgeneratorRegenerate\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminWebpgeneratorRegenerate&amp;token=24ee29507ab9f661df4427f43ae1d9d7\" class=\"link\"> Regenerate WebP
                 ' | raw }}{{ '               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/feature-flags/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin564yalcuf/index.php/configure/advanced/security/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"161\" id=\"subtab-AdminFaqs\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsCategory&amp;token=dd1d26bccd585ffa79cbba8a894939b4\" class=\"link\">
                      <i class=\"material-icons mi-live_help\">live_help</i>
                      <span>
                      Faqs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keybo' | raw }}{{ 'ard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-161\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminFaqsCategory\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsCategory&amp;token=dd1d26bccd585ffa79cbba8a894939b4\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminFaqsPost\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsPost&amp;token=6e2686825784f5d152ca512ff16aabf6\" class=\"link\"> Questions/Answers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminFaqsSettings\">
                                <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminFaqsSettings&amp;token=aa282e81d63f5c1721f93de7cc77500a\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                        ' | raw }}{{ '      
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"168\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminSelfUpgrade&amp;token=b8d68f5b01bafd7869b5e91ececbce34\" class=\"link\">
                      <i class=\"material-icons mi-arrow_upward\">arrow_upward</i>
                      <span>
                      Update assistant
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-AdminRevolutionslider\">
                <span class=\"title\">Revolution Slider</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevolutionsliderSettings\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminRevolutionsliderSettings&amp;token=eb80fa44e45b18a64d9466e1c571699c\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Configure
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                       ' | raw }}{{ '     </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminRevolutionsliderNavigation\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminRevolutionsliderNavigation&amp;token=38f55d2a061276fa761af1b9182624eb\" class=\"link\">
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
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogPost&amp;token=4fb2556be8ea3e2ce3e9426686949bba\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminPriceRule\">icon icon-AdminPriceRule</i>
                      <span>
                      Articles
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">' | raw }}{{ '
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminYbcBlogCategory\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogCategory&amp;token=910af4e4d534128793ec87745b0318a9\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminCatalog\">icon icon-AdminCatalog</i>
                      <span>
                      Categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminYbcBlogComment\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogComment&amp;token=a6cdb5e8513d7f1d0b2ff31fe945c389\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-comments\">icon icon-comments</i>
                      <span>
                      Commentaires
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                     ' | raw }}{{ '                       </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminYbcBlogPolls\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogPolls&amp;token=4f81d2bcaab29f9a69646e1e319799a9\" class=\"link\">
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
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogSlider&amp;token=e37a276309cc3e6ce09a1c8e8718f6fa\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminParentModules\">icon icon-AdminParentModules</i>
                      <span>
                      Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
             ' | raw }}{{ '                                 
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminYbcBlogGallery\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogGallery&amp;token=4b5bf74f6193add6c7e864407b971405\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminDashboard\">icon icon-AdminDashboard</i>
                      <span>
                      Galerie photo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminYbcBlogAuthor\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogAuthor&amp;token=7290d70a834b0c47497a5b9b41b18d58\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-user\">icon icon-user</i>
                      <span>
                      Auteurs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
         ' | raw }}{{ '         <li class=\"link-levelone\" data-submenu=\"155\" id=\"subtab-AdminYbcBlogStatistics\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogStatistics&amp;token=290a2a24824b5011924c42eadbbd3884\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-chart\">icon icon-chart</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminYbcBlogSetting\">
                    <a href=\"https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminYbcBlogSetting&amp;token=819ab077fde34336a37de1acf942e6a8\" class=\"link\">
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
                      <li class=\"breadc' | raw }}{{ 'rumb-item\">Traffic &amp; SEO</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" aria-current=\"page\">SEO &amp; URLs</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            SEO &amp; URLs          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/new?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"                  title=\"Add a new page\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add a new page
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin564yalcuf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252F%252Fdoc%252FAdminMeta%253Fversion%253D8.2.1%2526country%253D/Help?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
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
                                                                                                                                                                                       ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <li class=\"nav-item\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"97\">
                      SEO & URLs
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin564yalcuf/index.php/configure/shop/search-engines/?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\" id=\"sub' | raw }}{{ 'tab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"98\">
                      Search Engines
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin564yalcuf/index.php/configure/shop/seo-urls/new?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"              title=\"Add a new page\"            >
              Add a new page
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
     ' | raw }}{{ '          data-target=\"#right-sidebar\"
               data-url=\"/admin564yalcuf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252F%252Fdoc%252FAdminMeta%253Fversion%253D8.2.1%2526country%253D/Help?_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /home/www/public/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Improve SEO\\',
        \\'Close\\': \\'Close\\',
      },
      recommendedModulesUrl: \\'/admin564yalcuf/index.php/modules/mbo/modules/recommended/?tabClassName=AdminMeta&recommendation_format=modal&_token=1-AzFLLWQAjCl9ePGxWc2Jy5LJzsSJ1HRkD1kKUWK58\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /home/www/public/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

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
  <a href=\"https://www.ditelweb.com/admin564yalcuf/&amp;token=d82f6a27debc1f04233f722df63a94fa\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <script type=\"text/javascript\">
var link_ajax=\\'https://www.ditelweb.com/admin564yalcuf/index.php?controller=AdminModules&token=87f84366ca6e29d2b1e89afb93ccb55c&configure=ybc_blog&tab_module=front_office_features&module_name=ybc_blog\\';
\$(document).ready(function(){
    \$.ajax({
        url: link_ajax,
        data: \\'action=getCountMessageYbcBlog\\',
        type: \\'post\\',
        dataType: \\'json\\',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if(\$(\\'#subtab-AdminYbcBlogComment span\\').length)
                    \$(\\'#subtab-AdminYbcBlogComment span\\').append(\\'<span class=\"count_messages \">\\'+json.count+\\'</span>\\'); 
                else
                    \$(\\'#subtab-AdminYbcBlogComment a\\').append(\\'<span class=\"count_messages \">\\'+json.count+\\'</span>\\');
            }
            else
            {
                if(\$(\\'#subtab-AdminYbcBlogComment span\\').length)
                    \$(\\'#subtab-AdminYbcBlogComment span\\').append(\\'<span class=\"count_messages hide\">\\'+json.count+\\'</span>\\'); 
                else
                    \$(\\'#subtab-AdminYbcBlogComment a\\').append(\\'<span class=\"count_messages hide\">\\'+json.count+\\'</span>\\');
            }
                                                              
        },
    });
});
</script>
</div>
  

      <div class=\"bootstrap\">
      
   ' | raw }}{{ ' </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__164a7762a1c07ce5168b1992619598e2", "");
    }
}
