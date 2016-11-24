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
        $__internal_b26372f3284296994065b39d0a10e0616076a6441405bc6ee4d798d4446ab8c5 = $this->env->getExtension("native_profiler");
        $__internal_b26372f3284296994065b39d0a10e0616076a6441405bc6ee4d798d4446ab8c5->enter($__internal_b26372f3284296994065b39d0a10e0616076a6441405bc6ee4d798d4446ab8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b26372f3284296994065b39d0a10e0616076a6441405bc6ee4d798d4446ab8c5->leave($__internal_b26372f3284296994065b39d0a10e0616076a6441405bc6ee4d798d4446ab8c5_prof);

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
