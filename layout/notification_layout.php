<style>
    .notification {
        position: fixed;
        top: -100px;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgb(32 36 38 / 90%);
        /* đậm hơn để dễ nhìn khi to */
        color: white;
        padding: 15px 15px;
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        z-index: 999999;
        opacity: 0;
        pointer-events: none;
        width: 100%;
        /* chiếm 90% màn hình */
        max-width: 600px;
        /* giới hạn max nếu màn hình lớn */
        font-family: "Segoe UI", "Roboto", sans-serif;
        box-sizing: border-box;
    }

    .slide-down {
        animation: slideDown 1s forwards;
        pointer-events: auto;
    }

    .slide-up {
        animation: slideUp 0.5s forwards;
    }

    @keyframes slideDown {
        from {
            top: -100px;
            opacity: 0;
        }

        to {
            top: 0px;
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            top: 0px;
            opacity: 1;
        }

        to {
            top: -100px;
            opacity: 0;
        }
    }
</style>

<div id="notification" class="notification"></div>
<!-- <div id="unlockSound" style="position:fixed;inset:0;z-index:999;opacity:0;"></div>
<audio id="notiSound" src="/images/ting.mp3"></audio> -->
<script>
    // document.getElementById("unlockSound").addEventListener("click", () => {
    //     const audio = document.getElementById("notiSound");
    //     audio.play().catch(() => {});
    //     document.getElementById("unlockSound").remove();
    // });
    const notification = document.getElementById('notification');

    // Danh sách thông điệp
    const messages = [
        `<a style="display: flex; justify-content: space-between; "
    href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;">
    <div style="display: flex; align-items: center; gap: 10px; ">
        <img width="35" height="35" src="<?php echo $local ?>/images/icons/icon_zalo_noti.webp" alt="...">
        <div style="font-size: 14px; color: white; font-weight: 600;line-height: 20px; ">
            Bác sĩ đang online, tư vấn miễn phí cho bạn.
        </div>
    </div>
    <div style="font-size: 10px; color: white; font-weight: 300; width: 50px ">bây giờ</div>
</a>`,
        `<a style="display: flex; align-items: center; gap: 10px;  " href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;">
    <img width="35" height="35" src="<?php echo $local ?>/images/icons/icon_zalo_noti.webp" alt="...">
    <div style="font-size: 14px; color: white; font-weight: 600; line-height: 20px;" >
       Nếu bài viết chưa giải đáp, liên hệ bác sĩ ngay.
    </div>
</a>`,
        `<a style="display: flex; align-items: center; gap: 10px; " href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;">
    <img width="35" height="35" src="<?php echo $local ?>/images/icons/icon_zalo_noti.webp" alt="...">
    <div style="font-size: 14px; color: white; font-weight: 600;line-height: 20px; " >
       Bác sĩ sẽ giúp đánh giá tình trạng và đưa ra lời khuyên.
    </div>
</a>`,
        `<a style="display: flex; align-items: center; gap: 10px; " href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;">
    <img width="35" height="35" src="<?php echo $local ?>/images/icons/icon_zalo_noti.webp" alt="...">
    <div style="font-size: 14px; color: white; font-weight: 600;line-height: 20px; " >
       Đừng lo, bác sĩ sẽ lắng nghe và hỗ trợ bạn.
    </div>
</a>`,
        `<a style="display: flex; align-items: center; gap: 10px; " href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;">
    <img width="35" height="35" src="<?php echo $local ?>/images/icons/icon_zalo_noti.webp" alt="...">
    <div style="font-size: 14px; color: white; font-weight: 600;line-height: 20px; " >
       10 lần tìm kiếm không bằng 1 lần tư vấn trực tiếp. Nhắn tin để được giải đáp ngay.
    </div>
</a>`,
        `<a style="display: flex; align-items: center; gap: 10px; " href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;">
    <img width="35" height="35" src="<?php echo $local ?>/images/icons/icon_zalo_noti.webp" alt="...">
    <div style="font-size: 14px; color: white; font-weight: 600;line-height: 20px; " >
       Nhấn để tư vấn, đừng trì hoãn sức khỏe!
    </div>
</a>`,
    ];
    // Thời gian delay cho từng thông báo (ms)
    const delays = [10000, 15000, 20000, 25000, 30000, 35000]; // 15s, 20s, 20s

    function showNotification(msg) {
        notification.innerHTML = msg;
        notification.classList.remove('slide-up');
        notification.classList.add('slide-down');
        // Play sound
        //const sound = document.getElementById('notiSound');

        // Gán lại src bằng PHP
        //sound.src = "<?php echo $local ?>/images/ting.mp3";

        //sound.currentTime = 0;
        //sound.play();
    }

    function hideNotification() {
        notification.classList.remove('slide-down');
        notification.classList.add('slide-up');
    }

    function runCycle() {
        let i = 0;

        function nextNotification() {
            showNotification(messages[i]);
            // 5s sau ẩn đi
            setTimeout(hideNotification, 5000);
            // Chờ xong delay mới tới thông báo tiếp
            setTimeout(() => {
                i++;
                if (i < messages.length) {
                    nextNotification();
                } else {
                    // Khi hết 3 thông báo thì chờ 40s rồi mới chạy lại
                    setTimeout(runCycle, 30000);
                }
            }, delays[i]);
        }
        nextNotification();
    }

    // Bắt đầu chạy sau 15s khi load trang
    setTimeout(runCycle, 10000);
</script>