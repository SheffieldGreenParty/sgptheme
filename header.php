<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sgp
 */

?><!DOCTYPE html>
<html lang="en-GB">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php include(TEMPLATEPATH . '/includes/_site-header.php'); ?>

