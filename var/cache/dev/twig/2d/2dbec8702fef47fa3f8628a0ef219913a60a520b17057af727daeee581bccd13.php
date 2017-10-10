<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c8524662da54c258e4fa8c0ab555450466bf4ca71db21872576dfd8f573cca04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98a56204a46d0d277e439bf045a10684cacaf7f00b883fdb65aec8286d0629a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a56204a46d0d277e439bf045a10684cacaf7f00b883fdb65aec8286d0629a9->enter($__internal_98a56204a46d0d277e439bf045a10684cacaf7f00b883fdb65aec8286d0629a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_5cb2ba13f425ff616547c192d97438a63d150fc7cfc7a55621bbd1c7507a33c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb2ba13f425ff616547c192d97438a63d150fc7cfc7a55621bbd1c7507a33c6->enter($__internal_5cb2ba13f425ff616547c192d97438a63d150fc7cfc7a55621bbd1c7507a33c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a56204a46d0d277e439bf045a10684cacaf7f00b883fdb65aec8286d0629a9->leave($__internal_98a56204a46d0d277e439bf045a10684cacaf7f00b883fdb65aec8286d0629a9_prof);

        
        $__internal_5cb2ba13f425ff616547c192d97438a63d150fc7cfc7a55621bbd1c7507a33c6->leave($__internal_5cb2ba13f425ff616547c192d97438a63d150fc7cfc7a55621bbd1c7507a33c6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0374417496fe9b4513a9cbcedd1260a98adac6c5d7f8e5d97a330ed36535c778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0374417496fe9b4513a9cbcedd1260a98adac6c5d7f8e5d97a330ed36535c778->enter($__internal_0374417496fe9b4513a9cbcedd1260a98adac6c5d7f8e5d97a330ed36535c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bde99c07c484d9e0765075cecdb69e7f4fb95bd74b68bcffb44de0fecb14e82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde99c07c484d9e0765075cecdb69e7f4fb95bd74b68bcffb44de0fecb14e82a->enter($__internal_bde99c07c484d9e0765075cecdb69e7f4fb95bd74b68bcffb44de0fecb14e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\">

    ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 9
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 11
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div>
        ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "    </div>
";
        
        $__internal_bde99c07c484d9e0765075cecdb69e7f4fb95bd74b68bcffb44de0fecb14e82a->leave($__internal_bde99c07c484d9e0765075cecdb69e7f4fb95bd74b68bcffb44de0fecb14e82a_prof);

        
        $__internal_0374417496fe9b4513a9cbcedd1260a98adac6c5d7f8e5d97a330ed36535c778->leave($__internal_0374417496fe9b4513a9cbcedd1260a98adac6c5d7f8e5d97a330ed36535c778_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_211e673e9fd36eea0478e2c8828337ed16b850c67517c675098b6f0b7dc18a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211e673e9fd36eea0478e2c8828337ed16b850c67517c675098b6f0b7dc18a93->enter($__internal_211e673e9fd36eea0478e2c8828337ed16b850c67517c675098b6f0b7dc18a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9278b3fd904417bce11532905e93bb3bc3ebd427d692676e42bddf43cfe03b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9278b3fd904417bce11532905e93bb3bc3ebd427d692676e42bddf43cfe03b0->enter($__internal_d9278b3fd904417bce11532905e93bb3bc3ebd427d692676e42bddf43cfe03b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "        ";
        
        $__internal_d9278b3fd904417bce11532905e93bb3bc3ebd427d692676e42bddf43cfe03b0->leave($__internal_d9278b3fd904417bce11532905e93bb3bc3ebd427d692676e42bddf43cfe03b0_prof);

        
        $__internal_211e673e9fd36eea0478e2c8828337ed16b850c67517c675098b6f0b7dc18a93->leave($__internal_211e673e9fd36eea0478e2c8828337ed16b850c67517c675098b6f0b7dc18a93_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5200e89544bdf4a70ebce3deb1a7204b77b13a4569cb395158b722833e36b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5200e89544bdf4a70ebce3deb1a7204b77b13a4569cb395158b722833e36b28->enter($__internal_b5200e89544bdf4a70ebce3deb1a7204b77b13a4569cb395158b722833e36b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_441f26df3d9e4f13e2f56a1995a7b26b73d8c82a5f08fd9546ef4c32e9b197cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441f26df3d9e4f13e2f56a1995a7b26b73d8c82a5f08fd9546ef4c32e9b197cd->enter($__internal_441f26df3d9e4f13e2f56a1995a7b26b73d8c82a5f08fd9546ef4c32e9b197cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_441f26df3d9e4f13e2f56a1995a7b26b73d8c82a5f08fd9546ef4c32e9b197cd->leave($__internal_441f26df3d9e4f13e2f56a1995a7b26b73d8c82a5f08fd9546ef4c32e9b197cd_prof);

        
        $__internal_b5200e89544bdf4a70ebce3deb1a7204b77b13a4569cb395158b722833e36b28->leave($__internal_b5200e89544bdf4a70ebce3deb1a7204b77b13a4569cb395158b722833e36b28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 25,  137 => 24,  128 => 23,  118 => 19,  109 => 18,  98 => 20,  96 => 18,  92 => 16,  89 => 15,  83 => 14,  74 => 11,  69 => 10,  64 => 9,  59 => 8,  57 => 7,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('public/css/app.css') }}\">

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('public/js/app.js') }}\"></script>
{% endblock %}
", "@FOSUser/layout.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
