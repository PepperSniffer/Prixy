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
        $__internal_455e45c800537ea920b243d9913169f05b305c5863781959797a25d836342699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455e45c800537ea920b243d9913169f05b305c5863781959797a25d836342699->enter($__internal_455e45c800537ea920b243d9913169f05b305c5863781959797a25d836342699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f33f419c02b61e986a7a7107c5f4f781ef170834364bb9c23b362408b2ca0c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33f419c02b61e986a7a7107c5f4f781ef170834364bb9c23b362408b2ca0c4f->enter($__internal_f33f419c02b61e986a7a7107c5f4f781ef170834364bb9c23b362408b2ca0c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_455e45c800537ea920b243d9913169f05b305c5863781959797a25d836342699->leave($__internal_455e45c800537ea920b243d9913169f05b305c5863781959797a25d836342699_prof);

        
        $__internal_f33f419c02b61e986a7a7107c5f4f781ef170834364bb9c23b362408b2ca0c4f->leave($__internal_f33f419c02b61e986a7a7107c5f4f781ef170834364bb9c23b362408b2ca0c4f_prof);

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
