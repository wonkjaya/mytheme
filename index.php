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
<?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '2',
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); 
//print_r($posts_array);
?>

	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<a href="index.php">
	            			REZstore<span> Indonesia</span>
	            		</a>
	            		<div><?= bloginfo('description'); ?></div>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
	            	<div class="well">
	                    <form action="">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" placeholder="Enter something to search" style="width:100%;">
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->
	        </div>
	    </div>
    </header>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="index.php">REZStore Indonesia</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="catalogue.php">Katalog Produk</a></li>
                    <li><a href="cart.php">Blog Artikel</a></li>
                    <li><a href="checkout.php">Promosi</a></li>
                    <li class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Pages <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="about.php">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="typography.php">Typography</a></li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="container main-container">
        <div class="row">

        	<!-- Slider -->
        	<div class="col-lg-9 col-md-12">
                <div class="slider">
                    <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 838px;"><ul class="bxslider" style="width: 515%; position: relative; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-878px, 0px, 0px);"><li style="float: left; list-style: none; position: relative; width: 838px;" class="bx-clone">
                            <a href="index.php">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/banner_slider-1.jpg" alt="">
                            </a>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 838px;">
                            <a href="index.php">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/banner_slider-3.jpg" alt="">
                            </a>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 838px;">
                            <a href="index.php">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/banner_slider-2.jpg" alt="">
                            </a>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 838px;">
                            <a href="index.php">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/banner_slider-1.jpg" alt="">
                            </a>
                        </li>
                    <li style="float: left; list-style: none; position: relative; width: 838px;" class="bx-clone">
                            <a href="index.php">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/banner_slider-3.jpg" alt="">
                            </a>
                        </li></ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
                </div>
            </div>
            <!-- End Slider -->

			<!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 hero-feature">
                        <div class="thumbnail">
                        	<a href="detail.php" class="link-p first-p" style="overflow: hidden; position: relative;">
		                    	<?php echo wp_get_attachment_image(5);?>
		                    </a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.php">Funkalicious Print T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 928.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div>
                    </div>
                </div>
            </div>

			<!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 hero-feature">
                        <div class="thumbnail">
                        	<a href="detail.php" class="link-p first-p" style="overflow: hidden; position: relative;">
		                    	<?php echo wp_get_attachment_image(5);?>
		                    </a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.php">Funkalicious Print T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 928.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div>
                    </div>
                </div>
            </div
            <!-- End Product Selection -->
        </div>

        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">





        		<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">KATEGORI</span>
	            	</div>
					<div class="list-group list-categ">
<?php 

$args = array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false 

); 
$categories = get_categories( $args );
$i=0;
foreach($categories as $catg){
	//print_r($cat);
	echo '<a href="'.get_category_link( $catg->term_id ).'" class="list-group-item">'.$catg->cat_name.'</a>';
}
?>
					</div>
				</div>
				<!-- End Categories -->

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-6">
					<div class="no-padding">
	            		<span class="title">PRODUK TERLARIS</span>
	            	</div>
					<div class="hero-feature">
		                <div class="thumbnail text-center">
		                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
		                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-8.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -13px; top: 0px;">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.php">Penn State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 528.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div>
		            </div>
		            <div class="hero-feature hidden-sm">
		                <div class="thumbnail text-center">
		                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
		                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-9.jpg" alt="" style="position: absolute; width: 280px; height: auto; max-width: none; max-height: none; left: -28px; top: 0px;">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.php">Ohio State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 924.25</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div>
		            </div>
			</div>
		<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Featured -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">SEMUA PRODUK</span>
            	</div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-2.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Age Of Wisdom Tan Graphic Tee</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="#" class="btn btn-default">$ 122.51</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-3.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Classic Laundry Green Graphic T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="#" class="btn btn-default">$ 628.96</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-4.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Disc Jockey Print T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="#" class="btn btn-default">$ 394.64</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-5.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Live Nation 3 Days of Peace and Music Carbon</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 428.96</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-6.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Live Nation ACDC Gray T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 428.96</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-7.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Live Nation Aerosmith Ivory T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 632.15</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
        	</div>
        	<!-- End Featured -->

        	<div class="clearfix visible-sm"></div>

			<!-- Adidas Category -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="col-lg-12 col-sm-12">
            		<span class="title">ADIDAS</span>
            	</div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-10.jpg" alt="" style="position: absolute; width: 242px; height: 258px; max-width: none; max-height: none; left: 0px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="#" class="btn btn-default">$ 22.22</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-11.jpg" alt="" style="position: absolute; width: 248px; height: auto; max-width: none; max-height: none; left: -3px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Adidas Men Flame Black T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 15.47</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-12.jpg" alt="" style="position: absolute; width: 251px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php">Adidas Men Red Printed T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 20.63</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
			</div>
			<!-- End Adidas Category -->

        </div>
	</div>

	<footer>
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Information</h4>
        			<ul>
        				<li><a href="about.php">About Us</a></li>
        				<li><a href="typography.php">Policy Privacy</a></li>
        				<li><a href="typography.php">Terms and Conditions</a></li>
        				<li><a href="typography.php">Shipping Methods</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Categories</h4>
        			<ul>
        				<li><a href="catalogue.php">Cras justo odio</a></li>
        				<li><a href="catalogue.php">Dapibus ac facilisis in</a></li>
        				<li><a href="catalogue.php">Morbi leo risus</a></li>
        				<li><a href="catalogue.php">Porta ac consectetur ac</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Customer Service</h4>
        			<ul>
        				<li><a href="contact.php">Contact Us</a></li>
        				<li><a href="#">YM: erwin_heldy</a></li>
        				<li><a href="#">Telp: 087825376xxx</a></li>
        				<li><a href="#">Email: erwin.heldy@gmail.com</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Follow Us</h4>
        			<ul class="social">
        				<li><a href="#">Google Plus</a></li>
        				<li><a href="#">Facebook</a></li>
        				<li><a href="#">Twitter</a></li>
        				<li><a href="#">RSS Feed</a></li>
        			</ul>
        		</div>
        	</div>
        </div>
        <div class="navbar-inverse text-center copyright">
        	Copyright © 2013 Mimity All right reserved
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$(&#39;body,html&#39;).animate({scrollTop:0},500); return false" style="display: inline;">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.blImageCenter.js"></script>
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/mimity.js"></script>

</body></html>
