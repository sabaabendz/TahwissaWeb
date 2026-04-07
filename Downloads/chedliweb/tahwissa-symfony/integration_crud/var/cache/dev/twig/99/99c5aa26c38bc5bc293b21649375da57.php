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

/* admin/reservation/index.html.twig */
class __TwigTemplate_bb2f9dca9ac9ee8dddb4866ae6896c9a extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $this->parent = $this->load("admin/layout.html.twig", 1);
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

        yield "Admin - Réservations";
        
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
        <h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer toutes les réservations de voyage</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 14
        if ((($tmp = (isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"statut\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 15
        yield "        </form>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(5,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-list\"></i></div><div class=\"stat-info\"><h3>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "total", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3><p>Total</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 22, $this->source); })()), "confirmees", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3><p>Confirmées</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-clock\"></i></div><div class=\"stat-info\"><h3>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "enAttente", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3><p>En attente</p></div></div>
    <div class=\"stat-card red\"><div class=\"stat-icon\"><i class=\"fas fa-times-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 24, $this->source); })()), "annulees", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3><p>Annulées</p></div></div>
    <div class=\"stat-card purple\"><div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div><div class=\"stat-info\"><h3>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "revenu", [], "any", false, false, false, 25), 0, ",", " "), "html", null, true);
        yield "</h3><p>Revenu (TND)</p></div></div>
</div>

";
        // line 29
        yield "<div class=\"filter-bar\">
    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 30, $this->source); })()) == "")) ? ("active") : (""));
        yield "\">Tous</a>
    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "EN_ATTENTE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 31, $this->source); })()) == "EN_ATTENTE")) ? ("active") : (""));
        yield "\">🕐 En attente</a>
    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "CONFIRMEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 32, $this->source); })()) == "CONFIRMEE")) ? ("active") : (""));
        yield "\">✅ Confirmées</a>
    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "ANNULEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 33, $this->source); })()) == "ANNULEE")) ? ("active") : (""));
        yield "\">❌ Annulées</a>
    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "TERMINEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 34, $this->source); })()) == "TERMINEE")) ? ("active") : (""));
        yield "\">🏁 Terminées</a>
</div>

<div class=\"dashboard-card\">
    ";
        // line 38
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-ticket-alt\"></i>
            <h3>Aucune réservation trouvée</h3>
            <p>Créez une nouvelle réservation pour commencer.</p>
        </div>
    ";
        } else {
            // line 45
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Utilisateur</th>
                    <th>Voyage</th>
                    <th>Date Rés.</th>
                    <th>Personnes</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 60
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
                    <td>
                        <div style=\"display:flex;align-items:center;gap:8px;\">
                            <div style=\"width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:600;font-size:0.7rem;\">U";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "idUtilisateur", [], "any", false, false, false, 64), "html", null, true);
                yield "</div>
                            <span>User #";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "idUtilisateur", [], "any", false, false, false, 65), "html", null, true);
                yield "</span>
                        </div>
                    </td>
                    <td>
                        ";
                // line 69
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 70
                    yield "                            <i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:4px;\"></i>
                            ";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 71), "titre", [], "any", false, false, false, 71), "html", null, true);
                    yield "<br>
                            <small style=\"color:var(--text-muted);\"><i class=\"fas fa-map-marker-alt\"></i> ";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 72), "destination", [], "any", false, false, false, 72), "html", null, true);
                    yield "</small>
                        ";
                } else {
                    // line 74
                    yield "                            <span style=\"color:var(--text-muted);\">Voyage supprimé</span>
                        ";
                }
                // line 76
                yield "                    </td>
                    <td>";
                // line 77
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                    <td style=\"text-align:center;\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "nbrPersonnes", [], "any", false, false, false, 78), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:700;\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "montantTotal", [], "any", false, false, false, 79), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td><span class=\"badge badge-";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutBadgeClass", [], "any", false, false, false, 80), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutLabel", [], "any", false, false, false, 80), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\" class=\"action-btn\" title=\"PDF\" style=\"color:var(--danger);\" target=\"_blank\"><i class=\"fas fa-file-pdf\"></i></a>
                        <a href=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        ";
                // line 85
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statut", [], "any", false, false, false, 85) == "EN_ATTENTE")) {
                    // line 86
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 86), "statut" => "CONFIRMEE"]), "html", null, true);
                    yield "\" class=\"action-btn confirm\" title=\"Confirmer\"><i class=\"fas fa-check\"></i></a>
                        ";
                }
                // line 88
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette réservation ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 89))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                        </form>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "            </tbody>
        </table>
    ";
        }
        // line 98
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
        return "admin/reservation/index.html.twig";
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
        return array (  309 => 98,  304 => 95,  292 => 89,  287 => 88,  281 => 86,  279 => 85,  275 => 84,  271 => 83,  267 => 82,  260 => 80,  256 => 79,  252 => 78,  248 => 77,  245 => 76,  241 => 74,  236 => 72,  232 => 71,  229 => 70,  227 => 69,  220 => 65,  216 => 64,  210 => 61,  207 => 60,  203 => 59,  187 => 45,  179 => 39,  177 => 38,  168 => 34,  162 => 33,  156 => 32,  150 => 31,  144 => 30,  141 => 29,  135 => 25,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  111 => 16,  108 => 15,  102 => 14,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Réservations{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer toutes les réservations de voyage</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('admin_reservation_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
            {% if currentStatut %}<input type=\"hidden\" name=\"statut\" value=\"{{ currentStatut }}\">{% endif %}
        </form>
        <a href=\"{{ path('admin_reservation_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(5,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-list\"></i></div><div class=\"stat-info\"><h3>{{ stats.total }}</h3><p>Total</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>{{ stats.confirmees }}</h3><p>Confirmées</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-clock\"></i></div><div class=\"stat-info\"><h3>{{ stats.enAttente }}</h3><p>En attente</p></div></div>
    <div class=\"stat-card red\"><div class=\"stat-icon\"><i class=\"fas fa-times-circle\"></i></div><div class=\"stat-info\"><h3>{{ stats.annulees }}</h3><p>Annulées</p></div></div>
    <div class=\"stat-card purple\"><div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div><div class=\"stat-info\"><h3>{{ stats.revenu|number_format(0, ',', ' ') }}</h3><p>Revenu (TND)</p></div></div>
</div>

{# Status filter bar #}
<div class=\"filter-bar\">
    <a href=\"{{ path('admin_reservation_index') }}\" class=\"filter-btn {{ currentStatut == '' ? 'active' : '' }}\">Tous</a>
    <a href=\"{{ path('admin_reservation_index', {statut: 'EN_ATTENTE'}) }}\" class=\"filter-btn {{ currentStatut == 'EN_ATTENTE' ? 'active' : '' }}\">🕐 En attente</a>
    <a href=\"{{ path('admin_reservation_index', {statut: 'CONFIRMEE'}) }}\" class=\"filter-btn {{ currentStatut == 'CONFIRMEE' ? 'active' : '' }}\">✅ Confirmées</a>
    <a href=\"{{ path('admin_reservation_index', {statut: 'ANNULEE'}) }}\" class=\"filter-btn {{ currentStatut == 'ANNULEE' ? 'active' : '' }}\">❌ Annulées</a>
    <a href=\"{{ path('admin_reservation_index', {statut: 'TERMINEE'}) }}\" class=\"filter-btn {{ currentStatut == 'TERMINEE' ? 'active' : '' }}\">🏁 Terminées</a>
</div>

<div class=\"dashboard-card\">
    {% if reservations is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-ticket-alt\"></i>
            <h3>Aucune réservation trouvée</h3>
            <p>Créez une nouvelle réservation pour commencer.</p>
        </div>
    {% else %}
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Utilisateur</th>
                    <th>Voyage</th>
                    <th>Date Rés.</th>
                    <th>Personnes</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for res in reservations %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ res.id }}</td>
                    <td>
                        <div style=\"display:flex;align-items:center;gap:8px;\">
                            <div style=\"width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:600;font-size:0.7rem;\">U{{ res.idUtilisateur }}</div>
                            <span>User #{{ res.idUtilisateur }}</span>
                        </div>
                    </td>
                    <td>
                        {% if res.voyage %}
                            <i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:4px;\"></i>
                            {{ res.voyage.titre }}<br>
                            <small style=\"color:var(--text-muted);\"><i class=\"fas fa-map-marker-alt\"></i> {{ res.voyage.destination }}</small>
                        {% else %}
                            <span style=\"color:var(--text-muted);\">Voyage supprimé</span>
                        {% endif %}
                    </td>
                    <td>{{ res.dateReservation ? res.dateReservation|date('d/m/Y') : '-' }}</td>
                    <td style=\"text-align:center;\">{{ res.nbrPersonnes }}</td>
                    <td style=\"font-weight:700;\">{{ res.montantTotal|number_format(2, ',', ' ') }} TND</td>
                    <td><span class=\"badge badge-{{ res.statutBadgeClass }}\">{{ res.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('admin_reservation_show', {id: res.id}) }}\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('admin_reservation_pdf', {id: res.id}) }}\" class=\"action-btn\" title=\"PDF\" style=\"color:var(--danger);\" target=\"_blank\"><i class=\"fas fa-file-pdf\"></i></a>
                        <a href=\"{{ path('admin_reservation_edit', {id: res.id}) }}\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        {% if res.statut == 'EN_ATTENTE' %}
                            <a href=\"{{ path('admin_reservation_status', {id: res.id, statut: 'CONFIRMEE'}) }}\" class=\"action-btn confirm\" title=\"Confirmer\"><i class=\"fas fa-check\"></i></a>
                        {% endif %}
                        <form method=\"post\" action=\"{{ path('admin_reservation_delete', {id: res.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette réservation ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ res.id) }}\">
                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                        </form>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "admin/reservation/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reservation\\index.html.twig");
    }
}
