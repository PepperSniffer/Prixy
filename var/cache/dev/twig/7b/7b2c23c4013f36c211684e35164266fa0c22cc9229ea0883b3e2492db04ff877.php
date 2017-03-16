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
        $__internal_9c6a9affb05bb9d052be08939b727aa9a6c5ee1136743ea08f6a0750bed1a91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6a9affb05bb9d052be08939b727aa9a6c5ee1136743ea08f6a0750bed1a91a->enter($__internal_9c6a9affb05bb9d052be08939b727aa9a6c5ee1136743ea08f6a0750bed1a91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_676489e2fab62084afe04a81c46f1145d03c895a83a6c2a288ae73a339faae3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676489e2fab62084afe04a81c46f1145d03c895a83a6c2a288ae73a339faae3f->enter($__internal_676489e2fab62084afe04a81c46f1145d03c895a83a6c2a288ae73a339faae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9c6a9affb05bb9d052be08939b727aa9a6c5ee1136743ea08f6a0750bed1a91a->leave($__internal_9c6a9affb05bb9d052be08939b727aa9a6c5ee1136743ea08f6a0750bed1a91a_prof);

        
        $__internal_676489e2fab62084afe04a81c46f1145d03c895a83a6c2a288ae73a339faae3f->leave($__internal_676489e2fab62084afe04a81c46f1145d03c895a83a6c2a288ae73a339faae3f_prof);

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
