<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_33905dc2430f2922535fd0bb4b01f40b7f56785191f6e4a25a4b227a35de73df extends Twig_Template
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
        $__internal_a78438e10fd65b01a0c76820586a9d229ac3d7dc6be01ebeb08bd71740a09898 = $this->env->getExtension("native_profiler");
        $__internal_a78438e10fd65b01a0c76820586a9d229ac3d7dc6be01ebeb08bd71740a09898->enter($__internal_a78438e10fd65b01a0c76820586a9d229ac3d7dc6be01ebeb08bd71740a09898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a78438e10fd65b01a0c76820586a9d229ac3d7dc6be01ebeb08bd71740a09898->leave($__internal_a78438e10fd65b01a0c76820586a9d229ac3d7dc6be01ebeb08bd71740a09898_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
