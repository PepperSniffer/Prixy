<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8c06ff9768d33052627b8abfa87f248f77443e9d8832ac12986eb88e94fea737 extends Twig_Template
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
        $__internal_5dfa1822ec35e9589bdb4dfb2b010f64fab07863284690d9898d30ce009be235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfa1822ec35e9589bdb4dfb2b010f64fab07863284690d9898d30ce009be235->enter($__internal_5dfa1822ec35e9589bdb4dfb2b010f64fab07863284690d9898d30ce009be235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3698cbb7641aaad5eda7f3851319f5a0fb4e42464944b5b8cf401805614ce665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3698cbb7641aaad5eda7f3851319f5a0fb4e42464944b5b8cf401805614ce665->enter($__internal_3698cbb7641aaad5eda7f3851319f5a0fb4e42464944b5b8cf401805614ce665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5dfa1822ec35e9589bdb4dfb2b010f64fab07863284690d9898d30ce009be235->leave($__internal_5dfa1822ec35e9589bdb4dfb2b010f64fab07863284690d9898d30ce009be235_prof);

        
        $__internal_3698cbb7641aaad5eda7f3851319f5a0fb4e42464944b5b8cf401805614ce665->leave($__internal_3698cbb7641aaad5eda7f3851319f5a0fb4e42464944b5b8cf401805614ce665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
