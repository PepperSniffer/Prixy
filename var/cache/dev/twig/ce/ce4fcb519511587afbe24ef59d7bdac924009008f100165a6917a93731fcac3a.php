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
        $__internal_1966e0fd45f3a5bbc485eee60c3a3bbbe00d3ec1c90e89c99fb9e0e080cb97b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1966e0fd45f3a5bbc485eee60c3a3bbbe00d3ec1c90e89c99fb9e0e080cb97b4->enter($__internal_1966e0fd45f3a5bbc485eee60c3a3bbbe00d3ec1c90e89c99fb9e0e080cb97b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4b01a80a91fff2b429a74ce7231b568acc99951d9537102d4e1ff4fe279570c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b01a80a91fff2b429a74ce7231b568acc99951d9537102d4e1ff4fe279570c3->enter($__internal_4b01a80a91fff2b429a74ce7231b568acc99951d9537102d4e1ff4fe279570c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1966e0fd45f3a5bbc485eee60c3a3bbbe00d3ec1c90e89c99fb9e0e080cb97b4->leave($__internal_1966e0fd45f3a5bbc485eee60c3a3bbbe00d3ec1c90e89c99fb9e0e080cb97b4_prof);

        
        $__internal_4b01a80a91fff2b429a74ce7231b568acc99951d9537102d4e1ff4fe279570c3->leave($__internal_4b01a80a91fff2b429a74ce7231b568acc99951d9537102d4e1ff4fe279570c3_prof);

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
