<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7cea1e189d0fb1a33bcd010f7e2cbeed4c6eaee655e913b70a90522774c6966f extends Twig_Template
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
        $__internal_266d1331585fb197fa0b4ad47ac5eb4c3ab26bc55ae7cce468b9d5bc2f836e0c = $this->env->getExtension("native_profiler");
        $__internal_266d1331585fb197fa0b4ad47ac5eb4c3ab26bc55ae7cce468b9d5bc2f836e0c->enter($__internal_266d1331585fb197fa0b4ad47ac5eb4c3ab26bc55ae7cce468b9d5bc2f836e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_266d1331585fb197fa0b4ad47ac5eb4c3ab26bc55ae7cce468b9d5bc2f836e0c->leave($__internal_266d1331585fb197fa0b4ad47ac5eb4c3ab26bc55ae7cce468b9d5bc2f836e0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
