<!doctype html>
<html lang="fr">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="author" content="Lucie TAUPIN et Lucas MATTINA" />
  <meta name="keywords" content="document theme wordpress" />
  <link href="reset.css" rel="stylesheet" type="text/css">
  <link href="commun.css" rel="stylesheet" type="text/css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <?php wp_head();?>
</head>
<body>
    <header>
      <img src="<?php echo get_bloginfo('template_url') ?>/background.jpg" class="cactus"/>
      <div class="main_title">
        <h1><?php bloginfo('name');?></h1>
        <nav><?php wp_page_menu('show_home=1');?></nav>
      </div>
    </header>
