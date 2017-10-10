<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_d869e02ebe7ac1413ca1b3439af31062ac38da710dcf5e3eb1f6a50ee31ebba0 extends Twig_Template
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
        $__internal_74cb0c2460890ba59031910580fd6cc04e3554842ded7733d597f43fb36d4b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cb0c2460890ba59031910580fd6cc04e3554842ded7733d597f43fb36d4b4d->enter($__internal_74cb0c2460890ba59031910580fd6cc04e3554842ded7733d597f43fb36d4b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_ee37bae41d85a5a09f9d3452e3c789e443fd376a69ed7404cb316238ccd131bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee37bae41d85a5a09f9d3452e3c789e443fd376a69ed7404cb316238ccd131bf->enter($__internal_ee37bae41d85a5a09f9d3452e3c789e443fd376a69ed7404cb316238ccd131bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74cb0c2460890ba59031910580fd6cc04e3554842ded7733d597f43fb36d4b4d->leave($__internal_74cb0c2460890ba59031910580fd6cc04e3554842ded7733d597f43fb36d4b4d_prof);

        
        $__internal_ee37bae41d85a5a09f9d3452e3c789e443fd376a69ed7404cb316238ccd131bf->leave($__internal_ee37bae41d85a5a09f9d3452e3c789e443fd376a69ed7404cb316238ccd131bf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4aed2a41ef96fa8c5279b0cc3d8a7a7d6399646f4a63d758c6c88e829c24bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4aed2a41ef96fa8c5279b0cc3d8a7a7d6399646f4a63d758c6c88e829c24bea->enter($__internal_a4aed2a41ef96fa8c5279b0cc3d8a7a7d6399646f4a63d758c6c88e829c24bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a51a2e2de7931e1d588855bc496535ee224eccfc541c6bed317c3dd887baf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a51a2e2de7931e1d588855bc496535ee224eccfc541c6bed317c3dd887baf8c->enter($__internal_8a51a2e2de7931e1d588855bc496535ee224eccfc541c6bed317c3dd887baf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8a51a2e2de7931e1d588855bc496535ee224eccfc541c6bed317c3dd887baf8c->leave($__internal_8a51a2e2de7931e1d588855bc496535ee224eccfc541c6bed317c3dd887baf8c_prof);

        
        $__internal_a4aed2a41ef96fa8c5279b0cc3d8a7a7d6399646f4a63d758c6c88e829c24bea->leave($__internal_a4aed2a41ef96fa8c5279b0cc3d8a7a7d6399646f4a63d758c6c88e829c24bea_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
