<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <h3><?php echo get_the_date(); ?> <span> - </span> <?php echo get_the_author(); ?></h3>
    <p><?php the_content(); ?></p>
  <?php endwhile; else: ?>
    <p>Nada que mostrar</p>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
