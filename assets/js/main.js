(function($){
    $(document).ready(function(){
        // visual-slide
        $('.jumbotron > ul').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false
        });

        // product-slide
        $('.product-slide').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="btn-slick btn-prev"><button type="button" class="btn-controls slick-prev" aria-label="Previous"><i class="icon-left-open"></i></button></div>',
            nextArrow: '<div class="btn-slick btn-next"><button type="button" class="btn-controls slick-next" aria-label="Next"><i class="icon-right-open"></i></button></div>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            ]
        });
    });
    // btn-scroll
    $(function(){
        var winH = $(window).height();
        $('.btn-scroll .btn').click(function(){
            $('html, body').animate({scrollTop:winH},600);
            return false;
        });
    });
})(jQuery);