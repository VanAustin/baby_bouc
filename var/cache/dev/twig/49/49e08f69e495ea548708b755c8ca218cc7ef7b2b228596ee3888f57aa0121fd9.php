<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ad73c98149553abdb1a1e8a7ae4dd4b1aa05c8ec3b12e4b3213f34e837d36c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4cb9e7d8d8ae4d290dbd5bf0ba20229095d4e90fa57a009a43ec85b519b8e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cb9e7d8d8ae4d290dbd5bf0ba20229095d4e90fa57a009a43ec85b519b8e2f->enter($__internal_d4cb9e7d8d8ae4d290dbd5bf0ba20229095d4e90fa57a009a43ec85b519b8e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1ac5f6bbed16f7ea309757aa32beba22ee828ab0273f3cf6c4d155f0674d2275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac5f6bbed16f7ea309757aa32beba22ee828ab0273f3cf6c4d155f0674d2275->enter($__internal_1ac5f6bbed16f7ea309757aa32beba22ee828ab0273f3cf6c4d155f0674d2275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4cb9e7d8d8ae4d290dbd5bf0ba20229095d4e90fa57a009a43ec85b519b8e2f->leave($__internal_d4cb9e7d8d8ae4d290dbd5bf0ba20229095d4e90fa57a009a43ec85b519b8e2f_prof);

        
        $__internal_1ac5f6bbed16f7ea309757aa32beba22ee828ab0273f3cf6c4d155f0674d2275->leave($__internal_1ac5f6bbed16f7ea309757aa32beba22ee828ab0273f3cf6c4d155f0674d2275_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a27c9e232711b4b5abad01fb7b3bd58a0a37aa2cbfea45b4586c0f462f301bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27c9e232711b4b5abad01fb7b3bd58a0a37aa2cbfea45b4586c0f462f301bb4->enter($__internal_a27c9e232711b4b5abad01fb7b3bd58a0a37aa2cbfea45b4586c0f462f301bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_489b20feb406edfa652848713ca789b458b1fbe993568ba2ab0df300ab1c9ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489b20feb406edfa652848713ca789b458b1fbe993568ba2ab0df300ab1c9ccc->enter($__internal_489b20feb406edfa652848713ca789b458b1fbe993568ba2ab0df300ab1c9ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription
";
        
        $__internal_489b20feb406edfa652848713ca789b458b1fbe993568ba2ab0df300ab1c9ccc->leave($__internal_489b20feb406edfa652848713ca789b458b1fbe993568ba2ab0df300ab1c9ccc_prof);

        
        $__internal_a27c9e232711b4b5abad01fb7b3bd58a0a37aa2cbfea45b4586c0f462f301bb4->leave($__internal_a27c9e232711b4b5abad01fb7b3bd58a0a37aa2cbfea45b4586c0f462f301bb4_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a488130be48b2c26624a7c8fbabb43d4b082b5cc09187e5ea8955ca3accc1821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a488130be48b2c26624a7c8fbabb43d4b082b5cc09187e5ea8955ca3accc1821->enter($__internal_a488130be48b2c26624a7c8fbabb43d4b082b5cc09187e5ea8955ca3accc1821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac6cbb07717a775596f9449d5caa09cc02523c6afe9a6c281f1643331f405345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6cbb07717a775596f9449d5caa09cc02523c6afe9a6c281f1643331f405345->enter($__internal_ac6cbb07717a775596f9449d5caa09cc02523c6afe9a6c281f1643331f405345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 8)->display($context);
        
        $__internal_ac6cbb07717a775596f9449d5caa09cc02523c6afe9a6c281f1643331f405345->leave($__internal_ac6cbb07717a775596f9449d5caa09cc02523c6afe9a6c281f1643331f405345_prof);

        
        $__internal_a488130be48b2c26624a7c8fbabb43d4b082b5cc09187e5ea8955ca3accc1821->leave($__internal_a488130be48b2c26624a7c8fbabb43d4b082b5cc09187e5ea8955ca3accc1821_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10dc23f8f54ef4430270a98ac114b70f4c2894431d70a9a6915583d556afc999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dc23f8f54ef4430270a98ac114b70f4c2894431d70a9a6915583d556afc999->enter($__internal_10dc23f8f54ef4430270a98ac114b70f4c2894431d70a9a6915583d556afc999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90ab7a2b1fc5197f956756239ba27da6093c9063aef481d24f2298df47175966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ab7a2b1fc5197f956756239ba27da6093c9063aef481d24f2298df47175966->enter($__internal_90ab7a2b1fc5197f956756239ba27da6093c9063aef481d24f2298df47175966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"js/app.js\"></script>
\t<script>require('src/index');</script>
";
        
        $__internal_90ab7a2b1fc5197f956756239ba27da6093c9063aef481d24f2298df47175966->leave($__internal_90ab7a2b1fc5197f956756239ba27da6093c9063aef481d24f2298df47175966_prof);

        
        $__internal_10dc23f8f54ef4430270a98ac114b70f4c2894431d70a9a6915583d556afc999->leave($__internal_10dc23f8f54ef4430270a98ac114b70f4c2894431d70a9a6915583d556afc999_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 12,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block title %}
    {{ parent() }} - Inscription
{% endblock %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}


{% block javascripts %}
    {{ parent() }}
\t<script src=\"js/app.js\"></script>
\t<script>require('src/index');</script>
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
