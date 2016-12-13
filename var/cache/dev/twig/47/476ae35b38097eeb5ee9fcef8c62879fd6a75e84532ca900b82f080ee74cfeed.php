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
        $__internal_b5adede7fa19ca9a845cb82ec76e9538e70ac4bf8c9509138af17166564913fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5adede7fa19ca9a845cb82ec76e9538e70ac4bf8c9509138af17166564913fd->enter($__internal_b5adede7fa19ca9a845cb82ec76e9538e70ac4bf8c9509138af17166564913fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7366c88c63a005e03bd50b4973bc442899ac4266cbd2c5f847fdefc7e22d75c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7366c88c63a005e03bd50b4973bc442899ac4266cbd2c5f847fdefc7e22d75c1->enter($__internal_7366c88c63a005e03bd50b4973bc442899ac4266cbd2c5f847fdefc7e22d75c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_b5adede7fa19ca9a845cb82ec76e9538e70ac4bf8c9509138af17166564913fd->leave($__internal_b5adede7fa19ca9a845cb82ec76e9538e70ac4bf8c9509138af17166564913fd_prof);

        
        $__internal_7366c88c63a005e03bd50b4973bc442899ac4266cbd2c5f847fdefc7e22d75c1->leave($__internal_7366c88c63a005e03bd50b4973bc442899ac4266cbd2c5f847fdefc7e22d75c1_prof);

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
