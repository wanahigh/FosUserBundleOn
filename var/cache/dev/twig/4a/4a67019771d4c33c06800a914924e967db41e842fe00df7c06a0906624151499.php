<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_783dcc5f87d5d78d6584b4f8eeb0cbffec9fcbb37dd58d0e5e638aa4eb28a5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783dcc5f87d5d78d6584b4f8eeb0cbffec9fcbb37dd58d0e5e638aa4eb28a5c5->enter($__internal_783dcc5f87d5d78d6584b4f8eeb0cbffec9fcbb37dd58d0e5e638aa4eb28a5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3ab7f6730dab1e036f3ea72c019dc0c77616feb0a9f15a9742e0217744e77c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab7f6730dab1e036f3ea72c019dc0c77616feb0a9f15a9742e0217744e77c88->enter($__internal_3ab7f6730dab1e036f3ea72c019dc0c77616feb0a9f15a9742e0217744e77c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_783dcc5f87d5d78d6584b4f8eeb0cbffec9fcbb37dd58d0e5e638aa4eb28a5c5->leave($__internal_783dcc5f87d5d78d6584b4f8eeb0cbffec9fcbb37dd58d0e5e638aa4eb28a5c5_prof);

        
        $__internal_3ab7f6730dab1e036f3ea72c019dc0c77616feb0a9f15a9742e0217744e77c88->leave($__internal_3ab7f6730dab1e036f3ea72c019dc0c77616feb0a9f15a9742e0217744e77c88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae38715e9d7a75bbbc88b61373f1b63a33c9b0d4eb13bab899389652aecda429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae38715e9d7a75bbbc88b61373f1b63a33c9b0d4eb13bab899389652aecda429->enter($__internal_ae38715e9d7a75bbbc88b61373f1b63a33c9b0d4eb13bab899389652aecda429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2438976361136db9b8512f60f4540bbced81ea5576ee755a5c4b04534f20c79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2438976361136db9b8512f60f4540bbced81ea5576ee755a5c4b04534f20c79a->enter($__internal_2438976361136db9b8512f60f4540bbced81ea5576ee755a5c4b04534f20c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2438976361136db9b8512f60f4540bbced81ea5576ee755a5c4b04534f20c79a->leave($__internal_2438976361136db9b8512f60f4540bbced81ea5576ee755a5c4b04534f20c79a_prof);

        
        $__internal_ae38715e9d7a75bbbc88b61373f1b63a33c9b0d4eb13bab899389652aecda429->leave($__internal_ae38715e9d7a75bbbc88b61373f1b63a33c9b0d4eb13bab899389652aecda429_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e46fec18242a6342d9e3ff7d54a766f0a81a24db5d7d5564e177f00a8c92e876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46fec18242a6342d9e3ff7d54a766f0a81a24db5d7d5564e177f00a8c92e876->enter($__internal_e46fec18242a6342d9e3ff7d54a766f0a81a24db5d7d5564e177f00a8c92e876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e70817b7dd830520efedd5261f87c94f1b97545fbfb1bd3ffde0c500df90975c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70817b7dd830520efedd5261f87c94f1b97545fbfb1bd3ffde0c500df90975c->enter($__internal_e70817b7dd830520efedd5261f87c94f1b97545fbfb1bd3ffde0c500df90975c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e70817b7dd830520efedd5261f87c94f1b97545fbfb1bd3ffde0c500df90975c->leave($__internal_e70817b7dd830520efedd5261f87c94f1b97545fbfb1bd3ffde0c500df90975c_prof);

        
        $__internal_e46fec18242a6342d9e3ff7d54a766f0a81a24db5d7d5564e177f00a8c92e876->leave($__internal_e46fec18242a6342d9e3ff7d54a766f0a81a24db5d7d5564e177f00a8c92e876_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea2bc9b2d0a9b63433911a87c3d1220a92e65ee2922bba82bf2c1f38b3582c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea2bc9b2d0a9b63433911a87c3d1220a92e65ee2922bba82bf2c1f38b3582c1->enter($__internal_5ea2bc9b2d0a9b63433911a87c3d1220a92e65ee2922bba82bf2c1f38b3582c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_115f61f954d4a310a9b4a1f736a472a8386181b214d12e0b761da52477251a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115f61f954d4a310a9b4a1f736a472a8386181b214d12e0b761da52477251a9a->enter($__internal_115f61f954d4a310a9b4a1f736a472a8386181b214d12e0b761da52477251a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_115f61f954d4a310a9b4a1f736a472a8386181b214d12e0b761da52477251a9a->leave($__internal_115f61f954d4a310a9b4a1f736a472a8386181b214d12e0b761da52477251a9a_prof);

        
        $__internal_5ea2bc9b2d0a9b63433911a87c3d1220a92e65ee2922bba82bf2c1f38b3582c1->leave($__internal_5ea2bc9b2d0a9b63433911a87c3d1220a92e65ee2922bba82bf2c1f38b3582c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
