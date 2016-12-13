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
        $__internal_991a1800f6eb573b83a64c16386b941a1aac434d182114911d580b0d55d8cd7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991a1800f6eb573b83a64c16386b941a1aac434d182114911d580b0d55d8cd7b->enter($__internal_991a1800f6eb573b83a64c16386b941a1aac434d182114911d580b0d55d8cd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a53dec25deb9fc8f1c378c55e9f559721f10bf58ab0042454cc998f74217038b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53dec25deb9fc8f1c378c55e9f559721f10bf58ab0042454cc998f74217038b->enter($__internal_a53dec25deb9fc8f1c378c55e9f559721f10bf58ab0042454cc998f74217038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_991a1800f6eb573b83a64c16386b941a1aac434d182114911d580b0d55d8cd7b->leave($__internal_991a1800f6eb573b83a64c16386b941a1aac434d182114911d580b0d55d8cd7b_prof);

        
        $__internal_a53dec25deb9fc8f1c378c55e9f559721f10bf58ab0042454cc998f74217038b->leave($__internal_a53dec25deb9fc8f1c378c55e9f559721f10bf58ab0042454cc998f74217038b_prof);

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
