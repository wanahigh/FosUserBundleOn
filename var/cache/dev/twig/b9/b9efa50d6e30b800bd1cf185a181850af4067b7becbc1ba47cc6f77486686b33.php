<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_69985cf482752280b1e5aea3393b9b7e9721d66d33c11882fedd1dfc0127a4bf extends Twig_Template
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
        $__internal_e0f161681487dcd00689d2e59fe83080575a7dec14f213833c74baa408ed7101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f161681487dcd00689d2e59fe83080575a7dec14f213833c74baa408ed7101->enter($__internal_e0f161681487dcd00689d2e59fe83080575a7dec14f213833c74baa408ed7101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ec8083515dedb7c892c85abd3c21f400d00359a7df12782de7274c2d324c6a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8083515dedb7c892c85abd3c21f400d00359a7df12782de7274c2d324c6a45->enter($__internal_ec8083515dedb7c892c85abd3c21f400d00359a7df12782de7274c2d324c6a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e0f161681487dcd00689d2e59fe83080575a7dec14f213833c74baa408ed7101->leave($__internal_e0f161681487dcd00689d2e59fe83080575a7dec14f213833c74baa408ed7101_prof);

        
        $__internal_ec8083515dedb7c892c85abd3c21f400d00359a7df12782de7274c2d324c6a45->leave($__internal_ec8083515dedb7c892c85abd3c21f400d00359a7df12782de7274c2d324c6a45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
