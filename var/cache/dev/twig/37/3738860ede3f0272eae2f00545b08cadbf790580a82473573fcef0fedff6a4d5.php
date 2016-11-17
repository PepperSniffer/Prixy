<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8e3682c2a1a1db12c78143d96ba10409bfc7ac5bb366ea8b503c1a48f8dc4c9a extends Twig_Template
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
        $__internal_9607e07fe75c919e50d26588c8c02625dd717e48d9b10406e290019f3ea2f0d9 = $this->env->getExtension("native_profiler");
        $__internal_9607e07fe75c919e50d26588c8c02625dd717e48d9b10406e290019f3ea2f0d9->enter($__internal_9607e07fe75c919e50d26588c8c02625dd717e48d9b10406e290019f3ea2f0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9607e07fe75c919e50d26588c8c02625dd717e48d9b10406e290019f3ea2f0d9->leave($__internal_9607e07fe75c919e50d26588c8c02625dd717e48d9b10406e290019f3ea2f0d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
