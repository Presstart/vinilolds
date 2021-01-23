<?php

/* marketplace/installer.twig */
class __TwigTemplate_c93e35db6fe65b2a0aac1af8d017f2a9e3f0dd61a9c29e5c43dcc10b140b831f extends Twig_Template
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
        // line 10
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 16
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <form class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 21
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"button-upload\"><span data-toggle=\"tooltip\" title=\"";
        // line 23
        echo (isset($context["help_upload"]) ? $context["help_upload"] : null);
        echo "\">";
        echo (isset($context["entry_upload"]) ? $context["entry_upload"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-upload\" data-loading-text=\"";
        // line 25
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> ";
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "</button>
            </div>
          </div>
        </fieldset>
        <br />
        <fieldset>
          <legend>";
        // line 31
        echo (isset($context["text_progress"]) ? $context["text_progress"] : null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 33
        echo (isset($context["entry_progress"]) ? $context["entry_progress"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <br />
        <fieldset>
          <legend>";
        // line 44
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</legend>
          <div id=\"history\"></div>
        </fieldset>
      </form>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 57
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\$('#button-upload').on('click', function() {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if (\$('#form-upload input[name=\\'file\\']').val() != '') {
            clearInterval(timer);

            // Reset everything
            \$('.alert-dismissible').remove();
            \$('#progress-bar').css('width', '0%');
            \$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
            \$('#progress-text').html('');

            \$.ajax({
                url: 'index.php?route=marketplace/installer/upload&user_token=";
        // line 81
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$('#button-upload').button('loading');
                },
                complete: function() {
                    \$('#button-upload').button('reset');
                },
                success: function(json) {
                    if (json['error']) {
                        \$('#progress-bar').addClass('progress-bar-danger');
                        \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
                    }

                    if (json['text']) {
                        \$('#progress-bar').css('width', '20%');
                        \$('#progress-text').html(json['text']);
                    }

                    if (json['next']) {
                        next(json['next'], 1);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

function next(url, i) {
    i = i + 1;

    \$.ajax({
        url: url,
        dataType: 'json',
        success: function(json) {
            \$('#progress-bar').css('width', (i * 20) + '%');

            if (json['error']) {
                \$('#progress-bar').addClass('progress-bar-danger');
                \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
                \$('#progress-bar').addClass('progress-bar-success');
                \$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
                
                \$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 135
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
            }

            if (json['text']) {
                \$('#progress-text').html(json['text']);
            }

            if (json['next']) {
                next(json['next'], i);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
}

// Uninstall
\$('#history').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 159
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_install_id=' + \$(this).attr('value'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                \$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 173
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
</div>
";
        // line 183
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 183,  249 => 173,  232 => 159,  205 => 135,  148 => 81,  121 => 57,  105 => 44,  91 => 33,  86 => 31,  75 => 25,  68 => 23,  63 => 21,  55 => 16,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> {{ text_upload }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <form class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_upload }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="button-upload"><span data-toggle="tooltip" title="{{ help_upload }}">{{ entry_upload }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-upload" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <br />*/
/*         <fieldset>*/
/*           <legend>{{ text_progress }}</legend>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_progress }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="progress">*/
/*                 <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>*/
/*               </div>*/
/*               <div id="progress-text"></div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <br />*/
/*         <fieldset>*/
/*           <legend>{{ text_history }}</legend>*/
/*           <div id="history"></div>*/
/*         </fieldset>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=marketplace/installer/history&user_token={{ user_token }}');*/
/* */
/* $('#button-upload').on('click', function() {*/
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
/*         if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*             clearInterval(timer);*/
/* */
/*             // Reset everything*/
/*             $('.alert-dismissible').remove();*/
/*             $('#progress-bar').css('width', '0%');*/
/*             $('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/*             $('#progress-text').html('');*/
/* */
/*             $.ajax({*/
/*                 url: 'index.php?route=marketplace/installer/upload&user_token={{ user_token }}',*/
/*                 type: 'post',*/
/*                 dataType: 'json',*/
/*                 data: new FormData($('#form-upload')[0]),*/
/*                 cache: false,*/
/*                 contentType: false,*/
/*                 processData: false,*/
/*                 beforeSend: function() {*/
/*                     $('#button-upload').button('loading');*/
/*                 },*/
/*                 complete: function() {*/
/*                     $('#button-upload').button('reset');*/
/*                 },*/
/*                 success: function(json) {*/
/*                     if (json['error']) {*/
/*                         $('#progress-bar').addClass('progress-bar-danger');*/
/*                         $('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/*                     }*/
/* */
/*                     if (json['text']) {*/
/*                         $('#progress-bar').css('width', '20%');*/
/*                         $('#progress-text').html(json['text']);*/
/*                     }*/
/* */
/*                     if (json['next']) {*/
/*                         next(json['next'], 1);*/
/*                     }*/
/*                 },*/
/*                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         }*/
/*     }, 500);*/
/* });*/
/* */
/* function next(url, i) {*/
/*     i = i + 1;*/
/* */
/*     $.ajax({*/
/*         url: url,*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*             $('#progress-bar').css('width', (i * 20) + '%');*/
/* */
/*             if (json['error']) {*/
/*                 $('#progress-bar').addClass('progress-bar-danger');*/
/*                 $('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*                 $('#progress-bar').addClass('progress-bar-success');*/
/*                 $('#progress-text').html('<span class="text-success">' + json['success'] + '</span>');*/
/*                 */
/*                 $('#history').load('index.php?route=marketplace/installer/history&user_token={{ user_token }}');*/
/*             }*/
/* */
/*             if (json['text']) {*/
/*                 $('#progress-text').html(json['text']);*/
/*             }*/
/* */
/*             if (json['next']) {*/
/*                 next(json['next'], i);*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* }*/
/* */
/* // Uninstall*/
/* $('#history').on('click', '.btn-danger', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     var element = this;*/
/* */
/*     $.ajax({*/
/*         url: 'index.php?route=marketplace/install/uninstall&user_token={{ user_token }}&extension_install_id=' + $(this).attr('value'),*/
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
/*             if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                 $('#history').load('index.php?route=marketplace/installer/history&user_token={{ user_token }}');*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
