(function($){
    $(function(){

    // niceScroll
    $("html").niceScroll({
        cursorcolor:"#474747", cursorborder: false, cursorborderradius: false, cursorwidth: "10px", mousescrollstep:"60", zindex:"10000", cursoropacitymax:"0.5", scrollspeed:"30", hidecursordelay:"2000"
    });
    
    /* wow.js */
    new WOW().init();

    /* To Top */
    var offset = 1000;
    var duration = 1000;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.to-top').fadeIn(duration);
        } else {
            $('.to-top').fadeOut(duration);
        }
    });

    $('.to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration, 'easeInBack');
        return false;
    }); // End To top

    /* Sticky Menu */
    var navOffset, scrollPos = 0;
    function stickyUtility() {
        if (!$("#wrap").hasClass("is-sticky")) {
            navOffset = $("#wrap").offset().top+200;
        }
        $(".nav-holder").height($("#wrap").outerHeight());
    }
    stickyUtility();
    $(window).resize(function() {
        stickyUtility();
    });
    $(window).scroll(function() {
        scrollPos = $(window).scrollTop();
        if (scrollPos >= navOffset) {
            $("#wrap").addClass("is-sticky");
        } else {
            $("#wrap").removeClass("is-sticky");
        }
    }); // End Sticky Menu

    /* Bootstrap specific functions and styling */
    $('.comment-reply-link').addClass('btn btn-sm btn-default');
    $('#submit, button[type=submit], html input[type=button], input[type=reset], input[type=submit]').addClass('btn btn-default');
    $('.postform').addClass('form-control');
    $('table#wp-calendar').addClass('table table-striped');
    $('#submit, .tagcloud, button[type=submit], .widget_rss ul, .postform, table#wp-calendar').show("fast")

    // Bootstrap Menu Levels
    $('ul.dropdown-menu li.dropdown').hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
    $('a[data-toggle="tab"]:first').tab('show');

    /* search animation and focus */
    var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $('li.dropdown a').click(function() {
        $('#dropdown_animation').addClass('search_pop').one(animationend, function(){
            $(this).removeClass('search_pop');
            $('li.dropdown a').next().find(".s-pop").focus();

        });
    }); // End Bootstrap functions
    
    /* prettyPhoto */
    var items = $('div#content a').filter(function() {
        if ($(this).attr('href'))  
            return $(this).attr('href').match(/\.(jpg|png|gif|JPG|GIF|PNG|Jpg|Gif|Png|JPEG|Jpeg)/);
    });
    if (items.length > 1){
        var gallerySwitch="[customPP]";
    } else {
        var gallerySwitch="";
    }
    items.attr('data-rel','prettyPhoto'+gallerySwitch);
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
    }); // End prettyphoto

    /* Accordion */
    $('#panel-0')
    .on('show.bs.collapse', function(e) {
        $(e.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(e) {
        $(e.target).prev('.panel-heading').removeClass('active');
    }); // End Accordion
    /* Fit Vids */
   $("#content").fitVids();

    });
})(jQuery) // end document ready