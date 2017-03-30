<?php

/* /data/web/virtuals/147277/virtual/www/subdom/october/themes/rocwer/layouts/Layout.htm */
class __TwigTemplate_f8ba32f9e73400db1a95a77593ee684a589189ac29e5d63c24762c38cd61f97f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"cs\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, maximum-scale=1.0\">
        <meta name=\"format-detection\" content=\"telephone=no\">
        <meta name=\"theme-color\" content=\"#e6b920\" />
        
        <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " | October site</title>
        
        <meta name=\"description\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"netpromotion group s.r.o.\">
        <meta name=\"robots\" content=\"index, follow\">
        
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/style.scss"));
        echo "\" rel=\"stylesheet\">
        
        ";
        // line 19
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 20
        echo "
    </head>
    
    <body>
    \t
\t<nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item ";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "uvod")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("uvod");
        echo "\">Formuláře</a>
          </li>
          <li class=\"nav-item ";
        // line 31
        if ((is_string($__internal_281deebe6c632a7e0a7d62d9276f9e7015a7ee858c0163571bbebe45a0307ec9 = $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array())) && is_string($__internal_74a92cd552f1c2a06f1962c20f252cd50086d353971b332808a59aa091c275b0 = "blog") && ('' === $__internal_74a92cd552f1c2a06f1962c20f252cd50086d353971b332808a59aa091c275b0 || 0 === strpos($__internal_281deebe6c632a7e0a7d62d9276f9e7015a7ee858c0163571bbebe45a0307ec9, $__internal_74a92cd552f1c2a06f1962c20f252cd50086d353971b332808a59aa091c275b0)))) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a>
          </li>
          <li class=\"dropdown ";
        // line 34
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()), array(0 => "katalog", 1 => "mrkev"))) {
            echo "active";
        }
        echo "\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Katalogy <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
\t            <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "katalog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("katalog/kategorie");
        echo "\">Catalog</a></li>
\t            ";
        // line 44
        echo "\t          </ul>
\t      </li>
          <li class=\"nav-item ";
        // line 46
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "staticke-stranky")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("staticke-stranky");
        echo "\">Statické stránky</a>
          </li>
          <li class=\"nav-item ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "galerie")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("galerie");
        echo "\">Galerie</a>
          </li>
          <li class=\"nav-item ";
        // line 52
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "rezervace")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("rezervace");
        echo "\">Rezervace</a>
          </li>
          <li class=\"nav-item ";
        // line 55
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "preklady")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("preklady");
        echo "\">Překlady</a>
          </li>
          <li class=\"nav-item ";
        // line 58
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "knihy")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("knihy");
        echo "\">Builder</a>
          </li>
        </ul>
        <div class=\"lang\">
        \t";
        // line 63
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 64
        echo "        </div>
      </div>
    </nav>
        
    <header>
    </header>
    
    ";
        // line 72
        echo "    <div class=\"content\">";
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "</div>
    
    <footer>OCTOBER CMS TEST SITE</footer>
    
    ";
        // line 77
        echo "\t<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "@jquery", 1 => "assets/js/bootstrap.min.js", 2 => "@framework", 3 => "@framework.extras"));
        // line 82
        echo "\"></script>

\t";
        // line 84
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 85
        echo "\t\t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/data/web/virtuals/147277/virtual/www/subdom/october/themes/rocwer/layouts/Layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 85,  188 => 84,  184 => 82,  181 => 77,  173 => 72,  164 => 64,  160 => 63,  153 => 59,  147 => 58,  142 => 56,  136 => 55,  131 => 53,  125 => 52,  120 => 50,  114 => 49,  109 => 47,  103 => 46,  99 => 44,  91 => 37,  83 => 34,  78 => 32,  72 => 31,  67 => 29,  61 => 28,  51 => 20,  48 => 19,  43 => 17,  35 => 12,  30 => 10,  19 => 1,);
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
<html lang=\"cs\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, maximum-scale=1.0\">
        <meta name=\"format-detection\" content=\"telephone=no\">
        <meta name=\"theme-color\" content=\"#e6b920\" />
        
        <title>{{ this.page.title }} | October site</title>
        
        <meta name=\"description\" content=\"{{ metaDescription }}\">
        <meta name=\"author\" content=\"netpromotion group s.r.o.\">
        <meta name=\"robots\" content=\"index, follow\">
        
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"{{ ['assets/scss/style.scss']|theme }}\" rel=\"stylesheet\">
        
        {% styles %}

    </head>
    
    <body>
    \t
\t<nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item {% if this.page.id == 'uvod' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'uvod'|page }}\">Formuláře</a>
          </li>
          <li class=\"nav-item {% if this.page.id starts with 'blog' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a>
          </li>
          <li class=\"dropdown {% if this.page.id in ['katalog','mrkev'] %}active{% endif %}\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Katalogy <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
\t            <li class=\"{% if this.page.id == 'katalog' %}active{% endif %}\"><a href=\"{{ 'katalog/kategorie'|page }}\">Catalog</a></li>
\t            {#
\t            <li role=\"separator\" class=\"divider\"></li>
\t            <li class=\"dropdown-header\">E-shopy</li>
\t            <li><a href=\"#\">JK Shop</a></li>
\t            <li><a href=\"#\">Octoshop</a></li>
\t            #}
\t          </ul>
\t      </li>
          <li class=\"nav-item {% if this.page.id == 'staticke-stranky' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'staticke-stranky'|page }}\">Statické stránky</a>
          </li>
          <li class=\"nav-item {% if this.page.id == 'galerie' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'galerie'|page }}\">Galerie</a>
          </li>
          <li class=\"nav-item {% if this.page.id == 'rezervace' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'rezervace'|page }}\">Rezervace</a>
          </li>
          <li class=\"nav-item {% if this.page.id == 'preklady' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'preklady'|page }}\">Překlady</a>
          </li>
          <li class=\"nav-item {% if this.page.id == 'knihy' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'knihy'|page }}\">Builder</a>
          </li>
        </ul>
        <div class=\"lang\">
        \t{% component 'localePicker' %}
        </div>
      </div>
    </nav>
        
    <header>
    </header>
    
    {# main content #}
    <div class=\"content\">{% page %}</div>
    
    <footer>OCTOBER CMS TEST SITE</footer>
    
    {# js #}
\t<script src=\"{{ [
\t    '@jquery',
\t    'assets/js/bootstrap.min.js',
\t    '@framework',
\t    '@framework.extras',
\t]|theme }}\"></script>

\t{% scripts %}
\t\t
    </body>
</html>", "/data/web/virtuals/147277/virtual/www/subdom/october/themes/rocwer/layouts/Layout.htm", "");
    }
}
