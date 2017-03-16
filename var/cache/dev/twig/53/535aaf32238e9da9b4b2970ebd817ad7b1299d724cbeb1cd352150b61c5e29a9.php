<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0764ccb2dfb0546e1235355f17331e59f730e8af154ba36d7d7e2ba32f8fc065 extends Twig_Template
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
        $__internal_e104a7ef4515019fc29b4cd89615ad71ee385721df04cae4cbd3be560890eb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e104a7ef4515019fc29b4cd89615ad71ee385721df04cae4cbd3be560890eb6b->enter($__internal_e104a7ef4515019fc29b4cd89615ad71ee385721df04cae4cbd3be560890eb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5e55e5d0697f9edb0480cb1343406a50b442f04324cb3aebc2b856e753810b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e55e5d0697f9edb0480cb1343406a50b442f04324cb3aebc2b856e753810b73->enter($__internal_5e55e5d0697f9edb0480cb1343406a50b442f04324cb3aebc2b856e753810b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e104a7ef4515019fc29b4cd89615ad71ee385721df04cae4cbd3be560890eb6b->leave($__internal_e104a7ef4515019fc29b4cd89615ad71ee385721df04cae4cbd3be560890eb6b_prof);

        
        $__internal_5e55e5d0697f9edb0480cb1343406a50b442f04324cb3aebc2b856e753810b73->leave($__internal_5e55e5d0697f9edb0480cb1343406a50b442f04324cb3aebc2b856e753810b73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
