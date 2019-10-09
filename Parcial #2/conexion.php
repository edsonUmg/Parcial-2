<?php
  //Conexion con BD
  $conexion= mysqli_connect('localhost','root','sadstatue21');
  mysqli_select_db($conexion,'formulario')or die("problemas al conectar con la base de datos");
   //recuperar las variables
 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $mensaje=$_POST['mensaje'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO datos VALUES('$nombre',
           '$correo',
           '$mensaje')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($conexion,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
  
?>