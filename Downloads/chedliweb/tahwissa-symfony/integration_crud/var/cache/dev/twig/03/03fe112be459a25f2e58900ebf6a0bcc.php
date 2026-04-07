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

/* admin/voyage/edit.html.twig */
class __TwigTemplate_6f782180c0237ba19d13aa9d47f4a88e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/voyage/edit.html.twig"));

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

        yield "Admin - Modifier Voyage";
        
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
        <h1><i class=\"fas fa-edit\" style=\"color:var(--primary);margin-right:10px;\"></i>Modifier Voyage #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 8, $this->source); })()), "destination", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
    </div>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> Modifier les Informations</h2>
    <p class=\"subtitle\">Modifiez les champs nécessaires puis validez.</p>

    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"form-group ";
        // line 19
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'label');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'widget');
        yield "
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget');
        yield "
    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 31
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "destination", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "destination", [], "any", false, false, false, 32), 'label');
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "destination", [], "any", false, false, false, 33), 'widget');
        yield "
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "destination", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 34), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </div>
        <div class=\"form-group\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "categorie", [], "any", false, false, false, 37), 'label');
        yield "
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "categorie", [], "any", false, false, false, 38), 'widget');
        yield "
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 43
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 44), 'label');
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 45), 'widget');
        yield "
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 46), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </div>
        <div class=\"form-group ";
        // line 48
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 49), 'label');
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 50), 'widget');
        yield "
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 51), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 56
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "dateDepart", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "dateDepart", [], "any", false, false, false, 57), 'label');
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "dateDepart", [], "any", false, false, false, 58), 'widget');
        yield "
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateDepart", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 59), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        </div>
        <div class=\"form-group ";
        // line 61
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "dateRetour", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "dateRetour", [], "any", false, false, false, 62), 'label');
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "dateRetour", [], "any", false, false, false, 63), 'widget');
        yield "
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "dateRetour", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 64), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "imageUrl", [], "any", false, false, false, 70), 'label');
        yield "
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "imageUrl", [], "any", false, false, false, 71), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74), 'label');
        yield "
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75), 'widget');
        yield "
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>

    ";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        yield "
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
        return "admin/voyage/edit.html.twig";
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
        return array (  333 => 84,  326 => 80,  318 => 75,  314 => 74,  308 => 71,  304 => 70,  297 => 65,  286 => 64,  282 => 63,  278 => 62,  274 => 61,  271 => 60,  260 => 59,  256 => 58,  252 => 57,  248 => 56,  242 => 52,  231 => 51,  227 => 50,  223 => 49,  219 => 48,  216 => 47,  205 => 46,  201 => 45,  197 => 44,  193 => 43,  185 => 38,  181 => 37,  177 => 35,  166 => 34,  162 => 33,  158 => 32,  154 => 31,  147 => 27,  143 => 26,  138 => 23,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  110 => 17,  100 => 10,  93 => 8,  89 => 7,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Modifier Voyage{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-edit\" style=\"color:var(--primary);margin-right:10px;\"></i>Modifier Voyage #{{ voyage.id }}</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">{{ voyage.titre }} — {{ voyage.destination }}</p>
    </div>
    <a href=\"{{ path('admin_voyage_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> Modifier les Informations</h2>
    <p class=\"subtitle\">Modifiez les champs nécessaires puis validez.</p>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"form-group {{ form.titre.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.titre) }}
        {{ form_widget(form.titre) }}
        {% for error in form.titre.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description) }}
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.destination.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.destination) }}
            {{ form_widget(form.destination) }}
            {% for error in form.destination.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.categorie) }}
            {{ form_widget(form.categorie) }}
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.prixUnitaire.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.prixUnitaire) }}
            {{ form_widget(form.prixUnitaire) }}
            {% for error in form.prixUnitaire.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
        <div class=\"form-group {{ form.placesDisponibles.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.placesDisponibles) }}
            {{ form_widget(form.placesDisponibles) }}
            {% for error in form.placesDisponibles.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.dateDepart.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateDepart) }}
            {{ form_widget(form.dateDepart) }}
            {% for error in form.dateDepart.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
        <div class=\"form-group {{ form.dateRetour.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateRetour) }}
            {{ form_widget(form.dateRetour) }}
            {% for error in form.dateRetour.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.imageUrl) }}
            {{ form_widget(form.imageUrl) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.statut) }}
            {{ form_widget(form.statut) }}
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('admin_voyage_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "admin/voyage/edit.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\voyage\\edit.html.twig");
    }
}
