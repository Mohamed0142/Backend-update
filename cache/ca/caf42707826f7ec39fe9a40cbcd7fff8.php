<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* appointment.show.php */
class __TwigTemplate_f7829eb44385a3d9a9c424f9ede76aab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Appointments</title>
</head>
<body>
    <h1>Appointments</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Colors</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Date</th>
                <th>Nail Biting</th>
                <th>Massage</th>
                <th>Nail Repair</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "colors", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "phone_number", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "appointment_date", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo ((twig_get_attribute($this->env, $this->source, $context["result"], "nail_biting", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
            echo "</td>
                    <td>";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["result"], "massage", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
            echo "</td>
                    <td>";
            // line 34
            echo ((twig_get_attribute($this->env, $this->source, $context["result"], "nail_repair", [], "any", false, false, false, 34)) ? ("Yes") : ("No"));
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "appointment.show.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  107 => 37,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  67 => 26,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Appointments</title>
</head>
<body>
    <h1>Appointments</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Colors</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Date</th>
                <th>Nail Biting</th>
                <th>Massage</th>
                <th>Nail Repair</th>
            </tr>
        </thead>
        <tbody>
            {% for result in results %}
                <tr>
                    <td>{{ result.id }}</td>
                    <td>{{ result.colors }}</td>
                    <td>{{ result.phone_number }}</td>
                    <td>{{ result.email }}</td>
                    <td>{{ result.appointment_date }}</td>
                    <td>{{ result.nail_biting ? 'Yes' : 'No' }}</td>
                    <td>{{ result.massage ? 'Yes' : 'No' }}</td>
                    <td>{{ result.nail_repair ? 'Yes' : 'No' }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>
", "appointment.show.php", "C:\\laragon\\www\\crud-php-pdo-opdracht01\\views\\appointment.show.php");
    }
}
