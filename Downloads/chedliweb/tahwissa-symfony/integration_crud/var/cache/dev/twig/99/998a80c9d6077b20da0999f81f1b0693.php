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

/* admin/evenement/index.html.twig */
class __TwigTemplate_055711b9991537493d712ac1334b4176 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/index.html.twig"));

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

        yield "Admin - Événements";
        
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
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer tous les événements disponibles</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
        </form>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvel Événement</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-calendar-alt\"></i></div><div class=\"stat-info\"><h3>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 20, $this->source); })())), "html", null, true);
        yield "</h3><p>Total Événements</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 21, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 21, $this->source); })()), "statut", [], "any", false, false, false, 21) == "DISPONIBLE"); })), "html", null, true);
        yield "</h3><p>Disponibles</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-users\"></i></div><div class=\"stat-info\"><h3>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 22, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 22, $this->source); })()), "statut", [], "any", false, false, false, 22) == "COMPLET"); })), "html", null, true);
        yield "</h3><p>Complets</p></div></div>
    <div class=\"stat-card red\"><div class=\"stat-icon\"><i class=\"fas fa-ban\"></i></div><div class=\"stat-info\"><h3>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 23, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 23, $this->source); })()), "statut", [], "any", false, false, false, 23) == "ANNULE"); })), "html", null, true);
        yield "</h3><p>Annulés</p></div></div>
</div>

<div class=\"dashboard-card\">
    ";
        // line 27
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucun événement trouvé</h3>
            <p>Commencez par créer un nouvel événement.</p>
            <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_new");
            yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Créer</a>
        </div>
    ";
        } else {
            // line 35
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Lieu</th>
                    <th>Date & Heure</th>
                    <th>Prix</th>
                    <th>Places</th>
                    <th>Catégorie</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                // line 51
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:600;\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);margin-right:4px;\"></i>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "lieu", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                    <td style=\"font-size:0.82rem;\">
                        ";
                // line 56
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateEvent", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateEvent", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true)) : ("-"));
                yield "<br>
                        <span style=\"color:var(--text-muted);\">";
                // line 57
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "heureEvent", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "heureEvent", [], "any", false, false, false, 57), "H:i"), "html", null, true)) : ("-"));
                yield "</span>
                    </td>
                    <td style=\"font-weight:700;\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "prix", [], "any", false, false, false, 59), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td><span class=\"badge ";
                // line 60
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 60) > 10)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 60) > 0)) ? ("badge-warning") : ("badge-danger"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "nbPlaces", [], "any", false, false, false, 60), "html", null, true);
                yield "</span></td>
                    <td><span class=\"badge badge-primary\">";
                // line 61
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 61), "html", null, true)) : ("N/A"));
                yield "</span></td>
                    <td><span class=\"badge badge-";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutBadgeClass", [], "any", false, false, false, 62), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "statutLabel", [], "any", false, false, false, 62), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        <form method=\"post\" action=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cet événement ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 67))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                        </form>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "            </tbody>
        </table>
    ";
        }
        // line 76
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
        return "admin/evenement/index.html.twig";
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
        return array (  240 => 76,  235 => 73,  223 => 67,  219 => 66,  215 => 65,  211 => 64,  204 => 62,  200 => 61,  194 => 60,  190 => 59,  185 => 57,  181 => 56,  176 => 54,  172 => 53,  168 => 52,  165 => 51,  161 => 50,  144 => 35,  138 => 32,  132 => 28,  130 => 27,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 15,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Événements{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-alt\" style=\"color:var(--primary);margin-right:10px;\"></i>Événements</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer tous les événements disponibles</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('admin_evenement_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
        </form>
        <a href=\"{{ path('admin_evenement_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvel Événement</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-calendar-alt\"></i></div><div class=\"stat-info\"><h3>{{ evenements|length }}</h3><p>Total Événements</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>{{ evenements|filter(e => e.statut == 'DISPONIBLE')|length }}</h3><p>Disponibles</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-users\"></i></div><div class=\"stat-info\"><h3>{{ evenements|filter(e => e.statut == 'COMPLET')|length }}</h3><p>Complets</p></div></div>
    <div class=\"stat-card red\"><div class=\"stat-icon\"><i class=\"fas fa-ban\"></i></div><div class=\"stat-info\"><h3>{{ evenements|filter(e => e.statut == 'ANNULE')|length }}</h3><p>Annulés</p></div></div>
</div>

<div class=\"dashboard-card\">
    {% if evenements is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucun événement trouvé</h3>
            <p>Commencez par créer un nouvel événement.</p>
            <a href=\"{{ path('admin_evenement_new') }}\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Créer</a>
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
                    <th>Catégorie</th>
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
                    <td><span class=\"badge badge-primary\">{{ ev.categorie ?? 'N/A' }}</span></td>
                    <td><span class=\"badge badge-{{ ev.statutBadgeClass }}\">{{ ev.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('admin_evenement_show', {id: ev.id}) }}\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('admin_evenement_edit', {id: ev.id}) }}\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        <form method=\"post\" action=\"{{ path('admin_evenement_delete', {id: ev.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cet événement ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ ev.id) }}\">
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
", "admin/evenement/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\evenement\\index.html.twig");
    }
}
