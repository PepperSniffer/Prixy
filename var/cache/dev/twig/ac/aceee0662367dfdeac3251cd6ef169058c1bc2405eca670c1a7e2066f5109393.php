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
        $__internal_a53cd777b00449c1517bce3b1b28dc18210a87c244165e458d6efd781a8c8f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53cd777b00449c1517bce3b1b28dc18210a87c244165e458d6efd781a8c8f4b->enter($__internal_a53cd777b00449c1517bce3b1b28dc18210a87c244165e458d6efd781a8c8f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_66ec2b4238c77b82afe3bd55f714ceb2d7e6458c2341ebef3964e73088e7fe15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ec2b4238c77b82afe3bd55f714ceb2d7e6458c2341ebef3964e73088e7fe15->enter($__internal_66ec2b4238c77b82afe3bd55f714ceb2d7e6458c2341ebef3964e73088e7fe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a53cd777b00449c1517bce3b1b28dc18210a87c244165e458d6efd781a8c8f4b->leave($__internal_a53cd777b00449c1517bce3b1b28dc18210a87c244165e458d6efd781a8c8f4b_prof);

        
        $__internal_66ec2b4238c77b82afe3bd55f714ceb2d7e6458c2341ebef3964e73088e7fe15->leave($__internal_66ec2b4238c77b82afe3bd55f714ceb2d7e6458c2341ebef3964e73088e7fe15_prof);

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
