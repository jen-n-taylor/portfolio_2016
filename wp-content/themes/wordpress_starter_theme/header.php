<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <!-- Side Nav Mask -->
      <div id="nav-mask"></div>

<header class="nav-container fixed-header" id="side-nav">
  <div class="main-nav">

      <nav>
            <svg id="nav-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" height="70px" width="70px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><polygon points="73.651,29.883 70.116,26.348 50,46.465 29.884,26.348 26.349,29.883 46.465,50 26.349,70.117 29.884,73.652   50,53.535 70.116,73.652 73.651,70.117 53.535,50 "/></svg>

          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
      </nav>

  </div> <!-- /.nav-wrapper wrapper -->
</header><!--/.header-->
