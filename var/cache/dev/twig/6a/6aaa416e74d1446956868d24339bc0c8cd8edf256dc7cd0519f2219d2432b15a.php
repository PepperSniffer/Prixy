<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cb94dc4c985c129308e0cfe289de262cccb8b15ef2ccde395b10f3fe9fc01b30 extends Twig_Template
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
        $__internal_e7b1e2e238c400489b371a8c8877a88e50bad378bf52cbc72f613edee5ef9a91 = $this->env->getExtension("native_profiler");
        $__internal_e7b1e2e238c400489b371a8c8877a88e50bad378bf52cbc72f613edee5ef9a91->enter($__internal_e7b1e2e238c400489b371a8c8877a88e50bad378bf52cbc72f613edee5ef9a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e7b1e2e238c400489b371a8c8877a88e50bad378bf52cbc72f613edee5ef9a91->leave($__internal_e7b1e2e238c400489b371a8c8877a88e50bad378bf52cbc72f613edee5ef9a91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
