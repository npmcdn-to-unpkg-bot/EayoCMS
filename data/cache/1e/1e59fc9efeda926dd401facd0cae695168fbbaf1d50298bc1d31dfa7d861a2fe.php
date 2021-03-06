<?php

/* @backend/default.html.twig */
class __TwigTemplate_d49f9d160718642f1e2b557a99c6ed0c5f8fdc32396763dc45fceb2851879ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <!--[if IE]>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<![endif]-->
        <title>Admin</title>
        <!-- CDN  -->
        <link href=\"";
        // line 13
        echo (isset($context["assets_url"]) ? $context["assets_url"] : null);
        echo "css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- CUSTOM STYLE  -->
        <link href=\"http://fonts.googleapis.com/css?family=Lato|Montserrat\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo (isset($context["assets_url"]) ? $context["assets_url"] : null);
        echo "css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo (isset($context["assets_url"]) ? $context["assets_url"] : null);
        echo "css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
    </head>
    <body>
        <main class=\"app-main\">
            <nav class=\"app-nav-top navbar navbar-default navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Eayo<strong>CMS</strong></a>
                    </div>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"profile\">
                            <a href=\"#\">
                                <img width=\"40\" height=\"40\" src=\"";
        // line 35
        echo $this->env->getExtension('eayo')->getUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()));
        echo "\" alt=\"My profile\" class=\"img-circle\">
                                ";
        // line 36
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname", array());
        echo " ";
        echo twig_first($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname", array()));
        echo ".
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class=\"app-nav navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#app-nav\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\" id=\"app-nav\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('eayo')->getUrl("admin/");
        echo "\">Tableaux de bord</a></li>
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('eayo')->getUrl("admin/apps");
        echo "\">Applications</a></li>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('eayo')->getUrl("admin/users");
        echo "\">Utilisateurs</a></li>
                            <li><a href=\"forms.html\">Plugins</a></li>
                            <li><a href=\"login.html\">Paramètres</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- MENU SECTION END-->
            <div class=\"container-fluid\">
                ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "            </div>
        </main>
        <!-- CONTENT-WRAPPER SECTION END-->
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <strong>Eayo</strong>CMS crée avec <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> par Alexis Rouillard<br><sub>Effectuée en ";
        // line 75
        echo (isset($context["load_time"]) ? $context["load_time"] : null);
        echo " secondes</sub>
                    </div>

                </div>
            </div>
        </footer>
        <!-- FOOTER SECTION END-->
        <!-- CORE JQUERY SCRIPTS -->
        <script src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js\"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src=\"http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js\"></script>
        <!-- Admin SCRIPTS  -->
        <script src=\"";
        // line 87
        echo (isset($context["assets_url"]) ? $context["assets_url"] : null);
        echo "js/admin.js\"></script>
    </body>
</html>
";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "                    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@backend/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 66,  146 => 65,  138 => 87,  123 => 75,  114 => 68,  112 => 65,  100 => 56,  96 => 55,  92 => 54,  69 => 36,  65 => 35,  44 => 17,  40 => 16,  34 => 13,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/*         <meta name="description" content="" />*/
/*         <meta name="author" content="" />*/
/*         <!--[if IE]>*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/* <![endif]-->*/
/*         <title>Admin</title>*/
/*         <!-- CDN  -->*/
/*         <link href="{{assets_url}}css/bootstrap.min.css" rel="stylesheet" type="text/css" />*/
/*         <!-- CUSTOM STYLE  -->*/
/*         <link href="http://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet" type="text/css" />*/
/*         <link href="{{assets_url}}css/style.css" rel="stylesheet" type="text/css" />*/
/*         <link href="{{assets_url}}css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/*         <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/* <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         <main class="app-main">*/
/*             <nav class="app-nav-top navbar navbar-default navbar-static-top">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <a class="navbar-brand" href="#">Eayo<strong>CMS</strong></a>*/
/*                     </div>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="profile">*/
/*                             <a href="#">*/
/*                                 <img width="40" height="40" src="{{url(user.avatar)}}" alt="My profile" class="img-circle">*/
/*                                 {{user.firstname}} {{user.lastname | first}}.*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*             <nav class="app-nav navbar navbar-inverse navbar-static-top">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse" id="app-nav">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li><a href="{{url('admin/')}}">Tableaux de bord</a></li>*/
/*                             <li><a href="{{url('admin/apps')}}">Applications</a></li>*/
/*                             <li><a href="{{url('admin/users')}}">Utilisateurs</a></li>*/
/*                             <li><a href="forms.html">Plugins</a></li>*/
/*                             <li><a href="login.html">Paramètres</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*             <!-- MENU SECTION END-->*/
/*             <div class="container-fluid">*/
/*                 {% block content %}*/
/*                     {{content}}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </main>*/
/*         <!-- CONTENT-WRAPPER SECTION END-->*/
/*         <footer>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <strong>Eayo</strong>CMS crée avec <i class="fa fa-heart" aria-hidden="true"></i> par Alexis Rouillard<br><sub>Effectuée en {{load_time}} secondes</sub>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*         <!-- FOOTER SECTION END-->*/
/*         <!-- CORE JQUERY SCRIPTS -->*/
/*         <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js"></script>*/
/*         <!-- BOOTSTRAP SCRIPTS  -->*/
/*         <script src="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>*/
/*         <!-- Admin SCRIPTS  -->*/
/*         <script src="{{assets_url}}js/admin.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
