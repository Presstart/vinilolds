<?php

/* customer/customer_ip.twig */
class __TwigTemplate_e57d551d71062d30a14b654646ac0721c7a65653b430331c939a3747f58af6e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 6
        echo (isset($context["column_account"]) ? $context["column_account"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo (isset($context["column_store"]) ? $context["column_store"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo (isset($context["column_country"]) ? $context["column_country"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 9
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if ((isset($context["ips"]) ? $context["ips"] : null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ips"]) ? $context["ips"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 15
                echo "          <tr>
            <td class=\"text-left\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 16
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "</a></td>
            <td class=\"text-right\"><a href=\"";
                // line 17
                echo $this->getAttribute($context["ip"], "filter_ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["ip"], "account", array());
                echo "</a></td>
            <td class=\"text-left\">";
                // line 18
                echo $this->getAttribute($context["ip"], "store", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 19
                echo $this->getAttribute($context["ip"], "country", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 20
                echo $this->getAttribute($context["ip"], "date_added", array());
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      ";
        } else {
            // line 24
            echo "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
        </tr>
      ";
        }
        // line 28
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 32
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 33
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  105 => 32,  99 => 28,  93 => 25,  90 => 24,  87 => 23,  78 => 20,  74 => 19,  70 => 18,  64 => 17,  58 => 16,  55 => 15,  50 => 14,  48 => 13,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_ip }}</td>*/
/*         <td class="text-right">{{ column_account }}</td>*/
/*         <td class="text-left">{{ column_store }}</td>*/
/*         <td class="text-left">{{ column_country }}</td>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if ips %}*/
/*         {% for ip in ips %}*/
/*           <tr>*/
/*             <td class="text-left"><a href="https://whatismyipaddress.com/ip/{{ ip.ip }}" target="_blank">{{ ip.ip }}</a></td>*/
/*             <td class="text-right"><a href="{{ ip.filter_ip }}" target="_blank">{{ ip.account }}</a></td>*/
/*             <td class="text-left">{{ ip.store }}</td>*/
/*             <td class="text-left">{{ ip.country }}</td>*/
/*             <td class="text-left">{{ ip.date_added }}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*         <tr>*/
/*           <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*         </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
