<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2c2cf2f73569b9118ab610043a44726e8b23579041ac85c363ecbc84c0228913 extends Twig_Template
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
        $__internal_c3f01e08e7928d5546f9609ffcaa95aea7c9cd10991f3323c4727b9c70698f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f01e08e7928d5546f9609ffcaa95aea7c9cd10991f3323c4727b9c70698f9f->enter($__internal_c3f01e08e7928d5546f9609ffcaa95aea7c9cd10991f3323c4727b9c70698f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_21fee54b58feefc8a5041f9880af463cd962a7e82e7add6c91eae290ea5c2731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fee54b58feefc8a5041f9880af463cd962a7e82e7add6c91eae290ea5c2731->enter($__internal_21fee54b58feefc8a5041f9880af463cd962a7e82e7add6c91eae290ea5c2731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c3f01e08e7928d5546f9609ffcaa95aea7c9cd10991f3323c4727b9c70698f9f->leave($__internal_c3f01e08e7928d5546f9609ffcaa95aea7c9cd10991f3323c4727b9c70698f9f_prof);

        
        $__internal_21fee54b58feefc8a5041f9880af463cd962a7e82e7add6c91eae290ea5c2731->leave($__internal_21fee54b58feefc8a5041f9880af463cd962a7e82e7add6c91eae290ea5c2731_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
