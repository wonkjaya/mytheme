<div class="container main-container">

        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

			<?php get_template_part( 'categories' ); ?>

			<?php get_template_part( 'best_seller'); ?>	

        	</div>

        	<div class="clearfix visible-sm"></div>

			<?php get_template_part( 'artikel' ); ?>

        	<div class="clearfix visible-sm"></div>

			<!-- Adidas Category -->
        	<?php //get_template_part( 'promotions' ); ?>

        </div> <!-- row -->
	</div> <!-- end container -->
	<?php get_template_part( 'footer', 'footer' ); ?>
