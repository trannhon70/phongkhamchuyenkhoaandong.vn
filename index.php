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

            <section class="section2">
                <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/banner/banner_1.webp" alt="...">
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
            </section>

            <section class="procedure" >
                <div class="procedure__title" >QUY TRÌNH THĂM KHÁM</div>
                <div class="procedure__list" >
                    <div class="procedure__list_item" >
                        <div class="procedure__list_item_title" >TƯ VẤN <br/> SỨC KHỎE</div>
                        <img loading="lazy" width="150px" height="150px" src="<?php echo $local ?>/images/icons/icon_1.webp" alt="....">
                    </div>
                    <div class="procedure__list_item" >
                        <div class="procedure__list_item_title" >ĐẶT HẸN <br/> ONLINE</div>
                        <img loading="lazy" width="150px" height="150px" src="<?php echo $local ?>/images/icons/icon_2.webp" alt="....">
                    </div>
                    <div class="procedure__list_item" >
                        <div class="procedure__list_item_title" >KHÁM <br/> LÂM SÀN</div>
                        <img loading="lazy" width="150px" height="150px" src="<?php echo $local ?>/images/icons/icon_3.webp" alt="....">
                    </div>
                    <div class="procedure__list_item" >
                        <div class="procedure__list_item_title" >TIẾN HÀNH <br/> XÉT NGHIỆM</div>
                        <img loading="lazy" width="150px" height="150px" src="<?php echo $local ?>/images/icons/icon_4.webp" alt="....">
                    </div>
                    <div class="procedure__list_item" >
                        <div class="procedure__list_item_title" >CHUẨN ĐOÁN <br/> & ĐIỀU TRỊ</div>
                        <img loading="lazy" width="150px" height="150px" src="<?php echo $local ?>/images/icons/icon_5.webp" alt="....">
                    </div>
                    <div class="procedure__list_item" >
                        <div class="procedure__list_item_title" >TÁI KHÁM <br/> & THEO DÕI</div>
                        <img loading="lazy" width="150px" height="150px" src="<?php echo $local ?>/images/icons/icon_6.webp" alt="....">
                    </div>
                </div>
            </section>
            <?php include_once "./layout/hethong_layout.php" ?>
            
        </article>
    </main> 

    <?php include_once "inc/footer.php" ?>