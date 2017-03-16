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
        $__internal_2172b816404d1f794db45be60b01df100ac25f5dccdf44236cbe12c7926992c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2172b816404d1f794db45be60b01df100ac25f5dccdf44236cbe12c7926992c2->enter($__internal_2172b816404d1f794db45be60b01df100ac25f5dccdf44236cbe12c7926992c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_033484a31027d63e54dea616a4e13ce1e87391097e65ade07d6c71f6b8ba673b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033484a31027d63e54dea616a4e13ce1e87391097e65ade07d6c71f6b8ba673b->enter($__internal_033484a31027d63e54dea616a4e13ce1e87391097e65ade07d6c71f6b8ba673b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2172b816404d1f794db45be60b01df100ac25f5dccdf44236cbe12c7926992c2->leave($__internal_2172b816404d1f794db45be60b01df100ac25f5dccdf44236cbe12c7926992c2_prof);

        
        $__internal_033484a31027d63e54dea616a4e13ce1e87391097e65ade07d6c71f6b8ba673b->leave($__internal_033484a31027d63e54dea616a4e13ce1e87391097e65ade07d6c71f6b8ba673b_prof);

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
