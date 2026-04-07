<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* client/evenement/index.html.twig */
class __TwigTemplate_450ee72763d5579611a2220049e78eba extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "client/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/evenement/index.html.twig"));

        $this->parent = $this->load("client/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "<div style=\"margin-bottom:32px;\">
    <h1 style=\"font-size:2rem;font-weight:800;margin-bottom:8px;\">
        <i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Événements à venir
    </h1>
    <p style=\"color:var(--text-muted);\">Découvrez et réservez les prochains événements</p>

    <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
        yield "\" class=\"search-box\" style=\"margin-top:16px;max-width:400px;\">
        <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un événement...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
        <button type=\"submit\" style=\"background:none;border:none;cursor:pointer;color:var(--primary);font-weight:600;font-size:0.85rem;\">OK</button>
    </form>
</div>

";
        // line 18
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 18, $this->source); })()))) {
            // line 19
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-calendar-times\"></i>
        <h3>Aucun événement disponible</h3>
        <p>Revenez bientôt pour découvrir nos prochains événements.</p>
    </div>
";
        } else {
            // line 25
            yield "    <div class=\"voyage-grid\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                // line 27
                yield "        <div class=\"voyage-card\">
            <div class=\"voyage-card-image\" style=\"background:linear-gradient(135deg,
                ";
                // line 29
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 29) == "Musique")) {
                    yield "#7C4DFF,#E040FB
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 30
$context["ev"], "categorie", [], "any", false, false, false, 30) == "Sport")) {
                    yield "#00C853,#69F0AE
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 31
$context["ev"], "categorie", [], "any", false, false, false, 31) == "Art")) {
                    yield "#FF6D00,#FFAB40
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 32
$context["ev"], "categorie", [], "any", false, false, false, 32) == "Culture")) {
                    yield "#1565C0,#42A5F5
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 33
$context["ev"], "categorie", [], "any", false, false, false, 33) == "Technologie")) {
                    yield "#00B0FF,#00E5FF
                ";
                } else {
                    // line 34
                    yield "#455A64,#78909C";
                }
                yield ");\">
                <span style=\"font-size:3.5rem;\">
                    ";
                // line 36
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 36) == "Musique")) {
                    yield "🎵
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 37
$context["ev"], "categorie", [], "any", false, false, false, 37) == "Sport")) {
                    yield "🏅
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 38
$context["ev"], "categorie", [], "any", false, false, false, 38) == "Art")) {
                    yield "🎨
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 39
$context["ev"], "categorie", [], "any", false, false, false, 39) == "Culture")) {
                    yield "🎭
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["ev"], "categorie", [], "any", false, false, false, 40) == "Technologie")) {
                    yield "💻
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 41
$context["ev"], "categorie", [], "any", false, false, false, 41) == "Cinéma")) {
                    yield "🎬
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
$context["ev"], "categorie", [], "any", false, false, false, 42) == "Gastronomie")) {
                    yield "🍽️
                    ";
                } else {
                    // line 43
                    yield "🎉";
                }
                // line 44
                yield "                </span>
                <span class=\"badge badge-";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutBadgeClass", [], "any", false, false, false, 45), "html", null, true);
                yield " category-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutLabel", [], "any", false, false, false, 45), "html", null, true);
                yield "</span>
            </div>
            <div class=\"voyage-card-body\">
                <h3>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 48), "html", null, true);
                yield "</h3>
                <div class=\"destination\"><i class=\"fas fa-map-marker-alt\"></i> ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "lieu", [], "any", false, false, false, 49), "html", null, true);
                yield "</div>
                <div class=\"info-row\">
                    <span><i class=\"fas fa-calendar-day\" style=\"color:var(--primary);\"></i> ";
                // line 51
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateEvent", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateEvent", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</span>
                    <span><i class=\"fas fa-clock\" style=\"color:var(--secondary);\"></i> ";
                // line 52
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "heureEvent", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "heureEvent", [], "any", false, false, false, 52), "H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                </div>
                <div class=\"info-row\">
                    <span><i class=\"fas fa-chair\" style=\"color:var(--accent);\"></i> ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 55), "html", null, true);
                yield " places</span>
                    <span class=\"badge badge-primary\">";
                // line 56
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 56), "html", null, true)) : ("Autre"));
                yield "</span>
                </div>
                <div class=\"price\">";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "prix", [], "any", false, false, false, 58), 2, ",", " "), "html", null, true);
                yield " TND</div>
            </div>
            <div class=\"voyage-card-footer\">
                <a href=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                ";
                // line 62
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statut", [], "any", false, false, false, 62) == "DISPONIBLE")) {
                    // line 63
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_new", ["evenementId" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    yield "\" class=\"btn btn-primary btn-xs\"><i class=\"fas fa-calendar-check\"></i> Réserver</a>
                ";
                } else {
                    // line 65
                    yield "                    <span class=\"badge badge-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutBadgeClass", [], "any", false, false, false, 65), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutLabel", [], "any", false, false, false, 65), "html", null, true);
                    yield "</span>
                ";
                }
                // line 67
                yield "            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/evenement/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  259 => 70,  251 => 67,  243 => 65,  237 => 63,  235 => 62,  231 => 61,  225 => 58,  220 => 56,  216 => 55,  210 => 52,  206 => 51,  201 => 49,  197 => 48,  189 => 45,  186 => 44,  183 => 43,  178 => 42,  174 => 41,  170 => 40,  166 => 39,  162 => 38,  158 => 37,  154 => 36,  148 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 27,  119 => 26,  116 => 25,  108 => 19,  106 => 18,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Événements{% endblock %}

{% block content %}
<div style=\"margin-bottom:32px;\">
    <h1 style=\"font-size:2rem;font-weight:800;margin-bottom:8px;\">
        <i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Événements à venir
    </h1>
    <p style=\"color:var(--text-muted);\">Découvrez et réservez les prochains événements</p>

    <form method=\"get\" action=\"{{ path('client_evenement_index') }}\" class=\"search-box\" style=\"margin-top:16px;max-width:400px;\">
        <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un événement...\" value=\"{{ search }}\">
        <button type=\"submit\" style=\"background:none;border:none;cursor:pointer;color:var(--primary);font-weight:600;font-size:0.85rem;\">OK</button>
    </form>
</div>

{% if evenements is empty %}
    <div class=\"empty-state\">
        <i class=\"fas fa-calendar-times\"></i>
        <h3>Aucun événement disponible</h3>
        <p>Revenez bientôt pour découvrir nos prochains événements.</p>
    </div>
{% else %}
    <div class=\"voyage-grid\">
        {% for ev in evenements %}
        <div class=\"voyage-card\">
            <div class=\"voyage-card-image\" style=\"background:linear-gradient(135deg,
                {% if ev.categorie == 'Musique' %}#7C4DFF,#E040FB
                {% elseif ev.categorie == 'Sport' %}#00C853,#69F0AE
                {% elseif ev.categorie == 'Art' %}#FF6D00,#FFAB40
                {% elseif ev.categorie == 'Culture' %}#1565C0,#42A5F5
                {% elseif ev.categorie == 'Technologie' %}#00B0FF,#00E5FF
                {% else %}#455A64,#78909C{% endif %});\">
                <span style=\"font-size:3.5rem;\">
                    {% if ev.categorie == 'Musique' %}🎵
                    {% elseif ev.categorie == 'Sport' %}🏅
                    {% elseif ev.categorie == 'Art' %}🎨
                    {% elseif ev.categorie == 'Culture' %}🎭
                    {% elseif ev.categorie == 'Technologie' %}💻
                    {% elseif ev.categorie == 'Cinéma' %}🎬
                    {% elseif ev.categorie == 'Gastronomie' %}🍽️
                    {% else %}🎉{% endif %}
                </span>
                <span class=\"badge badge-{{ ev.statutBadgeClass }} category-badge\">{{ ev.statutLabel }}</span>
            </div>
            <div class=\"voyage-card-body\">
                <h3>{{ ev.titre }}</h3>
                <div class=\"destination\"><i class=\"fas fa-map-marker-alt\"></i> {{ ev.lieu }}</div>
                <div class=\"info-row\">
                    <span><i class=\"fas fa-calendar-day\" style=\"color:var(--primary);\"></i> {{ ev.dateEvent ? ev.dateEvent|date('d/m/Y') : 'N/A' }}</span>
                    <span><i class=\"fas fa-clock\" style=\"color:var(--secondary);\"></i> {{ ev.heureEvent ? ev.heureEvent|date('H:i') : 'N/A' }}</span>
                </div>
                <div class=\"info-row\">
                    <span><i class=\"fas fa-chair\" style=\"color:var(--accent);\"></i> {{ ev.nbPlaces }} places</span>
                    <span class=\"badge badge-primary\">{{ ev.categorie ?? 'Autre' }}</span>
                </div>
                <div class=\"price\">{{ ev.prix|number_format(2, ',', ' ') }} TND</div>
            </div>
            <div class=\"voyage-card-footer\">
                <a href=\"{{ path('client_evenement_show', {id: ev.id}) }}\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                {% if ev.statut == 'DISPONIBLE' %}
                    <a href=\"{{ path('client_reservation_evenement_new', {evenementId: ev.id}) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fas fa-calendar-check\"></i> Réserver</a>
                {% else %}
                    <span class=\"badge badge-{{ ev.statutBadgeClass }}\">{{ ev.statutLabel }}</span>
                {% endif %}
            </div>
        </div>
        {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "client/evenement/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\evenement\\index.html.twig");
    }
}
