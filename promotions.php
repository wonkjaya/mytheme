<?php $args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'category'         => '3',
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
$posts = get_posts( $args );  //array
?>
<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="col-lg-12 col-sm-12">
            		<span class="title">PRODUK PROMOSI</span>
            	</div>
	            <?php
	             foreach($posts as $r){
	            ?>
	            
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/js/product-10.jpg" alt="" style="position: absolute; width: 242px; height: 258px; max-width: none; max-height: none; left: 0px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php"><?=$r->post_title?></a></h4>
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
	            <?php
	             }
	            ?>
	            
</div>
			<!-- End Adidas Category -->
