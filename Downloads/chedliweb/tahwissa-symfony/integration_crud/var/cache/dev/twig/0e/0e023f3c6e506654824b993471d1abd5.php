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

/* admin/reclamation/index.html.twig */
class __TwigTemplate_71ab36e0867222ec8c60cac21e41f12e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/index.html.twig"));

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

        yield "Admin - Réclamations";
        
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
        <h1><i class=\"fas fa-flag\" style=\"color:var(--danger);margin-right:10px;\"></i>Réclamations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer toutes les réclamations des clients</p>
    </div>
</div>

<div class=\"filter-bar\">
    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 13, $this->source); })()) == "")) ? ("active") : (""));
        yield "\">Toutes</a>
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index", ["statut" => "EN_ATTENTE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 14, $this->source); })()) == "EN_ATTENTE")) ? ("active") : (""));
        yield "\">🕐 En attente</a>
    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index", ["statut" => "EN_COURS"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 15, $this->source); })()) == "EN_COURS")) ? ("active") : (""));
        yield "\">🔄 En cours</a>
    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index", ["statut" => "TRAITEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 16, $this->source); })()) == "TRAITEE")) ? ("active") : (""));
        yield "\">✅ Traitées</a>
    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index", ["statut" => "REJETEE"]);
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 17, $this->source); })()) == "REJETEE")) ? ("active") : (""));
        yield "\">❌ Rejetées</a>
</div>

<div class=\"dashboard-card\">
    ";
        // line 21
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-flag\"></i>
            <h3>Aucune réclamation trouvée</h3>
            <p>Aucune réclamation ne correspond à ce filtre.</p>
        </div>
    ";
        } else {
            // line 28
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Utilisateur</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
                // line 42
                yield "                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:600;\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                    <td><span class=\"badge badge-info\">";
                // line 45
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "type", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "type", [], "any", false, false, false, 45)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "type", [], "any", false, false, false, 45), "html", null, true)) : ("N/A"));
                yield "</span></td>
                    <td>";
                // line 46
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["usersById"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idUser", [], "any", false, false, false, 46), [], "array", true, true, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersById"]) || array_key_exists("usersById", $context) ? $context["usersById"] : (function () { throw new RuntimeError('Variable "usersById" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idUser", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("User #" . CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idUser", [], "any", false, false, false, 46)), "html", null, true)));
                yield "</td>
                    <td style=\"font-size:0.82rem;\">";
                // line 47
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateCreation", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateCreation", [], "any", false, false, false, 47), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</td>
                    <td><span class=\"badge badge-";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statutBadgeClass", [], "any", false, false, false, 48), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statutLabel", [], "any", false, false, false, 48), "html", null, true);
                yield "</span></td>
                    <td>
                        <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 52) == "EN_ATTENTE")) {
                    // line 53
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 53), "statut" => "EN_COURS"]), "html", null, true);
                    yield "\" class=\"action-btn confirm\" title=\"Prendre en charge\"><i class=\"fas fa-play\"></i></a>
                        ";
                }
                // line 55
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 55) == "EN_COURS")) {
                    // line 56
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 56), "statut" => "TRAITEE"]), "html", null, true);
                    yield "\" class=\"action-btn confirm\" title=\"Marquer traitée\"><i class=\"fas fa-check\"></i></a>
                        ";
                }
                // line 58
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette réclamation ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 59))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                        </form>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "            </tbody>
        </table>
    ";
        }
        // line 68
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
        return "admin/reclamation/index.html.twig";
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
        return array (  234 => 68,  229 => 65,  217 => 59,  212 => 58,  206 => 56,  203 => 55,  197 => 53,  195 => 52,  191 => 51,  187 => 50,  180 => 48,  176 => 47,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  157 => 42,  153 => 41,  138 => 28,  130 => 22,  128 => 21,  119 => 17,  113 => 16,  107 => 15,  101 => 14,  95 => 13,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Réclamations{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-flag\" style=\"color:var(--danger);margin-right:10px;\"></i>Réclamations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer toutes les réclamations des clients</p>
    </div>
</div>

<div class=\"filter-bar\">
    <a href=\"{{ path('admin_reclamation_index') }}\" class=\"filter-btn {{ currentStatut == '' ? 'active' : '' }}\">Toutes</a>
    <a href=\"{{ path('admin_reclamation_index', {statut: 'EN_ATTENTE'}) }}\" class=\"filter-btn {{ currentStatut == 'EN_ATTENTE' ? 'active' : '' }}\">🕐 En attente</a>
    <a href=\"{{ path('admin_reclamation_index', {statut: 'EN_COURS'}) }}\" class=\"filter-btn {{ currentStatut == 'EN_COURS' ? 'active' : '' }}\">🔄 En cours</a>
    <a href=\"{{ path('admin_reclamation_index', {statut: 'TRAITEE'}) }}\" class=\"filter-btn {{ currentStatut == 'TRAITEE' ? 'active' : '' }}\">✅ Traitées</a>
    <a href=\"{{ path('admin_reclamation_index', {statut: 'REJETEE'}) }}\" class=\"filter-btn {{ currentStatut == 'REJETEE' ? 'active' : '' }}\">❌ Rejetées</a>
</div>

<div class=\"dashboard-card\">
    {% if reclamations is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-flag\"></i>
            <h3>Aucune réclamation trouvée</h3>
            <p>Aucune réclamation ne correspond à ce filtre.</p>
        </div>
    {% else %}
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Utilisateur</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for rec in reclamations %}
                <tr>
                    <td style=\"font-weight:600;color:var(--text-muted);\">#{{ rec.id }}</td>
                    <td style=\"font-weight:600;\">{{ rec.titre }}</td>
                    <td><span class=\"badge badge-info\">{{ rec.type ?? 'N/A' }}</span></td>
                    <td>{{ usersById[rec.idUser] is defined ? usersById[rec.idUser].nom : 'User #' ~ rec.idUser }}</td>
                    <td style=\"font-size:0.82rem;\">{{ rec.dateCreation ? rec.dateCreation|date('d/m/Y H:i') : '-' }}</td>
                    <td><span class=\"badge badge-{{ rec.statutBadgeClass }}\">{{ rec.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('admin_reclamation_show', {id: rec.id}) }}\" class=\"action-btn view\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('admin_reclamation_edit', {id: rec.id}) }}\" class=\"action-btn edit\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                        {% if rec.statut == 'EN_ATTENTE' %}
                            <a href=\"{{ path('admin_reclamation_status', {id: rec.id, statut: 'EN_COURS'}) }}\" class=\"action-btn confirm\" title=\"Prendre en charge\"><i class=\"fas fa-play\"></i></a>
                        {% endif %}
                        {% if rec.statut == 'EN_COURS' %}
                            <a href=\"{{ path('admin_reclamation_status', {id: rec.id, statut: 'TRAITEE'}) }}\" class=\"action-btn confirm\" title=\"Marquer traitée\"><i class=\"fas fa-check\"></i></a>
                        {% endif %}
                        <form method=\"post\" action=\"{{ path('admin_reclamation_delete', {id: rec.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette réclamation ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rec.id) }}\">
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
", "admin/reclamation/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reclamation\\index.html.twig");
    }
}
