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

/* client/evenement/show.html.twig */
class __TwigTemplate_b0896cb8bcb1f31decc8c1fba9b0c801 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/evenement/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield "<div style=\"margin-bottom:16px;\">
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Retour aux événements
    </a>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.8rem;font-weight:800;margin-bottom:10px;\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 16, $this->source); })()), "lieu", [], "any", false, false, false, 16), "html", null, true);
        yield "</span>
                <span class=\"badge badge-purple\">";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "categorie", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 17, $this->source); })()), "categorie", [], "any", false, false, false, 17)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 17, $this->source); })()), "categorie", [], "any", false, false, false, 17), "html", null, true)) : ("Événement"));
        yield "</span>
                <span class=\"badge badge-";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 18), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "statutLabel", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2.2rem;font-weight:800;color:var(--primary);\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), 2, ",", " "), "html", null, true);
        yield " TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">par place</div>
        </div>
    </div>

    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "    <div style=\"margin-bottom:28px;padding:20px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--primary);color:#475569;font-size:0.95rem;line-height:1.8;\">
        ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
            yield "
    </div>
    ";
        }
        // line 32
        yield "
    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date de l'événement</div>
            <div class=\"value\">";
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 36, $this->source); })()), "dateEvent", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 36, $this->source); })()), "dateEvent", [], "any", false, false, false, 36), "l d F Y"), "html", null, true)) : ("Non définie"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-clock\"></i> Heure de début</div>
            <div class=\"value\">";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "heureEvent", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "heureEvent", [], "any", false, false, false, 40), "H:i"), "html", null, true)) : ("Non définie"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-chair\"></i> Places disponibles</div>
            <div class=\"value\">
                <span class=\"badge ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 45, $this->source); })()), "nbPlaces", [], "any", false, false, false, 45) > 10)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 45, $this->source); })()), "nbPlaces", [], "any", false, false, false, 45) > 0)) ? ("badge-warning") : ("badge-danger"))));
        yield "\" style=\"font-size:0.95rem;\">
                    ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 46, $this->source); })()), "nbPlaces", [], "any", false, false, false, 46), "html", null, true);
        yield " places restantes
                </span>
            </div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Catégorie</div>
            <div class=\"value\">";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "categorie", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 52, $this->source); })()), "categorie", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 52, $this->source); })()), "categorie", [], "any", false, false, false, 52), "html", null, true)) : ("Non classé"));
        yield "</div>
        </div>
    </div>

    <div style=\"margin-top:32px;text-align:center;\">
        ";
        // line 57
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 57, $this->source); })()), "statut", [], "any", false, false, false, 57) == "DISPONIBLE") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 57, $this->source); })()), "nbPlaces", [], "any", false, false, false, 57) > 0))) {
            // line 58
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_new", ["evenementId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-primary\" style=\"font-size:1rem;padding:14px 40px;\">
                <i class=\"fas fa-calendar-check\"></i> Réserver ma place — ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 59, $this->source); })()), "prix", [], "any", false, false, false, 59), 2, ",", " "), "html", null, true);
            yield " TND
            </a>
        ";
        } else {
            // line 62
            yield "            <div class=\"alert alert-warning\" style=\"display:inline-flex;\"><i class=\"fas fa-exclamation-triangle\"></i> Cet événement n'est plus disponible à la réservation.</div>
        ";
        }
        // line 64
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/evenement/show.html.twig";
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
        return array (  199 => 64,  195 => 62,  189 => 59,  184 => 58,  182 => 57,  174 => 52,  165 => 46,  161 => 45,  153 => 40,  146 => 36,  140 => 32,  134 => 29,  131 => 28,  129 => 27,  121 => 22,  112 => 18,  108 => 17,  104 => 16,  99 => 14,  88 => 6,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}{{ evenement.titre }}{% endblock %}

{% block content %}
<div style=\"margin-bottom:16px;\">
    <a href=\"{{ path('client_evenement_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Retour aux événements
    </a>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.8rem;font-weight:800;margin-bottom:10px;\">{{ evenement.titre }}</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> {{ evenement.lieu }}</span>
                <span class=\"badge badge-purple\">{{ evenement.categorie ?? 'Événement' }}</span>
                <span class=\"badge badge-{{ evenement.statutBadgeClass }}\">{{ evenement.statutLabel }}</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2.2rem;font-weight:800;color:var(--primary);\">{{ evenement.prix|number_format(2, ',', ' ') }} TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">par place</div>
        </div>
    </div>

    {% if evenement.description %}
    <div style=\"margin-bottom:28px;padding:20px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--primary);color:#475569;font-size:0.95rem;line-height:1.8;\">
        {{ evenement.description }}
    </div>
    {% endif %}

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date de l'événement</div>
            <div class=\"value\">{{ evenement.dateEvent ? evenement.dateEvent|date('l d F Y') : 'Non définie' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-clock\"></i> Heure de début</div>
            <div class=\"value\">{{ evenement.heureEvent ? evenement.heureEvent|date('H:i') : 'Non définie' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-chair\"></i> Places disponibles</div>
            <div class=\"value\">
                <span class=\"badge {{ evenement.nbPlaces > 10 ? 'badge-success' : (evenement.nbPlaces > 0 ? 'badge-warning' : 'badge-danger') }}\" style=\"font-size:0.95rem;\">
                    {{ evenement.nbPlaces }} places restantes
                </span>
            </div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Catégorie</div>
            <div class=\"value\">{{ evenement.categorie ?? 'Non classé' }}</div>
        </div>
    </div>

    <div style=\"margin-top:32px;text-align:center;\">
        {% if evenement.statut == 'DISPONIBLE' and evenement.nbPlaces > 0 %}
            <a href=\"{{ path('client_reservation_evenement_new', {evenementId: evenement.id}) }}\" class=\"btn btn-primary\" style=\"font-size:1rem;padding:14px 40px;\">
                <i class=\"fas fa-calendar-check\"></i> Réserver ma place — {{ evenement.prix|number_format(2, ',', ' ') }} TND
            </a>
        {% else %}
            <div class=\"alert alert-warning\" style=\"display:inline-flex;\"><i class=\"fas fa-exclamation-triangle\"></i> Cet événement n'est plus disponible à la réservation.</div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "client/evenement/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\evenement\\show.html.twig");
    }
}
