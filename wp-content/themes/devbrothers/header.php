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

  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <header style="background-image: url('<?php echo $url ?>');" />
    <button class="hamburger">
      <span>toggle menu</span>
    </button>
    <div class="overlay"></div>
    <div class="container header-container">
      <div class="row">
        <div class="col-xs-6 col-sm-3">
          <a href="<?php echo get_site_URL(); ?>"><img class="header__logo" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/logo-eferka.png" title="<?php bloginfo('title') ?>" alt="<?php bloginfo('title') ?>"></a>
        </div>
        <div class="col-xs-12 col-sm-9">
          <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
          </nav>
        </div>
      </div>
    </div>
    <div class="container bg">
      <div class="row">
        <div class="col-xs-12">
          <div class="header-heading">
            <h1 class="heading-h1 heading-h1--white"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>

    </div>
  </header>
