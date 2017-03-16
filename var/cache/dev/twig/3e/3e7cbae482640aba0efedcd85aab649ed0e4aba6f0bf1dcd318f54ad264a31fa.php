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
        $__internal_b5c452e7e579bd7e2f458600f837f36e7edbc86e15b3642b4224ea3620dbd674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c452e7e579bd7e2f458600f837f36e7edbc86e15b3642b4224ea3620dbd674->enter($__internal_b5c452e7e579bd7e2f458600f837f36e7edbc86e15b3642b4224ea3620dbd674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dda61d0711273019d93bb764e03695babb0ea5fba91c5cfea6163ab5ae8fdab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda61d0711273019d93bb764e03695babb0ea5fba91c5cfea6163ab5ae8fdab7->enter($__internal_dda61d0711273019d93bb764e03695babb0ea5fba91c5cfea6163ab5ae8fdab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_b5c452e7e579bd7e2f458600f837f36e7edbc86e15b3642b4224ea3620dbd674->leave($__internal_b5c452e7e579bd7e2f458600f837f36e7edbc86e15b3642b4224ea3620dbd674_prof);

        
        $__internal_dda61d0711273019d93bb764e03695babb0ea5fba91c5cfea6163ab5ae8fdab7->leave($__internal_dda61d0711273019d93bb764e03695babb0ea5fba91c5cfea6163ab5ae8fdab7_prof);

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
