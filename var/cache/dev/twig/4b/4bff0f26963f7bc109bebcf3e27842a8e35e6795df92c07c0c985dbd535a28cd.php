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
        $__internal_cb53b0055b6e62a29d4f3c74c358aed777c5aa0143f76f7ff4ef012994cf4e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb53b0055b6e62a29d4f3c74c358aed777c5aa0143f76f7ff4ef012994cf4e75->enter($__internal_cb53b0055b6e62a29d4f3c74c358aed777c5aa0143f76f7ff4ef012994cf4e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f76926862f99e3f63b6a4a2a0fb090b1f8c32acf370aec4714f3444053f9060b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76926862f99e3f63b6a4a2a0fb090b1f8c32acf370aec4714f3444053f9060b->enter($__internal_f76926862f99e3f63b6a4a2a0fb090b1f8c32acf370aec4714f3444053f9060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cb53b0055b6e62a29d4f3c74c358aed777c5aa0143f76f7ff4ef012994cf4e75->leave($__internal_cb53b0055b6e62a29d4f3c74c358aed777c5aa0143f76f7ff4ef012994cf4e75_prof);

        
        $__internal_f76926862f99e3f63b6a4a2a0fb090b1f8c32acf370aec4714f3444053f9060b->leave($__internal_f76926862f99e3f63b6a4a2a0fb090b1f8c32acf370aec4714f3444053f9060b_prof);

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
