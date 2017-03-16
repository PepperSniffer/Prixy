<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6242aee5452201491ce0f9367a3e3d6a4cf7900f5ad8977c1fcf7a13cb277ff9 extends Twig_Template
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
        $__internal_93f76ccc4b243dd9d340f6d2f366227e6860e667a6a4feeb74920fc3e5fa9549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f76ccc4b243dd9d340f6d2f366227e6860e667a6a4feeb74920fc3e5fa9549->enter($__internal_93f76ccc4b243dd9d340f6d2f366227e6860e667a6a4feeb74920fc3e5fa9549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b5ef41ecbfe39d8c34facbc8f455214ee5f093b2769a43c57aad41fcc0bde6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ef41ecbfe39d8c34facbc8f455214ee5f093b2769a43c57aad41fcc0bde6f8->enter($__internal_b5ef41ecbfe39d8c34facbc8f455214ee5f093b2769a43c57aad41fcc0bde6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_93f76ccc4b243dd9d340f6d2f366227e6860e667a6a4feeb74920fc3e5fa9549->leave($__internal_93f76ccc4b243dd9d340f6d2f366227e6860e667a6a4feeb74920fc3e5fa9549_prof);

        
        $__internal_b5ef41ecbfe39d8c34facbc8f455214ee5f093b2769a43c57aad41fcc0bde6f8->leave($__internal_b5ef41ecbfe39d8c34facbc8f455214ee5f093b2769a43c57aad41fcc0bde6f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
