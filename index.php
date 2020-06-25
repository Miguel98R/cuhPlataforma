<?php include "components/head.php";?>
  <body>
    <?php include "components/nav.php";?>
      <!-- Start your project here-->    
        <?php include "components/header.php";?>
          <div class="content">          
            <div class="container">
            <?php include "components/pluginWA.php" ;?>
              <!-- POSICION ANTERIO DE LA NAV     -->
                <div class="text-center menuAboutUs" style="box-shadow: 1px 2px 16px -2px rgba(0,0,0,0.75);">          
                          
                  <section class="py-2 px-2">
                    <?php include "components/slider_noticias.php";?>
                  </section>        
                  <section class="py-2 px-2">                
                    <?php include "components/oferta_educativa.php";?>
                  </section>        
                </div>              
            </div>
          </div>
          <section>
            <div class="container contacto text-center ">
              <?php include "components/contacto.php";?>
            </div> 
          </section>
    <?php include "components/footer.php";?>
    <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
  </body>
</html>
