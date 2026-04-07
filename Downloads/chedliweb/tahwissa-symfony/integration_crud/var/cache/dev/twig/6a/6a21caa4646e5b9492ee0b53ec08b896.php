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

/* agent/reservation_evenement/index.html.twig */
class __TwigTemplate_4c96450e4992cbce41da421428a66ad7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/reservation_evenement/index.html.twig"));

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

        yield "Agent - Réservations Événements";
        
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
        <h1><i class=\"fas fa-calendar-check\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservations Événements</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les réservations d'événements</p>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle</a>
    </div>
</div>

<div class=\"filter-bar\">
    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_index");
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 16, $this->source); })()) == "")) ? ("active") : (""));
        yield "\">Toutes</a>
    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_index", ["statut" => "EN_ATTENTE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 17, $this->source); })()) == "EN_ATTENTE")) ? ("active") : (""));
        yield "\">🕐 En attente</a>
    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_index", ["statut" => "CONFIRMEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 18, $this->source); })()) == "CONFIRMEE")) ? ("active") : (""));
        yield "\">✅ Confirmées</a>
    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_index", ["statut" => "ANNULEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 19, $this->source); })()) == "ANNULEE")) ? ("active") : (""));
        yield "\">❌ Annulées</a>
</div>

<div class=\"dashboard-card\">
    ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucune réservation trouvée</h3>
            <p>Aucune réservation ne correspond à ce filtre.</p>
        </div>
    ";
        } else {
            // line 30
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Utilisateur</th>
                    <th>Événement</th>
                    <th>Date Rés.</th>
                    <th>Places</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 44
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                    <td>";
                // line 46
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["usersById"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["res"], "idUser", [], "any", false, false, false, 46), [], "array", true, true, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersById"]) || array_key_exists("usersById", $context) ? $context["usersById"] : (function () { throw new RuntimeError('Variable "usersById" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["res"], "idUser", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("User #" . CoreExtension::getAttribute($this->env, $this->source, $context["res"], "idUser", [], "any", false, false, false, 46)), "html", null, true)));
                yield "</td>
                    <td>
                        ";
                // line 48
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                            <i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:4px;\"></i>
                            ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 50), "titre", [], "any", false, false, false, 50), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 52
                    yield "                            <span style=\"color:var(--text-muted);\">Événement supprimé</span>
                        ";
                }
                // line 54
                yield "                    </td>
                    <td>";
                // line 55
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                    <td style=\"text-align:center;font-weight:700;\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "nbPlacesReservees", [], "any", false, false, false, 56), "html", null, true);
                yield "</td>
                    <td><span class=\"badge badge-";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutBadgeClass", [], "any", false, false, false, 57), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutLabel", [], "any", false, false, false, 57), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statut", [], "any", false, false, false, 61) == "EN_ATTENTE")) {
                    // line 62
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 62), "statut" => "CONFIRMEE"]), "html", null, true);
                    yield "\" class=\"action-btn confirm\" title=\"Confirmer\"><i class=\"fas fa-check\"></i></a>
                            <a href=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 63), "statut" => "ANNULEE"]), "html", null, true);
                    yield "\" class=\"action-btn delete\" title=\"Annuler\"><i class=\"fas fa-times\"></i></a>
                        ";
                }
                // line 65
                yield "                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "            </tbody>
        </table>
    ";
        }
        // line 71
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
        return "agent/reservation_evenement/index.html.twig";
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
        return array (  234 => 71,  229 => 68,  221 => 65,  216 => 63,  211 => 62,  209 => 61,  205 => 60,  201 => 59,  194 => 57,  190 => 56,  186 => 55,  183 => 54,  179 => 52,  174 => 50,  171 => 49,  169 => 48,  164 => 46,  160 => 45,  157 => 44,  153 => 43,  138 => 30,  130 => 24,  128 => 23,  119 => 19,  113 => 18,  107 => 17,  101 => 16,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Réservations Événements{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-check\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservations Événements</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les réservations d'événements</p>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('agent_reservation_evenement_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle</a>
    </div>
</div>

<div class=\"filter-bar\">
    <a href=\"{{ path('agent_reservation_evenement_index') }}\" class=\"filter-btn {{ currentStatut == '' ? 'active' : '' }}\">Toutes</a>
    <a href=\"{{ path('agent_reservation_evenement_index', {statut: 'EN_ATTENTE'}) }}\" class=\"filter-btn {{ currentStatut == 'EN_ATTENTE' ? 'active' : '' }}\">🕐 En attente</a>
    <a href=\"{{ path('agent_reservation_evenement_index', {statut: 'CONFIRMEE'}) }}\" class=\"filter-btn {{ currentStatut == 'CONFIRMEE' ? 'active' : '' }}\">✅ Confirmées</a>
    <a href=\"{{ path('agent_reservation_evenement_index', {statut: 'ANNULEE'}) }}\" class=\"filter-btn {{ currentStatut == 'ANNULEE' ? 'active' : '' }}\">❌ Annulées</a>
</div>

<div class=\"dashboard-card\">
    {% if reservations is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucune réservation trouvée</h3>
            <p>Aucune réservation ne correspond à ce filtre.</p>
        </div>
    {% else %}
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Utilisateur</th>
                    <th>Événement</th>
                    <th>Date Rés.</th>
                    <th>Places</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for res in reservations %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ res.id }}</td>
                    <td>{{ usersById[res.idUser] is defined ? usersById[res.idUser].nom : 'User #' ~ res.idUser }}</td>
                    <td>
                        {% if res.evenement %}
                            <i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:4px;\"></i>
                            {{ res.evenement.titre }}
                        {% else %}
                            <span style=\"color:var(--text-muted);\">Événement supprimé</span>
                        {% endif %}
                    </td>
                    <td>{{ res.dateReservation ? res.dateReservation|date('d/m/Y') : '-' }}</td>
                    <td style=\"text-align:center;font-weight:700;\">{{ res.nbPlacesReservees }}</td>
                    <td><span class=\"badge badge-{{ res.statutBadgeClass }}\">{{ res.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('agent_reservation_evenement_show', {id: res.id}) }}\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('agent_reservation_evenement_edit', {id: res.id}) }}\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        {% if res.statut == 'EN_ATTENTE' %}
                            <a href=\"{{ path('agent_reservation_evenement_status', {id: res.id, statut: 'CONFIRMEE'}) }}\" class=\"action-btn confirm\" title=\"Confirmer\"><i class=\"fas fa-check\"></i></a>
                            <a href=\"{{ path('agent_reservation_evenement_status', {id: res.id, statut: 'ANNULEE'}) }}\" class=\"action-btn delete\" title=\"Annuler\"><i class=\"fas fa-times\"></i></a>
                        {% endif %}
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "agent/reservation_evenement/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\reservation_evenement\\index.html.twig");
    }
}
