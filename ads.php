<?php 
//git
$args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '3', //3 untuk produk
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'ASC',
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
$ikln = array(
	'posts_per_page'   => 2,
	'offset'           => 0,
	'category'         => '6', //6 untuk iklan
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'ASC',
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
$ikln = get_posts( $ikln );  //array
?>
<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-6">
					<div class="no-padding">
				    		<span class="title">PRODUK TERLARIS</span>
				    	</div>
					<div class="hero-feature">
		                	<?php
					 foreach($posts as $p){
					  $bst_sel_id=$p->ID;
					  $bst_sel_title=$p->post_title;
					  $bst_sel_content=$p->post_content;
					  $bst_sel_url=$p->guid;
					?>
					    <div class="left_bar_content" style='text-align:left;'>
						    <div class="image">
							<?php echo get_the_post_thumbnail( $bst_sel_id, array(50,50), '' ); ?> 
						    </div>
						    <span><b><a href="<?=$bst_sel_url?>"><?= $bst_sel_title; ?></a></b><br />
						    <?php echo substr(str_replace(array('<','>','</'),'',$bst_sel_content),0,30).'...'; ?></span>
					    </div>
					 <?php
					  }
					 ?> 
					 <hr>  
		                </div>
		            </div>
		            <div class="hero-feature hidden-sm">
		                <div class="thumbnail text-center">
		                    	<?php 
		                    	foreach($ikln as $iklan){
		                    	?>
		                	<a href="<?=$iklan->post_content?>" class="link-p" style="overflow: hidden; position: relative;" target="_blank">
		                    	<?= get_the_post_thumbnail($iklan->ID); ?>
		                	</a>
		                	<?php } ?>
		                    <!--div class="caption prod-caption">
		                        <h4><a href="detail.php">Ohio State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 924.25</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div-->
		            </div>
			</div>
		<!-- End Best Seller -->
		
