<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69095c03c6ae562c9a19e5d288c11b0c1f5733d9061df13f842dbf108f256836 extends Twig_Template
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
        $__internal_bd3354a654a696c4dc4de880bae5afe9e720a1ed91fa95f3cb70b467349dde19 = $this->env->getExtension("native_profiler");
        $__internal_bd3354a654a696c4dc4de880bae5afe9e720a1ed91fa95f3cb70b467349dde19->enter($__internal_bd3354a654a696c4dc4de880bae5afe9e720a1ed91fa95f3cb70b467349dde19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bd3354a654a696c4dc4de880bae5afe9e720a1ed91fa95f3cb70b467349dde19->leave($__internal_bd3354a654a696c4dc4de880bae5afe9e720a1ed91fa95f3cb70b467349dde19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
