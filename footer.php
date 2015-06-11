<footer>
<div class="main">
  <div id="logo-footer"></div>
  <div id="nav-footer">
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo get_post_type_archive_link('bio'); ?>">Bio</a></li>
        <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Escritos</a></li>
        <li><a href="<?php echo get_post_type_archive_link('standup'); ?>">Stand-Up</a></li>
        <li><a href="<?php echo get_post_type_archive_link('video'); ?>">Videos</a></li>
        <li><a href="<?php echo get_post_type_archive_link('audio'); ?>">Audios</a></li>
        <li><a href="<?php echo get_post_type_archive_link('galeria'); ?>">Galeria</a>
        <li><a href="<?php echo get_post_type_archive_link('cualquier-vaina'); ?>">Cualquier Vaina</a></li>
        <li><a href="<?php $page_contacto = get_page_by_title( 'Contacto' ); echo get_page_link($page_contacto->ID); ?>">Contacto</a></li>
      </ul>
    </nav>
  </div>
  <div id="redes-footer">
    <a href="https://www.instagram.com/rdelbufalo" target="_blank"><div class="redes i"></div></a>
    <a href="https://www.twitter.com/rdelbufalo" target="_blank"><div class="redes t"></div></a>
    <a href="https://www.youtube.com/rdelbufalo" target="_blank"><div class="redes y"></div></a>
  </div>
  <div id="copyr"><p>Todos los derechos reservados. Página web desarrollada y mantenida por <a href="http://www.movatic.com">Movatic</a></p></div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54925436-3', 'auto');
  ga('send', 'pageview');

</script>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
