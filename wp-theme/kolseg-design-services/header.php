<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
  <header class="site-header">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="KOLSEG home">
      <span class="brand-logo"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/kolseg-logo.png'); ?>" alt="KOLSEG logo"></span>
      <span class="brand-text">
        <strong><?php bloginfo('name'); ?></strong>
        <small><?php bloginfo('description'); ?></small>
      </span>
    </a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-label="Open navigation">
      <span></span>
      <span></span>
    </button>
    <nav class="site-nav">
      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'primary',
              'container' => false,
              'items_wrap' => '%3$s',
              'fallback_cb' => 'kolseg_primary_menu_fallback',
          )
      );
      ?>
    </nav>
  </header>

