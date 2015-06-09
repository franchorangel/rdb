<style>
    header > nav > ul > li:nth-child(5) > a {
        color: rgb(10,19,56);
    }
</style>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="archive-item">
      <h1><?php the_title(); ?></h1>
      <h3><?php echo get_the_date(); ?></h3>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>">Ir al video</a>
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
