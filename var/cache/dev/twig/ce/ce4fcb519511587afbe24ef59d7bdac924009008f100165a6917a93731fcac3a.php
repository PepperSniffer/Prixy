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
        $__internal_4ad28a4e41bb0a6aa717e3bebc5ff1b2a5bf8c5fedf400d858f33835e19c8e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad28a4e41bb0a6aa717e3bebc5ff1b2a5bf8c5fedf400d858f33835e19c8e0e->enter($__internal_4ad28a4e41bb0a6aa717e3bebc5ff1b2a5bf8c5fedf400d858f33835e19c8e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4281480714edbca3371d9aeefb71e1e795a014b69ff9e0ddc5eeaa9b015df83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4281480714edbca3371d9aeefb71e1e795a014b69ff9e0ddc5eeaa9b015df83f->enter($__internal_4281480714edbca3371d9aeefb71e1e795a014b69ff9e0ddc5eeaa9b015df83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ad28a4e41bb0a6aa717e3bebc5ff1b2a5bf8c5fedf400d858f33835e19c8e0e->leave($__internal_4ad28a4e41bb0a6aa717e3bebc5ff1b2a5bf8c5fedf400d858f33835e19c8e0e_prof);

        
        $__internal_4281480714edbca3371d9aeefb71e1e795a014b69ff9e0ddc5eeaa9b015df83f->leave($__internal_4281480714edbca3371d9aeefb71e1e795a014b69ff9e0ddc5eeaa9b015df83f_prof);

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
