<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0e203d06aa5d722a6f76c201921621c88549e393f36a654331e02f0e706819e1 extends Twig_Template
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
        $__internal_5fd3f8bbb56f89fcabdb0e9c368b7639393fa0e563808538e3520632bd6a3385 = $this->env->getExtension("native_profiler");
        $__internal_5fd3f8bbb56f89fcabdb0e9c368b7639393fa0e563808538e3520632bd6a3385->enter($__internal_5fd3f8bbb56f89fcabdb0e9c368b7639393fa0e563808538e3520632bd6a3385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5fd3f8bbb56f89fcabdb0e9c368b7639393fa0e563808538e3520632bd6a3385->leave($__internal_5fd3f8bbb56f89fcabdb0e9c368b7639393fa0e563808538e3520632bd6a3385_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
