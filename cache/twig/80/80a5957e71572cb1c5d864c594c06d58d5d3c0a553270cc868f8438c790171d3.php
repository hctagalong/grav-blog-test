<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_5801fad26964e18388280894bd3407d3af7661e1c1385ec04088e712c6a85b79 extends Twig_Template
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
        $context["taxlist"] = (((isset($context["children_only"]) || array_key_exists("children_only", $context))) ? ($this->getAttribute(($context["taxonomylist"] ?? null), "getChildPagesTags", array(), "method")) : ($this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method")));
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<div class=\"d-inline-block\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "        ";
                $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", array(0 => ($context["taxonomy"] ?? null)), "method") == $context["tax"])) ? ("active") : (""));
                // line 7
                echo "        <a class=\"btn btn-outline-primary mb-1 ";
                echo ($context["active"] ?? null);
                echo "\" href=\"";
                echo ($context["base_url"] ?? null);
                echo "/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = children_only is defined ? taxonomylist.getChildPagesTags() : taxonomylist.get() %}

{% if taxlist %}
<div class=\"d-inline-block\">
    {% for tax,value in taxlist[taxonomy] %}
        {% set active = uri.param(taxonomy) == tax? 'active' : '' %}
        <a class=\"btn btn-outline-primary mb-1 {{ active }}\" href=\"{{ base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax }}\">{{ tax }}</a>
    {% endfor %}
</div>
{% endif %}
", "partials/taxonomylist.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/partials/taxonomylist.html.twig");
    }
}
