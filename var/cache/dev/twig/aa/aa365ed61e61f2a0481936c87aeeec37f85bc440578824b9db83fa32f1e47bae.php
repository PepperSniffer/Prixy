<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b8c1a05133730f53346d0b108e3298746585749998083818cfcf6cfa60211ea7 extends Twig_Template
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
        $__internal_83cd87167b1092c4033616efb06004f2354022104c9da2545aac570d5666cd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cd87167b1092c4033616efb06004f2354022104c9da2545aac570d5666cd5c->enter($__internal_83cd87167b1092c4033616efb06004f2354022104c9da2545aac570d5666cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8a70eab64da4cb9e51c9fa009e5b701dc008540926c3e7afb0d2090cd48525ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a70eab64da4cb9e51c9fa009e5b701dc008540926c3e7afb0d2090cd48525ca->enter($__internal_8a70eab64da4cb9e51c9fa009e5b701dc008540926c3e7afb0d2090cd48525ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_83cd87167b1092c4033616efb06004f2354022104c9da2545aac570d5666cd5c->leave($__internal_83cd87167b1092c4033616efb06004f2354022104c9da2545aac570d5666cd5c_prof);

        
        $__internal_8a70eab64da4cb9e51c9fa009e5b701dc008540926c3e7afb0d2090cd48525ca->leave($__internal_8a70eab64da4cb9e51c9fa009e5b701dc008540926c3e7afb0d2090cd48525ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
