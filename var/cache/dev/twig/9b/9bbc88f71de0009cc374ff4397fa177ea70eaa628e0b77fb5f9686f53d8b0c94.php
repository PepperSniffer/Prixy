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
        $__internal_bd007c9e02d6b72bb8a54f12a5165a3562c6fc91a1f470e9b88b9a828ab3346e = $this->env->getExtension("native_profiler");
        $__internal_bd007c9e02d6b72bb8a54f12a5165a3562c6fc91a1f470e9b88b9a828ab3346e->enter($__internal_bd007c9e02d6b72bb8a54f12a5165a3562c6fc91a1f470e9b88b9a828ab3346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bd007c9e02d6b72bb8a54f12a5165a3562c6fc91a1f470e9b88b9a828ab3346e->leave($__internal_bd007c9e02d6b72bb8a54f12a5165a3562c6fc91a1f470e9b88b9a828ab3346e_prof);

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
