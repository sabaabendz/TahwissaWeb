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

/* client/reservation/show.html.twig */
class __TwigTemplate_b99c340117b91b39d2b4aa1bc321bb04 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/show.html.twig"));

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

        yield "Réservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;\">
    <i class=\"fas fa-arrow-left\"></i> Retour à mes réservations
</a>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);margin-bottom:4px;\">Réservation #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</div>
            <h2 style=\"font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;margin-bottom:8px;\">
                ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14), "titre", [], "any", false, false, false, 14), "html", null, true);
        } else {
            yield "Voyage supprimé";
        }
        // line 15
        yield "            </h2>
            ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 16, $this->source); })()), "voyage", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "voyage", [], "any", false, false, false, 17), "destination", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>
            ";
        }
        // line 19
        yield "            <span class=\"badge badge-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 19), "html", null, true);
        yield "\" style=\"font-size:0.85rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "statutLabel", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2.5rem;font-weight:900;color:var(--accent);\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "montantTotal", [], "any", false, false, false, 22), 2, ",", " "), "html", null, true);
        yield "</div>
            <div style=\"font-size:0.9rem;color:var(--text-muted);\">TND Total</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-users\"></i> Nombre de personnes</div>
            <div class=\"value\" style=\"font-size:1.2rem;\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 30), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Prix unitaire</div>
            <div class=\"value\">";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "voyage", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "voyage", [], "any", false, false, false, 34), "prixUnitaire", [], "any", false, false, false, 34), 2, ",", " ") . " TND"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">";
        // line 38
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "dateReservation", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "dateReservation", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-plus\"></i> Créée le</div>
            <div class=\"value\">";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "dateCreation", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "dateCreation", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        ";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), "voyage", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-plane-departure\"></i> Départ</div>
            <div class=\"value\">";
            // line 47
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "voyage", [], "any", false, false, false, 47), "dateDepart", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "voyage", [], "any", false, false, false, 47), "dateDepart", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-plane-arrival\"></i> Retour</div>
            <div class=\"value\">";
            // line 51
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "voyage", [], "any", false, false, false, 51), "dateRetour", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "voyage", [], "any", false, false, false, 51), "dateRetour", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
        </div>
        ";
        }
        // line 54
        yield "    </div>

    ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "statut", [], "any", false, false, false, 56) == "EN_ATTENTE")) {
            // line 57
            yield "    <div style=\"margin-top:32px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;justify-content:flex-end;\">
        <form method=\"post\" action=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler cette réservation</button>
        </form>
    </div>
    ";
        }
        // line 64
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
        return "client/reservation/show.html.twig";
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
        return array (  205 => 64,  197 => 59,  193 => 58,  190 => 57,  188 => 56,  184 => 54,  178 => 51,  171 => 47,  167 => 45,  165 => 44,  160 => 42,  153 => 38,  146 => 34,  139 => 30,  128 => 22,  119 => 19,  113 => 17,  111 => 16,  108 => 15,  102 => 14,  97 => 12,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Réservation #{{ reservation.id }}{% endblock %}

{% block content %}
<a href=\"{{ path('client_reservation_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;\">
    <i class=\"fas fa-arrow-left\"></i> Retour à mes réservations
</a>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);margin-bottom:4px;\">Réservation #{{ reservation.id }}</div>
            <h2 style=\"font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;margin-bottom:8px;\">
                {% if reservation.voyage %}{{ reservation.voyage.titre }}{% else %}Voyage supprimé{% endif %}
            </h2>
            {% if reservation.voyage %}
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> {{ reservation.voyage.destination }}</span>
            {% endif %}
            <span class=\"badge badge-{{ reservation.statutBadgeClass }}\" style=\"font-size:0.85rem;\">{{ reservation.statutLabel }}</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2.5rem;font-weight:900;color:var(--accent);\">{{ reservation.montantTotal|number_format(2, ',', ' ') }}</div>
            <div style=\"font-size:0.9rem;color:var(--text-muted);\">TND Total</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-users\"></i> Nombre de personnes</div>
            <div class=\"value\" style=\"font-size:1.2rem;\">{{ reservation.nbrPersonnes }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Prix unitaire</div>
            <div class=\"value\">{{ reservation.voyage ? reservation.voyage.prixUnitaire|number_format(2, ',', ' ') ~ ' TND' : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-plus\"></i> Créée le</div>
            <div class=\"value\">{{ reservation.dateCreation ? reservation.dateCreation|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
        {% if reservation.voyage %}
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-plane-departure\"></i> Départ</div>
            <div class=\"value\">{{ reservation.voyage.dateDepart ? reservation.voyage.dateDepart|date('d/m/Y') : '-' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-plane-arrival\"></i> Retour</div>
            <div class=\"value\">{{ reservation.voyage.dateRetour ? reservation.voyage.dateRetour|date('d/m/Y') : '-' }}</div>
        </div>
        {% endif %}
    </div>

    {% if reservation.statut == 'EN_ATTENTE' %}
    <div style=\"margin-top:32px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;justify-content:flex-end;\">
        <form method=\"post\" action=\"{{ path('client_reservation_cancel', {id: reservation.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ reservation.id) }}\">
            <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler cette réservation</button>
        </form>
    </div>
    {% endif %}
</div>
{% endblock %}
", "client/reservation/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reservation\\show.html.twig");
    }
}
