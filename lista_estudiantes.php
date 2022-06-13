<?php
require_once('estudiantes.php');
$Estudiantes=new Estudiantes();//INSTANCIAR
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de estudiantes</title>
	<style>
	th{
		padding:5px;
		background:#14171a;
		color:#f6eae7;
	} 
	th{
		padding:5px;
		border:solid 1px #130d09;
	}
	table{
		width:80%;
		border-collapse:collapse;
	}
	a{
     background:#c3c34c;
    text-decoration:none;
    color:black;
    font-family:Arial;
    paddin:6px;
    border-radius:5px;
	}
	img{
		width:20px;
	}
	</style>
</head>
<body>
	<H1>lista estudiantes</H1>
	<table border="1" align="center">
		 <tr> 
			<th>nombres</th>
			<th>apellidos</th>
			<th>cedulas</th>
            <th>edades</th>
            <th>ciudades</th>
            <th>acciones</th>


		</tr>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>{$c['est_nombres']}</td>
  			<td>{$c['est_apellidos']}</td>
  			<td>{$c['est_cedula']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_ciudad']}</td>
  			<td>
  			<a href='' >
             <img src='lapiz.png' />
  			</a> 
  			<a href='' >
  			<img src='basurero.png' />
  			</a>
  			<a href='' >
  			</td>
  			</tr>";
  }
   ?>	
	</table>
</body>
</html>
