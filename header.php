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
<div id="main">
<header>
	<div id="logo"></div>
	<nav>
		<ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php get_page_by_title('Bio'); ?>">BIO</a></li>
      <li><a href="<?php get_post_type_archive_link(''); ?>">ESCRITOS</a></li>
			<li><a href="">VIDEOS</a></li>
			<li><a href="">AUDIOS</a></li>
			<li><a href="">GALERIA</a></li>
			<li><a href="">CUALQUIER VAINA</a></li>
			<li><a>CONTACTO</a></li>
		</ul>
	</nav>
</header>
