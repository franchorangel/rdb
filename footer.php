<footer>
<div class="main">
  <div id="logo-footer"></div>
  <div id="nav-footer">
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php $page = get_page_by_title('Bio'); echo get_page_link( $page->ID ); ?>">Bio</a></li>
        <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Escritos</a></li>
        <li><a href="<?php echo get_post_type_archive_link('video'); ?>">Videos</a></li>
        <li><a href="<?php echo get_post_type_archive_link('audio'); ?>">Audios</a></li>
        <li><a href="<?php echo get_post_type_archive_link('galeria'); ?>">Galeria</a>
        <li><a href="#">Cualquier Vaina</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </div>
  <div id="redes-footer">
    <a href="https://www.instagram.com/rdelbufalo" target="_blank"><div class="redes i"></div></a>
    <a href="https://www.twitter.com/rdelbufalo" target="_blank"><div class="redes t"></div></a>
    <a href="#"><div class="redes f"></div></a>
    <a href="https://www.youtube.com/rdelbufalo" target="_blank"><div class="redes y"></div></a>
  </div>
  <div id="copyr"><p>Todos los derechos reservados</p></div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
