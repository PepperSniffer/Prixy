<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9aa242a8ebd7e6c4763af1853a57594744f447547bbb7a0bc026e60c67444b56 extends Twig_Template
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
        $__internal_54891f01c65f5099c9a597ebb8cc35fa1d1c4b73927085b5945f02ef817ee93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54891f01c65f5099c9a597ebb8cc35fa1d1c4b73927085b5945f02ef817ee93d->enter($__internal_54891f01c65f5099c9a597ebb8cc35fa1d1c4b73927085b5945f02ef817ee93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_66f2c81b6f4c45a02e083c64bd46e2f85d0a4122f13b243e3a6fd7ffaef535ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f2c81b6f4c45a02e083c64bd46e2f85d0a4122f13b243e3a6fd7ffaef535ca->enter($__internal_66f2c81b6f4c45a02e083c64bd46e2f85d0a4122f13b243e3a6fd7ffaef535ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_54891f01c65f5099c9a597ebb8cc35fa1d1c4b73927085b5945f02ef817ee93d->leave($__internal_54891f01c65f5099c9a597ebb8cc35fa1d1c4b73927085b5945f02ef817ee93d_prof);

        
        $__internal_66f2c81b6f4c45a02e083c64bd46e2f85d0a4122f13b243e3a6fd7ffaef535ca->leave($__internal_66f2c81b6f4c45a02e083c64bd46e2f85d0a4122f13b243e3a6fd7ffaef535ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
