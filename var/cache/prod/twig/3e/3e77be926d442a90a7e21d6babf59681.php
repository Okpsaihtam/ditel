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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_d17a0d3c2a110b094c8d27d62a17d4d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
      var psAccountLoaded = false;
    </script>
    ";
        // line 27
        if ((array_key_exists("urlAccountsCdn", $context) &&  !twig_test_empty(($context["urlAccountsCdn"] ?? null)))) {
            // line 28
            echo "      ";
            // line 29
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, ($context["urlAccountsCdn"] ?? null), "html", null, true);
            echo "\" rel=preload></script>
      <script>
        if (window?.psaccountsVue) {
          window?.psaccountsVue?.init();
          psAccountLoaded = true;
        }
      </script>
    ";
        }
        // line 37
        echo "
    <script>
      if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
        if (typeof renderCdcError === 'function') {
          window.\$(document).ready(function() {
            renderCdcError(\$('#cdc-container'));
          });
        }
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 48
        echo json_encode(($context["shop_context"] ?? null));
        echo ";

        if (psAccountLoaded) {
          context.accounts_component_loaded = true;
        }

        renderModules(context, '#cdc-container')
      }
    </script>
";
    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>

    ";
        // line 64
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 64)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 64,  111 => 62,  107 => 60,  103 => 59,  89 => 48,  76 => 37,  64 => 29,  62 => 28,  60 => 27,  51 => 22,  47 => 21,  36 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "/home/www/public/modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig");
    }
}
