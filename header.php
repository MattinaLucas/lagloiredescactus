<!doctype html>
<html lang="fr">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="author" content="Lucie TAUPIN et Lucas MATTINA" />
  <meta name="keywords" content="document theme wordpress" />
  <?php wp_head();?>
</head>
<body>
    <header>
      <h1><?php bloginfo('name');?></h1>
      <nav><?php wp_page_menu('show_home=1');?></nav>
    </header>
