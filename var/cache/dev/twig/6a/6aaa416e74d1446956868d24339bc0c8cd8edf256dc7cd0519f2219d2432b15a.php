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
        $__internal_63adf1acf07099eff7f1a4962c264c9609d74e4affa85a58a88105ea59ff6657 = $this->env->getExtension("native_profiler");
        $__internal_63adf1acf07099eff7f1a4962c264c9609d74e4affa85a58a88105ea59ff6657->enter($__internal_63adf1acf07099eff7f1a4962c264c9609d74e4affa85a58a88105ea59ff6657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_63adf1acf07099eff7f1a4962c264c9609d74e4affa85a58a88105ea59ff6657->leave($__internal_63adf1acf07099eff7f1a4962c264c9609d74e4affa85a58a88105ea59ff6657_prof);

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
