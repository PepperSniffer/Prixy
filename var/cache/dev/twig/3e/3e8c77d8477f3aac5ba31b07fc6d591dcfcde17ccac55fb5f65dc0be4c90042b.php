<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_65393b2f6171c0b2c987f9d599b917a18dcc137697c6fd45bd7e977088696a68 extends Twig_Template
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
        $__internal_8fa8605ad0977dd723105514c4b07c36e931261b7a210f65be89ca5d2dc55b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa8605ad0977dd723105514c4b07c36e931261b7a210f65be89ca5d2dc55b5f->enter($__internal_8fa8605ad0977dd723105514c4b07c36e931261b7a210f65be89ca5d2dc55b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6bdb8ebdd6d9d4170f1bdaf53cf6441355c5474c1f89bf8e2eed0504501cb679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdb8ebdd6d9d4170f1bdaf53cf6441355c5474c1f89bf8e2eed0504501cb679->enter($__internal_6bdb8ebdd6d9d4170f1bdaf53cf6441355c5474c1f89bf8e2eed0504501cb679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8fa8605ad0977dd723105514c4b07c36e931261b7a210f65be89ca5d2dc55b5f->leave($__internal_8fa8605ad0977dd723105514c4b07c36e931261b7a210f65be89ca5d2dc55b5f_prof);

        
        $__internal_6bdb8ebdd6d9d4170f1bdaf53cf6441355c5474c1f89bf8e2eed0504501cb679->leave($__internal_6bdb8ebdd6d9d4170f1bdaf53cf6441355c5474c1f89bf8e2eed0504501cb679_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}