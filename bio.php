<?php //Template Name: Bio ?>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">
<?php if( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer(); ?>
