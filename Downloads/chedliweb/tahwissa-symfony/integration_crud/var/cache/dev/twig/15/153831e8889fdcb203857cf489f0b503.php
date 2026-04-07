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

/* agent/layout.html.twig */
class __TwigTemplate_a8f133b4be93bef7b0e46a683a8fb348 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/layout.html.twig"));

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
        <div class=\"brand-text\">Tahwissa<small>Espace Agent</small></div>
    </a>
    <ul class=\"sidebar-nav\">
        <li class=\"nav-section\">Voyages</li>
        <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12)) && is_string($_v1 = "agent_voyage") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-plane\"></i></span> Voyages
        </a></li>
        <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index");
        yield "\" class=\"";
        yield ((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15)) && is_string($_v3 = "agent_reservation") && str_starts_with($_v2, $_v3)) &&  !(is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15)) && is_string($_v5 = "agent_reservation_evenement") && str_starts_with($_v4, $_v5)))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-ticket-alt\"></i></span> Rés. Voyages
        </a></li>
        <li class=\"nav-section\">Événements</li>
        <li><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_evenement_index");
        yield "\" class=\"";
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19)) && is_string($_v7 = "agent_evenement") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-star\"></i></span> Événements
        </a></li>
        <li><a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_index");
        yield "\" class=\"";
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22)) && is_string($_v9 = "agent_reservation_evenement") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-check\"></i></span> Rés. Événements
        </a></li>
        <li class=\"nav-section\">Système</li>
        <li><a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><span class=\"nav-icon\"><i class=\"fas fa-sign-out-alt\"></i></span> Déconnexion</a></li>
    </ul>
</aside>

<div class=\"main-content\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i class=\"fas fa-";
                // line 34
                yield ((($context["label"] == "success")) ? ("check-circle") : (((($context["label"] == "danger")) ? ("exclamation-circle") : ("info-circle"))));
                yield "\"></i>
                ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
    <div style=\"display:flex;justify-content:flex-end;align-items:center;margin-bottom:16px;gap:12px;\">
        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            <span style=\"color:#64748b;font-size:0.9rem;\">
                <i class=\"fas fa-user-circle\"></i> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            yield "
                <span style=\"background:#7C4DFF;color:white;padding:2px 10px;border-radius:50px;font-size:0.75rem;margin-left:4px;\">🧑‍💼 Agent</span>
            </span>
        ";
        }
        // line 47
        yield "    </div>

    ";
        // line 49
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 50
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
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
        return "agent/layout.html.twig";
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
        return array (  186 => 49,  177 => 50,  175 => 49,  171 => 47,  164 => 43,  161 => 42,  159 => 41,  155 => 39,  149 => 38,  140 => 35,  136 => 34,  131 => 33,  126 => 32,  122 => 31,  114 => 26,  105 => 22,  97 => 19,  88 => 15,  80 => 12,  71 => 6,  68 => 5,  58 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Agent layout with sidebar #}
{% extends 'base.html.twig' %}

{% block body %}
<aside class=\"sidebar\">
    <a href=\"{{ path('app_home') }}\" class=\"sidebar-brand\">
        <div class=\"brand-icon\">✈️</div>
        <div class=\"brand-text\">Tahwissa<small>Espace Agent</small></div>
    </a>
    <ul class=\"sidebar-nav\">
        <li class=\"nav-section\">Voyages</li>
        <li><a href=\"{{ path('agent_voyage_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'agent_voyage' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-plane\"></i></span> Voyages
        </a></li>
        <li><a href=\"{{ path('agent_reservation_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'agent_reservation' and not (app.request.attributes.get('_route') starts with 'agent_reservation_evenement') ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-ticket-alt\"></i></span> Rés. Voyages
        </a></li>
        <li class=\"nav-section\">Événements</li>
        <li><a href=\"{{ path('agent_evenement_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'agent_evenement' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-star\"></i></span> Événements
        </a></li>
        <li><a href=\"{{ path('agent_reservation_evenement_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'agent_reservation_evenement' ? 'active' : '' }}\">
            <span class=\"nav-icon\"><i class=\"fas fa-calendar-check\"></i></span> Rés. Événements
        </a></li>
        <li class=\"nav-section\">Système</li>
        <li><a href=\"{{ path('app_logout') }}\"><span class=\"nav-icon\"><i class=\"fas fa-sign-out-alt\"></i></span> Déconnexion</a></li>
    </ul>
</aside>

<div class=\"main-content\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <i class=\"fas fa-{{ label == 'success' ? 'check-circle' : (label == 'danger' ? 'exclamation-circle' : 'info-circle') }}\"></i>
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <div style=\"display:flex;justify-content:flex-end;align-items:center;margin-bottom:16px;gap:12px;\">
        {% if app.user %}
            <span style=\"color:#64748b;font-size:0.9rem;\">
                <i class=\"fas fa-user-circle\"></i> {{ app.user.name }}
                <span style=\"background:#7C4DFF;color:white;padding:2px 10px;border-radius:50px;font-size:0.75rem;margin-left:4px;\">🧑‍💼 Agent</span>
            </span>
        {% endif %}
    </div>

    {% block content %}{% endblock %}
</div>
{% endblock %}
", "agent/layout.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\layout.html.twig");
    }
}
