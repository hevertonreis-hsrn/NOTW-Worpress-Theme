<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class=" col-md-12 ad_container">
                <span class="ad_header">PUBLICIDADE</span>
                <div class="ad_leaderboard">
                    <div class="ad_leaderboard_content ad_mobile_content"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 category_postBox">
                <h2 class="section_title"><?php single_tag_title(); ?></h2>
                    <?php 
                        while(have_posts()):the_post(); 
                    ?>
                    <article class="category_postCard_container">
                        <h3 class="category_postCard_header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="category_postCard_thumb"><?php the_post_thumbnail('thumb-post'); ?></div>
                        <div class="category_postCard_info">
                            <div class="category_postCard_excpt"><?php the_excerpt(); ?></div>
                            <p class="postTime">
                                <?php echo get_time_since_posted() ?>
                            </p>
                        </div>
                    </article>
                    <?php endwhile; ?>
                <div class="pagination_box"><?php the_pagination(); ?></div>
                <div class="ad_container">
                    <span class="ad_header">PUBLICIDADE</span>
                    <div class="ad_halfBanner">
                        <div class="ad_halfBanner_content ad_mobile02_content"></div>
                    </div>
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
    </div>
<?php get_footer() ?>