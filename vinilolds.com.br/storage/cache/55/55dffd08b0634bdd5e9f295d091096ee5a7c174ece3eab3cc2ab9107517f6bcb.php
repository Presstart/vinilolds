<?php

/* catalog/option_list.twig */
class __TwigTemplate_766e0accdf062663bec01d8d727ce665820f1c1612682fd4ee0f40850838d725 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-option').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-option').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-option\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 37
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-type\">";
        // line 41
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
              <select name=\"filter_type\" id=\"input-type\" class=\"form-control\">
                <option value=\"\"></option>
                <optgroup label=\"";
        // line 44
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "\">
                  ";
        // line 45
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "select")) {
            // line 46
            echo "                  <option value=\"select\" selected=\"selected\">";
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
        } else {
            // line 48
            echo "                  <option value=\"select\">";
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
        }
        // line 50
        echo "                  ";
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "radio")) {
            // line 51
            echo "                  <option value=\"radio\" selected=\"selected\">";
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>
                  ";
        } else {
            // line 53
            echo "                  <option value=\"radio\">";
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>
                  ";
        }
        // line 55
        echo "                  ";
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "checkbox")) {
            // line 56
            echo "                  <option value=\"checkbox\" selected=\"selected\">";
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>
                  ";
        } else {
            // line 58
            echo "                  <option value=\"checkbox\">";
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>
                  ";
        }
        // line 60
        echo "                </optgroup>
                <optgroup label=\"";
        // line 61
        echo (isset($context["text_input"]) ? $context["text_input"] : null);
        echo "\">
                  ";
        // line 62
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "text")) {
            // line 63
            echo "                  <option value=\"text\" selected=\"selected\">";
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>
                  ";
        } else {
            // line 65
            echo "                  <option value=\"text\">";
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>
                  ";
        }
        // line 67
        echo "                  ";
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "textarea")) {
            // line 68
            echo "                  <option value=\"textarea\" selected=\"selected\">";
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>
                  ";
        } else {
            // line 70
            echo "                  <option value=\"textarea\">";
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>
                  ";
        }
        // line 72
        echo "                </optgroup>
                <optgroup label=\"";
        // line 73
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "\">
                  ";
        // line 74
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "file")) {
            // line 75
            echo "                  <option value=\"file\" selected=\"selected\">";
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>
                  ";
        } else {
            // line 77
            echo "                  <option value=\"file\">";
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>
                  ";
        }
        // line 79
        echo "                </optgroup>
                <optgroup label=\"";
        // line 80
        echo (isset($context["text_date"]) ? $context["text_date"] : null);
        echo "\">
                  ";
        // line 81
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "date")) {
            // line 82
            echo "                  <option value=\"date\" selected=\"selected\">";
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>
                  ";
        } else {
            // line 84
            echo "                  <option value=\"date\">";
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>
                  ";
        }
        // line 86
        echo "                  ";
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "time")) {
            // line 87
            echo "                  <option value=\"time\" selected=\"selected\">";
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>
                  ";
        } else {
            // line 89
            echo "                  <option value=\"time\">";
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>
                  ";
        }
        // line 91
        echo "                  ";
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "datetime")) {
            // line 92
            echo "                  <option value=\"datetime\" selected=\"selected\">";
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>
                  ";
        } else {
            // line 94
            echo "                  <option value=\"datetime\">";
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>
                  ";
        }
        // line 96
        echo "                </optgroup>
              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 100
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 108
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 111
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">
                        ";
        // line 118
        if (((isset($context["sort"]) ? $context["sort"] : null) == "od.name")) {
            // line 119
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 121
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        }
        // line 123
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 125
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.sort_order")) {
            // line 126
            echo "                        <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                        ";
        } else {
            // line 128
            echo "                        <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                        ";
        }
        // line 130
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 131
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 135
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 136
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 137
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 139
                if (twig_in_filter($this->getAttribute($context["option"], "option_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 140
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["option"], "option_id", array());
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 142
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["option"], "option_id", array());
                    echo "\" />
                        ";
                }
                // line 144
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 145
                echo $this->getAttribute($context["option"], "name", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 146
                echo $this->getAttribute($context["option"], "sort_order", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 147
                echo $this->getAttribute($context["option"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                    ";
        } else {
            // line 151
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"4\">";
            // line 152
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 155
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 160
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 161
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/option&user_token=";
        // line 170
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_type = \$('select[name=\\'filter_type\\']').val();

\tif (filter_type) {
\t\turl += '&filter_type=' + encodeURIComponent(filter_type);
\t}

\tlocation = url;
});
//--></script>
</div>
";
        // line 188
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/option_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 188,  448 => 170,  436 => 161,  432 => 160,  425 => 155,  419 => 152,  416 => 151,  413 => 150,  402 => 147,  398 => 146,  394 => 145,  391 => 144,  385 => 142,  379 => 140,  377 => 139,  373 => 137,  368 => 136,  366 => 135,  359 => 131,  356 => 130,  348 => 128,  338 => 126,  336 => 125,  332 => 123,  324 => 121,  314 => 119,  312 => 118,  302 => 111,  296 => 108,  285 => 100,  279 => 96,  273 => 94,  267 => 92,  264 => 91,  258 => 89,  252 => 87,  249 => 86,  243 => 84,  237 => 82,  235 => 81,  231 => 80,  228 => 79,  222 => 77,  216 => 75,  214 => 74,  210 => 73,  207 => 72,  201 => 70,  195 => 68,  192 => 67,  186 => 65,  180 => 63,  178 => 62,  174 => 61,  171 => 60,  165 => 58,  159 => 56,  156 => 55,  150 => 53,  144 => 51,  141 => 50,  135 => 48,  129 => 46,  127 => 45,  123 => 44,  117 => 41,  109 => 38,  105 => 37,  98 => 33,  92 => 29,  84 => 25,  81 => 24,  73 => 20,  71 => 19,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-option').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-option').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-option" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-type">{{ entry_type }}</label>*/
/*               <select name="filter_type" id="input-type" class="form-control">*/
/*                 <option value=""></option>*/
/*                 <optgroup label="{{ text_choose }}">*/
/*                   {% if filter_type == 'select' %}*/
/*                   <option value="select" selected="selected">{{ text_select }}</option>*/
/*                   {% else %}*/
/*                   <option value="select">{{ text_select }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_type == 'radio' %}*/
/*                   <option value="radio" selected="selected">{{ text_radio }}</option>*/
/*                   {% else %}*/
/*                   <option value="radio">{{ text_radio }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_type == 'checkbox' %}*/
/*                   <option value="checkbox" selected="selected">{{ text_checkbox }}</option>*/
/*                   {% else %}*/
/*                   <option value="checkbox">{{ text_checkbox }}</option>*/
/*                   {% endif %}*/
/*                 </optgroup>*/
/*                 <optgroup label="{{ text_input }}">*/
/*                   {% if filter_type == 'text' %}*/
/*                   <option value="text" selected="selected">{{ text_text }}</option>*/
/*                   {% else %}*/
/*                   <option value="text">{{ text_text }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_type == 'textarea' %}*/
/*                   <option value="textarea" selected="selected">{{ text_textarea }}</option>*/
/*                   {% else %}*/
/*                   <option value="textarea">{{ text_textarea }}</option>*/
/*                   {% endif %}*/
/*                 </optgroup>*/
/*                 <optgroup label="{{ text_file }}">*/
/*                   {% if filter_type == 'file' %}*/
/*                   <option value="file" selected="selected">{{ text_file }}</option>*/
/*                   {% else %}*/
/*                   <option value="file">{{ text_file }}</option>*/
/*                   {% endif %}*/
/*                 </optgroup>*/
/*                 <optgroup label="{{ text_date }}">*/
/*                   {% if filter_type == 'date' %}*/
/*                   <option value="date" selected="selected">{{ text_date }}</option>*/
/*                   {% else %}*/
/*                   <option value="date">{{ text_date }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_type == 'time' %}*/
/*                   <option value="time" selected="selected">{{ text_time }}</option>*/
/*                   {% else %}*/
/*                   <option value="time">{{ text_time }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_type == 'datetime' %}*/
/*                   <option value="datetime" selected="selected">{{ text_datetime }}</option>*/
/*                   {% else %}*/
/*                   <option value="datetime">{{ text_datetime }}</option>*/
/*                   {% endif %}*/
/*                 </optgroup>*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-option">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'od.name' %}*/
/*                         <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">*/
/*                         {% if sort == 'o.sort_order' %}*/
/*                         <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if options %}*/
/*                     {% for option in options %}*/
/*                     <tr>*/
/*                       <td class="text-center">*/
/*                         {% if option.option_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ option.option_id }}" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ option.option_id }}" />*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">{{ option.name }}</td>*/
/*                       <td class="text-right">{{ option.sort_order }}</td>*/
/*                       <td class="text-right"><a href="{{ option.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=catalog/option&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_type = $('select[name=\'filter_type\']').val();*/
/* */
/* 	if (filter_type) {*/
/* 		url += '&filter_type=' + encodeURIComponent(filter_type);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
