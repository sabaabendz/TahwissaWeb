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

/* auth/login.html.twig */
class __TwigTemplate_311d761dac61ac5df18639b9a66a7db3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

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

        yield "Connexion";
        
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
        <p>Connectez-vous à votre compte</p>
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
    ";
        // line 21
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", [], "any", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 27
        yield "
    <form method=\"post\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <div class=\"form-floating\">
            <input type=\"email\" id=\"inputEmail\" name=\"email\"
                   class=\"form-control\" placeholder=\"Email\"
                   value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\" required autofocus>
            <label for=\"inputEmail\"><i class=\"fas fa-envelope me-1\"></i> Email</label>
        </div>

        <div class=\"form-floating\">
            <input type=\"password\" id=\"inputPassword\" name=\"password\"
                   class=\"form-control\" placeholder=\"Mot de passe\" required>
            <label for=\"inputPassword\"><i class=\"fas fa-lock me-1\"></i> Mot de passe</label>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
            </div>
            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"text-decoration-none\" style=\"font-size:0.85rem;color:var(--primary);\">
                Mot de passe oublié ?
            </a>
        </div>

        <button type=\"submit\" class=\"btn-auth\">
            <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
        </button>
    </form>

    <div class=\"auth-divider\">
        <span>ou</span>
    </div>

    <div class=\"auth-links\">
        <p style=\"color:#64748b;font-size:0.9rem;\">Vous n'avez pas de compte ?</p>
        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\"><i class=\"fas fa-user-plus me-1\"></i>Créer un compte</a>
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
        return "auth/login.html.twig";
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
        return array (  190 => 65,  171 => 49,  153 => 34,  145 => 29,  141 => 28,  138 => 27,  131 => 23,  128 => 22,  126 => 21,  123 => 20,  117 => 19,  107 => 15,  102 => 14,  97 => 13,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_auth.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<div class=\"auth-card\">
    <div class=\"auth-logo\">
        <h1><i class=\"fas fa-plane-departure\"></i> Tahwissa</h1>
        <p>Connectez-vous à votre compte</p>
    </div>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {% if error %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i>{{ error.messageKey|trans(error.messageData, 'security') }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endif %}

    <form method=\"post\" action=\"{{ path('app_login') }}\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <div class=\"form-floating\">
            <input type=\"email\" id=\"inputEmail\" name=\"email\"
                   class=\"form-control\" placeholder=\"Email\"
                   value=\"{{ last_username }}\" required autofocus>
            <label for=\"inputEmail\"><i class=\"fas fa-envelope me-1\"></i> Email</label>
        </div>

        <div class=\"form-floating\">
            <input type=\"password\" id=\"inputPassword\" name=\"password\"
                   class=\"form-control\" placeholder=\"Mot de passe\" required>
            <label for=\"inputPassword\"><i class=\"fas fa-lock me-1\"></i> Mot de passe</label>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
            </div>
            <a href=\"{{ path('app_forgot_password') }}\" class=\"text-decoration-none\" style=\"font-size:0.85rem;color:var(--primary);\">
                Mot de passe oublié ?
            </a>
        </div>

        <button type=\"submit\" class=\"btn-auth\">
            <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
        </button>
    </form>

    <div class=\"auth-divider\">
        <span>ou</span>
    </div>

    <div class=\"auth-links\">
        <p style=\"color:#64748b;font-size:0.9rem;\">Vous n'avez pas de compte ?</p>
        <a href=\"{{ path('app_register') }}\"><i class=\"fas fa-user-plus me-1\"></i>Créer un compte</a>
    </div>
</div>
{% endblock %}
", "auth/login.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\auth\\login.html.twig");
    }
}
