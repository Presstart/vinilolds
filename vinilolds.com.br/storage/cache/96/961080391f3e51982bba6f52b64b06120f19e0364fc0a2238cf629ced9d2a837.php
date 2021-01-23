<?php

/* common/filemanager.twig */
class __TwigTemplate_2d841aa685abb4d2c6e92e32dbf933ba94bb62cf72fa811261f3aa041a85e938 extends Twig_Template
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
        echo "<div id=\"filemanager\" class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\"><a href=\"";
        // line 9
        echo (isset($context["parent"]) ? $context["parent"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_parent"]) ? $context["button_parent"] : null);
        echo "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a> <a href=\"";
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "\" class=\"form-control\">
            <span class=\"input-group-btn\">
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 18
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </span>
          </div>
        </div>
      </div>
      <hr />
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["images"]) ? $context["images"] : null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "      <div class=\"row\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "        <div class=\"col-sm-3 col-xs-6 text-center\">
          ";
                // line 28
                if (($this->getAttribute($context["image"], "type", array()) == "directory")) {
                    // line 29
                    echo "          <div class=\"text-center\"><a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a></div>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 31
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\" />
            ";
                    // line 32
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "
          </label>
          ";
                }
                // line 35
                echo "          ";
                if (($this->getAttribute($context["image"], "type", array()) == "image")) {
                    // line 36
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" /></a>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 38
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\" />
            ";
                    // line 39
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "
          </label>
          ";
                }
                // line 42
                echo "        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </div>
      <br />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
    <div class=\"modal-footer\">";
        // line 48
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  ";
        // line 52
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 53
            echo "  \$('a.thumbnail').on('click', function(e) {
    e.preventDefault();

    ";
            // line 56
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 57
                echo "    \$('#";
                echo twig_escape_filter($this->env, (isset($context["thumb"]) ? $context["thumb"] : null), "js");
                echo "').find('img').attr('src', \$(this).find('img').attr('src'));
    ";
            }
            // line 59
            echo "
    \$('#";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : null), "js");
            echo "').val(\$(this).parent().find('input').val());

    \$('#modal-image').modal('hide');
  });
  ";
        }
        // line 65
        echo "
  \$('a.directory').on('click', function(e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
  });

  \$('.pagination a').on('click', function(e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
  });

  \$('#button-parent').on('click', function(e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
  });

  \$('#button-refresh').on('click', function(e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
  });

  \$('input[name=\\'search\\']').on('keydown', function(e) {
    if (e.which == 13) {
      \$('#button-search').trigger('click');
    }
  });

  \$('#button-search').on('click', function(e) {
    var url = 'index.php?route=common/filemanager&user_token=";
        // line 97
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "';

    var filter_name = \$('input[name=\\'search\\']').val();

    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    ";
        // line 105
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 106
            echo "    url += '&thumb=' + '";
            echo twig_escape_filter($this->env, (isset($context["thumb"]) ? $context["thumb"] : null), "js");
            echo "';
    ";
        }
        // line 108
        echo "
    ";
        // line 109
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 110
            echo "    url += '&target=' + '";
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : null), "js");
            echo "';
    ";
        }
        // line 112
        echo "
    \$('#modal-image').load(url);
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('#button-upload').on('click', function() {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

    \$('#form-upload input[name=\\'file[]\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=common/filemanager/upload&user_token=";
        // line 133
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
            \$('#button-upload').prop('disabled', true);
          },
          complete: function() {
            \$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
            \$('#button-upload').prop('disabled', false);
          },
          success: function(json) {
            if (json['error']) {
              alert(json['error']);
            }

            if (json['success']) {
              alert(json['success']);

              \$('#button-refresh').trigger('click');
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('#button-folder').popover({
    html: true,
    placement: 'bottom',
    trigger: 'click',
    title: '";
        // line 171
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "',
    content: function() {
      html  = '<div class=\"input-group\">';
      html += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 174
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "\" class=\"form-control\">';
      html += '  <span class=\"input-group-btn\"><button type=\"button\" title=\"";
        // line 175
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></span>';
      html += '</div>';

      return html;
    }
  });

  \$('#button-folder').on('shown.bs.popover', function() {
    \$('#button-create').on('click', function() {
      \$.ajax({
        url: 'index.php?route=common/filemanager/folder&user_token=";
        // line 185
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
        beforeSend: function() {
          \$('#button-create').prop('disabled', true);
        },
        complete: function() {
          \$('#button-create').prop('disabled', false);
        },
        success: function(json) {
          if (json['error']) {
            alert(json['error']);
          }

          if (json['success']) {
            alert(json['success']);

            \$('#button-refresh').trigger('click');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });
  });

  \$('#modal-image #button-delete').on('click', function(e) {
    if (confirm('";
        // line 214
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
      \$.ajax({
        url: 'index.php?route=common/filemanager/delete&user_token=";
        // line 216
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('input[name^=\\'path\\']:checked'),
        beforeSend: function() {
          \$('#button-delete').prop('disabled', true);
        },
        complete: function() {
          \$('#button-delete').prop('disabled', false);
        },
        success: function(json) {
          if (json['error']) {
            alert(json['error']);
          }

          if (json['success']) {
            alert(json['success']);

            \$('#button-refresh').trigger('click');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 216,  370 => 214,  336 => 185,  323 => 175,  319 => 174,  313 => 171,  270 => 133,  247 => 112,  241 => 110,  239 => 109,  236 => 108,  230 => 106,  228 => 105,  215 => 97,  181 => 65,  173 => 60,  170 => 59,  164 => 57,  162 => 56,  157 => 53,  155 => 52,  148 => 48,  145 => 47,  137 => 44,  130 => 42,  124 => 39,  120 => 38,  108 => 36,  105 => 35,  99 => 32,  95 => 31,  89 => 29,  87 => 28,  84 => 27,  80 => 26,  77 => 25,  73 => 24,  64 => 18,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div id="filemanager" class="modal-dialog modal-lg">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">{{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <div class="row">*/
/*         <div class="col-sm-5"><a href="{{ parent }}" data-toggle="tooltip" title="{{ button_parent }}" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a> <a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_upload }}" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_folder }}" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_delete }}" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>*/
/*         </div>*/
/*         <div class="col-sm-7">*/
/*           <div class="input-group">*/
/*             <input type="text" name="search" value="{{ filter_name }}" placeholder="{{ entry_search }}" class="form-control">*/
/*             <span class="input-group-btn">*/
/*             <button type="button" data-toggle="tooltip" title="{{ button_search }}" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>*/
/*             </span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <hr />*/
/*       {% for image in images|batch(4) %}*/
/*       <div class="row">*/
/*         {% for image in image %}*/
/*         <div class="col-sm-3 col-xs-6 text-center">*/
/*           {% if image.type == 'directory' %}*/
/*           <div class="text-center"><a href="{{ image.href }}" class="directory" style="vertical-align: middle;"><i class="fa fa-folder fa-5x"></i></a></div>*/
/*           <label>*/
/*             <input type="checkbox" name="path[]" value="{{ image.path }}" />*/
/*             {{ image.name }}*/
/*           </label>*/
/*           {% endif %}*/
/*           {% if image.type == 'image' %}*/
/*           <a href="{{ image.href }}" class="thumbnail"><img src="{{ image.thumb }}" alt="{{ image.name }}" title="{{ image.name }}" /></a>*/
/*           <label>*/
/*             <input type="checkbox" name="path[]" value="{{ image.path }}" />*/
/*             {{ image.name }}*/
/*           </label>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <br />*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="modal-footer">{{ pagination }}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   {% if target %}*/
/*   $('a.thumbnail').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     {% if thumb %}*/
/*     $('#{{ thumb|escape('js') }}').find('img').attr('src', $(this).find('img').attr('src'));*/
/*     {% endif %}*/
/* */
/*     $('#{{ target|escape('js') }}').val($(this).parent().find('input').val());*/
/* */
/*     $('#modal-image').modal('hide');*/
/*   });*/
/*   {% endif %}*/
/* */
/*   $('a.directory').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#modal-image').load($(this).attr('href'));*/
/*   });*/
/* */
/*   $('.pagination a').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#modal-image').load($(this).attr('href'));*/
/*   });*/
/* */
/*   $('#button-parent').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#modal-image').load($(this).attr('href'));*/
/*   });*/
/* */
/*   $('#button-refresh').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#modal-image').load($(this).attr('href'));*/
/*   });*/
/* */
/*   $('input[name=\'search\']').on('keydown', function(e) {*/
/*     if (e.which == 13) {*/
/*       $('#button-search').trigger('click');*/
/*     }*/
/*   });*/
/* */
/*   $('#button-search').on('click', function(e) {*/
/*     var url = 'index.php?route=common/filemanager&user_token={{ user_token }}&directory={{ directory }}';*/
/* */
/*     var filter_name = $('input[name=\'search\']').val();*/
/* */
/*     if (filter_name) {*/
/*       url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*     }*/
/* */
/*     {% if thumb %}*/
/*     url += '&thumb=' + '{{ thumb|escape('js') }}';*/
/*     {% endif %}*/
/* */
/*     {% if target %}*/
/*     url += '&target=' + '{{ target|escape('js') }}';*/
/*     {% endif %}*/
/* */
/*     $('#modal-image').load(url);*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-upload').on('click', function() {*/
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file[]" value="" multiple="multiple" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file[]\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'file[]\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=common/filemanager/upload&user_token={{ user_token }}&directory={{ directory }}',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $('#button-upload i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/*             $('#button-upload').prop('disabled', true);*/
/*           },*/
/*           complete: function() {*/
/*             $('#button-upload i').replaceWith('<i class="fa fa-upload"></i>');*/
/*             $('#button-upload').prop('disabled', false);*/
/*           },*/
/*           success: function(json) {*/
/*             if (json['error']) {*/
/*               alert(json['error']);*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $('#button-refresh').trigger('click');*/
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
/*   $('#button-folder').popover({*/
/*     html: true,*/
/*     placement: 'bottom',*/
/*     trigger: 'click',*/
/*     title: '{{ entry_folder }}',*/
/*     content: function() {*/
/*       html  = '<div class="input-group">';*/
/*       html += '  <input type="text" name="folder" value="" placeholder="{{ entry_folder }}" class="form-control">';*/
/*       html += '  <span class="input-group-btn"><button type="button" title="{{ button_folder }}" id="button-create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></span>';*/
/*       html += '</div>';*/
/* */
/*       return html;*/
/*     }*/
/*   });*/
/* */
/*   $('#button-folder').on('shown.bs.popover', function() {*/
/*     $('#button-create').on('click', function() {*/
/*       $.ajax({*/
/*         url: 'index.php?route=common/filemanager/folder&user_token={{ user_token }}&directory={{ directory }}',*/
/*         type: 'post',*/
/*         dataType: 'json',*/
/*         data: 'folder=' + encodeURIComponent($('input[name=\'folder\']').val()),*/
/*         beforeSend: function() {*/
/*           $('#button-create').prop('disabled', true);*/
/*         },*/
/*         complete: function() {*/
/*           $('#button-create').prop('disabled', false);*/
/*         },*/
/*         success: function(json) {*/
/*           if (json['error']) {*/
/*             alert(json['error']);*/
/*           }*/
/* */
/*           if (json['success']) {*/
/*             alert(json['success']);*/
/* */
/*             $('#button-refresh').trigger('click');*/
/*           }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     });*/
/*   });*/
/* */
/*   $('#modal-image #button-delete').on('click', function(e) {*/
/*     if (confirm('{{ text_confirm }}')) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=common/filemanager/delete&user_token={{ user_token }}',*/
/*         type: 'post',*/
/*         dataType: 'json',*/
/*         data: $('input[name^=\'path\']:checked'),*/
/*         beforeSend: function() {*/
/*           $('#button-delete').prop('disabled', true);*/
/*         },*/
/*         complete: function() {*/
/*           $('#button-delete').prop('disabled', false);*/
/*         },*/
/*         success: function(json) {*/
/*           if (json['error']) {*/
/*             alert(json['error']);*/
/*           }*/
/* */
/*           if (json['success']) {*/
/*             alert(json['success']);*/
/* */
/*             $('#button-refresh').trigger('click');*/
/*           }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     }*/
/*   });*/
/* //--></script>*/
/* */
