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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig */
class __TwigTemplate_cea155a9d586f95a8cd6ad83a129216a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 30)->display($context);
        // line 31
        echo "  ";
        if ( !(isset($context["isGridDisplayed"]) || array_key_exists("isGridDisplayed", $context) ? $context["isGridDisplayed"] : (function () { throw new RuntimeError('Variable "isGridDisplayed" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "    <div class=\"alert alert-info\" role=\"alert\">
      <div class=\"alert-text\">
        ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can only display the page list in a shop context.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
      </div>
    </div>
  ";
        } else {
            // line 38
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 38)->display(twig_array_merge($context, ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 38, $this->source); })())]));
            // line 39
            echo "  ";
        }
        // line 40
        echo "

  ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["setUpUrlsForm"]) || array_key_exists("setUpUrlsForm", $context) ? $context["setUpUrlsForm"] : (function () { throw new RuntimeError('Variable "setUpUrlsForm" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_set_up_urls_save")]);
        echo "
  ";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 43)->display($context);
        // line 44
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["setUpUrlsForm"]) || array_key_exists("setUpUrlsForm", $context) ? $context["setUpUrlsForm"] : (function () { throw new RuntimeError('Variable "setUpUrlsForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "

  ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["shopUrlsForm"]) || array_key_exists("shopUrlsForm", $context) ? $context["shopUrlsForm"] : (function () { throw new RuntimeError('Variable "shopUrlsForm" does not exist.', 46, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_shop_urls_save")]);
        echo "
  ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 47)->display($context);
        // line 48
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["shopUrlsForm"]) || array_key_exists("shopUrlsForm", $context) ? $context["shopUrlsForm"] : (function () { throw new RuntimeError('Variable "shopUrlsForm" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

  ";
        // line 50
        if ( !twig_test_empty((isset($context["urlSchemaForm"]) || array_key_exists("urlSchemaForm", $context) ? $context["urlSchemaForm"] : (function () { throw new RuntimeError('Variable "urlSchemaForm" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["urlSchemaForm"]) || array_key_exists("urlSchemaForm", $context) ? $context["urlSchemaForm"] : (function () { throw new RuntimeError('Variable "urlSchemaForm" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_url_schema_save")]);
            echo "
    ";
            // line 52
            $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 52)->display($context);
            // line 53
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["urlSchemaForm"]) || array_key_exists("urlSchemaForm", $context) ? $context["urlSchemaForm"] : (function () { throw new RuntimeError('Variable "urlSchemaForm" does not exist.', 53, $this->source); })()), 'form_end');
            echo "
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["seoOptionsForm"]) || array_key_exists("seoOptionsForm", $context) ? $context["seoOptionsForm"] : (function () { throw new RuntimeError('Variable "seoOptionsForm" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_seo_options_save")]);
        echo "
  ";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 57)->display($context);
        // line 58
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["seoOptionsForm"]) || array_key_exists("seoOptionsForm", $context) ? $context["seoOptionsForm"] : (function () { throw new RuntimeError('Variable "seoOptionsForm" does not exist.', 58, $this->source); })()), 'form_end');
        echo "


  ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["robotsForm"]) || array_key_exists("robotsForm", $context) ? $context["robotsForm"] : (function () { throw new RuntimeError('Variable "robotsForm" does not exist.', 61, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_generate_robots_text_file")]);
        echo "
  ";
        // line 62
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 62)->display($context);
        // line 63
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["robotsForm"]) || array_key_exists("robotsForm", $context) ? $context["robotsForm"] : (function () { throw new RuntimeError('Variable "robotsForm" does not exist.', 63, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/meta.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 70,  186 => 69,  181 => 68,  171 => 67,  157 => 63,  155 => 62,  151 => 61,  144 => 58,  142 => 57,  138 => 56,  135 => 55,  129 => 53,  127 => 52,  122 => 51,  120 => 50,  114 => 48,  112 => 47,  108 => 46,  102 => 44,  100 => 43,  96 => 42,  92 => 40,  89 => 39,  86 => 38,  79 => 34,  75 => 32,  72 => 31,  69 => 30,  59 => 29,  36 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}

{% block content %}
  {% include '@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig' %}
  {% if not isGridDisplayed %}
    <div class=\"alert alert-info\" role=\"alert\">
      <div class=\"alert-text\">
        {{ 'You can only display the page list in a shop context.'|trans({}, 'Admin.Shopparameters.Notification') }}
      </div>
    </div>
  {% else %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': grid} %}
  {% endif %}


  {{ form_start(setUpUrlsForm, {attr : {class: 'form'}, action: path('admin_metas_set_up_urls_save') }) }}
  {% include '@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig' %}
  {{ form_end(setUpUrlsForm) }}

  {{ form_start(shopUrlsForm, {attr : {class: 'form'}, action: path('admin_metas_shop_urls_save') }) }}
  {% include '@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig' %}
  {{ form_end(shopUrlsForm) }}

  {% if urlSchemaForm is not empty %}
    {{ form_start(urlSchemaForm, {attr : {class: 'form'}, action: path('admin_metas_url_schema_save') }) }}
    {% include '@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig' %}
    {{ form_end(urlSchemaForm) }}
  {% endif %}

  {{ form_start(seoOptionsForm, {attr : {class: 'form'}, action: path('admin_metas_seo_options_save') }) }}
  {% include '@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig' %}
  {{ form_end(seoOptionsForm) }}


  {{ form_start(robotsForm, {'action': path('admin_metas_generate_robots_text_file')}) }}
  {% include '@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig' %}
  {{ form_end(robotsForm) }}

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/new-theme/public/meta.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", "/home/www/public/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig");
    }
}
