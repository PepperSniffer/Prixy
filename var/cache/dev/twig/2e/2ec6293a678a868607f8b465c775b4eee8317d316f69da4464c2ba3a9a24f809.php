<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6936fad4f5beb88b80e8c2fb137c7972636a5478c4414491d44feebc032a2739 extends Twig_Template
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
        $__internal_ce85f14e0d6ee9d7ebb90d81c554dd66307628a8527e7254f7b289b10a5ecae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce85f14e0d6ee9d7ebb90d81c554dd66307628a8527e7254f7b289b10a5ecae2->enter($__internal_ce85f14e0d6ee9d7ebb90d81c554dd66307628a8527e7254f7b289b10a5ecae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d9dc64ea9840c165cd7367ceae9ba3801a80e356ac10bb4ad594ea0a5667356f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dc64ea9840c165cd7367ceae9ba3801a80e356ac10bb4ad594ea0a5667356f->enter($__internal_d9dc64ea9840c165cd7367ceae9ba3801a80e356ac10bb4ad594ea0a5667356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ce85f14e0d6ee9d7ebb90d81c554dd66307628a8527e7254f7b289b10a5ecae2->leave($__internal_ce85f14e0d6ee9d7ebb90d81c554dd66307628a8527e7254f7b289b10a5ecae2_prof);

        
        $__internal_d9dc64ea9840c165cd7367ceae9ba3801a80e356ac10bb4ad594ea0a5667356f->leave($__internal_d9dc64ea9840c165cd7367ceae9ba3801a80e356ac10bb4ad594ea0a5667356f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
