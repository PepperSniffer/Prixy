<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4c8c2aaceae0ead8d8fc0bc4d98bc49bf4b5a83f333c41e61a23494406e4249b extends Twig_Template
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
        $__internal_5a9de694cf11b4537801274356677379b4d608d4b09651389c42042eed45eb2b = $this->env->getExtension("native_profiler");
        $__internal_5a9de694cf11b4537801274356677379b4d608d4b09651389c42042eed45eb2b->enter($__internal_5a9de694cf11b4537801274356677379b4d608d4b09651389c42042eed45eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5a9de694cf11b4537801274356677379b4d608d4b09651389c42042eed45eb2b->leave($__internal_5a9de694cf11b4537801274356677379b4d608d4b09651389c42042eed45eb2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
