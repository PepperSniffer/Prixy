<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2c53c4d1e4b4a0f8174bf1999e0c84912d1e1a8a2a107b723c09bfcd52d6ec75 extends Twig_Template
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
        $__internal_cc15075d830cd4f23ee10ef71438f0912ea47a7df8690d6d3c88ea7ae3fa7aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc15075d830cd4f23ee10ef71438f0912ea47a7df8690d6d3c88ea7ae3fa7aad->enter($__internal_cc15075d830cd4f23ee10ef71438f0912ea47a7df8690d6d3c88ea7ae3fa7aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_97e51fde3caaa1c7500eddaffec6db62c83a14b1e71f3b5707ab66c05c75b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e51fde3caaa1c7500eddaffec6db62c83a14b1e71f3b5707ab66c05c75b82f->enter($__internal_97e51fde3caaa1c7500eddaffec6db62c83a14b1e71f3b5707ab66c05c75b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cc15075d830cd4f23ee10ef71438f0912ea47a7df8690d6d3c88ea7ae3fa7aad->leave($__internal_cc15075d830cd4f23ee10ef71438f0912ea47a7df8690d6d3c88ea7ae3fa7aad_prof);

        
        $__internal_97e51fde3caaa1c7500eddaffec6db62c83a14b1e71f3b5707ab66c05c75b82f->leave($__internal_97e51fde3caaa1c7500eddaffec6db62c83a14b1e71f3b5707ab66c05c75b82f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
