 <footer id="footer" class="footer">
ádsad
 </footer>

 <!-- <footer id="footer__mobile" class="footer__mobile">
ádasd
 </footer> -->


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