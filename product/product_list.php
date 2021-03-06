<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/product.css">
</head>
<body class="sub product">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/product/_page_header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_snb.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="d-none d-xl-block col-xl-3">
                    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/product/_lnb.php'); ?>
                </div>
                <div class="col-12 col-xl-9">
                    <section class="product-list">
                        <div class="section-header">
                            <h4>전자저울</h4>
                        </div>
                        <!-- Content Start -->
                        <div class="section-content">
                            


                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($){
            $(document).on('click','#lnb > ul > li > a', function(){
                if ($(this).parent().hasClass('active')) {
                    $(this).parent().removeClass('active');
                } else {
                    $(this).parent().siblings('.active').removeClass('active');
                    $(this).parent().addClass('active');
                }
            });
            $(document).on('click','#lnb > ul > li > ul > li > a', function(){
                if ($(this).parent().hasClass('on')) {
                    $(this).parent().removeClass('on');
                } else {
                    $(this).parent().siblings('.on').removeClass('on');
                    $(this).parent().addClass('on');
                }
            });
        })(jQuery);
    </script>
</body>
</html>