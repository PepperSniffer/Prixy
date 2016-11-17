<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8e3682c2a1a1db12c78143d96ba10409bfc7ac5bb366ea8b503c1a48f8dc4c9a extends Twig_Template
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
        $__internal_9fb47fdb3c63c13df82a8ced6d2e787c1d72fff7e2fa7e1d0b13b2cba90138cd = $this->env->getExtension("native_profiler");
        $__internal_9fb47fdb3c63c13df82a8ced6d2e787c1d72fff7e2fa7e1d0b13b2cba90138cd->enter($__internal_9fb47fdb3c63c13df82a8ced6d2e787c1d72fff7e2fa7e1d0b13b2cba90138cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9fb47fdb3c63c13df82a8ced6d2e787c1d72fff7e2fa7e1d0b13b2cba90138cd->leave($__internal_9fb47fdb3c63c13df82a8ced6d2e787c1d72fff7e2fa7e1d0b13b2cba90138cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
