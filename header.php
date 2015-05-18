<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<title>Ricardo Del Bufalo</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
<div class="main">
<header>
	<div id="logo"></div>
	<nav>
		<ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php $page = get_page_by_title('Bio'); echo get_page_link( $page->ID ); ?>">BIO</a></li>
      <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">ESCRITOS</a></li>
      <li><a href="<?php echo get_post_type_archive_link('video'); ?>">VIDEOS</a></li>
      <li><a href="<?php echo get_post_type_archive_link('audio'); ?>">AUDIOS</a></li>
      <li><a href="<?php echo get_post_type_archive_link('galeria'); ?>">GALERIA</a></li>
			<li><a href="">CUALQUIER VAINA</a></li>
			<li><a>CONTACTO</a></li>
		</ul>
	</nav>
</header>
</div>
