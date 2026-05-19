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

/* locamon/index.html.twig */
class __TwigTemplate_a79f782caaeb3ecd7adb3d8dbd84670b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locamon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locamon/index.html.twig"));

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

        yield "Locamon - list";
        
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
        yield "  <h1>Locamons</h1>
  <p><a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locamon.create");
        yield "\">Create new Locamon</a></p>

  <table>
    <thead>
      <tr><th>ID</th><th>Pokemon</th><th>Nickname</th><th>Level</th><th>Actions</th></tr>
    </thead>
    <tbody>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 15
            yield "        <tr>
          <td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
          <td>";
            // line 17
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["l"], "pokemon", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("#" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["l"], "pokemon", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)), "html", null, true)) : (""));
            yield "</td>
          <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "nickname", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
          <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "level", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
          <td>
            <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locamon.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">show</a>
            <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locamon.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">edit</a>
            <form method=\"post\" action=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locamon.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" style=\"display:inline\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 24))), "html", null, true);
            yield "\">
              <button type=\"submit\">delete</button>
            </form>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 29
        if (!$context['_iterated']) {
            // line 30
            yield "        <tr><td colspan=\"5\">No locamons found.</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['l'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "    </tbody>
  </table>

  ";
        // line 35
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["locamons"]) || array_key_exists("locamons", $context) ? $context["locamons"] : (function () { throw new RuntimeError('Variable "locamons" does not exist.', 35, $this->source); })()));
        yield "
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
        return "locamon/index.html.twig";
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
        return array (  174 => 35,  169 => 32,  162 => 30,  160 => 29,  150 => 24,  146 => 23,  142 => 22,  138 => 21,  133 => 19,  129 => 18,  125 => 17,  121 => 16,  118 => 15,  113 => 14,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Locamon - list{% endblock %}

{% block body %}
  <h1>Locamons</h1>
  <p><a href=\"{{ path('locamon.create') }}\">Create new Locamon</a></p>

  <table>
    <thead>
      <tr><th>ID</th><th>Pokemon</th><th>Nickname</th><th>Level</th><th>Actions</th></tr>
    </thead>
    <tbody>
      {% for l in locamons %}
        <tr>
          <td>{{ l.id }}</td>
          <td>{{ l.pokemon ? '#' ~ l.pokemon.id : '' }}</td>
          <td>{{ l.nickname }}</td>
          <td>{{ l.level }}</td>
          <td>
            <a href=\"{{ path('locamon.show', {'id': l.id}) }}\">show</a>
            <a href=\"{{ path('locamon.edit', {'id': l.id}) }}\">edit</a>
            <form method=\"post\" action=\"{{ path('locamon.delete', {'id': l.id}) }}\" style=\"display:inline\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ l.id) }}\">
              <button type=\"submit\">delete</button>
            </form>
          </td>
        </tr>
      {% else %}
        <tr><td colspan=\"5\">No locamons found.</td></tr>
      {% endfor %}
    </tbody>
  </table>

  {{ knp_pagination_render(locamons) }}
{% endblock %}
", "locamon/index.html.twig", "C:\\Users\\solla\\Documents\\GitHub\\2e-annee-UE2\\templates\\locamon\\index.html.twig");
    }
}
