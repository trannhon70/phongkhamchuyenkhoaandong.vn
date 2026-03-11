<header class="header" id="header">
    <div class="header__top">
        <div class="header__top_left">
            <strong>Thời gian làm việc 8:00 - 20:00 </strong>Các ngày trong tuần
        </div>
        <div class="header__top_center">
            <strong>Hotline tư vấn: 0968 063 109 </strong>
        </div>
        <div class="header__top_center">
            360 An Dương Vương, P. Chợ Quán, TP. HCM
        </div>
    </div>
    <div class="header__bottom">
        <div class="header__bottom_left">
        </div>
        <div class="header__bottom_right">
        </div>
        <div class="header__bottom_body">
            <div class="header__bottom_body_menu">
                <a href="<?php echo $local ?>"
                    class="header__bottom_body_menu_item header__bottom_body_menu_item_border">
                    <img width="35px" height="35px" loading="lazy"
                        src="<?php echo $local ?>/images/icons/icon_home.webp" alt="...">
                </a>
                <a href="<?php echo $local ?>" class="header__bottom_body_menu_item header__bottom_body_menu_item_dm">
                    DANH MỤC BỆNH
                    <img width="15px" height="15px" loading="lazy"
                        src="<?php echo $local ?>/images/icons/icon_down.webp" alt="...">
                </a>
                <a href="<?php echo $local ?>" class="header__bottom_body_menu_item">
                    GIỚI THIỆU
                </a>
                <a href="<?php echo $local ?>" class="header__bottom_body_menu_item">
                    BÁC SĨ
                </a>
                <a href="<?php echo $local ?>" class="header__bottom_body_menu_item">
                    CƠ SỞ VẬT CHẤT
                </a>
                <a href="<?php echo $local ?>" class="header__bottom_body_menu_item">
                    LIÊN HỆ
                </a>
                <a href="<?php echo $local ?>"
                    class="header__bottom_body_menu_item header__bottom_body_menu_item_border1">
                    <img width="40px" height="40px" loading="lazy"
                        src="<?php echo $local ?>/images/icons/icon_chat.webp" alt="...">
                </a>
            </div>
        </div>
    </div>
    <div class="header__banner">
        <img width="100%" height="100%" src="<?php echo $local ?>/images/banner/banner_pc.webp" alt="...">
    </div>
</header>

<header id="header__mobile" class="header__mobile header_mobile_no_index">
    <div class="header_mobile_container">
        <div class="header_mobile_container-body">
            <a href="<?php echo $local ?>/home.html">
                <img style="background-color: white; border-radius: 50%;" loading="lazy" width="40" height="40"
                    src="<?php echo $local ?>/images/logo/icon_logo.webp" alt="...">
            </a>
            <div style="color: white; text-align: center; font-size: 14px; "><span
                    style="font-size: 18px; font-weight: 700;">Phòng
                    Khám Chuyên khoa</span> <br> Địa chỉ uy tín, bảo mật thông tin </div>
            <?php include "layout/sider_bar.php" ?>
        </div>
    </div>
    <div class="header__home_baner">
        <div class="header__home_baner_absolute">
            <div style=" display: flex; align-items: center; justify-content: space-around; background-color: #459498; padding: 5px 10px; box-sizing: border-box; height: 60px;">
                <a href="<?php echo $local ?>/gioi-thieu-bac-si.php" class="header__home_baner_absolute_card">
                    <div class="header__home_baner_absolute_card_body">
                        <img loading="lazy" width="50%" height="auto" src="<?php echo $local ?>/images/icons/icon_7.webp"
                            alt="...">
                        <div class="header__home_baner_absolute_card_text">
                            Bác sĩ
                        </div>
                    </div>

                </a>
                <a href="<?php echo $local ?>/lich-kham.php" class="header__home_baner_absolute_card">
                    <div class="header__home_baner_absolute_card_body">
                        <img loading="lazy" width="50%" height="auto" src="<?php echo $local ?>/images/icons/icon_8.webp"
                            alt="...">
                        <div class="header__home_baner_absolute_card_text">
                            Lịch khám
                        </div>
                    </div>

                </a>
                <a href="https://zalo.me/0968063109" target="_blank" class="header__home_baner_absolute_card">
                    <div class="header__home_baner_absolute_card_body">
                        <img loading="lazy" width="50%" height="auto" src="<?php echo $local ?>/images/icons/icon_9.webp"
                            alt="...">
                        <div class="header__home_baner_absolute_card_text">
                            tư vấn
                        </div>
                    </div>

                </a>
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"
                    class="header__home_baner_absolute_card">
                    <div class="header__home_baner_absolute_card_body">
                        <img loading="lazy" width="50%" height="auto" src="<?php echo $local ?>/images/icons/icon_10.webp"
                            alt="...">
                        <div class="header__home_baner_absolute_card_text">
                            Đặt hẹn
                        </div>
                    </div>

                </a>
                <?php include "layout/sider_bar.php" ?>
            </div>
            <marquee style="scroll-behavior: smooth; background-color: white; padding: 2px; " scrollamount="3">
                <p style="color: #333">Chú ý: Nếu cần hỗ trợ <strong style="color:red">chẩn đoán tình trạng sức khỏe và tư vấn chi phí online </strong>, khách hàng có thể <strong style="color:red"> chat trực tiếp hoặc để lại số điện thoại </strong> để được tư vấn miễn phí. Hotline: <strong style="color:red">035.685.1116</strong></p>
            </marquee>
        </div>
        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <div
                style="display: flex; align-items: center; justify-content: center; width: 100%;  box-sizing: border-box; max-width: 100%; position: relative;">
                <img fetchpriority="high" decoding="async" width="100%" style="object-fit: scale-down;"
                    src="<?php echo $local ?>/images/banner/1.webp" alt="...">
                <div style="position: absolute; left:0; bottom: 0; height: 85px; width: 100%;display: flex; ">
                    <a style=" width: 50%; display: block; height: 85px;" href="tel:0968063109"></a>
                    <a style=" width: 50%;  display: block; height: 85px;"
                        href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                </div>
            </div>
        </div>
    </div>
</header>
<header id="header__mobile" class="header__mobile header_mobile_index">
    <div class="header__mobile_top">
        <a href="<?php echo $local ?>" class="header__mobile_top_left">
            <img width="30px" height="30px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_home.webp"
                alt="...">
        </a>
        <div class="header__mobile_top_center">
            <div class="header__mobile_top_center_title">
                Phòng khám chuyên khoa An Đông
            </div>
            <img width="30px" height="30px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_chat.webp"
                alt="...">
        </div>
        <div>
            <img width="25px" height="25px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_menu.webp"
                alt="...">
        </div>
    </div>
    <div class="header__mobile_banner ">

        <img fetchpriority="high" decoding="async" width="100%" height="100%" src="<?php echo $local ?>/images/banner/banner_mobile.webp"
            alt="Banner 1">
    </div>


    </div>
</header>

<script>
    const isGioiThieu = "<?php echo basename($_SERVER['PHP_SELF']); ?>" === "gioi-thieu-bac-si.php";
    const isLichKham = "<?php echo basename($_SERVER['PHP_SELF']); ?>" === "lich-kham.php";
    if (isLichKham) {
        document.querySelectorAll('.header__home_baner').forEach(a => {
            a.style.marginTop = "61px";
        });
    }
    if (isGioiThieu) {
        document.querySelectorAll('.header__home_baner').forEach(a => {
            a.style.display = "none";
        });
    }
    const banner = document.querySelector(".header__home_baner_absolute");

    window.addEventListener("scroll", () => {

        if (window.scrollY > 60) {
            banner.classList.add("show");
        } else {
            banner.classList.remove("show");
        }

    });
</script>