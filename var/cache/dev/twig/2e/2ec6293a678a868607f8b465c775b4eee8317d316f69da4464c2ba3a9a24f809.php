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
        $__internal_e956879b457672488ad5b5be8fba0edbe8419ad3fd5a9a3831538cc927857b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e956879b457672488ad5b5be8fba0edbe8419ad3fd5a9a3831538cc927857b0e->enter($__internal_e956879b457672488ad5b5be8fba0edbe8419ad3fd5a9a3831538cc927857b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_aed2939495dea61bfe46d79b4d4c761a0153c24afd5bdf44a1d36f72812f3445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed2939495dea61bfe46d79b4d4c761a0153c24afd5bdf44a1d36f72812f3445->enter($__internal_aed2939495dea61bfe46d79b4d4c761a0153c24afd5bdf44a1d36f72812f3445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e956879b457672488ad5b5be8fba0edbe8419ad3fd5a9a3831538cc927857b0e->leave($__internal_e956879b457672488ad5b5be8fba0edbe8419ad3fd5a9a3831538cc927857b0e_prof);

        
        $__internal_aed2939495dea61bfe46d79b4d4c761a0153c24afd5bdf44a1d36f72812f3445->leave($__internal_aed2939495dea61bfe46d79b4d4c761a0153c24afd5bdf44a1d36f72812f3445_prof);

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
