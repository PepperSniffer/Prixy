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
        $__internal_47d07132dece03fb3c601015ee8e7fd20828ea6a20986d14f38fddbff0fcaa21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d07132dece03fb3c601015ee8e7fd20828ea6a20986d14f38fddbff0fcaa21->enter($__internal_47d07132dece03fb3c601015ee8e7fd20828ea6a20986d14f38fddbff0fcaa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1e20ba975bc3aa07dd42abda0303ed48d8c10c18947337b001ba8eee39e867c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e20ba975bc3aa07dd42abda0303ed48d8c10c18947337b001ba8eee39e867c7->enter($__internal_1e20ba975bc3aa07dd42abda0303ed48d8c10c18947337b001ba8eee39e867c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_47d07132dece03fb3c601015ee8e7fd20828ea6a20986d14f38fddbff0fcaa21->leave($__internal_47d07132dece03fb3c601015ee8e7fd20828ea6a20986d14f38fddbff0fcaa21_prof);

        
        $__internal_1e20ba975bc3aa07dd42abda0303ed48d8c10c18947337b001ba8eee39e867c7->leave($__internal_1e20ba975bc3aa07dd42abda0303ed48d8c10c18947337b001ba8eee39e867c7_prof);

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
