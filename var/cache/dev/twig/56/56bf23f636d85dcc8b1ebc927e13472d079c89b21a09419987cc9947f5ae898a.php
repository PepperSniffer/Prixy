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
        $__internal_76f99196b8ea9332cee1b2e9dfb22bc791f00f1be67b7e2e4aebb517e47fe1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f99196b8ea9332cee1b2e9dfb22bc791f00f1be67b7e2e4aebb517e47fe1a0->enter($__internal_76f99196b8ea9332cee1b2e9dfb22bc791f00f1be67b7e2e4aebb517e47fe1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2a9d69ad862f18d435a2db3b23d03146ac021d4c37b10fcc58ab7ea66df4d46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9d69ad862f18d435a2db3b23d03146ac021d4c37b10fcc58ab7ea66df4d46a->enter($__internal_2a9d69ad862f18d435a2db3b23d03146ac021d4c37b10fcc58ab7ea66df4d46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_76f99196b8ea9332cee1b2e9dfb22bc791f00f1be67b7e2e4aebb517e47fe1a0->leave($__internal_76f99196b8ea9332cee1b2e9dfb22bc791f00f1be67b7e2e4aebb517e47fe1a0_prof);

        
        $__internal_2a9d69ad862f18d435a2db3b23d03146ac021d4c37b10fcc58ab7ea66df4d46a->leave($__internal_2a9d69ad862f18d435a2db3b23d03146ac021d4c37b10fcc58ab7ea66df4d46a_prof);

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
