<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a3d4e3cbe4cb57abfc4d14baae2b4afb68f82ac015252795286279313181e923 extends Twig_Template
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
        $__internal_8cd85f90255ba6b4d28584a8ee7248e3837c4181a14740620e39c6005fb1d067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd85f90255ba6b4d28584a8ee7248e3837c4181a14740620e39c6005fb1d067->enter($__internal_8cd85f90255ba6b4d28584a8ee7248e3837c4181a14740620e39c6005fb1d067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b8f0bd7cfbf565c9179d1b94c8b4c171214e669ea6374da41b97453e57f85192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f0bd7cfbf565c9179d1b94c8b4c171214e669ea6374da41b97453e57f85192->enter($__internal_b8f0bd7cfbf565c9179d1b94c8b4c171214e669ea6374da41b97453e57f85192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8cd85f90255ba6b4d28584a8ee7248e3837c4181a14740620e39c6005fb1d067->leave($__internal_8cd85f90255ba6b4d28584a8ee7248e3837c4181a14740620e39c6005fb1d067_prof);

        
        $__internal_b8f0bd7cfbf565c9179d1b94c8b4c171214e669ea6374da41b97453e57f85192->leave($__internal_b8f0bd7cfbf565c9179d1b94c8b4c171214e669ea6374da41b97453e57f85192_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
