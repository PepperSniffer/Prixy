<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2737e8560ac8abac97e7802f6b666433c87cefd730f89778bf20b91c66b86ac8 extends Twig_Template
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
        $__internal_17a306f3f632e5f250fc3dc41623f8763cfa948dc0903781beac6e52682f115f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a306f3f632e5f250fc3dc41623f8763cfa948dc0903781beac6e52682f115f->enter($__internal_17a306f3f632e5f250fc3dc41623f8763cfa948dc0903781beac6e52682f115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c921eb19851455a34d8935ef653da107346f864737df3fbfe4f101dcd57d8a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c921eb19851455a34d8935ef653da107346f864737df3fbfe4f101dcd57d8a49->enter($__internal_c921eb19851455a34d8935ef653da107346f864737df3fbfe4f101dcd57d8a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_17a306f3f632e5f250fc3dc41623f8763cfa948dc0903781beac6e52682f115f->leave($__internal_17a306f3f632e5f250fc3dc41623f8763cfa948dc0903781beac6e52682f115f_prof);

        
        $__internal_c921eb19851455a34d8935ef653da107346f864737df3fbfe4f101dcd57d8a49->leave($__internal_c921eb19851455a34d8935ef653da107346f864737df3fbfe4f101dcd57d8a49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
