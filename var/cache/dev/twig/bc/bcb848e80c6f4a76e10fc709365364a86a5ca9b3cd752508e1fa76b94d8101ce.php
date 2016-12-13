<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_56cec01b0f81f4f91c640a7043fcb1019b4f5bb2381a9556741b46daebc92fa3 extends Twig_Template
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
        $__internal_713b53b8667ff4059467f9f4e5d5459c1684efe3d81e0096f5e116332416de71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713b53b8667ff4059467f9f4e5d5459c1684efe3d81e0096f5e116332416de71->enter($__internal_713b53b8667ff4059467f9f4e5d5459c1684efe3d81e0096f5e116332416de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_78f068bddb1ba2984b029e688f1fd908bd8d07357609392db51f9200b86c221f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f068bddb1ba2984b029e688f1fd908bd8d07357609392db51f9200b86c221f->enter($__internal_78f068bddb1ba2984b029e688f1fd908bd8d07357609392db51f9200b86c221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_713b53b8667ff4059467f9f4e5d5459c1684efe3d81e0096f5e116332416de71->leave($__internal_713b53b8667ff4059467f9f4e5d5459c1684efe3d81e0096f5e116332416de71_prof);

        
        $__internal_78f068bddb1ba2984b029e688f1fd908bd8d07357609392db51f9200b86c221f->leave($__internal_78f068bddb1ba2984b029e688f1fd908bd8d07357609392db51f9200b86c221f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
