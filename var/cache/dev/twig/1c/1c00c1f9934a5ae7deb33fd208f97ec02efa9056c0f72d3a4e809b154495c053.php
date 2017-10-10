<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_bbb2b13d30c5dbb109abbc5e0c1a236037b820374946f94f71fbb167baec9e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d3159a898145bf42197306c0a28a3997eca387596eeae35d9ca363c3b44bb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3159a898145bf42197306c0a28a3997eca387596eeae35d9ca363c3b44bb60->enter($__internal_1d3159a898145bf42197306c0a28a3997eca387596eeae35d9ca363c3b44bb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_641caa879c87cc5d938081b008ebebad4be47e9e5e075ca29a17ca6f2668e810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641caa879c87cc5d938081b008ebebad4be47e9e5e075ca29a17ca6f2668e810->enter($__internal_641caa879c87cc5d938081b008ebebad4be47e9e5e075ca29a17ca6f2668e810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register col-8 m-auto")));
        echo "
\t<div id=\"pseudo\" class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Votre nom d'utilisateur", "label_attr" => array("class" => "field field-label js-hide-label")));
        echo "
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "field field-input", "placeholder" => "Votre nom d'utilisateur")));
        echo "
\t</div>
    <div id=\"email\"class=\"form-group\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Votre adresse email", "label_attr" => array("class" => "field field-label js-hide-label")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "field field-input", "placeholder" => "Votre adresse email")));
        echo "
    </div>
    <div id=\"password\" class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Votre mot de passe", "label_attr" => array("class" => "field field-label js-hide-label")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "field field-input", "placeholder" => "Votre mot de passe")));
        echo "
    </div>
    <div id=\"passwordconf\"class=\"form-group\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Répétez votre mot de passe", "label_attr" => array("class" => "field field-label js-hide-label")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "field field-input", "placeholder" => "Répétez votre mot de passe")));
        echo "
    </div>
    <div class=\"mt-5\">
        <input class=\"field\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"S'inscrire\" />
    </div>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1d3159a898145bf42197306c0a28a3997eca387596eeae35d9ca363c3b44bb60->leave($__internal_1d3159a898145bf42197306c0a28a3997eca387596eeae35d9ca363c3b44bb60_prof);

        
        $__internal_641caa879c87cc5d938081b008ebebad4be47e9e5e075ca29a17ca6f2668e810->leave($__internal_641caa879c87cc5d938081b008ebebad4be47e9e5e075ca29a17ca6f2668e810_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  83 => 22,  79 => 21,  75 => 20,  69 => 17,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  47 => 10,  41 => 7,  37 => 6,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register col-8 m-auto'}}) }}
\t<div id=\"pseudo\" class=\"form-group\">
\t\t{{ form_label(form.username, null, {'label': 'Votre nom d\\'utilisateur', 'label_attr': {'class': 'field field-label js-hide-label'}}) }}
\t\t{{ form_errors(form.username) }}
\t\t{{ form_widget(form.username, {'attr': {'class': 'field field-input', 'placeholder': 'Votre nom d\\'utilisateur'}}) }}
\t</div>
    <div id=\"email\"class=\"form-group\">
        {{ form_label(form.email, null, {'label': 'Votre adresse email', 'label_attr': {'class': 'field field-label js-hide-label'}}) }}
        {{ form_errors(form.email) }}
        {{ form_widget(form.email, {'attr': {'class': 'field field-input', 'placeholder': 'Votre adresse email'}}) }}
    </div>
    <div id=\"password\" class=\"form-group\">
        {{ form_label(form.plainPassword.first, null, {'label': 'Votre mot de passe', 'label_attr': {'class': 'field field-label js-hide-label'}}) }}
        {{ form_errors(form.plainPassword.first) }}
        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'field field-input', 'placeholder': 'Votre mot de passe'}}) }}
    </div>
    <div id=\"passwordconf\"class=\"form-group\">
        {{ form_label(form.plainPassword.second, null, {'label': 'Répétez votre mot de passe', 'label_attr': {'class': 'field field-label js-hide-label'}}) }}
        {{ form_errors(form.plainPassword.second) }}
        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'field field-input', 'placeholder': 'Répétez votre mot de passe'}}) }}
    </div>
    <div class=\"mt-5\">
        <input class=\"field\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"S'inscrire\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/var/www/html/PROJET/TEST/baby_bouc/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
