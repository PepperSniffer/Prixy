<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0946bf2294cf05ff46410c616d56827f1ed06eda07cd61212c33bb4bf7da6e0f extends Twig_Template
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
        $__internal_b856457c04d9f492ed1781e1f4438438c6a419b352317614090eb3afc4545160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b856457c04d9f492ed1781e1f4438438c6a419b352317614090eb3afc4545160->enter($__internal_b856457c04d9f492ed1781e1f4438438c6a419b352317614090eb3afc4545160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bf930be11106bf86eaff95c4b64cd3fd0ffeb2c8ceb6fc86b458ae2d2ebe0e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf930be11106bf86eaff95c4b64cd3fd0ffeb2c8ceb6fc86b458ae2d2ebe0e28->enter($__internal_bf930be11106bf86eaff95c4b64cd3fd0ffeb2c8ceb6fc86b458ae2d2ebe0e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b856457c04d9f492ed1781e1f4438438c6a419b352317614090eb3afc4545160->leave($__internal_b856457c04d9f492ed1781e1f4438438c6a419b352317614090eb3afc4545160_prof);

        
        $__internal_bf930be11106bf86eaff95c4b64cd3fd0ffeb2c8ceb6fc86b458ae2d2ebe0e28->leave($__internal_bf930be11106bf86eaff95c4b64cd3fd0ffeb2c8ceb6fc86b458ae2d2ebe0e28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
