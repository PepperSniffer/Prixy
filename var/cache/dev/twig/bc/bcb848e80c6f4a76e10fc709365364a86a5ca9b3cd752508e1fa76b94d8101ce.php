<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_56cec01b0f81f4f91c640a7043fcb1019b4f5bb2381a9556741b46daebc92fa3 extends Twig_Template
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
        $__internal_a77ea412fedf339da615780e4baf63ddef18d9aaffd413c529e32654ed9290bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77ea412fedf339da615780e4baf63ddef18d9aaffd413c529e32654ed9290bf->enter($__internal_a77ea412fedf339da615780e4baf63ddef18d9aaffd413c529e32654ed9290bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bdd8495c751022cdf34903fc3f68b43d15780903f6d5ed1a4cd34f2a3c274f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd8495c751022cdf34903fc3f68b43d15780903f6d5ed1a4cd34f2a3c274f80->enter($__internal_bdd8495c751022cdf34903fc3f68b43d15780903f6d5ed1a4cd34f2a3c274f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a77ea412fedf339da615780e4baf63ddef18d9aaffd413c529e32654ed9290bf->leave($__internal_a77ea412fedf339da615780e4baf63ddef18d9aaffd413c529e32654ed9290bf_prof);

        
        $__internal_bdd8495c751022cdf34903fc3f68b43d15780903f6d5ed1a4cd34f2a3c274f80->leave($__internal_bdd8495c751022cdf34903fc3f68b43d15780903f6d5ed1a4cd34f2a3c274f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
