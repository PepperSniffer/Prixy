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
        $__internal_1198a51e6a4141bd82c3ce502f5daee7cf6efc7a5af7ed174b6ac895a19209df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1198a51e6a4141bd82c3ce502f5daee7cf6efc7a5af7ed174b6ac895a19209df->enter($__internal_1198a51e6a4141bd82c3ce502f5daee7cf6efc7a5af7ed174b6ac895a19209df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_249bb7fcbc1e9e37590e58ad2a60551c34d85683d3988ed0e716e4ef8cd2e855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249bb7fcbc1e9e37590e58ad2a60551c34d85683d3988ed0e716e4ef8cd2e855->enter($__internal_249bb7fcbc1e9e37590e58ad2a60551c34d85683d3988ed0e716e4ef8cd2e855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1198a51e6a4141bd82c3ce502f5daee7cf6efc7a5af7ed174b6ac895a19209df->leave($__internal_1198a51e6a4141bd82c3ce502f5daee7cf6efc7a5af7ed174b6ac895a19209df_prof);

        
        $__internal_249bb7fcbc1e9e37590e58ad2a60551c34d85683d3988ed0e716e4ef8cd2e855->leave($__internal_249bb7fcbc1e9e37590e58ad2a60551c34d85683d3988ed0e716e4ef8cd2e855_prof);

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
