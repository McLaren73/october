<?php

/* /data/web/virtuals/147277/virtual/www/subdom/october/themes/rocwer/pages/rezervace.htm */
class __TwigTemplate_022a730ade63e929719baf7ec8d27d1d45002cae8f7b285725f0f9f479ef9841 extends Twig_Template
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
        echo "<div class=\"container\">

\t<h2 class=\"headline\">Rezervace</h2>
\t<p class=\"description\">Jedná se o plugin <a href=\"https://octobercms.com/plugin/vojtasvoboda-reservations\" target=\"_blank\">Reservations</a>, použitý je například na stránkách <a href=\"http://www.transportartists.com\" target=\"_blank\">Transportartists</a> (na tomto webu je použit i <a href=\"https://octobercms.com/plugin/vojtasvoboda-reviews\" target=\"_blank\">widget pro recenze zákazníků</a>). Měl by podporovat překlady. Využívá AJAXové odeslání formu. Plugin odesílá potvrzovací mail návštěvníkovi, lze změnit na odeslání libovolnému uživateli. Zvážit možnost použití externí služby pro složitější případy - www.reservio.com, www.restu.cz, lekar.znamylekar.cz/cenik.</p>
\t
\t";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("reservationForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "\t
</div>";
    }

    public function getTemplateName()
    {
        return "/data/web/virtuals/147277/virtual/www/subdom/october/themes/rocwer/pages/rezervace.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

\t<h2 class=\"headline\">Rezervace</h2>
\t<p class=\"description\">Jedná se o plugin <a href=\"https://octobercms.com/plugin/vojtasvoboda-reservations\" target=\"_blank\">Reservations</a>, použitý je například na stránkách <a href=\"http://www.transportartists.com\" target=\"_blank\">Transportartists</a> (na tomto webu je použit i <a href=\"https://octobercms.com/plugin/vojtasvoboda-reviews\" target=\"_blank\">widget pro recenze zákazníků</a>). Měl by podporovat překlady. Využívá AJAXové odeslání formu. Plugin odesílá potvrzovací mail návštěvníkovi, lze změnit na odeslání libovolnému uživateli. Zvážit možnost použití externí služby pro složitější případy - www.reservio.com, www.restu.cz, lekar.znamylekar.cz/cenik.</p>
\t
\t{% component 'reservationForm' %}
\t
</div>", "/data/web/virtuals/147277/virtual/www/subdom/october/themes/rocwer/pages/rezervace.htm", "");
    }
}
