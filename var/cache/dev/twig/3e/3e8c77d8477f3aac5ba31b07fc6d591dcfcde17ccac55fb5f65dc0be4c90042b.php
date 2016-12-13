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
        $__internal_ed60f86e5d967eb8a3a1d8b0dc492aef767b21e45444ed42f11f562e039f4d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed60f86e5d967eb8a3a1d8b0dc492aef767b21e45444ed42f11f562e039f4d61->enter($__internal_ed60f86e5d967eb8a3a1d8b0dc492aef767b21e45444ed42f11f562e039f4d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_63d2732d7c1fb053ff7d0f8bee9c47ed7c7b8282642fa62b8c919e72e6cf1258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d2732d7c1fb053ff7d0f8bee9c47ed7c7b8282642fa62b8c919e72e6cf1258->enter($__internal_63d2732d7c1fb053ff7d0f8bee9c47ed7c7b8282642fa62b8c919e72e6cf1258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ed60f86e5d967eb8a3a1d8b0dc492aef767b21e45444ed42f11f562e039f4d61->leave($__internal_ed60f86e5d967eb8a3a1d8b0dc492aef767b21e45444ed42f11f562e039f4d61_prof);

        
        $__internal_63d2732d7c1fb053ff7d0f8bee9c47ed7c7b8282642fa62b8c919e72e6cf1258->leave($__internal_63d2732d7c1fb053ff7d0f8bee9c47ed7c7b8282642fa62b8c919e72e6cf1258_prof);

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
