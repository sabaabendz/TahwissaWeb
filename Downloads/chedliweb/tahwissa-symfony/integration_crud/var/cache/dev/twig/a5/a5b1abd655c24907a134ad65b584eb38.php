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

/* client/layout.html.twig */
class __TwigTemplate_120a22335036477dc06f2cb8ad27265e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/layout.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "<style>
    body { background: #f0f4f8; }
    .client-navbar {
        background: white;
        padding: 12px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .client-navbar .brand {
        display: flex; align-items: center; gap: 10px;
        text-decoration: none; font-weight: 800; font-size: 1.3rem; color: var(--text-dark);
    }
    .client-navbar .brand span {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    }
    .client-nav { display: flex; align-items: center; gap: 24px; list-style: none; }
    .client-nav a {
        color: #64748b; text-decoration: none; font-weight: 500; font-size: 0.9rem;
        transition: var(--transition); padding: 8px 16px; border-radius: 50px;
    }
    .client-nav a:hover, .client-nav a.active { color: var(--primary); background: rgba(21,101,192,0.06); }
    .client-main { max-width: 1200px; margin: 0 auto; padding: 32px 24px; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        yield "<nav class=\"client-navbar\">
    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"brand\">
        <div style=\"width:38px;height:38px;background:linear-gradient(135deg,var(--primary),var(--secondary));border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.1rem;\">✈️</div>
        <span>Tahwissa</span>
    </a>
    <ul class=\"client-nav\">
        <li><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43)) && is_string($_v1 = "client_voyage") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\"><i class=\"fas fa-plane\"></i> Voyages</a></li>
        <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_index");
        yield "\" class=\"";
        yield ((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44)) && is_string($_v3 = "client_reservation") && str_starts_with($_v2, $_v3)) &&  !(is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44)) && is_string($_v5 = "client_reservation_evenement") && str_starts_with($_v4, $_v5)))) ? ("active") : (""));
        yield "\"><i class=\"fas fa-ticket-alt\"></i> Rés. Voyages</a></li>
        <li><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
        yield "\" class=\"";
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45)) && is_string($_v7 = "client_evenement") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\"><i class=\"fas fa-calendar-alt\"></i> Événements</a></li>
        <li><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_index");
        yield "\" class=\"";
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "attributes", [], "any", false, false, false, 46), "get", ["_route"], "method", false, false, false, 46)) && is_string($_v9 = "client_reservation_evenement") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\"><i class=\"fas fa-calendar-check\"></i> Rés. Événements</a></li>
        <li><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_index");
        yield "\" class=\"";
        yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47)) && is_string($_v11 = "client_reclamation") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\"><i class=\"fas fa-flag\"></i> Réclamations</a></li>
        <li>
            ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                <span style=\"color:#64748b;font-size:0.85rem;padding:8px 12px;\">
                    <i class=\"fas fa-user-circle\"></i> ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            yield "
                </span>
                <a href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"color:var(--danger);\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
            ";
        } else {
            // line 55
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a>
            ";
        }
        // line 57
        yield "        </li>
    </ul>
</nav>

<div class=\"client-main\">
    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 63
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 64
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i class=\"fas fa-";
                // line 65
                yield ((($context["label"] == "success")) ? ("check-circle") : (((($context["label"] == "danger")) ? ("exclamation-circle") : (((($context["label"] == "warning")) ? ("exclamation-triangle") : ("info-circle"))))));
                yield "\"></i>
                ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "
    ";
        // line 71
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 72
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 71
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
        return "client/layout.html.twig";
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
        return array (  233 => 71,  224 => 72,  222 => 71,  219 => 70,  213 => 69,  204 => 66,  200 => 65,  195 => 64,  190 => 63,  186 => 62,  179 => 57,  173 => 55,  168 => 53,  163 => 51,  160 => 50,  158 => 49,  151 => 47,  145 => 46,  139 => 45,  133 => 44,  127 => 43,  119 => 38,  116 => 37,  106 => 36,  69 => 5,  59 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Client layout - Front office with top navbar instead of sidebar #}
{% extends 'base.html.twig' %}

{% block stylesheets %}
<style>
    body { background: #f0f4f8; }
    .client-navbar {
        background: white;
        padding: 12px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .client-navbar .brand {
        display: flex; align-items: center; gap: 10px;
        text-decoration: none; font-weight: 800; font-size: 1.3rem; color: var(--text-dark);
    }
    .client-navbar .brand span {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    }
    .client-nav { display: flex; align-items: center; gap: 24px; list-style: none; }
    .client-nav a {
        color: #64748b; text-decoration: none; font-weight: 500; font-size: 0.9rem;
        transition: var(--transition); padding: 8px 16px; border-radius: 50px;
    }
    .client-nav a:hover, .client-nav a.active { color: var(--primary); background: rgba(21,101,192,0.06); }
    .client-main { max-width: 1200px; margin: 0 auto; padding: 32px 24px; }
</style>
{% endblock %}

{% block body %}
<nav class=\"client-navbar\">
    <a href=\"{{ path('app_home') }}\" class=\"brand\">
        <div style=\"width:38px;height:38px;background:linear-gradient(135deg,var(--primary),var(--secondary));border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.1rem;\">✈️</div>
        <span>Tahwissa</span>
    </a>
    <ul class=\"client-nav\">
        <li><a href=\"{{ path('client_voyage_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'client_voyage' ? 'active' : '' }}\"><i class=\"fas fa-plane\"></i> Voyages</a></li>
        <li><a href=\"{{ path('client_reservation_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'client_reservation' and not (app.request.attributes.get('_route') starts with 'client_reservation_evenement') ? 'active' : '' }}\"><i class=\"fas fa-ticket-alt\"></i> Rés. Voyages</a></li>
        <li><a href=\"{{ path('client_evenement_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'client_evenement' ? 'active' : '' }}\"><i class=\"fas fa-calendar-alt\"></i> Événements</a></li>
        <li><a href=\"{{ path('client_reservation_evenement_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'client_reservation_evenement' ? 'active' : '' }}\"><i class=\"fas fa-calendar-check\"></i> Rés. Événements</a></li>
        <li><a href=\"{{ path('client_reclamation_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'client_reclamation' ? 'active' : '' }}\"><i class=\"fas fa-flag\"></i> Réclamations</a></li>
        <li>
            {% if app.user %}
                <span style=\"color:#64748b;font-size:0.85rem;padding:8px 12px;\">
                    <i class=\"fas fa-user-circle\"></i> {{ app.user.name }}
                </span>
                <a href=\"{{ path('app_logout') }}\" style=\"color:var(--danger);\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
            {% else %}
                <a href=\"{{ path('app_login') }}\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a>
            {% endif %}
        </li>
    </ul>
</nav>

<div class=\"client-main\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <i class=\"fas fa-{{ label == 'success' ? 'check-circle' : (label == 'danger' ? 'exclamation-circle' : (label == 'warning' ? 'exclamation-triangle' : 'info-circle')) }}\"></i>
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {% block content %}{% endblock %}
</div>
{% endblock %}
", "client/layout.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\layout.html.twig");
    }
}
