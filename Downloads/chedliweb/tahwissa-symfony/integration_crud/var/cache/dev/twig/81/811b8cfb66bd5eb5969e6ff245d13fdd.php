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

/* agent/evenement/index.html.twig */
class __TwigTemplate_dc786998741ddf7b7ba88bc598ec6ec1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/evenement/index.html.twig"));

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

        yield "Agent - Événements";
        
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
        <h1><i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Événements</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les événements</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
        </form>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvel Événement</a>
    </div>
</div>

<div class=\"dashboard-card\">
    ";
        // line 20
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucun événement trouvé</h3>
            <p>Créez un premier événement.</p>
            <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_new");
            yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Créer</a>
        </div>
    ";
        } else {
            // line 28
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Lieu</th>
                    <th>Date & Heure</th>
                    <th>Prix</th>
                    <th>Places</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                // line 43
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:600;\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);margin-right:4px;\"></i>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "lieu", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                    <td style=\"font-size:0.82rem;\">
                        ";
                // line 48
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateEvent", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateEvent", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true)) : ("-"));
                yield "<br>
                        <span style=\"color:var(--text-muted);\">";
                // line 49
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "heureEvent", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "heureEvent", [], "any", false, false, false, 49), "H:i"), "html", null, true)) : ("-"));
                yield "</span>
                    </td>
                    <td style=\"font-weight:700;\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "prix", [], "any", false, false, false, 51), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td><span class=\"badge ";
                // line 52
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 52) > 10)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 52) > 0)) ? ("badge-warning") : ("badge-danger"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 52), "html", null, true);
                yield "</span></td>
                    <td><span class=\"badge badge-";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutBadgeClass", [], "any", false, false, false, 53), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutLabel", [], "any", false, false, false, 53), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "            </tbody>
        </table>
    ";
        }
        // line 63
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
        return "agent/evenement/index.html.twig";
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
        return array (  206 => 63,  201 => 60,  191 => 56,  187 => 55,  180 => 53,  174 => 52,  170 => 51,  165 => 49,  161 => 48,  156 => 46,  152 => 45,  148 => 44,  145 => 43,  141 => 42,  125 => 28,  119 => 25,  113 => 21,  111 => 20,  103 => 15,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Événements{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Événements</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les événements</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('agent_evenement_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
        </form>
        <a href=\"{{ path('agent_evenement_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvel Événement</a>
    </div>
</div>

<div class=\"dashboard-card\">
    {% if evenements is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucun événement trouvé</h3>
            <p>Créez un premier événement.</p>
            <a href=\"{{ path('agent_evenement_new') }}\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Créer</a>
        </div>
    {% else %}
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Lieu</th>
                    <th>Date & Heure</th>
                    <th>Prix</th>
                    <th>Places</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for ev in evenements %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ ev.id }}</td>
                    <td style=\"font-weight:600;\">{{ ev.titre }}</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);margin-right:4px;\"></i>{{ ev.lieu }}</td>
                    <td style=\"font-size:0.82rem;\">
                        {{ ev.dateEvent ? ev.dateEvent|date('d/m/Y') : '-' }}<br>
                        <span style=\"color:var(--text-muted);\">{{ ev.heureEvent ? ev.heureEvent|date('H:i') : '-' }}</span>
                    </td>
                    <td style=\"font-weight:700;\">{{ ev.prix|number_format(2, ',', ' ') }} TND</td>
                    <td><span class=\"badge {{ ev.nbPlaces > 10 ? 'badge-success' : (ev.nbPlaces > 0 ? 'badge-warning' : 'badge-danger') }}\">{{ ev.nbPlaces }}</span></td>
                    <td><span class=\"badge badge-{{ ev.statutBadgeClass }}\">{{ ev.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('agent_evenement_show', {id: ev.id}) }}\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('agent_evenement_edit', {id: ev.id}) }}\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "agent/evenement/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\evenement\\index.html.twig");
    }
}
