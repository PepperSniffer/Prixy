<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1822e4c9bb7893d51791ba305c18e35e6a63b9cb494d190debb30ef6692b1281 extends Twig_Template
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
        $__internal_43b1188ef5982e38aed7b0be3b3ec8ee6a98debb790c0a2ad9fe74a6c73442e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b1188ef5982e38aed7b0be3b3ec8ee6a98debb790c0a2ad9fe74a6c73442e3->enter($__internal_43b1188ef5982e38aed7b0be3b3ec8ee6a98debb790c0a2ad9fe74a6c73442e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d19e7730ecb814c1dafb22957c9d2718e7ac9989ef8c1112d54e08c076b0819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19e7730ecb814c1dafb22957c9d2718e7ac9989ef8c1112d54e08c076b0819f->enter($__internal_d19e7730ecb814c1dafb22957c9d2718e7ac9989ef8c1112d54e08c076b0819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_43b1188ef5982e38aed7b0be3b3ec8ee6a98debb790c0a2ad9fe74a6c73442e3->leave($__internal_43b1188ef5982e38aed7b0be3b3ec8ee6a98debb790c0a2ad9fe74a6c73442e3_prof);

        
        $__internal_d19e7730ecb814c1dafb22957c9d2718e7ac9989ef8c1112d54e08c076b0819f->leave($__internal_d19e7730ecb814c1dafb22957c9d2718e7ac9989ef8c1112d54e08c076b0819f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
