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

/* components/Navbar.html.twig */
class __TwigTemplate_50f418a12118e8cb4069338e7efff500 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Navbar.html.twig"));

        // line 1
        yield "<nav class=\"w-[8vw] h-[93vh] fixed top-[50%] left-[0.7vw] flex flex-col justify-center bg-red-600 rounded-[20px]\">  
    <div class=\"navbar-icon-div w-full absolute top-0 p-[8px]\">
        <a class=\"navbar-icon w-full font-poke text-yellow-300 outline-font-poke text-[1.7vw]\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop.index");
        yield "\" title=\"\">
            Locamon
        </a>
    </div>
    <div class=\"navbar-items flex flex-col items-center gap-4\">
        <!-- Public pages -->
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon.index");
        yield "\" title=\"Pokemon List\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-2 -2 48 48\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"Pokeball--Streamline-Tabler\" height=\"48\" width=\"48\">
                <path d=\"M5.5 22a16.5 16.5 0 1 0 33 0 16.5 16.5 0 1 0 -33 0\" stroke-width=\"4\"></path>
                <path d=\"M16.5 22a5.5 5.5 0 1 0 11 0 5.5 5.5 0 1 0 -11 0\" stroke-width=\"4\"></path>
                <path d=\"M5.5 22h11\" stroke-width=\"4\"></path>
                <path d=\"M27.5 22h11\" stroke-width=\"4\"></path>
            </svg>
        </a>

        <!-- Auth pages -->
        ";
        // line 19
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.logout");
            yield "\" title=\"Logout\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75\" />
                </svg>
            </a>
        ";
        } else {
            // line 26
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.login");
            yield "\" title=\"Login\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z\" />
                </svg>
            </a>

            <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.register");
            yield "\" title=\"Register\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" height=\"48\" width=\"48\">
                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                    <polyline points=\"12 12 12 18\"></polyline>
                    <polyline points=\"9 15 15 15\"></polyline>
                </svg>
            </a>
        ";
        }
        // line 41
        yield "
        <!-- Admin pages -->
        ";
        // line 43
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "            <hr class=\"w-3/4 border-gray-700\">
            
            <a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locamon.index");
            yield "\" title=\"Manage Locamons\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" height=\"48\" width=\"48\">
                    <circle cx=\"12\" cy=\"12\" r=\"1\"></circle>
                    <circle cx=\"12\" cy=\"5\" r=\"1\"></circle>
                    <circle cx=\"12\" cy=\"19\" r=\"1\"></circle>
                </svg>
            </a>
        ";
        }
        // line 54
        yield "    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Navbar.html.twig";
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
        return array (  129 => 54,  118 => 46,  114 => 44,  112 => 43,  108 => 41,  96 => 32,  86 => 26,  76 => 20,  74 => 19,  61 => 9,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"w-[8vw] h-[93vh] fixed top-[50%] left-[0.7vw] flex flex-col justify-center bg-red-600 rounded-[20px]\">  
    <div class=\"navbar-icon-div w-full absolute top-0 p-[8px]\">
        <a class=\"navbar-icon w-full font-poke text-yellow-300 outline-font-poke text-[1.7vw]\" href=\"{{ path('shop.index') }}\" title=\"\">
            Locamon
        </a>
    </div>
    <div class=\"navbar-items flex flex-col items-center gap-4\">
        <!-- Public pages -->
        <a href=\"{{ path('pokemon.index') }}\" title=\"Pokemon List\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-2 -2 48 48\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"Pokeball--Streamline-Tabler\" height=\"48\" width=\"48\">
                <path d=\"M5.5 22a16.5 16.5 0 1 0 33 0 16.5 16.5 0 1 0 -33 0\" stroke-width=\"4\"></path>
                <path d=\"M16.5 22a5.5 5.5 0 1 0 11 0 5.5 5.5 0 1 0 -11 0\" stroke-width=\"4\"></path>
                <path d=\"M5.5 22h11\" stroke-width=\"4\"></path>
                <path d=\"M27.5 22h11\" stroke-width=\"4\"></path>
            </svg>
        </a>

        <!-- Auth pages -->
        {% if is_granted('ROLE_USER') %}
            <a href=\"{{ path('user.logout') }}\" title=\"Logout\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75\" />
                </svg>
            </a>
        {% else %}
            <a href=\"{{ path('user.login') }}\" title=\"Login\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z\" />
                </svg>
            </a>

            <a href=\"{{ path('user.register') }}\" title=\"Register\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" height=\"48\" width=\"48\">
                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                    <polyline points=\"12 12 12 18\"></polyline>
                    <polyline points=\"9 15 15 15\"></polyline>
                </svg>
            </a>
        {% endif %}

        <!-- Admin pages -->
        {% if is_granted('ROLE_ADMIN') %}
            <hr class=\"w-3/4 border-gray-700\">
            
            <a href=\"{{ path('locamon.index') }}\" title=\"Manage Locamons\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" height=\"48\" width=\"48\">
                    <circle cx=\"12\" cy=\"12\" r=\"1\"></circle>
                    <circle cx=\"12\" cy=\"5\" r=\"1\"></circle>
                    <circle cx=\"12\" cy=\"19\" r=\"1\"></circle>
                </svg>
            </a>
        {% endif %}
    </div>
</nav>
", "components/Navbar.html.twig", "C:\\Users\\solla\\Documents\\GitHub\\2e-annee-UE2\\templates\\components\\Navbar.html.twig");
    }
}
