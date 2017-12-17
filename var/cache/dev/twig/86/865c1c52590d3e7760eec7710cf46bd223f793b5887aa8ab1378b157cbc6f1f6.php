<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_702237e8352e60108102f8fba3a8eb2b23efe67c21c2c83b33371580c32e1d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702237e8352e60108102f8fba3a8eb2b23efe67c21c2c83b33371580c32e1d5c->enter($__internal_702237e8352e60108102f8fba3a8eb2b23efe67c21c2c83b33371580c32e1d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_655a732c660f389d27d822ff9934a4c48f7994d665bf782e84acf636382e7dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655a732c660f389d27d822ff9934a4c48f7994d665bf782e84acf636382e7dbd->enter($__internal_655a732c660f389d27d822ff9934a4c48f7994d665bf782e84acf636382e7dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702237e8352e60108102f8fba3a8eb2b23efe67c21c2c83b33371580c32e1d5c->leave($__internal_702237e8352e60108102f8fba3a8eb2b23efe67c21c2c83b33371580c32e1d5c_prof);

        
        $__internal_655a732c660f389d27d822ff9934a4c48f7994d665bf782e84acf636382e7dbd->leave($__internal_655a732c660f389d27d822ff9934a4c48f7994d665bf782e84acf636382e7dbd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5b0f489b75d8b3f5b85785f5776c8d83970d2f1bbea93b46a940006b2ab84b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b0f489b75d8b3f5b85785f5776c8d83970d2f1bbea93b46a940006b2ab84b3->enter($__internal_e5b0f489b75d8b3f5b85785f5776c8d83970d2f1bbea93b46a940006b2ab84b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72dc75d3f9b8a5c04d3efd2845443ec3cfaecde3f887dbc5a892230491cc50b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dc75d3f9b8a5c04d3efd2845443ec3cfaecde3f887dbc5a892230491cc50b5->enter($__internal_72dc75d3f9b8a5c04d3efd2845443ec3cfaecde3f887dbc5a892230491cc50b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72dc75d3f9b8a5c04d3efd2845443ec3cfaecde3f887dbc5a892230491cc50b5->leave($__internal_72dc75d3f9b8a5c04d3efd2845443ec3cfaecde3f887dbc5a892230491cc50b5_prof);

        
        $__internal_e5b0f489b75d8b3f5b85785f5776c8d83970d2f1bbea93b46a940006b2ab84b3->leave($__internal_e5b0f489b75d8b3f5b85785f5776c8d83970d2f1bbea93b46a940006b2ab84b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0dd27488f75a180b88ead5e2752dfaebe6740d6fdd84f052a11e020a1520046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dd27488f75a180b88ead5e2752dfaebe6740d6fdd84f052a11e020a1520046->enter($__internal_b0dd27488f75a180b88ead5e2752dfaebe6740d6fdd84f052a11e020a1520046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eede2cae25ebbd05914387938972a3e6fb4e87889ac71a63775588ded1c53607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eede2cae25ebbd05914387938972a3e6fb4e87889ac71a63775588ded1c53607->enter($__internal_eede2cae25ebbd05914387938972a3e6fb4e87889ac71a63775588ded1c53607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eede2cae25ebbd05914387938972a3e6fb4e87889ac71a63775588ded1c53607->leave($__internal_eede2cae25ebbd05914387938972a3e6fb4e87889ac71a63775588ded1c53607_prof);

        
        $__internal_b0dd27488f75a180b88ead5e2752dfaebe6740d6fdd84f052a11e020a1520046->leave($__internal_b0dd27488f75a180b88ead5e2752dfaebe6740d6fdd84f052a11e020a1520046_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cef5d7bce63070b41010acfc3704cea0c22d5ac49e11f4c2a81ac02eb391c310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef5d7bce63070b41010acfc3704cea0c22d5ac49e11f4c2a81ac02eb391c310->enter($__internal_cef5d7bce63070b41010acfc3704cea0c22d5ac49e11f4c2a81ac02eb391c310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_232c553918b84f1f6bf0e5ec4f5d782ed943644fa96f2b4231742772865c6afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232c553918b84f1f6bf0e5ec4f5d782ed943644fa96f2b4231742772865c6afe->enter($__internal_232c553918b84f1f6bf0e5ec4f5d782ed943644fa96f2b4231742772865c6afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_232c553918b84f1f6bf0e5ec4f5d782ed943644fa96f2b4231742772865c6afe->leave($__internal_232c553918b84f1f6bf0e5ec4f5d782ed943644fa96f2b4231742772865c6afe_prof);

        
        $__internal_cef5d7bce63070b41010acfc3704cea0c22d5ac49e11f4c2a81ac02eb391c310->leave($__internal_cef5d7bce63070b41010acfc3704cea0c22d5ac49e11f4c2a81ac02eb391c310_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
