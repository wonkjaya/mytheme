<!DOCTYPE html>
<!-- saved from url=(0036) -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= bloginfo('name'); ?></title>
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/tambahan.css" rel="stylesheet">
    <link href="<?= bloginfo('stylesheet_url')?>" rel="stylesheet">
<body>
	<?php get_header(); ?>
	
	<?php get_template_part( 'navigations' ); ?>

    	<?php 
    	if($_GET['s'] or !$_GET){
    		get_template_part( 'home-content' ); 
    	}elseif (is_numeric($_GET['p']) and !$_GET['artikel']){
    		get_template_part( 'product-content' ); 
    	}elseif($_GET['p']=='artikel'){
    		get_template_part( 'artikel-content' ); 
    	}else{
    		get_template_part( 'not_found' ); 
    	}
    	?>
	
