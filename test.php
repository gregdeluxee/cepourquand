<?php
    include_once('core/init.php');
    if (isset($_COOKIE['login'])) {
        $_SESSION['login'] = $_COOKIE['login'];
    }
    if (isset($_COOKIE['login']) AND strlen($_COOKIE['login'])>0) {
        $login = $_COOKIE['login'];   
        $userInfos = new UserManager($db);
        if ($userInfos->exists($login)) {
            $user = $userInfos->get($login);
            $_SESSION['id_user'] = $user->id_user();
            $_SESSION['prenom_user'] = $user->prenom_user();
            $_SESSION['nom_user'] = $user->nom_user();
            $_SESSION['url_img_user'] = $user->url_img_user();
        }
    } 
 ?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Cépourkan | Gestionnaire de tâches scolaires</title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--         <meta name="viewport" content="width=device-width, initial-scale=1">
 -->        <meta http-equiv="cleartype" content="on">


        <link rel="apple-touch-startup-image" href="img/startup/apple-touch-startup-image.png">
        <link rel="apple-touch-startup-image" href="img/startup/apple-touch-startup-image.png">
        <link rel="apple-touch-startup-image" sizes="640x960" href="img/startup/apple-touch-startup-image-retina.png" />
        <link rel="apple-touch-startup-image" sizes="960x640" href="img/startup/apple-touch-startup-image-landscape-retina.png" />
        <link rel="apple-touch-startup-image" sizes="640x1136" href="img/startup/apple-touch-startup-image-4in.png" />
        <link rel="apple-touch-startup-image" sizes="1136x640" href="img/startup/apple-touch-startup-image-landscape-4in.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">


        <!-- For iOS web apps. -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-title" content="Cépourkan?">


        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
         <!-- jQuery 1.10.2 -->
       <!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/jquery.touchSwipe.min.js"></script>
    </head>
    <body>


<?php
    //$tacheManager = new TacheManager($db);
    //$tache = $tacheManager->getTacheByProjetId("1");
    //print_r($tache);

    //$projetManager = new ProjetManager($db);
    //$projets = $projetManager->getProjetByUserId("1");
    //print_r($projets);
?>

        <!-- NAV -->
        <?php include('inc/menu.php'); ?>
        <?php include('inc/menuLateral.php'); ?>
        <?php include('inc/menuTache.php'); ?>
        <?php include('inc/menuAddTache.php'); ?>
        <?php include('inc/menuFiltres.php'); ?>
        <?php include('inc/menuChat.php'); ?>
        <?php include('inc/menuAddProjet.php'); ?>
        <?php include('inc/menuModifProjet.php'); ?>
        <!-- END NAV -->

        <!-- CONTENT  -->
        <div id="content">
        <div style="background: #282828; position:relative; width:100%; height:100%" class="contentmove"></div>
        
            <?php
                if (!isset($_COOKIE['loged']) OR $_COOKIE['loged'] == "0") {
                    include('pages/login.php'); 
                }
            ?>
            <?php 
                if (isset($_COOKIE['login']) AND strlen($_COOKIE['login'])>0) {
                    include('traitementAjax/rafraichir.php'); 
                } 
            ?>
        </div>
        <!-- END CONTENT -->

        <script src="js/vendor/zepto.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="js/login.js"></script>
        <?php  
            if (isset($_COOKIE['login']) AND strlen($_COOKIE['login'])>0) {
                ?>
                <script src="js/main.js"></script>
                <?php
            } 
        ?>
    </body>
</html>
  