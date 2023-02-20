<!doctype html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md">
      <div class="container d-flex align-items-center">
        <a href="<?php home_url(); ?>" class="navbar-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saltbox-logo.svg" alt="<?php echo wp_get_document_title(); ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'menu_class' => 'navbar-nav ms-auto',
              'container' => false,
            ) );
          ?>
        </div>
      </div>
    </nav>
  </header>