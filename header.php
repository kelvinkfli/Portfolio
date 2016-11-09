<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,400" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" />
  <link href="http://cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  <?php wp_head(); ?>
</head>

<div class="overflow"

<body <?php body_class(); ?>>
