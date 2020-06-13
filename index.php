<?php get_header(); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 ad_container">
                <span class="ad_header">PUBLICIDADE</span>
                <div class="ad_leaderboard">
                    <div class="ad_leaderboard_content ad_mobile_content"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section_title">Últimas Notícias</h2>
                    <?php 
                    if(have_posts()):the_post(); ?>
                        <div class="lastNews_card_01_container">
                            <h1 class="lastNews_card_01_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
                                <div class="lastNews_card_01_info">
                                    <div class="lastNews_card_01_excpt"><?php the_excerpt(); ?></div>
                                    <p class="postTime">
                                        <?php echo get_time_since_posted() ?>
                                    </p>
                                 </div>
                            <div class="lastNews_card_01_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                        </div>
                    <?php endif; ?>
                    <div class="lastNews_cardBox">
                            <?php
                                $loop = new WP_Query(array('offset' => 1));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_02_container">
                                    <div class="lastNews_card_sec_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                    <div class="lastNews_card_sec_infoBox">
                                        <h4 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                                        <div class="lastNews_card_sec_info">
                                            <div class="lastNews_card_sec_excpt"><?php the_excerpt(); ?></div>
                                            <p class="postTime">
                                                <?php echo get_time_since_posted() ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                                $loop = new WP_Query(array('offset' => 2));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_03_container">
                                    <div class="lastNews_card_sec_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                    <div class="lastNews_card_sec_infoBox">
                                        <h4 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                                        <div class="lastNews_card_sec_info">
                                            <div class="lastNews_card_sec_excpt"><?php the_excerpt(); ?></div>
                                            <p class="postTime">
                                                <?php echo get_time_since_posted() ?>
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                                $loop = new WP_Query(array('offset' => 3));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_04_container">
                                    <div class="lastNews_card_sec_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                    <div class="lastNews_card_sec_infoBox">
                                        <h4 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                                        <div class="lastNews_card_sec_info">
                                            <div class="lastNews_card_sec_excpt"><?php the_excerpt(); ?></div>
                                            <p class="postTime">
                                                <?php echo get_time_since_posted() ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <div class="lastNews_cardBox">
                            <?php
                                $loop = new WP_Query(array('offset' => 4));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_05_container">
                                    <h5 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
                                    <div class="lastNews_card_sec_info">
                                        <p class="postTime">
                                            <?php echo get_time_since_posted() ?>
                                        </p>
                                    </div>   
                                </div>
                            <?php endif; ?>
                            <?php
                                $loop = new WP_Query(array('offset' => 5));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_06_container">
                                    <h5 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
                                    <div class="lastNews_card_sec_info">
                                        <p class="postTime">
                                            <?php echo get_time_since_posted() ?>
                                        </p>
                                    </div>   
                                </div>
                            <?php endif; ?>
                        </div>
                    <div class="lastNews_cardBox">
                            <?php
                                $loop = new WP_Query(array('offset' => 6));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_07_container">
                                    <h5 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
                                    <div class="lastNews_card_sec_info">
                                        <p class="postTime">
                                            <?php echo get_time_since_posted() ?>
                                        </p>
                                    </div>    
                                </div>
                            <?php endif; ?>
                            <?php
                                $loop = new WP_Query(array('offset' => 7));
                                if( $loop->have_posts() ):$loop->the_post();
                            ?>
                                <div class="lastNews_card_08_container">
                                    <h5 class="lastNews_card_sec_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
                                    <div class="lastNews_card_sec_info">
                                        <p class="postTime">
                                            <?php echo get_time_since_posted() ?>
                                        </p>
                                    </div>    
                                </div>
                            <?php endif; ?>
                        </div>
                    <div class="ad_container">
                        <span class="ad_header">PUBLICIDADE</span>
                        <div class="ad_halfBanner">
                            <div class="ad_halfBanner_content ad_mobile02_content"></div>
                        </div>
                    </div>
                    <h2 class="section_title">Brasil</h2>
                    <div class="lastNews_cardBox">
                            <?php
                                $cat_id = get_cat_ID('brasil');
                                $args = array(
                                    'cat' => $cat_id, //ID da sua categoria
                                    'posts_per_page ' => 2, // Número de posts a exibir
                                );

                                $novo_loop = new WP_Query( $args );

                                if ( $novo_loop->have_posts() ) : while ( $novo_loop->have_posts() ) : $novo_loop->the_post();	
                            ?>
                                <div class="category_lastNews_container">
                                    <div class="category_lastNews_thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                    <div class="category_lastNews_infoBox">
                                        <h4 class="category_lastNews_header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="category_lastNews_info">
                                            <div class="category_lastNews_excpt"><?php the_excerpt(); ?></div>
                                            <p class="postTime">
                                                <?php echo get_time_since_posted() ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                endif;
                                // Reseta as queries
                                wp_reset_postdata();
                            ?>
                        </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar_container">
                    <h2 class="section_title">Destaques</h2>
                    <div class="stickyPosts_container">
                               <?php 
                                    $stickies = get_option( 'sticky_posts' );
                                    // Garante que existem posts destacados 
                                    if ( $stickies ) {
                                        $args = [
                                            'post_type'           => 'post',
                                            'post__in'            => $stickies,
                                            'posts_per_page'      => 5,
                                            'ignore_sticky_posts' => 1
                                            ];
                                    $the_query = new WP_Query($args);

                                    if ( $the_query->have_posts() ) { 
                                        while ( $the_query->have_posts() ) { 
                                        $the_query->the_post(); 
                                ?>

                                <div class="">
                                    <div class="stickyPosts_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                        <h5 class="stickyPosts_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
                                        <div class="stickyPosts_info">
                                            <p class="postTime">
                                                <?php echo get_time_since_posted() ?>
                                            </p>
                                        </div>
                                    
                                </div>
                                <?php
                                        }    
                                    wp_reset_postdata();    
                                    }
                                }
                                ?>
                        </div>
                    <?php dynamic_sidebar('primary-sidebar'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ad_container">
                <span class="ad_header">PUBLICIDADE</span>
                <div class="ad_billboard">
                    <div class="ad_billboard_content ad_largeMobile_content"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 readMore_box">
                <h2 class="section_title">Leia Mais</h2>
                <div class="readMore_row_01">
                        <?php
                            $loop = new WP_Query(array('offset' => 8));
                            if( $loop->have_posts() ):$loop->the_post();
                        ?>
                            <div class="readMore_card_01_container">
                                <div class="readMore_card_01_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                <div class="readMore_card_01_info">
                                    <h3 class="readMore_card_01_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                                    <div class="readMore_card_01_excpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <p class="readMore_card_01_postTime">
                                        <?php echo get_time_since_posted() ?>
                                    </p> 
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php
                            $loop = new WP_Query(array('offset' => 9));
                            if( $loop->have_posts() ):$loop->the_post();
                        ?>
                            <div class="readMore_card_02_container">
                                <div class="readMore_card_02_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                <div class="readMore_card_02_infoBox">
                                    <h4 class="readMore_card_02_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                                    <div class="readMore_card_02_info">    
                                        <div class="readMore_card_02_excpt">
                                            <?php the_excerpt(); ?>
                                        </div>   
                                        <p class="postTime">
                                            <?php echo get_time_since_posted() ?>
                                        </p>  
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>       
                    </div>
                <div class="readMore_row_02">
                        <?php
                            $args = array(
                                'posts_per_page' => 4, // Número de posts a exibir
                                'offset' => 10, //avança a exibição do post
                            );
                            $novo_loop = new WP_Query( $args );
                            if ( $novo_loop->have_posts() ) : while ( $novo_loop->have_posts() ) : $novo_loop->the_post();	
                        ?>    
                            <div class="readMore_card_container">
                                <div class="readMore_card_thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('thumb-post'); ?></a></div>
                                <div class="readMore_card_infoBox">
                                    <h4 class="readMore_card_header"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                                    <div class="readMore_card_info">
                                        <div class="readMore_card_excpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <p class="postTime">
                                            <?php echo get_time_since_posted() ?>
                                        </p>     
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            endif;
                            // Reseta as queries
                             wp_reset_postdata();
                        ?>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 column_cardBox">
                <h2 class="section_title">Colunas</h2>
                <div class="column_card_container">
                    <div class="column_card_thumb"><a href="<?php echo get_author_posts_url($author_id = 9 ); ?>"><?php echo get_avatar( $id_or_email = 9); ?></a></div>
                    <h3 class="column_card_header"><a href="<?php echo get_author_posts_url($author_id = 9 ); ?>"><?php the_author_meta( $field = 'display_name', $user_id = 9 ); ?></a></h3>
                    <div class="column_card_info">
                        <?php echo get_the_author_meta( $field = 'description', $user_id = 9); ?>
                    </div>
                </div>
                <div class="column_card_container">
                        <div class="column_card_thumb"><a href="<?php echo get_author_posts_url($author_id = 10 ); ?>"><?php echo get_avatar( $id_or_email = 10); ?></a></div>
                        <h3 class="column_card_header"><a href="<?php echo get_author_posts_url($author_id = 10 ); ?>"><?php the_author_meta( $field = 'display_name', $user_id = 10 ); ?></a></h3>
                        <div class="column_card_info">
                            <?php echo get_the_author_meta( $field = 'description', $user_id = 10); ?>
                        </div>
                    </div>
                <div class="column_card_container">
                        <div class="column_card_thumb"><a href="<?php echo get_author_posts_url($author_id = 11 ); ?>"><?php echo get_avatar( $id_or_email = 11); ?></a></div>
                        <h3 class="column_card_header"><a href="<?php echo get_author_posts_url($author_id = 11 ); ?>"><?php the_author_meta( $field = 'display_name', $user_id = 11 ); ?></a></h3>
                        <div class="column_card_info">
                            <?php echo get_the_author_meta( $field = 'description', $user_id = 11); ?>
                        </div>
                    </div>
                <div class="column_card_container">
                        <div class="column_card_thumb"><a href="<?php echo get_author_posts_url($author_id = 12 ); ?>"><?php echo get_avatar( $id_or_email = 12); ?></a></div>
                        <h3 class="column_card_header"><a href="<?php echo get_author_posts_url($author_id = 12 ); ?>"><?php the_author_meta( $field = 'display_name', $user_id = 12 ); ?></a></h3>
                        <div class="column_card_info">
                            <?php echo get_the_author_meta( $field = 'description', $user_id = 12); ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>