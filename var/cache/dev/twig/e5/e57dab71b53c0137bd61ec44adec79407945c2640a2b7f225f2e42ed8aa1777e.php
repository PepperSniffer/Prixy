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
        $__internal_b5fe8304e52a020c48f3721a94464b0ce185dee7d474f76ed6d668c26aba868d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fe8304e52a020c48f3721a94464b0ce185dee7d474f76ed6d668c26aba868d->enter($__internal_b5fe8304e52a020c48f3721a94464b0ce185dee7d474f76ed6d668c26aba868d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_855f135fc647ae94714464e5447b48b88f17d31ba31f6c1eb6760725653c09db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855f135fc647ae94714464e5447b48b88f17d31ba31f6c1eb6760725653c09db->enter($__internal_855f135fc647ae94714464e5447b48b88f17d31ba31f6c1eb6760725653c09db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b5fe8304e52a020c48f3721a94464b0ce185dee7d474f76ed6d668c26aba868d->leave($__internal_b5fe8304e52a020c48f3721a94464b0ce185dee7d474f76ed6d668c26aba868d_prof);

        
        $__internal_855f135fc647ae94714464e5447b48b88f17d31ba31f6c1eb6760725653c09db->leave($__internal_855f135fc647ae94714464e5447b48b88f17d31ba31f6c1eb6760725653c09db_prof);

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
