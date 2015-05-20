<?php get_header(); ?>
<div class="main">
  <div id="home-banner"></div>
  <div id="presentaciones">
    <?php 
      $args = array( 'post_type' => 'presentaciones' );
      $query_presentaciones = new WP_Query( $args );
      while( $query_presentaciones->have_posts() ) : $query_presentaciones->the_post();
    ?>
    
    <div class="presentacion">

    </div>
  
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
<div class="wrapper-contenido-aleatorio">
  <div id="contenido-aleatorio">
    <?php
      $args = array( 'post_type' => array( 'tweets', 'audio', 'video', 'galeria', 'post' ), 'category_name' => 'principal', 'orderby' => 'rand' );
      $query_ppal = new WP_Query( $args );
      while ( $query_ppal->have_posts() ) : $query_ppal->the_post(); 
    ?>
    <?php $tipo = get_post_type(); ?>
    <?php if ( $tipo == 'tweets' ) : ?>
      <div class="ppal tweet">
        <div class="t-logo"></div>
        <h2><a href="https://www.twitter.com/rdelbufalo">@RDelBufalo</a></h2>
        <div class="t-contenido"><?php the_title(); ?></div>
      </div>
    <?php elseif ( $tipo == 'audio' ) : ?> 
      <div class="ppal audio">
      
      </div>
    <?php elseif ( $tipo == 'video' ) : ?>
      <div class="ppal video">

      </div>
    <?php elseif ( $tipo == 'galeria' ) : ?>
      <div class="ppal galeria">

      </div>
    <?php elseif ( $tipo == 'post' ) : ?>
      <div class="ppal post">
        <div class="post-wrap">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
<?php get_footer(); ?>
