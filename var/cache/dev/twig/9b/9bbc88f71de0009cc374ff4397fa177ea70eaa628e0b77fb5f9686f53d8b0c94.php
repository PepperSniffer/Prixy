<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ff4d35ebd8ab4e8f7957554ecc16966d51abcf189fa797fea709463c97d4b73f extends Twig_Template
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
        $__internal_d18f16dc3172a15ce74d8ec800991cbc9999277edbd384d5a2b1f865811cc554 = $this->env->getExtension("native_profiler");
        $__internal_d18f16dc3172a15ce74d8ec800991cbc9999277edbd384d5a2b1f865811cc554->enter($__internal_d18f16dc3172a15ce74d8ec800991cbc9999277edbd384d5a2b1f865811cc554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d18f16dc3172a15ce74d8ec800991cbc9999277edbd384d5a2b1f865811cc554->leave($__internal_d18f16dc3172a15ce74d8ec800991cbc9999277edbd384d5a2b1f865811cc554_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
