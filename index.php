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
                        <div class="section1__bottom_right_item">
                            <img loading="lazy" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_prev.webp" alt="...">
                        </div>
                        <div class="section1__bottom_right_item">
                            <img loading="lazy" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_next.webp" alt="...">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section2">
                <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/banner_1.webp" alt="...">
            </section>

            <section class="section3">
                <div class="section3__body">
                    <div class="section3__body_left">
                        <div class="section3__body_left_title">
                            CÁC HẠNG MỤC KHÁM CHỮA
                        </div>
                        <div class="section3__body_left_list ">
                            <div class="section3__body_left_list_item">
                                <img loading="lazy" width="90px" height="90px" src="<?php echo $local ?>/images/icons/icon_BXH.webp" alt="...">
                                <div class="section3__body_left_list_item_text">BỆNH XÃ HỘI</div>
                            </div>

                            <div class="section3__body_left_list_item">
                                <img loading="lazy" width="90px" height="90px" src="<?php echo $local ?>/images/icons/icon_BDL.webp" alt="...">
                                <div class="section3__body_left_list_item_text">BỆNH DA LIỄU</div>
                            </div>
                        </div>
                    </div>
                    <div class="section3__body_right">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/section3_bacsi.webp" alt="...">
                    </div>
                </div>
            </section>

            <section class="section4">
                <div class="section4__title">hệ thống cơ sở vật chất tại phòng khám</div>
                <div class="section4__list">
                    <div class="section4__list_item">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/section4_left.webp" alt="...">
                    </div>
                    <div class="section4__list_item">
                        <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/section4_right.webp" alt="...">
                    </div>
                </div>
                <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/section4_chat_luong.webp" alt="...">
            </section>
            <?php include_once "./layout/hethong_layout.php" ?>
            </article>
        </article>
    </main>

    <?php include_once "inc/footer.php" ?>