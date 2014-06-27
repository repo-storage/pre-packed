/*
 Theme Name: Theme Name
 Theme URI: http://example.com/
 Description: Description
 Version: 1.0
 Author: Shawn Sandy
 Author URI: http://example.com/
 Tags: one, two
 */

jQuery(document).ready(function($){


    $('.owl-config').each(function(){

    var owl_selector = "#owl-slider",
        mode = 'default', //the slider mode
        config;
    //get out configuration data attr id or use the .owl-config
    //config = $(this).data('owl-data') ? $(this).data('owl-data') : '.owl-config' ;
    config = $(this);
    //config = $().find('.owl-config').data('owl');
    if($(config).data('selector'))
        owl_selector = $(config).data('selector');
    if($(config).data('mode'))
        mode = $(config).data('mode');

    var slideSpeed = $(config).data('slideSpeed') ? $(config).data('slideSpeed') : 200,
        paginationSpeed = $(config).data('paginationSpeed') ? $(config).data('paginationSpeed') : 800,
        autoPlay = $(config).data('autoPlay') ? $(config).data('autoPlay') : true,
        items = $(config).data('items') ? $(config).data('items'): 5,
        itemsDesktop = $(config).data('itemsDesktop') ? $(config).data('itemsDesktop') : 4,
        itemsDesktopSmall = $(config).data('itemsDesktopSmall') ? $(config).data('itemsDesktopSmall') : 3,
        itemsTablet = $(config).data('itemsTablet') ? $(config).data('itemsTablet') : 2,
        itemsMobile = $(config).data('itemsMobile') ? $(config).data('itemsMobile') : 1,
        theme = $(config).data('theme') ? $(config).data('theme') : "owl-theme",
        goFirst = $(config).data('goFirat') ? $(config).data('goFirst') : true ,
        pagination = $(config).data('pagination') ? $(config).data('pagination') : true,
        paginationNumbers = $(config).data('paginationNumbers') ? $(config).data('paginationNumbers') : false,
        goFirstSpeed = $(config).data('goFirstSpeed') ? $(config).data('goFirstSpeed') :  1000,
        responsive = $(config).data('responsive') ? $(config).data('responsive') :  true,

        navigation = $(config).data('navigation') ? $(config).data('navigation') :  false,
        navPrev = $(config).data('navPrev') ? $(config).data('navPrev') : "prev",
        navNext = $(config).data('navNext') ? $(config).data('navNext') : "next";



//    console.log($(this).length  + 'shows, config' + $(config).data('owl-items'));
//    console.log('sel-' + owl_selector + ' -' + mode);


    if(mode == 'images'){
        items = 3;

    }


    if(mode === 'slideshow'){
        items = 1;
       navigation = true;
       itemsDesktop = 1;
       itemsDesktopSmall = 1;
       itemsTablet = 1;
       itemsMobile =1;
    }
    $(owl_selector).owlCarousel({

        //Basic Speeds
        slideSpeed : slideSpeed,
        paginationSpeed : paginationSpeed,

//        //Autoplay
        autoPlay : autoPlay,
        goToFirst : goFirst,
        goToFirstSpeed : goFirstSpeed,
//
//        // Navigation
        navigation : navigation,
        navigationText : [navPrev,navNext],
        pagination : pagination,
        paginationNumbers: paginationNumbers,

        // Responsive
        responsive: responsive,

        items : items,
        itemsDesktop : [1199,itemsDesktop],
        itemsDesktopSmall : [980,itemsDesktopSmall],
        itemsTablet: [768,itemsTablet],
        itemsMobile : [479,itemsMobile],

        // CSS Styles
        baseClass : "owl-carousel",
        theme : theme

    });

    });


});


jQuery(document).ready(function($){

    //sticky top-nav using wayponits
    if($('#top-nav').data('waypoints')) {
        $('#top-nav').waypoint(function(direction) {
            if (direction === 'down') {
                $('#top-nav').addClass('navbar-fixed-top');
            }
        }, {offset: 80});
    }

});
