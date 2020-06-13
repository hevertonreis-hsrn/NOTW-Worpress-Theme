<?php get_header('single'); ?>

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
            <div class="col-md-8">
                <div class="singlePage_container">
                    <?php 
                        $author_id=$post->post_author;
                        while(have_posts()): the_post(); ?>
                            <div class="singlePage_box">
                                <article class="postCard_container">
                                    <div class="postCard_header">
                                        <h1 class="postCard_postTitle"><?php the_title(); ?></h1>
                                        <div class="postCard_postInfo">
                                            <div class="postCard_authorName"><a href="<?php echo get_author_posts_url($author_id); ?>"><?php the_author(); ?></a></div>
                                            <p class="postTime">
                                                <?php echo get_time_since_posted() ?>
                                            </p>
                                        </div>
                                        <div class="single_share_tools">
                                            <a href="" id="facebook-share-bttn" rel="nofollow" target="_blank"></a>
                                            <a href="" id="whatsapp-share-bttn" rel="nofollow" target="_blank" ></a>
                                            <a href="" id="twitter-share-bttn" rel="nofollow" target="_blank" ></a>
                                            <a href="" id="telegram-share-bttn" rel="nofollow" target="_blank" ></a>
                                            <a href="" id="mail-share-bttn" rel="nofollow" target="_blank" ></a>
                                        </div>
                                    </div>
                                    <div class="postCard_postContent">
                                        <?php the_content(); ?>
                                    </div>
                                    <h4 class="section_title">Relacionados:</h4>
                                    <div class="postCard_postTags">
                                        <?php the_tags($before = '', $sep = ' ', $after = '' ); ?>
                                    </div>
                                </article>
                            </div>
                    <?php endwhile; ?>
                </div>
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
                    <?php dynamic_sidebar('single-sidebar'); ?>
                    <div class="ad_container">
                        <span class="ad_header">PUBLICIDADE</span>
                        <div class="ad_skyscraper">
                            <div class="ad_skyscraper_content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part('templates/share','script'); ?>
<?php get_footer(); ?>