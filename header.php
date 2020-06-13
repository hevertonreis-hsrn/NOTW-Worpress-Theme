<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

        <!-- Custom CSS -->
        <link type="text/css" href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        
        <?php wp_head(); ?>
    </head>
    <body class="site_body">  
        <header class="blog-header container-fluid">
            <div class="">
                    <div class="site_logo_container">
                        <?php 
                            if(has_custom_logo()):
                                echo '<div class="site_logo ">';
                                    the_custom_logo(); 
                                echo '</div>'; 
                            else: ?>
                                <h1 class="header-topbar-sitename"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
                        <?php endif; ?>
                    </div>
                    <div class="functions_container">
                        <div class="switch_container">
                                <label class="switch">
                                    <input id="dark_mode" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span class="switch_label">Modo Escuro</span>
                        </div>
                    </div>
            </div>
        </header>
        <div class="container-fluid navContainer sticky-top">
            <a class="navbar-brand" href="<?php bloginfo('url') ?>"></a>
            
            <nav class="navbar navbar-expand-lg navbar-dark" >
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main',
                        'menu_id' => 'menu-header',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarCollapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                    ));

                ?>
            
            </nav>
            <button class="search_btn"></button>
        </div>
        <?php
            $categories = get_the_category();
 
            $category = esc_html( $categories[0]->slug );   
            
            if( $category == 'brasil' || $category == 'internacional' || $category == 'economia') {
                echo '<div class="colorBar news_color"></div>';    
            } else if( $category == 'esportes' ) {
                echo '<div class="colorBar sports_color"></div>';    
            } else if( $category == 'saude' || $category == 'ciencia' || $category == 'tecnologia') {
                echo '<div class="colorBar tech_color"></div>';    
            } else if( $category == 'cotidiano') {
                echo '<div class="colorBar enttmt_color"></div>';    
            } else {
                echo '<div class="colorBar standard_color"></div>';
            }
        ?>
        
        
        <div class="container-fluid searchContainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="<?php bloginfo('url') ?>" method="get" class="searchForm">
                        <input type="text" name="s" placeholder="Buscar no Notícias do Mundo" class="searchForm_input">
                        <input type="submit" value="Buscar" id="btnSearch" class="searchForm_btn">
                    </form>
                </div>
            </div>
        </div>