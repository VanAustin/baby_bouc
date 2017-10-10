<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3836f5f024e82d73e665a130a2aa845875bc02c9408dfab6aa6079e6da11849e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3836f5f024e82d73e665a130a2aa845875bc02c9408dfab6aa6079e6da11849e->enter($__internal_3836f5f024e82d73e665a130a2aa845875bc02c9408dfab6aa6079e6da11849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b594e51849d7023de5992c90ea34893bdbf69c3074de474793725331cbb628db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b594e51849d7023de5992c90ea34893bdbf69c3074de474793725331cbb628db->enter($__internal_b594e51849d7023de5992c90ea34893bdbf69c3074de474793725331cbb628db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3836f5f024e82d73e665a130a2aa845875bc02c9408dfab6aa6079e6da11849e->leave($__internal_3836f5f024e82d73e665a130a2aa845875bc02c9408dfab6aa6079e6da11849e_prof);

        
        $__internal_b594e51849d7023de5992c90ea34893bdbf69c3074de474793725331cbb628db->leave($__internal_b594e51849d7023de5992c90ea34893bdbf69c3074de474793725331cbb628db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d28915d6eb76e1db531beea667bab7a1cefe0ef20e70727bcdf4335d659fc717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28915d6eb76e1db531beea667bab7a1cefe0ef20e70727bcdf4335d659fc717->enter($__internal_d28915d6eb76e1db531beea667bab7a1cefe0ef20e70727bcdf4335d659fc717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ee4e52275a17581a577c9f27558543bb27801cb3317e21f9220ad3c87cdba45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee4e52275a17581a577c9f27558543bb27801cb3317e21f9220ad3c87cdba45->enter($__internal_2ee4e52275a17581a577c9f27558543bb27801cb3317e21f9220ad3c87cdba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2ee4e52275a17581a577c9f27558543bb27801cb3317e21f9220ad3c87cdba45->leave($__internal_2ee4e52275a17581a577c9f27558543bb27801cb3317e21f9220ad3c87cdba45_prof);

        
        $__internal_d28915d6eb76e1db531beea667bab7a1cefe0ef20e70727bcdf4335d659fc717->leave($__internal_d28915d6eb76e1db531beea667bab7a1cefe0ef20e70727bcdf4335d659fc717_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_67193eab4f6b7a6e6ca5c81d7090f5d3b7249bc863b8a5387e121feaddc5a883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67193eab4f6b7a6e6ca5c81d7090f5d3b7249bc863b8a5387e121feaddc5a883->enter($__internal_67193eab4f6b7a6e6ca5c81d7090f5d3b7249bc863b8a5387e121feaddc5a883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1ce33d9497db6f319def4807d206dabdaf20582612362b4eb10f14e61982f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ce33d9497db6f319def4807d206dabdaf20582612362b4eb10f14e61982f8a->enter($__internal_c1ce33d9497db6f319def4807d206dabdaf20582612362b4eb10f14e61982f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c1ce33d9497db6f319def4807d206dabdaf20582612362b4eb10f14e61982f8a->leave($__internal_c1ce33d9497db6f319def4807d206dabdaf20582612362b4eb10f14e61982f8a_prof);

        
        $__internal_67193eab4f6b7a6e6ca5c81d7090f5d3b7249bc863b8a5387e121feaddc5a883->leave($__internal_67193eab4f6b7a6e6ca5c81d7090f5d3b7249bc863b8a5387e121feaddc5a883_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c41652f13d87a46554ab0632e7e0b567875fd0504e739c09b9c527baa8f356f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41652f13d87a46554ab0632e7e0b567875fd0504e739c09b9c527baa8f356f8->enter($__internal_c41652f13d87a46554ab0632e7e0b567875fd0504e739c09b9c527baa8f356f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5d9a067f26524d97edc83a9684f7934387ab16d76adc69365037c024244f3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d9a067f26524d97edc83a9684f7934387ab16d76adc69365037c024244f3ee->enter($__internal_c5d9a067f26524d97edc83a9684f7934387ab16d76adc69365037c024244f3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5d9a067f26524d97edc83a9684f7934387ab16d76adc69365037c024244f3ee->leave($__internal_c5d9a067f26524d97edc83a9684f7934387ab16d76adc69365037c024244f3ee_prof);

        
        $__internal_c41652f13d87a46554ab0632e7e0b567875fd0504e739c09b9c527baa8f356f8->leave($__internal_c41652f13d87a46554ab0632e7e0b567875fd0504e739c09b9c527baa8f356f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
