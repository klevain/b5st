<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body
  <?php body_class('bg-dark'); ?>
  style="background-attachment:fixed;background-image: url('<? echo get_template_directory_uri(); ?>/theme/img/background-stars.png'); background-size:cover">
<img class="position-absolute top-50 start-50 translate-middle w-100" src="<? echo get_template_directory_uri(); ?>/theme/img/token-system.svg" />
<main
  id="site-main"
  class="container-fluid position-relative text-light"
  >
  <div class="position-relative py-5 px-4">
    <?php
      get_template_part('loops/page-maintenance-content');
    ?>
  </div>
</main>

<?php
  wp_footer();
?>
</body>
</html>