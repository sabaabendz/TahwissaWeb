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

/* agent/evenement/show.html.twig */
class __TwigTemplate_e0fd8a77d8f97175b6d0149dcce11193 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/evenement/show.html.twig"));

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

        yield "Agent - ";
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
        yield "<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Détail Événement</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.6rem;font-weight:800;margin-bottom:8px;\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
                <span class=\"badge badge-purple\">";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "categorie", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21), "html", null, true)) : ("Non classé"));
        yield "</span>
                <span class=\"badge badge-";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 22), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "statutLabel", [], "any", false, false, false, 22), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "prix", [], "any", false, false, false, 26), 2, ",", " "), "html", null, true);
        yield " TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">par place</div>
        </div>
    </div>

    ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "    <div style=\"margin-bottom:24px;padding:16px;background:#f8fafc;border-radius:var(--radius-sm);color:#475569;font-size:0.92rem;line-height:1.7;\">
        ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
            yield "
    </div>
    ";
        }
        // line 36
        yield "
    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date</div>
            <div class=\"value\">";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "dateEvent", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "dateEvent", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-clock\"></i> Heure</div>
            <div class=\"value\">";
        // line 44
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 44, $this->source); })()), "heureEvent", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 44, $this->source); })()), "heureEvent", [], "any", false, false, false, 44), "H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-chair\"></i> Places disponibles</div>
            <div class=\"value\">
                <span class=\"badge ";
        // line 49
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "nbPlaces", [], "any", false, false, false, 49) > 10)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "nbPlaces", [], "any", false, false, false, 49) > 0)) ? ("badge-warning") : ("badge-danger"))));
        yield "\" style=\"font-size:0.9rem;\">
                    ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 50, $this->source); })()), "nbPlaces", [], "any", false, false, false, 50), "html", null, true);
        yield " places
                </span>
            </div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Catégorie</div>
            <div class=\"value\">";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "categorie", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 56, $this->source); })()), "categorie", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 56, $this->source); })()), "categorie", [], "any", false, false, false, 56), "html", null, true)) : ("Non définie"));
        yield "</div>
        </div>
    </div>
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
        return "agent/evenement/show.html.twig";
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
        return array (  182 => 56,  173 => 50,  169 => 49,  161 => 44,  154 => 40,  148 => 36,  142 => 33,  139 => 32,  137 => 31,  129 => 26,  120 => 22,  116 => 21,  112 => 20,  107 => 18,  97 => 11,  93 => 10,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - {{ evenement.titre }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Détail Événement</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('agent_evenement_edit', {id: evenement.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('agent_evenement_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.6rem;font-weight:800;margin-bottom:8px;\">{{ evenement.titre }}</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> {{ evenement.lieu }}</span>
                <span class=\"badge badge-purple\">{{ evenement.categorie ?? 'Non classé' }}</span>
                <span class=\"badge badge-{{ evenement.statutBadgeClass }}\">{{ evenement.statutLabel }}</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">{{ evenement.prix|number_format(2, ',', ' ') }} TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">par place</div>
        </div>
    </div>

    {% if evenement.description %}
    <div style=\"margin-bottom:24px;padding:16px;background:#f8fafc;border-radius:var(--radius-sm);color:#475569;font-size:0.92rem;line-height:1.7;\">
        {{ evenement.description }}
    </div>
    {% endif %}

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date</div>
            <div class=\"value\">{{ evenement.dateEvent ? evenement.dateEvent|date('d/m/Y') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-clock\"></i> Heure</div>
            <div class=\"value\">{{ evenement.heureEvent ? evenement.heureEvent|date('H:i') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-chair\"></i> Places disponibles</div>
            <div class=\"value\">
                <span class=\"badge {{ evenement.nbPlaces > 10 ? 'badge-success' : (evenement.nbPlaces > 0 ? 'badge-warning' : 'badge-danger') }}\" style=\"font-size:0.9rem;\">
                    {{ evenement.nbPlaces }} places
                </span>
            </div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Catégorie</div>
            <div class=\"value\">{{ evenement.categorie ?? 'Non définie' }}</div>
        </div>
    </div>
</div>
{% endblock %}
", "agent/evenement/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\evenement\\show.html.twig");
    }
}
