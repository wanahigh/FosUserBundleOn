<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b40d3de71a29b6bc9cfa25ab3735f82cc1f91f680f427744b311bbadd633d9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40d3de71a29b6bc9cfa25ab3735f82cc1f91f680f427744b311bbadd633d9c5->enter($__internal_b40d3de71a29b6bc9cfa25ab3735f82cc1f91f680f427744b311bbadd633d9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_28bbde8fa1cf5e2a91006255f81d360f5d8c0d4af42d54730da8986dfd1635e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bbde8fa1cf5e2a91006255f81d360f5d8c0d4af42d54730da8986dfd1635e7->enter($__internal_28bbde8fa1cf5e2a91006255f81d360f5d8c0d4af42d54730da8986dfd1635e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b40d3de71a29b6bc9cfa25ab3735f82cc1f91f680f427744b311bbadd633d9c5->leave($__internal_b40d3de71a29b6bc9cfa25ab3735f82cc1f91f680f427744b311bbadd633d9c5_prof);

        
        $__internal_28bbde8fa1cf5e2a91006255f81d360f5d8c0d4af42d54730da8986dfd1635e7->leave($__internal_28bbde8fa1cf5e2a91006255f81d360f5d8c0d4af42d54730da8986dfd1635e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_182344f36d65c39654d49dffaa12100702bd2f001992b80ebed0d1c118ca0957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182344f36d65c39654d49dffaa12100702bd2f001992b80ebed0d1c118ca0957->enter($__internal_182344f36d65c39654d49dffaa12100702bd2f001992b80ebed0d1c118ca0957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ae7247294b5f24b01137d84d9d072887b702a4d6217e600259e2488df5c6b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae7247294b5f24b01137d84d9d072887b702a4d6217e600259e2488df5c6b69->enter($__internal_1ae7247294b5f24b01137d84d9d072887b702a4d6217e600259e2488df5c6b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ae7247294b5f24b01137d84d9d072887b702a4d6217e600259e2488df5c6b69->leave($__internal_1ae7247294b5f24b01137d84d9d072887b702a4d6217e600259e2488df5c6b69_prof);

        
        $__internal_182344f36d65c39654d49dffaa12100702bd2f001992b80ebed0d1c118ca0957->leave($__internal_182344f36d65c39654d49dffaa12100702bd2f001992b80ebed0d1c118ca0957_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5684a989581e9c2ed8bbe21732ad4a6611e379d94965884c0cdaddd6937a32d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5684a989581e9c2ed8bbe21732ad4a6611e379d94965884c0cdaddd6937a32d7->enter($__internal_5684a989581e9c2ed8bbe21732ad4a6611e379d94965884c0cdaddd6937a32d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca5e45a9feeb68c05e35cb74d9115798a4eab93f4fa762c282bd94da981f3e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5e45a9feeb68c05e35cb74d9115798a4eab93f4fa762c282bd94da981f3e62->enter($__internal_ca5e45a9feeb68c05e35cb74d9115798a4eab93f4fa762c282bd94da981f3e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca5e45a9feeb68c05e35cb74d9115798a4eab93f4fa762c282bd94da981f3e62->leave($__internal_ca5e45a9feeb68c05e35cb74d9115798a4eab93f4fa762c282bd94da981f3e62_prof);

        
        $__internal_5684a989581e9c2ed8bbe21732ad4a6611e379d94965884c0cdaddd6937a32d7->leave($__internal_5684a989581e9c2ed8bbe21732ad4a6611e379d94965884c0cdaddd6937a32d7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a6d7f24eeb07b9459236726a87002274eea5b44534fc9003d4e8cad7e41440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a6d7f24eeb07b9459236726a87002274eea5b44534fc9003d4e8cad7e41440->enter($__internal_75a6d7f24eeb07b9459236726a87002274eea5b44534fc9003d4e8cad7e41440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3722bb49079a70c0c1c87e17e24d87a821c6ff25ba8050ada162f70a26dfcb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3722bb49079a70c0c1c87e17e24d87a821c6ff25ba8050ada162f70a26dfcb15->enter($__internal_3722bb49079a70c0c1c87e17e24d87a821c6ff25ba8050ada162f70a26dfcb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3722bb49079a70c0c1c87e17e24d87a821c6ff25ba8050ada162f70a26dfcb15->leave($__internal_3722bb49079a70c0c1c87e17e24d87a821c6ff25ba8050ada162f70a26dfcb15_prof);

        
        $__internal_75a6d7f24eeb07b9459236726a87002274eea5b44534fc9003d4e8cad7e41440->leave($__internal_75a6d7f24eeb07b9459236726a87002274eea5b44534fc9003d4e8cad7e41440_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe8fcee7bac65a5f7fb80280714db09da51ba86a89de994aa4664b5efab541b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8fcee7bac65a5f7fb80280714db09da51ba86a89de994aa4664b5efab541b7->enter($__internal_fe8fcee7bac65a5f7fb80280714db09da51ba86a89de994aa4664b5efab541b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_142305920d50515340cb69b80d6fb560e43714b194e8cf761be5357ed45cb4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142305920d50515340cb69b80d6fb560e43714b194e8cf761be5357ed45cb4a6->enter($__internal_142305920d50515340cb69b80d6fb560e43714b194e8cf761be5357ed45cb4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_142305920d50515340cb69b80d6fb560e43714b194e8cf761be5357ed45cb4a6->leave($__internal_142305920d50515340cb69b80d6fb560e43714b194e8cf761be5357ed45cb4a6_prof);

        
        $__internal_fe8fcee7bac65a5f7fb80280714db09da51ba86a89de994aa4664b5efab541b7->leave($__internal_fe8fcee7bac65a5f7fb80280714db09da51ba86a89de994aa4664b5efab541b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/akatosh/Bureau/Symfony Base/elbuen/app/Resources/views/base.html.twig");
    }
}
