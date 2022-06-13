<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
   h1{
    background:#EEFFDB;/*color de fondo*/

    color:#66101F;/* color del texto */

    border:solid 2px black;

    border-radius:8px;

    text-align:center;

    box-shadow:10px 10px 20px black;

    font-family:Arial;

   }
   .menu{
    background:#ABC8C0;
    text-decoration:none;
    color:black;
    font-family:Arial;
    paddin:6px;
    border-radius:5px;

   }
   .menu:hover{
    background:white;
    color:black;
    transition:0.2s;
    border:solid;
   }
  </style>
  </head>
  

<body>
   <h1>Menu Principal</h1>
  <center><img src="dinosaurio.jpg"></center>
   <center><a class="menu" href="lista_estudiantes.php">Estudiantes</a></center>
   <center><a class="menu" href="lista_usuarios.php">Usuarios</a></center>
</body>
</html>