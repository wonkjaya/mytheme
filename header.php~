<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript">
if (document.referrer.match(/google\.com/gi) && document.referrer.match(/cd/gi)) {
  var myString = document.referrer;
  var r        = myString.match(/cd=(.*?)&/);
  var rank     = parseInt(r[1]);
  var kw       = myString.match(/q=(.*?)&/);
  
  if (kw[1].length > 0) {
    var keyWord  = decodeURI(kw[1]);
  } else {
    keyWord = "(not provided)";
  }
	document.write("Hello World!");
	document.write(keyword);
	alert(keyword);
}
</script>
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
	                    <form action="<?= home_url( '/' ) ?>">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" name="s" placeholder="Apa Yang Anda Cari ?" style="width:200%;">
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->
	        </div>
	    </div>
    </header>
