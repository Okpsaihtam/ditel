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

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_5ebd74a0688fb3daf4e6cc0dea7b0feb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_header' => [$this, 'block_product_catalog_form_table_header'],
            'product_catalog_form_table_filters' => [$this, 'block_product_catalog_form_table_filters'],
            'product_catalog_filter_select_all' => [$this, 'block_product_catalog_filter_select_all'],
            'product_catalog_form_table_items' => [$this, 'block_product_catalog_form_table_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 25)->unwrap();
        // line 26
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product\"
    redirecturl=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["limit" =>         // line 30
($context["limit"] ?? null), "offset" =>         // line 31
($context["offset"] ?? null), "orderBy" =>         // line 32
($context["orderBy"] ?? null), "sortOrder" =>         // line 33
($context["sortOrder"] ?? null)]), "html", null, true);
        // line 35
        echo "\"
  >
    <thead class=\"with-filters\">
      ";
        // line 38
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 84
        echo "
      ";
        // line 85
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 217
        echo "    </thead>
    ";
        // line 218
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 228
        echo "  </table>
</div>
";
    }

    // line 38
    public function block_product_catalog_form_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\"></th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 42
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "id_product", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 42, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 48
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "name", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 48, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 51
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "reference", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 51, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 54
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "name_category", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 54, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 57
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price (tax excl.)", [], "Admin.Catalog.Feature"), "price", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 57, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </th>

          ";
        // line 63
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 64
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 65
            echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Catalog.Feature"), "sav_quantity", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 65, $context, $this->getSourceContext());
            echo "
          </th>
          ";
        } else {
            // line 68
            echo "            <th></th>
          ";
        }
        // line 70
        echo "
          <th scope=\"col\" class=\"text-center\">
            ";
        // line 72
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "active", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 72, $context, $this->getSourceContext());
        echo "
          </th>
          ";
        // line 74
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 75
            echo "            <th scope=\"col\">
              ";
            // line 76
            echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position", [], "Admin.Global"), "position", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null)], 76, $context, $this->getSourceContext());
            echo "
            </th>
          ";
        }
        // line 79
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>
      ";
    }

    // line 85
    public function block_product_catalog_form_table_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "        ";
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? null);
        // line 87
        echo "        <tr class=\"column-filters\">
          <td class=\"text-center\" style=\"vertical-align: middle;\">
            ";
        // line 89
        $this->displayBlock('product_catalog_filter_select_all', $context, $blocks);
        // line 102
        echo "          </td>
          <td>
            ";
        // line 104
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 104)->display(twig_array_merge($context, ["input_name" => "filter_column_id_product", "min" => "0", "minLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min", [], "Admin.Global"), "maxLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max", [], "Admin.Global"), "value" =>         // line 109
($context["filter_column_id_product"] ?? null), "disabled" =>         // line 110
($context["filters_disabled"] ?? null)]));
        // line 112
        echo "          </td>
          <td>&nbsp;</td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search name", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => "filter_column_name"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 122
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 123
        echo "            />
          </td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search ref.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => "filter_column_reference"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 133
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 134
        echo "            />
          </td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search category", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => "filter_column_name_category"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 144
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 145
        echo "            />
          </td>
          <td class=\"text-center\">
            ";
        // line 148
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 148)->display(twig_array_merge($context, ["input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min", [], "Admin.Global"), "maxLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max", [], "Admin.Global"), "value" =>         // line 154
($context["filter_column_price"] ?? null), "disabled" =>         // line 155
($context["filters_disabled"] ?? null)]));
        // line 157
        echo "          </td>
          <td class=\"text-center\"></td>
          ";
        // line 159
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 160
            echo "          <td class=\"text-center\">
            ";
            // line 161
            $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 161)->display(twig_array_merge($context, ["input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min", [], "Admin.Global"), "maxLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max", [], "Admin.Global"), "value" =>             // line 167
($context["filter_column_sav_quantity"] ?? null), "disabled" =>             // line 168
($context["filters_disabled"] ?? null)]));
            // line 170
            echo "          </td>
          ";
        } else {
            // line 172
            echo "            <td></td>
          ";
        }
        // line 174
        echo "
          <td id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 177
        if (($context["filters_disabled"] ?? null)) {
            echo " disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% select", ["%inputId%" => "filter_column_active"], "Admin.Global"), "html", null, true);
        echo "\"
                >
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 180
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 181
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </td>
          ";
        // line 185
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 186
            echo "            <td>
              ";
            // line 187
            if ( !($context["activate_drag_and_drop"] ?? null)) {
                // line 188
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rearrange", [], "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                ";
            } else {
                // line 190
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save & refresh", [], "Admin.Actions");
                echo "\" />
              ";
            }
            // line 192
            echo "            </td>
          ";
        }
        // line 194
        echo "          <td class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </td>
        </tr>
      ";
    }

    // line 89
    public function block_product_catalog_filter_select_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "              <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                  <input
                    type=\"checkbox\"
                    id=\"bulk_action_select_all\"
                    onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
                    value=\"\"
                  >
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
    }

    // line 218
    public function block_product_catalog_form_table_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", ["limit" =>         // line 220
($context["limit"] ?? null), "offset" =>         // line 221
($context["offset"] ?? null), "orderBy" =>         // line 222
($context["orderBy"] ?? null), "sortOrder" =>         // line 223
($context["sortOrder"] ?? null), "products" =>         // line 224
($context["products"] ?? null), "last_sql" =>         // line 225
($context["last_sql"] ?? null)]));
        // line 226
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 226,  421 => 225,  420 => 224,  419 => 223,  418 => 222,  417 => 221,  416 => 220,  414 => 219,  410 => 218,  395 => 90,  391 => 89,  382 => 212,  376 => 209,  366 => 202,  360 => 199,  353 => 194,  349 => 192,  343 => 190,  337 => 188,  335 => 187,  332 => 186,  330 => 185,  321 => 181,  315 => 180,  305 => 177,  300 => 174,  296 => 172,  292 => 170,  290 => 168,  289 => 167,  288 => 161,  285 => 160,  283 => 159,  279 => 157,  277 => 155,  276 => 154,  275 => 148,  270 => 145,  266 => 144,  262 => 143,  258 => 142,  253 => 140,  245 => 134,  241 => 133,  237 => 132,  233 => 131,  228 => 129,  220 => 123,  216 => 122,  212 => 121,  208 => 120,  203 => 118,  195 => 112,  193 => 110,  192 => 109,  191 => 104,  187 => 102,  185 => 89,  181 => 87,  178 => 86,  174 => 85,  166 => 80,  163 => 79,  157 => 76,  154 => 75,  152 => 74,  147 => 72,  143 => 70,  139 => 68,  133 => 65,  130 => 64,  128 => 63,  122 => 60,  116 => 57,  110 => 54,  104 => 51,  98 => 48,  92 => 45,  86 => 42,  81 => 39,  77 => 38,  71 => 228,  69 => 218,  66 => 217,  64 => 85,  61 => 84,  59 => 38,  54 => 35,  52 => 33,  51 => 32,  50 => 31,  49 => 30,  48 => 29,  43 => 26,  41 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Lists/products_table.html.twig", "/home/www/public/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/products_table.html.twig");
    }
}
