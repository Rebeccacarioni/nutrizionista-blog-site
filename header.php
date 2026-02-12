<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?> - Home</title>
  <meta name="description" content="Sito demo di nutrizionista con blog personale" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
  <div class="container nav">
    <a class="brand" href="<?php echo home_url(); ?>">
      <span class="mark" aria-hidden="true">
        <svg viewBox="0 0 24 24" role="img" aria-label="Logo Studio">
          <path d="M19.5 2.5c-4 .7-7.5 2.9-10 6.2C7.4 11.3 6.5 14 6.5 16.5c0 3.3 2.7 6 6 6 5 0 9-4 9-9 0-4.8-1.8-9.2-2-11zm-9 18c.7-1.6 1.7-3 3.1-4.1 1.6-1.2 3.4-2.1 5.4-2.4-.9 3.6-4.1 6.5-8.5 6.5z"/>
        </svg>
      </span>
      <span class="title">
        <strong><?php bloginfo('name'); ?></strong>
        <span><?php bloginfo('description'); ?></span>
      </span>
    </a>
    <nav class="navlinks" aria-label="Menu principale">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => false,
          'items_wrap'     => '%3$s', // niente <ul>, usiamo direttamente i <a> (lo stile li prende lo stesso)
      ) );
      ?>
    </nav>
  </div>
</header>