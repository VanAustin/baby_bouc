<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30838f43c6ef799c0e9f097dd2283ba92e3cdeec4c115976e8b98c2bfb982e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30838f43c6ef799c0e9f097dd2283ba92e3cdeec4c115976e8b98c2bfb982e36->enter($__internal_30838f43c6ef799c0e9f097dd2283ba92e3cdeec4c115976e8b98c2bfb982e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_57fbebdd47f8db6e1c0ed8dc3a027414655022294def4699ace3fb1a074d5f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fbebdd47f8db6e1c0ed8dc3a027414655022294def4699ace3fb1a074d5f7f->enter($__internal_57fbebdd47f8db6e1c0ed8dc3a027414655022294def4699ace3fb1a074d5f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30838f43c6ef799c0e9f097dd2283ba92e3cdeec4c115976e8b98c2bfb982e36->leave($__internal_30838f43c6ef799c0e9f097dd2283ba92e3cdeec4c115976e8b98c2bfb982e36_prof);

        
        $__internal_57fbebdd47f8db6e1c0ed8dc3a027414655022294def4699ace3fb1a074d5f7f->leave($__internal_57fbebdd47f8db6e1c0ed8dc3a027414655022294def4699ace3fb1a074d5f7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d26840227fd08d0b033775daf1d08cc847266a8bf8b564a0b7f86d0ba2edf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d26840227fd08d0b033775daf1d08cc847266a8bf8b564a0b7f86d0ba2edf4d->enter($__internal_0d26840227fd08d0b033775daf1d08cc847266a8bf8b564a0b7f86d0ba2edf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4687b662e1bf43fccc8c76f60116e541a5b2f1f55c7c4fff5697a8f956f81a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4687b662e1bf43fccc8c76f60116e541a5b2f1f55c7c4fff5697a8f956f81a68->enter($__internal_4687b662e1bf43fccc8c76f60116e541a5b2f1f55c7c4fff5697a8f956f81a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4687b662e1bf43fccc8c76f60116e541a5b2f1f55c7c4fff5697a8f956f81a68->leave($__internal_4687b662e1bf43fccc8c76f60116e541a5b2f1f55c7c4fff5697a8f956f81a68_prof);

        
        $__internal_0d26840227fd08d0b033775daf1d08cc847266a8bf8b564a0b7f86d0ba2edf4d->leave($__internal_0d26840227fd08d0b033775daf1d08cc847266a8bf8b564a0b7f86d0ba2edf4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_781b0c31b9139e61dacd9f933b20fe3c3ff9685db0ac04e1ca1f0643ca0028f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781b0c31b9139e61dacd9f933b20fe3c3ff9685db0ac04e1ca1f0643ca0028f5->enter($__internal_781b0c31b9139e61dacd9f933b20fe3c3ff9685db0ac04e1ca1f0643ca0028f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b2c9d9a0185af765a0e5af00f51f15a2813f6ff3c0c751c1b17b8d58e08010c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2c9d9a0185af765a0e5af00f51f15a2813f6ff3c0c751c1b17b8d58e08010c->enter($__internal_2b2c9d9a0185af765a0e5af00f51f15a2813f6ff3c0c751c1b17b8d58e08010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b2c9d9a0185af765a0e5af00f51f15a2813f6ff3c0c751c1b17b8d58e08010c->leave($__internal_2b2c9d9a0185af765a0e5af00f51f15a2813f6ff3c0c751c1b17b8d58e08010c_prof);

        
        $__internal_781b0c31b9139e61dacd9f933b20fe3c3ff9685db0ac04e1ca1f0643ca0028f5->leave($__internal_781b0c31b9139e61dacd9f933b20fe3c3ff9685db0ac04e1ca1f0643ca0028f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_821303a2dcf88cf73860276347fdde73a2e02471c0af7cdfcfe028cca9c13deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821303a2dcf88cf73860276347fdde73a2e02471c0af7cdfcfe028cca9c13deb->enter($__internal_821303a2dcf88cf73860276347fdde73a2e02471c0af7cdfcfe028cca9c13deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d335f287204703232e4b268b44be7817a71c014fe21c9c3865f51e38ba28a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d335f287204703232e4b268b44be7817a71c014fe21c9c3865f51e38ba28a32->enter($__internal_1d335f287204703232e4b268b44be7817a71c014fe21c9c3865f51e38ba28a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d335f287204703232e4b268b44be7817a71c014fe21c9c3865f51e38ba28a32->leave($__internal_1d335f287204703232e4b268b44be7817a71c014fe21c9c3865f51e38ba28a32_prof);

        
        $__internal_821303a2dcf88cf73860276347fdde73a2e02471c0af7cdfcfe028cca9c13deb->leave($__internal_821303a2dcf88cf73860276347fdde73a2e02471c0af7cdfcfe028cca9c13deb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
