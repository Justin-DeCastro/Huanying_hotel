 <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63970d62b0d6371309d3fe2d/1gk30oirh';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/aos.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/scrollax.min.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/google-map.js"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/js/main.js"></script>
       <?php if(isset($_SESSION['status'])){ ?>
    <script type="text/javascript">
        Swal.fire({
              position: 'top-end',
              icon: '<?php echo $_SESSION['status_code'];?>',
              title: '<?php echo $_SESSION['status'];?>',
              showConfirmButton: false,
              timer: 1500
            })
    </script>
<?php unset($_SESSION["status"]);  }?>

  </body>
</html>