<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_56cec01b0f81f4f91c640a7043fcb1019b4f5bb2381a9556741b46daebc92fa3 extends Twig_Template
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
        $__internal_fe6b1ab289aa8da673e39ddd472982af7645f73dcd3d62819a2705723df7473c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6b1ab289aa8da673e39ddd472982af7645f73dcd3d62819a2705723df7473c->enter($__internal_fe6b1ab289aa8da673e39ddd472982af7645f73dcd3d62819a2705723df7473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f12a9d8de7dbec97038cc1dca0cac73437ad29d431347927bbf3c2f3b1a7da60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12a9d8de7dbec97038cc1dca0cac73437ad29d431347927bbf3c2f3b1a7da60->enter($__internal_f12a9d8de7dbec97038cc1dca0cac73437ad29d431347927bbf3c2f3b1a7da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fe6b1ab289aa8da673e39ddd472982af7645f73dcd3d62819a2705723df7473c->leave($__internal_fe6b1ab289aa8da673e39ddd472982af7645f73dcd3d62819a2705723df7473c_prof);

        
        $__internal_f12a9d8de7dbec97038cc1dca0cac73437ad29d431347927bbf3c2f3b1a7da60->leave($__internal_f12a9d8de7dbec97038cc1dca0cac73437ad29d431347927bbf3c2f3b1a7da60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
