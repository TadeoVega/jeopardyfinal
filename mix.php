<?php
	$name= $_POST['nombre'];
	$puntos= $_POST['puntos'];
	$mysql=mysqli_connect('localhost', 'root', '', 'usuarios');
	mysqli_query($mysql, "INSERT INTO `mix` (`Nombre`, `Punt`) VALUES ('$name', '$puntos')");
	$ej_sen=mysqli_query($mysql, 'SELECT * FROM `mix` ORDER BY `mix`.`Punt` DESC');
	$L_usu=mysqli_fetch_array($ej_sen);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARCADOR</title>
	<link rel='stylesheet' type='text/css' href='stylesheet.css'>
</head>
<body>
	<h1> PUNTAJE GEOMETRIA </h1>
	<table>
		<tr>
			<th>Usuario</th>
			<th>Puntos</th>
		</tr>
		<?php
			for ($i=0; $i<$L_usu; $i++) { 
				echo '<tr>';
				echo '<td>';
				echo $L_usu['Nombre'];
				echo '</td>';
				echo '<td>';
				echo $L_usu['Punt'];
				echo '</td>';
				echo '</tr>';
				$L_usu=mysqli_fetch_array($ej_sen);
			}
		?>
	</table>
</body>
</html>