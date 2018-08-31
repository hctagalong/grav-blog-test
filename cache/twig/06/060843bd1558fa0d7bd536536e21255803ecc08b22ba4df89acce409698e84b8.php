<?php

/* partials/layouts/boxed.html.twig */
class __TwigTemplate_b9acece7a727dcdfd15daf9490f152df61e7ba1b979cdb207315baea27875212 extends Twig_Template
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
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_width", array()), 1024);
        // line 2
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_height", array()), 720);
        // line 3
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_file", array());
        // line 4
        if (($context["header_image_file"] ?? null)) {
            // line 5
            echo "  ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
        } else {
            // line 7
            echo "  ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        }
        // line 9
        echo "
<div class=\"col-12\">
  <div class=\"card item-boxed\">
      ";
        // line 12
        if (($context["header_image_media"] ?? null)) {
            // line 13
            echo "        <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropResize", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "html", array());
            echo "</a>
      ";
        }
        // line 15
        echo "    <div class=\"card-body\">
        <div class=\"card-title\">
          <h3 class=\"title\"><a href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a></h3>
          <div class=\"categories\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            <a class=\"badge badge-pill badge-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "secondary");
            echo " text-uppercase font-weight-normal\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", array()), "/");
            echo "/category";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
      </div>
      <div class=\"card-text summary\">
        ";
        // line 25
        echo $this->getAttribute(($context["page"] ?? null), "summary", array());
        echo "
      </div>
      <div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item Links\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"Links\">
          ";
        // line 29
        echo $this->getAttribute(($context["bsTools"] ?? null), "button", array(0 => $this->getAttribute(($context["page"] ?? null), "url", array()), 1 => (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "button_text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "button_text", array()), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ITEM.CONTINUE_READING"))) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ITEM.CONTINUE_READING"))), 2 => null, 3 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), 4 => true, 5 => false, 6 => "primary"), "method");
        echo "
          ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 31
            echo "            ";
            echo $this->getAttribute(($context["bsTools"] ?? null), "button", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array()), 1 => null, 2 => "link", 3 => "secondary", 4 => true, 5 => false), "method");
            echo "
          ";
        }
        // line 33
        echo "        </div>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Extra Links\">
          ";
        // line 35
        echo $this->getAttribute(($context["bsTools"] ?? null), "buttons", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()), 1 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), 2 => true, 3 => true, 4 => "dark"), "method");
        echo "
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 41
            echo "        <div class=\"d-inline tags\">
          <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 42
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TAXONOMY.TAGS");
            echo "\" class=\"text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "primary");
            echo "\">
            <i class=\"fas fa-tags\"></i>
          </span>
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 46
                echo "            <a class=\"text-";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "primary");
                echo "\" href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo (( !$this->getAttribute($context["loop"], "last", array())) ? (",") : (""));
                echo "</a>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </div>
      ";
        }
        // line 50
        echo "        <div class=\"float-right\">
          <i class=\"far fa-clock text-";
        // line 51
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "primary");
        echo "\"></i>
          <small data-toggle=\"tooltip\" title=\"";
        // line 52
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
        echo "\" class=\"text-secondary\">
            ";
        // line 53
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "short", array()));
        echo "
          </small>
        </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/layouts/boxed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 53,  183 => 52,  179 => 51,  176 => 50,  172 => 48,  147 => 46,  130 => 45,  122 => 42,  119 => 41,  117 => 40,  109 => 35,  105 => 33,  99 => 31,  97 => 30,  93 => 29,  86 => 25,  81 => 22,  65 => 20,  61 => 19,  54 => 17,  50 => 15,  42 => 13,  40 => 12,  35 => 9,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set header_image_width  = page.header.image_width|defined(1024) %}
{% set header_image_height = page.header.image_height|defined(720) %}
{% set header_image_file = page.header.image_file %}
{% if header_image_file %}
  {% set header_image_media = page.media.images[header_image_file] %}
{% else %}
  {% set header_image_media = page.media.images|first %}
{% endif %}

<div class=\"col-12\">
  <div class=\"card item-boxed\">
      {% if header_image_media %}
        <a href=\"{{ page.url }}\">{{ header_image_media.cropResize(header_image_width, header_image_height).html }}</a>
      {% endif %}
    <div class=\"card-body\">
        <div class=\"card-title\">
          <h3 class=\"title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h3>
          <div class=\"categories\">
          {% for category in page.taxonomy.category %}
            <a class=\"badge badge-pill badge-{{ page.header.style|defined('secondary') }} text-uppercase font-weight-normal\" href=\"{{ parent.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>
          {% endfor %}
        </div>
      </div>
      <div class=\"card-text summary\">
        {{ page.summary }}
      </div>
      <div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item Links\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"Links\">
          {{ bsTools.button(page.url, page.header.button_text|default('ITEM.CONTINUE_READING'|t), null, page.header.style, true, false, 'primary') }}
          {% if page.header.link %}
            {{ bsTools.button(page.header.link, null, 'link', 'secondary', true, false) }}
          {% endif %}
        </div>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Extra Links\">
          {{ bsTools.buttons(page.header.buttons, page.header.style, true, true, 'dark') }}
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      {% if page.taxonomy.tag %}
        <div class=\"d-inline tags\">
          <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'TAXONOMY.TAGS'|t }}\" class=\"text-{{ page.header.style|defined('primary') }}\">
            <i class=\"fas fa-tags\"></i>
          </span>
          {% for tag in page.taxonomy.tag %}
            <a class=\"text-{{ page.header.style|defined('primary') }}\" href=\"{{ parent.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}{{ not loop.last ? ',' }}</a>
          {% endfor %}
        </div>
      {% endif %}
        <div class=\"float-right\">
          <i class=\"far fa-clock text-{{ page.header.style|defined('primary') }}\"></i>
          <small data-toggle=\"tooltip\" title=\"{{ page.date|date(config.system.pages.dateformat.long) }}\" class=\"text-secondary\">
            {{ page.date|date(config.system.pages.dateformat.short) }}
          </small>
        </div>
    </div>
  </div>
</div>
", "partials/layouts/boxed.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/templates/partials/layouts/boxed.html.twig");
    }
}
