<?php

/* catalog/attribute_list.twig */
class __TwigTemplate_cb74c264082e37a3d1f863f37958cb8696437aeeaed21c024699cf104d3606ae extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-attribute').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "') ? \$('#form-attribute').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
      <div id=\"filter-attribute\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
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
              <label class=\"control-label\" for=\"input-attribute-group-id\">";
        // line 41
        echo (isset($context["entry_attribute_group"]) ? $context["entry_attribute_group"] : null);
        echo "</label>
              <select name=\"filter_attribute_group_id\" id=\"input-attribute-group-id\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute($context["attribute_group"], "attribute_group_id", array()) == (isset($context["filter_attribute_group_id"]) ? $context["filter_attribute_group_id"] : null))) {
                // line 46
                echo "                <option value=\"";
                echo $this->getAttribute($context["attribute_group"], "attribute_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</option>
                ";
            } else {
                // line 48
                echo "                <option value=\"";
                echo $this->getAttribute($context["attribute_group"], "attribute_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</option>
                ";
            }
            // line 50
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 54
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
        // line 62
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 65
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-attribute\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">
                        ";
        // line 72
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ad.name")) {
            // line 73
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 75
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        }
        // line 77
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 79
        if (((isset($context["sort"]) ? $context["sort"] : null) == "attribute_group")) {
            // line 80
            echo "                        <a href=\"";
            echo (isset($context["sort_attribute_group"]) ? $context["sort_attribute_group"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_attribute_group"]) ? $context["column_attribute_group"] : null);
            echo "</a>
                        ";
        } else {
            // line 82
            echo "                        <a href=\"";
            echo (isset($context["sort_attribute_group"]) ? $context["sort_attribute_group"] : null);
            echo "\">";
            echo (isset($context["column_attribute_group"]) ? $context["column_attribute_group"] : null);
            echo "</a>
                        ";
        }
        // line 84
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 86
        if (((isset($context["sort"]) ? $context["sort"] : null) == "a.sort_order")) {
            // line 87
            echo "                        <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                        ";
        } else {
            // line 89
            echo "                        <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                        ";
        }
        // line 91
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 92
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 96
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 97
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 98
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 100
                if (twig_in_filter($this->getAttribute($context["attribute"], "attribute_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 101
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["attribute"], "attribute_id", array());
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 103
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["attribute"], "attribute_id", array());
                    echo "\" />
                        ";
                }
                // line 105
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 106
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 107
                echo $this->getAttribute($context["attribute"], "attribute_group", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 108
                echo $this->getAttribute($context["attribute"], "sort_order", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 109
                echo $this->getAttribute($context["attribute"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                    ";
        } else {
            // line 113
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"5\">";
            // line 114
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 117
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 122
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 123
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
\turl = 'index.php?route=catalog/attribute&user_token=";
        // line 132
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_attribute_group_id = \$('select[name=\\'filter_attribute_group_id\\']').val();

\tif (filter_attribute_group_id) {
\t\turl += '&filter_attribute_group_id=' + encodeURIComponent(filter_attribute_group_id);
\t}

\tlocation = url;
});
//--></script>
</div>
";
        // line 150
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/attribute_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 150,  348 => 132,  336 => 123,  332 => 122,  325 => 117,  319 => 114,  316 => 113,  313 => 112,  302 => 109,  298 => 108,  294 => 107,  290 => 106,  287 => 105,  281 => 103,  275 => 101,  273 => 100,  269 => 98,  264 => 97,  262 => 96,  255 => 92,  252 => 91,  244 => 89,  234 => 87,  232 => 86,  228 => 84,  220 => 82,  210 => 80,  208 => 79,  204 => 77,  196 => 75,  186 => 73,  184 => 72,  174 => 65,  168 => 62,  157 => 54,  152 => 51,  146 => 50,  138 => 48,  130 => 46,  127 => 45,  123 => 44,  117 => 41,  109 => 38,  105 => 37,  98 => 33,  92 => 29,  84 => 25,  81 => 24,  73 => 20,  71 => 19,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-attribute').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-attribute').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*       <div id="filter-attribute" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
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
/*               <label class="control-label" for="input-attribute-group-id">{{ entry_attribute_group }}</label>*/
/*               <select name="filter_attribute_group_id" id="input-attribute-group-id" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 {% if attribute_group.attribute_group_id == filter_attribute_group_id %}*/
/*                 <option value="{{ attribute_group.attribute_group_id }}" selected="selected">{{ attribute_group.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ attribute_group.attribute_group_id }}">{{ attribute_group.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
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
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'ad.name' %}*/
/*                         <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'attribute_group' %}*/
/*                         <a href="{{ sort_attribute_group }}" class="{{ order|lower }}">{{ column_attribute_group }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_attribute_group }}">{{ column_attribute_group }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">*/
/*                         {% if sort == 'a.sort_order' %}*/
/*                         <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if attributes %}*/
/*                     {% for attribute in attributes %}*/
/*                     <tr>*/
/*                       <td class="text-center">*/
/*                         {% if attribute.attribute_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ attribute.attribute_id }}" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ attribute.attribute_id }}" />*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">{{ attribute.name }}</td>*/
/*                       <td class="text-left">{{ attribute.attribute_group }}</td>*/
/*                       <td class="text-right">{{ attribute.sort_order }}</td>*/
/*                       <td class="text-right"><a href="{{ attribute.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
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
/* 	url = 'index.php?route=catalog/attribute&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_attribute_group_id = $('select[name=\'filter_attribute_group_id\']').val();*/
/* */
/* 	if (filter_attribute_group_id) {*/
/* 		url += '&filter_attribute_group_id=' + encodeURIComponent(filter_attribute_group_id);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
