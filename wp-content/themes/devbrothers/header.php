<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devbrothers
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-md-3">
          <img src="<?php get_site_URL(); ?>/eferka/wp-content/themes/devbrothers/assets/logo-eferka.png" title="<?php bloginfo('title') ?>" alt="<?php bloginfo('title') ?>">
        </div>
        <div class="col-xs-12 col-md-9">
          <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
