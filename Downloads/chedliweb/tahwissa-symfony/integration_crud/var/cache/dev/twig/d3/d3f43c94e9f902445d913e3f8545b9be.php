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

/* admin/voyage/index.html.twig */
class __TwigTemplate_69b9bde77f8d22a51c6c17a7896a19d0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/voyage/index.html.twig"));

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

        yield "Admin - Voyages";
        
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
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer tous les voyages disponibles</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
        </form>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouveau Voyage</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-globe\"></i></div><div class=\"stat-info\"><h3>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "total", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3><p>Total Voyages</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "actifs", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3><p>Actifs</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-chair\"></i></div><div class=\"stat-info\"><h3>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 22, $this->source); })()), "places", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3><p>Places Dispo</p></div></div>
    <div class=\"stat-card purple\"><div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div><div class=\"stat-info\"><h3>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "prixMoyen", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3><p>Prix Moyen (TND)</p></div></div>
</div>

<div class=\"dashboard-card\">
    ";
        // line 27
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-plane-slash\"></i>
            <h3>Aucun voyage trouvé</h3>
            <p>Commencez par créer un nouveau voyage.</p>
            <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_new");
            yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Créer</a>
        </div>
    ";
        } else {
            // line 35
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Destination</th>
                    <th>Prix</th>
                    <th>Dates</th>
                    <th>Places</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
                // line 51
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                    <td>
                        ";
                // line 54
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "imageUrl", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "imageUrl", [], "any", false, false, false, 55), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "titre", [], "any", false, false, false, 55), "html", null, true);
                    yield "\" style=\"width:80px;height:50px;object-fit:cover;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.15);\">
                        ";
                } else {
                    // line 57
                    yield "                            <div style=\"width:80px;height:50px;background:linear-gradient(135deg,var(--primary),var(--secondary));border-radius:8px;display:flex;align-items:center;justify-content:center;color:white;font-size:1.2rem;\"><i class=\"fas fa-image\"></i></div>
                        ";
                }
                // line 59
                yield "                    </td>
                    <td style=\"font-weight:600;\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "titre", [], "any", false, false, false, 60), "html", null, true);
                yield "</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);margin-right:4px;\"></i>";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
                    <td><span class=\"badge badge-primary\">";
                // line 62
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "categorie", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "categorie", [], "any", false, false, false, 62)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "categorie", [], "any", false, false, false, 62), "html", null, true)) : ("N/A"));
                yield "</span></td>
                    <td style=\"font-weight:700;\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "prixUnitaire", [], "any", false, false, false, 63), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td style=\"font-size:0.82rem;\">";
                // line 64
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateDepart", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateDepart", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true)) : ("-"));
                yield "<br>→ ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateRetour", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateRetour", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                    <td><span class=\"badge ";
                // line 65
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "placesDisponibles", [], "any", false, false, false, 65) > 5)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "placesDisponibles", [], "any", false, false, false, 65) > 0)) ? ("badge-warning") : ("badge-danger"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "placesDisponibles", [], "any", false, false, false, 65), "html", null, true);
                yield "</span></td>
                    <td><span class=\"badge ";
                // line 66
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "statut", [], "any", false, false, false, 66) == "ACTIF")) ? ("badge-success") : ("badge-danger"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "statut", [], "any", false, false, false, 66), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        <form method=\"post\" action=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce voyage ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 71))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                        </form>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['voyage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "            </tbody>
        </table>
    ";
        }
        // line 80
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
        return "admin/voyage/index.html.twig";
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
        return array (  254 => 80,  249 => 77,  237 => 71,  233 => 70,  229 => 69,  225 => 68,  218 => 66,  212 => 65,  206 => 64,  202 => 63,  198 => 62,  194 => 61,  190 => 60,  187 => 59,  183 => 57,  175 => 55,  173 => 54,  168 => 52,  165 => 51,  161 => 50,  144 => 35,  138 => 32,  132 => 28,  130 => 27,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 15,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Voyages{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>Voyages</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer tous les voyages disponibles</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('admin_voyage_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
        </form>
        <a href=\"{{ path('admin_voyage_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouveau Voyage</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\"><div class=\"stat-icon\"><i class=\"fas fa-globe\"></i></div><div class=\"stat-info\"><h3>{{ stats.total }}</h3><p>Total Voyages</p></div></div>
    <div class=\"stat-card green\"><div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div><div class=\"stat-info\"><h3>{{ stats.actifs }}</h3><p>Actifs</p></div></div>
    <div class=\"stat-card orange\"><div class=\"stat-icon\"><i class=\"fas fa-chair\"></i></div><div class=\"stat-info\"><h3>{{ stats.places }}</h3><p>Places Dispo</p></div></div>
    <div class=\"stat-card purple\"><div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div><div class=\"stat-info\"><h3>{{ stats.prixMoyen }}</h3><p>Prix Moyen (TND)</p></div></div>
</div>

<div class=\"dashboard-card\">
    {% if voyages is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-plane-slash\"></i>
            <h3>Aucun voyage trouvé</h3>
            <p>Commencez par créer un nouveau voyage.</p>
            <a href=\"{{ path('admin_voyage_new') }}\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Créer</a>
        </div>
    {% else %}
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Destination</th>
                    <th>Prix</th>
                    <th>Dates</th>
                    <th>Places</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for voyage in voyages %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ voyage.id }}</td>
                    <td>
                        {% if voyage.imageUrl %}
                            <img src=\"{{ voyage.imageUrl }}\" alt=\"{{ voyage.titre }}\" style=\"width:80px;height:50px;object-fit:cover;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.15);\">
                        {% else %}
                            <div style=\"width:80px;height:50px;background:linear-gradient(135deg,var(--primary),var(--secondary));border-radius:8px;display:flex;align-items:center;justify-content:center;color:white;font-size:1.2rem;\"><i class=\"fas fa-image\"></i></div>
                        {% endif %}
                    </td>
                    <td style=\"font-weight:600;\">{{ voyage.titre }}</td>
                    <td><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);margin-right:4px;\"></i>{{ voyage.destination }}</td>
                    <td><span class=\"badge badge-primary\">{{ voyage.categorie ?? 'N/A' }}</span></td>
                    <td style=\"font-weight:700;\">{{ voyage.prixUnitaire|number_format(2, ',', ' ') }} TND</td>
                    <td style=\"font-size:0.82rem;\">{{ voyage.dateDepart ? voyage.dateDepart|date('d/m/Y') : '-' }}<br>→ {{ voyage.dateRetour ? voyage.dateRetour|date('d/m/Y') : '-' }}</td>
                    <td><span class=\"badge {{ voyage.placesDisponibles > 5 ? 'badge-success' : (voyage.placesDisponibles > 0 ? 'badge-warning' : 'badge-danger') }}\">{{ voyage.placesDisponibles }}</span></td>
                    <td><span class=\"badge {{ voyage.statut == 'ACTIF' ? 'badge-success' : 'badge-danger' }}\">{{ voyage.statut }}</span></td>
                    <td>
                        <a href=\"{{ path('admin_voyage_show', {id: voyage.id}) }}\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('admin_voyage_edit', {id: voyage.id}) }}\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        <form method=\"post\" action=\"{{ path('admin_voyage_delete', {id: voyage.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce voyage ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ voyage.id) }}\">
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
", "admin/voyage/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\voyage\\index.html.twig");
    }
}
