<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_44fbceaa9490e5c2d95e4902ea0023a2381387505d4d9311ed97698e9d6ec678 extends Twig_Template
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
        $__internal_cc64925aa14334867c431194a2e7bf4b20fff0b5422594f0ec1dd80e748699c7 = $this->env->getExtension("native_profiler");
        $__internal_cc64925aa14334867c431194a2e7bf4b20fff0b5422594f0ec1dd80e748699c7->enter($__internal_cc64925aa14334867c431194a2e7bf4b20fff0b5422594f0ec1dd80e748699c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cc64925aa14334867c431194a2e7bf4b20fff0b5422594f0ec1dd80e748699c7->leave($__internal_cc64925aa14334867c431194a2e7bf4b20fff0b5422594f0ec1dd80e748699c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
