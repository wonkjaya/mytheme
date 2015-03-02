<?php
 $home='';
 $produk='';
 $blog='';
 $promo='';
 $g=$_GET['p'];
 if(is_numeric($g)){
  $produk='active';
 }elseif($g=='artikel'){
  $blog='active';
 }else{
  $home='active';
 }
?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="index.php">REZStore Indonesia</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" class="<?=$home?>">Home</a></li>
                    <li><a href="catalogue.php" class="<?=$produk?>">Katalog Produk</a></li>
                    <li><a href="?p=artikel" class="<?=$blog?>">Blog Artikel</a></li>
                    <li><a href="checkout.php" class="<?=$promo?>">Promosi</a></li>
                    <li class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pages <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
