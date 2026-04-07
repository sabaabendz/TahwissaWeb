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

/* admin/voyage/new.html.twig */
class __TwigTemplate_a592d17895061c542baa628022f5fdd2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/voyage/new.html.twig"));

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

        yield "Admin - Nouveau Voyage";
        
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
        <h1><i class=\"fas fa-plus-circle\" style=\"color:var(--accent);margin-right:10px;\"></i>Nouveau Voyage</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Créer un nouveau voyage dans le catalogue</p>
    </div>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> Informations du Voyage</h2>
    <p class=\"subtitle\">Remplissez les informations ci-dessous pour créer un nouveau voyage.</p>

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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22)) > 0)) {
            // line 23
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                yield "                <div class=\"form-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        ";
        }
        // line 27
        yield "    </div>

    <div class=\"form-group ";
        // line 29
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'label');
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget');
        yield "
    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 35
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "destination", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "destination", [], "any", false, false, false, 36), 'label');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "destination", [], "any", false, false, false, 37), 'widget');
        yield "
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "destination", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 39
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </div>
        <div class=\"form-group\">
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "categorie", [], "any", false, false, false, 43), 'label');
        yield "
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "categorie", [], "any", false, false, false, 44), 'widget');
        yield "
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 49
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 50), 'label');
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 51), 'widget');
        yield "
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 53
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 53), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </div>
        <div class=\"form-group ";
        // line 56
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 57), 'label');
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 58), 'widget');
        yield "
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 60
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 66
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "dateDepart", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "dateDepart", [], "any", false, false, false, 67), 'label');
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "dateDepart", [], "any", false, false, false, 68), 'widget');
        yield "
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "dateDepart", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 70
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 70), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "        </div>
        <div class=\"form-group ";
        // line 73
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "dateRetour", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "dateRetour", [], "any", false, false, false, 74), 'label');
        yield "
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dateRetour", [], "any", false, false, false, 75), 'widget');
        yield "
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "dateRetour", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 77
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 77), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "imageUrl", [], "any", false, false, false, 84), 'label');
        yield "
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "imageUrl", [], "any", false, false, false, 85), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "statut", [], "any", false, false, false, 88), 'label');
        yield "
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "statut", [], "any", false, false, false, 89), 'widget');
        yield "
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Créer le Voyage</button>
    </div>

    ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
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
        return "admin/voyage/new.html.twig";
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
        return array (  346 => 98,  339 => 94,  331 => 89,  327 => 88,  321 => 85,  317 => 84,  310 => 79,  301 => 77,  297 => 76,  293 => 75,  289 => 74,  285 => 73,  282 => 72,  273 => 70,  269 => 69,  265 => 68,  261 => 67,  257 => 66,  251 => 62,  242 => 60,  238 => 59,  234 => 58,  230 => 57,  226 => 56,  223 => 55,  214 => 53,  210 => 52,  206 => 51,  202 => 50,  198 => 49,  190 => 44,  186 => 43,  182 => 41,  173 => 39,  169 => 38,  165 => 37,  161 => 36,  157 => 35,  150 => 31,  146 => 30,  142 => 29,  138 => 27,  135 => 26,  126 => 24,  121 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  102 => 17,  92 => 10,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Nouveau Voyage{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-plus-circle\" style=\"color:var(--accent);margin-right:10px;\"></i>Nouveau Voyage</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Créer un nouveau voyage dans le catalogue</p>
    </div>
    <a href=\"{{ path('admin_voyage_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> Informations du Voyage</h2>
    <p class=\"subtitle\">Remplissez les informations ci-dessous pour créer un nouveau voyage.</p>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"form-group {{ form.titre.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.titre) }}
        {{ form_widget(form.titre) }}
        {% if form.titre.vars.errors|length > 0 %}
            {% for error in form.titre.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        {% endif %}
    </div>

    <div class=\"form-group {{ form.description.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description) }}
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.destination.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.destination) }}
            {{ form_widget(form.destination) }}
            {% for error in form.destination.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
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
            {% for error in form.prixUnitaire.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>
        <div class=\"form-group {{ form.placesDisponibles.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.placesDisponibles) }}
            {{ form_widget(form.placesDisponibles) }}
            {% for error in form.placesDisponibles.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.dateDepart.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateDepart) }}
            {{ form_widget(form.dateDepart) }}
            {% for error in form.dateDepart.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>
        <div class=\"form-group {{ form.dateRetour.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateRetour) }}
            {{ form_widget(form.dateRetour) }}
            {% for error in form.dateRetour.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
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
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Créer le Voyage</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "admin/voyage/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\voyage\\new.html.twig");
    }
}
