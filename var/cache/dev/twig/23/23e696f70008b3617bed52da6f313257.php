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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig */
class __TwigTemplate_636c5d16ea27e264e658d7678d0f614d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'url_schema_configuration' => [$this, 'block_url_schema_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["urlSchemaForm"]) || array_key_exists("urlSchemaForm", $context) ? $context["urlSchemaForm"] : (function () { throw new RuntimeError('Variable "urlSchemaForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('url_schema_configuration', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_url_schema_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_schema_configuration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_schema_configuration"));

        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Schema of URLs", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "

      <span
        class=\"help-box\"
        data-container=\"body\"
        data-toggle=\"popover\"
        data-trigger=\"hover\"
        data-placement=\"right\"
        data-content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop's \"Friendly URL\" option must be enabled, and Apache's URL rewriting module (mod_rewrite) must be activated on your web server.", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are several available keywords for each route listed below; note that keywords with * are required!", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "\"
        title=\"\"
      >
      </span>
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"alert alert-warning\" role=\"alert\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before making any changes to the default pattern of your URLs, make sure to meet the following requirements:", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
            <ul>
              <li>
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The Friendly URL feature must be enabled", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL rewriting must be activated on your web server", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All mandatory keywords (*) must be included in the route", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
            </ul>
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You should also comply with the syntax:", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
            <ul>
              <li>
                ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keywords must be in braces {keyword}", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All keywords must be separated", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("As long as a keyword has an associated value, you can use the syntax {prepend:keyword:append} to add text before and after it.", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
            </ul>
        </div>
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["urlSchemaForm"]) || array_key_exists("urlSchemaForm", $context) ? $context["urlSchemaForm"] : (function () { throw new RuntimeError('Variable "urlSchemaForm" does not exist.', 73, $this->source); })()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 78,  149 => 73,  142 => 69,  136 => 66,  130 => 63,  124 => 60,  118 => 57,  112 => 54,  106 => 51,  100 => 48,  86 => 40,  75 => 32,  71 => 30,  52 => 29,  49 => 28,  47 => 27,  44 => 25,);
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
{% form_theme urlSchemaForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block url_schema_configuration %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> {{ 'Schema of URLs'|trans }}

      <span
        class=\"help-box\"
        data-container=\"body\"
        data-toggle=\"popover\"
        data-trigger=\"hover\"
        data-placement=\"right\"
        data-content=\"{{ 'This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop\\'s \"Friendly URL\" option must be enabled, and Apache\\'s URL rewriting module (mod_rewrite) must be activated on your web server.'|trans({}, 'Admin.Shopparameters.Notification') }}{{ 'There are several available keywords for each route listed below; note that keywords with * are required!'|trans({}, 'Admin.Shopparameters.Notification') }} {{ 'To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.'|trans({}, 'Admin.Shopparameters.Notification') }}\"
        title=\"\"
      >
      </span>
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"alert alert-warning\" role=\"alert\">
            {{ 'Before making any changes to the default pattern of your URLs, make sure to meet the following requirements:'|trans({}, 'Admin.Shopparameters.Notification') }}
            <ul>
              <li>
                {{ 'The Friendly URL feature must be enabled'|trans({}, 'Admin.Shopparameters.Notification') }}
              </li>
              <li>
                {{ 'URL rewriting must be activated on your web server'|trans({}, 'Admin.Shopparameters.Notification') }}
              </li>
              <li>
                {{ 'All mandatory keywords (*) must be included in the route'|trans({}, 'Admin.Shopparameters.Notification') }}
              </li>
            </ul>
            {{ 'You should also comply with the syntax:'|trans({}, 'Admin.Shopparameters.Notification') }}
            <ul>
              <li>
                {{ 'Keywords must be in braces {keyword}'|trans({}, 'Admin.Shopparameters.Notification') }}
              </li>
              <li>
                {{ 'All keywords must be separated'|trans({}, 'Admin.Shopparameters.Notification') }}
              </li>
              <li>
                {{ 'As long as a keyword has an associated value, you can use the syntax {prepend:keyword:append} to add text before and after it.'|trans({}, 'Admin.Shopparameters.Notification') }}
              </li>
            </ul>
        </div>
        {{ form_widget(urlSchemaForm) }}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "/home/www/public/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig");
    }
}
