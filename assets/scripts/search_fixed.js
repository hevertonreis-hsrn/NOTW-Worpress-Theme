jQuery(document).ready(function($){
    $(function(){   
        var searchBar = $('.searchContainer');   
        $(window).scroll(function () { 
            if ($(this).scrollTop() > 150) { 
                searchBar.addClass("search_fixed");
                $('body').css('padding-top', 70);
            } else { 
                searchBar.removeClass("search_fixed"); 
                $('body').css('padding-top', 0);
            } 
        });  
    });
});