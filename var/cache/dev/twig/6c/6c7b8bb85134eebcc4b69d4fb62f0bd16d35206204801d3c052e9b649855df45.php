<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0d30e2cb72948a9cb51d1dd4c618fe0281d392ecd8dafcbf9576084544e07815 extends Twig_Template
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
        $__internal_b8eb15d3c1de7fb0a0c92470cb2c40aa38505a8c57951fac78b18fc0d7111a54 = $this->env->getExtension("native_profiler");
        $__internal_b8eb15d3c1de7fb0a0c92470cb2c40aa38505a8c57951fac78b18fc0d7111a54->enter($__internal_b8eb15d3c1de7fb0a0c92470cb2c40aa38505a8c57951fac78b18fc0d7111a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b8eb15d3c1de7fb0a0c92470cb2c40aa38505a8c57951fac78b18fc0d7111a54->leave($__internal_b8eb15d3c1de7fb0a0c92470cb2c40aa38505a8c57951fac78b18fc0d7111a54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
