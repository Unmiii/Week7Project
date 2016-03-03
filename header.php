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
  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,700italic,400' rel='stylesheet' type='text/css'>
  <!-- font-family: 'Alegreya Sans', sans-serif; -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>


<body <?php body_class(); ?>>

<header>
<nav>
  <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </nav>

  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <div class="socialNav">
      <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'social'
            )); ?>
    </div>
  </div> <!-- /.container -->
  <div class="categoryNav">
    <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'blog_categories'
      )); ?>
  </div>

</header><!--/.header-->

