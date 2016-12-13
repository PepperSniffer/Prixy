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
        $__internal_9cdbe150d2f5610ac95a89f96a4e21bf5996841f537985d2e80453cc9da048ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdbe150d2f5610ac95a89f96a4e21bf5996841f537985d2e80453cc9da048ce->enter($__internal_9cdbe150d2f5610ac95a89f96a4e21bf5996841f537985d2e80453cc9da048ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7ae2e529cd1155a2702254653ffc9b55d747718b169147286141b3fcaffd3ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae2e529cd1155a2702254653ffc9b55d747718b169147286141b3fcaffd3ba3->enter($__internal_7ae2e529cd1155a2702254653ffc9b55d747718b169147286141b3fcaffd3ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9cdbe150d2f5610ac95a89f96a4e21bf5996841f537985d2e80453cc9da048ce->leave($__internal_9cdbe150d2f5610ac95a89f96a4e21bf5996841f537985d2e80453cc9da048ce_prof);

        
        $__internal_7ae2e529cd1155a2702254653ffc9b55d747718b169147286141b3fcaffd3ba3->leave($__internal_7ae2e529cd1155a2702254653ffc9b55d747718b169147286141b3fcaffd3ba3_prof);

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
