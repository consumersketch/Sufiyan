<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4022271eee63c84d2671a5b33eef5f924201cbe6fb4a3ed3562ee2f451c80698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_081530c8bd3d4f1ad0d55815afb491f2ae6450f28864411f7900b92993929b30 = $this->env->getExtension("native_profiler");
        $__internal_081530c8bd3d4f1ad0d55815afb491f2ae6450f28864411f7900b92993929b30->enter($__internal_081530c8bd3d4f1ad0d55815afb491f2ae6450f28864411f7900b92993929b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081530c8bd3d4f1ad0d55815afb491f2ae6450f28864411f7900b92993929b30->leave($__internal_081530c8bd3d4f1ad0d55815afb491f2ae6450f28864411f7900b92993929b30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37c7da3b96fbb7dd2ff9ae1928ef58701b538fc2560c126f418fe44fe630923a = $this->env->getExtension("native_profiler");
        $__internal_37c7da3b96fbb7dd2ff9ae1928ef58701b538fc2560c126f418fe44fe630923a->enter($__internal_37c7da3b96fbb7dd2ff9ae1928ef58701b538fc2560c126f418fe44fe630923a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_37c7da3b96fbb7dd2ff9ae1928ef58701b538fc2560c126f418fe44fe630923a->leave($__internal_37c7da3b96fbb7dd2ff9ae1928ef58701b538fc2560c126f418fe44fe630923a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d11051c4625f72c8b4f2e3e432c8a479849a3454dfff15ebca33907c892a14a = $this->env->getExtension("native_profiler");
        $__internal_2d11051c4625f72c8b4f2e3e432c8a479849a3454dfff15ebca33907c892a14a->enter($__internal_2d11051c4625f72c8b4f2e3e432c8a479849a3454dfff15ebca33907c892a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d11051c4625f72c8b4f2e3e432c8a479849a3454dfff15ebca33907c892a14a->leave($__internal_2d11051c4625f72c8b4f2e3e432c8a479849a3454dfff15ebca33907c892a14a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc6ee14d663fe115a6957c34e0ba4f197dc802f136f42d96a8a0d30cffebe2a8 = $this->env->getExtension("native_profiler");
        $__internal_fc6ee14d663fe115a6957c34e0ba4f197dc802f136f42d96a8a0d30cffebe2a8->enter($__internal_fc6ee14d663fe115a6957c34e0ba4f197dc802f136f42d96a8a0d30cffebe2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fc6ee14d663fe115a6957c34e0ba4f197dc802f136f42d96a8a0d30cffebe2a8->leave($__internal_fc6ee14d663fe115a6957c34e0ba4f197dc802f136f42d96a8a0d30cffebe2a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
