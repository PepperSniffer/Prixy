<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_dff56cf3b276a89e5539569deaf12396bc00d3c6ba0a5af8ab9c909bd029eba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce0bd90e52f47df1ecc67db5301563c986a679d58476aadd1533d04814015936 = $this->env->getExtension("native_profiler");
        $__internal_ce0bd90e52f47df1ecc67db5301563c986a679d58476aadd1533d04814015936->enter($__internal_ce0bd90e52f47df1ecc67db5301563c986a679d58476aadd1533d04814015936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce0bd90e52f47df1ecc67db5301563c986a679d58476aadd1533d04814015936->leave($__internal_ce0bd90e52f47df1ecc67db5301563c986a679d58476aadd1533d04814015936_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef70655f8e4ff7d63f80731d7ec5929331ed80159ad37c2cb75c5d3aa0b11f7d = $this->env->getExtension("native_profiler");
        $__internal_ef70655f8e4ff7d63f80731d7ec5929331ed80159ad37c2cb75c5d3aa0b11f7d->enter($__internal_ef70655f8e4ff7d63f80731d7ec5929331ed80159ad37c2cb75c5d3aa0b11f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ef70655f8e4ff7d63f80731d7ec5929331ed80159ad37c2cb75c5d3aa0b11f7d->leave($__internal_ef70655f8e4ff7d63f80731d7ec5929331ed80159ad37c2cb75c5d3aa0b11f7d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51b806fa20074de3c82c3b36101c123b23b9ec6e8baea68b3c129fa15d8de3fc = $this->env->getExtension("native_profiler");
        $__internal_51b806fa20074de3c82c3b36101c123b23b9ec6e8baea68b3c129fa15d8de3fc->enter($__internal_51b806fa20074de3c82c3b36101c123b23b9ec6e8baea68b3c129fa15d8de3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_51b806fa20074de3c82c3b36101c123b23b9ec6e8baea68b3c129fa15d8de3fc->leave($__internal_51b806fa20074de3c82c3b36101c123b23b9ec6e8baea68b3c129fa15d8de3fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df084778cfa3d70151bce342c0f2ca1cd8105fa38a2531f9bd2da2abfa5aa9e0 = $this->env->getExtension("native_profiler");
        $__internal_df084778cfa3d70151bce342c0f2ca1cd8105fa38a2531f9bd2da2abfa5aa9e0->enter($__internal_df084778cfa3d70151bce342c0f2ca1cd8105fa38a2531f9bd2da2abfa5aa9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_df084778cfa3d70151bce342c0f2ca1cd8105fa38a2531f9bd2da2abfa5aa9e0->leave($__internal_df084778cfa3d70151bce342c0f2ca1cd8105fa38a2531f9bd2da2abfa5aa9e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
