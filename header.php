<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<title>Ricardo Del Bufalo</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,600,700" rel="stylesheet" type="text/css">
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
            <li><a href="<?php echo get_post_type_archive_link('standup'); ?>">STAND-UP</a></li>
            <li><a href="<?php echo get_post_type_archive_link('video'); ?>">VIDEOS</a></li>
            <li><a href="<?php echo get_post_type_archive_link('audio'); ?>">AUDIOS</a></li>
            <li><a href="<?php echo get_post_type_archive_link('galeria'); ?>">GALERIA</a></li>
			<li><a href="<?php echo get_post_type_archive_link('cualquier-vaina'); ?>">CUALQUIER VAINA</a></li>
			<li><a href="<?php $page_contacto = get_page_by_title( 'Contacto' ); echo get_page_link($page_contacto->ID); ?>">CONTACTO</a></li>
		</ul>
	</nav>
  <div id="redes-header">
    <a href="https://www.instagram.com/rdelbufalo" target="_blank"><div class="redes ih"></div></a>
    <a href="https://www.twitter.com/rdelbufalo" target="_blank"><div class="redes th"></div></a>
    <a href="https://www.youtube.com/rdelbufalo" target="_blank"><div class="redes yh"></div></a>
  </div>
</header>
</div>
