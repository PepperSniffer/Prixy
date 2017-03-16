<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2c53c4d1e4b4a0f8174bf1999e0c84912d1e1a8a2a107b723c09bfcd52d6ec75 extends Twig_Template
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
        $__internal_2c16a65ce0c1ad169aaa64d51f333ba0a5fedeadaaab7623bda69446a3718555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c16a65ce0c1ad169aaa64d51f333ba0a5fedeadaaab7623bda69446a3718555->enter($__internal_2c16a65ce0c1ad169aaa64d51f333ba0a5fedeadaaab7623bda69446a3718555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5674f4050f78d60e89b03cd0c0e4ac43add4a7c31eebf1631ab13bd4c30c49d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5674f4050f78d60e89b03cd0c0e4ac43add4a7c31eebf1631ab13bd4c30c49d2->enter($__internal_5674f4050f78d60e89b03cd0c0e4ac43add4a7c31eebf1631ab13bd4c30c49d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2c16a65ce0c1ad169aaa64d51f333ba0a5fedeadaaab7623bda69446a3718555->leave($__internal_2c16a65ce0c1ad169aaa64d51f333ba0a5fedeadaaab7623bda69446a3718555_prof);

        
        $__internal_5674f4050f78d60e89b03cd0c0e4ac43add4a7c31eebf1631ab13bd4c30c49d2->leave($__internal_5674f4050f78d60e89b03cd0c0e4ac43add4a7c31eebf1631ab13bd4c30c49d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
