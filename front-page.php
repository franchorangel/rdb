<?php get_header(); ?>
<div class="main">
  <div id="home-banner">
    <img src="<?php echo the_field('fondo-home'); ?>" alt="Ricardo Del Bufalo" />
  </div>
  <div id="presentaciones">
    <?php 
      $args = array( 'post_type' => 'presentaciones' );
      $query_presentaciones = new WP_Query( $args );
      while( $query_presentaciones->have_posts() ) : $query_presentaciones->the_post();
    ?>
    
    <div class="presentacion">
      <h1><?php the_title(); ?></h1>
      <h3>
        <?php
          $fecha = get_field('fecha');
          if( $fecha ){
            $date = DateTime::createFromFormat('Ymd', $fecha ); 
            echo $date->format('d-m-Y');
          } else {
            echo 'No hay una fecha fijada';
          }
        ?>
        <span> _ </span>
        <?php  
          the_field('hora'); 
        ?>
      </h3>
      <h2><?php the_field('lugar'); ?></h2>
      <a href="<?php the_field('link_de_compra'); ?>">Comprar</a>
    </div>
  
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
<div class="wrapper-contenido-aleatorio">
  <div id="contenido-aleatorio">
    <?php
      $counter = 1;
      $args = array( 'post_type' => array( 'tweets', 'audio', 'video', 'galeria', 'post' ), 'category_name' => 'home', 'orderby' => 'rand', 'posts_per_page' => 13 );
      $query_ppal = new WP_Query( $args );
      while ( $query_ppal->have_posts() ) : $query_ppal->the_post(); 
      
      $tipo = get_post_type(); ?>
    <?php if ( $tipo == 'tweets' ) : ?>
      <div class="ppal tweet">
        <div class="t-logo"></div>
        <h2><a href="https://www.twitter.com/rdelbufalo">@RDelBufalo</a></h2>
        <div class="t-contenido"><span>"</span><?php the_title(); ?><span>"<span></div>
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
          <div class="icono-escrito"></div>
          <div class="table-escrito">
            <div class="cell-escrito">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
          <div class="link-escrito">
            <a href="<?php echo get_permalink(); ?>">Leer Más</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ( $counter == 4 ) : ?>
      <div id="bio-home" class="ppal">
        <div id="bio-texto-home">
        <?php 
            $page = get_page_by_title( 'Bio' );
            echo $page->post_excerpt; 
        ?>
        <a href="<?php echo get_page_link($page->ID); ?>">Leer Más</a> 
        </div>
        <img src="<?php echo get_field( 'imagen', $page->ID ) ?>" />
      </div>
    <?php endif; ?>  
    <?php $counter = $counter + 1; ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <div id="contrataciones-home" class="ppal">
      <h2>Contrataciones</h2>
      <a href="mailto:decomediaproducciones@gmail.com">decomediaproducciones@gmail.com</a>
      <hr />
      <h2>Teléfono</h2>
      <p>Mariana Egloff<br /> +58 424 240 9076</p> 
    </div>
  </div>
</div>
<?php get_footer(); ?>
