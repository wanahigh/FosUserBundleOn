<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3433c28c6cac637fd71963105578c31278264eef042c20e758b6a9de83b5a312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_231e5f8316a97572a9b2d193e4e23f80b210f547238a35872f2c2d1d5fe894ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231e5f8316a97572a9b2d193e4e23f80b210f547238a35872f2c2d1d5fe894ee->enter($__internal_231e5f8316a97572a9b2d193e4e23f80b210f547238a35872f2c2d1d5fe894ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7a78aaaf63df7d7064aaf6d46143737daf0720f6d5edf042a56b9f986c1fdd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a78aaaf63df7d7064aaf6d46143737daf0720f6d5edf042a56b9f986c1fdd3b->enter($__internal_7a78aaaf63df7d7064aaf6d46143737daf0720f6d5edf042a56b9f986c1fdd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231e5f8316a97572a9b2d193e4e23f80b210f547238a35872f2c2d1d5fe894ee->leave($__internal_231e5f8316a97572a9b2d193e4e23f80b210f547238a35872f2c2d1d5fe894ee_prof);

        
        $__internal_7a78aaaf63df7d7064aaf6d46143737daf0720f6d5edf042a56b9f986c1fdd3b->leave($__internal_7a78aaaf63df7d7064aaf6d46143737daf0720f6d5edf042a56b9f986c1fdd3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcf6bc8a0d04bbb098af8fb03e5602c97ae1cb2e4b4759c39de3719511dbe108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf6bc8a0d04bbb098af8fb03e5602c97ae1cb2e4b4759c39de3719511dbe108->enter($__internal_fcf6bc8a0d04bbb098af8fb03e5602c97ae1cb2e4b4759c39de3719511dbe108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24a1833965621dbd0f70a8580348c3811d39e1bfa6e76de2532c3876eda72b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a1833965621dbd0f70a8580348c3811d39e1bfa6e76de2532c3876eda72b42->enter($__internal_24a1833965621dbd0f70a8580348c3811d39e1bfa6e76de2532c3876eda72b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_24a1833965621dbd0f70a8580348c3811d39e1bfa6e76de2532c3876eda72b42->leave($__internal_24a1833965621dbd0f70a8580348c3811d39e1bfa6e76de2532c3876eda72b42_prof);

        
        $__internal_fcf6bc8a0d04bbb098af8fb03e5602c97ae1cb2e4b4759c39de3719511dbe108->leave($__internal_fcf6bc8a0d04bbb098af8fb03e5602c97ae1cb2e4b4759c39de3719511dbe108_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
