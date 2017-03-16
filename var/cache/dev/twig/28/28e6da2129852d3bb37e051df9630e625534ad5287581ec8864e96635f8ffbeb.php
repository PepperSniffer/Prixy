<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7bed3b0974849599a9469ac8c0df3198bb7dd923db3677ba880a87b77dccea42 extends Twig_Template
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
        $__internal_6402611431b0e02490b16fc428c315572781df09d81e6c4da364515af0cd99f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6402611431b0e02490b16fc428c315572781df09d81e6c4da364515af0cd99f5->enter($__internal_6402611431b0e02490b16fc428c315572781df09d81e6c4da364515af0cd99f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_37a612d9efebe2cbc7bd87034ca022407a5656e754e46fdc8d0b68fd001b3c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a612d9efebe2cbc7bd87034ca022407a5656e754e46fdc8d0b68fd001b3c3f->enter($__internal_37a612d9efebe2cbc7bd87034ca022407a5656e754e46fdc8d0b68fd001b3c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6402611431b0e02490b16fc428c315572781df09d81e6c4da364515af0cd99f5->leave($__internal_6402611431b0e02490b16fc428c315572781df09d81e6c4da364515af0cd99f5_prof);

        
        $__internal_37a612d9efebe2cbc7bd87034ca022407a5656e754e46fdc8d0b68fd001b3c3f->leave($__internal_37a612d9efebe2cbc7bd87034ca022407a5656e754e46fdc8d0b68fd001b3c3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
