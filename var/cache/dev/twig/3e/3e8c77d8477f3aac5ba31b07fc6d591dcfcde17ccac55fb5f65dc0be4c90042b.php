<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_65393b2f6171c0b2c987f9d599b917a18dcc137697c6fd45bd7e977088696a68 extends Twig_Template
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
        $__internal_beacb453abfd33cd0101c702ef160c9eb528add9ed7f5abe3f123ede5430de82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beacb453abfd33cd0101c702ef160c9eb528add9ed7f5abe3f123ede5430de82->enter($__internal_beacb453abfd33cd0101c702ef160c9eb528add9ed7f5abe3f123ede5430de82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_51fd36b864c0fb22f514e5c34aa34007e3b64cc870f25b169e69cb90d3c86136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fd36b864c0fb22f514e5c34aa34007e3b64cc870f25b169e69cb90d3c86136->enter($__internal_51fd36b864c0fb22f514e5c34aa34007e3b64cc870f25b169e69cb90d3c86136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_beacb453abfd33cd0101c702ef160c9eb528add9ed7f5abe3f123ede5430de82->leave($__internal_beacb453abfd33cd0101c702ef160c9eb528add9ed7f5abe3f123ede5430de82_prof);

        
        $__internal_51fd36b864c0fb22f514e5c34aa34007e3b64cc870f25b169e69cb90d3c86136->leave($__internal_51fd36b864c0fb22f514e5c34aa34007e3b64cc870f25b169e69cb90d3c86136_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
