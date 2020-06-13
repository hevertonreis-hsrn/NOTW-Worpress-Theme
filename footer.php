<footer class="blog-footer">
    <div class="container-fluid">
        <div class="container">
            <div class="row site_links_container">
                <?php 
                    if(has_custom_logo()):
                        echo '<div class="footer_site_logo">';
                            the_custom_logo(); 
                        echo '</div>'; 
                    else: ?>
                        <h1 class="header-topbar-sitename"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
                <?php endif; ?>
                <div class="social_links_container">
                    <a class="facebook_link" href="#"></a>
                    <a class="instagram_link" href="#"></a>
                    <a class="youtube_link" href="#"></a>
                    <a class="twitter_link" href="#"></a>
                </div>
            </div>
            <div class="row footer_contentMap">
                <div class="footerMenu_01_box">
                    <h4>Institucional</h4>
                    <div class="footerMenu_01_container">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_01',
                                'menu_id' => 'menu-footer-01'
                            )); 
                        ?>
                    </div>
                </div>
                <div class="footerMenu_02_box">
                    <h4>Editoriais</h4>
                    <div class="footerMenu_02_container_01">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_02',
                                'menu_id' => 'menu-footer-02'
                            )); 
                        ?>
                    </div>
                    <div class="footerMenu_02_container_02">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_03',
                                'menu_id' => 'menu-footer-03'
                            )); 
                        ?>
                    </div>
                </div>
                <div class="footerMenu_03_box">
                    <h4>Conteúdos Especiais</h4>
                    <div class="footerMenu_03_container">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_04',
                                'menu_id' => 'menu-footer-04'
                            )); 
                        ?>
                    </div>
                </div>
            </div>
            <div class="row sign_container">
                <p class="copy_sign">&copy; <?php the_time( $format = 'Y' ) ?> NW Group -  A company of Queen Media Corp</p>
                <div class="developer_sign">
                    <a href="https://hevertonreis.wordpress.com/"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>