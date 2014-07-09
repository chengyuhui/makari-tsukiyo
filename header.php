<?php
/**
 * The Header for our theme
 *
 *
 * @package Mikari
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css"/>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="row">
        <div class="col-md-2">
            <span id="brand"><span class="green">茉语</span>字幕</span>
        </div>
    </div>
</header><!-- /header -->
<div class="container">
    <div class="row clearfix">