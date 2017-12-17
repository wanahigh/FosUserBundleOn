<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_da9b1b5486872725897ed4d448fa984835b9b85363ec093b40db1eb292f9eb9b extends Twig_Template
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
        $__internal_6473edf3968768c8352e6605183e2db8822c069c97d9500ecb2080523b1550a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6473edf3968768c8352e6605183e2db8822c069c97d9500ecb2080523b1550a0->enter($__internal_6473edf3968768c8352e6605183e2db8822c069c97d9500ecb2080523b1550a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2775033f4b74b399f7ca6c754f725483912b935ac6c536e9431a671b0628ae25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2775033f4b74b399f7ca6c754f725483912b935ac6c536e9431a671b0628ae25->enter($__internal_2775033f4b74b399f7ca6c754f725483912b935ac6c536e9431a671b0628ae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6473edf3968768c8352e6605183e2db8822c069c97d9500ecb2080523b1550a0->leave($__internal_6473edf3968768c8352e6605183e2db8822c069c97d9500ecb2080523b1550a0_prof);

        
        $__internal_2775033f4b74b399f7ca6c754f725483912b935ac6c536e9431a671b0628ae25->leave($__internal_2775033f4b74b399f7ca6c754f725483912b935ac6c536e9431a671b0628ae25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd4e3c8544c1c64849057c4ef1a758c81a8616a2c2ad08d6531d9a9ade1c68d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4e3c8544c1c64849057c4ef1a758c81a8616a2c2ad08d6531d9a9ade1c68d3->enter($__internal_fd4e3c8544c1c64849057c4ef1a758c81a8616a2c2ad08d6531d9a9ade1c68d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9cef4de10cc1bf82eb773628797709b6947b7d9adbc0d51f29a78669ee0a995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cef4de10cc1bf82eb773628797709b6947b7d9adbc0d51f29a78669ee0a995->enter($__internal_b9cef4de10cc1bf82eb773628797709b6947b7d9adbc0d51f29a78669ee0a995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b9cef4de10cc1bf82eb773628797709b6947b7d9adbc0d51f29a78669ee0a995->leave($__internal_b9cef4de10cc1bf82eb773628797709b6947b7d9adbc0d51f29a78669ee0a995_prof);

        
        $__internal_fd4e3c8544c1c64849057c4ef1a758c81a8616a2c2ad08d6531d9a9ade1c68d3->leave($__internal_fd4e3c8544c1c64849057c4ef1a758c81a8616a2c2ad08d6531d9a9ade1c68d3_prof);

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
", "@FOSUser/Registration/register.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
