<?php

/* customer/customer_form.twig */
class __TwigTemplate_e573a6e2646d0ca252c1345695044856519e8bfd1ed263ca3a02d048635ef3a4 extends Twig_Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            ";
        // line 30
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 31
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 32
            echo (isset($context["tab_transaction"]) ? $context["tab_transaction"] : null);
            echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 33
            echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
            echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 34
            echo (isset($context["tab_ip"]) ? $context["tab_ip"] : null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 42
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                    ";
        // line 43
        $context["address_row"] = 1;
        // line 44
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 45
            echo "                    <li><a href=\"#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "').remove();\"></i> ";
            echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
            echo " ";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "</a></li>
                    ";
            // line 46
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_address_add"]) ? $context["button_address_add"] : null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 55
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 57
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            echo "                              ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 62
                echo "                              <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                              ";
            } else {
                // line 64
                echo "                              <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                              ";
            }
            // line 66
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 71
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                            ";
        // line 74
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 75
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                            ";
        }
        // line 77
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 80
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 82
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                            ";
        // line 83
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 84
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                            ";
        }
        // line 86
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 89
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 91
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                            ";
        // line 92
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 93
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                            ";
        }
        // line 95
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 98
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 100
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                            ";
        // line 101
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 102
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                            ";
        }
        // line 104
        echo "                          </div>
                        </div>
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 107
            echo "                        ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 108
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 109
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 110
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[";
                    // line 112
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 113
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                              ";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 115
                        echo "                              ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 116
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        } else {
                            // line 118
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        }
                        // line 120
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                            </select>
                            ";
                    // line 122
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 123
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 125
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 128
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 129
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 130
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div>
                              ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 134
                        echo "                              <div class=\"radio\">
                                ";
                        // line 135
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 136
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 137
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 138
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                                </label>
                                ";
                        } else {
                            // line 141
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 142
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                                  ";
                            // line 143
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                                </label>
                                ";
                        }
                        // line 146
                        echo "                              </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                            </div>
                            ";
                    // line 149
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 150
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 152
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 155
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 156
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 157
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div>
                              ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 161
                        echo "                              <div class=\"checkbox\">
                                ";
                        // line 162
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 163
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 164
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 165
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                                </label>
                                ";
                        } else {
                            // line 168
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 169
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                                  ";
                            // line 170
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                                </label>
                                ";
                        }
                        // line 173
                        echo "                              </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                            </div>
                            ";
                    // line 176
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 177
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 179
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 182
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 183
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 184
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 186
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                            ";
                    // line 187
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 188
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 190
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 193
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 194
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 195
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                    // line 197
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                            ";
                    // line 198
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 199
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 201
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 204
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 205
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 206
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                    // line 209
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                            ";
                    // line 210
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 211
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 213
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 216
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 217
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 218
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 221
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span>
                            </div>
                            ";
                    // line 226
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 227
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 229
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 232
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 233
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 234
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 237
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span>
                            </div>
                            ";
                    // line 242
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 243
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 245
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 248
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 249
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 250
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 253
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span>
                            </div>
                            ";
                    // line 258
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 259
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 261
                    echo "                          </div>
                        </div>
                        ";
                }
                // line 264
                echo "                        ";
            }
            // line 265
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 268
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 270
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"password\" name=\"password\" value=\"";
        // line 273
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\" onclick=\"\$('#input-password').attr('type') === 'password' ? \$('#input-password').attr('type', 'text') : \$('#input-password').attr('type', 'password'); \$('#toggle-password').toggleClass('fa-eye fa-eye-slash');\"><i id=\"toggle-password\" class=\"fa fa-eye-slash\"></i></button>
                              </span>
                            </div>
                            ";
        // line 278
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 279
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                            ";
        }
        // line 281
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 284
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"password\" name=\"confirm\" value=\"";
        // line 287
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" autocomplete=\"off\" />
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\" onclick=\"\$('#input-confirm').attr('type') === 'password' ? \$('#input-confirm').attr('type', 'text') : \$('#input-confirm').attr('type', 'password'); \$('#toggle-confirm').toggleClass('fa-eye fa-eye-slash');\"><i id=\"toggle-confirm\" class=\"fa fa-eye-slash\"></i></button>
                              </span>
                            </div>
                            ";
        // line 292
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 293
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                            ";
        }
        // line 295
        echo "                          </div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 299
        echo (isset($context["text_other"]) ? $context["text_other"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 301
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 304
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 305
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 306
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 308
            echo "                              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 309
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 311
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 315
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 318
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 319
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 320
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 322
            echo "                              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 323
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 325
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\"><span data-toggle=\"tooltip\" title=\"";
        // line 329
        echo (isset($context["help_safe"]) ? $context["help_safe"] : null);
        echo "\">";
        echo (isset($context["entry_safe"]) ? $context["entry_safe"] : null);
        echo "</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 332
        if ((isset($context["safe"]) ? $context["safe"] : null)) {
            // line 333
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 334
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        } else {
            // line 336
            echo "                              <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 337
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        }
        // line 339
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 344
        $context["address_row"] = 1;
        // line 345
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 346
            echo "                    <div class=\"tab-pane\" id=\"tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                      <input type=\"hidden\" name=\"address[";
            // line 347
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_id]\" value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 349
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 351
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][firstname]\" value=\"";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "\" id=\"input-firstname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 352
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array())) {
                // line 353
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array());
                echo "</div>
                          ";
            }
            // line 355
            echo "                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname";
            // line 358
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 360
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][lastname]\" value=\"";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "\" id=\"input-lastname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 361
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array())) {
                // line 362
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array());
                echo "</div>
                          ";
            }
            // line 364
            echo "                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 367
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 369
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][company]\" value=\"";
            echo $this->getAttribute($context["address"], "company", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "\" id=\"input-company";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 373
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 375
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_1]\" value=\"";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "\" id=\"input-address-1";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 376
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array())) {
                // line 377
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array());
                echo "</div>
                          ";
            }
            // line 379
            echo "                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-2";
            // line 382
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 384
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_2]\" value=\"";
            echo $this->getAttribute($context["address"], "address_2", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "\" id=\"input-address-2";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 388
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 390
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][city]\" value=\"";
            echo $this->getAttribute($context["address"], "city", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "\" id=\"input-city";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 391
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array())) {
                // line 392
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array());
                echo "</div>
                          ";
            }
            // line 394
            echo "                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 397
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 399
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][postcode]\" value=\"";
            echo $this->getAttribute($context["address"], "postcode", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "\" id=\"input-postcode";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 400
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array())) {
                // line 401
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array());
                echo "</div>
                          ";
            }
            // line 403
            echo "                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 406
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 408
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][country_id]\" id=\"input-country";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" onchange=\"country(this, '";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "', '";
            echo $this->getAttribute($context["address"], "zone_id", array());
            echo "');\" class=\"form-control\">
                            <option value=\"\">";
            // line 409
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                            ";
            // line 410
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 411
                echo "                            ";
                if (($this->getAttribute($context["country"], "country_id", array()) == $this->getAttribute($context["address"], "country_id", array()))) {
                    // line 412
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                            ";
                } else {
                    // line 414
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                            ";
                }
                // line 416
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "                          </select>
                          ";
            // line 418
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array())) {
                // line 419
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array());
                echo "</div>
                          ";
            }
            // line 421
            echo "                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 424
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 426
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][zone_id]\" id=\"input-zone";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\">
                          </select>
                          ";
            // line 428
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array())) {
                // line 429
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array());
                echo "</div>
                          ";
            }
            // line 431
            echo "                        </div>
                      </div>
                      ";
            // line 433
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 434
                echo "                      ";
                if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                    // line 435
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                        // line 436
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 437
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
                        // line 439
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">
                            <option value=\"\">";
                        // line 440
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
                            ";
                        // line 441
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 442
                            echo "                            ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 443
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 445
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 447
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 448
                        echo "                          </select>
                          ";
                        // line 449
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 450
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 452
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 455
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                        // line 456
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 457
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 459
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 460
                            echo "                            <div class=\"radio\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 461
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 462
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" />
                                ";
                                // line 463
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            } else {
                                // line 465
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 466
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" />
                                ";
                                // line 467
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "
                              </label>
                              ";
                            }
                            // line 470
                            echo "                            </div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 472
                        echo "                          </div>
                          ";
                        // line 473
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 474
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 476
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 479
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                        // line 480
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 481
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 483
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 484
                            echo "                            <div class=\"checkbox\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 485
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 486
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" />
                                ";
                                // line 487
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            } else {
                                // line 489
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 490
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" />
                                ";
                                // line 491
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "
                              </label>
                              ";
                            }
                            // line 494
                            echo "                            </div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 496
                        echo "                          </div>
                          ";
                        // line 497
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 498
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 500
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 503
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                        // line 504
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 505
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
                        // line 507
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                          ";
                        // line 508
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 509
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 511
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 514
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                        // line 515
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 516
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[";
                        // line 518
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "</textarea>
                          ";
                        // line 519
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 520
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 522
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 525
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                        // line 526
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 527
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address";
                        // line 529
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-loading-text=\"";
                        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                        echo "</button>
                          <input type=\"hidden\" name=\"address[";
                        // line 530
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                        echo "\" />
                          ";
                        // line 531
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 532
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 534
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 537
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                        // line 538
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 539
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[";
                        // line 542
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                          ";
                        // line 547
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 548
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 550
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 553
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                        // line 554
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 555
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[";
                        // line 558
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"HH:mm\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                          ";
                        // line 563
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 564
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 566
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 569
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                        // line 570
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo $this->getAttribute($context["custom_field"], "sort_order", array());
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 571
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[";
                        // line 574
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                          ";
                        // line 579
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 580
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 582
                        echo "                        </div>
                      </div>
                      ";
                    }
                    // line 585
                    echo "                      ";
                }
                // line 586
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 587
            echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 588
            echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio-inline\">
                            ";
            // line 591
            if ((($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null)) ||  !(isset($context["addresses"]) ? $context["addresses"] : null))) {
                // line 592
                echo "                            <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" checked=\"checked\" />
                            ";
            } else {
                // line 594
                echo "                            <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" />
                            ";
            }
            // line 596
            echo "                          </label>
                        </div>
                      </div>
                    </div>
                    ";
            // line 600
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 601
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                  </div>
                </div>
              </div>
            </div>
            ";
        // line 606
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 607
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 609
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 614
            echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 616
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 618
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 623
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>";
            // line 628
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 633
            echo (isset($context["text_transaction_add"]) ? $context["text_transaction_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 635
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 637
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 641
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 643
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 648
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_transaction_add"]) ? $context["button_transaction_add"] : null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>";
            // line 653
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 658
            echo (isset($context["text_reward_add"]) ? $context["text_reward_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 660
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 662
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 666
            echo (isset($context["help_points"]) ? $context["help_points"] : null);
            echo "\">";
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 668
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 673
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
            echo "</button>
              </div>
            </div>
            ";
        }
        // line 677
        echo "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 679
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 691
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
  var address_row = ";
        // line 716
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo ";

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 723
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 724
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 728
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 729
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 733
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 734
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 738
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 739
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 743
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 744
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 748
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 749
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 753
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 754
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 758
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 760
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
      ";
        // line 761
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 762
            echo "      html += '         <option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        echo "      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 768
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 769
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
    html += '  </div>';

    // Custom Fields
    ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 774
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 775
                echo "    ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 776
                    echo "
    html += '  <div class=\"form-group custom-field custom-field";
                    // line 777
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 778
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 780
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">";
                    // line 781
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>';

    ";
                    // line 783
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 784
                        echo "    html += '  \t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</option>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 786
                    echo "
    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    ";
                }
                // line 791
                echo "
    ";
                // line 792
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 793
                    echo "    html += '  \t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 794
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    ";
                    // line 798
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 799
                        echo "    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 801
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 806
                echo "
    ";
                // line 807
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 808
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 809
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    ";
                    // line 813
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 814
                        echo "    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 816
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 821
                echo "
    ";
                // line 822
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 823
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 824
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 826
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 830
                echo "
    ";
                // line 831
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 832
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 833
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 835
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 839
                echo "
    ";
                // line 840
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 841
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 842
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 844
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 845
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 849
                echo "
    ";
                // line 850
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 851
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 852
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 854
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 858
                echo "
    ";
                // line 859
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 860
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 861
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 863
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 867
                echo "
    ";
                // line 868
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 869
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 870
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 872
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 876
                echo "
    ";
            }
            // line 878
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 879
        echo "
    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">";
        // line 881
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio-inline\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 893
        echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
        echo " ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
        language: '";
        // line 898
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 903
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 909
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });

    // Sort the custom fields
    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
        if (\$(this).attr('data-sort') <= 0) {
            \$('#tab-address' + address_row + ' .form-group:first').before(this);
        }

        if (\$(this).attr('data-sort') > 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
            \$('#tab-address' + address_row + ' .form-group').eq(parseInt(\$(this).attr('data-sort'))-1).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
            \$('#tab-address' + address_row + ' .form-group:last').after(this);
        }
    });

    address_row++;
  }
//--></script>
<script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
    \$.ajax({
      url: 'index.php?route=localisation/country/country&user_token=";
        // line 934
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 949
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\">";
        // line 962
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
        }

        \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 982
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 988
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1008
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1026
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 1032
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1052
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1071
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1077
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1097
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1115
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1135
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '";
        // line 1172
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 1177
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 1183
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1188
        $context["address_row"] = 1;
        // line 1189
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1190
            echo "
  // Sort the custom fields
  \$('#tab-address";
            // line 1192
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') <= 0) {
        \$('#tab-address";
            // line 1194
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:first').before(this);
    }

    if (\$(this).attr('data-sort') > 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1197
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1198
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').eq(parseInt(\$(this).attr('data-sort'))-1).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1201
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1202
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:last').after(this);
    }
  });
  ";
            // line 1205
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 1206
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1207
        echo "
  // Sort the custom fields
  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') <= 0) {
        \$('#tab-customer .form-group:first').before(this);
    }

    if (\$(this).attr('data-sort') > 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(parseInt(\$(this).attr('data-sort'))-1).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }
  });

//--></script>
<script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
</div>
";
        // line 1234
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3014 => 1234,  2985 => 1207,  2979 => 1206,  2977 => 1205,  2971 => 1202,  2967 => 1201,  2961 => 1198,  2957 => 1197,  2951 => 1194,  2946 => 1192,  2942 => 1190,  2937 => 1189,  2935 => 1188,  2927 => 1183,  2918 => 1177,  2910 => 1172,  2870 => 1135,  2845 => 1115,  2822 => 1097,  2797 => 1077,  2786 => 1071,  2762 => 1052,  2737 => 1032,  2726 => 1026,  2703 => 1008,  2678 => 988,  2667 => 982,  2644 => 962,  2628 => 949,  2610 => 934,  2582 => 909,  2573 => 903,  2565 => 898,  2557 => 893,  2542 => 881,  2538 => 879,  2532 => 878,  2528 => 876,  2515 => 872,  2508 => 870,  2501 => 869,  2499 => 868,  2496 => 867,  2483 => 863,  2476 => 861,  2469 => 860,  2467 => 859,  2464 => 858,  2451 => 854,  2444 => 852,  2437 => 851,  2435 => 850,  2432 => 849,  2423 => 845,  2415 => 844,  2410 => 842,  2403 => 841,  2401 => 840,  2398 => 839,  2385 => 835,  2378 => 833,  2371 => 832,  2369 => 831,  2366 => 830,  2353 => 826,  2346 => 824,  2339 => 823,  2337 => 822,  2334 => 821,  2327 => 816,  2312 => 814,  2308 => 813,  2301 => 809,  2294 => 808,  2292 => 807,  2289 => 806,  2282 => 801,  2269 => 799,  2265 => 798,  2258 => 794,  2253 => 793,  2251 => 792,  2248 => 791,  2241 => 786,  2230 => 784,  2226 => 783,  2221 => 781,  2215 => 780,  2208 => 778,  2202 => 777,  2199 => 776,  2196 => 775,  2193 => 774,  2189 => 773,  2182 => 769,  2178 => 768,  2172 => 764,  2161 => 762,  2157 => 761,  2153 => 760,  2148 => 758,  2141 => 754,  2137 => 753,  2130 => 749,  2126 => 748,  2119 => 744,  2115 => 743,  2108 => 739,  2104 => 738,  2097 => 734,  2093 => 733,  2086 => 729,  2082 => 728,  2075 => 724,  2071 => 723,  2061 => 716,  2033 => 691,  2018 => 679,  2014 => 677,  2005 => 673,  1997 => 668,  1990 => 666,  1983 => 662,  1978 => 660,  1973 => 658,  1965 => 653,  1955 => 648,  1947 => 643,  1942 => 641,  1935 => 637,  1930 => 635,  1925 => 633,  1917 => 628,  1907 => 623,  1899 => 618,  1894 => 616,  1889 => 614,  1881 => 609,  1877 => 607,  1875 => 606,  1869 => 602,  1863 => 601,  1861 => 600,  1855 => 596,  1847 => 594,  1839 => 592,  1837 => 591,  1831 => 588,  1828 => 587,  1822 => 586,  1819 => 585,  1814 => 582,  1808 => 580,  1806 => 579,  1788 => 574,  1778 => 571,  1771 => 570,  1768 => 569,  1763 => 566,  1757 => 564,  1755 => 563,  1737 => 558,  1727 => 555,  1720 => 554,  1717 => 553,  1712 => 550,  1706 => 548,  1704 => 547,  1686 => 542,  1676 => 539,  1669 => 538,  1666 => 537,  1661 => 534,  1655 => 532,  1653 => 531,  1645 => 530,  1635 => 529,  1630 => 527,  1623 => 526,  1620 => 525,  1615 => 522,  1609 => 520,  1607 => 519,  1593 => 518,  1584 => 516,  1577 => 515,  1574 => 514,  1569 => 511,  1563 => 509,  1561 => 508,  1547 => 507,  1538 => 505,  1531 => 504,  1528 => 503,  1523 => 500,  1517 => 498,  1515 => 497,  1512 => 496,  1505 => 494,  1499 => 491,  1491 => 490,  1488 => 489,  1483 => 487,  1475 => 486,  1472 => 485,  1469 => 484,  1465 => 483,  1460 => 481,  1453 => 480,  1450 => 479,  1445 => 476,  1439 => 474,  1437 => 473,  1434 => 472,  1427 => 470,  1421 => 467,  1413 => 466,  1410 => 465,  1405 => 463,  1397 => 462,  1394 => 461,  1391 => 460,  1387 => 459,  1382 => 457,  1375 => 456,  1372 => 455,  1367 => 452,  1361 => 450,  1359 => 449,  1356 => 448,  1350 => 447,  1342 => 445,  1334 => 443,  1331 => 442,  1327 => 441,  1323 => 440,  1313 => 439,  1304 => 437,  1297 => 436,  1294 => 435,  1291 => 434,  1287 => 433,  1283 => 431,  1277 => 429,  1275 => 428,  1268 => 426,  1261 => 424,  1256 => 421,  1250 => 419,  1248 => 418,  1245 => 417,  1239 => 416,  1231 => 414,  1223 => 412,  1220 => 411,  1216 => 410,  1212 => 409,  1202 => 408,  1195 => 406,  1190 => 403,  1184 => 401,  1182 => 400,  1172 => 399,  1165 => 397,  1160 => 394,  1154 => 392,  1152 => 391,  1142 => 390,  1135 => 388,  1122 => 384,  1115 => 382,  1110 => 379,  1104 => 377,  1102 => 376,  1092 => 375,  1085 => 373,  1072 => 369,  1065 => 367,  1060 => 364,  1054 => 362,  1052 => 361,  1042 => 360,  1035 => 358,  1030 => 355,  1024 => 353,  1022 => 352,  1012 => 351,  1005 => 349,  998 => 347,  993 => 346,  988 => 345,  986 => 344,  979 => 339,  974 => 337,  969 => 336,  964 => 334,  959 => 333,  957 => 332,  949 => 329,  943 => 325,  938 => 323,  933 => 322,  928 => 320,  923 => 319,  921 => 318,  915 => 315,  909 => 311,  904 => 309,  899 => 308,  894 => 306,  889 => 305,  887 => 304,  881 => 301,  876 => 299,  870 => 295,  864 => 293,  862 => 292,  852 => 287,  846 => 284,  841 => 281,  835 => 279,  833 => 278,  823 => 273,  817 => 270,  812 => 268,  808 => 266,  802 => 265,  799 => 264,  794 => 261,  788 => 259,  786 => 258,  772 => 253,  764 => 250,  757 => 249,  754 => 248,  749 => 245,  743 => 243,  741 => 242,  727 => 237,  719 => 234,  712 => 233,  709 => 232,  704 => 229,  698 => 227,  696 => 226,  682 => 221,  674 => 218,  667 => 217,  664 => 216,  659 => 213,  653 => 211,  651 => 210,  643 => 209,  635 => 208,  630 => 206,  623 => 205,  620 => 204,  615 => 201,  609 => 199,  607 => 198,  597 => 197,  590 => 195,  583 => 194,  580 => 193,  575 => 190,  569 => 188,  567 => 187,  557 => 186,  550 => 184,  543 => 183,  540 => 182,  535 => 179,  529 => 177,  527 => 176,  524 => 175,  517 => 173,  511 => 170,  505 => 169,  502 => 168,  496 => 165,  490 => 164,  487 => 163,  485 => 162,  482 => 161,  478 => 160,  472 => 157,  465 => 156,  462 => 155,  457 => 152,  451 => 150,  449 => 149,  446 => 148,  439 => 146,  433 => 143,  427 => 142,  424 => 141,  418 => 138,  412 => 137,  409 => 136,  407 => 135,  404 => 134,  400 => 133,  394 => 130,  387 => 129,  384 => 128,  379 => 125,  373 => 123,  371 => 122,  368 => 121,  362 => 120,  354 => 118,  346 => 116,  343 => 115,  339 => 114,  335 => 113,  329 => 112,  322 => 110,  315 => 109,  312 => 108,  309 => 107,  305 => 106,  301 => 104,  295 => 102,  293 => 101,  287 => 100,  282 => 98,  277 => 95,  271 => 93,  269 => 92,  263 => 91,  258 => 89,  253 => 86,  247 => 84,  245 => 83,  239 => 82,  234 => 80,  229 => 77,  223 => 75,  221 => 74,  215 => 73,  210 => 71,  204 => 67,  198 => 66,  190 => 64,  182 => 62,  179 => 61,  175 => 60,  169 => 57,  164 => 55,  153 => 48,  147 => 47,  145 => 46,  132 => 45,  127 => 44,  125 => 43,  121 => 42,  113 => 36,  108 => 34,  104 => 33,  100 => 32,  95 => 31,  93 => 30,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-customer" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-customer" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             {% if customer_id %}*/
/*             <li><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*             <li><a href="#tab-transaction" data-toggle="tab">{{ tab_transaction }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-ip" data-toggle="tab">{{ tab_ip }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="address">*/
/*                     <li class="active"><a href="#tab-customer" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                     <li><a href="#tab-address{{ address_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('#address a:first').tab('show'); $('#address a[href=\'#tab-address{{ address_row }}\']').parent().remove(); $('#tab-address{{ address_row }}').remove();"></i> {{ tab_address }} {{ address_row }}</a></li>*/
/*                     {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li id="address-add"><a onclick="addAddress();"><i class="fa fa-plus-circle"></i> {{ button_address_add }}</a></li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content">*/
/*                     <div class="tab-pane active" id="tab-customer">*/
/*                       <fieldset>*/
/*                         <legend>{{ text_account }}</legend>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                               {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == customer_group_id %}*/
/*                               <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                               {% else %}*/
/*                               <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                               {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                             {% if error_firstname %}*/
/*                             <div class="text-danger">{{ error_firstname }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                             {% if error_lastname %}*/
/*                             <div class="text-danger">{{ error_lastname }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                             {% if error_email %}*/
/*                             <div class="text-danger">{{ error_email }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                             {% if error_telephone %}*/
/*                             <div class="text-danger">{{ error_telephone }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% for custom_field in custom_fields %}*/
/*                         {% if custom_field.location == 'account' %}*/
/*                         {% if custom_field.type == 'select' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                               <option value="">{{ text_select }}</option>*/
/*                               {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                               {% else %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                               {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'radio' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div>*/
/*                               {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               <div class="radio">*/
/*                                 {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                   <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                   {{ custom_field_value.name }}*/
/*                                 </label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                   <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                   {{ custom_field_value.name }}*/
/*                                 </label>*/
/*                                 {% endif %}*/
/*                               </div>*/
/*                               {% endfor %}*/
/*                             </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'checkbox' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div>*/
/*                               {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               <div class="checkbox">*/
/*                                 {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                   <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                   {{ custom_field_value.name }}*/
/*                                 </label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                   <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                   {{ custom_field_value.name }}*/
/*                                 </label>*/
/*                                 {% endif %}*/
/*                               </div>*/
/*                               {% endfor %}*/
/*                             </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'text' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'textarea' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'file' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                             <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'date' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group date">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span>*/
/*                             </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'time' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group time">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span>*/
/*                             </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'datetime' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group datetime">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span>*/
/*                             </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_password }}</legend>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group">*/
/*                               <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" autocomplete="off" />*/
/*                               <span class="input-group-btn">*/
/*                                 <button class="btn btn-default" type="button" onclick="$('#input-password').attr('type') === 'password' ? $('#input-password').attr('type', 'text') : $('#input-password').attr('type', 'password'); $('#toggle-password').toggleClass('fa-eye fa-eye-slash');"><i id="toggle-password" class="fa fa-eye-slash"></i></button>*/
/*                               </span>*/
/*                             </div>*/
/*                             {% if error_password %}*/
/*                             <div class="text-danger">{{ error_password }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group">*/
/*                               <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" autocomplete="off" />*/
/*                               <span class="input-group-btn">*/
/*                                 <button class="btn btn-default" type="button" onclick="$('#input-confirm').attr('type') === 'password' ? $('#input-confirm').attr('type', 'text') : $('#input-confirm').attr('type', 'password'); $('#toggle-confirm').toggleClass('fa-eye fa-eye-slash');"><i id="toggle-confirm" class="fa fa-eye-slash"></i></button>*/
/*                               </span>*/
/*                             </div>*/
/*                             {% if error_confirm %}*/
/*                             <div class="text-danger">{{ error_confirm }}</div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_other }}</legend>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-newsletter">{{ entry_newsletter }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="newsletter" id="input-newsletter" class="form-control">*/
/*                               {% if newsletter %}*/
/*                               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                               <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_enabled }}</option>*/
/*                               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="status" id="input-status" class="form-control">*/
/*                               {% if status %}*/
/*                               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                               <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_enabled }}</option>*/
/*                               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-safe"><span data-toggle="tooltip" title="{{ help_safe }}">{{ entry_safe }}</span></label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="safe" id="input-safe" class="form-control">*/
/*                               {% if safe %}*/
/*                               <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                               <option value="0">{{ text_no }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_yes }}</option>*/
/*                               <option value="0" selected="selected">{{ text_no }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                     </div>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                     <div class="tab-pane" id="tab-address{{ address_row }}">*/
/*                       <input type="hidden" name="address[{{ address_row }}][address_id]" value="{{ address.address_id }}" />*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-firstname{{ address_row }}">{{ entry_firstname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][firstname]" value="{{ address.firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].firstname %}*/
/*                           <div class="text-danger">{{ error_address[address_row].firstname }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-lastname{{ address_row }}">{{ entry_lastname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][lastname]" value="{{ address.lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].lastname %}*/
/*                           <div class="text-danger">{{ error_address[address_row].lastname }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-company{{ address_row }}">{{ entry_company }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][company]" value="{{ address.company }}" placeholder="{{ entry_company }}" id="input-company{{ address_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-address-1{{ address_row }}">{{ entry_address_1 }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][address_1]" value="{{ address.address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].address_1 %}*/
/*                           <div class="text-danger">{{ error_address[address_row].address_1 }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-address-2{{ address_row }}">{{ entry_address_2 }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][address_2]" value="{{ address.address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2{{ address_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-city{{ address_row }}">{{ entry_city }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][city]" value="{{ address.city }}" placeholder="{{ entry_city }}" id="input-city{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].city %}*/
/*                           <div class="text-danger">{{ error_address[address_row].city }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-postcode{{ address_row }}">{{ entry_postcode }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][postcode]" value="{{ address.postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].postcode %}*/
/*                           <div class="text-danger">{{ error_address[address_row].postcode }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-country{{ address_row }}">{{ entry_country }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][country_id]" id="input-country{{ address_row }}" onchange="country(this, '{{ address_row }}', '{{ address.zone_id }}');" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for country in countries %}*/
/*                             {% if country.country_id == address.country_id %}*/
/*                             <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           {% if error_address[address_row].country %}*/
/*                           <div class="text-danger">{{ error_address[address_row].country }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-zone{{ address_row }}">{{ entry_zone }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][zone_id]" id="input-zone{{ address_row }}" class="form-control">*/
/*                           </select>*/
/*                           {% if error_address[address_row].zone %}*/
/*                           <div class="text-danger">{{ error_address[address_row].zone }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% for custom_field in custom_fields %}*/
/*                       {% if custom_field.location == 'address' %}*/
/*                       {% if custom_field.type == 'select' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'radio' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="radio"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                               <label>*/
/*                                 <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% else %}*/
/*                               <label>*/
/*                                 <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                 {{ custom_field_value.name }}*/
/*                               </label>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                           </div>*/
/*                           {% if error_address[address_row].custom_field[custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'checkbox' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="checkbox"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address.custom_field[custom_field.custom_field_id] %}*/
/*                               <label>*/
/*                                 <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% else %}*/
/*                               <label>*/
/*                                 <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                 {{ custom_field_value.name }}*/
/*                               </label>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                           </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'text' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'textarea' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'file' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <button type="button" id="button-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                           <input type="hidden" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] }}" />*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'date' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span>*/
/*                           </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'time' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span>*/
/*                           </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'datetime' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span>*/
/*                           </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <label class="radio-inline">*/
/*                             {% if address.address_id == address_id or not addresses %}*/
/*                             <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" checked="checked" />*/
/*                             {% else %}*/
/*                             <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" />*/
/*                             {% endif %}*/
/*                           </label>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if customer_id %}*/
/*             <div class="tab-pane" id="tab-history">*/
/*               <fieldset>*/
/*                 <legend>{{ text_history }}</legend>*/
/*                 <div id="history"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_history_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="8" placeholder="{{ entry_comment }}" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-transaction">*/
/*               <fieldset>*/
/*                 <legend>{{ text_transaction }}</legend>*/
/*                 <div id="transaction"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_transaction_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-transaction-description">{{ entry_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-transaction-description" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-amount">{{ entry_amount }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="amount" value="" placeholder="{{ entry_amount }}" id="input-amount" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-transaction" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_transaction_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <fieldset>*/
/*                 <legend>{{ text_reward }}</legend>*/
/*                 <div id="reward"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_reward_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-reward-description">{{ entry_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-reward-description" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="points" value="" placeholder="{{ entry_points }}" id="input-points" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-reward" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_reward_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="tab-pane" id="tab-ip">*/
/*               <fieldset>*/
/*                 <legend>{{ text_ip }}</legend>*/
/*                 <div id="ip"></div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'customer_group_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         $('.custom-field').hide();*/
/*         $('.custom-field').removeClass('required');*/
/* */
/*         for (i = 0; i < json.length; i++) {*/
/*           custom_field = json[i];*/
/* */
/*           $('.custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*           if (custom_field['required']) {*/
/*             $('.custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('select[name=\'customer_group_id\']').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   var address_row = {{ address_row }};*/
/* */
/*   function addAddress() {*/
/*     html  = '<div class="tab-pane" id="tab-address' + address_row + '">';*/
/*     html += '  <input type="hidden" name="address[' + address_row + '][address_id]" value="" />';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-firstname' + address_row + '">{{ entry_firstname }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="{{ entry_firstname }}" id="input-firstname' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-lastname' + address_row + '">{{ entry_lastname }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][lastname]" value="" placeholder="{{ entry_lastname }}" id="input-lastname' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-company' + address_row + '">{{ entry_company }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][company]" value="" placeholder="{{ entry_company }}" id="input-company' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-address-1' + address_row + '">{{ entry_address_1 }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_1]" value="" placeholder="{{ entry_address_1 }}" id="input-address-1' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-address-2' + address_row + '">{{ entry_address_2 }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_2]" value="" placeholder="{{ entry_address_2 }}" id="input-address-2' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '">{{ entry_city }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="{{ entry_city }}" id="input-city' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-postcode' + address_row + '">{{ entry_postcode }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="{{ entry_postcode }}" id="input-postcode' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-country' + address_row + '">{{ entry_country }}</label>';*/
/*     html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';*/
/*       html += '         <option value="">{{ text_select }}</option>';*/
/*       {% for country in countries %}*/
/*       html += '         <option value="{{ country.country_id }}">{{ country.name|escape('js') }}</option>';*/
/*       {% endfor %}*/
/*       html += '      </select></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-zone' + address_row + '">{{ entry_zone }}</label>';*/
/*     html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/*     html += '  </div>';*/
/* */
/*     // Custom Fields*/
/*     {% for custom_field in custom_fields %}*/
/*     {% if custom_field.location == 'address' %}*/
/*     {% if custom_field.type == 'select' %}*/
/* */
/*     html += '  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '  		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '  		<div class="col-sm-10">';*/
/*     html += '  		  <select name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">';*/
/*     html += '  			<option value="">{{ text_select }}</option>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '  			<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name|e('js') }}</option>';*/
/*     {% endfor %}*/
/* */
/*     html += '  		  </select>';*/
/*     html += '  		</div>';*/
/*     html += '  	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'radio' %}*/
/*     html += '  	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}">';*/
/*     html += '  		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '  		<div class="col-sm-10">';*/
/*     html += '  		  <div>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '  			<div class="radio"><label><input type="radio" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*     {% endfor %}*/
/* */
/*     html += '		  </div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'checkbox' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '			<div class="checkbox"><label><input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*     {% endfor %}*/
/* */
/*     html += '		  </div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'text' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" />';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'textarea' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <textarea name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value|e('js') }}</textarea>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'file' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <button type="button" id="button-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>';*/
/*     html += '		  <input type="hidden" name="address[' + address_row + '][{{ custom_field.custom_field_id }}]" value="" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" />';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'date' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group date"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }} data-date-format="YYYY-MM-DD" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'time' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group time"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'datetime' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group datetime"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% endif %}*/
/*     {% endfor %}*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label">{{ entry_default }}</label>';*/
/*     html += '    <div class="col-sm-10"><label class="radio-inline"><input type="radio" name="address[' + address_row + '][default]" value="1" /></label></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '</div>';*/
/* */
/*     $('#tab-general .tab-content').append(html);*/
/* */
/*     $('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/*     $('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');*/
/* */
/*     $('#address-add').before('<li><a href="#tab-address' + address_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'#address a:first\').tab(\'show\'); $(\'a[href=\\\'#tab-address' + address_row + '\\\']\').parent().remove(); $(\'#tab-address' + address_row + '\').remove();"></i> {{ tab_address }} ' + address_row + '</a></li>');*/
/* */
/*     $('#address a[href=\'#tab-address' + address_row + '\']').tab('show');*/
/* */
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* */
/*     // Sort the custom fields*/
/*     $('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {*/
/*         if ($(this).attr('data-sort') <= 0) {*/
/*             $('#tab-address' + address_row + ' .form-group:first').before(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') > 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {*/
/*             $('#tab-address' + address_row + ' .form-group').eq(parseInt($(this).attr('data-sort'))-1).before(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {*/
/*             $('#tab-address' + address_row + ' .form-group:last').after(this);*/
/*         }*/
/*     });*/
/* */
/*     address_row++;*/
/*   }*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   function country(element, index, zone_id) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', true);*/
/*       },*/
/*       complete: function() {*/
/*         $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', false);*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['postcode_required'] == '1') {*/
/*           $('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');*/
/*         } else {*/
/*           $('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');*/
/*         }*/
/* */
/*         html = '<option value="">{{ text_select }}</option>';*/
/* */
/*         if (json['zone'] && json['zone'] != '') {*/
/*           for (i = 0; i < json['zone'].length; i++) {*/
/*             html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/*             if (json['zone'][i]['zone_id'] == zone_id) {*/
/*               html += ' selected="selected"';*/
/*             }*/
/* */
/*             html += '>' + json['zone'][i]['name'] + '</option>';*/
/*           }*/
/*         } else {*/
/*           html += '<option value="0">{{ text_none }}</option>';*/
/*         }*/
/* */
/*         $('select[name=\'address[' + index + '][zone_id]\']').html(html);*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   $('select[name$=\'[country_id]\']').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#history').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#history').load(this.href);*/
/*   });*/
/* */
/*   $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-history').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addhistory&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-history').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-history').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-history textarea[name=\'comment\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#transaction').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#transaction').load(this.href);*/
/*   });*/
/* */
/*   $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-transaction').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addtransaction&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'description=' + encodeURIComponent($('#tab-transaction input[name=\'description\']').val()) + '&amount=' + encodeURIComponent($('#tab-transaction input[name=\'amount\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-transaction').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-transaction').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-transaction').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-transaction').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-transaction input[name=\'amount\']').val('');*/
/*           $('#tab-transaction input[name=\'description\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#reward').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#reward').load(this.href);*/
/*   });*/
/* */
/*   $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-reward').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addreward&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'description=' + encodeURIComponent($('#tab-reward input[name=\'description\']').val()) + '&points=' + encodeURIComponent($('#tab-reward input[name=\'points\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-reward').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-reward').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-reward').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-reward').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-reward input[name=\'points\']').val('');*/
/*           $('#tab-reward input[name=\'description\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#ip').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#ip').load(this.href);*/
/*   });*/
/* */
/*   $('#ip').load('index.php?route=customer/customer/ip&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#content').delegate('button[id^=\'button-custom-field\'], button[id^=\'button-address\']', 'click', function() {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*         clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $(node).parent().find('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input[type=\'hidden\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/*             }*/
/* */
/*             if (json['code']) {*/
/*               $(node).parent().find('input[type=\'hidden\']').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* */
/*   $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: false*/
/*   });*/
/* */
/*   // Sort the custom fields*/
/*   {% set address_row = 1 %}*/
/*   {% for address in addresses %}*/
/* */
/*   // Sort the custom fields*/
/*   $('#tab-address{{ address_row }} .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') <= 0) {*/
/*         $('#tab-address{{ address_row }} .form-group:first').before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > 0 && $(this).attr('data-sort') <= $('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group').eq(parseInt($(this).attr('data-sort'))-1).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group:last').after(this);*/
/*     }*/
/*   });*/
/*   {% set address_row = address_row + 1 %}*/
/*   {% endfor %}*/
/* */
/*   // Sort the custom fields*/
/*   $('#tab-customer .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') <= 0) {*/
/*         $('#tab-customer .form-group:first').before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group').eq(parseInt($(this).attr('data-sort'))-1).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group:last').after(this);*/
/*     }*/
/*   });*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('input[name=\'payment\']').on('change', function() {*/
/*     $('.payment').hide();*/
/* */
/*     $('#payment-' + this.value).show();*/
/*   });*/
/* */
/*   $('input[name=\'payment\']:checked').trigger('change');*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
