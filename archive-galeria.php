<style>
    header > nav > ul > li:nth-child(7) > a {
        color: rgb(10,19,56);
    }
</style>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="archive-item">
      <?php the_content(); ?>
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
