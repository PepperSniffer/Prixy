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
        $__internal_b3c8180b21ddc4cf159b0689f43517a6d5ebb675cce12b899d871440b64a2496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c8180b21ddc4cf159b0689f43517a6d5ebb675cce12b899d871440b64a2496->enter($__internal_b3c8180b21ddc4cf159b0689f43517a6d5ebb675cce12b899d871440b64a2496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fe8bf2fce26c1b47265ff62bc2051997898d91793ac2e4e18768f13efcaaec92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8bf2fce26c1b47265ff62bc2051997898d91793ac2e4e18768f13efcaaec92->enter($__internal_fe8bf2fce26c1b47265ff62bc2051997898d91793ac2e4e18768f13efcaaec92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b3c8180b21ddc4cf159b0689f43517a6d5ebb675cce12b899d871440b64a2496->leave($__internal_b3c8180b21ddc4cf159b0689f43517a6d5ebb675cce12b899d871440b64a2496_prof);

        
        $__internal_fe8bf2fce26c1b47265ff62bc2051997898d91793ac2e4e18768f13efcaaec92->leave($__internal_fe8bf2fce26c1b47265ff62bc2051997898d91793ac2e4e18768f13efcaaec92_prof);

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
