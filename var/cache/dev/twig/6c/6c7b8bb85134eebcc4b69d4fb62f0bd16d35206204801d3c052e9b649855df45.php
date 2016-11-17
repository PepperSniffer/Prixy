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
        $__internal_0cea7c8779996600648cc2d862dff9f830b6865d56e0c80c6887e84aad2be82b = $this->env->getExtension("native_profiler");
        $__internal_0cea7c8779996600648cc2d862dff9f830b6865d56e0c80c6887e84aad2be82b->enter($__internal_0cea7c8779996600648cc2d862dff9f830b6865d56e0c80c6887e84aad2be82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0cea7c8779996600648cc2d862dff9f830b6865d56e0c80c6887e84aad2be82b->leave($__internal_0cea7c8779996600648cc2d862dff9f830b6865d56e0c80c6887e84aad2be82b_prof);

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
