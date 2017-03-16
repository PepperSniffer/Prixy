<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_23b3db15b76977ff4d101bc7bfbe2d6e4f89d5212f8d138f283f9f9bf6103336 extends Twig_Template
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
        $__internal_3510b8e0e4a89188d9aa0a4f6fc39c0cae0df09b5301f6c7f19f0bc64a4a06be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3510b8e0e4a89188d9aa0a4f6fc39c0cae0df09b5301f6c7f19f0bc64a4a06be->enter($__internal_3510b8e0e4a89188d9aa0a4f6fc39c0cae0df09b5301f6c7f19f0bc64a4a06be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ad6c4938ef87c3bec11bc73dac2ea89826a7a857b99ebcc7f209c482e0252e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6c4938ef87c3bec11bc73dac2ea89826a7a857b99ebcc7f209c482e0252e3b->enter($__internal_ad6c4938ef87c3bec11bc73dac2ea89826a7a857b99ebcc7f209c482e0252e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3510b8e0e4a89188d9aa0a4f6fc39c0cae0df09b5301f6c7f19f0bc64a4a06be->leave($__internal_3510b8e0e4a89188d9aa0a4f6fc39c0cae0df09b5301f6c7f19f0bc64a4a06be_prof);

        
        $__internal_ad6c4938ef87c3bec11bc73dac2ea89826a7a857b99ebcc7f209c482e0252e3b->leave($__internal_ad6c4938ef87c3bec11bc73dac2ea89826a7a857b99ebcc7f209c482e0252e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\apps\\Prixy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
