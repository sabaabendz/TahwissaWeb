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

/* admin/layout.html.twig */
class __TwigTemplate_556a65502d17d87d902b2c37d4aa2798 extends Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<aside class=\"sidebar\">
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"sidebar-brand\">
        <div class=\"brand-icon\">✈️</div>
        <div class=\"brand-text\">Tahwissa<small>Panneau Admin</small></div>
    </a>
    <ul class=\"sidebar-nav\">
        <li class=\"nav-section\">Voyages</li>
        <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12)) && is_string($_v1 = "admin_voyage") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-plane\"></i></span> Voyages
        </a></li>
        <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"";
        yield ((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15)) && is_string($_v3 = "admin_reservation") && str_starts_with($_v2, $_v3)) &&  !(is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15)) && is_string($_v5 = "admin_reservation_evenement") && str_starts_with($_v4, $_v5)))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-ticket-alt\"></i></span> Rés. Voyages
        </a></li>
        <li class=\"nav-section\">Événements</li>
        <li><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        yield "\" class=\"";
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19)) && is_string($_v7 = "admin_evenement") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-star\"></i></span> Événements
        </a></li>
        <li><a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_evenement_index");
        yield "\" class=\"";
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22)) && is_string($_v9 = "admin_reservation_evenement") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-check\"></i></span> Rés. Événements
        </a></li>
        <li><a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "\" class=\"";
        yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v11 = "admin_reclamation") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-flag\"></i></span> Réclamations
        </a></li>
        <li class=\"nav-section\">Utilisateurs</li>
        <li><a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"";
        yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29)) && is_string($_v13 = "admin_user") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-users-cog\"></i></span> Gestion Utilisateurs
        </a></li>
        <li class=\"nav-section\">Analyse</li>
        <li><a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistiques");
        yield "\" class=\"";
        yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33)) && is_string($_v15 = "admin_statistiques") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-chart-line\"></i></span> Statistiques
        </a></li>
        <li class=\"nav-section\">Système</li>
        <li><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><span class=\"nav-icon\"><i class=\"fas fa-sign-out-alt\"></i></span> Déconnexion</a></li>
    </ul>
</aside>

<div class=\"main-content\">
    ";
        // line 43
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 44
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i class=\"fas fa-";
                // line 46
                yield ((($context["label"] == "success")) ? ("check-circle") : (((($context["label"] == "danger")) ? ("exclamation-circle") : ("info-circle"))));
                yield "\"></i>
                ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
    ";
        // line 53
        yield "    <div style=\"display:flex;justify-content:flex-end;align-items:center;margin-bottom:16px;gap:12px;\">
        ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "            <span style=\"color:#64748b;font-size:0.9rem;\">
                <i class=\"fas fa-user-circle\"></i> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            yield " 
                <span style=\"background:var(--primary);color:white;padding:2px 10px;border-radius:50px;font-size:0.75rem;margin-left:4px;\">👑 Admin</span>
            </span>
        ";
        }
        // line 60
        yield "    </div>

    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 63
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layout.html.twig";
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
        return array (  215 => 62,  206 => 63,  204 => 62,  200 => 60,  193 => 56,  190 => 55,  188 => 54,  185 => 53,  182 => 51,  176 => 50,  167 => 47,  163 => 46,  158 => 45,  153 => 44,  148 => 43,  140 => 37,  131 => 33,  122 => 29,  113 => 25,  105 => 22,  97 => 19,  88 => 15,  80 => 12,  71 => 6,  68 => 5,  58 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Admin layout with sidebar - reusable for all admin pages #}
{% extends 'base.html.twig' %}

{% block body %}
<aside class=\"sidebar\">
    <a href=\"{{ path('app_home') }}\" class=\"sidebar-brand\">
        <div class=\"brand-icon\">✈️</div>
        <div class=\"brand-text\">Tahwissa<small>Panneau Admin</small></div>
    </a>
    <ul class=\"sidebar-nav\">
        <li class=\"nav-section\">Voyages</li>
        <li><a href=\"{{ path('admin_voyage_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_voyage' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-plane\"></i></span> Voyages
        </a></li>
        <li><a href=\"{{ path('admin_reservation_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_reservation' and not (app.request.attributes.get('_route') starts with 'admin_reservation_evenement') ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-ticket-alt\"></i></span> Rés. Voyages
        </a></li>
        <li class=\"nav-section\">Événements</li>
        <li><a href=\"{{ path('admin_evenement_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_evenement' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-star\"></i></span> Événements
        </a></li>
        <li><a href=\"{{ path('admin_reservation_evenement_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_reservation_evenement' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-check\"></i></span> Rés. Événements
        </a></li>
        <li><a href=\"{{ path('admin_reclamation_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_reclamation' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-flag\"></i></span> Réclamations
        </a></li>
        <li class=\"nav-section\">Utilisateurs</li>
        <li><a href=\"{{ path('admin_user_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_user' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-users-cog\"></i></span> Gestion Utilisateurs
        </a></li>
        <li class=\"nav-section\">Analyse</li>
        <li><a href=\"{{ path('admin_statistiques') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'admin_statistiques' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-chart-line\"></i></span> Statistiques
        </a></li>
        <li class=\"nav-section\">Système</li>
        <li><a href=\"{{ path('app_logout') }}\"><span class=\"nav-icon\"><i class=\"fas fa-sign-out-alt\"></i></span> Déconnexion</a></li>
    </ul>
</aside>

<div class=\"main-content\">
    {# Flash messages #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <i class=\"fas fa-{{ label == 'success' ? 'check-circle' : (label == 'danger' ? 'exclamation-circle' : 'info-circle') }}\"></i>
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {# User info bar #}
    <div style=\"display:flex;justify-content:flex-end;align-items:center;margin-bottom:16px;gap:12px;\">
        {% if app.user %}
            <span style=\"color:#64748b;font-size:0.9rem;\">
                <i class=\"fas fa-user-circle\"></i> {{ app.user.name }} 
                <span style=\"background:var(--primary);color:white;padding:2px 10px;border-radius:50px;font-size:0.75rem;margin-left:4px;\">👑 Admin</span>
            </span>
        {% endif %}
    </div>

    {% block content %}{% endblock %}
</div>
{% endblock %}
", "admin/layout.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\layout.html.twig");
    }
}
