<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_6305549b69a58ca0f9541aca6ee0d862a0ee83b30389b00a8aade3862eea91ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_87ff3181acf7d0f8aa8e80f52d98624365c73339740dc093597415161d4e5251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ff3181acf7d0f8aa8e80f52d98624365c73339740dc093597415161d4e5251->enter($__internal_87ff3181acf7d0f8aa8e80f52d98624365c73339740dc093597415161d4e5251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_cdab92d6f4aa9d61906214f597fba8239293a306189afe61112a31b0f677c02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdab92d6f4aa9d61906214f597fba8239293a306189afe61112a31b0f677c02f->enter($__internal_cdab92d6f4aa9d61906214f597fba8239293a306189afe61112a31b0f677c02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ff3181acf7d0f8aa8e80f52d98624365c73339740dc093597415161d4e5251->leave($__internal_87ff3181acf7d0f8aa8e80f52d98624365c73339740dc093597415161d4e5251_prof);

        
        $__internal_cdab92d6f4aa9d61906214f597fba8239293a306189afe61112a31b0f677c02f->leave($__internal_cdab92d6f4aa9d61906214f597fba8239293a306189afe61112a31b0f677c02f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ede8ccee9f6d6c2d09964f8ef406c0a4707f314adc10ec7662fb929b688a373d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede8ccee9f6d6c2d09964f8ef406c0a4707f314adc10ec7662fb929b688a373d->enter($__internal_ede8ccee9f6d6c2d09964f8ef406c0a4707f314adc10ec7662fb929b688a373d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6af1fed766bde62bd4abbfaeefbc8bfc6c72444ea48eae44ecd0b3fd21b24c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6af1fed766bde62bd4abbfaeefbc8bfc6c72444ea48eae44ecd0b3fd21b24c0->enter($__internal_b6af1fed766bde62bd4abbfaeefbc8bfc6c72444ea48eae44ecd0b3fd21b24c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b6af1fed766bde62bd4abbfaeefbc8bfc6c72444ea48eae44ecd0b3fd21b24c0->leave($__internal_b6af1fed766bde62bd4abbfaeefbc8bfc6c72444ea48eae44ecd0b3fd21b24c0_prof);

        
        $__internal_ede8ccee9f6d6c2d09964f8ef406c0a4707f314adc10ec7662fb929b688a373d->leave($__internal_ede8ccee9f6d6c2d09964f8ef406c0a4707f314adc10ec7662fb929b688a373d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
