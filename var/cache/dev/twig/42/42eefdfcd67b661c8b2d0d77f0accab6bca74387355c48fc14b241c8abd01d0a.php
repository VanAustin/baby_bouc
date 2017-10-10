<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7f0907cd387a7447744027e4c25837889e600397acdb6ecc366ed5eca94f44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f0907cd387a7447744027e4c25837889e600397acdb6ecc366ed5eca94f44a->enter($__internal_e7f0907cd387a7447744027e4c25837889e600397acdb6ecc366ed5eca94f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_12299c2d441e49541667b832623676be64aeb59dff578e01dd5930ae5517b22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12299c2d441e49541667b832623676be64aeb59dff578e01dd5930ae5517b22e->enter($__internal_12299c2d441e49541667b832623676be64aeb59dff578e01dd5930ae5517b22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7f0907cd387a7447744027e4c25837889e600397acdb6ecc366ed5eca94f44a->leave($__internal_e7f0907cd387a7447744027e4c25837889e600397acdb6ecc366ed5eca94f44a_prof);

        
        $__internal_12299c2d441e49541667b832623676be64aeb59dff578e01dd5930ae5517b22e->leave($__internal_12299c2d441e49541667b832623676be64aeb59dff578e01dd5930ae5517b22e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54771eedadd4220f7d47b990aecb07af3bf722b1cb5468bf5509ce6d2ee10e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54771eedadd4220f7d47b990aecb07af3bf722b1cb5468bf5509ce6d2ee10e1->enter($__internal_d54771eedadd4220f7d47b990aecb07af3bf722b1cb5468bf5509ce6d2ee10e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a63784e3f40b24e6b8d2990b87174d7945ae9fd4c995b9b8d206f9b291354bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a63784e3f40b24e6b8d2990b87174d7945ae9fd4c995b9b8d206f9b291354bc->enter($__internal_8a63784e3f40b24e6b8d2990b87174d7945ae9fd4c995b9b8d206f9b291354bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_8a63784e3f40b24e6b8d2990b87174d7945ae9fd4c995b9b8d206f9b291354bc->leave($__internal_8a63784e3f40b24e6b8d2990b87174d7945ae9fd4c995b9b8d206f9b291354bc_prof);

        
        $__internal_d54771eedadd4220f7d47b990aecb07af3bf722b1cb5468bf5509ce6d2ee10e1->leave($__internal_d54771eedadd4220f7d47b990aecb07af3bf722b1cb5468bf5509ce6d2ee10e1_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock %}
", "default/index.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/app/Resources/views/default/index.html.twig");
    }
}
