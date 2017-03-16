<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7dc07830ab3c318ff003bf3b53e6b53d02cce05187dca5c6f1438368d3b6a20d extends Twig_Template
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
        $__internal_e14e87aaf78bd14734edf267e7aab86c67302491987a21dbf8b707658bf016ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14e87aaf78bd14734edf267e7aab86c67302491987a21dbf8b707658bf016ba->enter($__internal_e14e87aaf78bd14734edf267e7aab86c67302491987a21dbf8b707658bf016ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_070c5c75b7c845c11fdfdd0bc3cb204f74db5232e8a409a2e3b2e4db60acad1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070c5c75b7c845c11fdfdd0bc3cb204f74db5232e8a409a2e3b2e4db60acad1e->enter($__internal_070c5c75b7c845c11fdfdd0bc3cb204f74db5232e8a409a2e3b2e4db60acad1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e14e87aaf78bd14734edf267e7aab86c67302491987a21dbf8b707658bf016ba->leave($__internal_e14e87aaf78bd14734edf267e7aab86c67302491987a21dbf8b707658bf016ba_prof);

        
        $__internal_070c5c75b7c845c11fdfdd0bc3cb204f74db5232e8a409a2e3b2e4db60acad1e->leave($__internal_070c5c75b7c845c11fdfdd0bc3cb204f74db5232e8a409a2e3b2e4db60acad1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
