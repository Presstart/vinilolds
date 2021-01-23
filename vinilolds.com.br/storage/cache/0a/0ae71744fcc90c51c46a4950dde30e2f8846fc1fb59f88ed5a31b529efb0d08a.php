<?php

/* design/theme.twig */
class __TwigTemplate_a0ed693f292d4db890899331d3ca2c3b3c94901f9cb7b4f153aafa5b7a37d6a5 extends Twig_Template
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
      <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 16
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"list-group\">
              <div class=\"list-group-item\">
                <h4 class=\"list-group-item-heading\">";
        // line 23
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "</h4>
              </div>
              <div class=\"list-group-item\">
                <select name=\"store_id\" class=\"form-control\">
                  <option value=\"0\">";
        // line 27
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>
                  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 29
            echo "                  <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </select>
              </div>
            </div>
            <div class=\"list-group\">
              <div class=\"list-group-item\">
                <h4 class=\"list-group-item-heading\">";
        // line 36
        echo (isset($context["text_template"]) ? $context["text_template"] : null);
        echo "</h4>
              </div>
              <div id=\"path\"></div>
            </div>
          </div>
          <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 42
        echo (isset($context["text_twig"]) ? $context["text_twig"] : null);
        echo "</div>
            <div id=\"recent\">
              <fieldset>
                <legend>";
        // line 45
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
            </div>
            <div id=\"code\" style=\"display: none;\">
              <ul class=\"nav nav-tabs\">
              </ul>
              <div class=\"tab-content\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
<script type=\"text/javascript\"><!--
\$('select[name=\"store_id\"]').on('change', function(e) {
    \$.ajax({
        url: 'index.php?route=design/theme/path&user_token=";
        // line 67
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('select[name=\"store_id\"]').prop('disabled', true);
        },
        complete: function() {
            \$('select[name=\"store_id\"]').prop('disabled', false);
        },
        success: function(json) {
            html = '';

            if (json['directory']) {
                for (i = 0; i < json['directory'].length; i++) {
                    html += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item directory\">' + json['directory'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                }
            }

            if (json['file']) {
                for (i = 0; i < json['file'].length; i++) {
                    html += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item file\">' + json['file'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                }
            }

            \$('#path').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('select[name=\"store_id\"]').trigger('change');

\$('#path').on('click', 'a.directory', function(e) {
    console.log(\$(node).attr('href'));

    e.preventDefault();

    var node = this;

    \$.ajax({
        url: 'index.php?route=design/theme/path&user_token=";
        // line 108
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val() + '&path=' + \$(node).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(node).find('i').removeClass('fa-arrow-right');
            \$(node).find('i').addClass('fa-circle-o-notch fa-spin');
        },
        complete: function() {
            \$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
            \$(node).find('i').addClass('fa-arrow-right');
        },
        success: function(json) {
            html = '';

            if (json['directory']) {
                for (i = 0; i < json['directory'].length; i++) {
                    html += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item directory\">' + json['directory'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                }
            }

            if (json['file']) {
                for (i = 0; i < json['file'].length; i++) {
                    html += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item file\">' + json['file'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                }
            }

            if (json['back']) {
                html += '<a href=\"' + json['back']['path'] + '\" class=\"list-group-item directory\">' + json['back']['name'] + ' <i class=\"fa fa-arrow-left fa-fw pull-right\"></i></a>';
            }

            \$('#path').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#path').on('click', 'a.file', function(e) {
    e.preventDefault();

    var node = this;

    // Check if the file has an extension
    var pos = \$(node).attr('href').lastIndexOf('.');

    if (pos != -1) {
        var tab_id = \$('select[name=\"store_id\"]').val() + '-' + \$(node).attr('href').slice(0, pos).replace(/\\//g, '-').replace(/_/g, '-');
    } else {
        var tab_id = \$('select[name=\"store_id\"]').val() + '-' + \$(node).attr('href').replace(/\\//g, '-').replace(/_/g, '-');
    }

    if (!\$('#tab-' + tab_id).length) {
        \$.ajax({
            url: 'index.php?route=design/theme/template&user_token=";
        // line 161
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val() + '&path=' + \$(node).attr('href'),
            dataType: 'json',
            beforeSend: function() {
                \$(node).find('i').removeClass('fa-arrow-right');
                \$(node).find('i').addClass('fa-circle-o-notch fa-spin');
            },
            complete: function() {
                \$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
                \$(node).find('i').addClass('fa-arrow-right');
            },
            success: function(json) {
                if (json['code']) {
                    \$('#code').show();
                    \$('#recent').hide();

                    \$('.nav-tabs').append('<li><a href=\"#tab-' + tab_id + '\" data-toggle=\"tab\">' + \$(node).attr('href').split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa fa-minus-circle\"></i></a></li>');

                    html  = '<div class=\"tab-pane\" id=\"tab-' + tab_id + '\">';
                    html += '  <textarea name=\"code\" rows=\"10\"></textarea>';
                    html += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$('select[name=\"store_id\"]').val() + '\" />';
                    html += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(node).attr('href') + '\" />';
                    html += '  <br />';
                    html += '  <div class=\"pull-right\">';
                    html += '    <button type=\"button\" data-loading-text=\"";
        // line 184
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>';
                    html += '    <button data-loading-text=\"";
        // line 185
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-recycle\"></i> ";
        echo (isset($context["button_reset"]) ? $context["button_reset"] : null);
        echo "</button>';
                    html += '  </div>';
                    html += '</div>';

                    \$('.tab-content').append(html);

                    \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');

                    // Initialize codemirrror
                    var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
                        mode: 'text/html',
                        height: '500px',
                        lineNumbers: true,
                        autofocus: true,
                        theme: 'monokai'
                    });

                    codemirror.setValue(json['code']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
    }
});

\$('.nav-tabs').on('click', 'i.fa-minus-circle', function(e) {
    e.preventDefault();

    if (\$(this).parent().parent().is('li.active')) {
        index = \$(this).parent().parent().index();

        if (index == 0) {
            \$(this).parent().parent().parent().find('li').eq(index + 1).find('a').tab('show');
        } else {
            \$(this).parent().parent().parent().find('li').eq(index - 1).find('a').tab('show');
        }
    }

    \$(this).parent().parent().remove();

    \$(\$(this).parent().attr('href')).remove();

    if (!\$('#code > ul > li').length) {
        \$('#code').hide();
        \$('#recent').show();
    }
});

\$('.tab-content').on('click', '.btn-primary', function(e) {
    var node = this;

    var editor = \$('.tab-content .active .CodeMirror')[0].CodeMirror;

    \$.ajax({
        url: 'index.php?route=design/theme/save&user_token=";
        // line 243
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=' + \$('.tab-content .active input[name=\"store_id\"]').val() + '&path=' + \$('.tab-content .active input[name=\"path\"]').val(),
        type: 'post',
        data: 'code=' + encodeURIComponent(editor.getValue()),
        dataType: 'json',
        beforeSend: function() {
            \$(node).button('loading');
        },
        complete: function() {
            \$(node).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                \$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 263
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('.tab-content').on('click', '.btn-danger', function(e) {
    if (confirm('";
        // line 273
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
        var node = this;

        \$.ajax({
            url: 'index.php?route=design/theme/reset&user_token=";
        // line 277
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=' + \$('.tab-content .active input[name=\"store_id\"]').val() + '&path=' + \$('.tab-content .active input[name=\"path\"]').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(node).button('loading');
            },
            complete: function() {
                \$(node).button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                var codemirror = \$('.tab-content .active .CodeMirror')[0].CodeMirror;

                codemirror.setValue(json['code']);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});

\$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 313
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\$('#history').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var node = this;

    // Check if the file has an extension
    var tab_id = \$(node).parent().parent().find('input[name=\"store_id\"]').val() + '-' + \$(node).parent().parent().find('input[name=\"path\"]').val().replace(/\\//g, '-').replace(/_/g, '-');

    if (!\$('#tab-' + tab_id).length) {
        \$.ajax({
            url: 'index.php?route=design/theme/template&user_token=";
        // line 325
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=' + \$(node).parent().parent().find('input[name=\"store_id\"]').val() + '&path=' + \$(node).parent().parent().find('input[name=\"path\"]').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(node).button('loading');
            },
            complete: function() {
                \$(node).button('reset');
            },
            success: function(json) {
                if (json['code']) {
                    \$('#code').show();
                    \$('#recent').hide();

                    \$('.nav-tabs').append('<li><a href=\"#tab-' + tab_id + '\" data-toggle=\"tab\">' + \$(node).parent().parent().find('input[name=\"path\"]').val().split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa fa-minus-circle\"></i></a></li>');

                    html  = '<div class=\"tab-pane\" id=\"tab-' + tab_id + '\">';
                    html += '  <textarea name=\"code\" rows=\"10\"></textarea>';
                    html += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$(node).parent().parent().find('input[name=\"store_id\"]').val() + '\" />';
                    html += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(node).parent().parent().find('input[name=\"path\"]').val() + '.twig\" />';
                    html += '  <br />';
                    html += '  <div class=\"pull-right\">';
                    html += '    <button type=\"button\" data-loading-text=\"";
        // line 346
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>';
                    html += '    <button data-loading-text=\"";
        // line 347
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-recycle\"></i> ";
        echo (isset($context["button_reset"]) ? $context["button_reset"] : null);
        echo "</button>';
                    html += '  </div>';
                    html += '</div>';

                    \$('.tab-content').append(html);

                    \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');

                    // Initialize codemirrror
                    var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
                        mode: 'text/html',
                        height: '500px',
                        lineNumbers: true,
                        autofocus: true,
                        theme: 'monokai'
                    });

                    codemirror.setValue(json['code']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
    }
});

\$('#history').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    if (confirm('";
        // line 379
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
        var node = this;

        \$.ajax({
            url: \$(node).attr('href'),
            dataType: 'json',
            beforeSend: function() {
                \$(node).button('loading');
            },
            complete: function() {
                \$(node).button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 401
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
</div>
";
        // line 412
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 412,  522 => 401,  497 => 379,  460 => 347,  454 => 346,  430 => 325,  415 => 313,  376 => 277,  369 => 273,  356 => 263,  333 => 243,  270 => 185,  264 => 184,  238 => 161,  182 => 108,  138 => 67,  113 => 45,  107 => 42,  98 => 36,  91 => 31,  80 => 29,  76 => 28,  72 => 27,  65 => 23,  55 => 16,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="row">*/
/*           <div class="col-lg-3 col-md-3 col-sm-12">*/
/*             <div class="list-group">*/
/*               <div class="list-group-item">*/
/*                 <h4 class="list-group-item-heading">{{ text_store }}</h4>*/
/*               </div>*/
/*               <div class="list-group-item">*/
/*                 <select name="store_id" class="form-control">*/
/*                   <option value="0">{{ text_default }}</option>*/
/*                   {% for store in stores %}*/
/*                   <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="list-group">*/
/*               <div class="list-group-item">*/
/*                 <h4 class="list-group-item-heading">{{ text_template }}</h4>*/
/*               </div>*/
/*               <div id="path"></div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-lg-9 col-md-9 col-sm-12">*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_twig }}</div>*/
/*             <div id="recent">*/
/*               <fieldset>*/
/*                 <legend>{{ text_history }}</legend>*/
/*                 <div id="history"></div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div id="code" style="display: none;">*/
/*               <ul class="nav nav-tabs">*/
/*               </ul>*/
/*               <div class="tab-content"></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/* <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/* <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/* <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/* <script type="text/javascript"><!--*/
/* $('select[name="store_id"]').on('change', function(e) {*/
/*     $.ajax({*/
/*         url: 'index.php?route=design/theme/path&user_token={{ user_token }}&store_id=' + $('select[name="store_id"]').val(),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('select[name="store_id"]').prop('disabled', true);*/
/*         },*/
/*         complete: function() {*/
/*             $('select[name="store_id"]').prop('disabled', false);*/
/*         },*/
/*         success: function(json) {*/
/*             html = '';*/
/* */
/*             if (json['directory']) {*/
/*                 for (i = 0; i < json['directory'].length; i++) {*/
/*                     html += '<a href="' + json['directory'][i]['path'] + '" class="list-group-item directory">' + json['directory'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a>';*/
/*                 }*/
/*             }*/
/* */
/*             if (json['file']) {*/
/*                 for (i = 0; i < json['file'].length; i++) {*/
/*                     html += '<a href="' + json['file'][i]['path'] + '" class="list-group-item file">' + json['file'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a>';*/
/*                 }*/
/*             }*/
/* */
/*             $('#path').html(html);*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('select[name="store_id"]').trigger('change');*/
/* */
/* $('#path').on('click', 'a.directory', function(e) {*/
/*     console.log($(node).attr('href'));*/
/* */
/*     e.preventDefault();*/
/* */
/*     var node = this;*/
/* */
/*     $.ajax({*/
/*         url: 'index.php?route=design/theme/path&user_token={{ user_token }}&store_id=' + $('select[name="store_id"]').val() + '&path=' + $(node).attr('href'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $(node).find('i').removeClass('fa-arrow-right');*/
/*             $(node).find('i').addClass('fa-circle-o-notch fa-spin');*/
/*         },*/
/*         complete: function() {*/
/*             $(node).find('i').removeClass('fa-circle-o-notch fa-spin');*/
/*             $(node).find('i').addClass('fa-arrow-right');*/
/*         },*/
/*         success: function(json) {*/
/*             html = '';*/
/* */
/*             if (json['directory']) {*/
/*                 for (i = 0; i < json['directory'].length; i++) {*/
/*                     html += '<a href="' + json['directory'][i]['path'] + '" class="list-group-item directory">' + json['directory'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a>';*/
/*                 }*/
/*             }*/
/* */
/*             if (json['file']) {*/
/*                 for (i = 0; i < json['file'].length; i++) {*/
/*                     html += '<a href="' + json['file'][i]['path'] + '" class="list-group-item file">' + json['file'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a>';*/
/*                 }*/
/*             }*/
/* */
/*             if (json['back']) {*/
/*                 html += '<a href="' + json['back']['path'] + '" class="list-group-item directory">' + json['back']['name'] + ' <i class="fa fa-arrow-left fa-fw pull-right"></i></a>';*/
/*             }*/
/* */
/*             $('#path').html(html);*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('#path').on('click', 'a.file', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     var node = this;*/
/* */
/*     // Check if the file has an extension*/
/*     var pos = $(node).attr('href').lastIndexOf('.');*/
/* */
/*     if (pos != -1) {*/
/*         var tab_id = $('select[name="store_id"]').val() + '-' + $(node).attr('href').slice(0, pos).replace(/\//g, '-').replace(/_/g, '-');*/
/*     } else {*/
/*         var tab_id = $('select[name="store_id"]').val() + '-' + $(node).attr('href').replace(/\//g, '-').replace(/_/g, '-');*/
/*     }*/
/* */
/*     if (!$('#tab-' + tab_id).length) {*/
/*         $.ajax({*/
/*             url: 'index.php?route=design/theme/template&user_token={{ user_token }}&store_id=' + $('select[name="store_id"]').val() + '&path=' + $(node).attr('href'),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*                 $(node).find('i').removeClass('fa-arrow-right');*/
/*                 $(node).find('i').addClass('fa-circle-o-notch fa-spin');*/
/*             },*/
/*             complete: function() {*/
/*                 $(node).find('i').removeClass('fa-circle-o-notch fa-spin');*/
/*                 $(node).find('i').addClass('fa-arrow-right');*/
/*             },*/
/*             success: function(json) {*/
/*                 if (json['code']) {*/
/*                     $('#code').show();*/
/*                     $('#recent').hide();*/
/* */
/*                     $('.nav-tabs').append('<li><a href="#tab-' + tab_id + '" data-toggle="tab">' + $(node).attr('href').split('/').join(' / ') + '&nbsp;&nbsp;<i class="fa fa-minus-circle"></i></a></li>');*/
/* */
/*                     html  = '<div class="tab-pane" id="tab-' + tab_id + '">';*/
/*                     html += '  <textarea name="code" rows="10"></textarea>';*/
/*                     html += '  <input type="hidden" name="store_id" value="' + $('select[name="store_id"]').val() + '" />';*/
/*                     html += '  <input type="hidden" name="path" value="' + $(node).attr('href') + '" />';*/
/*                     html += '  <br />';*/
/*                     html += '  <div class="pull-right">';*/
/*                     html += '    <button type="button" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-floppy-o"></i> {{ button_save }}</button>';*/
/*                     html += '    <button data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-recycle"></i> {{ button_reset }}</button>';*/
/*                     html += '  </div>';*/
/*                     html += '</div>';*/
/* */
/*                     $('.tab-content').append(html);*/
/* */
/*                     $('.nav-tabs a[href=\'#tab-' + tab_id + '\']').tab('show');*/
/* */
/*                     // Initialize codemirrror*/
/*                     var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {*/
/*                         mode: 'text/html',*/
/*                         height: '500px',*/
/*                         lineNumbers: true,*/
/*                         autofocus: true,*/
/*                         theme: 'monokai'*/
/*                     });*/
/* */
/*                     codemirror.setValue(json['code']);*/
/*                 }*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     } else {*/
/*         $('.nav-tabs a[href=\'#tab-' + tab_id + '\']').tab('show');*/
/*     }*/
/* });*/
/* */
/* $('.nav-tabs').on('click', 'i.fa-minus-circle', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     if ($(this).parent().parent().is('li.active')) {*/
/*         index = $(this).parent().parent().index();*/
/* */
/*         if (index == 0) {*/
/*             $(this).parent().parent().parent().find('li').eq(index + 1).find('a').tab('show');*/
/*         } else {*/
/*             $(this).parent().parent().parent().find('li').eq(index - 1).find('a').tab('show');*/
/*         }*/
/*     }*/
/* */
/*     $(this).parent().parent().remove();*/
/* */
/*     $($(this).parent().attr('href')).remove();*/
/* */
/*     if (!$('#code > ul > li').length) {*/
/*         $('#code').hide();*/
/*         $('#recent').show();*/
/*     }*/
/* });*/
/* */
/* $('.tab-content').on('click', '.btn-primary', function(e) {*/
/*     var node = this;*/
/* */
/*     var editor = $('.tab-content .active .CodeMirror')[0].CodeMirror;*/
/* */
/*     $.ajax({*/
/*         url: 'index.php?route=design/theme/save&user_token={{ user_token }}&store_id=' + $('.tab-content .active input[name="store_id"]').val() + '&path=' + $('.tab-content .active input[name="path"]').val(),*/
/*         type: 'post',*/
/*         data: 'code=' + encodeURIComponent(editor.getValue()),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $(node).button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $(node).button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible').remove();*/
/* */
/*             if (json['error']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                 $('#history').load('index.php?route=design/theme/history&user_token={{ user_token }}');*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('.tab-content').on('click', '.btn-danger', function(e) {*/
/*     if (confirm('{{ text_confirm }}')) {*/
/*         var node = this;*/
/* */
/*         $.ajax({*/
/*             url: 'index.php?route=design/theme/reset&user_token={{ user_token }}&store_id=' + $('.tab-content .active input[name="store_id"]').val() + '&path=' + $('.tab-content .active input[name="path"]').val(),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*                 $(node).button('loading');*/
/*             },*/
/*             complete: function() {*/
/*                 $(node).button('reset');*/
/*             },*/
/*             success: function(json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                     $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/*                 var codemirror = $('.tab-content .active .CodeMirror')[0].CodeMirror;*/
/* */
/*                 codemirror.setValue(json['code']);*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     }*/
/* });*/
/* */
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=design/theme/history&user_token={{ user_token }}');*/
/* */
/* $('#history').on('click', '.btn-primary', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     var node = this;*/
/* */
/*     // Check if the file has an extension*/
/*     var tab_id = $(node).parent().parent().find('input[name="store_id"]').val() + '-' + $(node).parent().parent().find('input[name="path"]').val().replace(/\//g, '-').replace(/_/g, '-');*/
/* */
/*     if (!$('#tab-' + tab_id).length) {*/
/*         $.ajax({*/
/*             url: 'index.php?route=design/theme/template&user_token={{ user_token }}&store_id=' + $(node).parent().parent().find('input[name="store_id"]').val() + '&path=' + $(node).parent().parent().find('input[name="path"]').val(),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*                 $(node).button('loading');*/
/*             },*/
/*             complete: function() {*/
/*                 $(node).button('reset');*/
/*             },*/
/*             success: function(json) {*/
/*                 if (json['code']) {*/
/*                     $('#code').show();*/
/*                     $('#recent').hide();*/
/* */
/*                     $('.nav-tabs').append('<li><a href="#tab-' + tab_id + '" data-toggle="tab">' + $(node).parent().parent().find('input[name="path"]').val().split('/').join(' / ') + '&nbsp;&nbsp;<i class="fa fa-minus-circle"></i></a></li>');*/
/* */
/*                     html  = '<div class="tab-pane" id="tab-' + tab_id + '">';*/
/*                     html += '  <textarea name="code" rows="10"></textarea>';*/
/*                     html += '  <input type="hidden" name="store_id" value="' + $(node).parent().parent().find('input[name="store_id"]').val() + '" />';*/
/*                     html += '  <input type="hidden" name="path" value="' + $(node).parent().parent().find('input[name="path"]').val() + '.twig" />';*/
/*                     html += '  <br />';*/
/*                     html += '  <div class="pull-right">';*/
/*                     html += '    <button type="button" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-floppy-o"></i> {{ button_save }}</button>';*/
/*                     html += '    <button data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-recycle"></i> {{ button_reset }}</button>';*/
/*                     html += '  </div>';*/
/*                     html += '</div>';*/
/* */
/*                     $('.tab-content').append(html);*/
/* */
/*                     $('.nav-tabs a[href=\'#tab-' + tab_id + '\']').tab('show');*/
/* */
/*                     // Initialize codemirrror*/
/*                     var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {*/
/*                         mode: 'text/html',*/
/*                         height: '500px',*/
/*                         lineNumbers: true,*/
/*                         autofocus: true,*/
/*                         theme: 'monokai'*/
/*                     });*/
/* */
/*                     codemirror.setValue(json['code']);*/
/*                 }*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     } else {*/
/*         $('.nav-tabs a[href=\'#tab-' + tab_id + '\']').tab('show');*/
/*     }*/
/* });*/
/* */
/* $('#history').on('click', '.btn-danger', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     if (confirm('{{ text_confirm }}')) {*/
/*         var node = this;*/
/* */
/*         $.ajax({*/
/*             url: $(node).attr('href'),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*                 $(node).button('loading');*/
/*             },*/
/*             complete: function() {*/
/*                 $(node).button('reset');*/
/*             },*/
/*             success: function(json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                     $('#history').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#history').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                     $('#history').load('index.php?route=design/theme/history&user_token={{ user_token }}');*/
/*                 }*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     }*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
