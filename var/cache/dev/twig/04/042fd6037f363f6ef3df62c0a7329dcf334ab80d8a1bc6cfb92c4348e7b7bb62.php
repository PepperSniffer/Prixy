<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_924a71cf64e7fe98e5a2bd4e8fdf4299f88c8a51224b596b70bebfd1fed8340a extends Twig_Template
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
        $__internal_08ddcf8fb9d1a1997fa7e6c67f9076352aae6ccc93a5710d56fc14fc0e1091a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ddcf8fb9d1a1997fa7e6c67f9076352aae6ccc93a5710d56fc14fc0e1091a5->enter($__internal_08ddcf8fb9d1a1997fa7e6c67f9076352aae6ccc93a5710d56fc14fc0e1091a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_4250889e86d3cd40b2a4464b99223abd134f48f9055273e3aea41e2df41ee09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4250889e86d3cd40b2a4464b99223abd134f48f9055273e3aea41e2df41ee09d->enter($__internal_4250889e86d3cd40b2a4464b99223abd134f48f9055273e3aea41e2df41ee09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_08ddcf8fb9d1a1997fa7e6c67f9076352aae6ccc93a5710d56fc14fc0e1091a5->leave($__internal_08ddcf8fb9d1a1997fa7e6c67f9076352aae6ccc93a5710d56fc14fc0e1091a5_prof);

        
        $__internal_4250889e86d3cd40b2a4464b99223abd134f48f9055273e3aea41e2df41ee09d->leave($__internal_4250889e86d3cd40b2a4464b99223abd134f48f9055273e3aea41e2df41ee09d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
