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
        $__internal_6e75bfe366692d872b8d24196868f4d63c7bce708dc8495030fa24dfd863e1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e75bfe366692d872b8d24196868f4d63c7bce708dc8495030fa24dfd863e1ab->enter($__internal_6e75bfe366692d872b8d24196868f4d63c7bce708dc8495030fa24dfd863e1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_491dd6785815956b819f9e6c780ebe90bf86e303865332406dae3072da8fe58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491dd6785815956b819f9e6c780ebe90bf86e303865332406dae3072da8fe58d->enter($__internal_491dd6785815956b819f9e6c780ebe90bf86e303865332406dae3072da8fe58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6e75bfe366692d872b8d24196868f4d63c7bce708dc8495030fa24dfd863e1ab->leave($__internal_6e75bfe366692d872b8d24196868f4d63c7bce708dc8495030fa24dfd863e1ab_prof);

        
        $__internal_491dd6785815956b819f9e6c780ebe90bf86e303865332406dae3072da8fe58d->leave($__internal_491dd6785815956b819f9e6c780ebe90bf86e303865332406dae3072da8fe58d_prof);

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
