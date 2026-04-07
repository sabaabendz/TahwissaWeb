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

/* admin/user/show.html.twig */
class __TwigTemplate_cf2e7924334da4d5d3ccc13f7ff24e92 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

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

        yield "Admin - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        
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
        <h1><i class=\"fas fa-user\" style=\"color:var(--secondary);margin-right:10px;\"></i>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"dashboard-card\" style=\"max-width:800px;\">
    <div style=\"display:flex;align-items:center;gap:24px;margin-bottom:32px;padding-bottom:24px;border-bottom:1px solid #f1f5f9;\">
        <div style=\"width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:2rem;\">
            ";
        // line 18
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 18, $this->source); })()), "firstName", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 18, $this->source); })()), "firstName", [], "any", false, false, false, 18))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18))), "html", null, true)));
        yield "
        </div>
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:700;\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</h2>
            <p style=\"color:var(--text-muted);font-size:0.9rem;\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
            <div style=\"display:flex;gap:8px;margin-top:6px;\">
                ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 24, $this->source); })()), "role", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 25, $this->source); })()), "role", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25) == "ADMIN")) {
                // line 26
                yield "                        <span class=\"badge badge-danger\">👑 Admin</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 27
(isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 27, $this->source); })()), "role", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27) == "AGENT")) {
                // line 28
                yield "                        <span class=\"badge badge-primary\">🛡️ Agent</span>
                    ";
            } else {
                // line 30
                yield "                        <span class=\"badge badge-info\">👤 User</span>
                    ";
            }
            // line 32
            yield "                ";
        }
        // line 33
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 33, $this->source); })()), "isActive", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                    <span class=\"badge badge-success\">✅ Actif</span>
                ";
        } else {
            // line 36
            yield "                    <span class=\"badge badge-danger\">🚫 Inactif</span>
                ";
        }
        // line 38
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 38, $this->source); })()), "isVerified", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                    <span class=\"badge badge-info\">📧 Vérifié</span>
                ";
        }
        // line 41
        yield "            </div>
        </div>
    </div>

    <div class=\"detail-grid\" style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;\">
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-user\"></i> Prénom</div>
            <div style=\"font-weight:600;\">";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEntity"] ?? null), "firstName", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 48, $this->source); })()), "firstName", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 48, $this->source); })()), "firstName", [], "any", false, false, false, 48), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-user\"></i> Nom</div>
            <div style=\"font-weight:600;\">";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEntity"] ?? null), "lastName", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 52, $this->source); })()), "lastName", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 52, $this->source); })()), "lastName", [], "any", false, false, false, 52), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-phone\"></i> Téléphone</div>
            <div style=\"font-weight:600;\">";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEntity"] ?? null), "phone", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-map-marker-alt\"></i> Adresse</div>
            <div style=\"font-weight:600;\">";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEntity"] ?? null), "address", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 60, $this->source); })()), "address", [], "any", false, false, false, 60)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 60, $this->source); })()), "address", [], "any", false, false, false, 60), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-city\"></i> Ville</div>
            <div style=\"font-weight:600;\">";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEntity"] ?? null), "city", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 64, $this->source); })()), "city", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 64, $this->source); })()), "city", [], "any", false, false, false, 64), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-globe\"></i> Pays</div>
            <div style=\"font-weight:600;\">";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEntity"] ?? null), "country", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 68, $this->source); })()), "country", [], "any", false, false, false, 68)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 68, $this->source); })()), "country", [], "any", false, false, false, 68), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-calendar\"></i> Créé le</div>
            <div style=\"font-weight:600;\">";
        // line 72
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 72, $this->source); })()), "createdAt", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 72, $this->source); })()), "createdAt", [], "any", false, false, false, 72), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-clock\"></i> Mis à jour</div>
            <div style=\"font-weight:600;\">";
        // line 76
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 76, $this->source); })()), "updatedAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 76, $this->source); })()), "updatedAt", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
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
        return "admin/user/show.html.twig";
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
        return array (  222 => 76,  215 => 72,  208 => 68,  201 => 64,  194 => 60,  187 => 56,  180 => 52,  173 => 48,  164 => 41,  160 => 39,  157 => 38,  153 => 36,  149 => 34,  146 => 33,  143 => 32,  139 => 30,  135 => 28,  133 => 27,  130 => 26,  127 => 25,  125 => 24,  120 => 22,  116 => 21,  110 => 18,  100 => 11,  96 => 10,  90 => 7,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - {{ userEntity.name }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-user\" style=\"color:var(--secondary);margin-right:10px;\"></i>{{ userEntity.name }}</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_user_edit', {id: userEntity.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"dashboard-card\" style=\"max-width:800px;\">
    <div style=\"display:flex;align-items:center;gap:24px;margin-bottom:32px;padding-bottom:24px;border-bottom:1px solid #f1f5f9;\">
        <div style=\"width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:2rem;\">
            {{ userEntity.firstName ? userEntity.firstName|first|upper : userEntity.email|first|upper }}
        </div>
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:700;\">{{ userEntity.name }}</h2>
            <p style=\"color:var(--text-muted);font-size:0.9rem;\">{{ userEntity.email }}</p>
            <div style=\"display:flex;gap:8px;margin-top:6px;\">
                {% if userEntity.role %}
                    {% if userEntity.role.name == 'ADMIN' %}
                        <span class=\"badge badge-danger\">👑 Admin</span>
                    {% elseif userEntity.role.name == 'AGENT' %}
                        <span class=\"badge badge-primary\">🛡️ Agent</span>
                    {% else %}
                        <span class=\"badge badge-info\">👤 User</span>
                    {% endif %}
                {% endif %}
                {% if userEntity.isActive %}
                    <span class=\"badge badge-success\">✅ Actif</span>
                {% else %}
                    <span class=\"badge badge-danger\">🚫 Inactif</span>
                {% endif %}
                {% if userEntity.isVerified %}
                    <span class=\"badge badge-info\">📧 Vérifié</span>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"detail-grid\" style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;\">
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-user\"></i> Prénom</div>
            <div style=\"font-weight:600;\">{{ userEntity.firstName ?? 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-user\"></i> Nom</div>
            <div style=\"font-weight:600;\">{{ userEntity.lastName ?? 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-phone\"></i> Téléphone</div>
            <div style=\"font-weight:600;\">{{ userEntity.phone ?? 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-map-marker-alt\"></i> Adresse</div>
            <div style=\"font-weight:600;\">{{ userEntity.address ?? 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-city\"></i> Ville</div>
            <div style=\"font-weight:600;\">{{ userEntity.city ?? 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-globe\"></i> Pays</div>
            <div style=\"font-weight:600;\">{{ userEntity.country ?? 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-calendar\"></i> Créé le</div>
            <div style=\"font-weight:600;\">{{ userEntity.createdAt ? userEntity.createdAt|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:4px;\"><i class=\"fas fa-clock\"></i> Mis à jour</div>
            <div style=\"font-weight:600;\">{{ userEntity.updatedAt ? userEntity.updatedAt|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/user/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\user\\show.html.twig");
    }
}
