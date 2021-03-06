<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="sub introduction">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/introduction/_page_header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_snb.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="d-none d-xl-block col-xl-3">
                    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/introduction/_lnb.php'); ?>
                </div>
                <div class="col-12 col-xl-9">
                    <section class="group">
                        <div class="section-header">
                            <h4>조직도</h4>
                        </div>
                        <!-- Content Start -->
                        <div class="section-content">
                            <figure>
                                <img src="/assets/images/introduction/img_group_sm.png" class="img-fluid d-lg-none" alt="">
                                <img src="/assets/images/introduction/img_group_xl.png" class="img-fluid d-none d-lg-block" alt="">
                            </figure>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>