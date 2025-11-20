<?php include_once "inc/header.php" ?>
<meta name="description" content="Phòng khám chuyên điều trị bệnh uy tính tại thành phố Hồ Chí Minh">
<title>Phòng khám chuyên khoa</title>
<link rel="stylesheet" href="css/home.min.css">
</head>

<style>
    .banner_list {
        position: fixed;
        top: 71px;
        left: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 999;
    }

    .banner_list_item {
        display: flex;
        align-items: center;
        gap: 5px;
        background-color: #59b5d7ab;
        border-radius: 7px;
        padding: 5px 10px;
        color: white;
        font-weight: 400;
    }

    .banner_list_item_active {
        background-color: #37b7e6ff !important;
    }

    .active {
        display: block !important;
    }

    .bacsi {
        display: none;
    }

    .title_h2 {
        margin-top: 10px;
    }

    h2 {
        position: relative;
        font-size: 18px;
        font-weight: 700;
        color: #0678fc;
        border-bottom: 2px solid #0678fc;
        padding: 3px 0px;
        text-transform: uppercase;
        display: inline;
        line-height: 32px;
    }

    h2 span {
        position: absolute;
        bottom: -6px;
        right: -6px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #0678fc;
        display: block;
    }


    @media only screen and (min-width: 1000px) {

        .body_gioi_thieu {
            display: none !important;
        }
    }
</style>

<body>
    <?php include "layout/header_layout.php" ?>
    <main class="body_gioi_thieu">
        <article style="margin-top: 61px; position: relative;">
            <div class="banner_list">
                <div class="banner_list_item banner_list_item_active">
                    <img width="20px" height="auto" loading="lazy" src="<?php echo $local ?>/images/icons/icon_12.webp"
                        alt="...">
                    Bác Thủy
                </div>
                <div class="banner_list_item">
                    <img width="20px" height="auto" loading="lazy" src="<?php echo $local ?>/images/icons/icon_12.webp"
                        alt="...">
                    Bác Nguyễn
                </div>
            </div>
            <div class="bacsi active">
                <img style="width: 100%; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/banner/banner_6.webp" alt="...">
                <div class="title_h2">
                    <h2>thông tin về bác sĩ <span></span></h2>
                </div>
                <div style="padding: 10px; font-size: 15px; color:black; ">
                    <div>
                        <strong>Bác sĩ: </strong> NGUYỄN BẠCH VÂN THỦY
                    </div>
                    <div style="margin-top: 5px;">
                        <strong>Chuyên khoa: </strong> Khám, chưa bệnh chuyên khoa Ngoại
                    </div>
                    <div style="margin-top: 5px;">
                        Chức vụ cao nhất từng đảm nhiệm: Bác sĩ
                    </div>
                    <div style="margin-top: 5px;">
                        Bệnh viện từng công tác: Bệnh viện Quận Thủ Đức
                    </div>
                    <div style="margin-top: 5px;">
                        Bác sĩ chuyên khoa: Bác sĩ đa khoa
                    </div>
                    <img style="width: 100%; height: auto; margin-top: 10px; " loading="lazy"
                        src="<?php echo $local ?>/images/banner/banner_8.webp" alt="...">
                    <img style="width: 100%; height: auto; margin-top: 10px; " loading="lazy"
                        src="<?php echo $local ?>/images/banner/banner_9.webp" alt="...">
                    <a href="tel:0968063109">
                        <img style="width: 100%; height: auto; margin-top: 10px; " loading="lazy"
                            src="<?php echo $local ?>/images/banner/banner_10.webp" alt="...">
                    </a>
                </div>
            </div>
            <div class="bacsi ">
                <img style="width: 100%; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/banner/banner_7.webp" alt="...">
                <div class="title_h2">
                    <h2>thông tin về bác sĩ <span></span></h2>
                </div>
                <div style="padding: 10px; font-size: 15px; color:black; ">
                    <div>
                        <strong>Bác sĩ: </strong> VÕ MINH NGUYỄN
                    </div>
                    <div style="margin-top: 5px;">
                        <strong>Chuyên khoa: </strong> Khám, chưa bệnh chuyên khoa Ngoại
                    </div>
                    <div style="margin-top: 5px;">
                        Chức vụ cao nhất từng đảm nhiệm: Bác sĩ
                    </div>
                    <div style="margin-top: 5px;">
                        Bệnh viện từng công tác: Bệnh viện Đa Khoa Xanh Pôn Hà Nội. Bệnh viện Đa Khoa Tâm Trí Sài Gòn
                    </div>
                    <div style="margin-top: 5px;">
                        Bác sĩ chuyên khoa: Bác sĩ - Thạc sĩ Y học
                    </div>
                    <img style="width: 100%; height: auto; margin-top: 10px; " loading="lazy"
                        src="<?php echo $local ?>/images/banner/banner_11.webp" alt="...">
                    <img style="width: 100%; height: auto; margin-top: 10px; " loading="lazy"
                        src="<?php echo $local ?>/images/banner/banner_12.webp" alt="...">
                    <a href="tel:0968063109">
                        <img style="width: 100%; height: auto; margin-top: 10px; " loading="lazy"
                            src="<?php echo $local ?>/images/banner/banner_10.webp" alt="...">
                    </a>
                </div>
        </article>
    </main>
    <script>
        const items = document.querySelectorAll(".banner_list_item");
        const banners = document.querySelectorAll(".bacsi");

        items.forEach((item, index) => {
            item.addEventListener("click", function() {

                // Bỏ active tất cả item
                items.forEach(i => i.classList.remove("banner_list_item_active"));
                // Active item được click
                item.classList.add("banner_list_item_active");

                // Bỏ active tất cả banner
                banners.forEach(b => b.classList.remove("active"));
                // Active banner tương ứng index
                banners[index].classList.add("active");
            });
        });
    </script>

    <?php include_once "inc/footer.php" ?>