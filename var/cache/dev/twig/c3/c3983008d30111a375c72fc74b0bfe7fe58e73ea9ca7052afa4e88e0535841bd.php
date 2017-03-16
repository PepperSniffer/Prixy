<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_80d9136597a9168e5db9bbbfb48f5d387590513e12ad3efdd3052a8f59fc3234 extends Twig_Template
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
        $__internal_d4b8806780a25975c2392bae5bb7cf5f6d1d1e14bfaac0d178f5bb7bbba1bf36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b8806780a25975c2392bae5bb7cf5f6d1d1e14bfaac0d178f5bb7bbba1bf36->enter($__internal_d4b8806780a25975c2392bae5bb7cf5f6d1d1e14bfaac0d178f5bb7bbba1bf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_104bc10b4c347a76fe7ab457e11fea34c0555628df425f6b09157136470073bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104bc10b4c347a76fe7ab457e11fea34c0555628df425f6b09157136470073bc->enter($__internal_104bc10b4c347a76fe7ab457e11fea34c0555628df425f6b09157136470073bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d4b8806780a25975c2392bae5bb7cf5f6d1d1e14bfaac0d178f5bb7bbba1bf36->leave($__internal_d4b8806780a25975c2392bae5bb7cf5f6d1d1e14bfaac0d178f5bb7bbba1bf36_prof);

        
        $__internal_104bc10b4c347a76fe7ab457e11fea34c0555628df425f6b09157136470073bc->leave($__internal_104bc10b4c347a76fe7ab457e11fea34c0555628df425f6b09157136470073bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
