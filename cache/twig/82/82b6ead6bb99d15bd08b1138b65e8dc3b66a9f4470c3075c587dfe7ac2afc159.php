<?php

/* partials/navigation.html.twig */
class __TwigTemplate_57c3c190fb57d74343160cfcf8de79ec8015a5b15d1984feaade0b313031638f extends Twig_Template
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
        // line 26
        echo "
<ul class=\"navbar-nav ml-auto\">
    ";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "dropdown", array()) == true)) {
            // line 29
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 33
                echo "            <li class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 34
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 35
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fas fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 36
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 42
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 44
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fas fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 45
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 50
            echo "        <li class=\"nav-item\"><i class=\"fas fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 50)->display($context);
            echo "</li>
    ";
        }
        // line 52
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li class=\"nav-item dropdown ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a id=\"dropdown-";
                    // line 6
                    echo $this->getAttribute($context["p"], "id", array());
                    echo "\" class=\"nav-link dropdown-toggle\" href=\"";
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fas fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 8
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-";
                    // line 10
                    echo $this->getAttribute($context["p"], "id", array());
                    echo "\"> ";
                    // line 11
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 12
                        echo "                        <a class=\"dropdown-item\" href=\"";
                        echo $this->getAttribute($context["c"], "url", array());
                        echo "\">";
                        echo $this->getAttribute($context["c"], "menu", array());
                        echo "</a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "                </div>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li class=\"nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a class=\"nav-link\" href=\"";
                    // line 18
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 19
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fas fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 20
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 24,  196 => 20,  190 => 19,  186 => 18,  181 => 17,  176 => 14,  165 => 12,  160 => 11,  157 => 10,  151 => 8,  145 => 7,  139 => 6,  134 => 5,  131 => 4,  128 => 3,  123 => 2,  111 => 1,  106 => 52,  100 => 50,  97 => 49,  86 => 45,  80 => 44,  76 => 43,  73 => 42,  68 => 41,  65 => 40,  54 => 36,  48 => 35,  44 => 34,  39 => 33,  36 => 32,  31 => 31,  25 => 29,  23 => 28,  19 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"nav-item dropdown {{ current_page }}\">
                <a id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle\" href=\"{{ p.url }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
                <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-{{ p.id }}\"> {# Translation? #}
                    {% for c in p.children.visible %}
                        <a class=\"dropdown-item\" href=\"{{ c.url }}\">{{ c.menu }}</a>
                    {% endfor %}
                </div>
            </li>
        {% else %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"navbar-nav ml-auto\">
    {% if theme_config.navbar.dropdown == true %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fas fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fas fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
    {% if config.plugins.login.enabled and grav.user.username %}
        <li class=\"nav-item\"><i class=\"fas fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/partials/navigation.html.twig");
    }
}
