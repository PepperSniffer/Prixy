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
        $__internal_e5d98d94bd2ace85beb670e61c5870b250cd5046a5db9b23d32f8a4490d44f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d98d94bd2ace85beb670e61c5870b250cd5046a5db9b23d32f8a4490d44f8f->enter($__internal_e5d98d94bd2ace85beb670e61c5870b250cd5046a5db9b23d32f8a4490d44f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_53275780e86cca91e6df8ded61aba966b99b0b2591175e5192146f739c68bd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53275780e86cca91e6df8ded61aba966b99b0b2591175e5192146f739c68bd11->enter($__internal_53275780e86cca91e6df8ded61aba966b99b0b2591175e5192146f739c68bd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e5d98d94bd2ace85beb670e61c5870b250cd5046a5db9b23d32f8a4490d44f8f->leave($__internal_e5d98d94bd2ace85beb670e61c5870b250cd5046a5db9b23d32f8a4490d44f8f_prof);

        
        $__internal_53275780e86cca91e6df8ded61aba966b99b0b2591175e5192146f739c68bd11->leave($__internal_53275780e86cca91e6df8ded61aba966b99b0b2591175e5192146f739c68bd11_prof);

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
