<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0946bf2294cf05ff46410c616d56827f1ed06eda07cd61212c33bb4bf7da6e0f extends Twig_Template
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
        $__internal_e0ffda89c821e59fd402bcbfb05356bdf0d4abe123ce6545c3c68d0eb836bae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ffda89c821e59fd402bcbfb05356bdf0d4abe123ce6545c3c68d0eb836bae5->enter($__internal_e0ffda89c821e59fd402bcbfb05356bdf0d4abe123ce6545c3c68d0eb836bae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_89056bfc78629fb531d538504c8b8ce9d7eb2bba59cd226cf15a7604974099b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89056bfc78629fb531d538504c8b8ce9d7eb2bba59cd226cf15a7604974099b1->enter($__internal_89056bfc78629fb531d538504c8b8ce9d7eb2bba59cd226cf15a7604974099b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e0ffda89c821e59fd402bcbfb05356bdf0d4abe123ce6545c3c68d0eb836bae5->leave($__internal_e0ffda89c821e59fd402bcbfb05356bdf0d4abe123ce6545c3c68d0eb836bae5_prof);

        
        $__internal_89056bfc78629fb531d538504c8b8ce9d7eb2bba59cd226cf15a7604974099b1->leave($__internal_89056bfc78629fb531d538504c8b8ce9d7eb2bba59cd226cf15a7604974099b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
