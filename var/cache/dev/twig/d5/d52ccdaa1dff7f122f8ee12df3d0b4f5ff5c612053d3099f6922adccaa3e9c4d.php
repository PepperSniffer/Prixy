<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c851fa53a17208ef0fc654d9d2baee7a96c9cd9c8e91966b1f05b8efac295a20 extends Twig_Template
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
        $__internal_18b28e0d34dad4465899817dd8b1be64b525010209f781671a3e2e6be9fd4ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b28e0d34dad4465899817dd8b1be64b525010209f781671a3e2e6be9fd4ddd->enter($__internal_18b28e0d34dad4465899817dd8b1be64b525010209f781671a3e2e6be9fd4ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_158ecaf7f43f46bc8957110f30744e4c273038aa423f0c700485138d6a0f544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158ecaf7f43f46bc8957110f30744e4c273038aa423f0c700485138d6a0f544e->enter($__internal_158ecaf7f43f46bc8957110f30744e4c273038aa423f0c700485138d6a0f544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_18b28e0d34dad4465899817dd8b1be64b525010209f781671a3e2e6be9fd4ddd->leave($__internal_18b28e0d34dad4465899817dd8b1be64b525010209f781671a3e2e6be9fd4ddd_prof);

        
        $__internal_158ecaf7f43f46bc8957110f30744e4c273038aa423f0c700485138d6a0f544e->leave($__internal_158ecaf7f43f46bc8957110f30744e4c273038aa423f0c700485138d6a0f544e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
