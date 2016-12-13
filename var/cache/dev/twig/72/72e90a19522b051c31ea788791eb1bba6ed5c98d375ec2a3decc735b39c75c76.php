<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2bb2a18bd545a498d81be4b2d3d0a34524bcee1aa900fdb0134552e58b8b023a extends Twig_Template
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
        $__internal_b96043b6925f51cff33533efc5dc86b0090f90b7eb65fac7a9b8d178e05a0355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96043b6925f51cff33533efc5dc86b0090f90b7eb65fac7a9b8d178e05a0355->enter($__internal_b96043b6925f51cff33533efc5dc86b0090f90b7eb65fac7a9b8d178e05a0355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0079247d1ccdfaac024022eba5e4678ba01806c47a5cf61ad3e8ea5d3669cce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0079247d1ccdfaac024022eba5e4678ba01806c47a5cf61ad3e8ea5d3669cce1->enter($__internal_0079247d1ccdfaac024022eba5e4678ba01806c47a5cf61ad3e8ea5d3669cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b96043b6925f51cff33533efc5dc86b0090f90b7eb65fac7a9b8d178e05a0355->leave($__internal_b96043b6925f51cff33533efc5dc86b0090f90b7eb65fac7a9b8d178e05a0355_prof);

        
        $__internal_0079247d1ccdfaac024022eba5e4678ba01806c47a5cf61ad3e8ea5d3669cce1->leave($__internal_0079247d1ccdfaac024022eba5e4678ba01806c47a5cf61ad3e8ea5d3669cce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
