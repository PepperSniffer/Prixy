<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_16f96c7c3631d363b35adba46b81626bd5c6827be6e486a1b75577b3d461637b extends Twig_Template
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
        $__internal_120d7afd9e9b3752ba138c92efae8d19f87a2fe500ca3832bd6217376cf32e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120d7afd9e9b3752ba138c92efae8d19f87a2fe500ca3832bd6217376cf32e22->enter($__internal_120d7afd9e9b3752ba138c92efae8d19f87a2fe500ca3832bd6217376cf32e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e110a5e8aa36f534818a7a987931c09e5359c72ce37e62a18193dba241165871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e110a5e8aa36f534818a7a987931c09e5359c72ce37e62a18193dba241165871->enter($__internal_e110a5e8aa36f534818a7a987931c09e5359c72ce37e62a18193dba241165871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_120d7afd9e9b3752ba138c92efae8d19f87a2fe500ca3832bd6217376cf32e22->leave($__internal_120d7afd9e9b3752ba138c92efae8d19f87a2fe500ca3832bd6217376cf32e22_prof);

        
        $__internal_e110a5e8aa36f534818a7a987931c09e5359c72ce37e62a18193dba241165871->leave($__internal_e110a5e8aa36f534818a7a987931c09e5359c72ce37e62a18193dba241165871_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
