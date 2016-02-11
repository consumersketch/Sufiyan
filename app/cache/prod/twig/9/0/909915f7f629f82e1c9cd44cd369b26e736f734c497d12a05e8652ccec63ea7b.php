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
        // line 1
        echo "<h1> Invoice Report</h1>

 <form id=\"myForm\" action=\"\" method=\"post\" >
  Client:
   \t<select class=\"client-selector\" >
   \t\t<option value=\"\">Select Client</option>
   \t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
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


";
        // line 31
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "\t<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
\t<script src=\"http://malsup.github.com/jquery.form.js\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


\t";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a8f851b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8f851b_0") : $this->env->getExtension('asset')->getAssetUrl("js/a8f851b_invoice_1.js");
            // line 41
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "a8f851b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8f851b") : $this->env->getExtension('asset')->getAssetUrl("js/a8f851b.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
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
        return array (  90 => 41,  86 => 38,  80 => 35,  76 => 34,  72 => 32,  66 => 31,  43 => 10,  32 => 8,  28 => 7,  20 => 1,);
    }
}
