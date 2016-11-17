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
        $__internal_3fd2776aa098c0132160ceb80df9edd9eb9ab06ad9e8116b96ecc5122c219d53 = $this->env->getExtension("native_profiler");
        $__internal_3fd2776aa098c0132160ceb80df9edd9eb9ab06ad9e8116b96ecc5122c219d53->enter($__internal_3fd2776aa098c0132160ceb80df9edd9eb9ab06ad9e8116b96ecc5122c219d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3fd2776aa098c0132160ceb80df9edd9eb9ab06ad9e8116b96ecc5122c219d53->leave($__internal_3fd2776aa098c0132160ceb80df9edd9eb9ab06ad9e8116b96ecc5122c219d53_prof);

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
