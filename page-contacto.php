<style>
    header > nav > ul > li:nth-child(9) > a {
        color: rgb(10,19,56);
    }
    #info-contacto{padding-top: 75px;}
    #contenido #info-contacto h3{
        margin:0;
        font-size: 1.8rem;
    }
    #contenido #info-contacto h2 {
        font-size: 2.4rem;
    }
    #contenido #info-contacto a {color: #333}
</style>
<?php get_header(); ?>
<div class="main">
<div id="fill"></div>
<div id="contenido" class="contacto">
    <h1>Contacto</h1>
    <div id="info-contacto">
        <?php if( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>
</div>
<?php get_footer(); ?>