<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b5st_navbar_before();?>

<div class="border-bottom border-secondary py-2">
  <nav id="site-navbar" class="container-xxl my-0 navbar navbar-expand-md navbar-light">
    <div class="container-xxl px-0">

      <?php b5st_navbar_brand();?>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'navbar',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '__return_false',
            'items_wrap'      => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => new b5st_walker_nav_menu()
          ) );
        ?>

        <?php b5st_navbar_search();?>    
      </div>

    </div>
  </nav>
</div>

<?php b5st_navbar_after();?>