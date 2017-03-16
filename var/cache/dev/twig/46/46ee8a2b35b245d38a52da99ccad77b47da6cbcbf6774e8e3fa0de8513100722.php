<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_a7080399e38ec61843c03a2b2e458617a1405e17a7a1b6ac954af337bae01c13 extends Twig_Template
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
        $__internal_2ad8dfcf4bbafa2b4d6c8df46e8ad2571595b3e7007c86e6ee0ca7bb33f874f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad8dfcf4bbafa2b4d6c8df46e8ad2571595b3e7007c86e6ee0ca7bb33f874f3->enter($__internal_2ad8dfcf4bbafa2b4d6c8df46e8ad2571595b3e7007c86e6ee0ca7bb33f874f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_8b586344a1b58afcf5c8b232d2c9e32c816583c4d40aa18ede346a63e2e347ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b586344a1b58afcf5c8b232d2c9e32c816583c4d40aa18ede346a63e2e347ff->enter($__internal_8b586344a1b58afcf5c8b232d2c9e32c816583c4d40aa18ede346a63e2e347ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_2ad8dfcf4bbafa2b4d6c8df46e8ad2571595b3e7007c86e6ee0ca7bb33f874f3->leave($__internal_2ad8dfcf4bbafa2b4d6c8df46e8ad2571595b3e7007c86e6ee0ca7bb33f874f3_prof);

        
        $__internal_8b586344a1b58afcf5c8b232d2c9e32c816583c4d40aa18ede346a63e2e347ff->leave($__internal_8b586344a1b58afcf5c8b232d2c9e32c816583c4d40aa18ede346a63e2e347ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
