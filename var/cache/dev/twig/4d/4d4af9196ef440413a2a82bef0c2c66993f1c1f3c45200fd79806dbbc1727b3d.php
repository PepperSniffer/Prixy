<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_10c9418e76c83c3265bbdbf81adb7a6fa10e35f5eddf5f68fac1b28218f0b447 extends Twig_Template
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
        $__internal_47eecb9318b7f51bac89d4fceeb7ad2d597bd6f20f13891282f5c5c15332237b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47eecb9318b7f51bac89d4fceeb7ad2d597bd6f20f13891282f5c5c15332237b->enter($__internal_47eecb9318b7f51bac89d4fceeb7ad2d597bd6f20f13891282f5c5c15332237b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_db96dcec33610205a8c60e7178cb2d9c91be658520c84e023b02226cf2807562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db96dcec33610205a8c60e7178cb2d9c91be658520c84e023b02226cf2807562->enter($__internal_db96dcec33610205a8c60e7178cb2d9c91be658520c84e023b02226cf2807562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_47eecb9318b7f51bac89d4fceeb7ad2d597bd6f20f13891282f5c5c15332237b->leave($__internal_47eecb9318b7f51bac89d4fceeb7ad2d597bd6f20f13891282f5c5c15332237b_prof);

        
        $__internal_db96dcec33610205a8c60e7178cb2d9c91be658520c84e023b02226cf2807562->leave($__internal_db96dcec33610205a8c60e7178cb2d9c91be658520c84e023b02226cf2807562_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
