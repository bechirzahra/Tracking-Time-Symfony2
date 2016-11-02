<?php

/* MyAppCrediWireBundle:Default:index.html.twig */
class __TwigTemplate_570a75aa1ab951577f6f85d7c435ae222e553d16d3d7cefb128449d4dfbef53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Sign in &middot; Project</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>

    <body>

        ";
        // line 20
        $this->displayBlock('container', $context, $blocks);
        // line 22
        echo "

        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcrediwire/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
       
        <script type=\"text/javascript\">
            \$(function () {
                \$('#datetimepicker').datetimepicker({
                });
            });
            function afficherCalendrier(idInputDate)
            {
               
                \$('#' + idInputDate).datetimepicker({
                   
                });
            }
        </script>
         <script type=\"text/javascript\">
    afficherCalendrier('myapp_crediwirebundle_project_endDate');
    afficherCalendrier('myapp_crediwirebundle_project_startDate');
</script>

        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 48,  118 => 47,  114 => 21,  111 => 20,  107 => 15,  97 => 49,  95 => 47,  68 => 26,  64 => 25,  60 => 24,  56 => 22,  54 => 20,  48 => 16,  46 => 14,  41 => 12,  37 => 11,  33 => 10,  22 => 1,  110 => 56,  104 => 14,  100 => 52,  96 => 51,  92 => 50,  88 => 49,  84 => 48,  72 => 27,  69 => 37,  32 => 3,  29 => 2,);
    }
}
