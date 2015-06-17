<?php get_header(); ?>
<div class="main">
  <div id="home-banner">
    <?php if ( get_field('fondo_home') ) : ?>
      <img src="<?php the_field('fondo_home'); ?>" alt="Ricardo Del Bufalo" />
    <?php endif; ?>
    <div id="home-video-fill">
    </div>
    <div id="home-video-wrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OAZNJWdis8E??iv_load_policy=3;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <div id="presentaciones">
    <?php 
      $args = array( 'post_type' => 'presentaciones' );
      $query_presentaciones = new WP_Query( $args );
      if ( $query_presentaciones->have_posts() ) : while( $query_presentaciones->have_posts() ) : $query_presentaciones->the_post();
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
          if( get_field('hora') ) { the_field('hora'); }
        ?>
      </h3>
      <h2><?php if ( get_field('lugar') ) { the_field('lugar'); } ?></h2>
      <a href="<?php if ( get_field('link_de_compra') ) { the_field('link_de_compra'); } ?>" target="_blank">Comprar</a>
    </div>
  
    <?php endwhile; wp_reset_postdata(); endif;?>
  </div>
</div>
<div class="wrapper-contenido-aleatorio">
  <div id="contenido-aleatorio">
    <?php
      $counter = 1;
      $args = array( 'post_type' => array( 'tweets', 'audio', 'video', 'galeria', 'post', 'standup' ), 'category_name' => 'home', 'orderby' => 'rand', 'posts_per_page' => 13 );
      $query_ppal = new WP_Query( $args );
      if ( $query_ppal->have_posts() ) : while ( $query_ppal->have_posts() ) : $query_ppal->the_post(); 
      
      $tipo = get_post_type(); ?>
    <?php if ( $tipo == 'tweets' ) : ?>
      <div class="ppal tweet">
        <div class="t-logo"></div>
        <h2><a href="https://www.twitter.com/rdelbufalo" target="_blank">@RDelBufalo</a></h2>
        <div class="t-contenido"><span>"</span><?php the_title(); ?><span>"</span></div>
      </div>
    <?php elseif ( $tipo == 'audio' ) : ?> 
      <div class="ppal audio">
        <h2><?php if ( get_field( 'programa' ) ) { the_field( 'programa' ); }?></h2>
        <div class="table-audio">
          <div class="cell-audio">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="link-audio">
          <a href="<?php the_permalink(); ?>">Ir al audio</a>
        </div>
      </div>
    <?php elseif ( $tipo == 'standup' ) : ?>
      <?php if ( has_post_thumbnail() ) : ?>
        <?php $thumbnail_id = get_post_thumbnail_id(); ?>
        <div class="ppal ppal-video">  
          <div class="inner-video video" style="background-image:url(<?php echo wp_get_attachment_url($thumbnail_id) ?>); background-size:cover; background-position:center;">
            </div>
            <div class="inner-video contenido-video">
                <div class="wrapper">
                    <div class="titulo">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="link">
                    <a href="<?php the_permalink(); ?>">Ver video</a>
                </div>
            </div>
          </div>
      <?php endif; ?>
    <?php elseif ( $tipo == 'video' ) : ?>
        <?php if ( has_post_thumbnail() ) :?>
          <?php $thumbnail_id = get_post_thumbnail_id(); ?>
          <div class="ppal ppal-video">  
            <div class="inner-video video" style="background-image:url(<?php echo wp_get_attachment_url($thumbnail_id) ?>); background-size:cover; background-position:center;">
            </div>
            <div class="inner-video contenido-video">
                <div class="wrapper">
                    <div class="titulo">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="link">
                    <a href="<?php the_permalink(); ?>">Ver video</a>
                </div>
            </div>
          </div>
        <?php endif; ?>
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
        <a href="<?php echo get_post_type_archive_link('bio'); ?>">Leer Más</a> 
        </div>
        <img src="<?php echo get_field( 'imagen', $page->ID ) ?>" alt="Biografía" />
      </div>
    <?php endif; ?>  
    <?php $counter = $counter + 1; ?>
    <?php endwhile; wp_reset_postdata(); endif;?>
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
