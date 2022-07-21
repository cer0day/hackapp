<?php 
    $herramientas=[];
	$id_tema="";
	$nombre="";
    echo "<option value=''>Selecione la herramienta</option>";
	$idFase=$_POST['idFase'];
	date_default_timezone_set('Mexico/General');
	include 'conexion.php';
	
	if($idFase==""){
        $sql = mysqli_query($cx,"SELECT * FROM herramientas WHERE 1");		
		while($row=mysqli_fetch_row($sql)){
			$id_herramienta=$row[0];
            $nombre=$row[1];
			echo "<option value=$id_herramienta>$nombre</option>";
		}
    }else{
        $sql = mysqli_query($cx,"SELECT herramientas.id_herramienta, herramientas.nombre_herramienta FROM herramientas, comandos WHERE
        comandos.id_herramienta=herramientas.id_herramienta AND comandos.id_fase=$idFase");		
		while($row=mysqli_fetch_row($sql)){
			$id_herramienta=$row[0];
            $nombre=$row[1];
            
            //Para que la herramienta no se duplique, la almacenamos en un array, y cada que se lista verificamos
            if(!in_array($nombre, $herramientas)){
                array_push($herramientas, $nombre);
                echo "<option value= $id_herramienta>$nombre</option>";
            }
		}
    }
?>