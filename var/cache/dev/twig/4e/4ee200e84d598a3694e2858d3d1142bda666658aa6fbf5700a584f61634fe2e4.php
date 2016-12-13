<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_39f27beb16aa88b15efbead8018133d3c42b8025f7c924087b928382482ca8a2 extends Twig_Template
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
        $__internal_5791a0589f05efdab96f7bdc545a25f4e86bbc3981c9cff91f1434874e6c3144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5791a0589f05efdab96f7bdc545a25f4e86bbc3981c9cff91f1434874e6c3144->enter($__internal_5791a0589f05efdab96f7bdc545a25f4e86bbc3981c9cff91f1434874e6c3144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_88e1e326438e9ceae89dcbdd4acdba8d85743912850dd571774b6a33eb997407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e1e326438e9ceae89dcbdd4acdba8d85743912850dd571774b6a33eb997407->enter($__internal_88e1e326438e9ceae89dcbdd4acdba8d85743912850dd571774b6a33eb997407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5791a0589f05efdab96f7bdc545a25f4e86bbc3981c9cff91f1434874e6c3144->leave($__internal_5791a0589f05efdab96f7bdc545a25f4e86bbc3981c9cff91f1434874e6c3144_prof);

        
        $__internal_88e1e326438e9ceae89dcbdd4acdba8d85743912850dd571774b6a33eb997407->leave($__internal_88e1e326438e9ceae89dcbdd4acdba8d85743912850dd571774b6a33eb997407_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
