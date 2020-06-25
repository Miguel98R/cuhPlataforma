<?php include "components/head.php";?>
  <body>
    <?php include "components/nav.php";?>
     <!-- Start your project here-->    
      <?php include "components/header.php";?>
        <div class="container">
          <div class="text-center menuAboutUs" style="box-shadow: 1px 2px 16px -2px rgba(0,0,0,0.75);">    
            <section class="py-2 px-2">
              <!-- Classic tabs -->
                <div class=" mx-2">
                  <ul class="nav nav-pills" id="myClassicTabShadow" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link text-dark  waves-light active show" id="nosotros-tab-classic-nostros" data-toggle="tab" href="#nostros-classic-nostros"
                        role="tab" aria-controls="nosotros-classic-nosotros" aria-selected="true">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark waves-light" id="historia-tab-classic-historia" data-toggle="tab" href="#historia-classic-historia"
                        role="tab" aria-controls="historia-classic-historia" aria-selected="false">Nuestra historia</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark waves-light" id="instalaciones-tab-classic-instalaciones" data-toggle="tab" href="#instalaciones-classic-instalaciones"
                        role="tab" aria-controls="instalaciones-classic-instalaciones" aria-selected="false">Instalaciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark waves-light" id="servicios-tab-classic-servicios" data-toggle="tab" href="#servicios-classic-servicios"
                        role="tab" aria-controls="servicios-classic-servicios" aria-selected="false">Servicios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark waves-light" id="futbol-tab-classic-futbol" data-toggle="tab" href="#futbol-classic-futbol"
                        role="tab" aria-controls="futbol-classic-futbol" aria-selected="false">Equipo de fútbol</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  text-dark waves-light" id="seguro-tab-classic-seguro" data-toggle="tab" href="#seguro-classic-seguro"
                        role="tab" aria-controls="seguro-classic-seguro" aria-selected="false">Seguro</a>
                    </li>    
                  </ul>
                  <div class="tab-content " id="myClassicTabContentShadow">
                    <div class="tab-pane fade active show" id="nostros-classic-nostros" role="tabpanel" aria-labelledby="nostros-tab-classic-nostros">
                     <?php include "components/nosotros.php";?>
                    </div>
                    <div class="tab-pane fade " id="historia-classic-historia" role="tabpanel" aria-labelledby="historia-tab-classic-historia">
                      <?php include "components/historia.php";?>
                    </div>
                    <div class="tab-pane fade " id="instalaciones-classic-instalaciones" role="tabpanel" aria-labelledby="instalaciones-tab-classic-instalaciones">
                      <?php include "components/instalaciones.php";?>
                    </div>
                    <div class="tab-pane fade" id="servicios-classic-servicios" role="tabpanel" aria-labelledby="servicios-tab-classic-servicios">
                      <?php include "components/servicios.php";?>
                    </div>
                    <div class="tab-pane fade" id="futbol-classic-futbol" role="tabpanel" aria-labelledby="futbol-tab-classic-futbol">
                      <?php include "components/futbol.php";?>
                    </div>
                    <div class="tab-pane fade" id="seguro-classic-seguro" role="tabpanel" aria-labelledby="seguro-tab-classic-seguro">
                      <?php include "components/seguro.php";?>
                    </div>
                  </div>

                </div>
              <!-- Classic tabs -->
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
