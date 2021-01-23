<?php

/* catalog/product_form.twig */
class __TwigTemplate_93736e195823bc1d086205634e1589eab081453717dc99091503a0da269a878c extends Twig_Template
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
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
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
            echo "          <li><a href=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_recurring"]) ? $context["tab_recurring"] : null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_discount"]) ? $context["tab_discount"] : null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                  <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 51
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 53
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 55
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                      ";
            // line 56
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 57
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 59
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 62
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 64
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 70
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                      ";
            // line 71
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 72
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 74
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 83
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 89
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 91
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 100
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 102
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 103
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 104
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                  ";
        }
        // line 106
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 111
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ncm\"><span data-toggle=\"tooltip\" title=\"";
        // line 115
        echo (isset($context["help_ncm"]) ? $context["help_ncm"] : null);
        echo "\">";
        echo (isset($context["entry_ncm"]) ? $context["entry_ncm"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ncm\" value=\"";
        // line 117
        echo (isset($context["ncm"]) ? $context["ncm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ncm"]) ? $context["entry_ncm"] : null);
        echo "\" id=\"input-ncm\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cest\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        echo (isset($context["help_cest"]) ? $context["help_cest"] : null);
        echo "\">";
        echo (isset($context["entry_cest"]) ? $context["entry_cest"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cest\" value=\"";
        // line 123
        echo (isset($context["cest"]) ? $context["cest"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cest"]) ? $context["entry_cest"] : null);
        echo "\" id=\"input-cest\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 127
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 129
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 135
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 139
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 141
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 145
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 147
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 151
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 153
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 157
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 159
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 163
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 165
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 169
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 172
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 174
            echo "                    ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["tax_class_id"]) ? $context["tax_class_id"] : null))) {
                // line 175
                echo "                    <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 177
                echo "                    <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    ";
            }
            // line 179
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 184
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 186
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 190
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 192
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 196
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                    ";
        // line 199
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 200
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 201
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 203
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 204
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        }
        // line 206
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 210
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                    ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 214
            echo "                    ";
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 215
                echo "                    <option value=\"";
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 217
                echo "                    <option value=\"";
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 219
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 224
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 227
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 228
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                    ";
            // line 229
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 231
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                    ";
            // line 232
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 233
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 234
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                    ";
            // line 235
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 237
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                    ";
            // line 238
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 240
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 244
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 247
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 254
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 258
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 261
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 264
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 270
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 274
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 275
                echo "                    <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 277
                echo "                    <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    ";
            }
            // line 279
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 284
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 286
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 290
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 294
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 295
                echo "                    <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 297
                echo "                    <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    ";
            }
            // line 299
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 304
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 307
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 308
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 309
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 311
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 312
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 314
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 318
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 320
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 326
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 328
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 332
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 334
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 337
            echo "                    <div id=\"product-category";
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_category"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 338
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"/>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 345
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 347
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 350
            echo "                    <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 351
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"/>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 358
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 362
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 364
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 365
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\"/>
                        ";
                // line 366
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 368
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\"/>
                        ";
                // line 369
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 371
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 378
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 380
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 383
            echo "                    <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\">
                      <i class=\"fa fa-minus-circle\"></i> ";
            // line 384
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 385
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"/>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 392
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 394
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 397
            echo "                    <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\">
                      <i class=\"fa fa-minus-circle\"></i> ";
            // line 398
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 399
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"/>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 411
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 412
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 417
        $context["attribute_row"] = 0;
        // line 418
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 419
            echo "                    <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                      <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 420
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\"/></td>
                      <td class=\"text-left\">
                        ";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 423
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\">
                          <img src=\"language/";
                // line 424
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span>
                          <textarea name=\"product_attribute[";
                // line 425
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 428
            echo "                      </td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 429
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 431
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
            // line 432
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 437
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 447
        $context["option_row"] = 0;
        // line 448
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 449
            echo "                    <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "</a></li>
                    ";
            // line 450
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 451
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "                    <li><input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\" id=\"input-option\" class=\"form-control\"/></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    ";
        // line 457
        $context["option_row"] = 0;
        // line 458
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 459
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 460
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 461
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\" value=\"";
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\"/>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 463
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 465
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\" id=\"input-required";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\">
                            ";
            // line 466
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 467
                echo "                            <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\">";
                // line 468
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            ";
            } else {
                // line 470
                echo "                            <option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 471
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            ";
            }
            // line 473
            echo "                          </select>
                        </div>
                      </div>
                      ";
            // line 476
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 477
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 478
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 480
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                        </div>
                      </div>
                      ";
            }
            // line 484
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 485
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 486
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 488
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 492
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 493
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 494
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 496
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                        </div>
                      </div>
                      ";
            }
            // line 500
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 501
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 502
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 505
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 513
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 514
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 515
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 518
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 526
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 527
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 528
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 531
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 539
            echo "                      ";
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 540
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 541
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\" style=\"min-width: 100px;\">";
                // line 544
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                              <td class=\"text-left\" style=\"min-width: 100px;\">";
                // line 545
                echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 546
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 547
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                              <td class=\"text-right\" style=\"min-width: 100px;\">";
                // line 548
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                              <td class=\"text-right\" style=\"min-width: 100px;\">";
                // line 549
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                              <td class=\"text-right\" style=\"min-width: 100px;\">";
                // line 550
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                            ";
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 556
                    echo "                            <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                              <td class=\"text-left\">
                                <select name=\"product_option[";
                    // line 558
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\" class=\"form-control\">
                                  ";
                    // line 559
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 560
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 561
                            echo "                                  ";
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 562
                                echo "                                  <option value=\"";
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                  ";
                            } else {
                                // line 564
                                echo "                                  <option value=\"";
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                  ";
                            }
                            // line 566
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 567
                        echo "                                  ";
                    }
                    // line 568
                    echo "                                </select>
                                <input type=\"hidden\" name=\"product_option[";
                    // line 569
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\"/>
                              </td>
                              <td class=\"text-left\"><input type=\"text\" name=\"product_option[";
                    // line 571
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][sku]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "sku", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
                    echo "\" class=\"form-control\" /></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 572
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\" class=\"form-control\"/></td>
                              <td class=\"text-left\">
                                <select name=\"product_option[";
                    // line 574
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\" class=\"form-control\">
                                  ";
                    // line 575
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 576
                        echo "                                  <option value=\"1\" selected=\"selected\">";
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                  <option value=\"0\">";
                        // line 577
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                  ";
                    } else {
                        // line 579
                        echo "                                  <option value=\"1\">";
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                  <option value=\"0\" selected=\"selected\">";
                        // line 580
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                  ";
                    }
                    // line 582
                    echo "                                </select>
                              </td>
                              <td class=\"text-right\">
                                <select name=\"product_option[";
                    // line 585
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\" class=\"form-control\">
                                  ";
                    // line 586
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 587
                        echo "                                  <option value=\"+\" selected=\"selected\">+</option>
                                  ";
                    } else {
                        // line 589
                        echo "                                  <option value=\"+\">+</option>
                                  ";
                    }
                    // line 591
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 592
                        echo "                                  <option value=\"-\" selected=\"selected\">-</option>
                                  ";
                    } else {
                        // line 594
                        echo "                                  <option value=\"-\">-</option>
                                  ";
                    }
                    // line 596
                    echo "                                </select>
                                <input type=\"text\" name=\"product_option[";
                    // line 597
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\" class=\"form-control\"/>
                              </td>
                              <td class=\"text-right\">
                                <select name=\"product_option[";
                    // line 600
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\" class=\"form-control\">
                                  ";
                    // line 601
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 602
                        echo "                                  <option value=\"+\" selected=\"selected\">+</option>
                                  ";
                    } else {
                        // line 604
                        echo "                                  <option value=\"+\">+</option>
                                  ";
                    }
                    // line 606
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 607
                        echo "                                  <option value=\"-\" selected=\"selected\">-</option>
                                  ";
                    } else {
                        // line 609
                        echo "                                  <option value=\"-\">-</option>
                                  ";
                    }
                    // line 611
                    echo "                                </select>
                                <input type=\"text\" name=\"product_option[";
                    // line 612
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\" class=\"form-control\"/>
                              </td>
                              <td class=\"text-right\">
                                <select name=\"product_option[";
                    // line 615
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\" class=\"form-control\">
                                  ";
                    // line 616
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 617
                        echo "                                  <option value=\"+\" selected=\"selected\">+</option>
                                  ";
                    } else {
                        // line 619
                        echo "                                  <option value=\"+\">+</option>
                                  ";
                    }
                    // line 621
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 622
                        echo "                                  <option value=\"-\" selected=\"selected\">-</option>
                                  ";
                    } else {
                        // line 624
                        echo "                                  <option value=\"-\">-</option>
                                  ";
                    }
                    // line 626
                    echo "                                </select>
                                <input type=\"text\" name=\"product_option[";
                    // line 627
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\" class=\"form-control\"/>
                              </td>
                              <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 629
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
                    // line 631
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                    // line 632
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 633
                echo "                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan=\"7\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 637
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 642
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">
                        ";
                // line 643
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 644
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 645
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 647
                    echo "                        ";
                }
                // line 648
                echo "                      </select>
                    ";
            }
            // line 650
            echo "                    </div>
                    ";
            // line 651
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 652
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 653
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 662
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 663
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 668
        $context["recurring_row"] = 0;
        // line 669
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 670
            echo "                    <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                      <td class=\"text-left\">
                        <select name=\"product_recurring[";
            // line 672
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\" class=\"form-control\">
                          ";
            // line 673
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 674
                echo "                          ";
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 675
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 677
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                          ";
                }
                // line 679
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 680
            echo "                        </select>
                      </td>
                      <td class=\"text-left\">
                        <select name=\"product_recurring[";
            // line 683
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                          ";
            // line 684
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 685
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 686
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 688
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                          ";
                }
                // line 690
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 691
            echo "                        </select>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 693
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 695
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
            // line 696
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 697
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 701
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 712
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 713
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 714
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\" style=\"min-width: 100px;\">";
        // line 715
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\" style=\"min-width: 180px;\">";
        // line 716
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\" style=\"min-width: 180px;\">";
        // line 717
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 722
        $context["discount_row"] = 0;
        // line 723
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 724
            echo "                    <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                      <td class=\"text-left\">
                        <select name=\"product_discount[";
            // line 726
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                          ";
            // line 727
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 728
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 729
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 731
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                          ";
                }
                // line 733
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 734
            echo "                        </select>
                      </td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 736
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 737
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 738
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 741
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 749
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 755
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 757
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
            // line 758
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 763
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 774
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 775
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\" style=\"min-width: 100px;\">";
        // line 776
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\" style=\"min-width: 180px;\">";
        // line 777
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\" style=\"min-width: 180px;\">";
        // line 778
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 783
        $context["special_row"] = 0;
        // line 784
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 785
            echo "                    <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                      <td class=\"text-left\">
                        <select name=\"product_special[";
            // line 787
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                          ";
            // line 788
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 789
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 790
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 792
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                          ";
                }
                // line 794
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 795
            echo "                        </select>
                      </td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 797
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 798
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 801
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 809
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 815
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 817
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
            // line 818
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 819
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 823
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 834
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 839
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 848
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 849
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 854
        $context["image_row"] = 0;
        // line 855
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 856
            echo "                    <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 857
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 858
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 859
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 861
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 862
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 863
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 867
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 875
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 877
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 884
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 885
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 889
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 890
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 891
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 892
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\" value=\"";
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\" class=\"form-control\"/></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 895
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 900
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 905
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 906
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 910
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 911
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 912
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                      <td class=\"text-left\">
                        ";
            // line 914
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 915
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\">
                          <img src=\"language/";
                // line 916
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\"/>
                        </div>
                        ";
                // line 918
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 919
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                        ";
                }
                // line 921
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 922
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 925
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 934
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 935
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 939
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 940
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 941
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                      <td class=\"text-left\">
                        <select name=\"product_layout[";
            // line 943
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 945
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 946
                echo "                          ";
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 947
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 949
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                }
                // line 951
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 952
            echo "                        </select>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 956
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 979
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 984
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1006
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1035
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1064
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1093
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
//--></script>
<script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1119
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1123
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1126
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1128
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1129
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1143
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
//--></script>
<script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1168
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1173
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1196
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1198
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1199
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1205
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1206
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1212
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1213
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1219
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1220
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1226
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1227
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1233
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1234
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1240
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1241
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\" style=\"min-width: 100px;\">";
        // line 1250
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\" style=\"min-width: 100px;\">";
        // line 1251
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1252
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1253
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\" style=\"min-width: 100px;\">";
        // line 1254
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\" style=\"min-width: 100px;\">";
        // line 1255
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\" style=\"min-width: 100px;\">";
        // line 1256
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"7\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1265
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1293
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1298
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1303
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
//--></script>
<script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1313
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]\" value=\"\" placeholder=\"";
        // line 1320
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1321
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1323
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1324
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1330
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1335
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1340
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1341
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

//--></script>
<script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1352
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1358
            echo "\t  html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1360
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1361
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1362
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1363
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1364
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1365
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1366
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

//--></script>
<script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1380
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1386
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1388
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1389
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1390
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1391
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1392
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1393
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1399
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

//--></script>
<script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1408
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1412
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1413
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1414
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

//--></script>
<script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1424
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1431
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1433
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1438
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1440
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1443
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

//--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1455
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1460
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1465
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
//--></script>
</div>
";
        // line 1475
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3472 => 1475,  3459 => 1465,  3451 => 1460,  3443 => 1455,  3428 => 1443,  3423 => 1440,  3412 => 1438,  3408 => 1437,  3402 => 1433,  3391 => 1431,  3387 => 1430,  3378 => 1424,  3365 => 1414,  3361 => 1413,  3355 => 1412,  3348 => 1408,  3336 => 1399,  3327 => 1393,  3323 => 1392,  3319 => 1391,  3315 => 1390,  3311 => 1389,  3308 => 1388,  3297 => 1386,  3293 => 1385,  3285 => 1380,  3268 => 1366,  3264 => 1365,  3260 => 1364,  3256 => 1363,  3252 => 1362,  3248 => 1361,  3245 => 1360,  3234 => 1358,  3230 => 1357,  3222 => 1352,  3208 => 1341,  3204 => 1340,  3196 => 1335,  3188 => 1330,  3179 => 1324,  3175 => 1323,  3170 => 1321,  3166 => 1320,  3156 => 1313,  3143 => 1303,  3135 => 1298,  3127 => 1293,  3096 => 1265,  3084 => 1256,  3080 => 1255,  3076 => 1254,  3072 => 1253,  3068 => 1252,  3064 => 1251,  3060 => 1250,  3048 => 1241,  3044 => 1240,  3035 => 1234,  3031 => 1233,  3022 => 1227,  3018 => 1226,  3009 => 1220,  3005 => 1219,  2996 => 1213,  2992 => 1212,  2983 => 1206,  2979 => 1205,  2970 => 1199,  2966 => 1198,  2961 => 1196,  2935 => 1173,  2927 => 1168,  2899 => 1143,  2882 => 1129,  2879 => 1128,  2862 => 1126,  2858 => 1125,  2853 => 1123,  2846 => 1119,  2817 => 1093,  2785 => 1064,  2753 => 1035,  2721 => 1006,  2696 => 984,  2688 => 979,  2663 => 956,  2654 => 952,  2648 => 951,  2640 => 949,  2632 => 947,  2629 => 946,  2625 => 945,  2620 => 943,  2615 => 941,  2612 => 940,  2608 => 939,  2601 => 935,  2597 => 934,  2586 => 925,  2578 => 922,  2572 => 921,  2566 => 919,  2564 => 918,  2545 => 916,  2542 => 915,  2538 => 914,  2533 => 912,  2530 => 911,  2526 => 910,  2519 => 906,  2515 => 905,  2507 => 900,  2500 => 895,  2489 => 892,  2485 => 891,  2482 => 890,  2478 => 889,  2471 => 885,  2467 => 884,  2455 => 877,  2448 => 875,  2437 => 867,  2431 => 863,  2425 => 862,  2423 => 861,  2416 => 859,  2408 => 858,  2394 => 857,  2389 => 856,  2384 => 855,  2382 => 854,  2374 => 849,  2370 => 848,  2354 => 839,  2346 => 834,  2332 => 823,  2326 => 819,  2320 => 818,  2318 => 817,  2311 => 815,  2298 => 809,  2283 => 801,  2273 => 798,  2265 => 797,  2261 => 795,  2255 => 794,  2247 => 792,  2239 => 790,  2236 => 789,  2232 => 788,  2228 => 787,  2222 => 785,  2217 => 784,  2215 => 783,  2207 => 778,  2203 => 777,  2199 => 776,  2195 => 775,  2191 => 774,  2177 => 763,  2171 => 759,  2165 => 758,  2163 => 757,  2156 => 755,  2143 => 749,  2128 => 741,  2118 => 738,  2110 => 737,  2102 => 736,  2098 => 734,  2092 => 733,  2084 => 731,  2076 => 729,  2073 => 728,  2069 => 727,  2065 => 726,  2059 => 724,  2054 => 723,  2052 => 722,  2044 => 717,  2040 => 716,  2036 => 715,  2032 => 714,  2028 => 713,  2024 => 712,  2010 => 701,  2004 => 697,  1998 => 696,  1996 => 695,  1989 => 693,  1985 => 691,  1979 => 690,  1971 => 688,  1963 => 686,  1960 => 685,  1956 => 684,  1952 => 683,  1947 => 680,  1941 => 679,  1933 => 677,  1925 => 675,  1922 => 674,  1918 => 673,  1914 => 672,  1908 => 670,  1903 => 669,  1901 => 668,  1893 => 663,  1889 => 662,  1878 => 653,  1872 => 652,  1870 => 651,  1867 => 650,  1863 => 648,  1860 => 647,  1849 => 645,  1844 => 644,  1842 => 643,  1838 => 642,  1828 => 637,  1822 => 633,  1816 => 632,  1814 => 631,  1807 => 629,  1796 => 627,  1793 => 626,  1789 => 624,  1785 => 622,  1782 => 621,  1778 => 619,  1774 => 617,  1772 => 616,  1766 => 615,  1754 => 612,  1751 => 611,  1747 => 609,  1743 => 607,  1740 => 606,  1736 => 604,  1732 => 602,  1730 => 601,  1724 => 600,  1712 => 597,  1709 => 596,  1705 => 594,  1701 => 592,  1698 => 591,  1694 => 589,  1690 => 587,  1688 => 586,  1682 => 585,  1677 => 582,  1672 => 580,  1667 => 579,  1662 => 577,  1657 => 576,  1655 => 575,  1649 => 574,  1638 => 572,  1628 => 571,  1619 => 569,  1616 => 568,  1613 => 567,  1607 => 566,  1599 => 564,  1591 => 562,  1588 => 561,  1583 => 560,  1581 => 559,  1575 => 558,  1569 => 556,  1565 => 555,  1557 => 550,  1553 => 549,  1549 => 548,  1545 => 547,  1541 => 546,  1537 => 545,  1533 => 544,  1527 => 541,  1524 => 540,  1521 => 539,  1504 => 531,  1496 => 528,  1493 => 527,  1490 => 526,  1473 => 518,  1465 => 515,  1462 => 514,  1459 => 513,  1442 => 505,  1434 => 502,  1431 => 501,  1428 => 500,  1415 => 496,  1408 => 494,  1405 => 493,  1402 => 492,  1389 => 488,  1382 => 486,  1379 => 485,  1376 => 484,  1363 => 480,  1356 => 478,  1353 => 477,  1351 => 476,  1346 => 473,  1341 => 471,  1336 => 470,  1331 => 468,  1326 => 467,  1324 => 466,  1318 => 465,  1311 => 463,  1292 => 461,  1287 => 460,  1282 => 459,  1279 => 458,  1277 => 457,  1268 => 452,  1262 => 451,  1260 => 450,  1249 => 449,  1244 => 448,  1242 => 447,  1229 => 437,  1223 => 433,  1217 => 432,  1215 => 431,  1208 => 429,  1205 => 428,  1190 => 425,  1182 => 424,  1179 => 423,  1175 => 422,  1162 => 420,  1157 => 419,  1152 => 418,  1150 => 417,  1142 => 412,  1138 => 411,  1127 => 402,  1118 => 399,  1114 => 398,  1109 => 397,  1105 => 396,  1100 => 394,  1093 => 392,  1087 => 388,  1078 => 385,  1074 => 384,  1069 => 383,  1065 => 382,  1060 => 380,  1053 => 378,  1047 => 374,  1039 => 371,  1034 => 369,  1029 => 368,  1024 => 366,  1019 => 365,  1017 => 364,  1013 => 362,  1009 => 361,  1003 => 358,  997 => 354,  988 => 351,  981 => 350,  977 => 349,  972 => 347,  965 => 345,  959 => 341,  950 => 338,  943 => 337,  939 => 336,  934 => 334,  927 => 332,  916 => 328,  909 => 326,  898 => 320,  893 => 318,  887 => 314,  882 => 312,  877 => 311,  872 => 309,  867 => 308,  865 => 307,  859 => 304,  853 => 300,  847 => 299,  839 => 297,  831 => 295,  828 => 294,  824 => 293,  818 => 290,  809 => 286,  804 => 284,  798 => 280,  792 => 279,  784 => 277,  776 => 275,  773 => 274,  769 => 273,  763 => 270,  752 => 264,  744 => 261,  736 => 258,  729 => 254,  717 => 247,  711 => 244,  705 => 240,  700 => 238,  697 => 237,  692 => 235,  689 => 234,  686 => 233,  681 => 232,  678 => 231,  673 => 229,  670 => 228,  668 => 227,  662 => 224,  656 => 220,  650 => 219,  642 => 217,  634 => 215,  631 => 214,  627 => 213,  619 => 210,  613 => 206,  608 => 204,  603 => 203,  598 => 201,  593 => 200,  591 => 199,  585 => 196,  576 => 192,  569 => 190,  560 => 186,  555 => 184,  549 => 180,  543 => 179,  535 => 177,  527 => 175,  524 => 174,  520 => 173,  516 => 172,  510 => 169,  501 => 165,  496 => 163,  487 => 159,  482 => 157,  473 => 153,  466 => 151,  457 => 147,  450 => 145,  441 => 141,  434 => 139,  425 => 135,  418 => 133,  409 => 129,  402 => 127,  393 => 123,  386 => 121,  377 => 117,  370 => 115,  361 => 111,  354 => 109,  349 => 106,  343 => 104,  341 => 103,  335 => 102,  330 => 100,  324 => 96,  307 => 91,  298 => 89,  285 => 85,  278 => 83,  265 => 79,  258 => 77,  253 => 74,  247 => 72,  245 => 71,  235 => 70,  228 => 68,  213 => 64,  206 => 62,  201 => 59,  195 => 57,  193 => 56,  183 => 55,  176 => 53,  170 => 51,  166 => 50,  162 => 48,  145 => 46,  141 => 45,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>*/
/*             <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>*/
/*             <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                   <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 {% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][name]" value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][meta_title]" value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control"/>*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-tag{{ language.language_id }}"><span data-toggle="tooltip" title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][tag]" value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}" placeholder="{{ entry_tag }}" id="input-tag{{ language.language_id }}" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control"/>*/
/*                   {% if error_model %}*/
/*                   <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}" id="input-sku" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ncm"><span data-toggle="tooltip" title="{{ help_ncm }}">{{ entry_ncm }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ncm" value="{{ ncm }}" placeholder="{{ entry_ncm }}" id="input-ncm" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cest"><span data-toggle="tooltip" title="{{ help_cest }}">{{ entry_cest }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cest" value="{{ cest }}" placeholder="{{ entry_cest }}" id="input-cest" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}" id="input-upc" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}" id="input-ean" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}" id="input-jan" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}" id="input-isbn" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}" id="input-mpn" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-location">{{ entry_location }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="location" value="{{ location }}" placeholder="{{ entry_location }}" id="input-location" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="tax_class_id" id="input-tax-class" class="form-control">*/
/*                     <option value="0">{{ text_none }}</option>*/
/*                     {% for tax_class in tax_classes %}*/
/*                     {% if tax_class.tax_class_id == tax_class_id %}*/
/*                     <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="minimum" value="{{ minimum }}" placeholder="{{ entry_minimum }}" id="input-minimum" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-subtract">{{ entry_subtract }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="subtract" id="input-subtract" class="form-control">*/
/*                     {% if subtract %}*/
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/*                     {% for stock_status in stock_statuses %}*/
/*                     {% if stock_status.stock_status_id == stock_status_id %}*/
/*                     <option value="{{ stock_status.stock_status_id }}" selected="selected">{{ stock_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline">*/
/*                     {% if shipping %}*/
/*                     <input type="radio" name="shipping" value="1" checked="checked"/>*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="1"/>*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label> <label class="radio-inline"> {% if not shipping %}*/
/*                     <input type="radio" name="shipping" value="0" checked="checked"/>*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="0"/>*/
/*                     {{ text_no }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date_available }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control"/> <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="length" value="{{ length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="length_class_id" id="input-length-class" class="form-control">*/
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == length_class_id %}*/
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == weight_class_id %}*/
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="manufacturer" value="{{ manufacturer }}" placeholder="{{ entry_manufacturer }}" id="input-manufacturer" class="form-control"/> <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control"/>*/
/*                   <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for product_category in product_categories %}*/
/*                     <div id="product-category{{ product_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ product_category.name }}*/
/*                       <input type="hidden" name="product_category[]" value="{{ product_category.category_id }}"/>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control"/>*/
/*                   <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for product_filter in product_filters %}*/
/*                     <div id="product-filter{{ product_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                       <input type="hidden" name="product_filter[]" value="{{ product_filter.filter_id }}"/>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if store.store_id in product_store %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" checked="checked"/>*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}"/>*/
/*                         {{ store.name }}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control"/>*/
/*                   <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for product_download in product_downloads %}*/
/*                     <div id="product-download{{ product_download.download_id }}">*/
/*                       <i class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                       <input type="hidden" name="product_download[]" value="{{ product_download.download_id }}"/>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control"/>*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for product_related in product_relateds %}*/
/*                     <div id="product-related{{ product_related.product_id }}">*/
/*                       <i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                       <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}"/>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_attribute }}</td>*/
/*                       <td class="text-left">{{ entry_text }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% set attribute_row = 0 %}*/
/*                     {% for product_attribute in product_attributes %}*/
/*                     <tr id="attribute-row{{ attribute_row }}">*/
/*                       <td class="text-left" style="width: 40%;"><input type="text" name="product_attribute[{{ attribute_row }}][name]" value="{{ product_attribute.name }}" placeholder="{{ entry_attribute }}" class="form-control"/> <input type="hidden" name="product_attribute[{{ attribute_row }}][attribute_id]" value="{{ product_attribute.attribute_id }}"/></td>*/
/*                       <td class="text-left">*/
/*                         {% for language in languages %}*/
/*                         <div class="input-group"><span class="input-group-addon">*/
/*                           <img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/*                           <textarea name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </td>*/
/*                       <td class="text-right"><button type="button" onclick="$('#attribute-row{{ attribute_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                     </tr>*/
/*                     {% set attribute_row = attribute_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="{{ button_attribute_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="option">*/
/*                     {% set option_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}</a></li>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li><input type="text" name="option" value="" placeholder="{{ entry_option }}" id="input-option" class="form-control"/></li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content">*/
/*                     {% set option_row = 0 %}*/
/*                     {% set option_value_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <div class="tab-pane" id="tab-option{{ option_row }}">*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][product_option_id]" value="{{ product_option.product_option_id }}"/> <input type="hidden" name="product_option[{{ option_row }}][name]" value="{{ product_option.name }}"/> <input type="hidden" name="product_option[{{ option_row }}][option_id]" value="{{ product_option.option_id }}"/> <input type="hidden" name="product_option[{{ option_row }}][type]" value="{{ product_option.type }}"/>*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="product_option[{{ option_row }}][required]" id="input-required{{ option_row }}" class="form-control">*/
/*                             {% if product_option.required %}*/
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             {% else %}*/
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/*                             {% endif %}*/
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% if product_option.type == 'text' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control"/>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'textarea' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="product_option[{{ option_row }}][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control">{{ product_option.value }}</textarea>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'file' %}*/
/*                       <div class="form-group" style="display: none;">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control"/>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'date' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-3">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             <span class="input-group-btn">*/
/*                               <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'time' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'datetime' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                       <div class="table-responsive">*/
/*                         <table id="option-value{{ option_row }}" class="table table-striped table-bordered table-hover">*/
/*                           <thead>*/
/*                             <tr>*/
/*                               <td class="text-left" style="min-width: 100px;">{{ entry_option_value }}</td>*/
/*                               <td class="text-left" style="min-width: 100px;">{{ entry_sku }}</td>*/
/*                               <td class="text-right">{{ entry_quantity }}</td>*/
/*                               <td class="text-left">{{ entry_subtract }}</td>*/
/*                               <td class="text-right" style="min-width: 100px;">{{ entry_price }}</td>*/
/*                               <td class="text-right" style="min-width: 100px;">{{ entry_option_points }}</td>*/
/*                               <td class="text-right" style="min-width: 100px;">{{ entry_weight }}</td>*/
/*                               <td></td>*/
/*                             </tr>*/
/*                           </thead>*/
/*                           <tbody>*/
/*                             {% for product_option_value in product_option.product_option_value %}*/
/*                             <tr id="option-value-row{{ option_value_row }}">*/
/*                               <td class="text-left">*/
/*                                 <select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]" class="form-control">*/
/*                                   {% if option_values[product_option.option_id] %}*/
/*                                   {% for option_value in option_values[product_option.option_id] %}*/
/*                                   {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/*                                   <option value="{{ option_value.option_value_id }}" selected="selected">{{ option_value.name }}</option>*/
/*                                   {% else %}*/
/*                                   <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                                   {% endif %}*/
/*                                   {% endfor %}*/
/*                                   {% endif %}*/
/*                                 </select>*/
/*                                 <input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]" value="{{ product_option_value.product_option_value_id }}"/>*/
/*                               </td>*/
/*                               <td class="text-left"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][sku]" value="{{ product_option_value.sku }}" placeholder="{{ entry_sku }}" class="form-control" /></td>*/
/*                               <td class="text-right"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]" value="{{ product_option_value.quantity }}" placeholder="{{ entry_quantity }}" class="form-control"/></td>*/
/*                               <td class="text-left">*/
/*                                 <select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]" class="form-control">*/
/*                                   {% if product_option_value.subtract %}*/
/*                                   <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                   <option value="0">{{ text_no }}</option>*/
/*                                   {% else %}*/
/*                                   <option value="1">{{ text_yes }}</option>*/
/*                                   <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                   {% endif %}*/
/*                                 </select>*/
/*                               </td>*/
/*                               <td class="text-right">*/
/*                                 <select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]" class="form-control">*/
/*                                   {% if product_option_value.price_prefix == '+' %}*/
/*                                   <option value="+" selected="selected">+</option>*/
/*                                   {% else %}*/
/*                                   <option value="+">+</option>*/
/*                                   {% endif %}*/
/*                                   {% if product_option_value.price_prefix == '-' %}*/
/*                                   <option value="-" selected="selected">-</option>*/
/*                                   {% else %}*/
/*                                   <option value="-">-</option>*/
/*                                   {% endif %}*/
/*                                 </select>*/
/*                                 <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]" value="{{ product_option_value.price }}" placeholder="{{ entry_price }}" class="form-control"/>*/
/*                               </td>*/
/*                               <td class="text-right">*/
/*                                 <select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]" class="form-control">*/
/*                                   {% if product_option_value.points_prefix == '+' %}*/
/*                                   <option value="+" selected="selected">+</option>*/
/*                                   {% else %}*/
/*                                   <option value="+">+</option>*/
/*                                   {% endif %}*/
/*                                   {% if product_option_value.points_prefix == '-' %}*/
/*                                   <option value="-" selected="selected">-</option>*/
/*                                   {% else %}*/
/*                                   <option value="-">-</option>*/
/*                                   {% endif %}*/
/*                                 </select>*/
/*                                 <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]" value="{{ product_option_value.points }}" placeholder="{{ entry_points }}" class="form-control"/>*/
/*                               </td>*/
/*                               <td class="text-right">*/
/*                                 <select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]" class="form-control">*/
/*                                   {% if product_option_value.weight_prefix == '+' %}*/
/*                                   <option value="+" selected="selected">+</option>*/
/*                                   {% else %}*/
/*                                   <option value="+">+</option>*/
/*                                   {% endif %}*/
/*                                   {% if product_option_value.weight_prefix == '-' %}*/
/*                                   <option value="-" selected="selected">-</option>*/
/*                                   {% else %}*/
/*                                   <option value="-">-</option>*/
/*                                   {% endif %}*/
/*                                 </select>*/
/*                                 <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]" value="{{ product_option_value.weight }}" placeholder="{{ entry_weight }}" class="form-control"/>*/
/*                               </td>*/
/*                               <td class="text-right"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                             </tr>*/
/*                             {% set option_value_row = option_value_row + 1 %}*/
/*                             {% endfor %}*/
/*                           </tbody>*/
/*                           <tfoot>*/
/*                             <tr>*/
/*                               <td colspan="7"></td>*/
/*                               <td class="text-left"><button type="button" onclick="addOptionValue('{{ option_row }}');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                             </tr>*/
/*                           </tfoot>*/
/*                         </table>*/
/*                       </div>*/
/*                       <select id="option-values{{ option_row }}" style="display: none;">*/
/*                         {% if option_values[product_option.option_id] %}*/
/*                         {% for option_value in option_values[product_option.option_id] %}*/
/*                         <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                         {% endfor %}*/
/*                         {% endif %}*/
/*                       </select>*/
/*                     {% endif %}*/
/*                     </div>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_recurring }}</td>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% set recurring_row = 0 %}*/
/*                     {% for product_recurring in product_recurrings %}*/
/*                     <tr id="recurring-row{{ recurring_row }}">*/
/*                       <td class="text-left">*/
/*                         <select name="product_recurring[{{ recurring_row }}][recurring_id]" class="form-control">*/
/*                           {% for recurring in recurrings %}*/
/*                           {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/*                           <option value="{{ recurring.recurring_id }}" selected="selected">{{ recurring.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </td>*/
/*                       <td class="text-left">*/
/*                         <select name="product_recurring[{{ recurring_row }}][customer_group_id]" class="form-control">*/
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </td>*/
/*                       <td class="text-left"><button type="button" onclick="$('#recurring-row{{ recurring_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                     </tr>*/
/*                     {% set recurring_row = recurring_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="{{ button_recurring_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-discount">*/
/*               <div class="table-responsive">*/
/*                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_quantity }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right" style="min-width: 100px;">{{ entry_price }}</td>*/
/*                       <td class="text-left" style="min-width: 180px;">{{ entry_date_start }}</td>*/
/*                       <td class="text-left" style="min-width: 180px;">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% set discount_row = 0 %}*/
/*                     {% for product_discount in product_discounts %}*/
/*                     <tr id="discount-row{{ discount_row }}">*/
/*                       <td class="text-left">*/
/*                         <select name="product_discount[{{ discount_row }}][customer_group_id]" class="form-control">*/
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </td>*/
/*                       <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][quantity]" value="{{ product_discount.quantity }}" placeholder="{{ entry_quantity }}" class="form-control"/></td>*/
/*                       <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][priority]" value="{{ product_discount.priority }}" placeholder="{{ entry_priority }}" class="form-control"/></td>*/
/*                       <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][price]" value="{{ product_discount.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                       <td class="text-left" style="width: 20%;">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="product_discount[{{ discount_row }}][date_start]" value="{{ product_discount.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                           <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                           </span>*/
/*                         </div>*/
/*                       </td>*/
/*                       <td class="text-left" style="width: 20%;">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="product_discount[{{ discount_row }}][date_end]" value="{{ product_discount.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                           <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                           </span>*/
/*                         </div>*/
/*                       </td>*/
/*                       <td class="text-left"><button type="button" onclick="$('#discount-row{{ discount_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                     </tr>*/
/*                     {% set discount_row = discount_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="6"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="{{ button_discount_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-special">*/
/*               <div class="table-responsive">*/
/*                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right" style="min-width: 100px;">{{ entry_price }}</td>*/
/*                       <td class="text-left" style="min-width: 180px;">{{ entry_date_start }}</td>*/
/*                       <td class="text-left" style="min-width: 180px;">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% set special_row = 0 %}*/
/*                     {% for product_special in product_specials %}*/
/*                     <tr id="special-row{{ special_row }}">*/
/*                       <td class="text-left">*/
/*                         <select name="product_special[{{ special_row }}][customer_group_id]" class="form-control">*/
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </td>*/
/*                       <td class="text-right"><input type="text" name="product_special[{{ special_row }}][priority]" value="{{ product_special.priority }}" placeholder="{{ entry_priority }}" class="form-control"/></td>*/
/*                       <td class="text-right"><input type="text" name="product_special[{{ special_row }}][price]" value="{{ product_special.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                       <td class="text-left" style="width: 20%;">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="product_special[{{ special_row }}][date_start]" value="{{ product_special.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                           <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                           </span>*/
/*                         </div>*/
/*                       </td>*/
/*                       <td class="text-left" style="width: 20%;">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="product_special[{{ special_row }}][date_end]" value="{{ product_special.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                           <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                           </span>*/
/*                         </div>*/
/*                       </td>*/
/*                       <td class="text-left"><button type="button" onclick="$('#special-row{{ special_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                     </tr>*/
/*                     {% set special_row = special_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="5"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="{{ button_special_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="image" value="{{ image }}" id="input-image"/></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% set image_row = 0 %}*/
/*                     {% for product_image in product_images %}*/
/*                     <tr id="image-row{{ image_row }}">*/
/*                       <td class="text-left"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ product_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="product_image[{{ image_row }}][image]" value="{{ product_image.image }}" id="input-image{{ image_row }}"/></td>*/
/*                       <td class="text-right"><input type="text" name="product_image[{{ image_row }}][sort_order]" value="{{ product_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control"/></td>*/
/*                       <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                     </tr>*/
/*                     {% set image_row = image_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="{{ button_image_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="points" value="{{ points }}" placeholder="{{ entry_points }}" id="input-points" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_reward }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for customer_group in customer_groups %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ customer_group.name }}</td>*/
/*                       <td class="text-right"><input type="text" name="product_reward[{{ customer_group.customer_group_id }}][points]" value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}" class="form-control"/></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for store in stores %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ store.name }}</td>*/
/*                       <td class="text-left">*/
/*                         {% for language in languages %}*/
/*                         <div class="input-group"><span class="input-group-addon">*/
/*                           <img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span> <input type="text" name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control"/>*/
/*                         </div>*/
/*                         {% if error_keyword[store.store_id][language.language_id] %}*/
/*                         <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for store in stores %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ store.name }}</td>*/
/*                       <td class="text-left">*/
/*                         <select name="product_layout[{{ store.store_id }}]" class="form-control">*/
/*                           <option value=""></option>*/
/*                           {% for layout in layouts %}*/
/*                           {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/*                           <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet"/>*/
/* <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet"/>*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* <script type="text/javascript"><!--*/
/*   // Manufacturer*/
/*   $('input[name=\'manufacturer\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  json.unshift({*/
/* 					  manufacturer_id: 0,*/
/* 					  name: '{{ text_none }}'*/
/* 				  });*/
/* */
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['manufacturer_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'manufacturer\']').val(item['label']);*/
/* 		  $('input[name=\'manufacturer_id\']').val(item['value']);*/
/* 	  }*/
/*   });*/
/* */
/*   // Category*/
/*   $('input[name=\'category\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['category_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'category\']').val('');*/
/* */
/* 		  $('#product-category' + item['value']).remove();*/
/* */
/* 		  $('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Filter*/
/*   $('input[name=\'filter\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['filter_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'filter\']').val('');*/
/* */
/* 		  $('#product-filter' + item['value']).remove();*/
/* */
/* 		  $('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Downloads*/
/*   $('input[name=\'download\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['download_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'download\']').val('');*/
/* */
/* 		  $('#product-download' + item['value']).remove();*/
/* */
/* 		  $('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Related*/
/*   $('input[name=\'related\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['product_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'related\']').val('');*/
/* */
/* 		  $('#product-related' + item['value']).remove();*/
/* */
/* 		  $('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var attribute_row = {{ attribute_row }};*/
/* */
/*   function addAttribute() {*/
/* 	  html = '<tr id="attribute-row' + attribute_row + '">';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/* 	  html += '  <td class="text-left">';*/
/*     {% for language in languages %}*/
/* 	  html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*     {% endfor %}*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#attribute tbody').append(html);*/
/* */
/* 	  attributeautocomplete(attribute_row);*/
/* */
/* 	  attribute_row++;*/
/*   }*/
/* */
/*   function attributeautocomplete(attribute_row) {*/
/* 	  $('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/* 		  'source': function(request, response) {*/
/* 			  $.ajax({*/
/* 				  url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 				  dataType: 'json',*/
/* 				  success: function(json) {*/
/* 					  response($.map(json, function(item) {*/
/* 						  return {*/
/* 							  category: item.attribute_group,*/
/* 							  label: item.name,*/
/* 							  value: item.attribute_id*/
/* 						  }*/
/* 					  }));*/
/* 				  }*/
/* 			  });*/
/* 		  },*/
/* 		  'select': function(item) {*/
/* 			  $('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/* 			  $('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/* 		  }*/
/* 	  });*/
/*   }*/
/* */
/*   $('#attribute tbody tr').each(function(index, element) {*/
/* 	  attributeautocomplete(index);*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var option_row = {{ option_row }};*/
/* */
/*   $('input[name=\'option\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  category: item['category'],*/
/* 						  label: item['name'],*/
/* 						  value: item['option_id'],*/
/* 						  type: item['type'],*/
/* 						  option_value: item['option_value']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  html = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* 		  html += '	<div class="form-group">';*/
/* 		  html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/* 		  html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/* 		  html += '	      <option value="1">{{ text_yes }}</option>';*/
/* 		  html += '	      <option value="0">{{ text_no }}</option>';*/
/* 		  html += '	  </select></div>';*/
/* 		  html += '	</div>';*/
/* */
/* 		  if (item['type'] == 'text') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'textarea') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'file') {*/
/* 			  html += '	<div class="form-group" style="display: none;">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'date') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'time') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'datetime') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/* 			  html += '<div class="table-responsive">';*/
/* 			  html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/* 			  html += '  	 <thead>';*/
/* 			  html += '      <tr>';*/
/* 			  html += '        <td class="text-left" style="min-width: 100px;">{{ entry_option_value }}</td>';*/
/* 			  html += '        <td class="text-left" style="min-width: 100px;">{{ entry_sku }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/* 			  html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/* 			  html += '        <td class="text-right" style="min-width: 100px;">{{ entry_price }}</td>';*/
/* 			  html += '        <td class="text-right" style="min-width: 100px;">{{ entry_option_points }}</td>';*/
/* 			  html += '        <td class="text-right" style="min-width: 100px;">{{ entry_weight }}</td>';*/
/* 			  html += '        <td></td>';*/
/* 			  html += '      </tr>';*/
/* 			  html += '  	 </thead>';*/
/* 			  html += '  	 <tbody>';*/
/* 			  html += '    </tbody>';*/
/* 			  html += '    <tfoot>';*/
/* 			  html += '      <tr>';*/
/* 			  html += '        <td colspan="7"></td>';*/
/* 			  html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/* 			  html += '      </tr>';*/
/* 			  html += '    </tfoot>';*/
/* 			  html += '  </table>';*/
/* 			  html += '</div>';*/
/* */
/* 			  html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/* 			  for (i = 0; i < item['option_value'].length; i++) {*/
/* 				  html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/* 			  }*/
/* */
/* 			  html += '  </select>';*/
/* 			  html += '</div>';*/
/* 		  }*/
/* */
/* 		  $('#tab-option .tab-content').append(html);*/
/* */
/* 		  $('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/* 		  $('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/* 		  $('[data-toggle=\'tooltip\']').tooltip({*/
/* 			  container: 'body',*/
/* 			  html: true*/
/* 		  });*/
/* */
/* 		  $('.date').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickTime: false*/
/* 		  });*/
/* */
/* 		  $('.time').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickDate: false*/
/* 		  });*/
/* */
/* 		  $('.datetime').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickDate: true,*/
/* 			  pickTime: true*/
/* 		  });*/
/* */
/* 		  option_row++;*/
/* 	  }*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var option_value_row = {{ option_value_row }};*/
/* */
/*   function addOptionValue(option_row) {*/
/* 	  html = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/* 	  html += $('#option-values' + option_row).html();*/
/* 	  html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]" value="" placeholder="{{ entry_sku }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/* 	  html += '    <option value="1">{{ text_yes }}</option>';*/
/* 	  html += '    <option value="0">{{ text_no }}</option>';*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#option-value' + option_row + ' tbody').append(html);*/
/* 	  $('[rel=tooltip]').tooltip();*/
/* */
/* 	  option_value_row++;*/
/*   }*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var discount_row = {{ discount_row }};*/
/* */
/*   function addDiscount() {*/
/* 	  html = '<tr id="discount-row' + discount_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#discount tbody').append(html);*/
/* */
/* 	  $('.date').datetimepicker({*/
/* 		  pickTime: false*/
/* 	  });*/
/* */
/* 	  discount_row++;*/
/*   }*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var special_row = {{ special_row }};*/
/* */
/*   function addSpecial() {*/
/* 	  html = '<tr id="special-row' + special_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#special tbody').append(html);*/
/* */
/* 	  $('.date').datetimepicker({*/
/* 		  language: '{{ datepicker }}',*/
/* 		  pickTime: false*/
/* 	  });*/
/* */
/* 	  special_row++;*/
/*   }*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var image_row = {{ image_row }};*/
/* */
/*   function addImage() {*/
/* 	  html = '<tr id="image-row' + image_row + '">';*/
/* 	  html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#images tbody').append(html);*/
/* */
/* 	  image_row++;*/
/*   }*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   var recurring_row = {{ recurring_row }};*/
/* */
/*   function addRecurring() {*/
/* 	  html = '<tr id="recurring-row' + recurring_row + '">';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/*     {% for recurring in recurrings %}*/
/* 	  html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '    </select>';*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '    </select>';*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/* 	  html += '  </td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#tab-recurring table tbody').append(html);*/
/* */
/* 	  recurring_row++;*/
/*   }*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickTime: false*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickDate: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickDate: true,*/
/* 	  pickTime: true*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#language a:first').tab('show');*/
/*   $('#option a:first').tab('show');*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
