 <footer id="footer" class="footer">
     <div class="footer__top">
         <a href="<?php echo $local ?>" class="footer__top_item">
             <img loading="lazy" width="250px" height="50px" src="<?php echo $local ?>/images/icons/icon_dangky.webp" alt="...">
         </a>
         <a href="<?php echo $local ?>" class="footer__top_item">
             <img loading="lazy" width="250px" height="50px" src="<?php echo $local ?>/images/icons/icon_tuvan.webp" alt="...">
         </a>
         <a href="<?php echo $local ?>" class="footer__top_item">
             <img loading="lazy" width="250px" height="50px" src="<?php echo $local ?>/images/icons/icon_zalo.webp" alt="...">
         </a>
     </div>
     <div class="footer__bottom">
         <div class="footer__bottom_body">
             <div class="footer__bottom_body_title">
                 <img loading="lazy" width="97px" height="97px" src="<?php echo $local ?>/images/logo/logo_footer.webp" alt="...">
                 chuyên khoa khám chữa bệnh An Đông
             </div>
             <div class="footer__bottom_body_list" >
                <div class="footer__bottom_body_list_item" >
                    <div class="footer__bottom_body_list_item_card" >
                        <strong>Địa chỉ: </strong> 360 An Dương Vương, P.4, Q.5, TP.HCM 
                    </div>
                    <div class="footer__bottom_body_list_item_card" >
                        <strong>Hotline: </strong> 0968 063 109
                    </div>
                    <div class="footer__bottom_body_list_item_card" >
                        <strong>Email: </strong> pkdkad360@gmail.com
                    </div>
                </div>
                <div class="footer__bottom_body_list_item" >
                    <div class="footer__bottom_body_list_item_card" >
                        <strong>Thời gian làm việc: </strong>  8:00 - 20:00
                    </div>
                    <div class="footer__bottom_body_list_item_card" >
                        Tất cả các ngày trong tuần, kể cả ngày lễ
                    </div>
                </div>
             </div>
         </div>
     </div>
 </footer>


 <script defer>
     function updateHeaderScripts() {
         // Xóa các script cũ nếu có
         const existingMobileScripts = document.querySelectorAll('script[id^="mobile-"]');
         const existingDesktopScripts = document.querySelectorAll('script[id^="desktop-"]');
         existingMobileScripts.forEach(script => script.remove());
         existingDesktopScripts.forEach(script => script.remove());

         // Thêm script mới dựa trên kích thước cửa sổ
         if (window.innerWidth < 1000) {
             const mobileScripts = [
                 // {
                 //      src: 'js/sidebar_mobile.min.js',
                 //      id: 'mobile-0'
                 //  },


             ];
             mobileScripts.forEach(({
                 src,
                 id
             }) => {
                 const script = document.createElement('script');
                 script.src = src;
                 script.id = id;
                 script.defer = true;
                 document.body.appendChild(script);
             });
         } else {
             const desktopScripts = [
                 // {
                 //     src: 'js/slider.min.js',
                 //     id: 'desktop-0'
                 // },

             ];
             desktopScripts.forEach(({
                 src,
                 id
             }) => {
                 const script = document.createElement('script');
                 script.src = src;
                 script.id = id;
                 document.body.appendChild(script);
             });
         }
     }

     updateHeaderScripts();

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

 <script>
     new PerformanceObserver((list) => {
         const latestEntry = list.getEntries().at(-1);

         if (latestEntry?.element?.getAttribute('loading') == 'lazy') {
             console.warn('Warning: LCP element was lazy loaded', latestEntry);
         }
     }).observe({
         type: 'largest-contentful-paint',
         buffered: true
     });
 </script>

 </body>

 </html>