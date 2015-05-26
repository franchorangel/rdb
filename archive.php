<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="archive-item">
      <h1><?php the_title(); ?></h1>
      <?php // get sneak peak ?>
    </div>
  <?php endwhile; else: ?>
    <p>Nada que mostrar</p>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
