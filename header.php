<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>alexWEBsoft - My portfolio site</title>
    <link rel="stylesheet" href="<?php echo ROOTURI . 'inc' . DS . 'css' . DS . 'master.css'; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<meta name="keywords" content="html, php, css, developer, web, designer, mysql, javascript, responsive, jquery, html5, css3" />
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<meta name="author" content="Aleksandar Šafranec, yt5ytt@gmail.com, +381605991001" />
    <link rel="icon" type="img/png" href="<?php echo ROOTURI . 'inc' . DS . 'img' . DS . 'favicon.png'; ?>">
  </head>
  <body>

    <?php

      include(ABSPATH . 'inc' . DS . 'topLine.inc.php');

      include(ABSPATH . 'inc' . DS . 'siteHeader.inc.php');
    
    ?>

    <div id="main">

      <?php if($menu->getTitle($_GET['pageID']) != "Home"): ?>
        <h1 class="pageTitle wrapper"><?php echo $menu->getTitle($_GET['pageID']); ?></h1>
      <?php endif; ?>