<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cc857831b71bf140e1db4b7790ccac14a6d483a383bf6099674309199cc178f4 extends Twig_Template
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
        $__internal_0d5b973afe2904a1397417ee5cfd0056dfba61667da1eacf4af2b6f43d35f677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5b973afe2904a1397417ee5cfd0056dfba61667da1eacf4af2b6f43d35f677->enter($__internal_0d5b973afe2904a1397417ee5cfd0056dfba61667da1eacf4af2b6f43d35f677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e16d012069304f37a33858aacf442d91b6d48836017800fa0684e5bacd00f416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16d012069304f37a33858aacf442d91b6d48836017800fa0684e5bacd00f416->enter($__internal_e16d012069304f37a33858aacf442d91b6d48836017800fa0684e5bacd00f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0d5b973afe2904a1397417ee5cfd0056dfba61667da1eacf4af2b6f43d35f677->leave($__internal_0d5b973afe2904a1397417ee5cfd0056dfba61667da1eacf4af2b6f43d35f677_prof);

        
        $__internal_e16d012069304f37a33858aacf442d91b6d48836017800fa0684e5bacd00f416->leave($__internal_e16d012069304f37a33858aacf442d91b6d48836017800fa0684e5bacd00f416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
