<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c9fa0705d3be34c1c07d041da87e4b6d874685f75ebb83a8eda3acc9ea087ee8 extends Twig_Template
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
        $__internal_8ccd2ae00a764f41d25918c64d5f59f65196a9cda6217623b7164044ba99fcee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccd2ae00a764f41d25918c64d5f59f65196a9cda6217623b7164044ba99fcee->enter($__internal_8ccd2ae00a764f41d25918c64d5f59f65196a9cda6217623b7164044ba99fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_102635c843e4af6be058138e095192a81b7c5ffcd5ba5d0fa6b4a956084ee29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102635c843e4af6be058138e095192a81b7c5ffcd5ba5d0fa6b4a956084ee29c->enter($__internal_102635c843e4af6be058138e095192a81b7c5ffcd5ba5d0fa6b4a956084ee29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8ccd2ae00a764f41d25918c64d5f59f65196a9cda6217623b7164044ba99fcee->leave($__internal_8ccd2ae00a764f41d25918c64d5f59f65196a9cda6217623b7164044ba99fcee_prof);

        
        $__internal_102635c843e4af6be058138e095192a81b7c5ffcd5ba5d0fa6b4a956084ee29c->leave($__internal_102635c843e4af6be058138e095192a81b7c5ffcd5ba5d0fa6b4a956084ee29c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
