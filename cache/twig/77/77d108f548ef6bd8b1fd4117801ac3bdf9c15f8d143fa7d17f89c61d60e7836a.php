<?php

/* blog.html.twig */
class __TwigTemplate_6141dd443a4e19b1defd41b202546b0c26e44fc4f72f5679012b40d1f6391450 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "44836969")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}

\t\t{% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
\t\t\t{% set sidebar = true %}
\t\t{% else %}
\t\t\t{% set sidebar = false %}
\t\t{% endif %}

\t\t{% include 'partials/showcase.html.twig' with { 'content':page.content } %}

\t\t<div class=\"container\">
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
          <div class=\"row items\">
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t{% include 'partials/layouts/' ~ page.header.layout|defined('boxed') ~ '.html.twig' with {'parent': page, 'page': child } %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t\t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t\t\t{% endif %}
          </div>
\t\t\t\t</div>
\t\t\t\t{% if sidebar %}
\t\t\t\t<div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
\t\t\t\t\t<div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
\t\t\t\t\t{% include 'partials/sidebar.html.twig' with { 'blog':page } %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "blog.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_6141dd443a4e19b1defd41b202546b0c26e44fc4f72f5679012b40d1f6391450_44836969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t";
        // line 7
        if (( !($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "enabled", array()) === false) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sidebar", array()), "enabled", array()) === false))) {
            // line 8
            echo "\t\t\t";
            $context["sidebar"] = true;
            // line 9
            echo "\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            $context["sidebar"] = false;
            // line 11
            echo "\t\t";
        }
        // line 12
        echo "
\t\t";
        // line 13
        $this->loadTemplate("partials/showcase.html.twig", "blog.html.twig", 13)->display(array_merge($context, array("content" => $this->getAttribute(($context["page"] ?? null), "content", array()))));
        // line 14
        echo "
\t\t<div class=\"container\">
\t\t\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 17
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
          <div class=\"row items\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "\t\t\t\t\t\t";
            $this->loadTemplate((("partials/layouts/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "layout", array()), "boxed")) . ".html.twig"), "blog.html.twig", 23)->display(array_merge($context, array("parent" => ($context["page"] ?? null), "page" => $context["child"])));
            // line 24
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 26
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 26)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 27
            echo "\t\t\t\t\t";
        }
        // line 28
        echo "          </div>
\t\t\t\t</div>
\t\t\t\t";
        // line 30
        if (($context["sidebar"] ?? null)) {
            // line 31
            echo "\t\t\t\t<div id=\"sidebar\" class=\"col-12 col-md-4 ";
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "align", array()) == "left")) {
                echo "order-md-first";
            }
            echo "\">
\t\t\t\t\t<div class=\"sidebar-content ";
            // line 32
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "border", array())) {
                echo "border-";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "border", array());
            }
            echo "\">
\t\t\t\t\t";
            // line 33
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 33)->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
            // line 34
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 37,  222 => 34,  220 => 33,  213 => 32,  206 => 31,  204 => 30,  200 => 28,  197 => 27,  194 => 26,  191 => 25,  177 => 24,  174 => 23,  157 => 22,  152 => 19,  149 => 18,  146 => 17,  144 => 16,  140 => 14,  138 => 13,  135 => 12,  132 => 11,  129 => 10,  126 => 9,  123 => 8,  121 => 7,  118 => 6,  115 => 5,  111 => 1,  109 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}

\t\t{% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
\t\t\t{% set sidebar = true %}
\t\t{% else %}
\t\t\t{% set sidebar = false %}
\t\t{% endif %}

\t\t{% include 'partials/showcase.html.twig' with { 'content':page.content } %}

\t\t<div class=\"container\">
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
          <div class=\"row items\">
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t{% include 'partials/layouts/' ~ page.header.layout|defined('boxed') ~ '.html.twig' with {'parent': page, 'page': child } %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t\t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t\t\t{% endif %}
          </div>
\t\t\t\t</div>
\t\t\t\t{% if sidebar %}
\t\t\t\t<div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
\t\t\t\t\t<div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
\t\t\t\t\t{% include 'partials/sidebar.html.twig' with { 'blog':page } %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "blog.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/blog.html.twig");
    }
}
