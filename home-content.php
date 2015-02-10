<div class="container main-container">
        <div class="row">

        	<?php get_template_part( 'slider' ); ?>
		<?php $args = array(
			'posts_per_page'   => 6,
			'offset'           => 0,
			'category'         => '1', //untuk artikel
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
			<!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                <?php
                 foreach($posts as $p){
		         $id=$p->ID;
		    	 $p_t=$p->post_title;
		    	 $p_c=$p->post_content;
		    	 $url=get_permalink($id).'&k='.str_replace(' ','-',$p_t);
                ?>
                
                    <div class="left_bar_content" style='text-align:left;'>
		         <a href="<?= $url ?>">   
		            <div class="image">
		                <?php echo get_the_post_thumbnail( $id, array(50,50), '' ); ?> 
		            </div>
		            <span><b><?= $p_t; ?></b><br />
		            <?php echo substr(str_replace(array('<','>','</'),'',$p_c),0,30).'...'; ?></span>
		         </a>
                    </div>
                 <?php
                  }
                 ?>   
                    
                </div>
                
            </div>
            <!-- End Product Selection -->
        </div>

        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

			<?php get_template_part( 'categories' ); ?>

			<?php get_template_part( 'ads'); ?>	

        	</div>

        	<div class="clearfix visible-sm"></div>

			<?php get_template_part( 'products' ); ?>

        	<div class="clearfix visible-sm"></div>

			<!-- Adidas Category -->
        	<?php //get_template_part( 'promotions' ); ?>

        </div> <!-- row -->
	</div> <!-- end container -->
	<?php get_template_part( 'footer', 'footer' ); ?>
