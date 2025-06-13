<?php include_once "inc/header.php" ?>
<meta name="description"
    content="Phòng khám chuyên điều trị bệnh uy tính tại thành phố Hồ Chí Minh">
<title>Phòng khám chuyên khoa</title>
<link rel="stylesheet" href="css/trang_chu.min.css">
</head>

<body>
    <?php include_once "./layout/header_layout.php" ?>
    <main>
        <article>
            <section class="section">
                <div class="section__left">
                    <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/section_pc.webp" alt="...">
                </div>
                <div class="section__right">
                    <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/section_chi_tiet.webp" alt="...">
                </div>
            </section>

            <section class="section1">
                <div class="section1__title">BÁC SĨ CHUYÊN KHOA</div>
                <div class="section1__list">
                    <div class="section1__list_item">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/section1_bacsi.webp" alt="...">
                    </div>
                    <div class="section1__list_item">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/section1_bacsi.webp" alt="...">
                    </div>
                    <div class="section1__list_item">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/section1_bacsi.webp" alt="...">
                    </div>
                    <div class="section1__list_item">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/section1_bacsi.webp" alt="...">
                    </div>
                </div>
                <div class="section1__bottom">
                    <div class="section1__bottom_left">
                        Đặt lịch tư vấn
                        <img loading="lazy" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_heat.webp" alt="...">
                    </div>
                    <div class="section1__bottom_right">
                        <div class="section1__bottom_right_item" >
                            <img loading="lazy" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_prev.webp" alt="...">
                        </div>
                        <div class="section1__bottom_right_item" >
                            <img loading="lazy" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_next.webp" alt="...">
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <?php include_once "inc/footer.php" ?>