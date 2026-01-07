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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig */
class __TwigTemplate_d26b120d9e7cf64d7060b8a76a867cea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_showcase_card' => [$this, 'block_meta_showcase_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('meta_showcase_card', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_meta_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_showcase_card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_showcase_card"));

        // line 29
        echo "  ";
        if ( !(isset($context["showcaseCardIsClosed"]) || array_key_exists("showcaseCardIsClosed", $context) ? $context["showcaseCardIsClosed"] : (function () { throw new RuntimeError('Variable "showcaseCardIsClosed" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background img-rtl\">
      <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/helper-card/seo@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Improve your SEO", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["helperDocLink"]) || array_key_exists("helperDocLink", $context) ? $context["helperDocLink"] : (function () { throw new RuntimeError('Variable "helperDocLink" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "</a>
      ";
            // line 38
            if (((isset($context["indexPageId"]) || array_key_exists("indexPageId", $context) ? $context["indexPageId"] : (function () { throw new RuntimeError('Variable "indexPageId" does not exist.', 38, $this->source); })()) && (isset($context["isGridDisplayed"]) || array_key_exists("isGridDisplayed", $context) ? $context["isGridDisplayed"] : (function () { throw new RuntimeError('Variable "isGridDisplayed" does not exist.', 38, $this->source); })()))) {
                // line 39
                echo "        <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_edit", ["metaId" => (isset($context["indexPageId"]) || array_key_exists("indexPageId", $context) ? $context["indexPageId"] : (function () { throw new RuntimeError('Variable "indexPageId" does not exist.', 39, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure index page", [], "Admin.Shopparameters.Feature"), "html", null, true);
                echo "</a>
      ";
            }
            // line 41
            echo "    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["metaShowcaseCardName"]) || array_key_exists("metaShowcaseCardName", $context) ? $context["metaShowcaseCardName"] : (function () { throw new RuntimeError('Variable "metaShowcaseCardName" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\" data-close-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_showcase_card");
            echo "\">close</i>
  </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  106 => 41,  98 => 39,  96 => 38,  90 => 37,  86 => 36,  82 => 35,  76 => 32,  72 => 30,  69 => 29,  50 => 28,  47 => 27,  44 => 25,);
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

{% block meta_showcase_card %}
  {% if not showcaseCardIsClosed %}
  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background img-rtl\">
      <img src=\"{{ asset('themes/new-theme/public/helper-card/seo@3x.png') }}\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>{{ 'Improve your SEO'|trans }}</h2>
      <p>{{ 'Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.'|trans }}</p>
      <a class=\"btn btn-outline-secondary\" href=\"{{ helperDocLink }}\" target=\"_blank\">{{ 'Learn more'|trans({}, 'Admin.Actions') }}</a>
      {% if indexPageId and isGridDisplayed %}
        <a class=\"btn btn-primary\" href=\"{{ path('admin_metas_edit', {'metaId': indexPageId}) }}\">{{ 'Configure index page'|trans }}</a>
      {% endif %}
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"{{ metaShowcaseCardName }}\" data-close-url=\"{{ path('admin_close_showcase_card') }}\">close</i>
  </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "/home/www/public/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig");
    }
}
