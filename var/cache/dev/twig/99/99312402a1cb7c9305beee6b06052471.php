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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig */
class __TwigTemplate_3150cf1e15a110fa81cfc255fb6fe5c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'keyword' => [$this, 'block_keyword'],
            'meta_robots_file_form_rest' => [$this, 'block_meta_robots_file_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('keyword', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_keyword($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keyword"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keyword"));

        // line 29
        echo "<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">settings</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Robots file generation", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          ";
        // line 39
        $context["defaultDescription"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your robots.txt file MUST be in your website's root directory and nowhere else (e.g. http://www.example.com/robots.txt).", [], "Admin.Shopparameters.Notification");
        // line 40
        echo "            ";
        if ((isset($context["isRobotsTextFileValid"]) || array_key_exists("isRobotsTextFileValid", $context) ? $context["isRobotsTextFileValid"] : (function () { throw new RuntimeError('Variable "isRobotsTextFileValid" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "              ";
            echo twig_escape_filter($this->env, (isset($context["defaultDescription"]) || array_key_exists("defaultDescription", $context) ? $context["defaultDescription"] : (function () { throw new RuntimeError('Variable "defaultDescription" does not exist.', 41, $this->source); })()), "html", null, true);
            echo " <br>
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            ";
        } else {
            // line 44
            echo "              ";
            echo twig_escape_filter($this->env, (isset($context["defaultDescription"]) || array_key_exists("defaultDescription", $context) ? $context["defaultDescription"] : (function () { throw new RuntimeError('Variable "defaultDescription" does not exist.', 44, $this->source); })()), "html", null, true);
            echo " <br>
              ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before you can use this tool, you need to:", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1) Create a blank robots.txt file in your root directory.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
              ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2) Give it write permissions (CHMOD 666 on Unix system).", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 49
        echo "          </div>
        </div>

        ";
        // line 52
        $this->displayBlock('meta_robots_file_form_rest', $context, $blocks);
        // line 55
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        ";
        // line 59
        if ((isset($context["isRobotsTextFileValid"]) || array_key_exists("isRobotsTextFileValid", $context) ? $context["isRobotsTextFileValid"] : (function () { throw new RuntimeError('Variable "isRobotsTextFileValid" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "          <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate robots.txt file", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</button>
        ";
        }
        // line 62
        echo "      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_meta_robots_file_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_robots_file_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_robots_file_form_rest"));

        // line 53
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["setUpUrlsForm"]) || array_key_exists("setUpUrlsForm", $context) ? $context["setUpUrlsForm"] : (function () { throw new RuntimeError('Variable "setUpUrlsForm" does not exist.', 53, $this->source); })()), 'rest');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  152 => 52,  139 => 62,  133 => 60,  131 => 59,  125 => 55,  123 => 52,  118 => 49,  113 => 47,  109 => 46,  105 => 45,  100 => 44,  95 => 42,  90 => 41,  87 => 40,  85 => 39,  75 => 32,  70 => 29,  51 => 28,  48 => 27,  45 => 25,);
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

{% block keyword %}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">settings</i>
    {{ 'Robots file generation'|trans }}
  </h3>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          {% set defaultDescription = 'Your robots.txt file MUST be in your website\\'s root directory and nowhere else (e.g. http://www.example.com/robots.txt).'|trans({}, 'Admin.Shopparameters.Notification') %}
            {% if isRobotsTextFileValid %}
              {{ defaultDescription }} <br>
              {{ 'Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)'|trans({}, 'Admin.Shopparameters.Notification') }}
            {% else %}
              {{ defaultDescription }} <br>
              {{ 'Before you can use this tool, you need to:'|trans({}, 'Admin.Shopparameters.Notification') }} <br>
              {{ '1) Create a blank robots.txt file in your root directory.'|trans({}, 'Admin.Shopparameters.Notification') }} <br>
              {{ '2) Give it write permissions (CHMOD 666 on Unix system).'|trans({}, 'Admin.Shopparameters.Notification') }}
            {% endif %}
          </div>
        </div>

        {% block meta_robots_file_form_rest %}
          {{ form_rest(setUpUrlsForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        {% if isRobotsTextFileValid %}
          <button class=\"btn btn-primary\">{{ 'Generate robots.txt file'|trans }}</button>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "/home/www/public/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig");
    }
}
