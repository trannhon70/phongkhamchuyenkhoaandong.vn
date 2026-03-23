<?php include_once "inc/header.php" ?>
<meta name="description" content="Phòng khám chuyên điều trị bệnh uy tính tại thành phố Hồ Chí Minh">
<title>Phòng khám chuyên khoa</title>
<link rel="stylesheet" href="css/trang_chu.min.css">
</head>

<body>
    <?php include_once "./layout/header_layout.php" ?>
    <main>
        <article>
            <section class="section">
                <div class="section__left">
                    <img loading="lazy" width="100%" height="100%"
                        src="<?php echo $local ?>/images/background/section_pc.webp" alt="...">
                </div>
                <div class="section__right">
                    <img loading="lazy" width="100%" height="100%"
                        src="<?php echo $local ?>/images/background/section_chi_tiet.webp" alt="...">
                </div>
            </section>

            <section class="section2">
                <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/banner_1.webp"
                    alt="...">
            </section>


            <section class="section4">
                <div class="section4__title">hệ thống cơ sở vật chất tại phòng khám</div>
                <div class="section4__list">
                    <div class="section4__list_item">
                        <img loading="lazy" width="100%" height="100%"
                            src="<?php echo $local ?>/images/banner/section4_left.webp" alt="...">
                    </div>
                    <div class="section4__list_item">
                        <img loading="lazy" width="100%" height="100%"
                            src="<?php echo $local ?>/images/banner/section4_right.webp" alt="...">
                    </div>
                </div>
            </section>

            <section class="procedure">
                <div class="procedure__title">QUY TRÌNH THĂM KHÁM</div>
                <div class="procedure__list">
                    <div class="procedure__list_item">
                        <div class="procedure__list_item_title">TƯ VẤN <br /> SỨC KHỎE</div>
                        <img loading="lazy" width="150px" height="150px"
                            src="<?php echo $local ?>/images/icons/icon_1.webp" alt="....">
                    </div>
                    <div class="procedure__list_item">
                        <div class="procedure__list_item_title">ĐẶT HẸN <br /> ONLINE</div>
                        <img loading="lazy" width="150px" height="150px"
                            src="<?php echo $local ?>/images/icons/icon_2.webp" alt="....">
                    </div>
                    <div class="procedure__list_item">
                        <div class="procedure__list_item_title">KHÁM <br /> LÂM SÀN</div>
                        <img loading="lazy" width="150px" height="150px"
                            src="<?php echo $local ?>/images/icons/icon_3.webp" alt="....">
                    </div>
                    <div class="procedure__list_item">
                        <div class="procedure__list_item_title">TIẾN HÀNH <br /> XÉT NGHIỆM</div>
                        <img loading="lazy" width="150px" height="150px"
                            src="<?php echo $local ?>/images/icons/icon_4.webp" alt="....">
                    </div>
                    <div class="procedure__list_item">
                        <div class="procedure__list_item_title">CHUẨN ĐOÁN <br /> & ĐIỀU TRỊ</div>
                        <img loading="lazy" width="150px" height="150px"
                            src="<?php echo $local ?>/images/icons/icon_5.webp" alt="....">
                    </div>
                    <div class="procedure__list_item">
                        <div class="procedure__list_item_title">TÁI KHÁM <br /> & THEO DÕI</div>
                        <img loading="lazy" width="150px" height="150px"
                            src="<?php echo $local ?>/images/icons/icon_6.webp" alt="....">
                    </div>
                </div>
            </section>
            <?php include_once "./layout/hethong_layout.php" ?>

        </article>
    </main>

    <footer id="footer" class="footer">
        <div class="footer__top">
            <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/bg_footer.webp"
                alt="...">

        </div>
        <div class="footer__bottom">
            <div class="footer__bottom_body">
                <div class="footer__bottom_body_title">
                    <img loading="lazy" width="97px" height="97px" src="<?php echo $local ?>/images/logo/logo_footer.webp"
                        alt="...">
                    chuyên khoa khám chữa bệnh An Đông
                </div>
                <div class="footer__bottom_body_list">
                    <div class="footer__bottom_body_list_item">
                        <div class="footer__bottom_body_list_item_card">
                            <strong>Địa chỉ: </strong> Số 360 đường An Dương Vương, Phường Chợ Quán, TP Hồ Chí Minh
                        </div>
                        <div class="footer__bottom_body_list_item_card">
                            <strong>Hotline: </strong> 0968 063 109
                        </div>

                    </div>
                    <div class="footer__bottom_body_list_item">
                        <div class="footer__bottom_body_list_item_card">
                            <strong>Thời gian làm việc: </strong> 8:00 - 20:00
                        </div>
                        <div class="footer__bottom_body_list_item_card">
                            Tất cả các ngày trong tuần, kể cả ngày lễ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <footer id="footer__mobile" class="footer__mobile">
        <div class="footer__mobile_layout">
            <img loading="lazy" width="100%" height="auto" src="<?php echo $local ?>/images/banner/banner_4.webp" alt="..."
                layout="responsive">
            <img class="footer__mobile_layout_img" loading="lazy" width="60%" height="auto"
                src="<?php echo $local ?>/images/banner/banner_5.webp" alt="..." layout="responsive">
        </div>
        <div class="footer__mobile_bottom">
            <div class="footer__mobile_bottom_top">
                <img width="60px" src="<?php echo $local ?>/images/logo/icon_logo.webp" alt="...">
                <div class="footer__mobile_bottom_top_right">
                    <h5>Phòng khám</h5>
                    <span>Chuyên Khoa TP HCM</span>
                </div>
            </div>
            <div class="footer__mobile_bottom_location">
                <img width="20px" src="<?php echo $local ?>/images/icons/icon_location.webp" alt="...">
                <div>An Dương Vương, P. Chợ Quán, Tp. HCM</div>
            </div>

            <div class="footer__mobile_bottom_location">
                <img width="20px" src="<?php echo $local ?>/images/icons/icon_phone.webp" alt="...">
                <div>Hotline: <strong>0968 063 109</strong></div>
            </div>
        </div>
    </footer>
    <section id="footer_mobileFix">
        <div class="footer_mobileFix_body">
            <img style="position: absolute; top: 3px; right: 40%;" loading="lazy" width="50px" height="auto"
                src="<?php echo $local ?>/images/icons/icon_footer_animation.gif" alt="..." layout="responsive">
            </img>
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/background/footer_mobile.gif" alt="...">
            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 60px; display: flex;">
                <a style="display: block; width: 50%; ; height: 60px;"
                    href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;"></a>
                <a style="display: block; width: 50%; ; height: 60px;" href="tel:0968063109"></a>
            </div>
        </div>
    </section>



    <script>
        // xóa component khi ở lich-kham
        const currentPage = "<?php echo basename($_SERVER['PHP_SELF']); ?>";
        const headerNoIndex = document.querySelector('.header_mobile_no_index');
        const headerIndex = document.querySelector('.header_mobile_index');
        console.log(currentPage);

        if (currentPage === "lich-kham.php") {
            document.querySelectorAll('.footer__mobile_layout').forEach(a => {
                a.style.display = "none";
            });
        }
        if (currentPage === "index.php") {
            const footer = document.getElementById('footer_mobileFix');
            const footer__mobile = document.getElementById('footer__mobile');
            footer.remove();
            footer__mobile.remove();
            headerNoIndex.remove();
        } else {
            headerIndex.remove()
        }
    </script>
    <script defer>
        function deleteComponent() {

            const header = document.getElementById('header');
            const headerMobile = document.getElementById('header__mobile');

            if (window.innerWidth <= 999) {
                header?.remove();


                if (headerMobile) headerMobile.classList.add('block');

            } else {
                headerMobile?.remove();


                if (header) header.style.display = 'block';

            }

        }

        deleteComponent()
    </script>


</body>

</html>