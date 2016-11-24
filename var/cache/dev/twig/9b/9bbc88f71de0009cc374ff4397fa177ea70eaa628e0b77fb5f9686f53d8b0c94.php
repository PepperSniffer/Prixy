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
        $__internal_978258633336db1a4b340b076e2e8830c6cc666f262e46ec6b3d69f39fc90acf = $this->env->getExtension("native_profiler");
        $__internal_978258633336db1a4b340b076e2e8830c6cc666f262e46ec6b3d69f39fc90acf->enter($__internal_978258633336db1a4b340b076e2e8830c6cc666f262e46ec6b3d69f39fc90acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_978258633336db1a4b340b076e2e8830c6cc666f262e46ec6b3d69f39fc90acf->leave($__internal_978258633336db1a4b340b076e2e8830c6cc666f262e46ec6b3d69f39fc90acf_prof);

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
