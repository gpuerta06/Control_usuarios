 <!-- Essential javascripts for application to work-->
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>