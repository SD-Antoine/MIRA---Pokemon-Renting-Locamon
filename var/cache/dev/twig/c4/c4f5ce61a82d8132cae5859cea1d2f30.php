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

/* pokemon/index.html.twig */
class __TwigTemplate_97a1b7903595789b2cd178f89f6d30e0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Pokémons";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mx-auto px-4 py-8\">
        <h1 class=\"text-4xl font-bold mb-8\">Pokémons</h1>

        <!-- Cards Grid -->
        ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 10, $this->source); })()), "items", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
                // line 13
                yield "                    ";
                $context["frenchName"] = null;
                // line 14
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "getTranslations", [], "method", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                    // line 15
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getLang", [], "method", false, false, false, 15) == "fr")) {
                        // line 16
                        yield "                            ";
                        $context["frenchName"] = CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getName", [], "method", false, false, false, 16);
                        // line 17
                        yield "                        ";
                    }
                    // line 18
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "                    
                    ";
                // line 20
                $context["sprite"] = null;
                // line 21
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "getSprites", [], "method", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["sprite_item"]) {
                    // line 22
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 22) == "front_default")) {
                        // line 23
                        yield "                            ";
                        $context["sprite"] = $context["sprite_item"];
                        // line 24
                        yield "                        ";
                    }
                    // line 25
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sprite_item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "
                    <a href=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\" class=\"block\">
                        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow cursor-pointer\">
                            <!-- Sprite -->
                            <div class=\"bg-gray-100 h-48 flex items-center justify-center\">
                                ";
                // line 31
                if ((($tmp = (isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 32
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 32, $this->source); })()), "getUrl", [], "method", false, false, false, 32), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["frenchName"]) || array_key_exists("frenchName", $context) ? $context["frenchName"] : (function () { throw new RuntimeError('Variable "frenchName" does not exist.', 32, $this->source); })()), "html", null, true);
                    yield "\" class=\"h-40 w-40 object-contain\">
                                ";
                } else {
                    // line 34
                    yield "                                    <div class=\"text-gray-400\">No sprite</div>
                                ";
                }
                // line 36
                yield "                            </div>
                            
                            <!-- Card Body -->
                            <div class=\"p-4\">
                                <!-- Name -->
                                <h3 class=\"text-lg font-bold text-gray-800 mb-4\">
                                    ";
                // line 42
                yield (((array_key_exists("frenchName", $context) &&  !(null === $context["frenchName"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["frenchName"], "html", null, true)) : ("Unknown"));
                yield "
                                </h3>
                                
                                <!-- Types -->
                                <div class=\"flex gap-2\">
                                    ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "getType1", [], "method", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                                        <span class=\"px-3 py-1 bg-blue-600 text-white rounded-full text-sm font-bold\">
                                            ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "getType1", [], "method", false, false, false, 49), "getNameFR", [], "method", false, false, false, 49), "html", null, true);
                    yield "
                                        </span>
                                    ";
                }
                // line 52
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "getType2", [], "method", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "                                        <span class=\"px-3 py-1 bg-red-600 text-white rounded-full text-sm font-bold\">
                                            ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "getType2", [], "method", false, false, false, 54), "getNameFR", [], "method", false, false, false, 54), "html", null, true);
                    yield "
                                        </span>
                                    ";
                }
                // line 57
                yield "                                </div>
                            </div>
                        </div>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pokemon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "            </div>

            <!-- Pagination -->
            <div class=\"flex justify-center mt-8 gap-2\">
                ";
            // line 66
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 66, $this->source); })()), "getPageCount", [], "method", false, false, false, 66) > 1)) {
                // line 67
                yield "                    <nav class=\"flex items-center gap-2\">
                        ";
                // line 68
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 68, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 68) > 1)) {
                    // line 69
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 69, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 69) - 1)]), "html", null, true);
                    yield "\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Previous
                            </a>
                        ";
                }
                // line 73
                yield "                        
                        ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 74, $this->source); })()), "getPageCount", [], "method", false, false, false, 74)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 75
                    yield "                            <a 
                                href=\"";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.index", ["page" => $context["page"]]), "html", null, true);
                    yield "\"
                                class=\"px-4 py-2 rounded ";
                    // line 77
                    if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 77, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 77))) {
                        yield "bg-blue-600 text-white";
                    } else {
                        yield "bg-gray-200 hover:bg-gray-300";
                    }
                    yield "\"
                            >
                                ";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                            </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                yield "                        
                        ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 83, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 83) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 83, $this->source); })()), "getPageCount", [], "method", false, false, false, 83))) {
                    // line 84
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 84, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 84) + 1)]), "html", null, true);
                    yield "\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Next
                            </a>
                        ";
                }
                // line 88
                yield "                    </nav>
                ";
            }
            // line 90
            yield "            </div>
        ";
        } else {
            // line 92
            yield "            <div class=\"text-center py-16\">
                <p class=\"text-xl text-gray-600\">No Pokémons found</p>
            </div>
        ";
        }
        // line 96
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pokemon/index.html.twig";
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
        return array (  316 => 96,  310 => 92,  306 => 90,  302 => 88,  294 => 84,  292 => 83,  289 => 82,  280 => 79,  271 => 77,  267 => 76,  264 => 75,  260 => 74,  257 => 73,  249 => 69,  247 => 68,  244 => 67,  242 => 66,  236 => 62,  226 => 57,  220 => 54,  217 => 53,  214 => 52,  208 => 49,  205 => 48,  203 => 47,  195 => 42,  187 => 36,  183 => 34,  175 => 32,  173 => 31,  166 => 27,  163 => 26,  157 => 25,  154 => 24,  151 => 23,  148 => 22,  143 => 21,  141 => 20,  138 => 19,  132 => 18,  129 => 17,  126 => 16,  123 => 15,  118 => 14,  115 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pokémons{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <h1 class=\"text-4xl font-bold mb-8\">Pokémons</h1>

        <!-- Cards Grid -->
        {% if pokemons.items|length > 0 %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                {% for pokemon in pokemons %}
                    {% set frenchName = null %}
                    {% for translation in pokemon.getTranslations() %}
                        {% if translation.getLang() == 'fr' %}
                            {% set frenchName = translation.getName() %}
                        {% endif %}
                    {% endfor %}
                    
                    {% set sprite = null %}
                    {% for sprite_item in pokemon.getSprites() %}
                        {% if sprite_item.getName() == 'front_default' %}
                            {% set sprite = sprite_item %}
                        {% endif %}
                    {% endfor %}

                    <a href=\"{{ path('pokemon.show', {'id': pokemon.id}) }}\" class=\"block\">
                        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow cursor-pointer\">
                            <!-- Sprite -->
                            <div class=\"bg-gray-100 h-48 flex items-center justify-center\">
                                {% if sprite %}
                                    <img src=\"{{ sprite.getUrl() }}\" alt=\"{{ frenchName }}\" class=\"h-40 w-40 object-contain\">
                                {% else %}
                                    <div class=\"text-gray-400\">No sprite</div>
                                {% endif %}
                            </div>
                            
                            <!-- Card Body -->
                            <div class=\"p-4\">
                                <!-- Name -->
                                <h3 class=\"text-lg font-bold text-gray-800 mb-4\">
                                    {{ frenchName ?? 'Unknown' }}
                                </h3>
                                
                                <!-- Types -->
                                <div class=\"flex gap-2\">
                                    {% if pokemon.getType1() %}
                                        <span class=\"px-3 py-1 bg-blue-600 text-white rounded-full text-sm font-bold\">
                                            {{ pokemon.getType1().getNameFR() }}
                                        </span>
                                    {% endif %}
                                    {% if pokemon.getType2() %}
                                        <span class=\"px-3 py-1 bg-red-600 text-white rounded-full text-sm font-bold\">
                                            {{ pokemon.getType2().getNameFR() }}
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </a>
                {% endfor %}
            </div>

            <!-- Pagination -->
            <div class=\"flex justify-center mt-8 gap-2\">
                {% if pokemons.getPageCount() > 1 %}
                    <nav class=\"flex items-center gap-2\">
                        {% if (pokemons.getCurrentPageNumber() > 1) %}
                            <a href=\"{{ path('pokemon.index', {'page': (pokemons.getCurrentPageNumber() - 1)}) }}\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Previous
                            </a>
                        {% endif %}
                        
                        {% for page in 1..pokemons.getPageCount() %}
                            <a 
                                href=\"{{ path('pokemon.index', {'page': page}) }}\"
                                class=\"px-4 py-2 rounded {% if page == pokemons.getCurrentPageNumber() %}bg-blue-600 text-white{% else %}bg-gray-200 hover:bg-gray-300{% endif %}\"
                            >
                                {{ page }}
                            </a>
                        {% endfor %}
                        
                        {% if (pokemons.getCurrentPageNumber() < pokemons.getPageCount()) %}
                            <a href=\"{{ path('pokemon.index', {'page': (pokemons.getCurrentPageNumber() + 1)}) }}\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Next
                            </a>
                        {% endif %}
                    </nav>
                {% endif %}
            </div>
        {% else %}
            <div class=\"text-center py-16\">
                <p class=\"text-xl text-gray-600\">No Pokémons found</p>
            </div>
        {% endif %}
    </div>
{% endblock %}

", "pokemon/index.html.twig", "C:\\Users\\solla\\Documents\\GitHub\\2e-annee-UE2\\templates\\pokemon\\index.html.twig");
    }
}
