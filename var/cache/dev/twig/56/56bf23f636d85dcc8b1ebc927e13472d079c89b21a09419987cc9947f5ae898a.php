<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0504c9f789d42f9522b5542803f8085fe4fe6d0f13520aab58443ded8a7b077a extends Twig_Template
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
        $__internal_d106265a654e06d43a86f16663efba6e160594537a0a737aea75003f87e9abab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d106265a654e06d43a86f16663efba6e160594537a0a737aea75003f87e9abab->enter($__internal_d106265a654e06d43a86f16663efba6e160594537a0a737aea75003f87e9abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_db0b6cbd57ac0e9a2063857488d0294b49d2ce9d32c683d5e0245df609419570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0b6cbd57ac0e9a2063857488d0294b49d2ce9d32c683d5e0245df609419570->enter($__internal_db0b6cbd57ac0e9a2063857488d0294b49d2ce9d32c683d5e0245df609419570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d106265a654e06d43a86f16663efba6e160594537a0a737aea75003f87e9abab->leave($__internal_d106265a654e06d43a86f16663efba6e160594537a0a737aea75003f87e9abab_prof);

        
        $__internal_db0b6cbd57ac0e9a2063857488d0294b49d2ce9d32c683d5e0245df609419570->leave($__internal_db0b6cbd57ac0e9a2063857488d0294b49d2ce9d32c683d5e0245df609419570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
