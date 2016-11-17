<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c3fef519c454d7711918438625e204562377fd851c19b3f824a60a48bcfe852c extends Twig_Template
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
        $__internal_9fb8a18c38e1647790814db6eca49e6812911f98a15d4e43722c7c782ce51c8f = $this->env->getExtension("native_profiler");
        $__internal_9fb8a18c38e1647790814db6eca49e6812911f98a15d4e43722c7c782ce51c8f->enter($__internal_9fb8a18c38e1647790814db6eca49e6812911f98a15d4e43722c7c782ce51c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9fb8a18c38e1647790814db6eca49e6812911f98a15d4e43722c7c782ce51c8f->leave($__internal_9fb8a18c38e1647790814db6eca49e6812911f98a15d4e43722c7c782ce51c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
