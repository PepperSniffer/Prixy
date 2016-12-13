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
        $__internal_67bfce6084262dfccf5844cba046e7875a3874ce55ab57fec39c5882dab366b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bfce6084262dfccf5844cba046e7875a3874ce55ab57fec39c5882dab366b4->enter($__internal_67bfce6084262dfccf5844cba046e7875a3874ce55ab57fec39c5882dab366b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b622c8d8681c7a70c8a8c0d1e3c33465cddc8ccd211862f6e3727ac67342ad40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b622c8d8681c7a70c8a8c0d1e3c33465cddc8ccd211862f6e3727ac67342ad40->enter($__internal_b622c8d8681c7a70c8a8c0d1e3c33465cddc8ccd211862f6e3727ac67342ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_67bfce6084262dfccf5844cba046e7875a3874ce55ab57fec39c5882dab366b4->leave($__internal_67bfce6084262dfccf5844cba046e7875a3874ce55ab57fec39c5882dab366b4_prof);

        
        $__internal_b622c8d8681c7a70c8a8c0d1e3c33465cddc8ccd211862f6e3727ac67342ad40->leave($__internal_b622c8d8681c7a70c8a8c0d1e3c33465cddc8ccd211862f6e3727ac67342ad40_prof);

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
