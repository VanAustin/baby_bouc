<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2555264d660ff04f55a5b3f0a82e701dbdb15c4cc029fc538d1dd181f7730f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2555264d660ff04f55a5b3f0a82e701dbdb15c4cc029fc538d1dd181f7730f71->enter($__internal_2555264d660ff04f55a5b3f0a82e701dbdb15c4cc029fc538d1dd181f7730f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9e51be71a7bfb02642abfea268b6483798a23aa07731d24354d49fc542b8cb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e51be71a7bfb02642abfea268b6483798a23aa07731d24354d49fc542b8cb6e->enter($__internal_9e51be71a7bfb02642abfea268b6483798a23aa07731d24354d49fc542b8cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2555264d660ff04f55a5b3f0a82e701dbdb15c4cc029fc538d1dd181f7730f71->leave($__internal_2555264d660ff04f55a5b3f0a82e701dbdb15c4cc029fc538d1dd181f7730f71_prof);

        
        $__internal_9e51be71a7bfb02642abfea268b6483798a23aa07731d24354d49fc542b8cb6e->leave($__internal_9e51be71a7bfb02642abfea268b6483798a23aa07731d24354d49fc542b8cb6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_491de01b70885c6c8cc70bfbe277d763c5879f79c4664d45d6acf43afc3c970c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491de01b70885c6c8cc70bfbe277d763c5879f79c4664d45d6acf43afc3c970c->enter($__internal_491de01b70885c6c8cc70bfbe277d763c5879f79c4664d45d6acf43afc3c970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1331c2ce4532b0d48efbc6abdf8af531eacf372180925eba8a1897f613c9831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1331c2ce4532b0d48efbc6abdf8af531eacf372180925eba8a1897f613c9831->enter($__internal_f1331c2ce4532b0d48efbc6abdf8af531eacf372180925eba8a1897f613c9831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f1331c2ce4532b0d48efbc6abdf8af531eacf372180925eba8a1897f613c9831->leave($__internal_f1331c2ce4532b0d48efbc6abdf8af531eacf372180925eba8a1897f613c9831_prof);

        
        $__internal_491de01b70885c6c8cc70bfbe277d763c5879f79c4664d45d6acf43afc3c970c->leave($__internal_491de01b70885c6c8cc70bfbe277d763c5879f79c4664d45d6acf43afc3c970c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a536017ed497cd60a263a940e6e041982a4deb7286d2c648ddc3608684b39e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a536017ed497cd60a263a940e6e041982a4deb7286d2c648ddc3608684b39e09->enter($__internal_a536017ed497cd60a263a940e6e041982a4deb7286d2c648ddc3608684b39e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b1376585b84e7b0c3e0b4dd7f8fe5182e4fb5b411b532fa2c7d1663ca8fe7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1376585b84e7b0c3e0b4dd7f8fe5182e4fb5b411b532fa2c7d1663ca8fe7d7->enter($__internal_5b1376585b84e7b0c3e0b4dd7f8fe5182e4fb5b411b532fa2c7d1663ca8fe7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b1376585b84e7b0c3e0b4dd7f8fe5182e4fb5b411b532fa2c7d1663ca8fe7d7->leave($__internal_5b1376585b84e7b0c3e0b4dd7f8fe5182e4fb5b411b532fa2c7d1663ca8fe7d7_prof);

        
        $__internal_a536017ed497cd60a263a940e6e041982a4deb7286d2c648ddc3608684b39e09->leave($__internal_a536017ed497cd60a263a940e6e041982a4deb7286d2c648ddc3608684b39e09_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7aa7cedf76f3f7463817dd6ea7557a100f020282442a2407df97cb24bfbe8ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa7cedf76f3f7463817dd6ea7557a100f020282442a2407df97cb24bfbe8ac3->enter($__internal_7aa7cedf76f3f7463817dd6ea7557a100f020282442a2407df97cb24bfbe8ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5269857243ca4bbd7237cb40f5b343b3407a64c4cc8616bd3b621a9434c8ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5269857243ca4bbd7237cb40f5b343b3407a64c4cc8616bd3b621a9434c8ceb->enter($__internal_f5269857243ca4bbd7237cb40f5b343b3407a64c4cc8616bd3b621a9434c8ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f5269857243ca4bbd7237cb40f5b343b3407a64c4cc8616bd3b621a9434c8ceb->leave($__internal_f5269857243ca4bbd7237cb40f5b343b3407a64c4cc8616bd3b621a9434c8ceb_prof);

        
        $__internal_7aa7cedf76f3f7463817dd6ea7557a100f020282442a2407df97cb24bfbe8ac3->leave($__internal_7aa7cedf76f3f7463817dd6ea7557a100f020282442a2407df97cb24bfbe8ac3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
