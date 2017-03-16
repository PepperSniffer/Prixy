<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0504c9f789d42f9522b5542803f8085fe4fe6d0f13520aab58443ded8a7b077a extends Twig_Template
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
        $__internal_dfea6f6fac1bbe40b4894018f7fc47271ee8a94861cc8df853c24b379a445444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfea6f6fac1bbe40b4894018f7fc47271ee8a94861cc8df853c24b379a445444->enter($__internal_dfea6f6fac1bbe40b4894018f7fc47271ee8a94861cc8df853c24b379a445444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b0bdace895d01812a0f60812be723dd3dbe2f195237d5154e5c4325c9ed6be69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bdace895d01812a0f60812be723dd3dbe2f195237d5154e5c4325c9ed6be69->enter($__internal_b0bdace895d01812a0f60812be723dd3dbe2f195237d5154e5c4325c9ed6be69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dfea6f6fac1bbe40b4894018f7fc47271ee8a94861cc8df853c24b379a445444->leave($__internal_dfea6f6fac1bbe40b4894018f7fc47271ee8a94861cc8df853c24b379a445444_prof);

        
        $__internal_b0bdace895d01812a0f60812be723dd3dbe2f195237d5154e5c4325c9ed6be69->leave($__internal_b0bdace895d01812a0f60812be723dd3dbe2f195237d5154e5c4325c9ed6be69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
