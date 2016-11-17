<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ff5b926f738416832661a09109baaea38a4c7e342a3e6e0e3d7beb9829c9acab extends Twig_Template
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
        $__internal_df51a6b0f3a447844fe45b298cb0890ae662a6efad99402126506878ebbc3082 = $this->env->getExtension("native_profiler");
        $__internal_df51a6b0f3a447844fe45b298cb0890ae662a6efad99402126506878ebbc3082->enter($__internal_df51a6b0f3a447844fe45b298cb0890ae662a6efad99402126506878ebbc3082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_df51a6b0f3a447844fe45b298cb0890ae662a6efad99402126506878ebbc3082->leave($__internal_df51a6b0f3a447844fe45b298cb0890ae662a6efad99402126506878ebbc3082_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
