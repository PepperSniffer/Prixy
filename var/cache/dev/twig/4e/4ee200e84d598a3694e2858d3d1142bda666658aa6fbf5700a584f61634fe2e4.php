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
        $__internal_0d12dc3130685f1daa29c4efc2ab3998d25e9df447b81bd2d109621c6939c900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d12dc3130685f1daa29c4efc2ab3998d25e9df447b81bd2d109621c6939c900->enter($__internal_0d12dc3130685f1daa29c4efc2ab3998d25e9df447b81bd2d109621c6939c900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5307e683556eafc4c0b3a1f2948a91fc4676da574b280a6438945c513eb43d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5307e683556eafc4c0b3a1f2948a91fc4676da574b280a6438945c513eb43d17->enter($__internal_5307e683556eafc4c0b3a1f2948a91fc4676da574b280a6438945c513eb43d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0d12dc3130685f1daa29c4efc2ab3998d25e9df447b81bd2d109621c6939c900->leave($__internal_0d12dc3130685f1daa29c4efc2ab3998d25e9df447b81bd2d109621c6939c900_prof);

        
        $__internal_5307e683556eafc4c0b3a1f2948a91fc4676da574b280a6438945c513eb43d17->leave($__internal_5307e683556eafc4c0b3a1f2948a91fc4676da574b280a6438945c513eb43d17_prof);

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
