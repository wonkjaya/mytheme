<?php $a=get_post($_GET['p']); 
$ID=$a->ID;
$post_title=$a->post_title;
$post_content=$a->post_content;
?>
		<div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="<?= get_permalink($ID) ?>" class="link-p" style="overflow: hidden; position: relative;">
	                    	<?php echo get_the_post_thumbnail( $ID, array(50,50), array("style"=>"position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;") ); ?>
	                	</a>
	                    <div class="caption prod-caption">
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="#" class="btn btn-default">Call Us</a>
		                        	<a href="http://demo.rezstore.com/index.php/<?=str_replace(array(' :: ',' '),'-',$post_title)?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> DEMO</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	        </div>

	        <div class='col-lg-5 col-sm-5 hero-feature text-center' style="text-align:left;">
			<table class='table' style="float:left;">
			 <tr>
			  <td>Kode</td>
			  <td>: <?=strtoupper(substr($post_title,0,strpos($post_title,'::')))?></td>
			 </tr>
			 <tr>
			  <td>Nama</td>
			  <td>: <?=ucwords(substr($post_title,strpos($post_title,'::') + 3))?></td>
			 </tr>
			 <tr>
			  <td>Diskripsi</td>
			  <td>: <?=$post_content?></td>
			 </tr>
			</table>
	        </div>

