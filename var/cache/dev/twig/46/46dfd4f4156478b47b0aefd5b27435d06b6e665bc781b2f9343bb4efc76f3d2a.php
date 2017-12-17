<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_ad5ac89d861316ea5e30e37fa472a10eb13170ae84012e00631d3c5406785a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5ac89d861316ea5e30e37fa472a10eb13170ae84012e00631d3c5406785a25->enter($__internal_ad5ac89d861316ea5e30e37fa472a10eb13170ae84012e00631d3c5406785a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f1ae7380fcbc2f01fcc70c5563f5a5e0d316e1221fdc78736b95ca328d4cf1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ae7380fcbc2f01fcc70c5563f5a5e0d316e1221fdc78736b95ca328d4cf1fd->enter($__internal_f1ae7380fcbc2f01fcc70c5563f5a5e0d316e1221fdc78736b95ca328d4cf1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ad5ac89d861316ea5e30e37fa472a10eb13170ae84012e00631d3c5406785a25->leave($__internal_ad5ac89d861316ea5e30e37fa472a10eb13170ae84012e00631d3c5406785a25_prof);

        
        $__internal_f1ae7380fcbc2f01fcc70c5563f5a5e0d316e1221fdc78736b95ca328d4cf1fd->leave($__internal_f1ae7380fcbc2f01fcc70c5563f5a5e0d316e1221fdc78736b95ca328d4cf1fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_853bd602ee4bb7967f364a95095033f0e9d13c7e29f4ae4e25588c37455669e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853bd602ee4bb7967f364a95095033f0e9d13c7e29f4ae4e25588c37455669e2->enter($__internal_853bd602ee4bb7967f364a95095033f0e9d13c7e29f4ae4e25588c37455669e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ce572aa107698bacae0e77981856a2590be042dd606d4ea50dcf0803673cace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce572aa107698bacae0e77981856a2590be042dd606d4ea50dcf0803673cace->enter($__internal_7ce572aa107698bacae0e77981856a2590be042dd606d4ea50dcf0803673cace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7ce572aa107698bacae0e77981856a2590be042dd606d4ea50dcf0803673cace->leave($__internal_7ce572aa107698bacae0e77981856a2590be042dd606d4ea50dcf0803673cace_prof);

        
        $__internal_853bd602ee4bb7967f364a95095033f0e9d13c7e29f4ae4e25588c37455669e2->leave($__internal_853bd602ee4bb7967f364a95095033f0e9d13c7e29f4ae4e25588c37455669e2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d13ab3dbf301706cf03dceef4e3901ce1e72701acbae87d1a6bbdda4f56e0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d13ab3dbf301706cf03dceef4e3901ce1e72701acbae87d1a6bbdda4f56e0f5->enter($__internal_6d13ab3dbf301706cf03dceef4e3901ce1e72701acbae87d1a6bbdda4f56e0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c829a2df282bad6752dec603902fab114c6bb6eee8e2de5c0d4033b6326f2873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c829a2df282bad6752dec603902fab114c6bb6eee8e2de5c0d4033b6326f2873->enter($__internal_c829a2df282bad6752dec603902fab114c6bb6eee8e2de5c0d4033b6326f2873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c829a2df282bad6752dec603902fab114c6bb6eee8e2de5c0d4033b6326f2873->leave($__internal_c829a2df282bad6752dec603902fab114c6bb6eee8e2de5c0d4033b6326f2873_prof);

        
        $__internal_6d13ab3dbf301706cf03dceef4e3901ce1e72701acbae87d1a6bbdda4f56e0f5->leave($__internal_6d13ab3dbf301706cf03dceef4e3901ce1e72701acbae87d1a6bbdda4f56e0f5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de67454f596e097f1cdc1f2e0e33a02a63f1d9452aedf5fcafe28c6d3673068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de67454f596e097f1cdc1f2e0e33a02a63f1d9452aedf5fcafe28c6d3673068->enter($__internal_6de67454f596e097f1cdc1f2e0e33a02a63f1d9452aedf5fcafe28c6d3673068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f17c53761122e799c2fc0dd40f57ed19c83275f5d3bfa3ca6b22bf4eeb3c0a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17c53761122e799c2fc0dd40f57ed19c83275f5d3bfa3ca6b22bf4eeb3c0a45->enter($__internal_f17c53761122e799c2fc0dd40f57ed19c83275f5d3bfa3ca6b22bf4eeb3c0a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f17c53761122e799c2fc0dd40f57ed19c83275f5d3bfa3ca6b22bf4eeb3c0a45->leave($__internal_f17c53761122e799c2fc0dd40f57ed19c83275f5d3bfa3ca6b22bf4eeb3c0a45_prof);

        
        $__internal_6de67454f596e097f1cdc1f2e0e33a02a63f1d9452aedf5fcafe28c6d3673068->leave($__internal_6de67454f596e097f1cdc1f2e0e33a02a63f1d9452aedf5fcafe28c6d3673068_prof);

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
", "@Twig/layout.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
