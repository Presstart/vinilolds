<?php

/* install/step_4.twig */
class __TwigTemplate_c42b8e565f00f7ee77f7f42aacda44d239410822ff7b7d7af019173b55b966df extends Twig_Template
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
        <h1 class=\"pull-left\">4<small>/4</small></h1>
        <h3>
          ";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 9
        echo (isset($context["text_step_4"]) ? $context["text_step_4"] : null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  ";
        // line 17
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 18
            echo "  <div class=\"alert alert-success alert-dismissible\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
        echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 27
        echo (isset($context["text_catalog"]) ? $context["text_catalog"] : null);
        echo "</a>
      </div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 31
        echo (isset($context["text_admin"]) ? $context["text_admin"] : null);
        echo "</a>
      </div>
    </div>
  </div>
  <div class=\"modules\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&utm_source=opencart_install&utm_medium=store_link&utm_campaign=opencart_install\" target=\"_blank\" class=\"btn btn-default\">";
        // line 35
        echo (isset($context["text_extension"]) ? $context["text_extension"] : null);
        echo "</a></div>
  <div class=\"mailing\">
    <div class=\"row\">
      <div class=\"col-sm-12\"><i class=\"fa fa-envelope-o fa-5x\"></i>
        <h3>
          ";
        // line 40
        echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
        echo "<br>
          <small>";
        // line 41
        echo (isset($context["text_mail_description"]) ? $context["text_mail_description"] : null);
        echo "</small>
        </h3>
        <a href=\"http://newsletter.opencart.com/h/r/B660EBBE4980C85C\" target=\"_blank\" class=\"btn btn-secondary\">";
        // line 43
        echo (isset($context["button_mail"]) ? $context["button_mail"] : null);
        echo "</a>
      </div>
    </div>
  </div>
  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <a href=\"https://www.facebook.com/opencartbrasil/\" class=\"icon transition\"><i class=\"fa fa-facebook fa-4x\"></i></a>
        <h3>";
        // line 51
        echo (isset($context["text_facebook"]) ? $context["text_facebook"] : null);
        echo "</h3>
        <p>";
        // line 52
        echo (isset($context["text_facebook_description"]) ? $context["text_facebook_description"] : null);
        echo "</p>
        <a href=\"https://www.facebook.com/opencartbrasil/\">";
        // line 53
        echo (isset($context["text_facebook_visit"]) ? $context["text_facebook_visit"] : null);
        echo "</a>
      </div>
      <div class=\"col-sm-4\">
        <a href=\"https://forum.opencartbrasil.com.br/?utm_source=opencartbrasil_install&utm_medium=forum_link&utm_campaign=opencartbrasil_install\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 57
        echo (isset($context["text_forum"]) ? $context["text_forum"] : null);
        echo "</h3>
        <p>";
        // line 58
        echo (isset($context["text_forum_description"]) ? $context["text_forum_description"] : null);
        echo "</p>
        <a href=\"https://forum.opencartbrasil.com.br/?utm_source=opencartbrasil_install&utm_medium=forum_link&utm_campaign=opencartbrasil_install\">";
        // line 59
        echo (isset($context["text_forum_visit"]) ? $context["text_forum_visit"] : null);
        echo "</a>
      </div>
      <div class=\"col-sm-4\">
        <a href=\"https://www.opencartbrasil.com.br/parceiros&utm_source=opencartbrasil_install&utm_medium=parceiros_link&utm_campaign=opencartbrasil_install\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 63
        echo (isset($context["text_commercial"]) ? $context["text_commercial"] : null);
        echo "</h3>
        <p>";
        // line 64
        echo (isset($context["text_commercial_description"]) ? $context["text_commercial_description"] : null);
        echo "</p>
        <a href=\"https://www.opencartbrasil.com.br/parceiros&utm_source=opencartbrasil_install&utm_medium=parceiros_link&utm_campaign=opencartbrasil_install\" target=\"_blank\">";
        // line 65
        echo (isset($context["text_commercial_visit"]) ? $context["text_commercial_visit"] : null);
        echo "</a>
      </div>
    </div>
  </div>
</div>
";
        // line 70
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 70,  143 => 65,  139 => 64,  135 => 63,  128 => 59,  124 => 58,  120 => 57,  113 => 53,  109 => 52,  105 => 51,  94 => 43,  89 => 41,  85 => 40,  77 => 35,  70 => 31,  63 => 27,  52 => 20,  46 => 18,  44 => 17,  33 => 9,  29 => 8,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">4<small>/4</small></h1>*/
/*         <h3>*/
/*           {{ heading_title }}<br>*/
/*           <small>{{ text_step_4 }}</small>*/
/*         </h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible">{{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   <div class="visit">*/
/*     <div class="row">*/
/*       <div class="col-sm-5 col-sm-offset-1 text-center">*/
/*         <p><i class="fa fa-shopping-cart fa-5x"></i></p>*/
/*         <a href="../" class="btn btn-secondary">{{ text_catalog }}</a>*/
/*       </div>*/
/*       <div class="col-sm-5 text-center">*/
/*         <p><i class="fa fa-cog fa-5x white"></i></p>*/
/*         <a href="../admin/" class="btn btn-secondary">{{ text_admin }}</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="modules"><a href="https://www.opencart.com/index.php?route=marketplace/extension&utm_source=opencart_install&utm_medium=store_link&utm_campaign=opencart_install" target="_blank" class="btn btn-default">{{ text_extension }}</a></div>*/
/*   <div class="mailing">*/
/*     <div class="row">*/
/*       <div class="col-sm-12"><i class="fa fa-envelope-o fa-5x"></i>*/
/*         <h3>*/
/*           {{ text_mail }}<br>*/
/*           <small>{{ text_mail_description }}</small>*/
/*         </h3>*/
/*         <a href="http://newsletter.opencart.com/h/r/B660EBBE4980C85C" target="_blank" class="btn btn-secondary">{{ button_mail }}</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="support text-center">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <a href="https://www.facebook.com/opencartbrasil/" class="icon transition"><i class="fa fa-facebook fa-4x"></i></a>*/
/*         <h3>{{ text_facebook }}</h3>*/
/*         <p>{{ text_facebook_description }}</p>*/
/*         <a href="https://www.facebook.com/opencartbrasil/">{{ text_facebook_visit }}</a>*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         <a href="https://forum.opencartbrasil.com.br/?utm_source=opencartbrasil_install&utm_medium=forum_link&utm_campaign=opencartbrasil_install" class="icon transition"><i class="fa fa-comments fa-4x"></i></a>*/
/*         <h3>{{ text_forum }}</h3>*/
/*         <p>{{ text_forum_description }}</p>*/
/*         <a href="https://forum.opencartbrasil.com.br/?utm_source=opencartbrasil_install&utm_medium=forum_link&utm_campaign=opencartbrasil_install">{{ text_forum_visit }}</a>*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         <a href="https://www.opencartbrasil.com.br/parceiros&utm_source=opencartbrasil_install&utm_medium=parceiros_link&utm_campaign=opencartbrasil_install" class="icon transition"><i class="fa fa-user fa-4x"></i></a>*/
/*         <h3>{{ text_commercial }}</h3>*/
/*         <p>{{ text_commercial_description }}</p>*/
/*         <a href="https://www.opencartbrasil.com.br/parceiros&utm_source=opencartbrasil_install&utm_medium=parceiros_link&utm_campaign=opencartbrasil_install" target="_blank">{{ text_commercial_visit }}</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
