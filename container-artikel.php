<?php
$post = get_post($_GET['p']);  //array
//print_r($post);
	$id=$post->ID;
	$title=$post->post_title;
	$date=$post->post_date;
	$author=$post->post_author;
	$content=$post->post_content;
?>
<h1><?=$title?></h1>
Diposting Pada <span><?=$date?></span> Oleh <?=get_author_name($author)?>
<hr>
<div style='padding:6px;'><?=$content?></div>
