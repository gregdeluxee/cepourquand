<?php
    include_once('core/init.php');
 ?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>TRolololo</title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--         <meta name="viewport" content="width=device-width, initial-scale=1">
 -->        <meta http-equiv="cleartype" content="on">



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
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="">


        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
         <!-- jQuery 1.10.2 -->
       <!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    </head>
    <body style="background:#fff;">



<?php
if (isset($_POST['prenom']) AND isset($_POST['nom'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $classe = $_POST['classe'];
    $user = new User(array(
      'prenom_user' => $prenom,
      'nom_user' => $nom,
      'classe_user' => $classe,
      'password_user' => '123456',
      'url_img_user' => 'img/users/'.$prenom.'.'.$nom.'.jpg'
    ));
    $user->setLogin_user("test");
    $login = $user->login_user();
    $user->setUrl_img_user('img/users/'.$login.'.jpg');
    $user->passwordHash($user->password_user());
    $manager = new UserManager($db);  
    $manager->add($user);
    echo $prenom.'  '.$nom.' AJOUTE !';
}

?>

       <form method="post" action='#'>
            <label>prenom</label>
            <input type="text" name="prenom">
            <label>nom</label>
            <input type="text" name="nom">
            <label>classe</label>
            <input type="text" name="classe">
            <input type="submit">
       </form>

        <script src="js/vendor/zepto.min.js"></script>
        <script src="js/helper.js"></script>
    </body>
</html>
