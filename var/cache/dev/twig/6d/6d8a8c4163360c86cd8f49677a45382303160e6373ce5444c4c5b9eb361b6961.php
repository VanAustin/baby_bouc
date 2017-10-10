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
        $__internal_8ac9f468f38ea5e05d571b19b40ff1f2ca4a05cb8ee7f57fd5e18c90779053ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac9f468f38ea5e05d571b19b40ff1f2ca4a05cb8ee7f57fd5e18c90779053ab->enter($__internal_8ac9f468f38ea5e05d571b19b40ff1f2ca4a05cb8ee7f57fd5e18c90779053ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fb2f08e20fff984f38dbf650a91444d890f1b78f7c79e7dfb54ebcdba763a21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2f08e20fff984f38dbf650a91444d890f1b78f7c79e7dfb54ebcdba763a21c->enter($__internal_fb2f08e20fff984f38dbf650a91444d890f1b78f7c79e7dfb54ebcdba763a21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></button>
          <button><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></button>
        ";
        }
        // line 17
        echo "      </header>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_8ac9f468f38ea5e05d571b19b40ff1f2ca4a05cb8ee7f57fd5e18c90779053ab->leave($__internal_8ac9f468f38ea5e05d571b19b40ff1f2ca4a05cb8ee7f57fd5e18c90779053ab_prof);

        
        $__internal_fb2f08e20fff984f38dbf650a91444d890f1b78f7c79e7dfb54ebcdba763a21c->leave($__internal_fb2f08e20fff984f38dbf650a91444d890f1b78f7c79e7dfb54ebcdba763a21c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2587e36686dc88f8489162d907a7e048433aaf21ecccaa1d123b8a3aae0677d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2587e36686dc88f8489162d907a7e048433aaf21ecccaa1d123b8a3aae0677d7->enter($__internal_2587e36686dc88f8489162d907a7e048433aaf21ecccaa1d123b8a3aae0677d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d3888e7d06d0df2b593bab22baf5435c95d5d0affc4c1f43808e401bc458771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3888e7d06d0df2b593bab22baf5435c95d5d0affc4c1f43808e401bc458771->enter($__internal_9d3888e7d06d0df2b593bab22baf5435c95d5d0affc4c1f43808e401bc458771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d3888e7d06d0df2b593bab22baf5435c95d5d0affc4c1f43808e401bc458771->leave($__internal_9d3888e7d06d0df2b593bab22baf5435c95d5d0affc4c1f43808e401bc458771_prof);

        
        $__internal_2587e36686dc88f8489162d907a7e048433aaf21ecccaa1d123b8a3aae0677d7->leave($__internal_2587e36686dc88f8489162d907a7e048433aaf21ecccaa1d123b8a3aae0677d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c5311f157cf90cc47f815c2a4e035e15cf0acdb76081ac45482fc64c582b132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5311f157cf90cc47f815c2a4e035e15cf0acdb76081ac45482fc64c582b132->enter($__internal_2c5311f157cf90cc47f815c2a4e035e15cf0acdb76081ac45482fc64c582b132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f7dfdd3aaaecd7a93d533a3197278c1c14a2a66b3aa6e4a49739b708145feee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7dfdd3aaaecd7a93d533a3197278c1c14a2a66b3aa6e4a49739b708145feee->enter($__internal_8f7dfdd3aaaecd7a93d533a3197278c1c14a2a66b3aa6e4a49739b708145feee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f7dfdd3aaaecd7a93d533a3197278c1c14a2a66b3aa6e4a49739b708145feee->leave($__internal_8f7dfdd3aaaecd7a93d533a3197278c1c14a2a66b3aa6e4a49739b708145feee_prof);

        
        $__internal_2c5311f157cf90cc47f815c2a4e035e15cf0acdb76081ac45482fc64c582b132->leave($__internal_2c5311f157cf90cc47f815c2a4e035e15cf0acdb76081ac45482fc64c582b132_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b56e4dad36f79d9a0f3fde0af4e79bca4342cfdb9ad2833ccf93045be77aced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b56e4dad36f79d9a0f3fde0af4e79bca4342cfdb9ad2833ccf93045be77aced->enter($__internal_6b56e4dad36f79d9a0f3fde0af4e79bca4342cfdb9ad2833ccf93045be77aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9614e73557face7712302cea83f31afc49c231c6f343c3fa75e749fbaa250ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9614e73557face7712302cea83f31afc49c231c6f343c3fa75e749fbaa250ab3->enter($__internal_9614e73557face7712302cea83f31afc49c231c6f343c3fa75e749fbaa250ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9614e73557face7712302cea83f31afc49c231c6f343c3fa75e749fbaa250ab3->leave($__internal_9614e73557face7712302cea83f31afc49c231c6f343c3fa75e749fbaa250ab3_prof);

        
        $__internal_6b56e4dad36f79d9a0f3fde0af4e79bca4342cfdb9ad2833ccf93045be77aced->leave($__internal_6b56e4dad36f79d9a0f3fde0af4e79bca4342cfdb9ad2833ccf93045be77aced_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f6f7ccdd648e08e96dcb00a209137c32aed055e504175f3b185292fe6a2124f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6f7ccdd648e08e96dcb00a209137c32aed055e504175f3b185292fe6a2124f->enter($__internal_7f6f7ccdd648e08e96dcb00a209137c32aed055e504175f3b185292fe6a2124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_260e1def10a7c02be51ef7da5cabe857433eea6ba13485524a8c5e05c5748d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260e1def10a7c02be51ef7da5cabe857433eea6ba13485524a8c5e05c5748d67->enter($__internal_260e1def10a7c02be51ef7da5cabe857433eea6ba13485524a8c5e05c5748d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_260e1def10a7c02be51ef7da5cabe857433eea6ba13485524a8c5e05c5748d67->leave($__internal_260e1def10a7c02be51ef7da5cabe857433eea6ba13485524a8c5e05c5748d67_prof);

        
        $__internal_7f6f7ccdd648e08e96dcb00a209137c32aed055e504175f3b185292fe6a2124f->leave($__internal_7f6f7ccdd648e08e96dcb00a209137c32aed055e504175f3b185292fe6a2124f_prof);

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
        return array (  139 => 19,  122 => 18,  105 => 6,  87 => 5,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  62 => 15,  57 => 14,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
          <button><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></button>
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
