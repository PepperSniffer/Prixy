<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6705f313552d0abf26620f5fb1aa9ccce7e26efc1fb2f35b4cbde4cba6be04af extends Twig_Template
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
        $__internal_3e93c124a734050fde90f98e5e0925e7b92d824a0351d4d06f8467c9634b2672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e93c124a734050fde90f98e5e0925e7b92d824a0351d4d06f8467c9634b2672->enter($__internal_3e93c124a734050fde90f98e5e0925e7b92d824a0351d4d06f8467c9634b2672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_627d3eadab8549cf1811b3b3becf9a340a75c0f09b6de64b59985841c681f9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627d3eadab8549cf1811b3b3becf9a340a75c0f09b6de64b59985841c681f9e4->enter($__internal_627d3eadab8549cf1811b3b3becf9a340a75c0f09b6de64b59985841c681f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3e93c124a734050fde90f98e5e0925e7b92d824a0351d4d06f8467c9634b2672->leave($__internal_3e93c124a734050fde90f98e5e0925e7b92d824a0351d4d06f8467c9634b2672_prof);

        
        $__internal_627d3eadab8549cf1811b3b3becf9a340a75c0f09b6de64b59985841c681f9e4->leave($__internal_627d3eadab8549cf1811b3b3becf9a340a75c0f09b6de64b59985841c681f9e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
