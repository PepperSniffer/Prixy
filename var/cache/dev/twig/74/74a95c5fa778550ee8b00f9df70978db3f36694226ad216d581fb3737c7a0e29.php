<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ac27b885d49c3e0fadcd9b2cbf6fc7359e631de29e1f003bf626a0c8e467be18 extends Twig_Template
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
        $__internal_f0dc4abe7de37e56c75b9d63d55a878b4c7f702086cc54c469fb363c2cb84ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0dc4abe7de37e56c75b9d63d55a878b4c7f702086cc54c469fb363c2cb84ae7->enter($__internal_f0dc4abe7de37e56c75b9d63d55a878b4c7f702086cc54c469fb363c2cb84ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ea13873eb7d8a7f855ffb7572899937161208f040de1a1698ebb1da60fb7940e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea13873eb7d8a7f855ffb7572899937161208f040de1a1698ebb1da60fb7940e->enter($__internal_ea13873eb7d8a7f855ffb7572899937161208f040de1a1698ebb1da60fb7940e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f0dc4abe7de37e56c75b9d63d55a878b4c7f702086cc54c469fb363c2cb84ae7->leave($__internal_f0dc4abe7de37e56c75b9d63d55a878b4c7f702086cc54c469fb363c2cb84ae7_prof);

        
        $__internal_ea13873eb7d8a7f855ffb7572899937161208f040de1a1698ebb1da60fb7940e->leave($__internal_ea13873eb7d8a7f855ffb7572899937161208f040de1a1698ebb1da60fb7940e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
