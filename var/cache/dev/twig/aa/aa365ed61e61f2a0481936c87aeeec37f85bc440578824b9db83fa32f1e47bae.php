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
        $__internal_2364cce73a4474afb42cac3d5dcbe9daa2dc7c0062d58590052322d0b9a77fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2364cce73a4474afb42cac3d5dcbe9daa2dc7c0062d58590052322d0b9a77fb4->enter($__internal_2364cce73a4474afb42cac3d5dcbe9daa2dc7c0062d58590052322d0b9a77fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d0e8687d6b9b46dd0a16720a1f9cd1af176a0a2de8f059a544136f12ad4b1ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e8687d6b9b46dd0a16720a1f9cd1af176a0a2de8f059a544136f12ad4b1ead->enter($__internal_d0e8687d6b9b46dd0a16720a1f9cd1af176a0a2de8f059a544136f12ad4b1ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2364cce73a4474afb42cac3d5dcbe9daa2dc7c0062d58590052322d0b9a77fb4->leave($__internal_2364cce73a4474afb42cac3d5dcbe9daa2dc7c0062d58590052322d0b9a77fb4_prof);

        
        $__internal_d0e8687d6b9b46dd0a16720a1f9cd1af176a0a2de8f059a544136f12ad4b1ead->leave($__internal_d0e8687d6b9b46dd0a16720a1f9cd1af176a0a2de8f059a544136f12ad4b1ead_prof);

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
