<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9c1fff72ae53a3500491b47b3dbe03404610c09836b98694f9ad45752a7f23dd extends Twig_Template
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
        $__internal_5f280af42051f0842b47e37ea28131385f271b8fadf53b08e86edd152e603f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f280af42051f0842b47e37ea28131385f271b8fadf53b08e86edd152e603f9f->enter($__internal_5f280af42051f0842b47e37ea28131385f271b8fadf53b08e86edd152e603f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_8ab43188e99f2714bdc86ca8745d88a5fd77f902e9e0ac0b648eb8a6c188487f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab43188e99f2714bdc86ca8745d88a5fd77f902e9e0ac0b648eb8a6c188487f->enter($__internal_8ab43188e99f2714bdc86ca8745d88a5fd77f902e9e0ac0b648eb8a6c188487f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_5f280af42051f0842b47e37ea28131385f271b8fadf53b08e86edd152e603f9f->leave($__internal_5f280af42051f0842b47e37ea28131385f271b8fadf53b08e86edd152e603f9f_prof);

        
        $__internal_8ab43188e99f2714bdc86ca8745d88a5fd77f902e9e0ac0b648eb8a6c188487f->leave($__internal_8ab43188e99f2714bdc86ca8745d88a5fd77f902e9e0ac0b648eb8a6c188487f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
