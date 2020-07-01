<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <title><?php bloginfo('name'); ?></title>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
</head>
<body>
  <header>
      <hgroup>
          <h1>Blog tema</h1>
          <span>Uvod u theme development</span>
      </hgroup>
      <nav>
         <?php 
                $args = array(
                    'theme_location' => 'primary'
                );
           ?>
           <?php wp_nav_menu(); ?>
      </nav>
  </header> 
  <hr>