<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- header -->
  <a href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
  <?php bloginfo('description'); ?>
  <?php $args = ['theme_location'=>'primary'];?>
  <?php wp_nav_menu(); ?>
  <!-- end of header -->
