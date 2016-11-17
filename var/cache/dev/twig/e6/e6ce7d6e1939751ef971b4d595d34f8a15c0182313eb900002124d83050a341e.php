<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c40d2eef13f4f8b82423bf92e2beb193d6e40913116cff36043cd37c050bc61d extends Twig_Template
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
        $__internal_89835ab9791ab991f83c67b72159df2206750ee4aafc5fd5d4db0119cf1d7e61 = $this->env->getExtension("native_profiler");
        $__internal_89835ab9791ab991f83c67b72159df2206750ee4aafc5fd5d4db0119cf1d7e61->enter($__internal_89835ab9791ab991f83c67b72159df2206750ee4aafc5fd5d4db0119cf1d7e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_89835ab9791ab991f83c67b72159df2206750ee4aafc5fd5d4db0119cf1d7e61->leave($__internal_89835ab9791ab991f83c67b72159df2206750ee4aafc5fd5d4db0119cf1d7e61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
