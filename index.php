<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <!-- jumbotron -->
        <div class="jumbotron">
            <ul>
                <li style="background-image: url(/assets/images/main/jumbo_slide01.jpg);">
                    <div class="product-info">
                        <div class="details">
                            <small>Mass Comparator Balances</small>
                            <h4>MC Series</h4>
                            <div class="btn-area">
                                <a href="#" class="btn btn-more">자세히보기</a>
                            </div>
                            <figure>
                                <img src="/assets/images/main/img_product01.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            $(document).ready(function(){
                $('.jumbotron > ul').slick({
                    
                });
            });
        })(jQuery);
    </script>
</body>
</html>