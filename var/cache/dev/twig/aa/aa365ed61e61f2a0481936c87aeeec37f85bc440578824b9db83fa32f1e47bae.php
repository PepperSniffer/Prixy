<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b8c1a05133730f53346d0b108e3298746585749998083818cfcf6cfa60211ea7 extends Twig_Template
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
        $__internal_18f8da1e5f80b9f32b387af4f02734b3e282968c4c1abc5faaa2c2ff9bea20ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f8da1e5f80b9f32b387af4f02734b3e282968c4c1abc5faaa2c2ff9bea20ba->enter($__internal_18f8da1e5f80b9f32b387af4f02734b3e282968c4c1abc5faaa2c2ff9bea20ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_18ed0cd09f67d4d05d6bfdc487f1ef4b942a49c3b58496f16038fd8e85871c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ed0cd09f67d4d05d6bfdc487f1ef4b942a49c3b58496f16038fd8e85871c6c->enter($__internal_18ed0cd09f67d4d05d6bfdc487f1ef4b942a49c3b58496f16038fd8e85871c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_18f8da1e5f80b9f32b387af4f02734b3e282968c4c1abc5faaa2c2ff9bea20ba->leave($__internal_18f8da1e5f80b9f32b387af4f02734b3e282968c4c1abc5faaa2c2ff9bea20ba_prof);

        
        $__internal_18ed0cd09f67d4d05d6bfdc487f1ef4b942a49c3b58496f16038fd8e85871c6c->leave($__internal_18ed0cd09f67d4d05d6bfdc487f1ef4b942a49c3b58496f16038fd8e85871c6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
