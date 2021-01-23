<?php

/* catalog/option_form.twig */
class __TwigTemplate_1239c09f53951a1e598021688e70b50e18306d7c2ec09ff44a022bf3b0dcff52 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 34
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                  <input type=\"text\" name=\"option_description[";
            // line 35
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["option_description"]) ? $context["option_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["option_description"]) ? $context["option_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 37
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 38
                echo "                <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                ";
            }
            // line 40
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 44
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                  <optgroup label=\"";
        // line 47
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "\">
                    ";
        // line 48
        if (((isset($context["type"]) ? $context["type"] : null) == "select")) {
            // line 49
            echo "                    <option value=\"select\" selected=\"selected\">";
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                    ";
        } else {
            // line 51
            echo "                    <option value=\"select\">";
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                    ";
        }
        // line 53
        echo "                    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "radio")) {
            // line 54
            echo "                    <option value=\"radio\" selected=\"selected\">";
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>
                    ";
        } else {
            // line 56
            echo "                    <option value=\"radio\">";
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>
                    ";
        }
        // line 58
        echo "                    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "checkbox")) {
            // line 59
            echo "                    <option value=\"checkbox\" selected=\"selected\">";
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>
                    ";
        } else {
            // line 61
            echo "                    <option value=\"checkbox\">";
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>
                    ";
        }
        // line 63
        echo "                  </optgroup>
                  <optgroup label=\"";
        // line 64
        echo (isset($context["text_input"]) ? $context["text_input"] : null);
        echo "\">
                    ";
        // line 65
        if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
            // line 66
            echo "                    <option value=\"text\" selected=\"selected\">";
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>
                    ";
        } else {
            // line 68
            echo "                    <option value=\"text\">";
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>
                    ";
        }
        // line 70
        echo "                    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "textarea")) {
            // line 71
            echo "                    <option value=\"textarea\" selected=\"selected\">";
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>
                    ";
        } else {
            // line 73
            echo "                    <option value=\"textarea\">";
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>
                    ";
        }
        // line 75
        echo "                  </optgroup>
                  <optgroup label=\"";
        // line 76
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "\">
                    ";
        // line 77
        if (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 78
            echo "                    <option value=\"file\" selected=\"selected\">";
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>
                    ";
        } else {
            // line 80
            echo "                    <option value=\"file\">";
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>
                    ";
        }
        // line 82
        echo "                  </optgroup>
                  <optgroup label=\"";
        // line 83
        echo (isset($context["text_date"]) ? $context["text_date"] : null);
        echo "\">
                    ";
        // line 84
        if (((isset($context["type"]) ? $context["type"] : null) == "date")) {
            // line 85
            echo "                    <option value=\"date\" selected=\"selected\">";
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>
                    ";
        } else {
            // line 87
            echo "                    <option value=\"date\">";
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>
                    ";
        }
        // line 89
        echo "                    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "time")) {
            // line 90
            echo "                    <option value=\"time\" selected=\"selected\">";
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>
                    ";
        } else {
            // line 92
            echo "                    <option value=\"time\">";
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>
                    ";
        }
        // line 94
        echo "                    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "datetime")) {
            // line 95
            echo "                    <option value=\"datetime\" selected=\"selected\">";
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>
                    ";
        } else {
            // line 97
            echo "                    <option value=\"datetime\">";
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>
                    ";
        }
        // line 99
        echo "                  </optgroup>
                </select>
                ";
        // line 101
        if ((isset($context["error_type"]) ? $context["error_type"] : null)) {
            // line 102
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_type"]) ? $context["error_type"] : null);
            echo "</div>
                ";
        }
        // line 104
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 107
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 109
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 114
        echo (isset($context["text_value"]) ? $context["text_value"] : null);
        echo "</legend>
            <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 118
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 119
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 120
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 125
        $context["option_value_row"] = 0;
        // line 126
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["option_values"]) ? $context["option_values"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 127
            echo "                <tr id=\"option-value-row";
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\">
                  <td class=\"text-center\">
                    <input type=\"hidden\" name=\"option_value[";
            // line 129
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][option_value_id]\" value=\"";
            echo $this->getAttribute($context["option_value"], "option_value_id", array());
            echo "\" />
                    ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 131
                echo "                    <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                      <input type=\"text\" name=\"option_value[";
                // line 132
                echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                echo "][option_value_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][name]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($context["option_value"], "option_value_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["option_value"], "option_value_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" class=\"form-control\" />
                    </div>
                    ";
                // line 134
                if ($this->getAttribute($this->getAttribute((isset($context["error_option_value"]) ? $context["error_option_value"] : null), (isset($context["option_value_row"]) ? $context["option_value_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 135
                    echo "                    <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_option_value"]) ? $context["error_option_value"] : null), (isset($context["option_value_row"]) ? $context["option_value_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 137
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                  </td>
                  <td class=\"text-left\">
                    <a href=\"\" id=\"thumb-image";
            // line 140
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["option_value"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                    <input type=\"hidden\" name=\"option_value[";
            // line 141
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["option_value"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\" />
                  </td>
                  <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 143
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["option_value"], "sort_order", array());
            echo "\" class=\"form-control\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" /></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 144
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 146
            $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
            // line 147
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 152
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
\t\t\$('#option-value').parent().show();
\t} else {
\t\t\$('#option-value').parent().hide();
\t}
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row = ";
        // line 172
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

function addOptionValue() {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
\t";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 178
            echo "\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 179
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"\" placeholder=\"";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "\" class=\"form-control\" />';
\thtml += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 183
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 184
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 185
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script>
</div>
";
        // line 194
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 194,  532 => 185,  528 => 184,  522 => 183,  519 => 182,  502 => 179,  499 => 178,  495 => 177,  487 => 172,  464 => 152,  458 => 148,  452 => 147,  450 => 146,  443 => 144,  435 => 143,  426 => 141,  418 => 140,  414 => 138,  408 => 137,  402 => 135,  400 => 134,  389 => 132,  380 => 131,  376 => 130,  370 => 129,  364 => 127,  359 => 126,  357 => 125,  349 => 120,  345 => 119,  341 => 118,  334 => 114,  324 => 109,  319 => 107,  314 => 104,  308 => 102,  306 => 101,  302 => 99,  296 => 97,  290 => 95,  287 => 94,  281 => 92,  275 => 90,  272 => 89,  266 => 87,  260 => 85,  258 => 84,  254 => 83,  251 => 82,  245 => 80,  239 => 78,  237 => 77,  233 => 76,  230 => 75,  224 => 73,  218 => 71,  215 => 70,  209 => 68,  203 => 66,  201 => 65,  197 => 64,  194 => 63,  188 => 61,  182 => 59,  179 => 58,  173 => 56,  167 => 54,  164 => 53,  158 => 51,  152 => 49,  150 => 48,  146 => 47,  140 => 44,  135 => 41,  129 => 40,  123 => 38,  121 => 37,  112 => 35,  103 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-option" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-option" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_option }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label">{{ entry_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 {% for language in languages %}*/
/*                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                   <input type="text" name="option_description[{{ language.language_id }}][name]" value="{{ option_description[language.language_id] ? option_description[language.language_id].name }}" placeholder="{{ entry_name }}" class="form-control" />*/
/*                 </div>*/
/*                 {% if error_name[language.language_id] %}*/
/*                 <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-type">{{ entry_type }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="type" id="input-type" class="form-control">*/
/*                   <optgroup label="{{ text_choose }}">*/
/*                     {% if type == 'select' %}*/
/*                     <option value="select" selected="selected">{{ text_select }}</option>*/
/*                     {% else %}*/
/*                     <option value="select">{{ text_select }}</option>*/
/*                     {% endif %}*/
/*                     {% if type == 'radio' %}*/
/*                     <option value="radio" selected="selected">{{ text_radio }}</option>*/
/*                     {% else %}*/
/*                     <option value="radio">{{ text_radio }}</option>*/
/*                     {% endif %}*/
/*                     {% if type == 'checkbox' %}*/
/*                     <option value="checkbox" selected="selected">{{ text_checkbox }}</option>*/
/*                     {% else %}*/
/*                     <option value="checkbox">{{ text_checkbox }}</option>*/
/*                     {% endif %}*/
/*                   </optgroup>*/
/*                   <optgroup label="{{ text_input }}">*/
/*                     {% if type == 'text' %}*/
/*                     <option value="text" selected="selected">{{ text_text }}</option>*/
/*                     {% else %}*/
/*                     <option value="text">{{ text_text }}</option>*/
/*                     {% endif %}*/
/*                     {% if type == 'textarea' %}*/
/*                     <option value="textarea" selected="selected">{{ text_textarea }}</option>*/
/*                     {% else %}*/
/*                     <option value="textarea">{{ text_textarea }}</option>*/
/*                     {% endif %}*/
/*                   </optgroup>*/
/*                   <optgroup label="{{ text_file }}">*/
/*                     {% if type == 'file' %}*/
/*                     <option value="file" selected="selected">{{ text_file }}</option>*/
/*                     {% else %}*/
/*                     <option value="file">{{ text_file }}</option>*/
/*                     {% endif %}*/
/*                   </optgroup>*/
/*                   <optgroup label="{{ text_date }}">*/
/*                     {% if type == 'date' %}*/
/*                     <option value="date" selected="selected">{{ text_date }}</option>*/
/*                     {% else %}*/
/*                     <option value="date">{{ text_date }}</option>*/
/*                     {% endif %}*/
/*                     {% if type == 'time' %}*/
/*                     <option value="time" selected="selected">{{ text_time }}</option>*/
/*                     {% else %}*/
/*                     <option value="time">{{ text_time }}</option>*/
/*                     {% endif %}*/
/*                     {% if type == 'datetime' %}*/
/*                     <option value="datetime" selected="selected">{{ text_datetime }}</option>*/
/*                     {% else %}*/
/*                     <option value="datetime">{{ text_datetime }}</option>*/
/*                     {% endif %}*/
/*                   </optgroup>*/
/*                 </select>*/
/*                 {% if error_type %}*/
/*                 <div class="text-danger">{{ error_type }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_value }}</legend>*/
/*             <table id="option-value" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left required">{{ entry_option_value }}</td>*/
/*                   <td class="text-center">{{ entry_image }}</td>*/
/*                   <td class="text-right">{{ entry_sort_order }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% set option_value_row = 0 %}*/
/*                 {% for option_value in option_values %}*/
/*                 <tr id="option-value-row{{ option_value_row }}">*/
/*                   <td class="text-center">*/
/*                     <input type="hidden" name="option_value[{{ option_value_row }}][option_value_id]" value="{{ option_value.option_value_id }}" />*/
/*                     {% for language in languages %}*/
/*                     <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                       <input type="text" name="option_value[{{ option_value_row }}][option_value_description][{{ language.language_id }}][name]" value="{{ option_value.option_value_description[language.language_id] ? option_value.option_value_description[language.language_id].name }}" placeholder="{{ entry_option_value }}" class="form-control" />*/
/*                     </div>*/
/*                     {% if error_option_value[option_value_row][language.language_id] %}*/
/*                     <div class="text-danger">{{ error_option_value[option_value_row][language.language_id] }}</div>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </td>*/
/*                   <td class="text-left">*/
/*                     <a href="" id="thumb-image{{ option_value_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ option_value.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                     <input type="hidden" name="option_value[{{ option_value_row }}][image]" value="{{ option_value.image }}" id="input-image{{ option_value_row }}" />*/
/*                   </td>*/
/*                   <td class="text-right"><input type="text" name="option_value[{{ option_value_row }}][sort_order]" value="{{ option_value.sort_order }}" class="form-control" placeholder="{{ entry_sort_order }}" /></td>*/
/*                   <td class="text-right"><button type="button" onclick="$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                 </tr>*/
/*                 {% set option_value_row = option_value_row + 1 %}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="3"></td>*/
/*                   <td class="text-right"><button type="button" onclick="addOptionValue();" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'type\']').on('change', function() {*/
/* 	if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {*/
/* 		$('#option-value').parent().show();*/
/* 	} else {*/
/* 		$('#option-value').parent().hide();*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'type\']').trigger('change');*/
/* */
/* var option_value_row = {{ option_value_row }};*/
/* */
/* function addOptionValue() {*/
/* 	html  = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	html += '  <td class="text-left"><input type="hidden" name="option_value[' + option_value_row + '][option_value_id]" value="" />';*/
/* 	{% for language in languages %}*/
/* 	html += '    <div class="input-group">';*/
/* 	html += '      <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><input type="text" name="option_value[' + option_value_row + '][option_value_description][{{ language.language_id }}][name]" value="" placeholder="{{ entry_option_value }}" class="form-control" />';*/
/* 	html += '    </div>';*/
/* 	{% endfor %}*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-center"><a href="" id="thumb-image' + option_value_row + '" data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="option_value[' + option_value_row + '][image]" value="" id="input-image' + option_value_row + '" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="option_value[' + option_value_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#option-value tbody').append(html);*/
/* */
/* 	option_value_row++;*/
/* }*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
