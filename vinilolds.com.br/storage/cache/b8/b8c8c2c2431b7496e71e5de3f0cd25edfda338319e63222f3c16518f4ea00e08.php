<?php

/* sale/order_list.twig */
class __TwigTemplate_d4ec6abae40bcf164747c407bb99936e7124680a7d3af3bb95fb10e1eb24c236 extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo (isset($context["shipping"]) ? $context["shipping"] : null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_shipping_print"]) ? $context["button_shipping_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_invoice_print"]) ? $context["button_invoice_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 9
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
    </div>
    <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  ";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 25
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 30
        echo "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 34
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 38
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 39
        echo (isset($context["filter_order_id"]) ? $context["filter_order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 42
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 43
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 46
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              ";
        // line 49
        if (((isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null) == "0")) {
            // line 50
            echo "              <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_missing"]) ? $context["text_missing"] : null);
            echo "</option>
              ";
        } else {
            // line 52
            echo "              <option value=\"0\">";
            echo (isset($context["text_missing"]) ? $context["text_missing"] : null);
            echo "</option>
              ";
        }
        // line 54
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 55
            echo "              ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null))) {
                // line 56
                echo "              <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
              ";
            } else {
                // line 58
                echo "              <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
              ";
            }
            // line 60
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-comment\">";
        // line 64
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
            <select name=\"filter_comment\" id=\"input-comment\" class=\"form-control\">
              ";
        // line 66
        if (((isset($context["filter_comment"]) ? $context["filter_comment"] : null) == "0")) {
            // line 67
            echo "              <option value=\"\"></option>
              <option value=\"0\" selected=\"selected\">";
            // line 68
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
              <option value=\"1\">";
            // line 69
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
              ";
        } elseif ((        // line 70
(isset($context["filter_comment"]) ? $context["filter_comment"] : null) == "1")) {
            // line 71
            echo "              <option value=\"\"></option>
              <option value=\"0\">";
            // line 72
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
              <option value=\"1\" selected=\"selected\">";
            // line 73
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
              ";
        } else {
            // line 75
            echo "              <option value=\"\" selected=\"selected\"></option>
              <option value=\"0\">";
            // line 76
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
              <option value=\"1\">";
            // line 77
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
              ";
        }
        // line 79
        echo "            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 82
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 83
        echo (isset($context["filter_total"]) ? $context["filter_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 86
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 88
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 95
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 97
        echo (isset($context["filter_date_modified"]) ? $context["filter_date_modified"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span>
            </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 104
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
        // line 112
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 121
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.order_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 122
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer")) {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 123
        if (((isset($context["sort"]) ? $context["sort"] : null) == "order_status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 124
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.total")) {
            echo " <a href=\"";
            echo (isset($context["sort_total"]) ? $context["sort_total"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_total"]) ? $context["sort_total"] : null);
            echo "\">";
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 125
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 126
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.date_modified")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 127
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 131
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 132
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 133
                echo "                  <tr>
                    <td class=\"text-center\"> ";
                // line 134
                if (twig_in_filter($this->getAttribute($context["order"], "order_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 135
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["order"], "order_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 137
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["order"], "order_id", array());
                    echo "\" />
                      ";
                }
                // line 139
                echo "                      <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo $this->getAttribute($context["order"], "shipping_code", array());
                echo "\" />
                    </td>
                    <td class=\"text-right\">";
                // line 141
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 142
                echo $this->getAttribute($context["order"], "customer", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 143
                echo $this->getAttribute($context["order"], "order_status", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 144
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 145
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 146
                echo $this->getAttribute($context["order"], "date_modified", array());
                echo "</td>
                    <td class=\"text-right\">
                      <div style=\"min-width: 120px;\">
                        <div class=\"btn-group\"> <a href=\"";
                // line 149
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                          <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                          <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li><a href=\"";
                // line 152
                echo $this->getAttribute($context["order"], "edit", array());
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "</a></li>
                            <li><a href=\"";
                // line 153
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "</a></li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                  ";
        } else {
            // line 161
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 162
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 165
        echo "                </tbody>
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 170
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 171
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_comment = \$('select[name=\\'filter_comment\\']').val();

\tif (filter_comment !== '') {
\t\turl += '&filter_comment=' + encodeURIComponent(filter_comment);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 223
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 230
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();

\tvar element = this;

\tif (confirm('";
        // line 280
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 282
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/delete&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=";
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 298
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 312
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script>
</div>
";
        // line 317
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 317,  694 => 312,  677 => 298,  654 => 282,  649 => 280,  596 => 230,  586 => 223,  531 => 171,  527 => 170,  520 => 165,  514 => 162,  511 => 161,  508 => 160,  493 => 153,  487 => 152,  479 => 149,  473 => 146,  469 => 145,  465 => 144,  461 => 143,  457 => 142,  453 => 141,  447 => 139,  441 => 137,  435 => 135,  433 => 134,  430 => 133,  425 => 132,  423 => 131,  416 => 127,  398 => 126,  380 => 125,  362 => 124,  344 => 123,  326 => 122,  308 => 121,  296 => 112,  285 => 104,  273 => 97,  268 => 95,  256 => 88,  251 => 86,  243 => 83,  239 => 82,  234 => 79,  229 => 77,  225 => 76,  222 => 75,  217 => 73,  213 => 72,  210 => 71,  208 => 70,  204 => 69,  200 => 68,  197 => 67,  195 => 66,  190 => 64,  185 => 61,  179 => 60,  171 => 58,  163 => 56,  160 => 55,  155 => 54,  149 => 52,  143 => 50,  141 => 49,  135 => 46,  127 => 43,  123 => 42,  115 => 39,  111 => 38,  104 => 34,  98 => 30,  90 => 26,  87 => 25,  79 => 21,  77 => 20,  71 => 16,  60 => 14,  56 => 13,  51 => 11,  44 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <div class="pull-right">*/
/*       <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-order').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*       <button type="submit" id="button-shipping" form="form-order" formaction="{{ shipping }}" formtarget="_blank" data-toggle="tooltip" title="{{ button_shipping_print }}" class="btn btn-info"><i class="fa fa-truck"></i></button>*/
/*       <button type="submit" id="button-invoice" form="form-order" formaction="{{ invoice }}" formtarget="_blank" data-toggle="tooltip" title="{{ button_invoice_print }}" class="btn btn-info"><i class="fa fa-print"></i></button>*/
/*       <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*     </div>*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div id="filter-order" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*             <input type="text" name="filter_order_id" value="{{ filter_order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*             <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*             <select name="filter_order_status_id" id="input-order-status" class="form-control">*/
/*               <option value=""></option>*/
/*               {% if filter_order_status_id == '0' %}*/
/*               <option value="0" selected="selected">{{ text_missing }}</option>*/
/*               {% else %}*/
/*               <option value="0">{{ text_missing }}</option>*/
/*               {% endif %}*/
/*               {% for order_status in order_statuses %}*/
/*               {% if order_status.order_status_id == filter_order_status_id %}*/
/*               <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*               {% else %}*/
/*               <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-comment">{{ entry_comment }}</label>*/
/*             <select name="filter_comment" id="input-comment" class="form-control">*/
/*               {% if filter_comment == '0' %}*/
/*               <option value=""></option>*/
/*               <option value="0" selected="selected">{{ text_no }}</option>*/
/*               <option value="1">{{ text_yes }}</option>*/
/*               {% elseif filter_comment == '1' %}*/
/*               <option value=""></option>*/
/*               <option value="0">{{ text_no }}</option>*/
/*               <option value="1" selected="selected">{{ text_yes }}</option>*/
/*               {% else %}*/
/*               <option value="" selected="selected"></option>*/
/*               <option value="0">{{ text_no }}</option>*/
/*               <option value="1">{{ text_yes }}</option>*/
/*               {% endif %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-total">{{ entry_total }}</label>*/
/*             <input type="text" name="filter_total" value="{{ filter_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*             <div class="input-group date">*/
/*               <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*               <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-date-modified">{{ entry_date_modified }}</label>*/
/*             <div class="input-group date">*/
/*               <input type="text" name="filter_date_modified" value="{{ filter_date_modified }}" placeholder="{{ entry_date_modified }}" data-date-format="YYYY-MM-DD" id="input-date-modified" class="form-control" />*/
/*               <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group text-right">*/
/*             <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <form method="post" action="" enctype="multipart/form-data" id="form-order">*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered table-hover">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                     <td class="text-right">{% if sort == 'o.order_id' %} <a href="{{ sort_order }}" class="{{ order|lower }}">{{ column_order_id }}</a> {% else %} <a href="{{ sort_order }}">{{ column_order_id }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'customer' %} <a href="{{ sort_customer }}" class="{{ order|lower }}">{{ column_customer }}</a> {% else %} <a href="{{ sort_customer }}">{{ column_customer }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'order_status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                     <td class="text-right">{% if sort == 'o.total' %} <a href="{{ sort_total }}" class="{{ order|lower }}">{{ column_total }}</a> {% else %} <a href="{{ sort_total }}">{{ column_total }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'o.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'o.date_modified' %} <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a> {% else %} <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a> {% endif %}</td>*/
/*                     <td class="text-right">{{ column_action }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   {% if orders %}*/
/*                   {% for order in orders %}*/
/*                   <tr>*/
/*                     <td class="text-center"> {% if order.order_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ order.order_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ order.order_id }}" />*/
/*                       {% endif %}*/
/*                       <input type="hidden" name="shipping_code[]" value="{{ order.shipping_code }}" />*/
/*                     </td>*/
/*                     <td class="text-right">{{ order.order_id }}</td>*/
/*                     <td class="text-left">{{ order.customer }}</td>*/
/*                     <td class="text-left">{{ order.order_status }}</td>*/
/*                     <td class="text-right">{{ order.total }}</td>*/
/*                     <td class="text-left">{{ order.date_added }}</td>*/
/*                     <td class="text-left">{{ order.date_modified }}</td>*/
/*                     <td class="text-right">*/
/*                       <div style="min-width: 120px;">*/
/*                         <div class="btn-group"> <a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>*/
/*                           <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                           <ul class="dropdown-menu dropdown-menu-right">*/
/*                             <li><a href="{{ order.edit }}"><i class="fa fa-pencil"></i> {{ button_edit }}</a></li>*/
/*                             <li><a href="{{ order.order_id }}"><i class="fa fa-trash-o"></i> {{ button_delete }}</a></li>*/
/*                           </ul>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                 </tbody>*/
/*               </table>*/
/*             </div>*/
/*           </form>*/
/*           <div class="row">*/
/*             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = '';*/
/* */
/* 	var filter_order_id = $('input[name=\'filter_order_id\']').val();*/
/* */
/* 	if (filter_order_id) {*/
/* 		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);*/
/* 	}*/
/* */
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* */
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* */
/* 	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').val();*/
/* */
/* 	if (filter_order_status_id !== '') {*/
/* 		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);*/
/* 	}*/
/* */
/* 	var filter_comment = $('select[name=\'filter_comment\']').val();*/
/* */
/* 	if (filter_comment !== '') {*/
/* 		url += '&filter_comment=' + encodeURIComponent(filter_comment);*/
/* 	}*/
/* */
/* 	var filter_total = $('input[name=\'filter_total\']').val();*/
/* */
/* 	if (filter_total) {*/
/* 		url += '&filter_total=' + encodeURIComponent(filter_total);*/
/* 	}*/
/* */
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	var filter_date_modified = $('input[name=\'filter_date_modified\']').val();*/
/* */
/* 	if (filter_date_modified) {*/
/* 		url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=sale/order&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name^=\'selected\']').on('change', function() {*/
/* 	$('#button-shipping, #button-invoice').prop('disabled', true);*/
/* */
/* 	var selected = $('input[name^=\'selected\']:checked');*/
/* */
/* 	if (selected.length) {*/
/* 		$('#button-invoice').prop('disabled', false);*/
/* 	}*/
/* */
/* 	for (i = 0; i < selected.length; i++) {*/
/* 		if ($(selected[i]).parent().find('input[name^=\'shipping_code\']').val()) {*/
/* 			$('#button-shipping').prop('disabled', false);*/
/* */
/* 			break;*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* $('#button-shipping, #button-invoice').prop('disabled', true);*/
/* */
/* $('input[name^=\'selected\']:first').trigger('change');*/
/* */
/* // IE and Edge fix!*/
/* $('#button-shipping, #button-invoice').on('click', function(e) {*/
/* 	$('#form-order').attr('action', this.getAttribute('formAction'));*/
/* });*/
/* */
/* $('#form-order li:last-child a').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	if (confirm('{{ text_confirm }}')) {*/
/* 		$.ajax({*/
/* 			url: '{{ catalog }}index.php?route=api/order/delete&api_token={{ api_token }}&store_id={{ store_id }}&order_id=' + $(element).attr('href'),*/
/* 			dataType: 'json',*/
/* 			beforeSend: function() {*/
/* 				$(element).parent().parent().parent().find('button').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$(element).parent().parent().parent().find('button').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert-dismissible').remove();*/
/* */
/* 				if (json['error']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					location = '{{ delete }}';*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* //--></script> */
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
