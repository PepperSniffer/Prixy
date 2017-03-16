<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2dd70c7fc30ad571b62c300cf8998397ad65a0252f7772aac02cc557859b6802 extends Twig_Template
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
        $__internal_ddb4b21064ed1e447d0bbcf13084c6a5d4dbd741f9b5cf464b232fe19bd784ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb4b21064ed1e447d0bbcf13084c6a5d4dbd741f9b5cf464b232fe19bd784ef->enter($__internal_ddb4b21064ed1e447d0bbcf13084c6a5d4dbd741f9b5cf464b232fe19bd784ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_19b0ddc44224e85e427886563a33a3a83e60bc25fb815a2d722a4bee408a7b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b0ddc44224e85e427886563a33a3a83e60bc25fb815a2d722a4bee408a7b03->enter($__internal_19b0ddc44224e85e427886563a33a3a83e60bc25fb815a2d722a4bee408a7b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ddb4b21064ed1e447d0bbcf13084c6a5d4dbd741f9b5cf464b232fe19bd784ef->leave($__internal_ddb4b21064ed1e447d0bbcf13084c6a5d4dbd741f9b5cf464b232fe19bd784ef_prof);

        
        $__internal_19b0ddc44224e85e427886563a33a3a83e60bc25fb815a2d722a4bee408a7b03->leave($__internal_19b0ddc44224e85e427886563a33a3a83e60bc25fb815a2d722a4bee408a7b03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
