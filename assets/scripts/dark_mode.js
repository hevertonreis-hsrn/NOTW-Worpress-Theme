jQuery(document).ready( function($){
    //Ativa o modo ao clique do switch
    $("#dark_mode").click(function() {
        
        $(".site_body").toggleClass("dark_mode");
        $(".searchForm_input").toggleClass("dark_mode");
        $(".searchForm").toggleClass("dark_mode");
        $(".searchForm_btn").toggleClass("dark_mode");
        $(".lastNews_card_01_header").toggleClass("dark_mode");
        $(".lastNews_card_01_excpt").toggleClass("dark_mode");
        $(".lastNews_card_sec_header").toggleClass("dark_mode");
        $(".lastNews_card_sec_excpt").toggleClass("dark_mode");
        $(".stickyPosts_header").toggleClass("dark_mode");
        $(".stickyPosts_excpt").toggleClass("dark_mode");
        $(".wtpsw-post-li").toggleClass("dark_mode");
        $(".wtpsw-post-title").toggleClass("dark_mode");
        $(".category_lastNews_header").toggleClass("dark_mode");
        $(".category_lastNews_excpt").toggleClass("dark_mode");
        $(".readMore_card_02_header").toggleClass("dark_mode");
        $(".readMore_card_02_excpt").toggleClass("dark_mode");
        $(".readMore_card_header").toggleClass("dark_mode");
        $(".readMore_card_excpt").toggleClass("dark_mode");
        $(".column_card_header").toggleClass("dark_mode");
        $(".column_card_info").toggleClass("dark_mode");
        $(".section_title").toggleClass("dark_mode");
        $(".widgettitle").toggleClass("dark_mode");
        $(".wtpsw-date-post").toggleClass("dark_mode");
        $(".column_card_thumb").toggleClass("dark_mode");
        $(".postTime").toggleClass("dark_mode");
        $(".ad_header").toggleClass("dark_mode");
        $(".ad_leaderboard").toggleClass("dark_mode");
        $(".ad_billboard").toggleClass("dark_mode");
        $(".ad_halfBanner").toggleClass("dark_mode");
        $(".readMore_card_01_info").toggleClass("dark_mode");
        $(".readMore_card_01_header").toggleClass("dark_mode");
        $(".readMore_card_01_postTime").toggleClass("dark_mode");
        $(".postCard_postTitle").toggleClass("dark_mode");
        $(".postCard_authorName").toggleClass("dark_mode");
        $(".postCard_postContent").toggleClass("dark_mode");
        $(".wp-block-image").toggleClass("dark_mode");
        $(".wp-block-embed").toggleClass("dark_mode");
        $(".postCard_postTags").toggleClass("dark_mode");
        $(".searchPageForm").toggleClass("dark_mode");
        $(".searchPageForm_input").toggleClass("dark_mode");
        $(".searchPageForm_btn").toggleClass("dark_mode");
        $(".searchResults").toggleClass("dark_mode");
        $(".search_postCard_title").toggleClass("dark_mode");
        $(".search_postCard_excpt").toggleClass("dark_mode");
        $(".page-numbers").toggleClass("dark_mode");
        $(".category_postCard_header").toggleClass("dark_mode");
        $(".category_postCard_excpt").toggleClass("dark_mode");
        $(".ad_skyscraper").toggleClass("dark_mode");
        $(".readMore_card_01_excpt").toggleClass("dark_mode");
        
        if ( $(".site_body").hasClass("dark_mode") ) {
            
            localStorage.setItem("darkmode", "true");
            
            $("#dark_mode").prop( "checked", true );
            $("meta[name='theme-color']").attr('content', '#414141');
            
        } else {
            
            localStorage.setItem("darkmode", "false");
            
            $("#dark_mode").prop( "checked", false);
        }
    });
    
    //Verifica se o Modo Escuro já foi configurado
    var isDark = localStorage.getItem("darkmode");
    
    if ( isDark == "true" ) {
        
        $(".site_body").addClass("dark_mode");
        $(".searchForm_input").addClass("dark_mode");
        $(".searchForm").addClass("dark_mode");
        $(".searchForm_btn").addClass("dark_mode");
        $(".lastNews_card_01_header").addClass("dark_mode");
        $(".lastNews_card_01_excpt").addClass("dark_mode");
        $(".lastNews_card_sec_header").addClass("dark_mode");
        $(".lastNews_card_sec_excpt").addClass("dark_mode");
        $(".stickyPosts_header").addClass("dark_mode");
        $(".stickyPosts_excpt").addClass("dark_mode");
        $(".wtpsw-post-li").addClass("dark_mode");
        $(".wtpsw-post-title").addClass("dark_mode");
        $(".category_lastNews_header").addClass("dark_mode");
        $(".category_lastNews_excpt").addClass("dark_mode");
        $(".readMore_card_02_header").addClass("dark_mode");
        $(".readMore_card_02_excpt").addClass("dark_mode");
        $(".readMore_card_header").addClass("dark_mode");
        $(".readMore_card_excpt").addClass("dark_mode");
        $(".column_card_header").addClass("dark_mode");
        $(".column_card_info").addClass("dark_mode");
        $(".section_title").addClass("dark_mode");
        $(".widgettitle").addClass("dark_mode");
        $(".wtpsw-date-post").addClass("dark_mode");
        $(".column_card_thumb").addClass("dark_mode");
        $(".postTime").addClass("dark_mode");
        $(".ad_header").addClass("dark_mode");
        $(".ad_leaderboard").addClass("dark_mode");
        $(".ad_billboard").addClass("dark_mode");
        $(".ad_halfBanner").addClass("dark_mode");
        $(".readMore_card_01_info").addClass("dark_mode");
        $(".readMore_card_01_header").addClass("dark_mode");
        $(".readMore_card_01_postTime").addClass("dark_mode");
        $(".postCard_postTitle").addClass("dark_mode");
        $(".postCard_authorName").addClass("dark_mode");
        $(".postCard_postContent").addClass("dark_mode");
        $(".wp-block-image").addClass("dark_mode");
        $(".wp-block-embed").addClass("dark_mode");
        $(".postCard_postTags").addClass("dark_mode");
        $(".searchPageForm").addClass("dark_mode");
        $(".searchPageForm_input").addClass("dark_mode");
        $(".searchPageForm_btn").addClass("dark_mode");
        $(".searchResults").addClass("dark_mode");
        $(".search_postCard_title").addClass("dark_mode");
        $(".search_postCard_excpt").addClass("dark_mode");
        $(".page-numbers").addClass("dark_mode");
        $(".category_postCard_header").addClass("dark_mode");
        $(".category_postCard_excpt").addClass("dark_mode");
        $(".ad_skyscraper").addClass("dark_mode");
        $(".readMore_card_01_excpt").addClass("dark_mode");
        
        $("#dark_mode").prop( "checked", true );
        
    } else {
        
        $(".site_body").removeClass("dark_mode");
        $(".searchForm_input").removeClass("dark_mode");
        $(".searchForm").removeClass("dark_mode");
        $(".searchForm_btn").removeClass("dark_mode");
        $(".lastNews_card_01_header").removeClass("dark_mode");
        $(".lastNews_card_01_excpt").removeClass("dark_mode");
        $(".lastNews_card_sec_header").removeClass("dark_mode");
        $(".lastNews_card_sec_excpt").removeClass("dark_mode");
        $(".stickyPosts_header").removeClass("dark_mode");
        $(".stickyPosts_excpt").removeClass("dark_mode");
        $(".wtpsw-post-li").removeClass("dark_mode");
        $(".wtpsw-post-title").removeClass("dark_mode");
        $(".category_lastNews_header").removeClass("dark_mode");
        $(".category_lastNews_excpt").removeClass("dark_mode");
        $(".readMore_card_02_header").removeClass("dark_mode");
        $(".readMore_card_02_excpt").removeClass("dark_mode");
        $(".readMore_card_header").removeClass("dark_mode");
        $(".readMore_card_excpt").removeClass("dark_mode");
        $(".column_card_header").removeClass("dark_mode");
        $(".column_card_info").removeClass("dark_mode");
        $(".section_title").removeClass("dark_mode");
        $(".widgettitle").removeClass("dark_mode");
        $(".wtpsw-date-post").removeClass("dark_mode");
        $(".column_card_thumb").removeClass("dark_mode");
        $(".postTime").removeClass("dark_mode");
        $(".ad_header").removeClass("dark_mode");
        $(".ad_leaderboard").removeClass("dark_mode");
        $(".ad_billboard").removeClass("dark_mode");
        $(".ad_halfBanner").removeClass("dark_mode");
        $(".readMore_card_01_info").removeClass("dark_mode");
        $(".readMore_card_01_header").removeClass("dark_mode");
        $(".readMore_card_01_postTime").removeClass("dark_mode");
        $(".postCard_postTitle").removeClass("dark_mode");
        $(".postCard_authorName").removeClass("dark_mode");
        $(".postCard_postContent").removeClass("dark_mode");
        $(".wp-block-image").removeClass("dark_mode");
        $(".wp-block-embed").removeClass("dark_mode");
        $(".postCard_postTags").removeClass("dark_mode");
        $(".searchPageForm").removeClass("dark_mode");
        $(".searchPageForm_input").removeClass("dark_mode");
        $(".searchPageForm_btn").removeClass("dark_mode");
        $(".searchResults").removeClass("dark_mode");
        $(".search_postCard_title").removeClass("dark_mode");
        $(".search_postCard_excpt").removeClass("dark_mode");
        $(".page-numbers").removeClass("dark_mode");
        $(".category_postCard_header").removeClass("dark_mode");
        $(".category_postCard_excpt").removeClass("dark_mode");
        $(".ad_skyscraper").removeClass("dark_mode");
        $(".readMore_card_01_excpt").removeClass("dark_mode");
        
        $("#dark_mode").prop( "checked", false );   
    } 
    
});