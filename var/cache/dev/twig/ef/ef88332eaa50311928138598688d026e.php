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

/* shop/show.html.twig */
class __TwigTemplate_c67cd431400d297e2db3e5d41d5dec45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/show.html.twig"));

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

        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 3, $this->source); })()), "getNickname", [], "method", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 3, $this->source); })()), "getNickname", [], "method", false, false, false, 3) . " - Locamon Details"), "html", null, true)) : ("Locamon Details"));
        
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
        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index");
        yield "\" class=\"text-blue-600 hover:text-blue-800 mb-4 inline-block\">
            ← Back to Shop
        </a>

        ";
        // line 11
        $context["pokemon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 11, $this->source); })()), "getPokemon", [], "method", false, false, false, 11);
        // line 12
        yield "        ";
        $context["frenchName"] = null;
        // line 13
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 13, $this->source); })()), "getTranslations", [], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 14
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getLang", [], "method", false, false, false, 14) == "fr")) {
                // line 15
                yield "                ";
                $context["frenchName"] = CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getName", [], "method", false, false, false, 15);
                // line 16
                yield "            ";
            }
            // line 17
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
        ";
        // line 19
        $context["sprite"] = null;
        // line 20
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 20, $this->source); })()), "getSprites", [], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["sprite_item"]) {
            // line 21
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 21, $this->source); })()), "isShiny", [], "method", false, false, false, 21) && (CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 21) == "front_shiny"))) {
                // line 22
                yield "                ";
                $context["sprite"] = $context["sprite_item"];
                // line 23
                yield "            ";
            } elseif (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 23, $this->source); })()), "isShiny", [], "method", false, false, false, 23) && (CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 23) == "front_default"))) {
                // line 24
                yield "                ";
                $context["sprite"] = $context["sprite_item"];
                // line 25
                yield "            ";
            }
            // line 26
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sprite_item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Left: Sprite -->
            <div class=\"md:col-span-1\">
                <div class=\"bg-gray-100 rounded-lg p-8 flex items-center justify-center\">
                    ";
        // line 32
        if ((($tmp = (isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 33, $this->source); })()), "getUrl", [], "method", false, false, false, 33), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["frenchName"]) || array_key_exists("frenchName", $context) ? $context["frenchName"] : (function () { throw new RuntimeError('Variable "frenchName" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "\" class=\"h-64 w-64 object-contain\">
                    ";
        } else {
            // line 35
            yield "                        <div class=\"text-gray-400 text-center\">
                            <p>No sprite available</p>
                        </div>
                    ";
        }
        // line 39
        yield "                </div>
            </div>

            <!-- Right: Details -->
            <div class=\"md:col-span-2\">
                <!-- Name and Nickname -->
                <h1 class=\"text-4xl font-bold text-gray-800 mb-2\">
                    ";
        // line 46
        yield (((array_key_exists("frenchName", $context) &&  !(null === $context["frenchName"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["frenchName"], "html", null, true)) : ("Unknown"));
        yield "
                </h1>
                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 48, $this->source); })()), "getNickname", [], "method", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                    <p class=\"text-2xl text-gray-600 mb-4\">Nickname: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 49, $this->source); })()), "getNickname", [], "method", false, false, false, 49), "html", null, true);
            yield "</p>
                ";
        }
        // line 51
        yield "
                <!-- Shiny Badge -->
                ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 53, $this->source); })()), "isShiny", [], "method", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    <div class=\"mb-6 inline-block px-4 py-2 bg-yellow-300 text-yellow-900 rounded-full text-lg font-bold\">
                        ✨ Shiny
                    </div>
                ";
        }
        // line 58
        yield "
                <!-- Types -->
                <div class=\"mb-6\">
                    <h3 class=\"text-lg font-bold mb-2\">Types:</h3>
                    <div class=\"flex gap-2\">
                        ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 63, $this->source); })()), "getType1", [], "method", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                            <span class=\"px-4 py-2 bg-blue-600 text-white rounded-full font-bold\">
                                ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 65, $this->source); })()), "getType1", [], "method", false, false, false, 65), "getNameFR", [], "method", false, false, false, 65), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 68
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 68, $this->source); })()), "getType2", [], "method", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                            <span class=\"px-4 py-2 bg-red-600 text-white rounded-full font-bold\">
                                ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 70, $this->source); })()), "getType2", [], "method", false, false, false, 70), "getNameFR", [], "method", false, false, false, 70), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 73
        yield "                    </div>
                </div>

                <!-- Price -->
                <div class=\"mb-8 p-4 bg-green-50 rounded-lg border-2 border-green-200\">
                    <p class=\"text-gray-600 mb-2\">Coût journalier:</p>
                    <p class=\"text-4xl font-bold text-green-600\">
                        ";
        // line 80
        $context["storedPrice"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 80, $this->source); })()), "getPrice", [], "method", false, false, false, 80);
        // line 81
        yield "                        ";
        if ((null === (isset($context["storedPrice"]) || array_key_exists("storedPrice", $context) ? $context["storedPrice"] : (function () { throw new RuntimeError('Variable "storedPrice" does not exist.', 81, $this->source); })()))) {
            // line 82
            yield "                            N/A
                        ";
        } elseif ((        // line 83
(isset($context["storedPrice"]) || array_key_exists("storedPrice", $context) ? $context["storedPrice"] : (function () { throw new RuntimeError('Variable "storedPrice" does not exist.', 83, $this->source); })()) > 10000)) {
            // line 84
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["storedPrice"]) || array_key_exists("storedPrice", $context) ? $context["storedPrice"] : (function () { throw new RuntimeError('Variable "storedPrice" does not exist.', 84, $this->source); })()) / 100), 2, ",", " "), "html", null, true);
            yield " €
                        ";
        } else {
            // line 86
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["storedPrice"]) || array_key_exists("storedPrice", $context) ? $context["storedPrice"] : (function () { throw new RuntimeError('Variable "storedPrice" does not exist.', 86, $this->source); })()), "html", null, true);
            yield " €
                        ";
        }
        // line 88
        yield "                    </p>
                </div>

                ";
        // line 92
        yield "                ";
        if (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 92, $this->source); })()), "getStock", [], "method", false, false, false, 92)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 92, $this->source); })()), "getStock", [], "method", false, false, false, 92) > 0))) {
            // line 93
            yield "                    <div class=\"mb-6\">
                        <form action=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 94, $this->source); })()), "getId", [], "method", false, false, false, 94)]), "html", null, true);
            yield "\" method=\"POST\" class=\"flex items-center gap-3\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("checkout" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 95, $this->source); })()), "getId", [], "method", false, false, false, 95))), "html", null, true);
            yield "\">

                            <label for=\"days\" class=\"font-semibold\">Durée (jours):</label>
                            <input id=\"days\" name=\"days\" type=\"number\" min=\"1\" value=\"1\" class=\"w-24 px-3 py-2 border rounded\" required>

                            <button type=\"submit\" class=\"inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 font-bold\">
                                Réserver
                            </button>
                        </form>
                        ";
            // line 104
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 104, $this->source); })()), "getStock", [], "method", false, false, false, 104))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                            <p class=\"text-sm text-gray-600 mt-2\">Stock disponible: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 105, $this->source); })()), "getStock", [], "method", false, false, false, 105), "html", null, true);
                yield "</p>
                        ";
            } else {
                // line 107
                yield "                            <p class=\"text-sm text-gray-600 mt-2\">Stock: Illimité</p>
                        ";
            }
            // line 109
            yield "                    </div>
                ";
        } else {
            // line 111
            yield "                    <div class=\"mb-6\">
                        <p class=\"text-red-600 font-bold\">En rupture de stock</p>
                    </div>
                ";
        }
        // line 115
        yield "
                <!-- Locamon Details -->
                <div class=\"bg-gray-50 p-6 rounded-lg mb-8\">
                    <h3 class=\"text-xl font-bold mb-4\">Details Locamon</h3>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <div>
                            <p class=\"text-gray-600 font-semibold\">Niveau:</p>
                            <p class=\"text-2xl\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 122, $this->source); })()), "getLevel", [], "method", false, false, false, 122), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <p class=\"text-gray-600 font-semibold\">Nature:</p>
                            <p class=\"text-2xl\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 126, $this->source); })()), "getNature", [], "method", false, false, false, 126), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <p class=\"text-gray-600 font-semibold\">Stock:</p>
                            <p class=\"text-2xl\">";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getStock", [], "method", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 130, $this->source); })()), "getStock", [], "method", false, false, false, 130)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 130, $this->source); })()), "getStock", [], "method", false, false, false, 130), "html", null, true)) : ("Unlimited"));
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Base Stats -->
        <div class=\"mt-12\">
            <h2 class=\"text-3xl font-bold mb-6\">Base Stats</h2>
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                <!-- HP -->
                <div class=\"bg-red-50 p-6 rounded-lg border-2 border-red-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">HP</p>
                    <p class=\"text-4xl font-bold text-red-600\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 144, $this->source); })()), "getHp", [], "method", false, false, false, 144), "html", null, true);
        yield "</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-red-600 h-2 rounded-full\" style=\"width: ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 146, $this->source); })()), "getHp", [], "method", false, false, false, 146) / 255) * 100), "html", null, true);
        yield "%\"></div>
                    </div>
                </div>

                <!-- Attack -->
                <div class=\"bg-orange-50 p-6 rounded-lg border-2 border-orange-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Attack</p>
                    <p class=\"text-4xl font-bold text-orange-600\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 153, $this->source); })()), "getAtk", [], "method", false, false, false, 153), "html", null, true);
        yield "</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-orange-600 h-2 rounded-full\" style=\"width: ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 155, $this->source); })()), "getAtk", [], "method", false, false, false, 155) / 255) * 100), "html", null, true);
        yield "%\"></div>
                    </div>
                </div>

                <!-- Defense -->
                <div class=\"bg-yellow-50 p-6 rounded-lg border-2 border-yellow-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Defense</p>
                    <p class=\"text-4xl font-bold text-yellow-600\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 162, $this->source); })()), "getDef", [], "method", false, false, false, 162), "html", null, true);
        yield "</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-yellow-600 h-2 rounded-full\" style=\"width: ";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 164, $this->source); })()), "getDef", [], "method", false, false, false, 164) / 255) * 100), "html", null, true);
        yield "%\"></div>
                    </div>
                </div>

                <!-- Sp. Attack -->
                <div class=\"bg-blue-50 p-6 rounded-lg border-2 border-blue-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Sp. Attack</p>
                    <p class=\"text-4xl font-bold text-blue-600\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 171, $this->source); })()), "getSpAtk", [], "method", false, false, false, 171), "html", null, true);
        yield "</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-blue-600 h-2 rounded-full\" style=\"width: ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 173, $this->source); })()), "getSpAtk", [], "method", false, false, false, 173) / 255) * 100), "html", null, true);
        yield "%\"></div>
                    </div>
                </div>

                <!-- Sp. Defense -->
                <div class=\"bg-green-50 p-6 rounded-lg border-2 border-green-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Sp. Defense</p>
                    <p class=\"text-4xl font-bold text-green-600\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 180, $this->source); })()), "getSpDef", [], "method", false, false, false, 180), "html", null, true);
        yield "</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-green-600 h-2 rounded-full\" style=\"width: ";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 182, $this->source); })()), "getSpDef", [], "method", false, false, false, 182) / 255) * 100), "html", null, true);
        yield "%\"></div>
                    </div>
                </div>

                <!-- Speed -->
                <div class=\"bg-purple-50 p-6 rounded-lg border-2 border-purple-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Speed</p>
                    <p class=\"text-4xl font-bold text-purple-600\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 189, $this->source); })()), "getSpd", [], "method", false, false, false, 189), "html", null, true);
        yield "</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-purple-600 h-2 rounded-full\" style=\"width: ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 191, $this->source); })()), "getSpd", [], "method", false, false, false, 191) / 255) * 100), "html", null, true);
        yield "%\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- IVs and EVs -->
        <div class=\"mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8\">
            <!-- IVs -->
            <div>
                <h3 class=\"text-2xl font-bold mb-4\">Individual Values (IVs)</h3>
                <div class=\"bg-gray-50 p-6 rounded-lg\">
                    <div class=\"space-y-2 text-sm\">
                        <p>HP: <span class=\"font-bold\">";
        // line 204
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getIvHp", [], "method", true, true, false, 204) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 204, $this->source); })()), "getIvHp", [], "method", false, false, false, 204)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 204, $this->source); })()), "getIvHp", [], "method", false, false, false, 204), "html", null, true)) : ("-"));
        yield "</span>/31</p>
                        <p>ATK: <span class=\"font-bold\">";
        // line 205
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getIvAtk", [], "method", true, true, false, 205) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 205, $this->source); })()), "getIvAtk", [], "method", false, false, false, 205)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 205, $this->source); })()), "getIvAtk", [], "method", false, false, false, 205), "html", null, true)) : ("-"));
        yield "</span>/31</p>
                        <p>DEF: <span class=\"font-bold\">";
        // line 206
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getIvDef", [], "method", true, true, false, 206) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 206, $this->source); })()), "getIvDef", [], "method", false, false, false, 206)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 206, $this->source); })()), "getIvDef", [], "method", false, false, false, 206), "html", null, true)) : ("-"));
        yield "</span>/31</p>
                        <p>SP.ATK: <span class=\"font-bold\">";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getIvSpAtk", [], "method", true, true, false, 207) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 207, $this->source); })()), "getIvSpAtk", [], "method", false, false, false, 207)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 207, $this->source); })()), "getIvSpAtk", [], "method", false, false, false, 207), "html", null, true)) : ("-"));
        yield "</span>/31</p>
                        <p>SP.DEF: <span class=\"font-bold\">";
        // line 208
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getIvSpDef", [], "method", true, true, false, 208) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 208, $this->source); })()), "getIvSpDef", [], "method", false, false, false, 208)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 208, $this->source); })()), "getIvSpDef", [], "method", false, false, false, 208), "html", null, true)) : ("-"));
        yield "</span>/31</p>
                        <p>SPD: <span class=\"font-bold\">";
        // line 209
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getIvSpd", [], "method", true, true, false, 209) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 209, $this->source); })()), "getIvSpd", [], "method", false, false, false, 209)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 209, $this->source); })()), "getIvSpd", [], "method", false, false, false, 209), "html", null, true)) : ("-"));
        yield "</span>/31</p>
                    </div>
                </div>
            </div>

            <!-- EVs -->
            <div>
                <h3 class=\"text-2xl font-bold mb-4\">Effort Values (EVs)</h3>
                <div class=\"bg-gray-50 p-6 rounded-lg\">
                    <div class=\"space-y-2 text-sm\">
                        <p>HP: <span class=\"font-bold\">";
        // line 219
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getEvHp", [], "method", true, true, false, 219) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 219, $this->source); })()), "getEvHp", [], "method", false, false, false, 219)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 219, $this->source); })()), "getEvHp", [], "method", false, false, false, 219), "html", null, true)) : ("-"));
        yield "</span>/252</p>
                        <p>ATK: <span class=\"font-bold\">";
        // line 220
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getEvAtk", [], "method", true, true, false, 220) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 220, $this->source); })()), "getEvAtk", [], "method", false, false, false, 220)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 220, $this->source); })()), "getEvAtk", [], "method", false, false, false, 220), "html", null, true)) : ("-"));
        yield "</span>/252</p>
                        <p>DEF: <span class=\"font-bold\">";
        // line 221
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getEvDef", [], "method", true, true, false, 221) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 221, $this->source); })()), "getEvDef", [], "method", false, false, false, 221)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 221, $this->source); })()), "getEvDef", [], "method", false, false, false, 221), "html", null, true)) : ("-"));
        yield "</span>/252</p>
                        <p>SP.ATK: <span class=\"font-bold\">";
        // line 222
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getEvSpAtk", [], "method", true, true, false, 222) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 222, $this->source); })()), "getEvSpAtk", [], "method", false, false, false, 222)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 222, $this->source); })()), "getEvSpAtk", [], "method", false, false, false, 222), "html", null, true)) : ("-"));
        yield "</span>/252</p>
                        <p>SP.DEF: <span class=\"font-bold\">";
        // line 223
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getEvSpDef", [], "method", true, true, false, 223) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 223, $this->source); })()), "getEvSpDef", [], "method", false, false, false, 223)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 223, $this->source); })()), "getEvSpDef", [], "method", false, false, false, 223), "html", null, true)) : ("-"));
        yield "</span>/252</p>
                        <p>SPD: <span class=\"font-bold\">";
        // line 224
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locamon"] ?? null), "getEvSpd", [], "method", true, true, false, 224) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 224, $this->source); })()), "getEvSpd", [], "method", false, false, false, 224)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locamon"]) || array_key_exists("locamon", $context) ? $context["locamon"] : (function () { throw new RuntimeError('Variable "locamon" does not exist.', 224, $this->source); })()), "getEvSpd", [], "method", false, false, false, 224), "html", null, true)) : ("-"));
        yield "</span>/252</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class=\"mt-12 text-center\">
            <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index");
        yield "\" class=\"inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-bold\">
                ← Back to Shop
            </a>
        </div>
    </div>
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
        return "shop/show.html.twig";
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
        return array (  533 => 232,  522 => 224,  518 => 223,  514 => 222,  510 => 221,  506 => 220,  502 => 219,  489 => 209,  485 => 208,  481 => 207,  477 => 206,  473 => 205,  469 => 204,  453 => 191,  448 => 189,  438 => 182,  433 => 180,  423 => 173,  418 => 171,  408 => 164,  403 => 162,  393 => 155,  388 => 153,  378 => 146,  373 => 144,  356 => 130,  349 => 126,  342 => 122,  333 => 115,  327 => 111,  323 => 109,  319 => 107,  313 => 105,  311 => 104,  299 => 95,  295 => 94,  292 => 93,  289 => 92,  284 => 88,  278 => 86,  272 => 84,  270 => 83,  267 => 82,  264 => 81,  262 => 80,  253 => 73,  247 => 70,  244 => 69,  241 => 68,  235 => 65,  232 => 64,  230 => 63,  223 => 58,  217 => 54,  215 => 53,  211 => 51,  205 => 49,  203 => 48,  198 => 46,  189 => 39,  183 => 35,  175 => 33,  173 => 32,  166 => 27,  160 => 26,  157 => 25,  154 => 24,  151 => 23,  148 => 22,  145 => 21,  140 => 20,  138 => 19,  135 => 18,  129 => 17,  126 => 16,  123 => 15,  120 => 14,  115 => 13,  112 => 12,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ locamon.getNickname() ? locamon.getNickname() ~ ' - Locamon Details' : 'Locamon Details' }}{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <a href=\"{{ path('shop.index') }}\" class=\"text-blue-600 hover:text-blue-800 mb-4 inline-block\">
            ← Back to Shop
        </a>

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

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Left: Sprite -->
            <div class=\"md:col-span-1\">
                <div class=\"bg-gray-100 rounded-lg p-8 flex items-center justify-center\">
                    {% if sprite %}
                        <img src=\"{{ sprite.getUrl() }}\" alt=\"{{ frenchName }}\" class=\"h-64 w-64 object-contain\">
                    {% else %}
                        <div class=\"text-gray-400 text-center\">
                            <p>No sprite available</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Right: Details -->
            <div class=\"md:col-span-2\">
                <!-- Name and Nickname -->
                <h1 class=\"text-4xl font-bold text-gray-800 mb-2\">
                    {{ frenchName ?? 'Unknown' }}
                </h1>
                {% if locamon.getNickname() %}
                    <p class=\"text-2xl text-gray-600 mb-4\">Nickname: {{ locamon.getNickname() }}</p>
                {% endif %}

                <!-- Shiny Badge -->
                {% if locamon.isShiny() %}
                    <div class=\"mb-6 inline-block px-4 py-2 bg-yellow-300 text-yellow-900 rounded-full text-lg font-bold\">
                        ✨ Shiny
                    </div>
                {% endif %}

                <!-- Types -->
                <div class=\"mb-6\">
                    <h3 class=\"text-lg font-bold mb-2\">Types:</h3>
                    <div class=\"flex gap-2\">
                        {% if pokemon.getType1() %}
                            <span class=\"px-4 py-2 bg-blue-600 text-white rounded-full font-bold\">
                                {{ pokemon.getType1().getNameFR() }}
                            </span>
                        {% endif %}
                        {% if pokemon.getType2() %}
                            <span class=\"px-4 py-2 bg-red-600 text-white rounded-full font-bold\">
                                {{ pokemon.getType2().getNameFR() }}
                            </span>
                        {% endif %}
                    </div>
                </div>

                <!-- Price -->
                <div class=\"mb-8 p-4 bg-green-50 rounded-lg border-2 border-green-200\">
                    <p class=\"text-gray-600 mb-2\">Coût journalier:</p>
                    <p class=\"text-4xl font-bold text-green-600\">
                        {% set storedPrice = locamon.getPrice() %}
                        {% if storedPrice is null %}
                            N/A
                        {% elseif storedPrice > 10000 %}
                            {{ (storedPrice / 100) | number_format(2, ',', ' ') }} €
                        {% else %}
                            {{ storedPrice }} €
                        {% endif %}
                    </p>
                </div>

                {# Reservation form shown only if stock > 0 or stock is null (unlimited) #}
                {% if locamon.getStock() is null or locamon.getStock() > 0 %}
                    <div class=\"mb-6\">
                        <form action=\"{{ path('shop.checkout', {id: locamon.getId()}) }}\" method=\"POST\" class=\"flex items-center gap-3\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('checkout' ~ locamon.getId()) }}\">

                            <label for=\"days\" class=\"font-semibold\">Durée (jours):</label>
                            <input id=\"days\" name=\"days\" type=\"number\" min=\"1\" value=\"1\" class=\"w-24 px-3 py-2 border rounded\" required>

                            <button type=\"submit\" class=\"inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 font-bold\">
                                Réserver
                            </button>
                        </form>
                        {% if locamon.getStock() is not null %}
                            <p class=\"text-sm text-gray-600 mt-2\">Stock disponible: {{ locamon.getStock() }}</p>
                        {% else %}
                            <p class=\"text-sm text-gray-600 mt-2\">Stock: Illimité</p>
                        {% endif %}
                    </div>
                {% else %}
                    <div class=\"mb-6\">
                        <p class=\"text-red-600 font-bold\">En rupture de stock</p>
                    </div>
                {% endif %}

                <!-- Locamon Details -->
                <div class=\"bg-gray-50 p-6 rounded-lg mb-8\">
                    <h3 class=\"text-xl font-bold mb-4\">Details Locamon</h3>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <div>
                            <p class=\"text-gray-600 font-semibold\">Niveau:</p>
                            <p class=\"text-2xl\">{{ locamon.getLevel() }}</p>
                        </div>
                        <div>
                            <p class=\"text-gray-600 font-semibold\">Nature:</p>
                            <p class=\"text-2xl\">{{ locamon.getNature() }}</p>
                        </div>
                        <div>
                            <p class=\"text-gray-600 font-semibold\">Stock:</p>
                            <p class=\"text-2xl\">{{ locamon.getStock() ?? 'Unlimited' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Base Stats -->
        <div class=\"mt-12\">
            <h2 class=\"text-3xl font-bold mb-6\">Base Stats</h2>
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                <!-- HP -->
                <div class=\"bg-red-50 p-6 rounded-lg border-2 border-red-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">HP</p>
                    <p class=\"text-4xl font-bold text-red-600\">{{ pokemon.getHp() }}</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-red-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getHp() / 255) * 100 }}%\"></div>
                    </div>
                </div>

                <!-- Attack -->
                <div class=\"bg-orange-50 p-6 rounded-lg border-2 border-orange-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Attack</p>
                    <p class=\"text-4xl font-bold text-orange-600\">{{ pokemon.getAtk() }}</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-orange-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getAtk() / 255) * 100 }}%\"></div>
                    </div>
                </div>

                <!-- Defense -->
                <div class=\"bg-yellow-50 p-6 rounded-lg border-2 border-yellow-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Defense</p>
                    <p class=\"text-4xl font-bold text-yellow-600\">{{ pokemon.getDef() }}</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-yellow-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getDef() / 255) * 100 }}%\"></div>
                    </div>
                </div>

                <!-- Sp. Attack -->
                <div class=\"bg-blue-50 p-6 rounded-lg border-2 border-blue-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Sp. Attack</p>
                    <p class=\"text-4xl font-bold text-blue-600\">{{ pokemon.getSpAtk() }}</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-blue-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getSpAtk() / 255) * 100 }}%\"></div>
                    </div>
                </div>

                <!-- Sp. Defense -->
                <div class=\"bg-green-50 p-6 rounded-lg border-2 border-green-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Sp. Defense</p>
                    <p class=\"text-4xl font-bold text-green-600\">{{ pokemon.getSpDef() }}</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-green-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getSpDef() / 255) * 100 }}%\"></div>
                    </div>
                </div>

                <!-- Speed -->
                <div class=\"bg-purple-50 p-6 rounded-lg border-2 border-purple-200\">
                    <p class=\"text-gray-600 font-semibold mb-2\">Speed</p>
                    <p class=\"text-4xl font-bold text-purple-600\">{{ pokemon.getSpd() }}</p>
                    <div class=\"mt-3 bg-gray-200 rounded-full h-2\">
                        <div class=\"bg-purple-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getSpd() / 255) * 100 }}%\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- IVs and EVs -->
        <div class=\"mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8\">
            <!-- IVs -->
            <div>
                <h3 class=\"text-2xl font-bold mb-4\">Individual Values (IVs)</h3>
                <div class=\"bg-gray-50 p-6 rounded-lg\">
                    <div class=\"space-y-2 text-sm\">
                        <p>HP: <span class=\"font-bold\">{{ locamon.getIvHp() ?? '-' }}</span>/31</p>
                        <p>ATK: <span class=\"font-bold\">{{ locamon.getIvAtk() ?? '-' }}</span>/31</p>
                        <p>DEF: <span class=\"font-bold\">{{ locamon.getIvDef() ?? '-' }}</span>/31</p>
                        <p>SP.ATK: <span class=\"font-bold\">{{ locamon.getIvSpAtk() ?? '-' }}</span>/31</p>
                        <p>SP.DEF: <span class=\"font-bold\">{{ locamon.getIvSpDef() ?? '-' }}</span>/31</p>
                        <p>SPD: <span class=\"font-bold\">{{ locamon.getIvSpd() ?? '-' }}</span>/31</p>
                    </div>
                </div>
            </div>

            <!-- EVs -->
            <div>
                <h3 class=\"text-2xl font-bold mb-4\">Effort Values (EVs)</h3>
                <div class=\"bg-gray-50 p-6 rounded-lg\">
                    <div class=\"space-y-2 text-sm\">
                        <p>HP: <span class=\"font-bold\">{{ locamon.getEvHp() ?? '-' }}</span>/252</p>
                        <p>ATK: <span class=\"font-bold\">{{ locamon.getEvAtk() ?? '-' }}</span>/252</p>
                        <p>DEF: <span class=\"font-bold\">{{ locamon.getEvDef() ?? '-' }}</span>/252</p>
                        <p>SP.ATK: <span class=\"font-bold\">{{ locamon.getEvSpAtk() ?? '-' }}</span>/252</p>
                        <p>SP.DEF: <span class=\"font-bold\">{{ locamon.getEvSpDef() ?? '-' }}</span>/252</p>
                        <p>SPD: <span class=\"font-bold\">{{ locamon.getEvSpd() ?? '-' }}</span>/252</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class=\"mt-12 text-center\">
            <a href=\"{{ path('shop.index') }}\" class=\"inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-bold\">
                ← Back to Shop
            </a>
        </div>
    </div>
{% endblock %}

", "shop/show.html.twig", "C:\\Users\\solla\\Documents\\GitHub\\2e-annee-UE2\\templates\\shop\\show.html.twig");
    }
}
