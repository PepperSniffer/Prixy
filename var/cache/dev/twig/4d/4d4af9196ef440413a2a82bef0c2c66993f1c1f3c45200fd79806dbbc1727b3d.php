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
        $__internal_3587537309b3c452cd7f314a084d25830985580c8e93741052114f6970a14f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3587537309b3c452cd7f314a084d25830985580c8e93741052114f6970a14f21->enter($__internal_3587537309b3c452cd7f314a084d25830985580c8e93741052114f6970a14f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e815959c3b97880d8b32b8da86cf282aa7c82f3e508cd4eb79dd58392c002c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e815959c3b97880d8b32b8da86cf282aa7c82f3e508cd4eb79dd58392c002c80->enter($__internal_e815959c3b97880d8b32b8da86cf282aa7c82f3e508cd4eb79dd58392c002c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3587537309b3c452cd7f314a084d25830985580c8e93741052114f6970a14f21->leave($__internal_3587537309b3c452cd7f314a084d25830985580c8e93741052114f6970a14f21_prof);

        
        $__internal_e815959c3b97880d8b32b8da86cf282aa7c82f3e508cd4eb79dd58392c002c80->leave($__internal_e815959c3b97880d8b32b8da86cf282aa7c82f3e508cd4eb79dd58392c002c80_prof);

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
