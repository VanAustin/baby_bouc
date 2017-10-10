<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
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
        $__internal_b453915044aeef033a108b07e404c06e65ac721b2f39f2a7a882f40c4d052a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b453915044aeef033a108b07e404c06e65ac721b2f39f2a7a882f40c4d052a3f->enter($__internal_b453915044aeef033a108b07e404c06e65ac721b2f39f2a7a882f40c4d052a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_623f189fc1711bb8e035bca489dab92a3cf17a37f57ffb104bf83bf278627e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623f189fc1711bb8e035bca489dab92a3cf17a37f57ffb104bf83bf278627e6b->enter($__internal_623f189fc1711bb8e035bca489dab92a3cf17a37f57ffb104bf83bf278627e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
      <header>
        ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 12
            echo "          <button><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></button>
        ";
        } else {
            // line 14
            echo "          <button><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></button>
        ";
        }
        // line 16
        echo "      </header>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_b453915044aeef033a108b07e404c06e65ac721b2f39f2a7a882f40c4d052a3f->leave($__internal_b453915044aeef033a108b07e404c06e65ac721b2f39f2a7a882f40c4d052a3f_prof);

        
        $__internal_623f189fc1711bb8e035bca489dab92a3cf17a37f57ffb104bf83bf278627e6b->leave($__internal_623f189fc1711bb8e035bca489dab92a3cf17a37f57ffb104bf83bf278627e6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9eca2fadacf04c4bdadc31f420bbf5bbe1998ff02d40b965cfb73e3c2a0696a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9eca2fadacf04c4bdadc31f420bbf5bbe1998ff02d40b965cfb73e3c2a0696a->enter($__internal_b9eca2fadacf04c4bdadc31f420bbf5bbe1998ff02d40b965cfb73e3c2a0696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecb2c9a5d94c0d8455033b33d5fe1983805237ac8d91194cae91293f64373c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb2c9a5d94c0d8455033b33d5fe1983805237ac8d91194cae91293f64373c5e->enter($__internal_ecb2c9a5d94c0d8455033b33d5fe1983805237ac8d91194cae91293f64373c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ecb2c9a5d94c0d8455033b33d5fe1983805237ac8d91194cae91293f64373c5e->leave($__internal_ecb2c9a5d94c0d8455033b33d5fe1983805237ac8d91194cae91293f64373c5e_prof);

        
        $__internal_b9eca2fadacf04c4bdadc31f420bbf5bbe1998ff02d40b965cfb73e3c2a0696a->leave($__internal_b9eca2fadacf04c4bdadc31f420bbf5bbe1998ff02d40b965cfb73e3c2a0696a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a25063a3ca2af86a857e69cbbe19b4d86c64e78e10bb47203b03e09f70da61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a25063a3ca2af86a857e69cbbe19b4d86c64e78e10bb47203b03e09f70da61a->enter($__internal_0a25063a3ca2af86a857e69cbbe19b4d86c64e78e10bb47203b03e09f70da61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00290f1ab1e2c1117afc99b46a8c787ac48f3a6dbcba14da1e575e41dac65cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00290f1ab1e2c1117afc99b46a8c787ac48f3a6dbcba14da1e575e41dac65cf3->enter($__internal_00290f1ab1e2c1117afc99b46a8c787ac48f3a6dbcba14da1e575e41dac65cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00290f1ab1e2c1117afc99b46a8c787ac48f3a6dbcba14da1e575e41dac65cf3->leave($__internal_00290f1ab1e2c1117afc99b46a8c787ac48f3a6dbcba14da1e575e41dac65cf3_prof);

        
        $__internal_0a25063a3ca2af86a857e69cbbe19b4d86c64e78e10bb47203b03e09f70da61a->leave($__internal_0a25063a3ca2af86a857e69cbbe19b4d86c64e78e10bb47203b03e09f70da61a_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_d353266df313c23c02fcf4b13acb8ca63d1dec066287efafa227bb372e3c0489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d353266df313c23c02fcf4b13acb8ca63d1dec066287efafa227bb372e3c0489->enter($__internal_d353266df313c23c02fcf4b13acb8ca63d1dec066287efafa227bb372e3c0489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b4eb3695b871c9487a804baca80563b91a50dc34a6db6ebf5a03005b550a8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4eb3695b871c9487a804baca80563b91a50dc34a6db6ebf5a03005b550a8a4->enter($__internal_4b4eb3695b871c9487a804baca80563b91a50dc34a6db6ebf5a03005b550a8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b4eb3695b871c9487a804baca80563b91a50dc34a6db6ebf5a03005b550a8a4->leave($__internal_4b4eb3695b871c9487a804baca80563b91a50dc34a6db6ebf5a03005b550a8a4_prof);

        
        $__internal_d353266df313c23c02fcf4b13acb8ca63d1dec066287efafa227bb372e3c0489->leave($__internal_d353266df313c23c02fcf4b13acb8ca63d1dec066287efafa227bb372e3c0489_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_738a096160970999bd2eaea560ca121198c567c33a77c3c575ef2f24d4993b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738a096160970999bd2eaea560ca121198c567c33a77c3c575ef2f24d4993b5e->enter($__internal_738a096160970999bd2eaea560ca121198c567c33a77c3c575ef2f24d4993b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe768df3255370b1ed037bad30bcc6c95ca1710cc5aca5152d7d1e2831265468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe768df3255370b1ed037bad30bcc6c95ca1710cc5aca5152d7d1e2831265468->enter($__internal_fe768df3255370b1ed037bad30bcc6c95ca1710cc5aca5152d7d1e2831265468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe768df3255370b1ed037bad30bcc6c95ca1710cc5aca5152d7d1e2831265468->leave($__internal_fe768df3255370b1ed037bad30bcc6c95ca1710cc5aca5152d7d1e2831265468_prof);

        
        $__internal_738a096160970999bd2eaea560ca121198c567c33a77c3c575ef2f24d4993b5e->leave($__internal_738a096160970999bd2eaea560ca121198c567c33a77c3c575ef2f24d4993b5e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 18,  118 => 17,  101 => 6,  83 => 5,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  57 => 14,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
      <header>
        {% if is_granted('ROLE_USER')%}
          <button><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></button>
        {% else %}
          <button><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></button>
        {% endif %}
      </header>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/app/Resources/views/base.html.twig");
    }
}
