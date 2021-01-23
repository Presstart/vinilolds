<?php

/* upgrade/upgrade.twig */
class __TwigTemplate_b6d1f6d8bdb3188b5a11d7bdf914a03d4c9bf13d7fbb409676b259b9550a4abf extends Twig_Template
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
        <h1 class=\"pull-left\">1<small>/2</small></h1>
        <h3>
          ";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 9
        echo (isset($context["text_upgrade"]) ? $context["text_upgrade"] : null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  <div class=\"row\">
    <div class=\"col-sm-9\">
      <h3>";
        // line 19
        echo (isset($context["text_server"]) ? $context["text_server"] : null);
        echo "</h3>
      <fieldset>
        <ol>
          <li>";
        // line 22
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</li>
          <li>";
        // line 23
        echo (isset($context["text_clear"]) ? $context["text_clear"] : null);
        echo "</li>
          <li>";
        // line 24
        echo (isset($context["text_admin"]) ? $context["text_admin"] : null);
        echo "</li>
          <li>";
        // line 25
        echo (isset($context["text_user"]) ? $context["text_user"] : null);
        echo "</li>
          <li>";
        // line 26
        echo (isset($context["text_setting"]) ? $context["text_setting"] : null);
        echo "</li>
          <li>";
        // line 27
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "</li>
        </ol>
      </fieldset>
      <h3>";
        // line 30
        echo (isset($context["text_steps"]) ? $context["text_steps"] : null);
        echo "</h3>
      <fieldset>
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
      <div class=\"buttons\">
        <div class=\"text-right\">
          <input type=\"submit\" value=\"";
        // line 44
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-continue\" class=\"btn btn-primary\" />
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">";
        // line 48
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
  <script type=\"text/javascript\"><!--
    var step = 0;

    \$('#button-continue').on('click', function() {
      \$('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');
      \$('#progress-text').html('');
      \$('#button-continue').prop('disabled', true).before('<i class=\"fa fa-spinner fa-spin\"></i> ');

      start('index.php?route=upgrade/upgrade/next');
    });

    function start(url) {
      setTimeout(function(){
        \$.ajax({
          url: url,
          type: 'post',
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
              \$('#progress-bar').addClass('progress-bar-danger');
              \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

              \$('#button-continue').prop('disabled', false);
              \$('.fa-spinner').remove();
            }

            if (json['success']) {
              \$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
              \$('#progress-bar').css('width', ((step / ";
        // line 78
        echo (isset($context["total"]) ? $context["total"] : null);
        echo ") * 100) + '%');
            }

            if (json['next']) {
              start(json['next']);
            } else if (!json['error']) {
              \$('#button-continue').replaceWith('<a href=\"";
        // line 84
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a>');
              \$('.fa-spinner').remove();
            }

            step++;
          },
          error: function(xhr, ajaxOptions, thrownError) {
            \$('#progress-bar').addClass('progress-bar-danger');
            \$('#progress-text').html('<div class=\"text-danger\">' + (thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText) + '</div>');
            \$('#button-continue').prop('disabled', false);
            \$('.fa-spinner').remove();
          }
        });
      }, 1000);
    }
  //--></script>
</div>
";
        // line 101
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "upgrade/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 101,  147 => 84,  138 => 78,  105 => 48,  98 => 44,  84 => 33,  78 => 30,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  56 => 23,  52 => 22,  46 => 19,  33 => 9,  29 => 8,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">1<small>/2</small></h1>*/
/*         <h3>*/
/*           {{ heading_title }}<br>*/
/*           <small>{{ text_upgrade }}</small>*/
/*         </h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   <div class="row">*/
/*     <div class="col-sm-9">*/
/*       <h3>{{ text_server }}</h3>*/
/*       <fieldset>*/
/*         <ol>*/
/*           <li>{{ text_error }}</li>*/
/*           <li>{{ text_clear }}</li>*/
/*           <li>{{ text_admin }}</li>*/
/*           <li>{{ text_user }}</li>*/
/*           <li>{{ text_setting }}</li>*/
/*           <li>{{ text_store }}</li>*/
/*         </ol>*/
/*       </fieldset>*/
/*       <h3>{{ text_steps }}</h3>*/
/*       <fieldset>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label">{{ entry_progress }}</label>*/
/*           <div class="col-sm-10">*/
/*             <div class="progress">*/
/*               <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>*/
/*             </div>*/
/*             <div id="progress-text"></div>*/
/*           </div>*/
/*         </div>*/
/*       </fieldset>*/
/*       <div class="buttons">*/
/*         <div class="text-right">*/
/*           <input type="submit" value="{{ button_continue }}" id="button-continue" class="btn btn-primary" />*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">{{ column_left }}</div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*     var step = 0;*/
/* */
/*     $('#button-continue').on('click', function() {*/
/*       $('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');*/
/*       $('#progress-text').html('');*/
/*       $('#button-continue').prop('disabled', true).before('<i class="fa fa-spinner fa-spin"></i> ');*/
/* */
/*       start('index.php?route=upgrade/upgrade/next');*/
/*     });*/
/* */
/*     function start(url) {*/
/*       setTimeout(function(){*/
/*         $.ajax({*/
/*           url: url,*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           success: function(json) {*/
/*             if (json['error']) {*/
/*               $('#progress-bar').addClass('progress-bar-danger');*/
/*               $('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* */
/*               $('#button-continue').prop('disabled', false);*/
/*               $('.fa-spinner').remove();*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               $('#progress-text').html('<span class="text-success">' + json['success'] + '</span>');*/
/*               $('#progress-bar').css('width', ((step / {{ total }}) * 100) + '%');*/
/*             }*/
/* */
/*             if (json['next']) {*/
/*               start(json['next']);*/
/*             } else if (!json['error']) {*/
/*               $('#button-continue').replaceWith('<a href="{{ store }}" class="btn btn-primary">{{ button_continue }}</a>');*/
/*               $('.fa-spinner').remove();*/
/*             }*/
/* */
/*             step++;*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             $('#progress-bar').addClass('progress-bar-danger');*/
/*             $('#progress-text').html('<div class="text-danger">' + (thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText) + '</div>');*/
/*             $('#button-continue').prop('disabled', false);*/
/*             $('.fa-spinner').remove();*/
/*           }*/
/*         });*/
/*       }, 1000);*/
/*     }*/
/*   //--></script>*/
/* </div>*/
/* {{ footer }}*/
