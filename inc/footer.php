 <footer id="footer" class="footer">
     <div class="footer__top">
         <img loading="lazy" width="100%" height="100%" src="<?php echo $local ?>/images/background/bg_footer.webp" alt="...">

     </div>
     <div class="footer__bottom">
         <div class="footer__bottom_body">
             <div class="footer__bottom_body_title">
                 <img loading="lazy" width="97px" height="97px" src="<?php echo $local ?>/images/logo/logo_footer.webp" alt="...">
                 chuyên khoa khám chữa bệnh An Đông
             </div>
             <div class="footer__bottom_body_list">
                 <div class="footer__bottom_body_list_item">
                     <div class="footer__bottom_body_list_item_card">
                         <strong>Địa chỉ: </strong> 360 An Dương Vương, P.4, Q.5, TP.HCM
                     </div>
                     <div class="footer__bottom_body_list_item_card">
                         <strong>Hotline: </strong> 028 7777 9888
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
 <footer class="footer__mobile">
     <img loading="lazy" width="100%" height="auto" src="<?php echo $local ?>/images/background/footer_mobile.gif" alt="...">
     <div class="footer__mobile_list" >
        <a class="footer__mobile_list_left"  target="_blank" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <p class="randum__number">
                10
            </p>
        </a>
        <a class="footer__mobile_list_center" href="tel:+02877779888"></a>
        <a class="footer__mobile_list_right" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" target="_blank" rel="noopener noreferrer"></a>
     </div>
 </footer>

 <script language="javascript" src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en"></script>

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
                 {
                      src: 'js/random_number.min.js',
                      id: 'mobile-0'
                  },


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