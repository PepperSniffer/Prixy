<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2dd70c7fc30ad571b62c300cf8998397ad65a0252f7772aac02cc557859b6802 extends Twig_Template
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
        $__internal_aa6e06c2aebcb5203c6e7dd025b45b1baf6e98629f8c566ca689f451e07f824f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6e06c2aebcb5203c6e7dd025b45b1baf6e98629f8c566ca689f451e07f824f->enter($__internal_aa6e06c2aebcb5203c6e7dd025b45b1baf6e98629f8c566ca689f451e07f824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9e8ec2c090d2eefaf6765c8599af618a226c4ec10f21797c27e7f7a88e356a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8ec2c090d2eefaf6765c8599af618a226c4ec10f21797c27e7f7a88e356a08->enter($__internal_9e8ec2c090d2eefaf6765c8599af618a226c4ec10f21797c27e7f7a88e356a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa6e06c2aebcb5203c6e7dd025b45b1baf6e98629f8c566ca689f451e07f824f->leave($__internal_aa6e06c2aebcb5203c6e7dd025b45b1baf6e98629f8c566ca689f451e07f824f_prof);

        
        $__internal_9e8ec2c090d2eefaf6765c8599af618a226c4ec10f21797c27e7f7a88e356a08->leave($__internal_9e8ec2c090d2eefaf6765c8599af618a226c4ec10f21797c27e7f7a88e356a08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
