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

/* agent/voyage/index.html.twig */
class __TwigTemplate_b61cd53c9dcdf3154a32296fac7f3550 extends Template
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
        return "agent/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/voyage/index.html.twig"));

        $this->parent = $this->load("agent/layout.html.twig", 1);
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

        yield "Agent - Voyages";
        
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
        yield "<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>Voyages</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les voyages (création et modification)</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
        </form>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouveau</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-globe\"></i></div><div class=\"stat-info\"><h3>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "total", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3><p>Total</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "actifs", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3><p>Actifs</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-chair\"></i></div><div class=\"stat-info\"><h3>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 22, $this->source); })()), "places", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3><p>Places</p></div></div>
    <div class=\"stat-card purple\"><div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div><div class=\"stat-info\"><h3>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "prixMoyen", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3><p>Prix Moy.</p></div></div>
</div>

<div class=\"dashboard-card\">
    ";
        // line 27
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "        <div class=\"empty-state\"><i class=\"fas fa-plane-slash\"></i><h3>Aucun voyage</h3><p>Créez votre premier voyage.</p></div>
    ";
        } else {
            // line 30
            yield "        <table class=\"data-table\">
            <thead><tr><th>#</th><th>Titre</th><th>Destination</th><th>Catégorie</th><th>Prix</th><th>Dates</th><th>Places</th><th>Statut</th><th>Actions</th></tr></thead>
            <tbody>
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 34
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:600;\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "titre", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "destination", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                    <td><span class=\"badge badge-primary\">";
                // line 38
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "categorie", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["v"], "categorie", [], "any", false, false, false, 38)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "categorie", [], "any", false, false, false, 38), "html", null, true)) : ("-"));
                yield "</span></td>
                    <td style=\"font-weight:700;\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "prixUnitaire", [], "any", false, false, false, 39), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td style=\"font-size:0.82rem;\">";
                // line 40
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "dateDepart", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "dateDepart", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true)) : ("-"));
                yield " → ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "dateRetour", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "dateRetour", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                    <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "placesDisponibles", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                    <td><span class=\"badge ";
                // line 42
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "statut", [], "any", false, false, false, 42) == "ACTIF")) ? ("badge-success") : ("badge-danger"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "statut", [], "any", false, false, false, 42), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"action-btn view\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"action-btn edit\"><i class=\"fas fa-pen\"></i></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "            </tbody>
        </table>
    ";
        }
        // line 52
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agent/voyage/index.html.twig";
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
        return array (  204 => 52,  199 => 49,  189 => 45,  185 => 44,  178 => 42,  174 => 41,  168 => 40,  164 => 39,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  145 => 34,  141 => 33,  136 => 30,  132 => 28,  130 => 27,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 15,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Voyages{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>Voyages</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les voyages (création et modification)</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('agent_voyage_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
        </form>
        <a href=\"{{ path('agent_voyage_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouveau</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-globe\"></i></div><div class=\"stat-info\"><h3>{{ stats.total }}</h3><p>Total</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>{{ stats.actifs }}</h3><p>Actifs</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-chair\"></i></div><div class=\"stat-info\"><h3>{{ stats.places }}</h3><p>Places</p></div></div>
    <div class=\"stat-card purple\"><div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div><div class=\"stat-info\"><h3>{{ stats.prixMoyen }}</h3><p>Prix Moy.</p></div></div>
</div>

<div class=\"dashboard-card\">
    {% if voyages is empty %}
        <div class=\"empty-state\"><i class=\"fas fa-plane-slash\"></i><h3>Aucun voyage</h3><p>Créez votre premier voyage.</p></div>
    {% else %}
        <table class=\"data-table\">
            <thead><tr><th>#</th><th>Titre</th><th>Destination</th><th>Catégorie</th><th>Prix</th><th>Dates</th><th>Places</th><th>Statut</th><th>Actions</th></tr></thead>
            <tbody>
                {% for v in voyages %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ v.id }}</td>
                    <td style=\"font-weight:600;\">{{ v.titre }}</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> {{ v.destination }}</td>
                    <td><span class=\"badge badge-primary\">{{ v.categorie ?? '-' }}</span></td>
                    <td style=\"font-weight:700;\">{{ v.prixUnitaire|number_format(2, ',', ' ') }} TND</td>
                    <td style=\"font-size:0.82rem;\">{{ v.dateDepart ? v.dateDepart|date('d/m/Y') : '-' }} → {{ v.dateRetour ? v.dateRetour|date('d/m/Y') : '-' }}</td>
                    <td>{{ v.placesDisponibles }}</td>
                    <td><span class=\"badge {{ v.statut == 'ACTIF' ? 'badge-success' : 'badge-danger' }}\">{{ v.statut }}</span></td>
                    <td>
                        <a href=\"{{ path('agent_voyage_show', {id: v.id}) }}\" class=\"action-btn view\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('agent_voyage_edit', {id: v.id}) }}\" class=\"action-btn edit\"><i class=\"fas fa-pen\"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "agent/voyage/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\voyage\\index.html.twig");
    }
}
