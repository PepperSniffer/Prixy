<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2c2cf2f73569b9118ab610043a44726e8b23579041ac85c363ecbc84c0228913 extends Twig_Template
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
        $__internal_201521e524dd2bc069f5cfc720874554de1e3d2fe857eb0d1c3f56851f5bce94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201521e524dd2bc069f5cfc720874554de1e3d2fe857eb0d1c3f56851f5bce94->enter($__internal_201521e524dd2bc069f5cfc720874554de1e3d2fe857eb0d1c3f56851f5bce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ec46c59e24aa9607fb64f5269db5fd954a06bc1e8aa9c259ab6b655daeee2cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec46c59e24aa9607fb64f5269db5fd954a06bc1e8aa9c259ab6b655daeee2cf2->enter($__internal_ec46c59e24aa9607fb64f5269db5fd954a06bc1e8aa9c259ab6b655daeee2cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_201521e524dd2bc069f5cfc720874554de1e3d2fe857eb0d1c3f56851f5bce94->leave($__internal_201521e524dd2bc069f5cfc720874554de1e3d2fe857eb0d1c3f56851f5bce94_prof);

        
        $__internal_ec46c59e24aa9607fb64f5269db5fd954a06bc1e8aa9c259ab6b655daeee2cf2->leave($__internal_ec46c59e24aa9607fb64f5269db5fd954a06bc1e8aa9c259ab6b655daeee2cf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
