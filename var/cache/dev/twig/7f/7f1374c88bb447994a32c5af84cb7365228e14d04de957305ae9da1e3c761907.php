<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e6c5e1becc5ebbc2e4a9066f2e5745c4e8d30ec2a4573757106433c85904914f extends Twig_Template
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
        $__internal_ea543227b9b28f539faa0a82615892c3bd599e0bc9a78c2fce05eb13789c2490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea543227b9b28f539faa0a82615892c3bd599e0bc9a78c2fce05eb13789c2490->enter($__internal_ea543227b9b28f539faa0a82615892c3bd599e0bc9a78c2fce05eb13789c2490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9bba1dd3f5d5a23bfe9a064e680ef321acf4e9ba576d2d9e3cb8e587c7ffa01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bba1dd3f5d5a23bfe9a064e680ef321acf4e9ba576d2d9e3cb8e587c7ffa01b->enter($__internal_9bba1dd3f5d5a23bfe9a064e680ef321acf4e9ba576d2d9e3cb8e587c7ffa01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ea543227b9b28f539faa0a82615892c3bd599e0bc9a78c2fce05eb13789c2490->leave($__internal_ea543227b9b28f539faa0a82615892c3bd599e0bc9a78c2fce05eb13789c2490_prof);

        
        $__internal_9bba1dd3f5d5a23bfe9a064e680ef321acf4e9ba576d2d9e3cb8e587c7ffa01b->leave($__internal_9bba1dd3f5d5a23bfe9a064e680ef321acf4e9ba576d2d9e3cb8e587c7ffa01b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
