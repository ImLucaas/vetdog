<?php

$conexion = mysqli_connect("localhost","root","pelos2012","vetdog");

$query = $conexion->query("SELECT * FROM category");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_cate']. '">' . $row['nomcate'] . '</option>' . "\n";
}
