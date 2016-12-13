<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7dc07830ab3c318ff003bf3b53e6b53d02cce05187dca5c6f1438368d3b6a20d extends Twig_Template
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
        $__internal_28fc0f4b396d7cad515dc6fbfeeb9530875969ff3923eb92c06e7abf605333b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fc0f4b396d7cad515dc6fbfeeb9530875969ff3923eb92c06e7abf605333b2->enter($__internal_28fc0f4b396d7cad515dc6fbfeeb9530875969ff3923eb92c06e7abf605333b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a2a64641f00a2c89ca5f77a5d88b16eca817c6b2a259cc0d5018e5b5836577ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a64641f00a2c89ca5f77a5d88b16eca817c6b2a259cc0d5018e5b5836577ce->enter($__internal_a2a64641f00a2c89ca5f77a5d88b16eca817c6b2a259cc0d5018e5b5836577ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_28fc0f4b396d7cad515dc6fbfeeb9530875969ff3923eb92c06e7abf605333b2->leave($__internal_28fc0f4b396d7cad515dc6fbfeeb9530875969ff3923eb92c06e7abf605333b2_prof);

        
        $__internal_a2a64641f00a2c89ca5f77a5d88b16eca817c6b2a259cc0d5018e5b5836577ce->leave($__internal_a2a64641f00a2c89ca5f77a5d88b16eca817c6b2a259cc0d5018e5b5836577ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
