<?php

/* ProductInvoiceBundle:InvoiceReport:report.html.twig */
class __TwigTemplate_909915f7f629f82e1c9cd44cd369b26e736f734c497d12a05e8652ccec63ea7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3df362be012bdc2e3211df2611b6c65ca2853479652986a7a63541aad1268bc2 = $this->env->getExtension("native_profiler");
        $__internal_3df362be012bdc2e3211df2611b6c65ca2853479652986a7a63541aad1268bc2->enter($__internal_3df362be012bdc2e3211df2611b6c65ca2853479652986a7a63541aad1268bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductInvoiceBundle:InvoiceReport:report.html.twig"));

        // line 1
        echo "<h1> Invoice Report</h1>

 <form id=\"myForm\" action=\"\" method=\"post\" >
  Client:
   \t<select class=\"client-selector\" >
   \t\t<option value=\"\">Select Client</option>
   \t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 8
            echo "        \t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "client_id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "client_name", array(), "array"), "html", null, true);
            echo "</option>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</select> 



  Product:
   <select class=\"product-selector\" >
  \t\t<option value=\"\">Select Product</option>
\t</select>

  Date:
\t<select class=\"date-selector\" >
  \t\t<option value=\"last_month_to_date\">Last Month To Date</option>
  \t\t<option value=\"this_month\">This Month</option>
  \t\t<option value=\"this_year\">This Year</option>
  \t\t<option value=\"last_year\">Last Year</option>
\t</select>

\t<input type=\"submit\" value=\"Get Report\" /> 
</form>

<table style=\"width:100%\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t    <td>Invoice Num</td>
\t\t\t\t\t\t\t\t\t    <td>Invoice Date</td>
\t\t\t\t\t\t\t\t\t    <td>Product</td>
\t\t\t\t\t\t\t\t\t    <td>Qty</td>
\t\t\t\t\t\t\t\t\t    <td>Price</td>
\t\t\t\t\t\t\t\t\t    <td>Total</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tbody class=\"data-append\"></tbody>

</table>

";
        // line 43
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_3df362be012bdc2e3211df2611b6c65ca2853479652986a7a63541aad1268bc2->leave($__internal_3df362be012bdc2e3211df2611b6c65ca2853479652986a7a63541aad1268bc2_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c4e472e33cd108207a5029e0de9addb365804089009e4f009e74e8626d721e8a = $this->env->getExtension("native_profiler");
        $__internal_c4e472e33cd108207a5029e0de9addb365804089009e4f009e74e8626d721e8a->enter($__internal_c4e472e33cd108207a5029e0de9addb365804089009e4f009e74e8626d721e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "\t<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
\t<script src=\"http://malsup.github.com/jquery.form.js\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


\t";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a8f851b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8f851b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8f851b_invoice_1.js");
            // line 53
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "a8f851b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8f851b") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a8f851b.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_c4e472e33cd108207a5029e0de9addb365804089009e4f009e74e8626d721e8a->leave($__internal_c4e472e33cd108207a5029e0de9addb365804089009e4f009e74e8626d721e8a_prof);

    }

    public function getTemplateName()
    {
        return "ProductInvoiceBundle:InvoiceReport:report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 53,  107 => 50,  101 => 47,  97 => 46,  93 => 44,  81 => 43,  46 => 10,  35 => 8,  31 => 7,  23 => 1,);
    }
}
