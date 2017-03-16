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
        $__internal_1288ad7e762375655e43bf9b847f909bbaa6ccc1c60915de98978c694fcae2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1288ad7e762375655e43bf9b847f909bbaa6ccc1c60915de98978c694fcae2ff->enter($__internal_1288ad7e762375655e43bf9b847f909bbaa6ccc1c60915de98978c694fcae2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a8ea11f6e674c15cf91b4daa63dab60892ba30e2c75613b7c1067b4778f6249f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ea11f6e674c15cf91b4daa63dab60892ba30e2c75613b7c1067b4778f6249f->enter($__internal_a8ea11f6e674c15cf91b4daa63dab60892ba30e2c75613b7c1067b4778f6249f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1288ad7e762375655e43bf9b847f909bbaa6ccc1c60915de98978c694fcae2ff->leave($__internal_1288ad7e762375655e43bf9b847f909bbaa6ccc1c60915de98978c694fcae2ff_prof);

        
        $__internal_a8ea11f6e674c15cf91b4daa63dab60892ba30e2c75613b7c1067b4778f6249f->leave($__internal_a8ea11f6e674c15cf91b4daa63dab60892ba30e2c75613b7c1067b4778f6249f_prof);

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
