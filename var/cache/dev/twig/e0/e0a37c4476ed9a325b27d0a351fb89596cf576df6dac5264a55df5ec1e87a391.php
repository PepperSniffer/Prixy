<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4bd401c1009762132a0608f951e276207e09266c218b6861c186302ef1527617 extends Twig_Template
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
        $__internal_5aefb15133ea30940d643daf4abc93cad1a3637033e9d2d5a5633384acaf0f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aefb15133ea30940d643daf4abc93cad1a3637033e9d2d5a5633384acaf0f6e->enter($__internal_5aefb15133ea30940d643daf4abc93cad1a3637033e9d2d5a5633384acaf0f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_87419b60950ee23c63d11747df4b7cc2645b9c1eeadd5729cdbdb712a95fe3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87419b60950ee23c63d11747df4b7cc2645b9c1eeadd5729cdbdb712a95fe3ae->enter($__internal_87419b60950ee23c63d11747df4b7cc2645b9c1eeadd5729cdbdb712a95fe3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5aefb15133ea30940d643daf4abc93cad1a3637033e9d2d5a5633384acaf0f6e->leave($__internal_5aefb15133ea30940d643daf4abc93cad1a3637033e9d2d5a5633384acaf0f6e_prof);

        
        $__internal_87419b60950ee23c63d11747df4b7cc2645b9c1eeadd5729cdbdb712a95fe3ae->leave($__internal_87419b60950ee23c63d11747df4b7cc2645b9c1eeadd5729cdbdb712a95fe3ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
