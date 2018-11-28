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
                    <section class="location">
                        <div class="section-header">
                            <h4>오시는 길</h4>
                        </div>
                        <!-- Content Start -->
                        <div class="section-content">
                            <div id="daumRoughmapContainer1543391452294" class="root_daum_roughmap root_daum_roughmap_landing maps"></div>
                            <div class="location-info">
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>주소</dt>
                                                    <dd>
                                                        <address>서울특별시 영등포구 선유로3길 10, 6층 하우스디비즈 603-2호(문래동 5가)</address>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>전화/팩스</dt>
                                                    <dd>
                                                        <a href="tel:020000000">02-000-0000</a>
                                                        /02-000-0000
                                                    </dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="btn-area">
                                            <a href="#" class="btn btn-blue" role="button">
                                                <img src="/assets/images/introduction/icon_location.jpg" alt="">
                                                자세히보기
                                            </a>
                                            <a href="#" class="btn btn-white" role="button">
                                                <img src="/assets/images/introduction/icon_contact.jpg" alt="">
                                                인쇄하기
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

    <!-- daum map -->
    <script charset="UTF-8">
        new daum.roughmap.Lander({
            "timestamp" : "1543391452294",
            "key" : "r4kq",
        }).render();
    </script>
</body>
</html>