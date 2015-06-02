<?php
  add_post_type_support( 'page', 'excerpt' );

  function rdb_presentaciones_post()
  {
    $labels = array(
      'name' => 'Presentaciones',
      'singular_name' => 'Presentación',
      'menu_name' => 'Presentaciones',
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'supports' => array( 'title' ),
      'has_archive' => true,
    );

    register_post_type( 'presentaciones', $args );
  }
  add_action( 'init', 'rdb_presentaciones_post' );

	function rdb_tweets_post()
	{
		$labels = array(
			'name' => 'Tweets',
			'singular_name' => 'Tweet',
			'menu_name' => 'Tweets',
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array( 'title' ),
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
		);
		
		register_post_type( 'tweets', $args );	
	}
	add_action( 'init', 'rdb_tweets_post' );
	
	function rdb_audios_post() 
	{
		$labels = array(
			'name' => 'Audios',
			'singular_name' => 'Audio',
			'menu_name' => 'Audios',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array( 'title', 'editor' ),
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
		);

		register_post_type( 'audio', $args );
	}
	add_action( 'init', 'rdb_audios_post' );

	function rdb_videos_post() 
	{
		$labels = array(
			'name' => 'Videos',
			'singular_name' => 'Video',
			'menu_name' => 'Videos',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array( 'title', 'editor' ),
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
		);

		register_post_type( 'video', $args );
	}
	add_action( 'init', 'rdb_videos_post' );
	
	function rdb_standup_post() 
	{
		$labels = array(
			'name' => 'Stand-Up',
			'singular_name' => 'Stand-Up',
			'menu_name' => 'Stand-Up',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array( 'title', 'editor' ),
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
		);

		register_post_type( 'standup', $args );
	}
	add_action( 'init', 'rdb_standup_post' );

	function rdb_galeria_post()
	{
		$labels = array(
			'name' => 'Fotos',
			'singular_name' => 'Foto',
			'menu_name' => 'Galería',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array( 'title', 'editor' ),
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
		);

		register_post_type( 'galeria', $args );
	}
	add_action( 'init', 'rdb_galeria_post' );

	function rdb_vaina_post()
	{
		$labels = array(
			'name' => 'Cualquier Vaina',
			'singular_name' => 'Cualquier Vaina',
			'menu_name' => 'Cualquier Vaina',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array( 'title', 'editor' ),
			'has_archive' => true,
			'taxonomies' => array( 'category' ),
		);
		
		register_post_type( 'cualquier-vaina', $args );
	}
	add_action( 'init', 'rdb_vaina_post' );

?>
