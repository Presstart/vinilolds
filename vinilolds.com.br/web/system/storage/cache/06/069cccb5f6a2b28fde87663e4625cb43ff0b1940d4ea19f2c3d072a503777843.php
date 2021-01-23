<?php

/* install/step_2.twig */
class __TwigTemplate_778ebbc89bfbf30c824e50337d35dbcaf381d2b468ffb9ed58140eaee5bbf111 extends Twig_Template
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
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">2<small>/4</small></h1>
        <h3>
          ";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 9
        echo (isset($context["text_step_2"]) ? $context["text_step_2"] : null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 24
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 25
        echo (isset($context["text_install_php"]) ? $context["text_install_php"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 30
        echo (isset($context["text_setting"]) ? $context["text_setting"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 31
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 32
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 33
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 38
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</td>
                <td>";
        // line 39
        echo (isset($context["php_version"]) ? $context["php_version"] : null);
        echo "</td>
                <td>5.6+</td>
                <td class=\"text-center\">
                  ";
        // line 42
        if (((isset($context["php_version"]) ? $context["php_version"] : null) >= "5.6")) {
            // line 43
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 45
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 47
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 50
        echo (isset($context["text_global"]) ? $context["text_global"] : null);
        echo "</td>
                <td>
                  ";
        // line 52
        if ((isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 53
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 55
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 56
        echo "</td>
                <td>";
        // line 57
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 59
        if ( !(isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 60
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 62
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 64
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 67
        echo (isset($context["text_magic"]) ? $context["text_magic"] : null);
        echo "</td>
                <td>
                  ";
        // line 69
        if ((isset($context["magic_quotes_gpc"]) ? $context["magic_quotes_gpc"] : null)) {
            // line 70
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 72
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 74
        echo "                </td>
                <td>";
        // line 75
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 77
        if ( !(isset($context["error_magic_quotes_gpc"]) ? $context["error_magic_quotes_gpc"] : null)) {
            // line 78
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 80
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 82
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 85
        echo (isset($context["text_file_upload"]) ? $context["text_file_upload"] : null);
        echo "</td>
                <td>
                  ";
        // line 87
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 88
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 90
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 92
        echo "                </td>
                <td>";
        // line 93
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 95
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 96
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 98
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 100
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 103
        echo (isset($context["text_session"]) ? $context["text_session"] : null);
        echo "</td>
                <td>
                  ";
        // line 105
        if ((isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 106
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 108
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 110
        echo "                </td>
                <td>";
        // line 111
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 113
        if ( !(isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 114
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 116
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 118
        echo "                </td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 123
        echo (isset($context["text_install_extension"]) ? $context["text_install_extension"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 128
        echo (isset($context["text_extension"]) ? $context["text_extension"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 129
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 130
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 131
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 136
        echo (isset($context["text_db"]) ? $context["text_db"] : null);
        echo "</td>
                <td>
                  ";
        // line 138
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 139
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 141
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 143
        echo "                </td>
                <td>";
        // line 144
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 146
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 147
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 149
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 151
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 154
        echo (isset($context["text_gd"]) ? $context["text_gd"] : null);
        echo "</td>
                <td>
                  ";
        // line 156
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 157
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 159
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 160
        echo "</td>
                <td>";
        // line 161
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 163
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 164
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 166
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 168
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 171
        echo (isset($context["text_curl"]) ? $context["text_curl"] : null);
        echo "</td>
                <td>
                  ";
        // line 173
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 174
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 176
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 178
        echo "                </td>
                <td>";
        // line 179
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 181
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 182
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 184
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 186
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 189
        echo (isset($context["text_openssl"]) ? $context["text_openssl"] : null);
        echo "</td>
                <td>
                  ";
        // line 191
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 192
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 194
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 196
        echo "                </td>
                <td>";
        // line 197
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 199
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 200
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 202
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 204
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 207
        echo (isset($context["text_zlib"]) ? $context["text_zlib"] : null);
        echo "</td>
                <td>
                  ";
        // line 209
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 210
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 212
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 214
        echo "                </td>
                <td>";
        // line 215
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 217
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 218
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 220
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 222
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 225
        echo (isset($context["text_zip"]) ? $context["text_zip"] : null);
        echo "</td>
                <td>
                  ";
        // line 227
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 228
            echo "                  ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 230
            echo "                  ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 232
        echo "                </td>
                <td>";
        // line 233
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 235
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 236
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 238
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 240
        echo "                </td>
              </tr>
              ";
        // line 242
        if ( !(isset($context["iconv"]) ? $context["iconv"] : null)) {
            // line 243
            echo "              <tr>
                <td>";
            // line 244
            echo (isset($context["text_mbstring"]) ? $context["text_mbstring"] : null);
            echo "</td>
                <td>
                  ";
            // line 246
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 247
                echo "                  ";
                echo (isset($context["text_on"]) ? $context["text_on"] : null);
                echo "
                  ";
            } else {
                // line 249
                echo "                  ";
                echo (isset($context["text_off"]) ? $context["text_off"] : null);
                echo "
                  ";
            }
            // line 251
            echo "                </td>
                <td>";
            // line 252
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "</td>
                <td class=\"text-center\">
                  ";
            // line 254
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 255
                echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
            } else {
                // line 257
                echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
            }
            // line 259
            echo "                </td>
              </tr>
              ";
        }
        // line 262
        echo "            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 265
        echo (isset($context["text_install_file"]) ? $context["text_install_file"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 270
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "</b></td>
                <td><b>";
        // line 271
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 276
        echo (isset($context["catalog_config"]) ? $context["catalog_config"] : null);
        echo "</td>
                <td>
                  ";
        // line 278
        if ( !(isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null)) {
            // line 279
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 281
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null);
            echo "</span>
                  ";
        }
        // line 283
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 286
        echo (isset($context["admin_config"]) ? $context["admin_config"] : null);
        echo "</td>
                <td>
                  ";
        // line 288
        if ( !(isset($context["error_admin_config"]) ? $context["error_admin_config"] : null)) {
            // line 289
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 291
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_admin_config"]) ? $context["error_admin_config"] : null);
            echo "</span>
                  ";
        }
        // line 293
        echo "                </td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 298
        echo (isset($context["text_install_directory"]) ? $context["text_install_directory"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td align=\"left\"><b>";
        // line 303
        echo (isset($context["text_directory"]) ? $context["text_directory"] : null);
        echo "</b></td>
                <td align=\"left\"><b>";
        // line 304
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 309
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "/</td>
                <td>
                  ";
        // line 311
        if ( !(isset($context["error_image"]) ? $context["error_image"] : null)) {
            // line 312
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 314
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_image"]) ? $context["error_image"] : null);
            echo "</span>
                  ";
        }
        // line 316
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 319
        echo (isset($context["image_cache"]) ? $context["image_cache"] : null);
        echo "/</td>
                <td>
                  ";
        // line 321
        if ( !(isset($context["error_image_cache"]) ? $context["error_image_cache"] : null)) {
            // line 322
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 324
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_image_cache"]) ? $context["error_image_cache"] : null);
            echo "</span>
                  ";
        }
        // line 326
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 329
        echo (isset($context["image_catalog"]) ? $context["image_catalog"] : null);
        echo "/</td>
                <td>
                  ";
        // line 331
        if ( !(isset($context["error_image_catalog"]) ? $context["error_image_catalog"] : null)) {
            // line 332
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 334
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_image_catalog"]) ? $context["error_image_catalog"] : null);
            echo "</span>
                  ";
        }
        // line 336
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 339
        echo (isset($context["cache"]) ? $context["cache"] : null);
        echo "/</td>
                <td>
                  ";
        // line 341
        if ( !(isset($context["error_cache"]) ? $context["error_cache"] : null)) {
            // line 342
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 344
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_cache"]) ? $context["error_cache"] : null);
            echo "</span>
                  ";
        }
        // line 346
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 349
        echo (isset($context["logs"]) ? $context["logs"] : null);
        echo "/</td>
                <td>
                  ";
        // line 351
        if ( !(isset($context["error_logs"]) ? $context["error_logs"] : null)) {
            // line 352
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 354
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_logs"]) ? $context["error_logs"] : null);
            echo "</span>
                  ";
        }
        // line 356
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 359
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "/</td>
                <td>
                  ";
        // line 361
        if ( !(isset($context["error_download"]) ? $context["error_download"] : null)) {
            // line 362
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 364
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_download"]) ? $context["error_download"] : null);
            echo "</span>
                  ";
        }
        // line 366
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 369
        echo (isset($context["upload"]) ? $context["upload"] : null);
        echo "/</td>
                <td>
                  ";
        // line 371
        if ( !(isset($context["error_upload"]) ? $context["error_upload"] : null)) {
            // line 372
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 374
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_upload"]) ? $context["error_upload"] : null);
            echo "</span>
                  ";
        }
        // line 376
        echo "                </td>
              </tr>
              <tr>
                <td>";
        // line 379
        echo (isset($context["modification"]) ? $context["modification"] : null);
        echo "/</td>
                <td>
                  ";
        // line 381
        if ( !(isset($context["error_modification"]) ? $context["error_modification"] : null)) {
            // line 382
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 384
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_modification"]) ? $context["error_modification"] : null);
            echo "</span>
                  ";
        }
        // line 386
        echo "                </td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 392
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 394
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 399
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
</div>
";
        // line 402
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  922 => 402,  916 => 399,  908 => 394,  901 => 392,  893 => 386,  887 => 384,  881 => 382,  879 => 381,  874 => 379,  869 => 376,  863 => 374,  857 => 372,  855 => 371,  850 => 369,  845 => 366,  839 => 364,  833 => 362,  831 => 361,  826 => 359,  821 => 356,  815 => 354,  809 => 352,  807 => 351,  802 => 349,  797 => 346,  791 => 344,  785 => 342,  783 => 341,  778 => 339,  773 => 336,  767 => 334,  761 => 332,  759 => 331,  754 => 329,  749 => 326,  743 => 324,  737 => 322,  735 => 321,  730 => 319,  725 => 316,  719 => 314,  713 => 312,  711 => 311,  706 => 309,  698 => 304,  694 => 303,  686 => 298,  679 => 293,  673 => 291,  667 => 289,  665 => 288,  660 => 286,  655 => 283,  649 => 281,  643 => 279,  641 => 278,  636 => 276,  628 => 271,  624 => 270,  616 => 265,  611 => 262,  606 => 259,  602 => 257,  598 => 255,  596 => 254,  591 => 252,  588 => 251,  582 => 249,  576 => 247,  574 => 246,  569 => 244,  566 => 243,  564 => 242,  560 => 240,  556 => 238,  552 => 236,  550 => 235,  545 => 233,  542 => 232,  536 => 230,  530 => 228,  528 => 227,  523 => 225,  518 => 222,  514 => 220,  510 => 218,  508 => 217,  503 => 215,  500 => 214,  494 => 212,  488 => 210,  486 => 209,  481 => 207,  476 => 204,  472 => 202,  468 => 200,  466 => 199,  461 => 197,  458 => 196,  452 => 194,  446 => 192,  444 => 191,  439 => 189,  434 => 186,  430 => 184,  426 => 182,  424 => 181,  419 => 179,  416 => 178,  410 => 176,  404 => 174,  402 => 173,  397 => 171,  392 => 168,  388 => 166,  384 => 164,  382 => 163,  377 => 161,  374 => 160,  368 => 159,  362 => 157,  360 => 156,  355 => 154,  350 => 151,  346 => 149,  342 => 147,  340 => 146,  335 => 144,  332 => 143,  326 => 141,  320 => 139,  318 => 138,  313 => 136,  305 => 131,  301 => 130,  297 => 129,  293 => 128,  285 => 123,  278 => 118,  274 => 116,  270 => 114,  268 => 113,  263 => 111,  260 => 110,  254 => 108,  248 => 106,  246 => 105,  241 => 103,  236 => 100,  232 => 98,  228 => 96,  226 => 95,  221 => 93,  218 => 92,  212 => 90,  206 => 88,  204 => 87,  199 => 85,  194 => 82,  190 => 80,  186 => 78,  184 => 77,  179 => 75,  176 => 74,  170 => 72,  164 => 70,  162 => 69,  157 => 67,  152 => 64,  148 => 62,  144 => 60,  142 => 59,  137 => 57,  134 => 56,  128 => 55,  122 => 53,  120 => 52,  115 => 50,  110 => 47,  106 => 45,  102 => 43,  100 => 42,  94 => 39,  90 => 38,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  62 => 25,  58 => 24,  54 => 22,  46 => 18,  44 => 17,  33 => 9,  29 => 8,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">2<small>/4</small></h1>*/
/*         <h3>*/
/*           {{ heading_title }}<br>*/
/*           <small>{{ text_step_2 }}</small>*/
/*         </h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart"/></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div class="col-sm-9">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <p>{{ text_install_php }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_setting }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_version }}</td>*/
/*                 <td>{{ php_version }}</td>*/
/*                 <td>5.6+</td>*/
/*                 <td class="text-center">*/
/*                   {% if php_version >= '5.6' %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_global }}</td>*/
/*                 <td>*/
/*                   {% if register_globals %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not register_globals %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_magic }}</td>*/
/*                 <td>*/
/*                   {% if magic_quotes_gpc %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not error_magic_quotes_gpc %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_file_upload }}</td>*/
/*                 <td>*/
/*                   {% if file_uploads %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if file_uploads %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_session }}</td>*/
/*                 <td>*/
/*                   {% if session_auto_start %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not session_auto_start %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_extension }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_extension }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_db }}</td>*/
/*                 <td>*/
/*                   {% if db %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if db %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_gd }}</td>*/
/*                 <td>*/
/*                   {% if gd %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if gd %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_curl }}</td>*/
/*                 <td>*/
/*                   {% if curl %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if curl %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_openssl }}</td>*/
/*                 <td>*/
/*                   {% if openssl %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if openssl %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zlib }}</td>*/
/*                 <td>*/
/*                   {% if zlib %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if zlib %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zip }}</td>*/
/*                 <td>*/
/*                   {% if zip %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if zip %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               {% if not iconv %}*/
/*               <tr>*/
/*                 <td>{{ text_mbstring }}</td>*/
/*                 <td>*/
/*                   {% if mbstring %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if mbstring %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_file }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td><b>{{ text_file }}</b></td>*/
/*                 <td><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ catalog_config }}</td>*/
/*                 <td>*/
/*                   {% if not error_catalog_config %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_catalog_config }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ admin_config }}</td>*/
/*                 <td>*/
/*                   {% if not error_admin_config %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_admin_config }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_directory }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td align="left"><b>{{ text_directory }}</b></td>*/
/*                 <td align="left"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ image }}/</td>*/
/*                 <td>*/
/*                   {% if not error_image %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_image }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ image_cache }}/</td>*/
/*                 <td>*/
/*                   {% if not error_image_cache %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_image_cache }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ image_catalog }}/</td>*/
/*                 <td>*/
/*                   {% if not error_image_catalog %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_image_catalog }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ cache }}/</td>*/
/*                 <td>*/
/*                   {% if not error_cache %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_cache }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ logs }}/</td>*/
/*                 <td>*/
/*                   {% if not error_logs %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_logs }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ download }}/</td>*/
/*                 <td>*/
/*                   {% if not error_download %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_download }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ upload }}/</td>*/
/*                 <td>*/
/*                   {% if not error_upload %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_upload }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ modification }}/</td>*/
/*                 <td>*/
/*                   {% if not error_modification %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_modification }}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary"/>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     <div class="col-sm-3">{{ column_left }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
