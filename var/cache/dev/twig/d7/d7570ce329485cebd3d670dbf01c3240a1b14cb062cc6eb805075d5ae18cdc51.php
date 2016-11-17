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
        $__internal_64af59e7458cabc4b447438b80f162c37bd700a1baea24c90418b0fb271bab95 = $this->env->getExtension("native_profiler");
        $__internal_64af59e7458cabc4b447438b80f162c37bd700a1baea24c90418b0fb271bab95->enter($__internal_64af59e7458cabc4b447438b80f162c37bd700a1baea24c90418b0fb271bab95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_64af59e7458cabc4b447438b80f162c37bd700a1baea24c90418b0fb271bab95->leave($__internal_64af59e7458cabc4b447438b80f162c37bd700a1baea24c90418b0fb271bab95_prof);

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
