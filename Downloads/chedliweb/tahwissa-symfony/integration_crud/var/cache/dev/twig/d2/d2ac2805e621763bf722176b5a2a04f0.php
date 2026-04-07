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

/* admin/reclamation/show.html.twig */
class __TwigTemplate_4de118377c8cbc33a20c165bd38a8b82 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/show.html.twig"));

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

        yield "Admin - Réclamation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
        <h1><i class=\"fas fa-flag\" style=\"color:var(--danger);margin-right:10px;\"></i>Réclamation #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.6rem;font-weight:800;margin-bottom:8px;\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-info\">";
        // line 20
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["reclamation"] ?? null), "type", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true)) : ("Non classé"));
        yield "</span>
                <span class=\"badge badge-";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 21), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "statutLabel", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">Soumise le</div>
            <div style=\"font-size:1.1rem;font-weight:700;\">";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 26, $this->source); })()), "dateCreation", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 26, $this->source); })()), "dateCreation", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
    </div>

    <div style=\"margin-bottom:24px;padding:20px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--danger);\">
        <div style=\"font-size:0.8rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--text-muted);margin-bottom:8px;\">Description</div>
        <p style=\"color:#475569;font-size:0.95rem;line-height:1.7;\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["usersById"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 38, $this->source); })()), "idUser", [], "any", false, false, false, 38), [], "array", true, true, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersById"]) || array_key_exists("usersById", $context) ? $context["usersById"] : (function () { throw new RuntimeError('Variable "usersById" does not exist.', 38, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 38, $this->source); })()), "idUser", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("User #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 38, $this->source); })()), "idUser", [], "any", false, false, false, 38)), "html", null, true)));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Type</div>
            <div class=\"value\">";
        // line 42
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["reclamation"] ?? null), "type", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), "html", null, true)) : ("Non défini"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de création</div>
            <div class=\"value\">";
        // line 46
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 46, $this->source); })()), "dateCreation", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 46, $this->source); })()), "dateCreation", [], "any", false, false, false, 46), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-info-circle\"></i> Statut actuel</div>
            <div class=\"value\"><span class=\"badge badge-";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 50, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 50), "html", null, true);
        yield "\" style=\"font-size:0.9rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 50, $this->source); })()), "statutLabel", [], "any", false, false, false, 50), "html", null, true);
        yield "</span></div>
        </div>
    </div>

    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;gap:10px;flex-wrap:wrap;\">
        ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 55, $this->source); })()), "statut", [], "any", false, false, false, 55) == "EN_ATTENTE")) {
            // line 56
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "statut" => "EN_COURS"]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\"><i class=\"fas fa-play\"></i> Prendre en charge</a>
        ";
        }
        // line 58
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 58, $this->source); })()), "statut", [], "any", false, false, false, 58) == "EN_COURS")) {
            // line 59
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "statut" => "TRAITEE"]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-check\"></i> Marquer traitée</a>
            <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "statut" => "REJETEE"]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Rejeter</a>
        ";
        }
        // line 62
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
        return "admin/reclamation/show.html.twig";
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
        return array (  199 => 62,  194 => 60,  189 => 59,  186 => 58,  180 => 56,  178 => 55,  168 => 50,  161 => 46,  154 => 42,  147 => 38,  138 => 32,  129 => 26,  119 => 21,  115 => 20,  110 => 18,  100 => 11,  96 => 10,  90 => 7,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Réclamation #{{ reclamation.id }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-flag\" style=\"color:var(--danger);margin-right:10px;\"></i>Réclamation #{{ reclamation.id }}</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_reclamation_edit', {id: reclamation.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('admin_reclamation_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.6rem;font-weight:800;margin-bottom:8px;\">{{ reclamation.titre }}</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-info\">{{ reclamation.type ?? 'Non classé' }}</span>
                <span class=\"badge badge-{{ reclamation.statutBadgeClass }}\">{{ reclamation.statutLabel }}</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">Soumise le</div>
            <div style=\"font-size:1.1rem;font-weight:700;\">{{ reclamation.dateCreation ? reclamation.dateCreation|date('d/m/Y') : 'N/A' }}</div>
        </div>
    </div>

    <div style=\"margin-bottom:24px;padding:20px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--danger);\">
        <div style=\"font-size:0.8rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--text-muted);margin-bottom:8px;\">Description</div>
        <p style=\"color:#475569;font-size:0.95rem;line-height:1.7;\">{{ reclamation.description }}</p>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">{{ usersById[reclamation.idUser] is defined ? usersById[reclamation.idUser].nom : 'User #' ~ reclamation.idUser }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Type</div>
            <div class=\"value\">{{ reclamation.type ?? 'Non défini' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de création</div>
            <div class=\"value\">{{ reclamation.dateCreation ? reclamation.dateCreation|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-info-circle\"></i> Statut actuel</div>
            <div class=\"value\"><span class=\"badge badge-{{ reclamation.statutBadgeClass }}\" style=\"font-size:0.9rem;\">{{ reclamation.statutLabel }}</span></div>
        </div>
    </div>

    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;gap:10px;flex-wrap:wrap;\">
        {% if reclamation.statut == 'EN_ATTENTE' %}
            <a href=\"{{ path('admin_reclamation_status', {id: reclamation.id, statut: 'EN_COURS'}) }}\" class=\"btn btn-info btn-sm\"><i class=\"fas fa-play\"></i> Prendre en charge</a>
        {% endif %}
        {% if reclamation.statut == 'EN_COURS' %}
            <a href=\"{{ path('admin_reclamation_status', {id: reclamation.id, statut: 'TRAITEE'}) }}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-check\"></i> Marquer traitée</a>
            <a href=\"{{ path('admin_reclamation_status', {id: reclamation.id, statut: 'REJETEE'}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Rejeter</a>
        {% endif %}
    </div>
</div>
{% endblock %}
", "admin/reclamation/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reclamation\\show.html.twig");
    }
}
