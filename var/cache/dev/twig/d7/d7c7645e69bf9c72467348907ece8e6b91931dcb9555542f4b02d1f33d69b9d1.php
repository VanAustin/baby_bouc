<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c9c310ed2d4989158f4c6fbe19b3b79a4b292f41f53c8f2595fb6aa0ab9782a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_08fb78a82472225b96cd5110eaa2cd7c61618639ae62af6e25a41d95daab6db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fb78a82472225b96cd5110eaa2cd7c61618639ae62af6e25a41d95daab6db0->enter($__internal_08fb78a82472225b96cd5110eaa2cd7c61618639ae62af6e25a41d95daab6db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_768929ad8147d4d5aed804b43055a8c90070ab542fadbbc6b40ed77073dcfe05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768929ad8147d4d5aed804b43055a8c90070ab542fadbbc6b40ed77073dcfe05->enter($__internal_768929ad8147d4d5aed804b43055a8c90070ab542fadbbc6b40ed77073dcfe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08fb78a82472225b96cd5110eaa2cd7c61618639ae62af6e25a41d95daab6db0->leave($__internal_08fb78a82472225b96cd5110eaa2cd7c61618639ae62af6e25a41d95daab6db0_prof);

        
        $__internal_768929ad8147d4d5aed804b43055a8c90070ab542fadbbc6b40ed77073dcfe05->leave($__internal_768929ad8147d4d5aed804b43055a8c90070ab542fadbbc6b40ed77073dcfe05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dae5dc86977e3199e78d531589c7596ed16feabca927554fb21e221bb3994073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae5dc86977e3199e78d531589c7596ed16feabca927554fb21e221bb3994073->enter($__internal_dae5dc86977e3199e78d531589c7596ed16feabca927554fb21e221bb3994073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd56f37ac67fbe6854f1be6e3820712d1b7e0879d7b49519f913746a99b485f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd56f37ac67fbe6854f1be6e3820712d1b7e0879d7b49519f913746a99b485f4->enter($__internal_fd56f37ac67fbe6854f1be6e3820712d1b7e0879d7b49519f913746a99b485f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_fd56f37ac67fbe6854f1be6e3820712d1b7e0879d7b49519f913746a99b485f4->leave($__internal_fd56f37ac67fbe6854f1be6e3820712d1b7e0879d7b49519f913746a99b485f4_prof);

        
        $__internal_dae5dc86977e3199e78d531589c7596ed16feabca927554fb21e221bb3994073->leave($__internal_dae5dc86977e3199e78d531589c7596ed16feabca927554fb21e221bb3994073_prof);

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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
