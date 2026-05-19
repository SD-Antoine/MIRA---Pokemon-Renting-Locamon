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

/* pokemon/show.html.twig */
class __TwigTemplate_5e172c56b48ee854f220512d8866c470 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 3, $this->source); })()), "getTranslations", [], "method", false, false, false, 3)), "getName", [], "method", false, false, false, 3), "html", null, true);
        yield " - Pokémon Details";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.index");
        yield "\" class=\"text-blue-600 hover:text-blue-800 mb-4 inline-block\">
            ← Back to Pokémons
        </a>

        ";
        // line 11
        $context["frenchName"] = null;
        // line 12
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 12, $this->source); })()), "getTranslations", [], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 13
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getLang", [], "method", false, false, false, 13) == "fr")) {
                // line 14
                yield "                ";
                $context["frenchName"] = CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "getName", [], "method", false, false, false, 14);
                // line 15
                yield "            ";
            }
            // line 16
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
        ";
        // line 18
        $context["hasShiny"] = false;
        // line 19
        yield "        ";
        $context["hasFemale"] = false;
        // line 20
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 20, $this->source); })()), "getSprites", [], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["sprite_item"]) {
            // line 21
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 21) == "front_shiny")) {
                // line 22
                yield "                ";
                $context["hasShiny"] = true;
                // line 23
                yield "            ";
            }
            // line 24
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 24) == "front_female")) {
                // line 25
                yield "                ";
                $context["hasFemale"] = true;
                // line 26
                yield "            ";
            }
            // line 27
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sprite_item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Left: Sprite with Controls -->
            <div class=\"md:col-span-1\">
                <div class=\"bg-gray-100 rounded-lg p-8 flex items-center justify-center mb-6\">
                    <img id=\"pokemonSprite\" src=\"\" alt=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["frenchName"]) || array_key_exists("frenchName", $context) ? $context["frenchName"] : (function () { throw new RuntimeError('Variable "frenchName" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\" class=\"h-64 w-64 object-contain\">
                </div>

                <!-- Sprite Controls -->
                <div class=\"bg-white rounded-lg shadow p-6 space-y-4\">
                    ";
        // line 38
        if ((($tmp = (isset($context["hasFemale"]) || array_key_exists("hasFemale", $context) ? $context["hasFemale"] : (function () { throw new RuntimeError('Variable "hasFemale" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                        <div class=\"flex items-center\">
                            <input type=\"checkbox\" id=\"femaleToggle\" class=\"w-4 h-4 cursor-pointer\">
                            <label for=\"femaleToggle\" class=\"ml-3 cursor-pointer font-semibold\">Female</label>
                        </div>
                    ";
        }
        // line 44
        yield "
                    ";
        // line 45
        if ((($tmp = (isset($context["hasShiny"]) || array_key_exists("hasShiny", $context) ? $context["hasShiny"] : (function () { throw new RuntimeError('Variable "hasShiny" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                        <div class=\"flex items-center\">
                            <input type=\"checkbox\" id=\"shinyToggle\" class=\"w-4 h-4 cursor-pointer\">
                            <label for=\"shinyToggle\" class=\"ml-3 cursor-pointer font-semibold\">✨ Shiny</label>
                        </div>
                    ";
        }
        // line 51
        yield "                </div>
            </div>

            <!-- Right: Details -->
            <div class=\"md:col-span-2\">
                <!-- Name -->
                <h1 class=\"text-4xl font-bold text-gray-800 mb-6\">
                    ";
        // line 58
        yield (((array_key_exists("frenchName", $context) &&  !(null === $context["frenchName"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["frenchName"], "html", null, true)) : ("Unknown"));
        yield "
                </h1>

                <!-- Types -->
                <div class=\"mb-6\">
                    <h3 class=\"text-lg font-bold mb-2\">Types:</h3>
                    <div class=\"flex gap-2\">
                        ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 65, $this->source); })()), "getType1", [], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                            <span class=\"px-4 py-2 bg-blue-600 text-white rounded-full font-bold\">
                                ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 67, $this->source); })()), "getType1", [], "method", false, false, false, 67), "getNameFR", [], "method", false, false, false, 67), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 70
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 70, $this->source); })()), "getType2", [], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                            <span class=\"px-4 py-2 bg-red-600 text-white rounded-full font-bold\">
                                ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 72, $this->source); })()), "getType2", [], "method", false, false, false, 72), "getNameFR", [], "method", false, false, false, 72), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 75
        yield "                    </div>
                </div>

                <!-- Base Stats -->
                <div>
                    <h2 class=\"text-2xl font-bold mb-4\">Base Stats</h2>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <!-- HP -->
                        <div class=\"bg-red-50 p-4 rounded-lg border-2 border-red-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">HP</p>
                            <p class=\"text-3xl font-bold text-red-600\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 85, $this->source); })()), "getHp", [], "method", false, false, false, 85), "html", null, true);
        yield "</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-red-600 h-2 rounded-full\" style=\"width: ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 87, $this->source); })()), "getHp", [], "method", false, false, false, 87) / 255) * 100), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>

                        <!-- Attack -->
                        <div class=\"bg-orange-50 p-4 rounded-lg border-2 border-orange-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Attack</p>
                            <p class=\"text-3xl font-bold text-orange-600\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 94, $this->source); })()), "getAtk", [], "method", false, false, false, 94), "html", null, true);
        yield "</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-orange-600 h-2 rounded-full\" style=\"width: ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 96, $this->source); })()), "getAtk", [], "method", false, false, false, 96) / 255) * 100), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>

                        <!-- Defense -->
                        <div class=\"bg-yellow-50 p-4 rounded-lg border-2 border-yellow-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Defense</p>
                            <p class=\"text-3xl font-bold text-yellow-600\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 103, $this->source); })()), "getDef", [], "method", false, false, false, 103), "html", null, true);
        yield "</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-yellow-600 h-2 rounded-full\" style=\"width: ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 105, $this->source); })()), "getDef", [], "method", false, false, false, 105) / 255) * 100), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>

                        <!-- Sp. Attack -->
                        <div class=\"bg-blue-50 p-4 rounded-lg border-2 border-blue-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Sp. Attack</p>
                            <p class=\"text-3xl font-bold text-blue-600\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 112, $this->source); })()), "getSpAtk", [], "method", false, false, false, 112), "html", null, true);
        yield "</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-blue-600 h-2 rounded-full\" style=\"width: ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 114, $this->source); })()), "getSpAtk", [], "method", false, false, false, 114) / 255) * 100), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>

                        <!-- Sp. Defense -->
                        <div class=\"bg-green-50 p-4 rounded-lg border-2 border-green-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Sp. Defense</p>
                            <p class=\"text-3xl font-bold text-green-600\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 121, $this->source); })()), "getSpDef", [], "method", false, false, false, 121), "html", null, true);
        yield "</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-green-600 h-2 rounded-full\" style=\"width: ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 123, $this->source); })()), "getSpDef", [], "method", false, false, false, 123) / 255) * 100), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>

                        <!-- Speed -->
                        <div class=\"bg-purple-50 p-4 rounded-lg border-2 border-purple-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Speed</p>
                            <p class=\"text-3xl font-bold text-purple-600\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 130, $this->source); })()), "getSpd", [], "method", false, false, false, 130), "html", null, true);
        yield "</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-purple-600 h-2 rounded-full\" style=\"width: ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 132, $this->source); })()), "getSpd", [], "method", false, false, false, 132) / 255) * 100), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class=\"mt-12 text-center\">
            <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.index");
        yield "\" class=\"inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-bold\">
                ← Back to Pokémons
            </a>
        </div>
    </div>

    <script>
        // Store all sprites with their names
        const sprites = {
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 151, $this->source); })()), "getSprites", [], "method", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["sprite_item"]) {
            // line 152
            yield "                '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getName", [], "method", false, false, false, 152), "html", null, true);
            yield "': '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sprite_item"], "getUrl", [], "method", false, false, false, 152), "html", null, true);
            yield "',
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sprite_item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "        };

        // Initialize with front_default
        const spriteEl = document.getElementById('pokemonSprite');
        spriteEl.src = sprites['front_default'] || '';

        // Toggle handlers
        const femaleToggle = document.getElementById('femaleToggle');
        const shinyToggle = document.getElementById('shinyToggle');

        function pickFirstExisting(candidates) {
            for (let i = 0; i < candidates.length; i++) {
                const name = candidates[i];
                if (name && Object.prototype.hasOwnProperty.call(sprites, name) && sprites[name]) {
                    return name;
                }
            }
            return null;
        }

        function updateSprite() {
            const isFemale = femaleToggle && femaleToggle.checked;
            const isShiny = shinyToggle && shinyToggle.checked;

            // Build candidates in preferred order for each case
            let candidates = [];

            if (isFemale && isShiny) {
                // Try multiple naming variants because sprite names sometimes use '-' or different ordering
                candidates = [
                    'front_shiny_female',
                    'front_shiny_female',
                    'front_female',
                    'front_shiny',
                    'front_default'
                ];
            } else if (isFemale) {
                candidates = [
                    'front_female',
                    'front_default'
                ];
            } else if (isShiny) {
                candidates = [
                    'front_shiny',
                    'front_default'
                ];
            } else {
                candidates = ['front_default'];
            }

            const chosen = pickFirstExisting(candidates) || 'front_default';
            spriteEl.src = sprites[chosen] || sprites['front_default'] || '';
        }

        if (femaleToggle) femaleToggle.addEventListener('change', updateSprite);
        if (shinyToggle) shinyToggle.addEventListener('change', updateSprite);
    </script>
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
        return "pokemon/show.html.twig";
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
        return array (  380 => 154,  369 => 152,  365 => 151,  353 => 142,  340 => 132,  335 => 130,  325 => 123,  320 => 121,  310 => 114,  305 => 112,  295 => 105,  290 => 103,  280 => 96,  275 => 94,  265 => 87,  260 => 85,  248 => 75,  242 => 72,  239 => 71,  236 => 70,  230 => 67,  227 => 66,  225 => 65,  215 => 58,  206 => 51,  199 => 46,  197 => 45,  194 => 44,  187 => 39,  185 => 38,  177 => 33,  170 => 28,  164 => 27,  161 => 26,  158 => 25,  155 => 24,  152 => 23,  149 => 22,  146 => 21,  141 => 20,  138 => 19,  136 => 18,  133 => 17,  127 => 16,  124 => 15,  121 => 14,  118 => 13,  113 => 12,  111 => 11,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ pokemon.getTranslations()|first.getName() }} - Pokémon Details{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <a href=\"{{ path('pokemon.index') }}\" class=\"text-blue-600 hover:text-blue-800 mb-4 inline-block\">
            ← Back to Pokémons
        </a>

        {% set frenchName = null %}
        {% for translation in pokemon.getTranslations() %}
            {% if translation.getLang() == 'fr' %}
                {% set frenchName = translation.getName() %}
            {% endif %}
        {% endfor %}

        {% set hasShiny = false %}
        {% set hasFemale = false %}
        {% for sprite_item in pokemon.getSprites() %}
            {% if sprite_item.getName() == 'front_shiny' %}
                {% set hasShiny = true %}
            {% endif %}
            {% if sprite_item.getName() == 'front_female' %}
                {% set hasFemale = true %}
            {% endif %}
        {% endfor %}

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <!-- Left: Sprite with Controls -->
            <div class=\"md:col-span-1\">
                <div class=\"bg-gray-100 rounded-lg p-8 flex items-center justify-center mb-6\">
                    <img id=\"pokemonSprite\" src=\"\" alt=\"{{ frenchName }}\" class=\"h-64 w-64 object-contain\">
                </div>

                <!-- Sprite Controls -->
                <div class=\"bg-white rounded-lg shadow p-6 space-y-4\">
                    {% if hasFemale %}
                        <div class=\"flex items-center\">
                            <input type=\"checkbox\" id=\"femaleToggle\" class=\"w-4 h-4 cursor-pointer\">
                            <label for=\"femaleToggle\" class=\"ml-3 cursor-pointer font-semibold\">Female</label>
                        </div>
                    {% endif %}

                    {% if hasShiny %}
                        <div class=\"flex items-center\">
                            <input type=\"checkbox\" id=\"shinyToggle\" class=\"w-4 h-4 cursor-pointer\">
                            <label for=\"shinyToggle\" class=\"ml-3 cursor-pointer font-semibold\">✨ Shiny</label>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Right: Details -->
            <div class=\"md:col-span-2\">
                <!-- Name -->
                <h1 class=\"text-4xl font-bold text-gray-800 mb-6\">
                    {{ frenchName ?? 'Unknown' }}
                </h1>

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

                <!-- Base Stats -->
                <div>
                    <h2 class=\"text-2xl font-bold mb-4\">Base Stats</h2>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <!-- HP -->
                        <div class=\"bg-red-50 p-4 rounded-lg border-2 border-red-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">HP</p>
                            <p class=\"text-3xl font-bold text-red-600\">{{ pokemon.getHp() }}</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-red-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getHp() / 255) * 100 }}%\"></div>
                            </div>
                        </div>

                        <!-- Attack -->
                        <div class=\"bg-orange-50 p-4 rounded-lg border-2 border-orange-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Attack</p>
                            <p class=\"text-3xl font-bold text-orange-600\">{{ pokemon.getAtk() }}</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-orange-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getAtk() / 255) * 100 }}%\"></div>
                            </div>
                        </div>

                        <!-- Defense -->
                        <div class=\"bg-yellow-50 p-4 rounded-lg border-2 border-yellow-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Defense</p>
                            <p class=\"text-3xl font-bold text-yellow-600\">{{ pokemon.getDef() }}</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-yellow-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getDef() / 255) * 100 }}%\"></div>
                            </div>
                        </div>

                        <!-- Sp. Attack -->
                        <div class=\"bg-blue-50 p-4 rounded-lg border-2 border-blue-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Sp. Attack</p>
                            <p class=\"text-3xl font-bold text-blue-600\">{{ pokemon.getSpAtk() }}</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-blue-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getSpAtk() / 255) * 100 }}%\"></div>
                            </div>
                        </div>

                        <!-- Sp. Defense -->
                        <div class=\"bg-green-50 p-4 rounded-lg border-2 border-green-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Sp. Defense</p>
                            <p class=\"text-3xl font-bold text-green-600\">{{ pokemon.getSpDef() }}</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-green-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getSpDef() / 255) * 100 }}%\"></div>
                            </div>
                        </div>

                        <!-- Speed -->
                        <div class=\"bg-purple-50 p-4 rounded-lg border-2 border-purple-200\">
                            <p class=\"text-gray-600 font-semibold mb-2\">Speed</p>
                            <p class=\"text-3xl font-bold text-purple-600\">{{ pokemon.getSpd() }}</p>
                            <div class=\"mt-2 bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-purple-600 h-2 rounded-full\" style=\"width: {{ (pokemon.getSpd() / 255) * 100 }}%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class=\"mt-12 text-center\">
            <a href=\"{{ path('pokemon.index') }}\" class=\"inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-bold\">
                ← Back to Pokémons
            </a>
        </div>
    </div>

    <script>
        // Store all sprites with their names
        const sprites = {
            {% for sprite_item in pokemon.getSprites() %}
                '{{ sprite_item.getName() }}': '{{ sprite_item.getUrl() }}',
            {% endfor %}
        };

        // Initialize with front_default
        const spriteEl = document.getElementById('pokemonSprite');
        spriteEl.src = sprites['front_default'] || '';

        // Toggle handlers
        const femaleToggle = document.getElementById('femaleToggle');
        const shinyToggle = document.getElementById('shinyToggle');

        function pickFirstExisting(candidates) {
            for (let i = 0; i < candidates.length; i++) {
                const name = candidates[i];
                if (name && Object.prototype.hasOwnProperty.call(sprites, name) && sprites[name]) {
                    return name;
                }
            }
            return null;
        }

        function updateSprite() {
            const isFemale = femaleToggle && femaleToggle.checked;
            const isShiny = shinyToggle && shinyToggle.checked;

            // Build candidates in preferred order for each case
            let candidates = [];

            if (isFemale && isShiny) {
                // Try multiple naming variants because sprite names sometimes use '-' or different ordering
                candidates = [
                    'front_shiny_female',
                    'front_shiny_female',
                    'front_female',
                    'front_shiny',
                    'front_default'
                ];
            } else if (isFemale) {
                candidates = [
                    'front_female',
                    'front_default'
                ];
            } else if (isShiny) {
                candidates = [
                    'front_shiny',
                    'front_default'
                ];
            } else {
                candidates = ['front_default'];
            }

            const chosen = pickFirstExisting(candidates) || 'front_default';
            spriteEl.src = sprites[chosen] || sprites['front_default'] || '';
        }

        if (femaleToggle) femaleToggle.addEventListener('change', updateSprite);
        if (shinyToggle) shinyToggle.addEventListener('change', updateSprite);
    </script>
{% endblock %}

", "pokemon/show.html.twig", "C:\\Users\\solla\\Documents\\GitHub\\2e-annee-UE2\\templates\\pokemon\\show.html.twig");
    }
}
