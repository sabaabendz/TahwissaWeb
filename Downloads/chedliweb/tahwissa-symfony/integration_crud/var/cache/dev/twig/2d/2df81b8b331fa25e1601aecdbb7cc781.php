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

/* auth/forgot_password.html.twig */
class __TwigTemplate_31a57f7def4d60886a4a6544e4220647 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/forgot_password.html.twig"));

        $this->parent = $this->load("base_auth.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mot de passe oublié";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"auth-card\">
    <div class=\"auth-logo\">
        <h1><i class=\"fas fa-plane-departure\"></i> Tahwissa</h1>
        <p>Réinitialiser votre mot de passe</p>
    </div>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
    <div class=\"alert alert-info\">
        <i class=\"fas fa-info-circle me-2\"></i>
        Entrez votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.
    </div>

    <form method=\"post\">
        <div class=\"form-floating mb-3\">
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required autofocus>
            <label for=\"email\"><i class=\"fas fa-envelope me-1\"></i> Email</label>
        </div>

        <button type=\"submit\" class=\"btn-auth\" disabled title=\"Fonctionnalité en cours de développement\">
            <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le lien
        </button>
    </form>

    <div class=\"auth-links\" style=\"margin-top:25px;\">
        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><i class=\"fas fa-arrow-left me-1\"></i>Retour à la connexion</a>
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
        return "auth/forgot_password.html.twig";
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
        return array (  143 => 38,  123 => 20,  117 => 19,  107 => 15,  102 => 14,  97 => 13,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_auth.html.twig' %}

{% block title %}Mot de passe oublié{% endblock %}

{% block body %}
<div class=\"auth-card\">
    <div class=\"auth-logo\">
        <h1><i class=\"fas fa-plane-departure\"></i> Tahwissa</h1>
        <p>Réinitialiser votre mot de passe</p>
    </div>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"alert alert-info\">
        <i class=\"fas fa-info-circle me-2\"></i>
        Entrez votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.
    </div>

    <form method=\"post\">
        <div class=\"form-floating mb-3\">
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required autofocus>
            <label for=\"email\"><i class=\"fas fa-envelope me-1\"></i> Email</label>
        </div>

        <button type=\"submit\" class=\"btn-auth\" disabled title=\"Fonctionnalité en cours de développement\">
            <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le lien
        </button>
    </form>

    <div class=\"auth-links\" style=\"margin-top:25px;\">
        <a href=\"{{ path('app_login') }}\"><i class=\"fas fa-arrow-left me-1\"></i>Retour à la connexion</a>
    </div>
</div>
{% endblock %}
", "auth/forgot_password.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\auth\\forgot_password.html.twig");
    }
}
