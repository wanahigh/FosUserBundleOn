<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e0691d836796e49e600f52113b8de41ae14dbb6be2abde7f6b32c439ff3e8b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0691d836796e49e600f52113b8de41ae14dbb6be2abde7f6b32c439ff3e8b25->enter($__internal_e0691d836796e49e600f52113b8de41ae14dbb6be2abde7f6b32c439ff3e8b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_13321e20c9bdbdb85b8c54836afd5daa8558cf864844e41ad6c06f76099dc3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13321e20c9bdbdb85b8c54836afd5daa8558cf864844e41ad6c06f76099dc3ee->enter($__internal_13321e20c9bdbdb85b8c54836afd5daa8558cf864844e41ad6c06f76099dc3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0691d836796e49e600f52113b8de41ae14dbb6be2abde7f6b32c439ff3e8b25->leave($__internal_e0691d836796e49e600f52113b8de41ae14dbb6be2abde7f6b32c439ff3e8b25_prof);

        
        $__internal_13321e20c9bdbdb85b8c54836afd5daa8558cf864844e41ad6c06f76099dc3ee->leave($__internal_13321e20c9bdbdb85b8c54836afd5daa8558cf864844e41ad6c06f76099dc3ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c981fd092b46f4cd8072ce52acc125a444a3ef5cc50ffc572d549a3db53f16ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c981fd092b46f4cd8072ce52acc125a444a3ef5cc50ffc572d549a3db53f16ac->enter($__internal_c981fd092b46f4cd8072ce52acc125a444a3ef5cc50ffc572d549a3db53f16ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c402a9af662f75b1902191ca87052ef0d7560a0271cbec20855dd23e864c928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c402a9af662f75b1902191ca87052ef0d7560a0271cbec20855dd23e864c928->enter($__internal_4c402a9af662f75b1902191ca87052ef0d7560a0271cbec20855dd23e864c928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4c402a9af662f75b1902191ca87052ef0d7560a0271cbec20855dd23e864c928->leave($__internal_4c402a9af662f75b1902191ca87052ef0d7560a0271cbec20855dd23e864c928_prof);

        
        $__internal_c981fd092b46f4cd8072ce52acc125a444a3ef5cc50ffc572d549a3db53f16ac->leave($__internal_c981fd092b46f4cd8072ce52acc125a444a3ef5cc50ffc572d549a3db53f16ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47f6f06a75b07a9e59c22fa9d36a8613a123df40c6013f6eccba1b097cf4282f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f6f06a75b07a9e59c22fa9d36a8613a123df40c6013f6eccba1b097cf4282f->enter($__internal_47f6f06a75b07a9e59c22fa9d36a8613a123df40c6013f6eccba1b097cf4282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b16fa979214b7cdb282051030a6a8888e4e30dd178daf75228632ba8183b8644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16fa979214b7cdb282051030a6a8888e4e30dd178daf75228632ba8183b8644->enter($__internal_b16fa979214b7cdb282051030a6a8888e4e30dd178daf75228632ba8183b8644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b16fa979214b7cdb282051030a6a8888e4e30dd178daf75228632ba8183b8644->leave($__internal_b16fa979214b7cdb282051030a6a8888e4e30dd178daf75228632ba8183b8644_prof);

        
        $__internal_47f6f06a75b07a9e59c22fa9d36a8613a123df40c6013f6eccba1b097cf4282f->leave($__internal_47f6f06a75b07a9e59c22fa9d36a8613a123df40c6013f6eccba1b097cf4282f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77e2f715fc2f19bfb6b005967def43652f7354c6eb7fec232647c3b46a87c0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e2f715fc2f19bfb6b005967def43652f7354c6eb7fec232647c3b46a87c0d7->enter($__internal_77e2f715fc2f19bfb6b005967def43652f7354c6eb7fec232647c3b46a87c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f21ced673a2ae3a384b40320e4ee252be01c955ba03ec2d40bb1dfcb3c30c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f21ced673a2ae3a384b40320e4ee252be01c955ba03ec2d40bb1dfcb3c30c74->enter($__internal_9f21ced673a2ae3a384b40320e4ee252be01c955ba03ec2d40bb1dfcb3c30c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9f21ced673a2ae3a384b40320e4ee252be01c955ba03ec2d40bb1dfcb3c30c74->leave($__internal_9f21ced673a2ae3a384b40320e4ee252be01c955ba03ec2d40bb1dfcb3c30c74_prof);

        
        $__internal_77e2f715fc2f19bfb6b005967def43652f7354c6eb7fec232647c3b46a87c0d7->leave($__internal_77e2f715fc2f19bfb6b005967def43652f7354c6eb7fec232647c3b46a87c0d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
