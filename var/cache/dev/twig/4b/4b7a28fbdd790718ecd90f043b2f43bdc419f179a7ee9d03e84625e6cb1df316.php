<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_bf875bf324b0b587500970702ec04a9836bc8700f448530153ca80fc0f54d180 extends Twig_Template
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
        $__internal_b729211b78e12101a1af9be09d0af7f70d3e6e5fb80beb3a405f83cac1dab752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b729211b78e12101a1af9be09d0af7f70d3e6e5fb80beb3a405f83cac1dab752->enter($__internal_b729211b78e12101a1af9be09d0af7f70d3e6e5fb80beb3a405f83cac1dab752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4713ac45725bb6a34151daf1751d8b75b0227d3f722f65d7f7136bb7acc95384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4713ac45725bb6a34151daf1751d8b75b0227d3f722f65d7f7136bb7acc95384->enter($__internal_4713ac45725bb6a34151daf1751d8b75b0227d3f722f65d7f7136bb7acc95384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b729211b78e12101a1af9be09d0af7f70d3e6e5fb80beb3a405f83cac1dab752->leave($__internal_b729211b78e12101a1af9be09d0af7f70d3e6e5fb80beb3a405f83cac1dab752_prof);

        
        $__internal_4713ac45725bb6a34151daf1751d8b75b0227d3f722f65d7f7136bb7acc95384->leave($__internal_4713ac45725bb6a34151daf1751d8b75b0227d3f722f65d7f7136bb7acc95384_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
