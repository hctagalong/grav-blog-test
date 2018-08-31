<?php

/* partials/userinfo-avatar-credit.html.twig */
class __TwigTemplate_5688531d26e6a78ea38c003eab415b4997c515cc96d946c61f3b6c56cf6dc30c extends Twig_Template
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
        echo "<p class=\"gravatar\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_BY"), "html", null, true);
        echo " <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a>. ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_UPLOAD_OWN"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar-credit.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<p class=\"gravatar\">{{ \"PLUGIN_ADMIN.AVATAR_BY\"|tu }} <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a>. {{ \"PLUGIN_ADMIN.AVATAR_UPLOAD_OWN\"|tu }}</p>
", "partials/userinfo-avatar-credit.html.twig", "/home/tinyacor/domains/blog_ddeemer/user/plugins/admin/themes/grav/templates/partials/userinfo-avatar-credit.html.twig");
    }
}
