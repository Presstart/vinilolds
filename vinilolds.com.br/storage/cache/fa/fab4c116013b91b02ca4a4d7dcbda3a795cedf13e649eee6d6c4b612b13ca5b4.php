<?php

/* setting/setting.twig */
class __TwigTemplate_46f3c297270c52e56aa9086ee73864de63ef83576c072e1d1fa5152e4bc0efb0 extends Twig_Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 51
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 54
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 56
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 60
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 62
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 66
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 71
                echo "                    <option value=\"";
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    ";
            } else {
                // line 73
                echo "                    <option value=\"";
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    ";
            }
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 82
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 86
            echo "                    ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 87
                echo "                    <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 89
                echo "                    <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    ";
            }
            // line 91
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 98
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 100
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 101
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 102
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 104
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 107
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 109
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 110
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 111
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 113
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 116
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 118
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 119
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 122
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 125
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 127
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 131
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 133
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 134
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 135
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 137
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 140
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 142
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 143
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 144
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 146
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 149
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 151
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 155
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 156
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 157
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 161
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 163
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 167
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 169
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 172
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 173
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 174
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 177
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 178
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 179
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                    // line 180
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                } else {
                    // line 182
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />
                      ";
                    // line 183
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                }
                // line 184
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                </div>
              </div>
              ";
        }
        // line 190
        echo "            </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 193
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 197
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 198
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 200
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            }
            // line 202
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 207
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 214
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 218
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 219
                echo "                    <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 221
                echo "                    <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    ";
            }
            // line 223
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 228
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 232
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 233
                echo "                    <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 235
                echo "                    <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    ";
            }
            // line 237
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 242
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 246
            echo "                    ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 247
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 249
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    ";
            }
            // line 251
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 256
        echo (isset($context["entry_currency_engine"]) ? $context["entry_currency_engine"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currency_engines"]) ? $context["currency_engines"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 260
            echo "                    ";
            if (($this->getAttribute($context["currency_engine"], "value", array()) == (isset($context["config_currency_engine"]) ? $context["config_currency_engine"] : null))) {
                // line 261
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency_engine"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency_engine"], "text", array());
                echo "</option>
                    ";
            } else {
                // line 263
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency_engine"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["currency_engine"], "text", array());
                echo "</option>
                    ";
            }
            // line 265
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 270
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 273
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 274
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 275
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 277
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 278
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 280
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 282
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 283
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 284
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 286
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 287
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 289
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 293
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 297
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 298
                echo "                    <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 300
                echo "                    <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    ";
            }
            // line 302
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 307
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 311
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 312
                echo "                    <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 314
                echo "                    <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    ";
            }
            // line 316
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 323
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 325
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 328
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 329
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 330
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 332
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 333
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 335
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 337
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 338
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 339
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 341
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 342
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 344
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 348
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 350
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 351
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 352
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 354
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 358
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 360
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 363
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 364
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 365
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 367
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 368
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 370
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 372
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 373
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 374
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 376
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 377
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 379
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 383
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 386
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 387
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 388
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 390
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 391
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 393
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 395
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 396
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 397
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 399
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 400
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 402
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 407
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 409
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 411
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 412
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 413
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>
                    ";
        }
        // line 415
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 418
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 420
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 421
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 422
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>
                    ";
        }
        // line 424
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 428
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 430
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 433
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 434
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 435
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 437
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 438
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 440
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 442
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 443
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 444
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 446
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 447
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 449
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 453
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 456
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 457
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 458
            echo "                      <option value=\"shipping\" selected=\"selected\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        } else {
            // line 460
            echo "                      <option value=\"shipping\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        }
        // line 462
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 463
            echo "                      <option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        } else {
            // line 465
            echo "                      <option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        }
        // line 467
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 471
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 474
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 475
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 476
            echo "                      <option value=\"shipping\" selected=\"selected\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        } else {
            // line 478
            echo "                      <option value=\"shipping\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        }
        // line 480
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 481
            echo "                      <option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        } else {
            // line 483
            echo "                      <option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        }
        // line 485
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 490
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 492
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 495
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 496
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 497
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 499
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 500
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 502
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 504
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 505
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 506
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 508
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 509
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 511
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 515
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 518
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 519
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 520
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 522
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 523
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 525
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 527
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 528
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 529
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 531
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 532
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 534
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 538
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 541
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 542
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 543
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 545
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 546
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 548
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 550
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 551
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 552
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 554
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 555
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 557
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 561
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      ";
        // line 564
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 565
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 566
                echo "                      <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 568
                echo "                      <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            }
            // line 570
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 571
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 575
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 578
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 580
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 581
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 582
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            } else {
                // line 584
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                        ";
                // line 585
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            }
            // line 587
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                    ";
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 591
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 593
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 596
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 599
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 600
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 601
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 603
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 604
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 606
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 608
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 609
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 610
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 612
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 613
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 615
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 619
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 621
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 622
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 623
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>
                    ";
        }
        // line 624
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 627
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 630
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 632
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 633
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 635
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            }
            // line 637
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 643
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 645
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 647
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 651
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 654
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 655
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 656
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 658
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 659
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 661
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 663
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 664
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 665
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 667
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 668
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 670
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 674
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 677
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 678
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 679
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 681
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 682
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 684
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 686
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 687
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 688
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 690
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 691
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 693
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 697
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 700
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 701
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 702
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 703
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 705
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            }
            // line 707
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 708
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 712
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 715
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 716
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 717
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 719
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            }
            // line 721
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 722
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 726
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 728
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 729
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 731
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 732
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 733
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 735
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 736
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 738
            echo "                        </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo "                    </div>
                    ";
        // line 742
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 743
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>
                    ";
        }
        // line 745
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 748
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 751
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 753
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 754
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 755
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 757
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 758
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 760
            echo "                        </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        echo "                    </div>
                    ";
        // line 764
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 765
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>
                    ";
        }
        // line 767
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 770
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 774
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 775
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 777
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            }
            // line 779
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 780
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 784
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 787
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 788
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 789
            echo "                      ";
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 790
                echo "                      <option value=\"";
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      ";
            } else {
                // line 792
                echo "                      <option value=\"";
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      ";
            }
            // line 794
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 795
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 800
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 802
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 805
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 806
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 807
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 809
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 810
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 812
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 814
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 815
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 816
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 818
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 819
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 821
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 825
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 828
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 829
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 830
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 832
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 833
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 835
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 837
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 838
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 839
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 841
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 842
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 844
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 848
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 851
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 852
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 853
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 855
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 856
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 858
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 860
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 861
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 862
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 864
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 865
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 867
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 872
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 874
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      ";
        // line 877
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 878
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 879
                echo "                      <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 881
                echo "                      <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            }
            // line 883
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 888
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 891
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 892
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 893
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 895
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 896
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 898
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 900
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 901
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 902
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 904
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 905
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 907
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 911
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 914
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 915
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 916
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 918
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 919
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 921
        echo "                    </label>
                    <label class=\"radio-inline\"> ";
        // line 922
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 923
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 924
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 926
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 927
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 929
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 933
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 935
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 939
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 942
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 943
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 944
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 945
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 947
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            }
            // line 949
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 950
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 955
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 957
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 960
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 961
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 962
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 963
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 965
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            }
            // line 967
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 968
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 972
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      ";
        // line 975
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 976
            echo "                      ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 977
                echo "                      <option value=\"";
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 979
                echo "                      <option value=\"";
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      ";
            }
            // line 981
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 982
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 987
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 989
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 992
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 993
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 994
            echo "                      ";
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 995
                echo "                      <option value=\"";
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 997
                echo "                      <option value=\"";
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      ";
            }
            // line 999
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1000
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1004
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1007
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 1009
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1010
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1011
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            } else {
                // line 1013
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" />
                          ";
                // line 1014
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            }
            // line 1016
            echo "                        </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1019
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1026
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1027
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1028
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1032
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1033
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1034
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1040
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1042
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      ";
        // line 1045
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1046
            echo "                      <option value=\"mail\" selected=\"selected\">";
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      ";
        } else {
            // line 1048
            echo "                      <option value=\"mail\">";
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      ";
        }
        // line 1050
        echo "                      ";
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1051
            echo "                      <option value=\"smtp\" selected=\"selected\">";
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      ";
        } else {
            // line 1053
            echo "                      <option value=\"smtp\">";
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      ";
        }
        // line 1055
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1059
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1061
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1065
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1067
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1071
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1073
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1077
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1079
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1083
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1085
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1089
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1091
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1096
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1098
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1101
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 1103
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1104
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1105
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            } else {
                // line 1107
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" />
                          ";
                // line 1108
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            }
            // line 1110
            echo "                        </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1113
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1117
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1119
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1126
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1128
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1131
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1132
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1133
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1135
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1136
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1138
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1140
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1141
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1142
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1144
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1145
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1147
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1151
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1154
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1155
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1156
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1158
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1159
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1161
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1163
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1164
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1165
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1167
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1168
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1170
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1174
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1176
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1180
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1182
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1187
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1189
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1192
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1193
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1194
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1196
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1197
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1199
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1201
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1202
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1203
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1205
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1206
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1208
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1212
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1215
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1216
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1217
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1219
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1220
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1222
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1224
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1225
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1226
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1228
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1229
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1231
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1235
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1238
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1239
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1240
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1242
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1243
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1245
        echo "                    </label>
                    <label class=\"radio-inline\"> ";
        // line 1246
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1247
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1248
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1250
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1251
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1253
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1257
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1259
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>
                    ";
        // line 1260
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1261
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>
                    ";
        }
        // line 1263
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-cron-url-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 1266
        echo (isset($context["help_cron_token"]) ? $context["help_cron_token"] : null);
        echo "\">";
        echo (isset($context["entry_cron_token"]) ? $context["entry_cron_token"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_cron_token\" value=\"";
        // line 1268
        echo (isset($context["config_cron_token"]) ? $context["config_cron_token"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cron_token"]) ? $context["entry_cron_token"] : null);
        echo "\" id=\"input-cron-url-key\" class=\"form-control\" />
                    ";
        // line 1269
        if ((isset($context["error_cron_token"]) ? $context["error_cron_token"] : null)) {
            // line 1270
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_cron_token"]) ? $context["error_cron_token"] : null);
            echo "</div>
                    ";
        }
        // line 1272
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1276
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1278
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1280
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1284
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1286
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1290
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1292
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1297
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1299
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1302
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1303
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1304
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1306
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1307
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1309
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1311
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1312
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1313
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1315
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1316
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1318
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1322
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1325
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1326
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1327
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1329
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1330
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1332
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1334
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1335
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1336
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1338
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1339
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1341
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1345
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1347
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1348
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1349
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>
                    ";
        }
        // line 1351
        echo "                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
    \$.ajax({
        url: 'index.php?route=setting/setting/theme&user_token=";
        // line 1363
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$('select[name=\\'config_theme\\']').prop('disabled', true);
        },
        complete: function() {
            \$('select[name=\\'config_theme\\']').prop('disabled', false);
        },
        success: function(html) {
            \$('#theme').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
    \$.ajax({
        url: 'index.php?route=localisation/country/country&user_token=";
        // line 1385
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$('select[name=\\'config_country_id\\']').prop('disabled', true);
        },
        complete: function() {
            \$('select[name=\\'config_country_id\\']').prop('disabled', false);
        },
        success: function(json) {
            html = '<option value=\"\">";
        // line 1394
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1400
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 1407
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
            }

            \$('select[name=\\'config_zone_id\\']').html(html);
            
            \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
</div>
";
        // line 1423
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3592 => 1423,  3573 => 1407,  3563 => 1400,  3554 => 1394,  3542 => 1385,  3517 => 1363,  3503 => 1351,  3497 => 1349,  3495 => 1348,  3489 => 1347,  3484 => 1345,  3478 => 1341,  3473 => 1339,  3470 => 1338,  3465 => 1336,  3462 => 1335,  3460 => 1334,  3456 => 1332,  3451 => 1330,  3448 => 1329,  3443 => 1327,  3440 => 1326,  3438 => 1325,  3432 => 1322,  3426 => 1318,  3421 => 1316,  3418 => 1315,  3413 => 1313,  3410 => 1312,  3408 => 1311,  3404 => 1309,  3399 => 1307,  3396 => 1306,  3391 => 1304,  3388 => 1303,  3386 => 1302,  3380 => 1299,  3375 => 1297,  3365 => 1292,  3358 => 1290,  3349 => 1286,  3342 => 1284,  3333 => 1280,  3326 => 1278,  3321 => 1276,  3315 => 1272,  3309 => 1270,  3307 => 1269,  3301 => 1268,  3294 => 1266,  3289 => 1263,  3283 => 1261,  3281 => 1260,  3275 => 1259,  3268 => 1257,  3262 => 1253,  3257 => 1251,  3254 => 1250,  3249 => 1248,  3246 => 1247,  3244 => 1246,  3241 => 1245,  3236 => 1243,  3233 => 1242,  3228 => 1240,  3225 => 1239,  3223 => 1238,  3215 => 1235,  3209 => 1231,  3204 => 1229,  3201 => 1228,  3196 => 1226,  3193 => 1225,  3191 => 1224,  3187 => 1222,  3182 => 1220,  3179 => 1219,  3174 => 1217,  3171 => 1216,  3169 => 1215,  3161 => 1212,  3155 => 1208,  3150 => 1206,  3147 => 1205,  3142 => 1203,  3139 => 1202,  3137 => 1201,  3133 => 1199,  3128 => 1197,  3125 => 1196,  3120 => 1194,  3117 => 1193,  3115 => 1192,  3107 => 1189,  3102 => 1187,  3092 => 1182,  3085 => 1180,  3076 => 1176,  3069 => 1174,  3063 => 1170,  3058 => 1168,  3055 => 1167,  3050 => 1165,  3047 => 1164,  3045 => 1163,  3041 => 1161,  3036 => 1159,  3033 => 1158,  3028 => 1156,  3025 => 1155,  3023 => 1154,  3015 => 1151,  3009 => 1147,  3004 => 1145,  3001 => 1144,  2996 => 1142,  2993 => 1141,  2991 => 1140,  2987 => 1138,  2982 => 1136,  2979 => 1135,  2974 => 1133,  2971 => 1132,  2969 => 1131,  2961 => 1128,  2956 => 1126,  2944 => 1119,  2937 => 1117,  2931 => 1113,  2923 => 1110,  2918 => 1108,  2913 => 1107,  2908 => 1105,  2903 => 1104,  2901 => 1103,  2897 => 1101,  2893 => 1100,  2886 => 1098,  2881 => 1096,  2871 => 1091,  2866 => 1089,  2857 => 1085,  2852 => 1083,  2843 => 1079,  2836 => 1077,  2827 => 1073,  2822 => 1071,  2813 => 1067,  2806 => 1065,  2797 => 1061,  2790 => 1059,  2784 => 1055,  2778 => 1053,  2772 => 1051,  2769 => 1050,  2763 => 1048,  2757 => 1046,  2755 => 1045,  2747 => 1042,  2742 => 1040,  2733 => 1034,  2727 => 1033,  2721 => 1032,  2714 => 1028,  2708 => 1027,  2704 => 1026,  2695 => 1019,  2687 => 1016,  2682 => 1014,  2677 => 1013,  2672 => 1011,  2667 => 1010,  2665 => 1009,  2661 => 1007,  2657 => 1006,  2652 => 1004,  2646 => 1000,  2640 => 999,  2632 => 997,  2624 => 995,  2621 => 994,  2617 => 993,  2613 => 992,  2605 => 989,  2600 => 987,  2593 => 982,  2587 => 981,  2579 => 979,  2571 => 977,  2568 => 976,  2564 => 975,  2556 => 972,  2550 => 968,  2544 => 967,  2536 => 965,  2528 => 963,  2525 => 962,  2521 => 961,  2517 => 960,  2509 => 957,  2504 => 955,  2497 => 950,  2491 => 949,  2483 => 947,  2475 => 945,  2472 => 944,  2468 => 943,  2464 => 942,  2456 => 939,  2447 => 935,  2440 => 933,  2434 => 929,  2429 => 927,  2426 => 926,  2421 => 924,  2418 => 923,  2416 => 922,  2413 => 921,  2408 => 919,  2405 => 918,  2400 => 916,  2397 => 915,  2395 => 914,  2387 => 911,  2381 => 907,  2376 => 905,  2373 => 904,  2368 => 902,  2365 => 901,  2363 => 900,  2359 => 898,  2354 => 896,  2351 => 895,  2346 => 893,  2343 => 892,  2341 => 891,  2333 => 888,  2327 => 884,  2321 => 883,  2313 => 881,  2305 => 879,  2302 => 878,  2298 => 877,  2292 => 874,  2287 => 872,  2280 => 867,  2275 => 865,  2272 => 864,  2267 => 862,  2264 => 861,  2262 => 860,  2258 => 858,  2253 => 856,  2250 => 855,  2245 => 853,  2242 => 852,  2240 => 851,  2232 => 848,  2226 => 844,  2221 => 842,  2218 => 841,  2213 => 839,  2210 => 838,  2208 => 837,  2204 => 835,  2199 => 833,  2196 => 832,  2191 => 830,  2188 => 829,  2186 => 828,  2178 => 825,  2172 => 821,  2167 => 819,  2164 => 818,  2159 => 816,  2156 => 815,  2154 => 814,  2150 => 812,  2145 => 810,  2142 => 809,  2137 => 807,  2134 => 806,  2132 => 805,  2124 => 802,  2119 => 800,  2112 => 795,  2106 => 794,  2098 => 792,  2090 => 790,  2087 => 789,  2083 => 788,  2079 => 787,  2071 => 784,  2065 => 780,  2059 => 779,  2051 => 777,  2043 => 775,  2040 => 774,  2036 => 773,  2028 => 770,  2023 => 767,  2017 => 765,  2015 => 764,  2012 => 763,  2004 => 760,  1999 => 758,  1994 => 757,  1989 => 755,  1984 => 754,  1982 => 753,  1978 => 751,  1974 => 750,  1967 => 748,  1962 => 745,  1956 => 743,  1954 => 742,  1951 => 741,  1943 => 738,  1938 => 736,  1933 => 735,  1928 => 733,  1923 => 732,  1921 => 731,  1917 => 729,  1913 => 728,  1906 => 726,  1900 => 722,  1894 => 721,  1886 => 719,  1878 => 717,  1875 => 716,  1871 => 715,  1863 => 712,  1857 => 708,  1851 => 707,  1843 => 705,  1835 => 703,  1832 => 702,  1828 => 701,  1824 => 700,  1816 => 697,  1810 => 693,  1805 => 691,  1802 => 690,  1797 => 688,  1794 => 687,  1792 => 686,  1788 => 684,  1783 => 682,  1780 => 681,  1775 => 679,  1772 => 678,  1770 => 677,  1762 => 674,  1756 => 670,  1751 => 668,  1748 => 667,  1743 => 665,  1740 => 664,  1738 => 663,  1734 => 661,  1729 => 659,  1726 => 658,  1721 => 656,  1718 => 655,  1716 => 654,  1708 => 651,  1699 => 647,  1692 => 645,  1687 => 643,  1680 => 638,  1674 => 637,  1666 => 635,  1658 => 633,  1655 => 632,  1651 => 631,  1647 => 630,  1639 => 627,  1634 => 624,  1628 => 623,  1626 => 622,  1620 => 621,  1613 => 619,  1607 => 615,  1602 => 613,  1599 => 612,  1594 => 610,  1591 => 609,  1589 => 608,  1585 => 606,  1580 => 604,  1577 => 603,  1572 => 601,  1569 => 600,  1567 => 599,  1559 => 596,  1554 => 593,  1548 => 591,  1545 => 590,  1537 => 587,  1532 => 585,  1527 => 584,  1522 => 582,  1517 => 581,  1515 => 580,  1511 => 578,  1507 => 577,  1500 => 575,  1494 => 571,  1488 => 570,  1480 => 568,  1472 => 566,  1469 => 565,  1465 => 564,  1457 => 561,  1451 => 557,  1446 => 555,  1443 => 554,  1438 => 552,  1435 => 551,  1433 => 550,  1429 => 548,  1424 => 546,  1421 => 545,  1416 => 543,  1413 => 542,  1411 => 541,  1405 => 538,  1399 => 534,  1394 => 532,  1391 => 531,  1386 => 529,  1383 => 528,  1381 => 527,  1377 => 525,  1372 => 523,  1369 => 522,  1364 => 520,  1361 => 519,  1359 => 518,  1351 => 515,  1345 => 511,  1340 => 509,  1337 => 508,  1332 => 506,  1329 => 505,  1327 => 504,  1323 => 502,  1318 => 500,  1315 => 499,  1310 => 497,  1307 => 496,  1305 => 495,  1297 => 492,  1292 => 490,  1285 => 485,  1279 => 483,  1273 => 481,  1270 => 480,  1264 => 478,  1258 => 476,  1256 => 475,  1252 => 474,  1244 => 471,  1238 => 467,  1232 => 465,  1226 => 463,  1223 => 462,  1217 => 460,  1211 => 458,  1209 => 457,  1205 => 456,  1197 => 453,  1191 => 449,  1186 => 447,  1183 => 446,  1178 => 444,  1175 => 443,  1173 => 442,  1169 => 440,  1164 => 438,  1161 => 437,  1156 => 435,  1153 => 434,  1151 => 433,  1145 => 430,  1140 => 428,  1134 => 424,  1128 => 422,  1126 => 421,  1120 => 420,  1113 => 418,  1108 => 415,  1102 => 413,  1100 => 412,  1094 => 411,  1087 => 409,  1082 => 407,  1075 => 402,  1070 => 400,  1067 => 399,  1062 => 397,  1059 => 396,  1057 => 395,  1053 => 393,  1048 => 391,  1045 => 390,  1040 => 388,  1037 => 387,  1035 => 386,  1027 => 383,  1021 => 379,  1016 => 377,  1013 => 376,  1008 => 374,  1005 => 373,  1003 => 372,  999 => 370,  994 => 368,  991 => 367,  986 => 365,  983 => 364,  981 => 363,  973 => 360,  968 => 358,  962 => 354,  956 => 352,  954 => 351,  948 => 350,  941 => 348,  935 => 344,  930 => 342,  927 => 341,  922 => 339,  919 => 338,  917 => 337,  913 => 335,  908 => 333,  905 => 332,  900 => 330,  897 => 329,  895 => 328,  887 => 325,  882 => 323,  874 => 317,  868 => 316,  860 => 314,  852 => 312,  849 => 311,  845 => 310,  839 => 307,  833 => 303,  827 => 302,  819 => 300,  811 => 298,  808 => 297,  804 => 296,  798 => 293,  792 => 289,  787 => 287,  784 => 286,  779 => 284,  776 => 283,  774 => 282,  770 => 280,  765 => 278,  762 => 277,  757 => 275,  754 => 274,  752 => 273,  744 => 270,  738 => 266,  732 => 265,  724 => 263,  716 => 261,  713 => 260,  709 => 259,  703 => 256,  697 => 252,  691 => 251,  683 => 249,  675 => 247,  672 => 246,  668 => 245,  660 => 242,  654 => 238,  648 => 237,  640 => 235,  632 => 233,  629 => 232,  625 => 231,  619 => 228,  613 => 224,  607 => 223,  599 => 221,  591 => 219,  588 => 218,  584 => 217,  578 => 214,  568 => 207,  562 => 203,  556 => 202,  548 => 200,  540 => 198,  537 => 197,  533 => 196,  527 => 193,  522 => 190,  517 => 187,  509 => 184,  504 => 183,  499 => 182,  494 => 180,  489 => 179,  487 => 178,  484 => 177,  480 => 176,  473 => 174,  470 => 173,  468 => 172,  460 => 169,  453 => 167,  444 => 163,  437 => 161,  430 => 157,  424 => 156,  420 => 155,  411 => 151,  406 => 149,  401 => 146,  395 => 144,  393 => 143,  387 => 142,  382 => 140,  377 => 137,  371 => 135,  369 => 134,  363 => 133,  358 => 131,  349 => 127,  342 => 125,  337 => 122,  331 => 120,  329 => 119,  323 => 118,  318 => 116,  313 => 113,  307 => 111,  305 => 110,  299 => 109,  294 => 107,  289 => 104,  283 => 102,  281 => 101,  275 => 100,  270 => 98,  262 => 92,  256 => 91,  248 => 89,  240 => 87,  237 => 86,  233 => 85,  227 => 82,  219 => 76,  213 => 75,  205 => 73,  197 => 71,  194 => 70,  190 => 69,  184 => 66,  175 => 62,  170 => 60,  161 => 56,  156 => 54,  151 => 51,  145 => 49,  143 => 48,  137 => 47,  132 => 45,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  95 => 32,  89 => 29,  85 => 27,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label> {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_admin_language %}*/
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 control-label" for="input-currency-engine">{{ entry_currency_engine }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency_engine" id="input-currency-engine" class="form-control">*/
/*                     {% for currency_engine in currency_engines %}*/
/*                     {% if currency_engine.value == config_currency_engine %}*/
/*                     <option value="{{ currency_engine.value }}" selected="selected">{{ currency_engine.text }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ currency_engine.value }}">{{ currency_engine.text }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline">*/
/*                     {% if config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                   <label class="radio-inline">*/
/*                     {% if not config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == config_length_class_id %}*/
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control" />*/
/*                     {% if error_voucher_min %}*/
/*                     <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control" />*/
/*                     {% if error_voucher_max %}*/
/*                     <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       {% else %}*/
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       {% else %}*/
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       {% else %}*/
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       {% else %}*/
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control" />*/
/*                     {% if error_login_attempts %}*/
/*                     <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if order_status.order_status_id in config_processing_status %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     {% if error_processing_status %}*/
/*                     <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if order_status.order_status_id in config_complete_status %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     {% if error_complete_status %}*/
/*                     <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for api in apis %}*/
/*                       {% if api.api_id == config_api_id %}*/
/*                       <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_affiliate_id %}*/
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_return_id %}*/
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       {% for return_status in return_statuses %}*/
/*                       {% if return_status.return_status_id == config_return_status_id %}*/
/*                       <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% for captcha in captchas %}*/
/*                       {% if captcha.value == config_captcha %}*/
/*                       <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if captcha_page.value in config_captcha_page %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       {% if config_mail_engine == 'mail' %}*/
/*                       <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       {% else %}*/
/*                       <option value="mail">{{ text_mail }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                       <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       {% else %}*/
/*                       <option value="smtp">{{ text_smtp }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if mail_alert.value in config_mail_alert %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_secure %}*/
/*                       <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_secure %}*/
/*                       <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_password %}*/
/*                       <input type="radio" name="config_password" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_password %}*/
/*                       <input type="radio" name="config_password" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_shared %}*/
/*                       <input type="radio" name="config_shared" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline"> {% if not config_shared %}*/
/*                       <input type="radio" name="config_shared" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                     <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-cron-url-key"><span data-toggle="tooltip" title="{{ help_cron_token }}">{{ entry_cron_token }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_cron_token" value="{{ config_cron_token }}" placeholder="{{ entry_cron_token }}" id="input-cron-url-key" class="form-control" />*/
/*                     {% if error_cron_token %}*/
/*                     <div class="text-danger">{{ error_cron_token }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control" />*/
/*                     {% if error_log %}*/
/*                     <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*             $('select[name=\'config_theme\']').prop('disabled', true);*/
/*         },*/
/*         complete: function() {*/
/*             $('select[name=\'config_theme\']').prop('disabled', false);*/
/*         },*/
/*         success: function(html) {*/
/*             $('#theme').attr('src', html);*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('select[name=\'config_country_id\']').prop('disabled', true);*/
/*         },*/
/*         complete: function() {*/
/*             $('select[name=\'config_country_id\']').prop('disabled', false);*/
/*         },*/
/*         success: function(json) {*/
/*             html = '<option value="">{{ text_select }}</option>';*/
/* */
/*             if (json['zone'] && json['zone'] != '') {*/
/*                 for (i = 0; i < json['zone'].length; i++) {*/
/*                     html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/*                     if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/*                         html += ' selected="selected"';*/
/*                     }*/
/* */
/*                     html += '>' + json['zone'][i]['name'] + '</option>';*/
/*                 }*/
/*             } else {*/
/*                 html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*             }*/
/* */
/*             $('select[name=\'config_zone_id\']').html(html);*/
/*             */
/*             $('#button-save').prop('disabled', false);*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
