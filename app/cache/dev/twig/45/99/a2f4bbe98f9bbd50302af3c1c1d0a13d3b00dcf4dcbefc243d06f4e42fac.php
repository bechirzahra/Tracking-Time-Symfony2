<?php

/* MyAppCrediWireBundle:Project:add.html.twig */
class __TwigTemplate_4599a2f4bbe98f9bbd50302af3c1c1d0a13d3b00dcf4dcbefc243d06f4e42fac extends Twig_Template
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
        // line 1
        echo "<html>
    <head>
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker-standalone.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\">
        <title>Symfony and Bootstrap Datetimepicker</title>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"starter-template\">
                <h1>Symfony and Bootstrap Datetimepicker</h1>
                <div class=\"row\">
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
        echo "
                            <div class='input-group date' id='datetimepicker'>
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => "form-control input-inline datetimepicker")));
        echo "
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row', array("label" => "OK"));
        echo "
                        </div>
                        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>

        <script src=\"https://code.jquery.com/jquery-1.11.3.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
        <script type=\"text/javascript\">
            \$('#datetimepicker').datetimepicker({
                locale: 'es',
                useCurrent: false,
                sideBySide: true
            });
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Project:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  165 => 56,  127 => 50,  114 => 47,  34 => 14,  77 => 41,  97 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 35,  71 => 34,  67 => 33,  63 => 32,  59 => 26,  38 => 15,  94 => 28,  89 => 20,  85 => 39,  75 => 35,  68 => 26,  56 => 22,  87 => 25,  21 => 2,  26 => 6,  93 => 44,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 55,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 48,  105 => 36,  91 => 43,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 38,  69 => 37,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 59,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  55 => 29,  52 => 21,  50 => 10,  43 => 17,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 53,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 64,  109 => 34,  106 => 61,  103 => 60,  99 => 31,  95 => 28,  92 => 53,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 28,  60 => 24,  57 => 11,  54 => 20,  51 => 28,  48 => 15,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 10,);
    }
}
