<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_efda714de0692991fd6054a9ddf8d655700c9d793d3709e8cdf3d7e4c976e548 extends Twig_Template
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
        $__internal_d7fad5958db9b02a1a0052675c5330defb233f8c02478127d7bab5f6e7be6725 = $this->env->getExtension("native_profiler");
        $__internal_d7fad5958db9b02a1a0052675c5330defb233f8c02478127d7bab5f6e7be6725->enter($__internal_d7fad5958db9b02a1a0052675c5330defb233f8c02478127d7bab5f6e7be6725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d7fad5958db9b02a1a0052675c5330defb233f8c02478127d7bab5f6e7be6725->leave($__internal_d7fad5958db9b02a1a0052675c5330defb233f8c02478127d7bab5f6e7be6725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
