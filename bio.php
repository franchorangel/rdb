<?php //Template Name: Bio ?>
<style>
    header > nav > ul > li:nth-child(2) > a {
        color: rgb(10,19,56);
    }
</style>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido" class="bio">
<?php if( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer(); ?>
