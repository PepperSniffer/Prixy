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
        $__internal_78149e8d61e8b907db53d4121c46e19d4c24315073f55060046f81b14d944a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78149e8d61e8b907db53d4121c46e19d4c24315073f55060046f81b14d944a6e->enter($__internal_78149e8d61e8b907db53d4121c46e19d4c24315073f55060046f81b14d944a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4876e7e77af8dca58cf8137afee2830ecc440a8d6053c550c0f4044a76c1b987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4876e7e77af8dca58cf8137afee2830ecc440a8d6053c550c0f4044a76c1b987->enter($__internal_4876e7e77af8dca58cf8137afee2830ecc440a8d6053c550c0f4044a76c1b987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_78149e8d61e8b907db53d4121c46e19d4c24315073f55060046f81b14d944a6e->leave($__internal_78149e8d61e8b907db53d4121c46e19d4c24315073f55060046f81b14d944a6e_prof);

        
        $__internal_4876e7e77af8dca58cf8137afee2830ecc440a8d6053c550c0f4044a76c1b987->leave($__internal_4876e7e77af8dca58cf8137afee2830ecc440a8d6053c550c0f4044a76c1b987_prof);

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
