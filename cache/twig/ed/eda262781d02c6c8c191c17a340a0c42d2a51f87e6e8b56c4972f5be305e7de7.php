<?php

/* macros/bootstrap_tools.html.twig */
class __TwigTemplate_b12c97a0791640dba84b18c5f9768a73151c3f88910cc947845108e3af792ddd extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 14
        echo "
";
        // line 24
        echo "
";
        // line 28
        echo "
";
        // line 41
        echo "
";
        // line 50
        echo "
";
    }

    // line 2
    public function getstyle($__style__ = null, $__noTextClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "noTextClass" => $__noTextClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "  ";
            echo twig_trim_filter($this->getAttribute($this, "backgroundStyle", array(0 => ($context["style"] ?? null), 1 => ($context["noTextClass"] ?? null)), "method"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getbackgroundStyle($__style__ = null, $__noTextClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "noTextClass" => $__noTextClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "  ";
            echo (((($context["style"] ?? null)) ? (("bg-" . ($context["style"] ?? null))) : ("")) . ((($context["noTextClass"] ?? null)) ? (($context["noTextClass"] ?? null)) : ((" " . twig_trim_filter($this->getAttribute($this, "textStyle", array(0 => ($context["style"] ?? null)), "method"))))));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function gettextStyle($__style__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "  ";
            $context["output"] = twig_trim_filter($this->getAttribute($this, "processStyle", array(0 => ($context["style"] ?? null), 1 => true, 2 => ($context["default"] ?? null)), "method"));
            // line 12
            echo "  ";
            echo ("text-" . ($context["output"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getnavbarStyle($__style__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  ";
            $context["output"] = "navbar-";
            // line 17
            echo "  ";
            if (twig_in_filter(($context["style"] ?? null), array(0 => "dark", 1 => "primary", 2 => "danger", 3 => "secondary", 4 => "info", 5 => "success", 6 => "faded"))) {
                // line 18
                echo "    ";
                $context["output"] = (($context["output"] ?? null) . "dark");
                // line 19
                echo "  ";
            } else {
                // line 20
                echo "    ";
                $context["output"] = (($context["output"] ?? null) . "light");
                // line 21
                echo "  ";
            }
            // line 22
            echo "  ";
            echo ((($context["output"] ?? null) . " ") . twig_trim_filter($this->getAttribute($this, "backgroundStyle", array(0 => ($context["style"] ?? null), 1 => false), "method")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getbuttonStyle($__style__ = null, $__isOutline__ = null, $__darkOrLight__ = null, $__default__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "isOutline" => $__isOutline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "  ";
            echo ((("btn-" . ((($context["isOutline"] ?? null)) ? ("outline-") : (""))) . twig_trim_filter($this->getAttribute($this, "processStyle", array(0 => ($context["style"] ?? null), 1 => ($context["darkOrLight"] ?? null), 2 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["default"] ?? null), "dark")), "method"))) . ((($context["size"] ?? null)) ? ((" btn-" . ($context["size"] ?? null))) : ("")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getprocessStyle($__style__ = null, $__inversed__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "inversed" => $__inversed__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            if (($context["inversed"] ?? null)) {
                // line 31
                echo "    ";
                if (twig_in_filter(($context["style"] ?? null), array(0 => "primary", 1 => "success", 2 => "danger", 3 => "info", 4 => "dark", 5 => "faded"))) {
                    // line 32
                    echo "      ";
                    $context["output"] = "light";
                    // line 33
                    echo "    ";
                } else {
                    // line 34
                    echo "      ";
                    $context["output"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["default"] ?? null), "dark");
                    // line 35
                    echo "    ";
                }
                // line 36
                echo "  ";
            } else {
                // line 37
                echo "    ";
                $context["output"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["output"] ?? null), ($context["style"] ?? null));
                // line 38
                echo "  ";
            }
            // line 39
            echo "  ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["output"] ?? null), ($context["default"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getbutton($__url__ = null, $__text__ = null, $__icon__ = null, $__style__ = null, $__outline__ = null, $__darkOrLight__ = null, $__default__ = null, $__size__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "text" => $__text__,
            "icon" => $__icon__,
            "style" => $__style__,
            "outline" => $__outline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "size" => $__size__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "<a href=\"";
            echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["url"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? (($context["url"] ?? null)) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["url"] ?? null))));
            echo "\" alt=\"";
            echo ($context["text"] ?? null);
            echo "\" class=\"btn ";
            echo twig_trim_filter($this->getAttribute($this, "buttonStyle", array(0 => ($context["style"] ?? null), 1 => ($context["outline"] ?? null), 2 => ($context["darkOrLight"] ?? null), 3 => ($context["default"] ?? null), 4 => ($context["size"] ?? null)), "method"));
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
  ";
            // line 44
            if (($context["icon"] ?? null)) {
                // line 45
                echo "    <i class=\"fas fa-";
                echo ($context["icon"] ?? null);
                echo "\"></i>
  ";
            }
            // line 47
            echo "  ";
            echo ($context["text"] ?? null);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getbuttons($__buttons__ = null, $__style__ = null, $__outline__ = null, $__darkOrLight__ = null, $__default__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttons" => $__buttons__,
            "style" => $__style__,
            "outline" => $__outline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 53
                echo "    ";
                echo $this->getAttribute($this, "button", array(0 => $this->getAttribute($context["button"], "url", array()), 1 => $this->getAttribute($context["button"], "text", array()), 2 => $this->getAttribute($context["button"], "icon", array()), 3 => ($context["style"] ?? null), 4 => ($context["outline"] ?? null), 5 => ($context["darkOrLight"] ?? null), 6 => ($context["default"] ?? null), 7 => $this->getAttribute($context["button"], "size", array()), 8 => ($context["classes"] ?? null)), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
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
        return "macros/bootstrap_tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 53,  354 => 52,  337 => 51,  318 => 47,  312 => 45,  310 => 44,  299 => 43,  279 => 42,  261 => 39,  258 => 38,  255 => 37,  252 => 36,  249 => 35,  246 => 34,  243 => 33,  240 => 32,  237 => 31,  234 => 30,  220 => 29,  202 => 26,  186 => 25,  168 => 22,  165 => 21,  162 => 20,  159 => 19,  156 => 18,  153 => 17,  150 => 16,  138 => 15,  120 => 12,  117 => 11,  104 => 10,  86 => 7,  73 => 6,  55 => 3,  42 => 2,  37 => 50,  34 => 41,  31 => 28,  28 => 24,  25 => 14,  22 => 9,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Alias to backgroundStyle() #}
{% macro style(style, noTextClass) %}
  {{ _self.backgroundStyle(style, noTextClass)|trim }}
{% endmacro %}

{% macro backgroundStyle(style, noTextClass) %}
  {{ (style ? 'bg-' ~ style) ~ ( noTextClass ?: ' ' ~ _self.textStyle(style)|trim ) }}
{% endmacro %}

{% macro textStyle(style, default) %}
  {% set output = _self.processStyle(style, true, default)|trim %}
  {{ 'text-' ~ output }}
{% endmacro %}

{% macro navbarStyle(style) %}
  {% set output = 'navbar-' %}
  {% if style in ['dark', 'primary', 'danger', 'secondary', 'info', 'success', 'faded'] %}
    {% set output = output ~ 'dark' %}
  {% else %}
    {% set output = output ~ 'light' %}
  {% endif %}
  {{ output ~ ' ' ~ _self.backgroundStyle(style, false)|trim }}
{% endmacro %}

{% macro buttonStyle(style, isOutline, darkOrLight, default, size) %}
  {{ 'btn-' ~ (isOutline ? 'outline-') ~ _self.processStyle(style, darkOrLight, default|defined('dark'))|trim ~ (size ? ' btn-' ~ size) }}
{% endmacro %}

{% macro processStyle(style, inversed, default) %}
  {% if inversed %}
    {% if style in ['primary', 'success', 'danger', 'info', 'dark', 'faded'] %}
      {% set output = 'light' %}
    {% else %}
      {% set output = default|defined('dark') %}
    {% endif %}
  {% else %}
    {% set output = output|defined(style) %}
  {% endif %}
  {{ output|defined(default) }}
{% endmacro %}

{% macro button(url, text, icon, style, outline, darkOrLight, default, size, classes) %}
<a href=\"{{ url starts with 'http' ? url : url(url) }}\" alt=\"{{ text }}\" class=\"btn {{ _self.buttonStyle(style, outline, darkOrLight, default, size)|trim }} {{ classes }}\">
  {% if icon %}
    <i class=\"fas fa-{{ icon }}\"></i>
  {% endif %}
  {{ text }}
</a>
{% endmacro %}

{% macro buttons(buttons, style, outline, darkOrLight, default, classes) %}
  {% for button in buttons %}
    {{ _self.button(button.url, button.text, button.icon, style, outline, darkOrLight, default, button.size, classes ) }}
  {% endfor %}
{% endmacro %}
", "macros/bootstrap_tools.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/macros/bootstrap_tools.html.twig");
    }
}
