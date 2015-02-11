<?php //echo wp_get_referer() ?>
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
    	if($_GET['s'] or !$_GET){  								//pencarian
		
    		get_template_part( 'home-content' ); 
			
    	}elseif (is_numeric($_GET['p']) and !$_GET['artikel'] and !isset($_GET['k'])){	//produk
		
    		get_template_part( 'product-content' ); 
			
    	}elseif($_GET['p']=='artikel'){							//artikel
		
    		get_template_part( 'artikel-content' ); 
			
    	}elseif(is_numeric($_GET['p']) and isset($_GET['k'])){	//detail artikel
			get_template_part('artikel-content');
		}else{
    		get_template_part( 'not_found' ); 
    	}
    	?>
<!-- Histats.com  START  (standard)-->
<div class='hide'>
	<script type="text/javascript">
		document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
	</script>
	<script  type="text/javascript" >
	try {Histats.start(1,2932769,4,603,110,40,"00011111");
	Histats.track_hits();} catch(err){};
	</script>
	<!-- Histats.com  END  -->
</div>

<script>
//$(".hide").hide();
</script>	
