<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5fa07b8a6d07e3bdb18f4324c592cc200695ec5f889d108638cae40b425f0fdb extends Twig_Template
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
        $__internal_1533f3d812ed959ca553edb8106346ee6668aacae95c5b76efc33eafb12f7aac = $this->env->getExtension("native_profiler");
        $__internal_1533f3d812ed959ca553edb8106346ee6668aacae95c5b76efc33eafb12f7aac->enter($__internal_1533f3d812ed959ca553edb8106346ee6668aacae95c5b76efc33eafb12f7aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1533f3d812ed959ca553edb8106346ee6668aacae95c5b76efc33eafb12f7aac->leave($__internal_1533f3d812ed959ca553edb8106346ee6668aacae95c5b76efc33eafb12f7aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
