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
        $__internal_44b4bc3f371ad790d6448aed58dff8a65232bb9bf6c20af76ee6d9a86e5ffb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b4bc3f371ad790d6448aed58dff8a65232bb9bf6c20af76ee6d9a86e5ffb57->enter($__internal_44b4bc3f371ad790d6448aed58dff8a65232bb9bf6c20af76ee6d9a86e5ffb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_489af4ddd8ff38d18b2b8330935c78671b2e5874fc3bd7de015cf0f8884cb0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489af4ddd8ff38d18b2b8330935c78671b2e5874fc3bd7de015cf0f8884cb0c4->enter($__internal_489af4ddd8ff38d18b2b8330935c78671b2e5874fc3bd7de015cf0f8884cb0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_44b4bc3f371ad790d6448aed58dff8a65232bb9bf6c20af76ee6d9a86e5ffb57->leave($__internal_44b4bc3f371ad790d6448aed58dff8a65232bb9bf6c20af76ee6d9a86e5ffb57_prof);

        
        $__internal_489af4ddd8ff38d18b2b8330935c78671b2e5874fc3bd7de015cf0f8884cb0c4->leave($__internal_489af4ddd8ff38d18b2b8330935c78671b2e5874fc3bd7de015cf0f8884cb0c4_prof);

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
