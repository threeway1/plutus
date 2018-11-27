(function($){
    // mobile gnb event
    $(document).on('click', '.btn-nav', function(){
        $('body').addClass('opened');
    });
    $(document).on('click', '#gnb-nav .backdrop', function(){
        $('body').removeClass('opened');
    });
    $(document).on('click', '#gnb-nav .gnb-close', function(){
        $('body').removeClass('opened');
    });
    $(window).on('load resize', function() {
        var conWidth = $('body').width();
        /*console.log(conWidth);*/
        if (conWidth >= 1199) {
            $('body').removeClass("opened");
        }
    });
    $(document).on('click', '.gnb-body ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
    $(document).on('click', '.gnb-body ul > li > ul > li > a', function() {
        if ($(this).parent().hasClass('on')) {
            $(this).parent().removeClass('on');
        } else {
            $(this).parent().siblings('.on').removeClass('on');
            $(this).parent().addClass('on');
        }
    });

    // web gnb event
    $(document).on('mouseenter focus', '#gnb > ul > li', function() {
        $('#header').addClass('gnb-open');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave', '#gnb > ul > li', function() {
        $(this).removeClass('active');
    });
    $(document).on('mouseleave', '#header .container', function() {
        $('#header').removeClass('gnb-open');
    });
    
    // global-search
    $(document).on('click', '.global-search .search-open', function(){
        $(this).addClass('search-close');
        $('.global-search .form-group').addClass('d-block');
        $('.global-search .form-group').removeClass('d-none');
    });
    $(document).on('click', '.global-search .search-close', function(){
        $(this).removeClass('search-close');
        $('.global-search .form-group').addClass('d-none');
        $('.global-search .form-group').removeClass('d-block');
    });
    
    
    // header scroll
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    // quick-top
    $(document).on('click', '.quick-top .btn-top', function(e) {
        $('html, body').stop().animate({
            scrollTop: 0
        });
        e.preventDefault();
    });
})(jQuery);