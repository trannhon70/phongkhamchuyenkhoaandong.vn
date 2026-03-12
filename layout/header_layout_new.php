<header id="header__home" class="header__home">
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
    <div style="margin-top: 61px; position: relative; " class="header__home_baner">
        <div class="header__home_baner_absolute">
            <a href="<?php echo $local ?>/gioi-thieu-bac-si.php" class="header__home_baner_absolute_card">
                <div class="header__home_baner_absolute_card_body">
                    <img loading="lazy" width="60%" height="auto" src="<?php echo $local ?>/images/icons/icon_7.webp"
                        alt="...">
                    <div class="header__home_baner_absolute_card_text">
                        Bác sĩ
                    </div>
                </div>

            </a>
            <a href="<?php echo $local ?>/lich-kham.php" class="header__home_baner_absolute_card">
                <div class="header__home_baner_absolute_card_body">
                    <img loading="lazy" width="60%" height="auto" src="<?php echo $local ?>/images/icons/icon_8.webp"
                        alt="...">
                    <div class="header__home_baner_absolute_card_text">
                        Lịch khám
                    </div>
                </div>

            </a>
            <a href="https://zalo.me/0968063109" target="_blank" class="header__home_baner_absolute_card">
                <div class="header__home_baner_absolute_card_body">
                    <img loading="lazy" width="60%" height="auto" src="<?php echo $local ?>/images/icons/icon_9.webp"
                        alt="...">
                    <div class="header__home_baner_absolute_card_text">
                        tư vấn
                    </div>
                </div>

            </a>
            <a href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;"
                class="header__home_baner_absolute_card">
                <div class="header__home_baner_absolute_card_body">
                    <img loading="lazy" width="60%" height="auto" src="<?php echo $local ?>/images/icons/icon_10.webp"
                        alt="...">
                    <div class="header__home_baner_absolute_card_text">
                        Đặt hẹn
                    </div>
                </div>

            </a>
        </div>
        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <div
                style="display: flex; align-items: center; justify-content: center; width: 100%;  box-sizing: border-box; max-width: 100%; position: relative;">
                <img fetchpriority="high" decoding="async" width="100%" style="object-fit: scale-down;"
                    src="<?php echo $local ?>/images/banner/1.webp" alt="...">
                <div style="position: absolute; left:0; bottom: 0; height: 85px; width: 100%;display: flex; ">
                    <a style=" width: 50%; display: block; height: 85px;" href="tel:0968063109"></a>
                    <a style=" width: 50%;  display: block; height: 85px;"
                        href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;"></a>
                </div>
            </div>
        </div>
    </div>
</header>