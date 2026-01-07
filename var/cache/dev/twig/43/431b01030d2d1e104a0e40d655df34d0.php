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

/* @!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_499621c327a8d9aec7f913d9a8639f8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'shop_urls_configuration' => [$this, 'block_shop_urls_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["shopUrlsForm"]) || array_key_exists("shopUrlsForm", $context) ? $context["shopUrlsForm"] : (function () { throw new RuntimeError('Variable "shopUrlsForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('shop_urls_configuration', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_shop_urls_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_urls_configuration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_urls_configuration"));

        // line 30
        echo "
  ";
        // line 31
        $context["cardHeaderLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set shop URL", [], "Admin.Shopparameters.Feature");
        // line 32
        echo "  ";
        if ((isset($context["isShopFeatureActive"]) || array_key_exists("isShopFeatureActive", $context) ? $context["isShopFeatureActive"] : (function () { throw new RuntimeError('Variable "isShopFeatureActive" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["cardHeaderLabel"]) || array_key_exists("cardHeaderLabel", $context) ? $context["cardHeaderLabel"] : (function () { throw new RuntimeError('Variable "cardHeaderLabel" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">

          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            </div>
          </div>

        </div>
      </div>
    </div>
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        if (( !(isset($context["isShopFeatureActive"]) || array_key_exists("isShopFeatureActive", $context) ? $context["isShopFeatureActive"] : (function () { throw new RuntimeError('Variable "isShopFeatureActive" does not exist.', 52, $this->source); })()) && (isset($context["doesMainShopUrlExist"]) || array_key_exists("doesMainShopUrlExist", $context) ? $context["doesMainShopUrlExist"] : (function () { throw new RuntimeError('Variable "doesMainShopUrlExist" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["cardHeaderLabel"]) || array_key_exists("cardHeaderLabel", $context) ? $context["cardHeaderLabel"] : (function () { throw new RuntimeError('Variable "cardHeaderLabel" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["shopUrlsForm"]) || array_key_exists("shopUrlsForm", $context) ? $context["shopUrlsForm"] : (function () { throw new RuntimeError('Variable "shopUrlsForm" does not exist.', 69, $this->source); })()), 'widget');
            echo "
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 75,  134 => 69,  125 => 63,  115 => 56,  110 => 53,  108 => 52,  105 => 51,  94 => 43,  84 => 36,  79 => 33,  76 => 32,  74 => 31,  71 => 30,  52 => 29,  49 => 28,  47 => 27,  44 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% form_theme shopUrlsForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block shop_urls_configuration %}

  {% set cardHeaderLabel = 'Set shop URL'|trans %}
  {% if isShopFeatureActive %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        {{ cardHeaderLabel }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">

          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              {{ 'The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.'|trans({}, 'Admin.Shopparameters.Notification') }}
            </div>
          </div>

        </div>
      </div>
    </div>
  {% endif %}

  {% if not isShopFeatureActive and doesMainShopUrlExist %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        {{ cardHeaderLabel }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.'|trans({}, 'Admin.Shopparameters.Notification') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {{ form_widget(shopUrlsForm) }}
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endif %}
{% endblock %}
", "@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "/home/www/public/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig");
    }
}
