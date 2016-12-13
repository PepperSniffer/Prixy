<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6541f816d0dfffaacc87329fd4fc4f2db0df6e65364dca2e3b711e7a969d4ff4 extends Twig_Template
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
        $__internal_2b0ee66233dc1c69a69d7f7cb50416d202ac91ece227c12355015a43d3232766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0ee66233dc1c69a69d7f7cb50416d202ac91ece227c12355015a43d3232766->enter($__internal_2b0ee66233dc1c69a69d7f7cb50416d202ac91ece227c12355015a43d3232766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_879eb18a0b569dc38f608f9359aac7532358d4f7836693ec28765777b22c75f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879eb18a0b569dc38f608f9359aac7532358d4f7836693ec28765777b22c75f8->enter($__internal_879eb18a0b569dc38f608f9359aac7532358d4f7836693ec28765777b22c75f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2b0ee66233dc1c69a69d7f7cb50416d202ac91ece227c12355015a43d3232766->leave($__internal_2b0ee66233dc1c69a69d7f7cb50416d202ac91ece227c12355015a43d3232766_prof);

        
        $__internal_879eb18a0b569dc38f608f9359aac7532358d4f7836693ec28765777b22c75f8->leave($__internal_879eb18a0b569dc38f608f9359aac7532358d4f7836693ec28765777b22c75f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
