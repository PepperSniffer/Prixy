<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_59e033a3da49a149b1c14b2d444e953684f1c8d3380441283b082efa16825fd7 extends Twig_Template
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
        $__internal_3d1d25006772cc71f35da8283de2a2b6de27c2b14699150fe186cc8185ff96d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1d25006772cc71f35da8283de2a2b6de27c2b14699150fe186cc8185ff96d0->enter($__internal_3d1d25006772cc71f35da8283de2a2b6de27c2b14699150fe186cc8185ff96d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3a39cf0374a3434f4d41b74ac63cddc7adb07581b04e176f0fe5c8b6577a48f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a39cf0374a3434f4d41b74ac63cddc7adb07581b04e176f0fe5c8b6577a48f9->enter($__internal_3a39cf0374a3434f4d41b74ac63cddc7adb07581b04e176f0fe5c8b6577a48f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3d1d25006772cc71f35da8283de2a2b6de27c2b14699150fe186cc8185ff96d0->leave($__internal_3d1d25006772cc71f35da8283de2a2b6de27c2b14699150fe186cc8185ff96d0_prof);

        
        $__internal_3a39cf0374a3434f4d41b74ac63cddc7adb07581b04e176f0fe5c8b6577a48f9->leave($__internal_3a39cf0374a3434f4d41b74ac63cddc7adb07581b04e176f0fe5c8b6577a48f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
