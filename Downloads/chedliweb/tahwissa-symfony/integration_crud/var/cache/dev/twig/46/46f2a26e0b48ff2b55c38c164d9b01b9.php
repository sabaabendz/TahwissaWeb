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

/* agent/reservation/index.html.twig */
class __TwigTemplate_cdef24f37984434fc7ed06a31cc7b3e7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/reservation/index.html.twig"));

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

        yield "Agent - Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les réservations des clients</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\">
        </form>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-list\"></i></div><div class=\"stat-info\"><h3>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 19, $this->source); })()), "total", [], "any", false, false, false, 19), "html", null, true);
        yield "</h3><p>Total</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "confirmees", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3><p>Confirmées</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-clock\"></i></div><div class=\"stat-info\"><h3>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "enAttente", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3><p>En attente</p></div></div>
    <div class=\"stat-card red\"><div class=\"stat-icon\"><i class=\"fas fa-times-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 22, $this->source); })()), "annulees", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3><p>Annulées</p></div></div>
</div>

<div class=\"filter-bar\">
    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index");
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 26, $this->source); })()) == "")) ? ("active") : (""));
        yield "\">Tous</a>
    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index", ["statut" => "EN_ATTENTE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 27, $this->source); })()) == "EN_ATTENTE")) ? ("active") : (""));
        yield "\">🕐 En attente</a>
    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index", ["statut" => "CONFIRMEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 28, $this->source); })()) == "CONFIRMEE")) ? ("active") : (""));
        yield "\">✅ Confirmées</a>
    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index", ["statut" => "ANNULEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 29, $this->source); })()) == "ANNULEE")) ? ("active") : (""));
        yield "\">❌ Annulées</a>
</div>

<div class=\"dashboard-card\">
    ";
        // line 33
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "        <div class=\"empty-state\"><i class=\"fas fa-ticket-alt\"></i><h3>Aucune réservation</h3></div>
    ";
        } else {
            // line 36
            yield "        <table class=\"data-table\">
            <thead><tr><th>#</th><th>Utilisateur</th><th>Voyage</th><th>Date</th><th>Pers.</th><th>Montant</th><th>Statut</th><th>Actions</th></tr></thead>
            <tbody>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 40
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                    <td>User #";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "idUtilisateur", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
                    <td>";
                // line 43
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "voyage", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "voyage", [], "any", false, false, false, 43), "titre", [], "any", false, false, false, 43), "html", null, true);
                } else {
                    yield "N/A";
                }
                yield "</td>
                    <td>";
                // line 44
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                    <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nbrPersonnes", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:700;\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 46), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td><span class=\"badge badge-";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statutBadgeClass", [], "any", false, false, false, 47), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statutLabel", [], "any", false, false, false, 47), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"action-btn view\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"action-btn edit\"><i class=\"fas fa-pen\"></i></a>
                        ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 51) == "EN_ATTENTE")) {
                    // line 52
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 52), "statut" => "CONFIRMEE"]), "html", null, true);
                    yield "\" class=\"action-btn confirm\" title=\"Confirmer\"><i class=\"fas fa-check\"></i></a>
                        ";
                }
                // line 54
                yield "                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "            </tbody>
        </table>
    ";
        }
        // line 60
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
        return "agent/reservation/index.html.twig";
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
        return array (  240 => 60,  235 => 57,  227 => 54,  221 => 52,  219 => 51,  215 => 50,  211 => 49,  204 => 47,  200 => 46,  196 => 45,  192 => 44,  183 => 43,  179 => 42,  175 => 41,  172 => 40,  168 => 39,  163 => 36,  159 => 34,  157 => 33,  148 => 29,  142 => 28,  136 => 27,  130 => 26,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  103 => 14,  98 => 12,  93 => 10,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Réservations{% endblock %}
{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les réservations des clients</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('agent_reservation_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
        </form>
        <a href=\"{{ path('agent_reservation_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-list\"></i></div><div class=\"stat-info\"><h3>{{ stats.total }}</h3><p>Total</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>{{ stats.confirmees }}</h3><p>Confirmées</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-clock\"></i></div><div class=\"stat-info\"><h3>{{ stats.enAttente }}</h3><p>En attente</p></div></div>
    <div class=\"stat-card red\"><div class=\"stat-icon\"><i class=\"fas fa-times-circle\"></i></div><div class=\"stat-info\"><h3>{{ stats.annulees }}</h3><p>Annulées</p></div></div>
</div>

<div class=\"filter-bar\">
    <a href=\"{{ path('agent_reservation_index') }}\" class=\"filter-btn {{ currentStatut == '' ? 'active' : '' }}\">Tous</a>
    <a href=\"{{ path('agent_reservation_index', {statut: 'EN_ATTENTE'}) }}\" class=\"filter-btn {{ currentStatut == 'EN_ATTENTE' ? 'active' : '' }}\">🕐 En attente</a>
    <a href=\"{{ path('agent_reservation_index', {statut: 'CONFIRMEE'}) }}\" class=\"filter-btn {{ currentStatut == 'CONFIRMEE' ? 'active' : '' }}\">✅ Confirmées</a>
    <a href=\"{{ path('agent_reservation_index', {statut: 'ANNULEE'}) }}\" class=\"filter-btn {{ currentStatut == 'ANNULEE' ? 'active' : '' }}\">❌ Annulées</a>
</div>

<div class=\"dashboard-card\">
    {% if reservations is empty %}
        <div class=\"empty-state\"><i class=\"fas fa-ticket-alt\"></i><h3>Aucune réservation</h3></div>
    {% else %}
        <table class=\"data-table\">
            <thead><tr><th>#</th><th>Utilisateur</th><th>Voyage</th><th>Date</th><th>Pers.</th><th>Montant</th><th>Statut</th><th>Actions</th></tr></thead>
            <tbody>
                {% for r in reservations %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ r.id }}</td>
                    <td>User #{{ r.idUtilisateur }}</td>
                    <td>{% if r.voyage %}<i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> {{ r.voyage.titre }}{% else %}N/A{% endif %}</td>
                    <td>{{ r.dateReservation ? r.dateReservation|date('d/m/Y') : '-' }}</td>
                    <td>{{ r.nbrPersonnes }}</td>
                    <td style=\"font-weight:700;\">{{ r.montantTotal|number_format(2, ',', ' ') }} TND</td>
                    <td><span class=\"badge badge-{{ r.statutBadgeClass }}\">{{ r.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('agent_reservation_show', {id: r.id}) }}\" class=\"action-btn view\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('agent_reservation_edit', {id: r.id}) }}\" class=\"action-btn edit\"><i class=\"fas fa-pen\"></i></a>
                        {% if r.statut == 'EN_ATTENTE' %}
                            <a href=\"{{ path('agent_reservation_status', {id: r.id, statut: 'CONFIRMEE'}) }}\" class=\"action-btn confirm\" title=\"Confirmer\"><i class=\"fas fa-check\"></i></a>
                        {% endif %}
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "agent/reservation/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\reservation\\index.html.twig");
    }
}
