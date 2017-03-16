<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3f324f84c77d146cb5abc8ed655d3488adcee3b9027066036699055b79997fb5 extends Twig_Template
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
        $__internal_1ad7ca0b0850bae539d00eb2da237d464f6c9fbba8103248e7a5719ae9df76b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad7ca0b0850bae539d00eb2da237d464f6c9fbba8103248e7a5719ae9df76b0->enter($__internal_1ad7ca0b0850bae539d00eb2da237d464f6c9fbba8103248e7a5719ae9df76b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_edc795d321e48eeefad02d050c3bd654fdbb1df997ada1626c278c67a13f7934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc795d321e48eeefad02d050c3bd654fdbb1df997ada1626c278c67a13f7934->enter($__internal_edc795d321e48eeefad02d050c3bd654fdbb1df997ada1626c278c67a13f7934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1ad7ca0b0850bae539d00eb2da237d464f6c9fbba8103248e7a5719ae9df76b0->leave($__internal_1ad7ca0b0850bae539d00eb2da237d464f6c9fbba8103248e7a5719ae9df76b0_prof);

        
        $__internal_edc795d321e48eeefad02d050c3bd654fdbb1df997ada1626c278c67a13f7934->leave($__internal_edc795d321e48eeefad02d050c3bd654fdbb1df997ada1626c278c67a13f7934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
