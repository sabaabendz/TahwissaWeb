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

/* client/reservation_evenement/index.html.twig */
class __TwigTemplate_327071e2b0725dca2794a5bc886c0f5c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation_evenement/index.html.twig"));

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

        yield "Mes Réservations Événements";
        
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
        yield "<div style=\"margin-bottom:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;\">
    <div>
        <h1 style=\"font-size:1.8rem;font-weight:800;margin-bottom:4px;\">
            <i class=\"fas fa-calendar-check\" style=\"color:var(--primary);margin-right:8px;\"></i>Mes Réservations Événements
        </h1>
        <p style=\"color:var(--text-muted);\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 10, $this->source); })())), "html", null, true);
        yield " réservation(s) au total</p>
    </div>
    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-calendar-alt\"></i> Voir les événements</a>
</div>

";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "    <div class=\"empty-state\" style=\"background:white;border-radius:var(--radius);padding:60px 20px;box-shadow:0 2px 10px rgba(0,0,0,0.06);\">
        <i class=\"fas fa-calendar-times\"></i>
        <h3>Aucune réservation</h3>
        <p>Vous n'avez pas encore réservé d'événement.</p>
        <a href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
            yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-calendar-alt\"></i> Découvrir les événements</a>
    </div>
";
        } else {
            // line 23
            yield "    <div style=\"display:flex;flex-direction:column;gap:16px;\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 25
                yield "        <div style=\"background:white;border-radius:var(--radius);padding:24px;box-shadow:0 2px 10px rgba(0,0,0,0.06);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;border-left:4px solid var(--";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statut", [], "any", false, false, false, 25) == "CONFIRMEE")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statut", [], "any", false, false, false, 25) == "ANNULEE")) ? ("danger") : ("warning"))));
                yield ");\">
            <div style=\"flex:1;min-width:200px;\">
                <div style=\"font-weight:700;font-size:1.05rem;margin-bottom:6px;\">
                    ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                        <i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:6px;\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 29), "titre", [], "any", false, false, false, 29), "html", null, true);
                    yield "
                    ";
                } else {
                    // line 31
                    yield "                        <i class=\"fas fa-calendar-times\" style=\"color:var(--text-muted);margin-right:6px;\"></i>Événement supprimé
                    ";
                }
                // line 33
                yield "                </div>
                ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "                <div style=\"color:var(--text-muted);font-size:0.85rem;margin-bottom:4px;\">
                    <i class=\"fas fa-map-marker-alt\"></i> ";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 36), "lieu", [], "any", false, false, false, 36), "html", null, true);
                    yield " &nbsp;•&nbsp;
                    <i class=\"fas fa-calendar-day\"></i> ";
                    // line 37
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 37), "dateEvent", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "evenement", [], "any", false, false, false, 37), "dateEvent", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true)) : ("N/A"));
                    yield "
                </div>
                ";
                }
                // line 40
                yield "                <div style=\"font-size:0.82rem;color:#94a3b8;\">Réservé le ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield " · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "nbPlacesReservees", [], "any", false, false, false, 40), "html", null, true);
                yield " place(s)</div>
            </div>
            <div style=\"display:flex;align-items:center;gap:16px;flex-wrap:wrap;\">
                <span class=\"badge badge-";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutBadgeClass", [], "any", false, false, false, 43), "html", null, true);
                yield "\" style=\"font-size:0.85rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutLabel", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
                <a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                ";
                // line 45
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statut", [], "any", false, false, false, 45) == "EN_ATTENTE")) {
                    // line 46
                    yield "                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Annuler cette réservation ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 47))), "html", null, true);
                    yield "\">
                    <button type=\"submit\" class=\"btn btn-outline-danger btn-xs\"><i class=\"fas fa-times\"></i> Annuler</button>
                </form>
                ";
                }
                // line 51
                yield "            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
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
        return "client/reservation_evenement/index.html.twig";
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
        return array (  202 => 54,  194 => 51,  187 => 47,  182 => 46,  180 => 45,  176 => 44,  170 => 43,  161 => 40,  155 => 37,  151 => 36,  148 => 35,  146 => 34,  143 => 33,  139 => 31,  133 => 29,  131 => 28,  124 => 25,  120 => 24,  117 => 23,  111 => 20,  105 => 16,  103 => 15,  97 => 12,  92 => 10,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Mes Réservations Événements{% endblock %}

{% block content %}
<div style=\"margin-bottom:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;\">
    <div>
        <h1 style=\"font-size:1.8rem;font-weight:800;margin-bottom:4px;\">
            <i class=\"fas fa-calendar-check\" style=\"color:var(--primary);margin-right:8px;\"></i>Mes Réservations Événements
        </h1>
        <p style=\"color:var(--text-muted);\">{{ reservations|length }} réservation(s) au total</p>
    </div>
    <a href=\"{{ path('client_evenement_index') }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-calendar-alt\"></i> Voir les événements</a>
</div>

{% if reservations is empty %}
    <div class=\"empty-state\" style=\"background:white;border-radius:var(--radius);padding:60px 20px;box-shadow:0 2px 10px rgba(0,0,0,0.06);\">
        <i class=\"fas fa-calendar-times\"></i>
        <h3>Aucune réservation</h3>
        <p>Vous n'avez pas encore réservé d'événement.</p>
        <a href=\"{{ path('client_evenement_index') }}\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-calendar-alt\"></i> Découvrir les événements</a>
    </div>
{% else %}
    <div style=\"display:flex;flex-direction:column;gap:16px;\">
        {% for res in reservations %}
        <div style=\"background:white;border-radius:var(--radius);padding:24px;box-shadow:0 2px 10px rgba(0,0,0,0.06);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;border-left:4px solid var(--{{ res.statut == 'CONFIRMEE' ? 'success' : (res.statut == 'ANNULEE' ? 'danger' : 'warning') }});\">
            <div style=\"flex:1;min-width:200px;\">
                <div style=\"font-weight:700;font-size:1.05rem;margin-bottom:6px;\">
                    {% if res.evenement %}
                        <i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:6px;\"></i>{{ res.evenement.titre }}
                    {% else %}
                        <i class=\"fas fa-calendar-times\" style=\"color:var(--text-muted);margin-right:6px;\"></i>Événement supprimé
                    {% endif %}
                </div>
                {% if res.evenement %}
                <div style=\"color:var(--text-muted);font-size:0.85rem;margin-bottom:4px;\">
                    <i class=\"fas fa-map-marker-alt\"></i> {{ res.evenement.lieu }} &nbsp;•&nbsp;
                    <i class=\"fas fa-calendar-day\"></i> {{ res.evenement.dateEvent ? res.evenement.dateEvent|date('d/m/Y') : 'N/A' }}
                </div>
                {% endif %}
                <div style=\"font-size:0.82rem;color:#94a3b8;\">Réservé le {{ res.dateReservation ? res.dateReservation|date('d/m/Y') : 'N/A' }} · {{ res.nbPlacesReservees }} place(s)</div>
            </div>
            <div style=\"display:flex;align-items:center;gap:16px;flex-wrap:wrap;\">
                <span class=\"badge badge-{{ res.statutBadgeClass }}\" style=\"font-size:0.85rem;\">{{ res.statutLabel }}</span>
                <a href=\"{{ path('client_reservation_evenement_show', {id: res.id}) }}\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                {% if res.statut == 'EN_ATTENTE' %}
                <form method=\"post\" action=\"{{ path('client_reservation_evenement_cancel', {id: res.id}) }}\" onsubmit=\"return confirm('Annuler cette réservation ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ res.id) }}\">
                    <button type=\"submit\" class=\"btn btn-outline-danger btn-xs\"><i class=\"fas fa-times\"></i> Annuler</button>
                </form>
                {% endif %}
            </div>
        </div>
        {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "client/reservation_evenement/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reservation_evenement\\index.html.twig");
    }
}
