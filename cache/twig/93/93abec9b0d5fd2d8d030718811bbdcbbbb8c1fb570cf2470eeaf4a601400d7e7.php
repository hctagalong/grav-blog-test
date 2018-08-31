<?php

/* partials/base.html.twig */
class __TwigTemplate_43e113f4d630dc3801c7d8ef61890464123616cae8859533fa215503315174e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'showcase' => array($this, 'block_showcase'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["bsTools"] = $this->loadTemplate("macros/bootstrap_tools.html.twig", "partials/base.html.twig", 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "</head>
<body id=\"top\" class=\"";
        // line 50
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        if ($this->getAttribute(($context["theme_config"] ?? null), "back_to_top_button", array())) {
            // line 98
            echo "<a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary btn-lg back-to-top\" role=\"button\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RETURN_TOP_PAGE");
            echo "\" data-toggle=\"tooltip\" data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
";
        }
        // line 100
        $this->displayBlock('bottom', $context, $blocks);
        // line 103
        echo "</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "    ";
        $context["favicon"] = (($this->getAttribute(($context["theme_config"] ?? null), "favicon", array())) ? (twig_first($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", array()))) : (array("type" => "image/png", "path" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png"))));
        // line 14
        echo "    <link rel=\"icon\" type=\"";
        echo $this->getAttribute(($context["favicon"] ?? null), "type", array());
        echo "\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["favicon"] ?? null), "path", array()));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "cdn_enabled", array())) {
            // line 19
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css", 1 => 102), "method");
            // line 20
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap-reboot.min.css", 1 => 100), "method");
            // line 21
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://use.fontawesome.com/releases/v5.1.0/css/all.css", 1 => 10), "method");
            // line 22
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://use.fontawesome.com/releases/v5.1.0/css/brands.css", 1 => 10), "method");
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css-compiled/bootstrap/bootstrap.css", 1 => 102), "method");
            // line 25
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css-compiled/bootstrap/bootstrap-reboot.css", 1 => 100), "method");
            // line 26
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/fontawesome.css", 1 => 10), "method");
            // line 27
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/solid.css", 1 => 10), "method");
            // line 28
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/regular.css", 1 => 10), "method");
            // line 29
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/brands.css", 1 => 10), "method");
            // line 30
            echo "    ";
        }
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css-compiled/bootstrap-blog.css", 1 => 99), "method");
        // line 32
        echo "    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "cdn_enabled", array())) {
            // line 37
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://code.jquery.com/jquery-3.2.1.slim.min.js", 1 => 100), "method");
            // line 38
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js", 1 => 98), "method");
            // line 39
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", 1 => 99), "method");
            // line 40
            echo "    ";
        } else {
            // line 41
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 102), "method");
            // line 42
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/popper.min.js", 1 => 101), "method");
            // line 43
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/bootstrap.min.js", 1 => 100), "method");
            // line 44
            echo "    ";
        }
        // line 45
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/bootstrap_blog.js", 1 => 99), "method");
        // line 46
        echo "    ";
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        // line 52
        echo "    <nav class=\"navbar navbar-expand-md ";
        echo $context["bsTools"]->getnavbarStyle($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "style", array()));
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "sticky", array())) {
            echo "fixed-top";
        }
        echo "\" role=\"navigation\" ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "background_color", array())) {
            echo "style=\"background-color:";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "background_color", array());
            echo "\"";
        }
        echo ">
        <a class=\"navbar-brand\" href=\"";
        // line 53
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            ";
        // line 54
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "image", array())) {
            // line 55
            echo "                ";
            $context["navbar_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "image", array()));
            // line 56
            echo "                <img class=\"d-inline-block align-center\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["navbar_image"] ?? null), "path", array()));
            echo "\" alt=\"\"/>
            ";
        }
        // line 58
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "icon", array())) {
            // line 59
            echo "            <i class=\"fas fa-";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "icon", array());
            echo "\"></i>
            ";
        }
        // line 61
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "display_site_name", array())) {
            // line 62
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
            echo "
            ";
        }
        // line 64
        echo "        </a>
        ";
        // line 65
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 66
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 66)->display($context);
            // line 67
            echo "        ";
        }
        // line 68
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            ";
        // line 72
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 75
        echo "        </div>
    </nav>
";
    }

    // line 72
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 73
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "            ";
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "favicon", array()), "name", array());
        echo "
    ";
        // line 81
        $this->displayBlock('showcase', $context, $blocks);
        // line 82
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    // line 81
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "    <footer class=\"footer ";
        echo $context["bsTools"]->getstyle($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "style", array()));
        echo "\">
        <div class=\"container\">
            <div class=\"d-flex flex-row justify-content-center\">
                ";
        // line 89
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "legal", array())) {
            // line 90
            echo "                    <div class=\"footer-legal mr-auto\">";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "legal", array());
            echo "</div>
                ";
        }
        // line 92
        echo "                <div class=\"footer-text\">";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "text", array());
        echo "</div>
            </div>
        </div>
    </footer>
";
    }

    // line 100
    public function block_bottom($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 101,  354 => 100,  344 => 92,  338 => 90,  336 => 89,  329 => 86,  326 => 85,  321 => 82,  316 => 81,  311 => 82,  309 => 81,  304 => 80,  301 => 79,  297 => 74,  294 => 73,  291 => 72,  285 => 75,  283 => 72,  277 => 68,  274 => 67,  271 => 66,  269 => 65,  266 => 64,  260 => 62,  257 => 61,  251 => 59,  248 => 58,  242 => 56,  239 => 55,  237 => 54,  233 => 53,  218 => 52,  215 => 51,  211 => 46,  208 => 45,  205 => 44,  202 => 43,  199 => 42,  196 => 41,  193 => 40,  190 => 39,  187 => 38,  184 => 37,  181 => 36,  178 => 35,  174 => 32,  171 => 31,  168 => 30,  165 => 29,  162 => 28,  159 => 27,  156 => 26,  153 => 25,  150 => 24,  147 => 23,  144 => 22,  141 => 21,  138 => 20,  135 => 19,  132 => 18,  129 => 17,  122 => 47,  120 => 35,  114 => 33,  112 => 17,  107 => 15,  100 => 14,  97 => 13,  95 => 12,  85 => 9,  82 => 8,  79 => 7,  73 => 103,  71 => 100,  65 => 98,  63 => 97,  61 => 85,  58 => 84,  56 => 79,  53 => 78,  51 => 51,  47 => 50,  44 => 49,  42 => 7,  37 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% import \"macros/bootstrap_tools.html.twig\" as bsTools %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}
    {% set favicon = theme_config.favicon ? theme_config.favicon|first : { type:'image/png', path: url('theme://images/logo.png') } %}
    <link rel=\"icon\" type=\"{{ favicon.type }}\" href=\"{{ url( favicon.path ) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
    {% if theme_config.cdn_enabled %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', 102) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap-reboot.min.css', 100) %}
        {% do assets.addCss('https://use.fontawesome.com/releases/v5.1.0/css/all.css', 10) %}
        {% do assets.addCss('https://use.fontawesome.com/releases/v5.1.0/css/brands.css', 10) %}
    {% else %}
        {% do assets.addCss('theme://assets/css-compiled/bootstrap/bootstrap.css', 102) %}
        {% do assets.addCss('theme://assets/css-compiled/bootstrap/bootstrap-reboot.css', 100) %}
        {% do assets.addCss('theme://assets/css/fontawesome.css', 10) %}
        {% do assets.addCss('theme://assets/css/solid.css', 10) %}
        {% do assets.addCss('theme://assets/css/regular.css', 10) %}
        {% do assets.addCss('theme://assets/css/brands.css', 10) %}
    {% endif %}
    {% do assets.addCss('theme://assets/css-compiled/bootstrap-blog.css', 99) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
    {% if theme_config.cdn_enabled %}
        {% do assets.addJs('https://code.jquery.com/jquery-3.2.1.slim.min.js', 100) %}
        {% do assets.addJs('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', 98) %}
        {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', 99) %}
    {% else %}
        {% do assets.addJs('jquery', 102) %}
        {% do assets.addJs('theme://assets/js/popper.min.js', 101) %}
        {% do assets.addJs('theme://assets/js/bootstrap.min.js', 100) %}
    {% endif %}
    {% do assets.addJs('theme://assets/js/bootstrap_blog.js', 99) %}
    {% endblock %}
    {{ assets.js() }}
{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
{% block header %}
    <nav class=\"navbar navbar-expand-md {{ bsTools.navbarStyle(theme_config.navbar.style) }} {% if theme_config.navbar.sticky %}fixed-top{% endif %}\" role=\"navigation\" {% if theme_config.navbar.background_color %}style=\"background-color:{{ theme_config.navbar.background_color }}\"{% endif %}>
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
            {% if theme_config.navbar.image %}
                {% set navbar_image = theme_config.navbar.image|first %}
                <img class=\"d-inline-block align-center\" src=\"{{ url(navbar_image.path) }}\" alt=\"\"/>
            {% endif %}
            {% if theme_config.navbar.icon %}
            <i class=\"fas fa-{{ theme_config.navbar.icon }}\"></i>
            {% endif %}
            {% if theme_config.navbar.display_site_name %}
            {{ config.site.title }}
            {% endif %}
        </a>
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}
        </div>
    </nav>
{% endblock %}

{% block body %}
    {{ theme_config.favicon.name }}
    {% block showcase %}{% endblock %}
    {% block content %}{% endblock %}
{% endblock %}

{% block footer %}
    <footer class=\"footer {{ bsTools.style(theme_config.footer.style) }}\">
        <div class=\"container\">
            <div class=\"d-flex flex-row justify-content-center\">
                {% if theme_config.footer.legal %}
                    <div class=\"footer-legal mr-auto\">{{ theme_config.footer.legal|raw}}</div>
                {% endif %}
                <div class=\"footer-text\">{{ theme_config.footer.text|raw }}</div>
            </div>
        </div>
    </footer>
{% endblock %}
{% if theme_config.back_to_top_button %}
<a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary btn-lg back-to-top\" role=\"button\" title=\"{{ 'RETURN_TOP_PAGE'|t }}\" data-toggle=\"tooltip\" data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
{% endif %}
{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/partials/base.html.twig");
    }
}
