 <!-- JS -->
 <script src="<?php echo base_url(); ?>public/assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/php-email-form/validate.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/counterup/counterup.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="<?php echo base_url(); ?>public/assets/vendor/venobox/venobox.min.js"></script>

 <!-- Main.js -->
 <script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>
 <!-- Slick -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script>
   $('.slider').slick({
     dots: true,
     infinite: true,
     speed: 300,
     slidesToShow: 3,
     slidesToScroll: 3,
     autoplay: true,
     centerMode: true,
     centerPadding: '60px',
     arrow: false,
     responsive: [{
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
           infinite: true,
           dots: true
         }
       },
       {
         breakpoint: 800,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }
       // You can unslick at a given breakpoint now by adding:
       // settings: "unslick"
       // instead of a settings object
     ]
   });
 </script>

 </body>

 </html>