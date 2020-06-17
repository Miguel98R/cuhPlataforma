<?php 

if(!isset($_SESSION)){
    session_start();
}


$conn = new mysqli('localhost','root','','materias');
//$conn = new mysqli('sql311.tonohost.com','ottos_25548322','WYMIKE98','ottos_25548322_materias');


// if(isset($conn)){
//     echo "Conexion exitosa";
// }else{
//     echo "Problemas al realizar conexion con la base de datos";
// } 
 


?>