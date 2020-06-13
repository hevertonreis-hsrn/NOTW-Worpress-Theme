<?php

    //Habilitar inserção de logo dinâmica
    add_theme_support('custom-logo');

    //Habilitar inserção de menu dinâmico
    register_nav_menu('main', 'Menu Principal');
    register_nav_menu('footer_01', 'Menu Footer 01');
    register_nav_menu('footer_02', 'Menu Footer 02');
    register_nav_menu('footer_03', 'Menu Footer 03');
    register_nav_menu('footer_04', 'Menu Footer 04');

    //Habilitar Imagem destacada
    add_theme_support('post-thumbnails');

    // Registrar Custom Navigation Walker 
    require_once get_template_directory() . '/assets/bootstrap/class-wp-bootstrap-navwalker.php';

    //Inserir dependência Bootstrap
    function wp_responsive_scripts(){
        //Carregando CSS
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style( 'style', get_stylesheet_uri());

        //Carregando Scripts
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', 
      array( 'jquery' ) );

    }

    add_action( 'wp_enqueue_scripts', 'wp_responsive_scripts');

    //Inserir script Modo Escuro
    function night_mode_script() {
        wp_enqueue_script( 'night_mode', get_template_directory_uri() . '/assets/scripts/dark_mode.js');
    }
    add_action('wp_enqueue_scripts','night_mode_script');

    //Inserir script Esconder/Revelar Barra de Pesquisa
    function search_hide_script() {
        wp_enqueue_script( 'search_hide', get_template_directory_uri() . '/assets/scripts/search_hide.js');
    }
    add_action('wp_enqueue_scripts','search_hide_script');

    //Inserir script Fixar Barra de Pesquisa
    function search_fixed_script() {
        wp_enqueue_script( 'search_fixed', get_template_directory_uri() . '/assets/scripts/search_fixed.js');
    }
    add_action('wp_enqueue_scripts','search_fixed_script');

    //Inserir script Fixar Barra de Cor
    function colorBar_fixed_script() {
        wp_enqueue_script( 'colorBar_fixed', get_template_directory_uri() . '/assets/scripts/colorBar_fixed.js');
    }
    add_action('wp_enqueue_scripts','colorBar_fixed_script');

    //Habilitar Sidebar
    register_sidebar( 
      array(
        'name' => 'Sidebar Primária', 
        'id' => 'primary-sidebar')
    );

    register_sidebar( 
      array(
        'name' => 'Sidebar Single', 
        'id' => 'single-sidebar')
    );


    //Exibe a data do post de maneira amigável
    function get_time_since_posted() {
        
        $human_time = human_time_diff(get_post_time('U', true));
        $regular_time = get_the_time(get_option('date_format'));
        $output_time = sprintf('Há %s', $human_time);
 
        if (time()> get_post_time('U', true) + 1 * DAY_IN_SECONDS) {
            $output_time = $regular_time;
        }
        
        printf ($output_time);
    }

    /*
    * Remove posts fixos da consulta principal apenas na front-page e na home
    */
    function remove_sticky( $query = false ) {

	// Verifica se a consulta está sendo realizada na front-page ou na home
	if ( @is_front_page() || @is_home() ) { 
		// Remove os sticky posts da consulta (posts fixos)
		$query->set(
			'post__not_in',
			get_option( 'sticky_posts' )
		);
	}

    }

    // Adiciona a ação
    add_action('pre_get_posts','remove_sticky');

    //Adiciona paginação
    function the_pagination() {
        global $wp_query;

        echo paginate_links( array(
            'base' => str_replace( 9999999999999, '%#%', esc_url( get_pagenum_link( 9999999999999 ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var( 'paged' ) ),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'prev_next' => true,
            'prev_text' => '<',
            'next_text' => '>',
            'before_page_number' => '',
            'after_page_number' => '',
            'show_all' => false,
            'mid_size' => 1,
            'end_size' => 1,
        ) );
    }

?>