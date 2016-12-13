<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7dc07830ab3c318ff003bf3b53e6b53d02cce05187dca5c6f1438368d3b6a20d extends Twig_Template
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
        $__internal_d1eb81d215a6f879ecaab23c6bedf257170b695c536af91f85dd0bc46b6ddc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1eb81d215a6f879ecaab23c6bedf257170b695c536af91f85dd0bc46b6ddc78->enter($__internal_d1eb81d215a6f879ecaab23c6bedf257170b695c536af91f85dd0bc46b6ddc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3230cb627b05316f48288d36a4428048e49e19890edf70d5066acff6c9a71f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3230cb627b05316f48288d36a4428048e49e19890edf70d5066acff6c9a71f49->enter($__internal_3230cb627b05316f48288d36a4428048e49e19890edf70d5066acff6c9a71f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d1eb81d215a6f879ecaab23c6bedf257170b695c536af91f85dd0bc46b6ddc78->leave($__internal_d1eb81d215a6f879ecaab23c6bedf257170b695c536af91f85dd0bc46b6ddc78_prof);

        
        $__internal_3230cb627b05316f48288d36a4428048e49e19890edf70d5066acff6c9a71f49->leave($__internal_3230cb627b05316f48288d36a4428048e49e19890edf70d5066acff6c9a71f49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
