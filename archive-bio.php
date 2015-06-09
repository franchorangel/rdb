<style>
    header > nav > ul > li:nth-child(2) > a {
        color: rgb(10,19,56);
    }
</style>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido" class="bio">
    <h1>Ricardo Del Bufalo</h1>
    <h3><strong>[con d mayúscula y sin acento en la u]</strong></h3>
    <?php $args = array( 'post_type' => array( 'bio' ), 'order' => 'asc', 'posts_per_page' => -1 ); 
      $query_bio = new WP_Query( $args );
      if ( $query_bio->have_posts() ) : while ( $query_bio->have_posts() ) : $query_bio->the_post(); 
    ?>
        <div class="seccion-bio">
            <div class="bio-thumbnail">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <div class="bio-texto">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>
</div>
<?php get_footer(); ?>

