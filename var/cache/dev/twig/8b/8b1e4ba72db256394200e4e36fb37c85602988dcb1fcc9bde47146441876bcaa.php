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
        $__internal_d4e2eba02981ceea9bee903b6226c4cb8f476022afd71f88f3f586ceb8fc80aa = $this->env->getExtension("native_profiler");
        $__internal_d4e2eba02981ceea9bee903b6226c4cb8f476022afd71f88f3f586ceb8fc80aa->enter($__internal_d4e2eba02981ceea9bee903b6226c4cb8f476022afd71f88f3f586ceb8fc80aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d4e2eba02981ceea9bee903b6226c4cb8f476022afd71f88f3f586ceb8fc80aa->leave($__internal_d4e2eba02981ceea9bee903b6226c4cb8f476022afd71f88f3f586ceb8fc80aa_prof);

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
