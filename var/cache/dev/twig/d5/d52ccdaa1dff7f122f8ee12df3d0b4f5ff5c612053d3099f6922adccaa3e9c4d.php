<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c851fa53a17208ef0fc654d9d2baee7a96c9cd9c8e91966b1f05b8efac295a20 extends Twig_Template
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
        $__internal_faca4aab07fbb64acde3d16308d9d8d66cb2449d1aad2cd6706a7b33fc71b765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faca4aab07fbb64acde3d16308d9d8d66cb2449d1aad2cd6706a7b33fc71b765->enter($__internal_faca4aab07fbb64acde3d16308d9d8d66cb2449d1aad2cd6706a7b33fc71b765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9f962e94bd7d77344c8d038d90a06256bb0e76499d71c6947d972d04c47624fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f962e94bd7d77344c8d038d90a06256bb0e76499d71c6947d972d04c47624fd->enter($__internal_9f962e94bd7d77344c8d038d90a06256bb0e76499d71c6947d972d04c47624fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_faca4aab07fbb64acde3d16308d9d8d66cb2449d1aad2cd6706a7b33fc71b765->leave($__internal_faca4aab07fbb64acde3d16308d9d8d66cb2449d1aad2cd6706a7b33fc71b765_prof);

        
        $__internal_9f962e94bd7d77344c8d038d90a06256bb0e76499d71c6947d972d04c47624fd->leave($__internal_9f962e94bd7d77344c8d038d90a06256bb0e76499d71c6947d972d04c47624fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
