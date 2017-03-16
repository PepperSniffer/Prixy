<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9aa242a8ebd7e6c4763af1853a57594744f447547bbb7a0bc026e60c67444b56 extends Twig_Template
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
        $__internal_c683114009313e27802cb58c359343e284a208ee63e1ab09dd3f529ac167b5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c683114009313e27802cb58c359343e284a208ee63e1ab09dd3f529ac167b5a2->enter($__internal_c683114009313e27802cb58c359343e284a208ee63e1ab09dd3f529ac167b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_eb6b5ae44ef029e2596c8fd0dae183039d8920862705e3dbf24abd6ff25e4260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b5ae44ef029e2596c8fd0dae183039d8920862705e3dbf24abd6ff25e4260->enter($__internal_eb6b5ae44ef029e2596c8fd0dae183039d8920862705e3dbf24abd6ff25e4260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c683114009313e27802cb58c359343e284a208ee63e1ab09dd3f529ac167b5a2->leave($__internal_c683114009313e27802cb58c359343e284a208ee63e1ab09dd3f529ac167b5a2_prof);

        
        $__internal_eb6b5ae44ef029e2596c8fd0dae183039d8920862705e3dbf24abd6ff25e4260->leave($__internal_eb6b5ae44ef029e2596c8fd0dae183039d8920862705e3dbf24abd6ff25e4260_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
