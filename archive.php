<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="archive-item">
      <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
      <h3><?php echo get_the_date(); ?></h3>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>">Seguir Leyendo</a>
    </div>
  <?php endwhile; ?>
  <?php next_posts_link('Siguiente'); ?>
  <?php previous_posts_link('Anteriores'); ?>
  <?php else: ?>
    <p>Nada que mostrar</p>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
