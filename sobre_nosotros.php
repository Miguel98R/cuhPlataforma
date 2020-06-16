<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Centro Universitario Hidalguense</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Start your project here-->  
  
<?php include "components/header.php";?>

<div class="container-fluid">
  <div class=" contenedor text-center">
      
    <?php include "components/nav.php";?>
      
    <section class="py-2 px-2">
        <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        
    <a class="nav-link active" id="v-pills-nosotros-tab" data-toggle="pill" href="#v-pills-nosotros" role="tab"
        aria-controls="v-pills-nosotros" aria-selected="true">Sobre nosotros</a>

      <a class="nav-link" id="v-pills-historia-tab" data-toggle="pill" href="#v-pills-historia" role="tab"
        aria-controls="v-pills-historia" aria-selected="false">Nuestra historia</a>
      
        <a class="nav-link" id="v-pills-instalacion-tab" data-toggle="pill" href="#v-pills-instalacion" role="tab"
        aria-controls="v-pills-instalacion" aria-selected="false">Instalaciones</a>
      
        <a class="nav-link" id="v-pills-servicios-tab" data-toggle="pill" href="#v-pills-servicios" role="tab"
        aria-controls="v-pills-servicios" aria-selected="false">Servicios</a>
   
        <a class="nav-link" id="v-pills-futbol-tab" data-toggle="pill" href="#v-pills-futbol" role="tab"
        aria-controls="v-pills-futbol" aria-selected="false">Equipo de fútbol</a>
  
        <a class="nav-link" id="v-pills-seguro-tab" data-toggle="pill" href="#v-pills-seguro" role="tab"
        aria-controls="v-pills-seguro" aria-selected="false">Seguro</a>

    </div>
  </div>

  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      
        <div class="tab-pane fade show active" id="v-pills-nosotros" role="tabpanel" aria-labelledby="v-pills-nosotros-tab"><?php include "components/nosotros.php";?></div>
      
        <div class="tab-pane fade" id="v-pills-historia" role="tabpanel" aria-labelledby="v-pills-historia-tab"><?php include "components/historia.php";?></div>
      
        <div class="tab-pane fade" id="v-pills-instalacion" role="tabpanel" aria-labelledby="v-pills-instalacion-tab"><?php include "components/instalaciones.php";?></div>
      
        <div class="tab-pane fade" id="v-pills-servicios" role="tabpanel" aria-labelledby="v-pills-servicios-tab"><?php include "components/servicios.php";?></div>
      
        <div class="tab-pane fade" id="v-pills-futbol" role="tabpanel" aria-labelledby="v-pills-futbol-tab"><?php include "components/futbol.php";?></div>
      
        <div class="tab-pane fade" id="v-pills-seguro" role="tabpanel" aria-labelledby="v-pills-seguro-tab">...</div>
      
       
    </div>
  </div>
</div>
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
