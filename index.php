<?php include "components/head.php";?>
  <body>
    <?php include "components/nav.php";?>
      <!-- Start your project here-->    
        <?php include "components/header.php";?>
          <div class="content">          
            <div class="container">
              <!-- POSICION ANTERIO DE LA NAV     -->
                <div class="text-center menuAboutUs">          
                  <a href="https://api.whatsapp.com/send?phone=527714349366&text=Hola%2C%20deseo%20adquirir%20un%20servicio%20con%20ustedes."
                    target="_blank">
                  <img style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/whatsapp.png"
                    title="Envianos un mensaje por whatsap"></a>              
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
