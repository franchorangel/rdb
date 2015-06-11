<style>
    header > nav > ul > li:nth-child(3) > a {
        color: rgb(10,19,56);
    }
</style>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="archive-item">
      <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
      <h3><?php echo get_the_date(); ?></h3>
      <?php if ( has_post_thumbnail() ) : ?>
          <style>
              img {
                  float: left;
                  margin: 16px 0;
                  margin-right: 20px;
              }
          </style>
          <?php the_post_thumbnail('thumbnail'); ?>
      <?php endif; ?>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>">Seguir Leyendo</a>
    </div>
  <?php endwhile; ?>
  <?php next_posts_link('Anteriores'); ?>
  <?php previous_posts_link('Siguientes'); ?>
  <?php else: ?>
    <p>Nada que mostrar</p>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
