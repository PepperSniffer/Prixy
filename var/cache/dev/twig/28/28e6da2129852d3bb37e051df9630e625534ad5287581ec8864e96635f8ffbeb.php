<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7bed3b0974849599a9469ac8c0df3198bb7dd923db3677ba880a87b77dccea42 extends Twig_Template
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
        $__internal_7291bf273b2ed1eddcf771f2d7ced8a8a0fc6de8d0f67f51357eae94b8823b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7291bf273b2ed1eddcf771f2d7ced8a8a0fc6de8d0f67f51357eae94b8823b0d->enter($__internal_7291bf273b2ed1eddcf771f2d7ced8a8a0fc6de8d0f67f51357eae94b8823b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_34ae95cdcb7e4efd436e2729c036d3a2f1bf862b9f612b32e66a8fa2d3332cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ae95cdcb7e4efd436e2729c036d3a2f1bf862b9f612b32e66a8fa2d3332cf1->enter($__internal_34ae95cdcb7e4efd436e2729c036d3a2f1bf862b9f612b32e66a8fa2d3332cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7291bf273b2ed1eddcf771f2d7ced8a8a0fc6de8d0f67f51357eae94b8823b0d->leave($__internal_7291bf273b2ed1eddcf771f2d7ced8a8a0fc6de8d0f67f51357eae94b8823b0d_prof);

        
        $__internal_34ae95cdcb7e4efd436e2729c036d3a2f1bf862b9f612b32e66a8fa2d3332cf1->leave($__internal_34ae95cdcb7e4efd436e2729c036d3a2f1bf862b9f612b32e66a8fa2d3332cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
