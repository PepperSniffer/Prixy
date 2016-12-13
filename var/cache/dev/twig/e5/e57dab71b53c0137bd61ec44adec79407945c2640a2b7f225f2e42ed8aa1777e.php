<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0946bf2294cf05ff46410c616d56827f1ed06eda07cd61212c33bb4bf7da6e0f extends Twig_Template
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
        $__internal_e0dfc3807af185eaba261e5665b861316894e76a0f997d111aa07d169b01c07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0dfc3807af185eaba261e5665b861316894e76a0f997d111aa07d169b01c07f->enter($__internal_e0dfc3807af185eaba261e5665b861316894e76a0f997d111aa07d169b01c07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4541617a12727a2a5bc94394027d61cd6503fdaaa55eb86ca6479b889685889b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4541617a12727a2a5bc94394027d61cd6503fdaaa55eb86ca6479b889685889b->enter($__internal_4541617a12727a2a5bc94394027d61cd6503fdaaa55eb86ca6479b889685889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e0dfc3807af185eaba261e5665b861316894e76a0f997d111aa07d169b01c07f->leave($__internal_e0dfc3807af185eaba261e5665b861316894e76a0f997d111aa07d169b01c07f_prof);

        
        $__internal_4541617a12727a2a5bc94394027d61cd6503fdaaa55eb86ca6479b889685889b->leave($__internal_4541617a12727a2a5bc94394027d61cd6503fdaaa55eb86ca6479b889685889b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
