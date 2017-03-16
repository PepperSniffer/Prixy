<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c851fa53a17208ef0fc654d9d2baee7a96c9cd9c8e91966b1f05b8efac295a20 extends Twig_Template
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
        $__internal_424cb09b8777ffd78347540f88e41f8b3f860b4bd19479707ab77262217d2783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424cb09b8777ffd78347540f88e41f8b3f860b4bd19479707ab77262217d2783->enter($__internal_424cb09b8777ffd78347540f88e41f8b3f860b4bd19479707ab77262217d2783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_988ecdc78e6d48a5aefa69276273ba0fd9281cc4b1c2438cacf1316b893932dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988ecdc78e6d48a5aefa69276273ba0fd9281cc4b1c2438cacf1316b893932dc->enter($__internal_988ecdc78e6d48a5aefa69276273ba0fd9281cc4b1c2438cacf1316b893932dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_424cb09b8777ffd78347540f88e41f8b3f860b4bd19479707ab77262217d2783->leave($__internal_424cb09b8777ffd78347540f88e41f8b3f860b4bd19479707ab77262217d2783_prof);

        
        $__internal_988ecdc78e6d48a5aefa69276273ba0fd9281cc4b1c2438cacf1316b893932dc->leave($__internal_988ecdc78e6d48a5aefa69276273ba0fd9281cc4b1c2438cacf1316b893932dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
