<?php include "components/head.php";?>
  <body>
    <?php include "components/nav.php";?>
      <!-- Start your project here-->    
        <?php include "components/header.php";?>
          <div class="content">
            <div class="container text-center menuAboutUs" style="  background-image: url(img/fondo.jpg);">        
              <a href="https://api.whatsapp.com/send?phone=527714349366&text=Hola%2C%20deseo%20adquirir%20un%20servicio%20con%20ustedes."
              target="_blank">
              <img style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/whatsapp.png"
                title="Envianos un mensaje por whatsap"></a>
              <div class="container">
                <section class="py-2 px-2">
                  <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                      <!--Indicators-->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-2" data-slide-to="1"></li>
                          <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                      <!--/.Indicators-->
                        <!--Slides-->
                          <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                              <div class="view">
                                <img class="d-block w-100" src="img/evento1.jpg"
                                  alt="First slide">
                                <div class="mask rgba-black-light"></div>
                              </div>
                              <div class="carousel-caption">
                                <h3 class="h3-responsive">Evento 1</h3>
                                <p>Descripción</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <!--Mask color-->
                              <div class="view">
                                <img class="d-block w-100" src="img/evento2.jpg"
                                  alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                              </div>
                              <div class="carousel-caption">
                                 <h3 class="h3-responsive">Evento 2</h3>
                                <p>Descripción</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <!--Mask color-->
                              <div class="view">
                                <img class="d-block w-100" src="img/evento3.jpg"
                                  alt="Third slide">
                                <div class="mask rgba-black-slight"></div>
                              </div>
                              <div class="carousel-caption">
                                  <h3 class="h3-responsive">Evento 3</h3>
                                 <p>Descripción</p>
                              </div>
                            </div>
                          </div>
                        <!--/.Slides-->
                      <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      <!--/.Controls-->
                    </div>
                  <!--/.Carousel Wrapper--> 
                </section>   
              </div>
            </div>
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






