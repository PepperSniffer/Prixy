<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2bb2a18bd545a498d81be4b2d3d0a34524bcee1aa900fdb0134552e58b8b023a extends Twig_Template
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
        $__internal_ebfeac2a52560b2955f76eb363984344f0715cd037a9cda44c171ad6e534bbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfeac2a52560b2955f76eb363984344f0715cd037a9cda44c171ad6e534bbd3->enter($__internal_ebfeac2a52560b2955f76eb363984344f0715cd037a9cda44c171ad6e534bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c7867ba600236d43d3b8cb192bd6d4cd7610cdbe8eb4c5405cce0ba956b98638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7867ba600236d43d3b8cb192bd6d4cd7610cdbe8eb4c5405cce0ba956b98638->enter($__internal_c7867ba600236d43d3b8cb192bd6d4cd7610cdbe8eb4c5405cce0ba956b98638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ebfeac2a52560b2955f76eb363984344f0715cd037a9cda44c171ad6e534bbd3->leave($__internal_ebfeac2a52560b2955f76eb363984344f0715cd037a9cda44c171ad6e534bbd3_prof);

        
        $__internal_c7867ba600236d43d3b8cb192bd6d4cd7610cdbe8eb4c5405cce0ba956b98638->leave($__internal_c7867ba600236d43d3b8cb192bd6d4cd7610cdbe8eb4c5405cce0ba956b98638_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
