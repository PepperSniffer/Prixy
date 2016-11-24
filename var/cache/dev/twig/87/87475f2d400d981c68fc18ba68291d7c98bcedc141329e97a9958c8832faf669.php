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
        $__internal_6f6e929362cd899579460d0ebb93a07b6159b4330703cd3f6807fad1a7767759 = $this->env->getExtension("native_profiler");
        $__internal_6f6e929362cd899579460d0ebb93a07b6159b4330703cd3f6807fad1a7767759->enter($__internal_6f6e929362cd899579460d0ebb93a07b6159b4330703cd3f6807fad1a7767759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6f6e929362cd899579460d0ebb93a07b6159b4330703cd3f6807fad1a7767759->leave($__internal_6f6e929362cd899579460d0ebb93a07b6159b4330703cd3f6807fad1a7767759_prof);

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
