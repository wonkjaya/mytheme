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
        			<?php 

						$args = array(
							'type'                     => '',
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
							echo '<li><a href="'.get_category_link( $catg->term_id ).'">'.ucfirst($catg->cat_name).'</a></li>';
						}
						?>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Customer Service</h4>
        			<ul>
        				<li><a href="contact.php">Contact Us</a></li>
        				<li><a href="#">YM: rohman_ahmad</a></li>
        				<li><a href="#">Telp: 083-835-53449</a></li>
        				<li><a href="#">Email: cs@rezstore.com</a></li>
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
    </footer>

    <a href="#top" class="back-top text-center" onclick="$(&#39;body,html&#39;).animate({scrollTop:0},500); return false" style="display: inline;">
    	<i class="fa fa-angle-double-up"></i>
    </a>

	
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.blImageCenter.js"></script>
    <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/slider.js"></script>
    

</body></html>
