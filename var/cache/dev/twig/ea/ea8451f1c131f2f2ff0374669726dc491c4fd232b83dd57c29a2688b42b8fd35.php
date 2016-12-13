<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_618021ba6967b9d1b75cd2bb8d0678d25fb421dcb3ad00fe4e2cc59e63409079 extends Twig_Template
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
        $__internal_269873d98f80f1856335f56beb3a10330b7615abbe5538ad8631e49a36d04161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269873d98f80f1856335f56beb3a10330b7615abbe5538ad8631e49a36d04161->enter($__internal_269873d98f80f1856335f56beb3a10330b7615abbe5538ad8631e49a36d04161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_18d163874508161ca12d6657600f155bbf1a09b80005a970a3e986196f588f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d163874508161ca12d6657600f155bbf1a09b80005a970a3e986196f588f5a->enter($__internal_18d163874508161ca12d6657600f155bbf1a09b80005a970a3e986196f588f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_269873d98f80f1856335f56beb3a10330b7615abbe5538ad8631e49a36d04161->leave($__internal_269873d98f80f1856335f56beb3a10330b7615abbe5538ad8631e49a36d04161_prof);

        
        $__internal_18d163874508161ca12d6657600f155bbf1a09b80005a970a3e986196f588f5a->leave($__internal_18d163874508161ca12d6657600f155bbf1a09b80005a970a3e986196f588f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
