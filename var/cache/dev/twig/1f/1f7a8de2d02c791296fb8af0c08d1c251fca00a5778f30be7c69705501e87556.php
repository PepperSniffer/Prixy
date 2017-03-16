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
        $__internal_4f462aa46e38fa297156ce874391a0736e87d13b0700b3fc74dacba55c6cee2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f462aa46e38fa297156ce874391a0736e87d13b0700b3fc74dacba55c6cee2f->enter($__internal_4f462aa46e38fa297156ce874391a0736e87d13b0700b3fc74dacba55c6cee2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_20375487c9860463fda3a996681af1b29354c2cf3ea87c6bdb887706f67e06a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20375487c9860463fda3a996681af1b29354c2cf3ea87c6bdb887706f67e06a0->enter($__internal_20375487c9860463fda3a996681af1b29354c2cf3ea87c6bdb887706f67e06a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4f462aa46e38fa297156ce874391a0736e87d13b0700b3fc74dacba55c6cee2f->leave($__internal_4f462aa46e38fa297156ce874391a0736e87d13b0700b3fc74dacba55c6cee2f_prof);

        
        $__internal_20375487c9860463fda3a996681af1b29354c2cf3ea87c6bdb887706f67e06a0->leave($__internal_20375487c9860463fda3a996681af1b29354c2cf3ea87c6bdb887706f67e06a0_prof);

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
