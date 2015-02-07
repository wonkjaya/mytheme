<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            			<span class="title">KATEGORI</span>
	            		</div>
					<div class="list-group list-categ">
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
							echo '<a href="'.get_category_link( $catg->term_id ).'" class="list-group-item">'.ucfirst($catg->cat_name).'</a>';
						}
						?>
					</div>
				</div>
