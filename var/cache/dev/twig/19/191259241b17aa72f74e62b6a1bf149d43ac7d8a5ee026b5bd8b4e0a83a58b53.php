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
        $__internal_f524692ae860b938b3391d039d540cd495f9abf033da529516d5312a62920b5a = $this->env->getExtension("native_profiler");
        $__internal_f524692ae860b938b3391d039d540cd495f9abf033da529516d5312a62920b5a->enter($__internal_f524692ae860b938b3391d039d540cd495f9abf033da529516d5312a62920b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f524692ae860b938b3391d039d540cd495f9abf033da529516d5312a62920b5a->leave($__internal_f524692ae860b938b3391d039d540cd495f9abf033da529516d5312a62920b5a_prof);

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
