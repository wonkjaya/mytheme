<?php $args = array(
	'posts_per_page'   => 5,
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
<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">
            		<?php
			if ($_GET['s']){
			 echo '<p>You searched for " '. esc_html( get_search_query( false ) ).' ". Here are the results:</p>';
			}else{
			 echo "ARTIKEL TERBARU";
			}

			?>
            		</span>
            	</div>
	<table class="table">
            	<?php
            	foreach($posts as $pst){
            	 $id=$pst->ID;
            	 $p_t=$pst->post_title;
            	 $p_c=$pst->post_content;
            	 $url=get_permalink($id).'&k='.str_replace(' ','-',$p_t);
            	?>
		 <tr>
		  <td>
		  	<a href="<?= $url ?>">
                  	  	<?php echo get_the_post_thumbnail( $id, array(30,30), array("style"=>"width: 150px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;") ); ?>
                	</a>
		  </td>
		  <td>
		  	<h1><a href="<?=$url?>"><?=ucfirst($p_t)?></a></h1>
		  	<p style="font-size:20px;text-align:justify;text-indent:1em;"><?php echo ucfirst(substr($p_c,0,300)); if(strlen($p_c) > 200 ) echo " ...";?></p>
		  	<span style="float:right;">
		  	 <a href="<?=$url?>" class="btn btn-primary">More >></a>
		  	</span>
		  </td>
		 </tr>
            	<?php
            	}
            	?>
	</table>
</div>

