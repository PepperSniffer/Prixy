<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a3d4e3cbe4cb57abfc4d14baae2b4afb68f82ac015252795286279313181e923 extends Twig_Template
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
        $__internal_939c87b41648375c2e3087ca3d51d8b3cb51a4b2d8d99e61ea67a9e8d7925225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939c87b41648375c2e3087ca3d51d8b3cb51a4b2d8d99e61ea67a9e8d7925225->enter($__internal_939c87b41648375c2e3087ca3d51d8b3cb51a4b2d8d99e61ea67a9e8d7925225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_26ee8b355ffdfdefa01e3ec499b44ddbb3a3fee5c1b7470a6206ca2d75221483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ee8b355ffdfdefa01e3ec499b44ddbb3a3fee5c1b7470a6206ca2d75221483->enter($__internal_26ee8b355ffdfdefa01e3ec499b44ddbb3a3fee5c1b7470a6206ca2d75221483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_939c87b41648375c2e3087ca3d51d8b3cb51a4b2d8d99e61ea67a9e8d7925225->leave($__internal_939c87b41648375c2e3087ca3d51d8b3cb51a4b2d8d99e61ea67a9e8d7925225_prof);

        
        $__internal_26ee8b355ffdfdefa01e3ec499b44ddbb3a3fee5c1b7470a6206ca2d75221483->leave($__internal_26ee8b355ffdfdefa01e3ec499b44ddbb3a3fee5c1b7470a6206ca2d75221483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
