<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c609787acd24ec0b4b1a361d4531bbba377252f376fc0c3641ca193572b7906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33d079f07deeaa81b10b13ab94cc2e0b5d31064282a9bfb6364389c948b9314c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d079f07deeaa81b10b13ab94cc2e0b5d31064282a9bfb6364389c948b9314c->enter($__internal_33d079f07deeaa81b10b13ab94cc2e0b5d31064282a9bfb6364389c948b9314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_bc199539fec47dbb3446981292a4ca2458590343b7987cabd4bea0b4704d1881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc199539fec47dbb3446981292a4ca2458590343b7987cabd4bea0b4704d1881->enter($__internal_bc199539fec47dbb3446981292a4ca2458590343b7987cabd4bea0b4704d1881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d079f07deeaa81b10b13ab94cc2e0b5d31064282a9bfb6364389c948b9314c->leave($__internal_33d079f07deeaa81b10b13ab94cc2e0b5d31064282a9bfb6364389c948b9314c_prof);

        
        $__internal_bc199539fec47dbb3446981292a4ca2458590343b7987cabd4bea0b4704d1881->leave($__internal_bc199539fec47dbb3446981292a4ca2458590343b7987cabd4bea0b4704d1881_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_caacd5eeee7f17e8dc7a88d0ca00392763f98d93130eb2e36e96de7427d5a2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caacd5eeee7f17e8dc7a88d0ca00392763f98d93130eb2e36e96de7427d5a2df->enter($__internal_caacd5eeee7f17e8dc7a88d0ca00392763f98d93130eb2e36e96de7427d5a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_25efad68cfaf9a44f2b0ed73875ddee0fe315f7def8907d4ac904e467ac2e44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25efad68cfaf9a44f2b0ed73875ddee0fe315f7def8907d4ac904e467ac2e44f->enter($__internal_25efad68cfaf9a44f2b0ed73875ddee0fe315f7def8907d4ac904e467ac2e44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_25efad68cfaf9a44f2b0ed73875ddee0fe315f7def8907d4ac904e467ac2e44f->leave($__internal_25efad68cfaf9a44f2b0ed73875ddee0fe315f7def8907d4ac904e467ac2e44f_prof);

        
        $__internal_caacd5eeee7f17e8dc7a88d0ca00392763f98d93130eb2e36e96de7427d5a2df->leave($__internal_caacd5eeee7f17e8dc7a88d0ca00392763f98d93130eb2e36e96de7427d5a2df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
