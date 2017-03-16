<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a3d4e3cbe4cb57abfc4d14baae2b4afb68f82ac015252795286279313181e923 extends Twig_Template
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
        $__internal_35584bfa8fde117bbeafce9de10c3329ab1fc27f70e950e011b38ac0d0456950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35584bfa8fde117bbeafce9de10c3329ab1fc27f70e950e011b38ac0d0456950->enter($__internal_35584bfa8fde117bbeafce9de10c3329ab1fc27f70e950e011b38ac0d0456950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2c73939b1169f9aa5f9793a26161fc9dcecb1c4d72573fc2239f028017b6616e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c73939b1169f9aa5f9793a26161fc9dcecb1c4d72573fc2239f028017b6616e->enter($__internal_2c73939b1169f9aa5f9793a26161fc9dcecb1c4d72573fc2239f028017b6616e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_35584bfa8fde117bbeafce9de10c3329ab1fc27f70e950e011b38ac0d0456950->leave($__internal_35584bfa8fde117bbeafce9de10c3329ab1fc27f70e950e011b38ac0d0456950_prof);

        
        $__internal_2c73939b1169f9aa5f9793a26161fc9dcecb1c4d72573fc2239f028017b6616e->leave($__internal_2c73939b1169f9aa5f9793a26161fc9dcecb1c4d72573fc2239f028017b6616e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
