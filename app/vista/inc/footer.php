 <!-- Essential javascripts for application to work-->
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
   <script type="text/javascript" src="<?php echo RUTA_URL;?>/public/js/validar.js"></script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
  </body>
</html>
