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

    <a class="d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks" href="#cabeza"> <img title="Ir al inicio"
            style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/top.png"></a>

    <header id="cabeza">
        <?php include("components/navAlumno.php");?>
        <div class="container-fluid cabeza">
            <div class="container-fluid ">
                <h2 class="text-white font-weight-bolder text-center justify-content-center align-content-center py-5"
                    style=" font-size:50px;">Plataforma CUH
                </h2>
                <?php
 	session_start();
 	$user = $_SESSION['userName'];

 	if (!isset($user)) {
 		header("location: index.php");
 	}else{
         include("util/conexion.php");
         
         $consulta ="SELECT * FROM alumnos t1 INNER JOIN usuarios t2 ON t1.id_usuario = t2.id WHERE t2.userName = '$user'";
         $result=mysqli_query($conn,$consulta);


        $datos=$result->fetch_assoc();

        $texto_completo = $datos['nombre'] ." ". $datos['apellido_p']." ". $datos['apellido_m'];

        ?>
                <h4 class="text-white font-weight-bolder text-center justify-content-center align-content-center ">
                    Bienvenido(a):
                    <?php echo $texto_completo ?></h4>
                <?php }
                 
                 mysqli_free_result($result);
                 mysqli_close($conn);
                // session_destroy();
                ?>



            </div>


        </div>

    </header>

        <div class="container">

       <div class="container-fluid">
  <div class=" contenedor text-center">
      
   
      
    <section class="py-2 px-2">

    <!-- Classic tabs -->
<div class="classic-tabs mx-2">

  <ul class="nav tabs-cyan" id="myClassicTabShadow" role="tablist">
    <li class="nav-item">
      <a class="nav-link  waves-light active show" id="profile-tab-classic-shadow" data-toggle="tab" href="#profile-classic-shadow"
        role="tab" aria-controls="profile-classic-shadow" aria-selected="true">Datos personales</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow"
        role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Historial academico</a>
    </li>
     <li class="nav-item">
      <a class="nav-link waves-light" id="contact-tab-classic-shadow" data-toggle="tab" href="#adeudo-classic-shadow"
        role="tab" aria-controls="adeudo-classic-shadow" aria-selected="false">Adeudo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="contact-tab-classic-shadow" data-toggle="tab" href="#contact-classic-shadow"
        role="tab" aria-controls="contact-classic-shadow" aria-selected="false">Proceso de titulación</a>
    </li>
     <li class="nav-item">
      <a class="nav-link waves-light" id="servicio-tab-classic-shadow" data-toggle="tab" href="#servicio-classic-shadow"
        role="tab" aria-controls="servicio-classic-shadow" aria-selected="false">Servicio social</a>
    </li>
    
  </ul>

  <div class="tab-content " id="myClassicTabContentShadow">
    <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">
     <?php  include ("components/datosPersonales.php"); ?>
   
    </div>
    <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
       <?php  include ("components/historialAcademico.php"); ?>
    </div>
    <div class="tab-pane fade text-white" id="adeudo-classic-shadow" role="tabpanel" aria-labelledby="adeudo-tab-classic-shadow">
       <h2 class="py-5 text-white">Adeudo</h2>
      <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, totam obcaecati atque inventore reprehenderit facilis. Quidem, in sed. Nam, eum est. Reiciendis cum perferendis sunt officia, illum et quidem blanditiis.  </p>
      <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, totam obcaecati atque inventore reprehenderit facilis. Quidem, in sed. Nam, eum est. Reiciendis cum perferendis sunt officia, illum et quidem blanditiis.  </p>
   
    </div>
    <div class="tab-pane fade text-white" id="contact-classic-shadow" role="tabpanel" aria-labelledby="contact-tab-classic-shadow">
       <h2 class="py-5 text-white">Proceso de titulación</h2>
      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum distinctio praesentium consectetur iure, voluptates reiciendis minima sit, est molestias suscipit, laboriosam libero error consequuntur rerum in odit fuga. Pariatur.  </p>
     <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum distinctio praesentium consectetur iure, voluptates reiciendis minima sit, est molestias suscipit, laboriosam libero error consequuntur rerum in odit fuga. Pariatur.  </p>
    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum distinctio praesentium consectetur iure, voluptates reiciendis minima sit, est molestias suscipit, laboriosam libero error consequuntur rerum in odit fuga. Pariatur.  </p>
   
    </div>
    <div class="tab-pane fade text-white" id="servicio-classic-shadow" role="tabpanel" aria-labelledby="servicio-tab-classic-shadow">
       <h2 class="py-5 text-white">Servicio social</h2>
      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum distinctio praesentium consectetur iure, voluptates reiciendis minima sit, est molestias suscipit, laboriosam libero error consequuntur rerum in odit fuga. Pariatur.  </p>
    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum distinctio praesentium consectetur iure, voluptates reiciendis minima sit, est molestias suscipit, laboriosam libero error consequuntur rerum in odit fuga. Pariatur.  </p>
    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum distinctio praesentium consectetur iure, voluptates reiciendis minima sit, est molestias suscipit, laboriosam libero error consequuntur rerum in odit fuga. Pariatur.  </p>
   
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat alias at molestiae excepturi, sed ab dolorum eos. Voluptatibus accusamus aut magnam quasi eius perspiciatis fugiat placeat? Earum error inventore temporibus.  </p>
    </div>
    
  </div>

</div>
<!-- Classic tabs -->
        
    </section>


  </div>

</div>
        
        
        </div>



   

    <?php include ("components/footer.php");?>

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
