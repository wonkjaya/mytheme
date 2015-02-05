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
$posts = get_posts( $args );  //array
?>
<!-- Featured -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">SEMUA PRODUK</span>
            	</div>
            	<?php
            	//print_r($posts);
            	foreach($posts as $pst){
            	?>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.php" class="link-p" style="overflow: hidden; position: relative;">
	                    	<?php echo get_the_post_thumbnail( $pst->ID, array(50,50), array("style"=>"position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;") ); ?>
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.php"><?= ucwords($pst->post_title)?></a></h4>
	                        <p><?= substr($pst->post_content,0,80) ?> ...</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="#" class="btn btn-default">Call Us</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Lihat Detail</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
            	<?php
            	}
            	?>
        	</div>
        	<!-- End Featured -->
