<?php include "components/head.php";?>
<body>

<header class="py-4 px-2">
<!-- Image and text -->
<div class="row ">
 <div class="col-md-4 col-sm-12 col-lg-4 col-12 text-center py-2">
      &nbsp;<img class=" px-1" src="./img/escudoHidalgo.png" alt="" srcset="" width="110" height="110">&nbsp;
     &nbsp; <img class=" px-1"  src="./img/logoHidalgo.png" alt="" srcset="" width="130" height="110">&nbsp;

  </div>
 
 <div class="col-md-8 col-sm-12 col-lg-8 col-12 text-center py-2">
     <h1 class="text-white text-center" style="font-family: Times New Roman ; font-style: italic;">CENTRO UNIVERSITARIO HIDALGUENSE </h1>
   <h4 class="text-white text-center" style="font-family: Arial;">LA SABIDURÍA ES NUESTRA FUERZA</h4>

  </div>
 
</div>
    
</header>
    <div class="container ">
        

        <section class="py-5">
            <div class="row">
                    <div class="col-md-5">
                          <div class="text-center py-2"  >
                            <img src="./img/LOGO-CUH.png" width="350" height="350">
                             </div>

                    </div>
                    <div class="col-md-7 ">
                        <h2 class="text-white font-weight-bolder text-center  justify-content-center align-content-center "
                    style=" font-size:50px;">Plataforma CUH
                </h2>
                         <blockquote class="blockquote mb-0">
                          <!-- Card -->
<div class="card " style="width: 600px; height: 400px;" >
     <?php 
    include("util/conexion.php");
           if(isset($_SESSION['mensaje'])) {?>
    <div class="alert alert-<?= $_SESSION['mensaje_type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensaje'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php session_unset(); }?>

  <!-- Card body -->
  <div class="card-body " >

    <!-- Material form register -->
    <form action="util/loginValidacion.php" method="POST" autocomplete="off" >
       
      <h2 class="light-blue-text text-center py-4 ">Iniciar sesión</h2>

      <!-- Material input text -->
      <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="user" name="user" class="form-control">
        <label for="materialFormCardNameEx" class="font-weight-light">Correo institucional</label>
      </div>

      

      <!-- Material input password -->
      <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="psw" name="psw" class="form-control">
        <label for="materialFormCardPasswordEx" class="font-weight-light">Contraseña</label>
      </div>

      <div class="text-center py-4 mt-3">
        <button class="btn btn-cyan" type="submit">Entrar</button>
      </div>
    </form>
    <!-- Material form register -->

  </div>
  <!-- Card body -->

</div>
<!-- Card -->
</blockquote>
                    </div>

            </div>
          
             

          


        </section>

 
    
            

    </div>


    <?php include("components/footer.php");?>








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