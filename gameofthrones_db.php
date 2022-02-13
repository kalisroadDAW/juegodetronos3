<!DOCTYPE html>
<html>
   <head>
      <title>Título de mi página web</title>
   </head>

   <style>

       table {

        width: 200px;
        border: 1px solid;
        text-align: left;
        
       }

      

   </style>
   <body>

   <?php

   //Realizamos la conexión con la base de datos

   

   //Realizamos la conexión con la base de datos

   

   $db_host="localhost";
   $db_name="gameofthrones";
   $db_user="root";
   $db_pass="Bobmarleynesta1";   

   $conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

   if (mysqli_connect_errno()){ //definimos un mensaje en case de error
       echo "Error al conectar con la base de datos";
       exit();}
  

   mysqli_set_charset($conexion,"ufb8"); //usamos la función mysqli_set_charset para prevenir que no se ejecuten determinados caracteres como la ñ
   



   

   


   

   ?>

   </body>


</html>
