<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2737e8560ac8abac97e7802f6b666433c87cefd730f89778bf20b91c66b86ac8 extends Twig_Template
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
        $__internal_4a5ad232dbe2270ae11837987bbca9975a555d1a62bfbdacc16c4c800b9c0e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5ad232dbe2270ae11837987bbca9975a555d1a62bfbdacc16c4c800b9c0e41->enter($__internal_4a5ad232dbe2270ae11837987bbca9975a555d1a62bfbdacc16c4c800b9c0e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a7377eaad2a0597b3f6c2adb5bf14468cdf4eb947115ab822d0529d2a35df906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7377eaad2a0597b3f6c2adb5bf14468cdf4eb947115ab822d0529d2a35df906->enter($__internal_a7377eaad2a0597b3f6c2adb5bf14468cdf4eb947115ab822d0529d2a35df906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4a5ad232dbe2270ae11837987bbca9975a555d1a62bfbdacc16c4c800b9c0e41->leave($__internal_4a5ad232dbe2270ae11837987bbca9975a555d1a62bfbdacc16c4c800b9c0e41_prof);

        
        $__internal_a7377eaad2a0597b3f6c2adb5bf14468cdf4eb947115ab822d0529d2a35df906->leave($__internal_a7377eaad2a0597b3f6c2adb5bf14468cdf4eb947115ab822d0529d2a35df906_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
