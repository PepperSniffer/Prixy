<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_39f27beb16aa88b15efbead8018133d3c42b8025f7c924087b928382482ca8a2 extends Twig_Template
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
        $__internal_c48ec59c20cf21a50ff32635238928d13d27e313a68cc282a00de839f14a1684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48ec59c20cf21a50ff32635238928d13d27e313a68cc282a00de839f14a1684->enter($__internal_c48ec59c20cf21a50ff32635238928d13d27e313a68cc282a00de839f14a1684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a3247e0b5eddfc978cf4b2d8db9f5d55d6c39bff350cbc2b69bb2eac9dc698ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3247e0b5eddfc978cf4b2d8db9f5d55d6c39bff350cbc2b69bb2eac9dc698ad->enter($__internal_a3247e0b5eddfc978cf4b2d8db9f5d55d6c39bff350cbc2b69bb2eac9dc698ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c48ec59c20cf21a50ff32635238928d13d27e313a68cc282a00de839f14a1684->leave($__internal_c48ec59c20cf21a50ff32635238928d13d27e313a68cc282a00de839f14a1684_prof);

        
        $__internal_a3247e0b5eddfc978cf4b2d8db9f5d55d6c39bff350cbc2b69bb2eac9dc698ad->leave($__internal_a3247e0b5eddfc978cf4b2d8db9f5d55d6c39bff350cbc2b69bb2eac9dc698ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
