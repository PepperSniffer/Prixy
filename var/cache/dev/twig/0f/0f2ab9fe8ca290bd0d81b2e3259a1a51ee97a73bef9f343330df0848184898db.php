<?php

/* ::base.html.twig */
class __TwigTemplate_48030b2143fd073c35933ebc38c04d784093596987d74cfb55c39a2271218f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e73d373b9c8d6ccabfb81efc78b713f7e6a5f62dc56dbaf924cd6c5434dd9d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73d373b9c8d6ccabfb81efc78b713f7e6a5f62dc56dbaf924cd6c5434dd9d66->enter($__internal_e73d373b9c8d6ccabfb81efc78b713f7e6a5f62dc56dbaf924cd6c5434dd9d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_65925fec2773a71aafca6839ba3c9938d8ff90a79b07b6bbee9421e0d91562b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65925fec2773a71aafca6839ba3c9938d8ff90a79b07b6bbee9421e0d91562b5->enter($__internal_65925fec2773a71aafca6839ba3c9938d8ff90a79b07b6bbee9421e0d91562b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e73d373b9c8d6ccabfb81efc78b713f7e6a5f62dc56dbaf924cd6c5434dd9d66->leave($__internal_e73d373b9c8d6ccabfb81efc78b713f7e6a5f62dc56dbaf924cd6c5434dd9d66_prof);

        
        $__internal_65925fec2773a71aafca6839ba3c9938d8ff90a79b07b6bbee9421e0d91562b5->leave($__internal_65925fec2773a71aafca6839ba3c9938d8ff90a79b07b6bbee9421e0d91562b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_612d533db3537dbd6ed1a4e14d7238177a13332c6bf76c66799c66e1ab2438c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612d533db3537dbd6ed1a4e14d7238177a13332c6bf76c66799c66e1ab2438c3->enter($__internal_612d533db3537dbd6ed1a4e14d7238177a13332c6bf76c66799c66e1ab2438c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25cf899352a51c8e20c8a7a0c13760226fd2e17291a489efd5d566ced51b6278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cf899352a51c8e20c8a7a0c13760226fd2e17291a489efd5d566ced51b6278->enter($__internal_25cf899352a51c8e20c8a7a0c13760226fd2e17291a489efd5d566ced51b6278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_25cf899352a51c8e20c8a7a0c13760226fd2e17291a489efd5d566ced51b6278->leave($__internal_25cf899352a51c8e20c8a7a0c13760226fd2e17291a489efd5d566ced51b6278_prof);

        
        $__internal_612d533db3537dbd6ed1a4e14d7238177a13332c6bf76c66799c66e1ab2438c3->leave($__internal_612d533db3537dbd6ed1a4e14d7238177a13332c6bf76c66799c66e1ab2438c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c8903f8554809fc7d87915d7e6a424839d253b0c88ac60f0f9779df03ad52cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8903f8554809fc7d87915d7e6a424839d253b0c88ac60f0f9779df03ad52cb->enter($__internal_7c8903f8554809fc7d87915d7e6a424839d253b0c88ac60f0f9779df03ad52cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f716e4d07ab8d4fa970aa65f83742e6a9abb34768aecaf594bf58ac2dd0fc20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f716e4d07ab8d4fa970aa65f83742e6a9abb34768aecaf594bf58ac2dd0fc20e->enter($__internal_f716e4d07ab8d4fa970aa65f83742e6a9abb34768aecaf594bf58ac2dd0fc20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f716e4d07ab8d4fa970aa65f83742e6a9abb34768aecaf594bf58ac2dd0fc20e->leave($__internal_f716e4d07ab8d4fa970aa65f83742e6a9abb34768aecaf594bf58ac2dd0fc20e_prof);

        
        $__internal_7c8903f8554809fc7d87915d7e6a424839d253b0c88ac60f0f9779df03ad52cb->leave($__internal_7c8903f8554809fc7d87915d7e6a424839d253b0c88ac60f0f9779df03ad52cb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a409cd0059b00b51ff45e59690859d459e67578058a73a5d9c972ae49ae5e69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a409cd0059b00b51ff45e59690859d459e67578058a73a5d9c972ae49ae5e69c->enter($__internal_a409cd0059b00b51ff45e59690859d459e67578058a73a5d9c972ae49ae5e69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_072409a362ec46072c38494c2a90404dc01fb5828d4fd8951f04aa0d7a01fca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072409a362ec46072c38494c2a90404dc01fb5828d4fd8951f04aa0d7a01fca3->enter($__internal_072409a362ec46072c38494c2a90404dc01fb5828d4fd8951f04aa0d7a01fca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_072409a362ec46072c38494c2a90404dc01fb5828d4fd8951f04aa0d7a01fca3->leave($__internal_072409a362ec46072c38494c2a90404dc01fb5828d4fd8951f04aa0d7a01fca3_prof);

        
        $__internal_a409cd0059b00b51ff45e59690859d459e67578058a73a5d9c972ae49ae5e69c->leave($__internal_a409cd0059b00b51ff45e59690859d459e67578058a73a5d9c972ae49ae5e69c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cf17788cb0eaa2e8bab0ac188fc65c8b8d21a116926f4343c031dad215f8871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf17788cb0eaa2e8bab0ac188fc65c8b8d21a116926f4343c031dad215f8871->enter($__internal_2cf17788cb0eaa2e8bab0ac188fc65c8b8d21a116926f4343c031dad215f8871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af47f21359f57a12c14a18c320937ef40dc16d53b801c43ebd6a86d36784561a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af47f21359f57a12c14a18c320937ef40dc16d53b801c43ebd6a86d36784561a->enter($__internal_af47f21359f57a12c14a18c320937ef40dc16d53b801c43ebd6a86d36784561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af47f21359f57a12c14a18c320937ef40dc16d53b801c43ebd6a86d36784561a->leave($__internal_af47f21359f57a12c14a18c320937ef40dc16d53b801c43ebd6a86d36784561a_prof);

        
        $__internal_2cf17788cb0eaa2e8bab0ac188fc65c8b8d21a116926f4343c031dad215f8871->leave($__internal_2cf17788cb0eaa2e8bab0ac188fc65c8b8d21a116926f4343c031dad215f8871_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\apps\\Prixy\\app/Resources\\views/base.html.twig");
    }
}
