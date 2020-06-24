<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <title><?php echo bloginfo() . wp_title(' - ', true); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<?php get_template_part('components/sidebar'); ?>
