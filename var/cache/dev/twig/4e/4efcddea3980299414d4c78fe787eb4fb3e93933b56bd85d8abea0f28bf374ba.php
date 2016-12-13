<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0a11fecc7b4583ade9f14d2f486080bea97e13b1637e880cba5df3e9aa125846 extends Twig_Template
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
        $__internal_d3b163238a03cd446487b215e47560c4ea5cab02598dbe8376ff2d9950462ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b163238a03cd446487b215e47560c4ea5cab02598dbe8376ff2d9950462ac8->enter($__internal_d3b163238a03cd446487b215e47560c4ea5cab02598dbe8376ff2d9950462ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f277cd9a7adcad5b40f686dcf6dff01f11c84e2b707175c103e32d9a04e0fbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f277cd9a7adcad5b40f686dcf6dff01f11c84e2b707175c103e32d9a04e0fbf8->enter($__internal_f277cd9a7adcad5b40f686dcf6dff01f11c84e2b707175c103e32d9a04e0fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d3b163238a03cd446487b215e47560c4ea5cab02598dbe8376ff2d9950462ac8->leave($__internal_d3b163238a03cd446487b215e47560c4ea5cab02598dbe8376ff2d9950462ac8_prof);

        
        $__internal_f277cd9a7adcad5b40f686dcf6dff01f11c84e2b707175c103e32d9a04e0fbf8->leave($__internal_f277cd9a7adcad5b40f686dcf6dff01f11c84e2b707175c103e32d9a04e0fbf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
