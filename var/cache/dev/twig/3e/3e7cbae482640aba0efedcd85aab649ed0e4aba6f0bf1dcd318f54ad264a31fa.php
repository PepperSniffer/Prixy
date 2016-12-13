<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_62ceef6723ef3043dbe311f4c4d801fe94797e17e129bf13f8eff34977b5c7dc extends Twig_Template
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
        $__internal_03b02ae09d25e3939111c1e235b4255851b22998d738040f61af6714a4721968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b02ae09d25e3939111c1e235b4255851b22998d738040f61af6714a4721968->enter($__internal_03b02ae09d25e3939111c1e235b4255851b22998d738040f61af6714a4721968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_19cc47f67b51d017a632f037ecf43f18099108fabe836c2aaadfdefbd2333135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cc47f67b51d017a632f037ecf43f18099108fabe836c2aaadfdefbd2333135->enter($__internal_19cc47f67b51d017a632f037ecf43f18099108fabe836c2aaadfdefbd2333135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_03b02ae09d25e3939111c1e235b4255851b22998d738040f61af6714a4721968->leave($__internal_03b02ae09d25e3939111c1e235b4255851b22998d738040f61af6714a4721968_prof);

        
        $__internal_19cc47f67b51d017a632f037ecf43f18099108fabe836c2aaadfdefbd2333135->leave($__internal_19cc47f67b51d017a632f037ecf43f18099108fabe836c2aaadfdefbd2333135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
