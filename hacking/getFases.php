<?php 
	echo "<option value=''>Seleccione la fase</option>";
	date_default_timezone_set('Mexico/General');
	include 'conexion.php';
	$sql = mysqli_query($cx,"SELECT * FROM fases WHERE 1");		
	while($row=mysqli_fetch_row($sql)){
		$id_seccion=$row[0];
        $nombre=$row[1];
		echo "<option value='$id_seccion'>$nombre</option>";
            
	}

?>