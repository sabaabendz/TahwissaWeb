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

/* admin/user/index.html.twig */
class __TwigTemplate_5f409cc2efa7a65ed5f13167c0a005e8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

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

        yield "Admin - Utilisateurs";
        
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
        <h1><i class=\"fas fa-users\" style=\"color:var(--secondary);margin-right:10px;\"></i>Gestion des Utilisateurs</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les comptes utilisateurs, agents et administrateurs</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 14
        if ((($tmp = (isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"role\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 15
        yield "        </form>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-user-plus\"></i> Nouvel Utilisateur</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(3,1fr);\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon\"><i class=\"fas fa-users\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "total", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3><p>Total Utilisateurs</p></div>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon\"><i class=\"fas fa-user-check\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "active", [], "any", false, false, false, 27), "html", null, true);
        yield "</h3><p>Actifs</p></div>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon\"><i class=\"fas fa-envelope-check\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "verified", [], "any", false, false, false, 31), "html", null, true);
        yield "</h3><p>Vérifiés</p></div>
    </div>
</div>

";
        // line 36
        yield "<div class=\"filter-bar\" style=\"display:flex;gap:8px;margin-bottom:20px;flex-wrap:wrap;\">
    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"filter-btn ";
        yield ((((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 37, $this->source); })()) == "")) ? ("active") : (""));
        yield "\" style=\"padding:8px 18px;border-radius:50px;text-decoration:none;font-size:0.85rem;font-weight:600;transition:all 0.3s;";
        if (((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 37, $this->source); })()) == "")) {
            yield "background:linear-gradient(135deg, var(--primary), var(--secondary));color:white;";
        } else {
            yield "background:white;color:var(--text-dark);border:1px solid #e2e8f0;";
        }
        yield "\">Tous</a>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 39
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["role" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"filter-btn ";
            yield ((((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 39, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 39))) ? ("active") : (""));
            yield "\" style=\"padding:8px 18px;border-radius:50px;text-decoration:none;font-size:0.85rem;font-weight:600;transition:all 0.3s;";
            if (((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 39, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 39))) {
                yield "background:linear-gradient(135deg, var(--primary), var(--secondary));color:white;";
            } else {
                yield "background:white;color:var(--text-dark);border:1px solid #e2e8f0;";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "</div>

<div class=\"dashboard-card\">
    ";
        // line 44
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "        <div class=\"empty-state\" style=\"text-align:center;padding:60px;color:var(--text-muted);\">
            <i class=\"fas fa-user-slash\" style=\"font-size:3rem;margin-bottom:16px;opacity:0.3;\"></i>
            <p>Aucun utilisateur trouvé</p>
        </div>
    ";
        } else {
            // line 50
            yield "        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th><th>Nom</th><th>Email</th><th>Rôle</th><th>Statut</th><th>Créé le</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 58
                yield "                <tr>
                    <td>#";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
                    <td>
                        <div style=\"display:flex;align-items:center;gap:10px;\">
                            <div style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:0.85rem;\">
                                ";
                // line 63
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "firstName", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "firstName", [], "any", false, false, false, 63))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 63))), "html", null, true)));
                yield "
                            </div>
                            <div>
                                <div style=\"font-weight:600;\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "name", [], "any", false, false, false, 66), "html", null, true);
                yield "</div>
                                ";
                // line 67
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "phone", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<div style=\"font-size:0.75rem;color:var(--text-muted);\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "phone", [], "any", false, false, false, 67), "html", null, true);
                    yield "</div>";
                }
                // line 68
                yield "                            </div>
                        </div>
                    </td>
                    <td style=\"color:var(--text-muted);font-size:0.85rem;\">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 71), "html", null, true);
                yield "</td>
                    <td>
                        ";
                // line 73
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 74
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74) == "ADMIN")) {
                        // line 75
                        yield "                                <span class=\"badge badge-danger\">👑 Admin</span>
                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 76
$context["u"], "role", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76) == "AGENT")) {
                        // line 77
                        yield "                                <span class=\"badge badge-primary\">🛡️ Agent</span>
                            ";
                    } else {
                        // line 79
                        yield "                                <span class=\"badge badge-info\">👤 User</span>
                            ";
                    }
                    // line 81
                    yield "                        ";
                } else {
                    // line 82
                    yield "                            <span class=\"badge\" style=\"background:#f1f5f9;color:#94a3b8;\">Non défini</span>
                        ";
                }
                // line 84
                yield "                    </td>
                    <td>
                        ";
                // line 86
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "isActive", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 87
                    yield "                            <span class=\"badge badge-success\">✅ Actif</span>
                        ";
                } else {
                    // line 89
                    yield "                            <span class=\"badge badge-danger\">🚫 Inactif</span>
                        ";
                }
                // line 91
                yield "                    </td>
                    <td style=\"font-size:0.85rem;color:var(--text-muted);\">";
                // line 92
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "createdAt", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "createdAt", [], "any", false, false, false, 92), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                    <td>
                        <div style=\"display:flex;gap:6px;align-items:center;\">
                            <a href=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-xs\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                            <a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_toggle_active", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"btn ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "isActive", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-success"));
                yield " btn-xs\" title=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "isActive", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                <i class=\"fas fa-";
                // line 98
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "isActive", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ban") : ("check"));
                yield "\"></i>
                            </a>
                            <form method=\"post\" action=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 101))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "            </tbody>
        </table>
    ";
        }
        // line 111
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
        return "admin/user/index.html.twig";
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
        return array (  334 => 111,  329 => 108,  316 => 101,  312 => 100,  307 => 98,  299 => 97,  295 => 96,  291 => 95,  285 => 92,  282 => 91,  278 => 89,  274 => 87,  272 => 86,  268 => 84,  264 => 82,  261 => 81,  257 => 79,  253 => 77,  251 => 76,  248 => 75,  245 => 74,  243 => 73,  238 => 71,  233 => 68,  227 => 67,  223 => 66,  217 => 63,  210 => 59,  207 => 58,  203 => 57,  194 => 50,  187 => 45,  185 => 44,  180 => 41,  161 => 39,  157 => 38,  145 => 37,  142 => 36,  135 => 31,  128 => 27,  121 => 23,  111 => 16,  108 => 15,  102 => 14,  98 => 13,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Utilisateurs{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-users\" style=\"color:var(--secondary);margin-right:10px;\"></i>Gestion des Utilisateurs</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Gérer les comptes utilisateurs, agents et administrateurs</p>
    </div>
    <div class=\"top-bar-right\">
        <form method=\"get\" action=\"{{ path('admin_user_index') }}\" class=\"search-box\">
            <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
            {% if currentRole %}<input type=\"hidden\" name=\"role\" value=\"{{ currentRole }}\">{% endif %}
        </form>
        <a href=\"{{ path('admin_user_new') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-user-plus\"></i> Nouvel Utilisateur</a>
    </div>
</div>

<div class=\"stats-grid\" style=\"grid-template-columns:repeat(3,1fr);\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon\"><i class=\"fas fa-users\"></i></div>
        <div class=\"stat-info\"><h3>{{ stats.total }}</h3><p>Total Utilisateurs</p></div>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon\"><i class=\"fas fa-user-check\"></i></div>
        <div class=\"stat-info\"><h3>{{ stats.active }}</h3><p>Actifs</p></div>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon\"><i class=\"fas fa-envelope-check\"></i></div>
        <div class=\"stat-info\"><h3>{{ stats.verified }}</h3><p>Vérifiés</p></div>
    </div>
</div>

{# Role filter bar #}
<div class=\"filter-bar\" style=\"display:flex;gap:8px;margin-bottom:20px;flex-wrap:wrap;\">
    <a href=\"{{ path('admin_user_index') }}\" class=\"filter-btn {{ currentRole == '' ? 'active' : '' }}\" style=\"padding:8px 18px;border-radius:50px;text-decoration:none;font-size:0.85rem;font-weight:600;transition:all 0.3s;{% if currentRole == '' %}background:linear-gradient(135deg, var(--primary), var(--secondary));color:white;{% else %}background:white;color:var(--text-dark);border:1px solid #e2e8f0;{% endif %}\">Tous</a>
    {% for role in roles %}
    <a href=\"{{ path('admin_user_index', {role: role.name}) }}\" class=\"filter-btn {{ currentRole == role.name ? 'active' : '' }}\" style=\"padding:8px 18px;border-radius:50px;text-decoration:none;font-size:0.85rem;font-weight:600;transition:all 0.3s;{% if currentRole == role.name %}background:linear-gradient(135deg, var(--primary), var(--secondary));color:white;{% else %}background:white;color:var(--text-dark);border:1px solid #e2e8f0;{% endif %}\">{{ role.name }}</a>
    {% endfor %}
</div>

<div class=\"dashboard-card\">
    {% if users is empty %}
        <div class=\"empty-state\" style=\"text-align:center;padding:60px;color:var(--text-muted);\">
            <i class=\"fas fa-user-slash\" style=\"font-size:3rem;margin-bottom:16px;opacity:0.3;\"></i>
            <p>Aucun utilisateur trouvé</p>
        </div>
    {% else %}
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th><th>Nom</th><th>Email</th><th>Rôle</th><th>Statut</th><th>Créé le</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for u in users %}
                <tr>
                    <td>#{{ u.id }}</td>
                    <td>
                        <div style=\"display:flex;align-items:center;gap:10px;\">
                            <div style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:0.85rem;\">
                                {{ u.firstName ? u.firstName|first|upper : u.email|first|upper }}
                            </div>
                            <div>
                                <div style=\"font-weight:600;\">{{ u.name }}</div>
                                {% if u.phone %}<div style=\"font-size:0.75rem;color:var(--text-muted);\">{{ u.phone }}</div>{% endif %}
                            </div>
                        </div>
                    </td>
                    <td style=\"color:var(--text-muted);font-size:0.85rem;\">{{ u.email }}</td>
                    <td>
                        {% if u.role %}
                            {% if u.role.name == 'ADMIN' %}
                                <span class=\"badge badge-danger\">👑 Admin</span>
                            {% elseif u.role.name == 'AGENT' %}
                                <span class=\"badge badge-primary\">🛡️ Agent</span>
                            {% else %}
                                <span class=\"badge badge-info\">👤 User</span>
                            {% endif %}
                        {% else %}
                            <span class=\"badge\" style=\"background:#f1f5f9;color:#94a3b8;\">Non défini</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if u.isActive %}
                            <span class=\"badge badge-success\">✅ Actif</span>
                        {% else %}
                            <span class=\"badge badge-danger\">🚫 Inactif</span>
                        {% endif %}
                    </td>
                    <td style=\"font-size:0.85rem;color:var(--text-muted);\">{{ u.createdAt ? u.createdAt|date('d/m/Y') : '-' }}</td>
                    <td>
                        <div style=\"display:flex;gap:6px;align-items:center;\">
                            <a href=\"{{ path('admin_user_show', {id: u.id}) }}\" class=\"btn btn-info btn-xs\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"{{ path('admin_user_edit', {id: u.id}) }}\" class=\"btn btn-primary btn-xs\" title=\"Modifier\"><i class=\"fas fa-pen\"></i></a>
                            <a href=\"{{ path('admin_user_toggle_active', {id: u.id}) }}\" class=\"btn {{ u.isActive ? 'btn-warning' : 'btn-success' }} btn-xs\" title=\"{{ u.isActive ? 'Désactiver' : 'Activer' }}\">
                                <i class=\"fas fa-{{ u.isActive ? 'ban' : 'check' }}\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('admin_user_delete', {id: u.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ u.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "admin/user/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\user\\index.html.twig");
    }
}
