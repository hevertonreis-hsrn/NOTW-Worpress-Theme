jQuery(document).ready(function($){
    $(function(){   
        var searchBar = $('.colorBar');   
        $(window).scroll(function () { 
            if ($(this).scrollTop() > 150) { 
                searchBar.addClass("colorBar_fixed");
                $('body').css('padding-top', 70);
            } else { 
                searchBar.removeClass("colorBar_fixed"); 
                $('body').css('padding-top', 0);
            } 
        });  
    });
});