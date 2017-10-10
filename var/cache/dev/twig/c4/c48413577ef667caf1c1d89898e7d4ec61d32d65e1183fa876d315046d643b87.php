<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2e366d753fa19c767eb719a9bdec877ec3bcc387f06a26830fc81bf76364037d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5aed6af03e83e20546f398178d02073045aa45667b442eb649a8533680d5bc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aed6af03e83e20546f398178d02073045aa45667b442eb649a8533680d5bc72->enter($__internal_5aed6af03e83e20546f398178d02073045aa45667b442eb649a8533680d5bc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_b5ff928d43ec8a07b39ab70e8736ea33f72f200fa587404f2352904dee77f050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ff928d43ec8a07b39ab70e8736ea33f72f200fa587404f2352904dee77f050->enter($__internal_b5ff928d43ec8a07b39ab70e8736ea33f72f200fa587404f2352904dee77f050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aed6af03e83e20546f398178d02073045aa45667b442eb649a8533680d5bc72->leave($__internal_5aed6af03e83e20546f398178d02073045aa45667b442eb649a8533680d5bc72_prof);

        
        $__internal_b5ff928d43ec8a07b39ab70e8736ea33f72f200fa587404f2352904dee77f050->leave($__internal_b5ff928d43ec8a07b39ab70e8736ea33f72f200fa587404f2352904dee77f050_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50c683df422880b977a79cd0293b9ee5ce964bc66c764abc2bc7d5c0b7baed2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c683df422880b977a79cd0293b9ee5ce964bc66c764abc2bc7d5c0b7baed2a->enter($__internal_50c683df422880b977a79cd0293b9ee5ce964bc66c764abc2bc7d5c0b7baed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d810ee451dc026af35bc07a06595a6b096cc8bc918008856ff41945f7cf483db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d810ee451dc026af35bc07a06595a6b096cc8bc918008856ff41945f7cf483db->enter($__internal_d810ee451dc026af35bc07a06595a6b096cc8bc918008856ff41945f7cf483db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d810ee451dc026af35bc07a06595a6b096cc8bc918008856ff41945f7cf483db->leave($__internal_d810ee451dc026af35bc07a06595a6b096cc8bc918008856ff41945f7cf483db_prof);

        
        $__internal_50c683df422880b977a79cd0293b9ee5ce964bc66c764abc2bc7d5c0b7baed2a->leave($__internal_50c683df422880b977a79cd0293b9ee5ce964bc66c764abc2bc7d5c0b7baed2a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
