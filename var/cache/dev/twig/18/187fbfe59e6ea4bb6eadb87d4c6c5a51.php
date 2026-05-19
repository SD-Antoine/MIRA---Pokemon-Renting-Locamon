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

/* shop/index.html.twig */
class __TwigTemplate_e586f3d2ab03fd8245ea5ff3b25215e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

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

        yield "Shop - Locamons for Sale";
        
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
        <h1 class=\"text-4xl font-bold mb-8\">Locamon Shop</h1>
        
        <!-- Search Bar -->
        <div class=\"mb-8\">
            <form method=\"GET\" class=\"flex gap-2\">
                <input 
                    type=\"text\" 
                    name=\"search\" 
                    placeholder=\"Search by name or nickname...\" 
                    value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\"
                    class=\"flex-1 px-4 py-2 border border-gray-300 rounded\"
                >
                <button type=\"submit\" class=\"px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Search
                </button>
                ";
        // line 22
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index");
            yield "\" class=\"px-6 py-2 bg-gray-400 text-white rounded hover:bg-gray-500\">
                        Clear
                    </a>
                ";
        }
        // line 27
        yield "            </form>
        </div>

        <!-- Cards Grid -->
        ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 31, $this->source); })()), "items", [], "any", false, false, false, 31)) > 0)) {
            // line 32
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locamon"]) {
                // line 34
                yield "                    ";
                $context["pokemon"] = CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "getPokemon", [], "method", false, false, false, 34);
                // line 35
                yield "                    ";
                $context["frenchName"] = null;
                // line 36
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 36, $this->source); })()), "getTranslations", [], "method", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                    // line 37
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getLang", [], "method", false, false, false, 37) == "fr")) {
                        // line 38
                        yield "                            ";
                        $context["frenchName"] = CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getName", [], "method", false, false, false, 38);
                        // line 39
                        yield "                        ";
                    }
                    // line 40
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                    
                    ";
                // line 42
                $context["sprite"] = null;
                // line 43
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 43, $this->source); })()), "getSprites", [], "method", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["sprite_item"]) {
                    // line 44
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "isShiny", [], "method", false, false, false, 44) && (CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 44) == "front_shiny"))) {
                        // line 45
                        yield "                            ";
                        $context["sprite"] = $context["sprite_item"];
                        // line 46
                        yield "                        ";
                    } elseif (( !CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "isShiny", [], "method", false, false, false, 46) && (CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 46) == "front_default"))) {
                        // line 47
                        yield "                            ";
                        $context["sprite"] = $context["sprite_item"];
                        // line 48
                        yield "                        ";
                    }
                    // line 49
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sprite_item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "
                    <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" class=\"block\">
                        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow cursor-pointer\">
                            <!-- Sprite -->
                            <div class=\"bg-gray-100 h-48 flex items-center justify-center\">
                                ";
                // line 55
                if ((($tmp = (isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 56
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 56, $this->source); })()), "getUrl", [], "method", false, false, false, 56), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["frenchName"]) || array_key_exists("frenchName", $context) ? $context["frenchName"] : (function () { throw new RuntimeError('Variable "frenchName" does not exist.', 56, $this->source); })()), "html", null, true);
                    yield "\" class=\"h-40 w-40 object-contain\">
                                ";
                } else {
                    // line 58
                    yield "                                    <div class=\"text-gray-400\">No sprite</div>
                                ";
                }
                // line 60
                yield "                            </div>
                            
                            <!-- Card Body -->
                            <div class=\"p-4\">
                                <!-- Name and Nickname -->
                                <h3 class=\"text-lg font-bold text-gray-800\">
                                    ";
                // line 66
                yield (((array_key_exists("frenchName", $context) &&  !(null === $context["frenchName"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["frenchName"], "html", null, true)) : ("Unknown"));
                yield "
                                    ";
                // line 67
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "getNickname", [], "method", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                                        <span class=\"text-sm text-gray-600\">(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "getNickname", [], "method", false, false, false, 68), "html", null, true);
                    yield ")</span>
                                    ";
                }
                // line 70
                yield "                                </h3>
                                
                                <!-- Shiny Badge -->
                                ";
                // line 73
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "isShiny", [], "method", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 74
                    yield "                                    <div class=\"inline-block mt-2 px-3 py-1 bg-yellow-300 text-yellow-900 rounded-full text-xs font-bold\">
                                        ✨ Shiny
                                    </div>
                                ";
                }
                // line 78
                yield "                                
                                <!-- Price -->
                                <div class=\"mt-4 text-2xl font-bold text-green-600\">
                                    ";
                // line 81
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "getPrice", [], "method", false, false, false, 81) / 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["locamon"], "getPrice", [], "method", false, false, false, 81) / 100) . "\$"), "html", null, true)) : ("N/A"));
                yield "
                                </div>
                                <div class=\"text-sm text-gray-600\">per day</div>
                            </div>
                        </div>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locamon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "            </div>

            <!-- Pagination -->
            <div class=\"flex justify-center mt-8 gap-2\">
                ";
            // line 92
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 92, $this->source); })()), "getPageCount", [], "method", false, false, false, 92) > 1)) {
                // line 93
                yield "                    <nav class=\"flex items-center gap-2\">
                        ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 94, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 94) > 1)) {
                    // line 95
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 95, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 95) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 95, $this->source); })())]), "html", null, true);
                    yield "\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Previous
                            </a>
                        ";
                }
                // line 99
                yield "                        
                        ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 100, $this->source); })()), "getPageCount", [], "method", false, false, false, 100)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 101
                    yield "                            <a 
                                href=\"";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index", ["page" => $context["page"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 102, $this->source); })())]), "html", null, true);
                    yield "\"
                                class=\"px-4 py-2 rounded ";
                    // line 103
                    if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 103, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 103))) {
                        yield "bg-blue-600 text-white";
                    } else {
                        yield "bg-gray-200 hover:bg-gray-300";
                    }
                    yield "\"
                            >
                                ";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                            </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                yield "                        
                        ";
                // line 109
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 109, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 109) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 109, $this->source); })()), "getPageCount", [], "method", false, false, false, 109))) {
                    // line 110
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 110, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 110) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 110, $this->source); })())]), "html", null, true);
                    yield "\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Next
                            </a>
                        ";
                }
                // line 114
                yield "                    </nav>
                ";
            }
            // line 116
            yield "            </div>
        ";
        } else {
            // line 118
            yield "            <div class=\"text-center py-16\">
                <p class=\"text-xl text-gray-600\">No Locamons found</p>
                ";
            // line 120
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                    <p class=\"text-gray-500 mt-2\">Try a different search term</p>
                    <a href=\"";
                // line 122
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index");
                yield "\" class=\"inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                        View All
                    </a>
                ";
            }
            // line 126
            yield "            </div>
        ";
        }
        // line 128
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
        return "shop/index.html.twig";
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
        return array (  372 => 128,  368 => 126,  361 => 122,  358 => 121,  356 => 120,  352 => 118,  348 => 116,  344 => 114,  336 => 110,  334 => 109,  331 => 108,  322 => 105,  313 => 103,  309 => 102,  306 => 101,  302 => 100,  299 => 99,  291 => 95,  289 => 94,  286 => 93,  284 => 92,  278 => 88,  265 => 81,  260 => 78,  254 => 74,  252 => 73,  247 => 70,  241 => 68,  239 => 67,  235 => 66,  227 => 60,  223 => 58,  215 => 56,  213 => 55,  206 => 51,  203 => 50,  197 => 49,  194 => 48,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  177 => 43,  175 => 42,  172 => 41,  166 => 40,  163 => 39,  160 => 38,  157 => 37,  152 => 36,  149 => 35,  146 => 34,  142 => 33,  139 => 32,  137 => 31,  131 => 27,  123 => 23,  121 => 22,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Shop - Locamons for Sale{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <h1 class=\"text-4xl font-bold mb-8\">Locamon Shop</h1>
        
        <!-- Search Bar -->
        <div class=\"mb-8\">
            <form method=\"GET\" class=\"flex gap-2\">
                <input 
                    type=\"text\" 
                    name=\"search\" 
                    placeholder=\"Search by name or nickname...\" 
                    value=\"{{ search }}\"
                    class=\"flex-1 px-4 py-2 border border-gray-300 rounded\"
                >
                <button type=\"submit\" class=\"px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Search
                </button>
                {% if search %}
                    <a href=\"{{ path('shop.index') }}\" class=\"px-6 py-2 bg-gray-400 text-white rounded hover:bg-gray-500\">
                        Clear
                    </a>
                {% endif %}
            </form>
        </div>

        <!-- Cards Grid -->
        {% if locamons.items|length > 0 %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                {% for locamon in locamons %}
                    {% set pokemon = locamon.getPokemon() %}
                    {% set frenchName = null %}
                    {% for translation in pokemon.getTranslations() %}
                        {% if translation.getLang() == 'fr' %}
                            {% set frenchName = translation.getName() %}
                        {% endif %}
                    {% endfor %}
                    
                    {% set sprite = null %}
                    {% for sprite_item in pokemon.getSprites() %}
                        {% if locamon.isShiny() and sprite_item.getName() == 'front_shiny' %}
                            {% set sprite = sprite_item %}
                        {% elseif not locamon.isShiny() and sprite_item.getName() == 'front_default' %}
                            {% set sprite = sprite_item %}
                        {% endif %}
                    {% endfor %}

                    <a href=\"{{ path('shop.show', {'id': locamon.id}) }}\" class=\"block\">
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
                                <!-- Name and Nickname -->
                                <h3 class=\"text-lg font-bold text-gray-800\">
                                    {{ frenchName ?? 'Unknown' }}
                                    {% if locamon.getNickname() %}
                                        <span class=\"text-sm text-gray-600\">({{ locamon.getNickname() }})</span>
                                    {% endif %}
                                </h3>
                                
                                <!-- Shiny Badge -->
                                {% if locamon.isShiny() %}
                                    <div class=\"inline-block mt-2 px-3 py-1 bg-yellow-300 text-yellow-900 rounded-full text-xs font-bold\">
                                        ✨ Shiny
                                    </div>
                                {% endif %}
                                
                                <!-- Price -->
                                <div class=\"mt-4 text-2xl font-bold text-green-600\">
                                    {{ locamon.getPrice()/100 ? locamon.getPrice()/100 ~ '\$' : 'N/A' }}
                                </div>
                                <div class=\"text-sm text-gray-600\">per day</div>
                            </div>
                        </div>
                    </a>
                {% endfor %}
            </div>

            <!-- Pagination -->
            <div class=\"flex justify-center mt-8 gap-2\">
                {% if locamons.getPageCount() > 1 %}
                    <nav class=\"flex items-center gap-2\">
                        {% if (locamons.getCurrentPageNumber() > 1) %}
                            <a href=\"{{ path('shop.index', {'page': (locamons.getCurrentPageNumber() - 1), 'search': search}) }}\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Previous
                            </a>
                        {% endif %}
                        
                        {% for page in 1..locamons.getPageCount() %}
                            <a 
                                href=\"{{ path('shop.index', {'page': page, 'search': search}) }}\"
                                class=\"px-4 py-2 rounded {% if page == locamons.getCurrentPageNumber() %}bg-blue-600 text-white{% else %}bg-gray-200 hover:bg-gray-300{% endif %}\"
                            >
                                {{ page }}
                            </a>
                        {% endfor %}
                        
                        {% if (locamons.getCurrentPageNumber() < locamons.getPageCount()) %}
                            <a href=\"{{ path('shop.index', {'page': (locamons.getCurrentPageNumber() + 1), 'search': search}) }}\" class=\"px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                                Next
                            </a>
                        {% endif %}
                    </nav>
                {% endif %}
            </div>
        {% else %}
            <div class=\"text-center py-16\">
                <p class=\"text-xl text-gray-600\">No Locamons found</p>
                {% if search %}
                    <p class=\"text-gray-500 mt-2\">Try a different search term</p>
                    <a href=\"{{ path('shop.index') }}\" class=\"inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                        View All
                    </a>
                {% endif %}
            </div>
        {% endif %}
    </div>
{% endblock %}


", "shop/index.html.twig", "C:\\Users\\solla\\Documents\\GitHub\\2e-annee-UE2\\templates\\shop\\index.html.twig");
    }
}
