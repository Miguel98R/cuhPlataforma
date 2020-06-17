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


    <div class="container-fluid ">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center justify-content-center align-content-center">
                <div class=" text-center my-5 login ">
                    <div class="text-center  px-5">
                        <img src="./img/LOGO-CUH.png" width="200" height="200" alt="">
                    </div>
                    <div class="text-center ">
                        <h2 class="font-weight-bolder text-white">Iniciar sesión</h2>
                    </div>

                    <form action="util/loginValidacion.php" method="POST" onsubmit="return validar();">
                        <div class="text-center py-3 px-5">
                            <div class="py-2"><input class="inputDato" type="text" id="user" name="user"
                                    placeholder="Ingresa tu usuario"></div>
                            <div><input class="inputDato" type="password" id="psw" name="psw"
                                    placeholder="Ingresa tu contraseña">
                            </div>


                        </div>
                        <div class="py-3">
                            <button class="btn btn-info " type="submit">Entrar</button>
                        </div>



                    </form>



                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

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