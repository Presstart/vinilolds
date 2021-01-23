<?php

/* customer/customer_approval.twig */
class __TwigTemplate_a65befd46de7353f588d15e4d37312a3cba26c737193bef6a6be33fa604ea311 extends Twig_Template
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
      <div class=\"pull-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 5
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
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
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 14
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 19
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 28
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 32
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 33
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-email\">";
        // line 36
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 37
        echo (isset($context["filter_email"]) ? $context["filter_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 40
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 44
            echo "                ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["filter_customer_group_id"]) ? $context["filter_customer_group_id"] : null))) {
                // line 45
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                ";
            } else {
                // line 47
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                ";
            }
            // line 49
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-type\">";
        // line 53
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
              <select name=\"filter_type\" id=\"input-type\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 56
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "customer")) {
            // line 57
            echo "                <option value=\"customer\" selected=\"selected\">";
            echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
            echo "</option>
                ";
        } else {
            // line 59
            echo "                <option value=\"customer\">";
            echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
            echo "</option>
                ";
        }
        // line 61
        echo "                ";
        if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == "affiliate")) {
            // line 62
            echo "                <option value=\"affiliate\" selected=\"selected\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</option>
                ";
        } else {
            // line 64
            echo "                <option value=\"affiliate\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</option>
                ";
        }
        // line 66
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 69
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 71
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 78
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
        // line 86
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div id=\"customer-approval\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#customer-approval').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#customer-approval').load(this.href);
});

\$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=";
        // line 102
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\$('#customer-approval').on('click', '.btn-success, .btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#customer-approval').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
                \$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=";
        // line 126
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

                \$('#customer-approval').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_email = \$('input[name=\\'filter_email\\']').val();

    if (filter_email) {
        url += '&filter_email=' + encodeURIComponent(filter_email);
    }

    var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();

    if (filter_customer_group_id !== '') {
        url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }

    var filter_type = \$('select[name=\\'filter_type\\']').val();

    if (filter_type !== '') {
        url += '&filter_type=' + filter_type;
    }

    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    \$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=";
        // line 170
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 177
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_name\\']').val(item['label']);
    }
});

\$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 197
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_email=' +  encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['email'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_email\\']').val(item['label']);
    }
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    language: '";
        // line 216
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
});
//--></script>
</div>
";
        // line 221
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "customer/customer_approval.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 221,  370 => 216,  348 => 197,  325 => 177,  315 => 170,  268 => 126,  241 => 102,  222 => 86,  211 => 78,  199 => 71,  194 => 69,  189 => 66,  183 => 64,  177 => 62,  174 => 61,  168 => 59,  162 => 57,  160 => 56,  154 => 53,  149 => 50,  143 => 49,  135 => 47,  127 => 45,  124 => 44,  120 => 43,  114 => 40,  106 => 37,  102 => 36,  94 => 33,  90 => 32,  83 => 28,  77 => 24,  69 => 20,  66 => 19,  58 => 15,  56 => 14,  51 => 11,  40 => 9,  36 => 8,  31 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-customer').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
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
/*       <div id="filter-customer" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
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
/*               <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*               <input type="text" name="filter_email" value="{{ filter_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*               <select name="filter_customer_group_id" id="input-customer-group" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% for customer_group in customer_groups %}*/
/*                 {% if customer_group.customer_group_id == filter_customer_group_id %}*/
/*                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-type">{{ entry_type }}</label>*/
/*               <select name="filter_type" id="input-type" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_type == 'customer' %}*/
/*                 <option value="customer" selected="selected">{{ text_customer }}</option>*/
/*                 {% else %}*/
/*                 <option value="customer">{{ text_customer }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_type == 'affiliate' %}*/
/*                 <option value="affiliate" selected="selected">{{ text_affiliate }}</option>*/
/*                 {% else %}*/
/*                 <option value="affiliate">{{ text_affiliate }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
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
/*             <div id="customer-approval"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#customer-approval').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#customer-approval').load(this.href);*/
/* });*/
/* */
/* $('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token={{ user_token }}');*/
/* */
/* $('#customer-approval').on('click', '.btn-success, .btn-danger', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     var element = this;*/
/* */
/*     $.ajax({*/
/*         url: $(element).attr('href'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $(element).button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $(element).button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible').remove();*/
/* */
/*             if (json['error']) {*/
/*                 $('#customer-approval').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*                 $('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token={{ user_token }}');*/
/* */
/*                 $('#customer-approval').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('#button-filter').on('click', function() {*/
/*     url = '';*/
/* */
/*     var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*     if (filter_name) {*/
/*         url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*     }*/
/* */
/*     var filter_email = $('input[name=\'filter_email\']').val();*/
/* */
/*     if (filter_email) {*/
/*         url += '&filter_email=' + encodeURIComponent(filter_email);*/
/*     }*/
/* */
/*     var filter_customer_group_id = $('select[name=\'filter_customer_group_id\']').val();*/
/* */
/*     if (filter_customer_group_id !== '') {*/
/*         url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);*/
/*     }*/
/* */
/*     var filter_type = $('select[name=\'filter_type\']').val();*/
/* */
/*     if (filter_type !== '') {*/
/*         url += '&filter_type=' + filter_type;*/
/*     }*/
/* */
/*     var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/*     if (filter_date_added) {*/
/*         url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/*     }*/
/* */
/*     $('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token={{ user_token }}' + url);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('input[name=\'filter_name\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*         $.ajax({*/
/*             url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 response($.map(json, function(item) {*/
/*                     return {*/
/*                         label: item['name'],*/
/*                         value: item['customer_id']*/
/*                     }*/
/*                 }));*/
/*             }*/
/*         });*/
/*     },*/
/*     'select': function(item) {*/
/*         $('input[name=\'filter_name\']').val(item['label']);*/
/*     }*/
/* });*/
/* */
/* $('input[name=\'filter_email\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*         $.ajax({*/
/*             url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_email=' +  encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 response($.map(json, function(item) {*/
/*                     return {*/
/*                         label: item['email'],*/
/*                         value: item['customer_id']*/
/*                     }*/
/*                 }));*/
/*             }*/
/*         });*/
/*     },*/
/*     'select': function(item) {*/
/*         $('input[name=\'filter_email\']').val(item['label']);*/
/*     }*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
