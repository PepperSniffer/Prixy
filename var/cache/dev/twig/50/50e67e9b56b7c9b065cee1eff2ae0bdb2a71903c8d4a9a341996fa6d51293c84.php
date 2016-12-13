<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a163a71bf4948f2263beec3ea15c6bcb52bdcc803b4c92792e8d3ee9b063617d extends Twig_Template
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
        $__internal_5b9509c630dbbb27dc63d4c3cf0a87df892b482d90594436944f9247abcfa0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9509c630dbbb27dc63d4c3cf0a87df892b482d90594436944f9247abcfa0e0->enter($__internal_5b9509c630dbbb27dc63d4c3cf0a87df892b482d90594436944f9247abcfa0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_83938ae52aa270b836fb925659e35d5b9a6feab16a67906018cabcd59d00cb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83938ae52aa270b836fb925659e35d5b9a6feab16a67906018cabcd59d00cb07->enter($__internal_83938ae52aa270b836fb925659e35d5b9a6feab16a67906018cabcd59d00cb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5b9509c630dbbb27dc63d4c3cf0a87df892b482d90594436944f9247abcfa0e0->leave($__internal_5b9509c630dbbb27dc63d4c3cf0a87df892b482d90594436944f9247abcfa0e0_prof);

        
        $__internal_83938ae52aa270b836fb925659e35d5b9a6feab16a67906018cabcd59d00cb07->leave($__internal_83938ae52aa270b836fb925659e35d5b9a6feab16a67906018cabcd59d00cb07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
