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
        $__internal_719bf3aca0d4431dbd42a010513f82cca60aa4b3fb5c7f2a13fbeaaeb774dde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719bf3aca0d4431dbd42a010513f82cca60aa4b3fb5c7f2a13fbeaaeb774dde7->enter($__internal_719bf3aca0d4431dbd42a010513f82cca60aa4b3fb5c7f2a13fbeaaeb774dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6f819b65547e566fe39bb984ee97d5f7809787120ee92a59a7c7c0f961c0db5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f819b65547e566fe39bb984ee97d5f7809787120ee92a59a7c7c0f961c0db5c->enter($__internal_6f819b65547e566fe39bb984ee97d5f7809787120ee92a59a7c7c0f961c0db5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_719bf3aca0d4431dbd42a010513f82cca60aa4b3fb5c7f2a13fbeaaeb774dde7->leave($__internal_719bf3aca0d4431dbd42a010513f82cca60aa4b3fb5c7f2a13fbeaaeb774dde7_prof);

        
        $__internal_6f819b65547e566fe39bb984ee97d5f7809787120ee92a59a7c7c0f961c0db5c->leave($__internal_6f819b65547e566fe39bb984ee97d5f7809787120ee92a59a7c7c0f961c0db5c_prof);

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
