<?php



$conexion = mysqli_connect("localhost","root","pelos2012","vetdog");

$query = $conexion->query("SELECT * FROM pet_type");

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_tiM']. '">' . $row['noTiM'] . '</option>' . "\n";

}



?>
