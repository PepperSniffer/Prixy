<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_05b04464a9f596516455f61ec4cbad9856280a8c526ec6f045760187af84ac4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_601c9930c339952a85af1baad4dc1bdd4be1395efed31676eb3018b9e7ade1e7 = $this->env->getExtension("native_profiler");
        $__internal_601c9930c339952a85af1baad4dc1bdd4be1395efed31676eb3018b9e7ade1e7->enter($__internal_601c9930c339952a85af1baad4dc1bdd4be1395efed31676eb3018b9e7ade1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_601c9930c339952a85af1baad4dc1bdd4be1395efed31676eb3018b9e7ade1e7->leave($__internal_601c9930c339952a85af1baad4dc1bdd4be1395efed31676eb3018b9e7ade1e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
