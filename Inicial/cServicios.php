class cCliente
{
	

	function registrar_cliente($cedula,$nombres,$apellidos,$direccion,$email,$celular)
	{
        $conexion = new mysqli("127.0.0.1", "root", "","baseejemplo");
        if ($conexion->connect_error) {
          die("conexion fallida" . $conexion->connect_error);
        }
        $sql="CALL insertar_clientes7('$cedula','$nombres','$apellidos','$direccion','$email','$celular')";
        if($conexion->query($sql)==TRUE){
          echo "datos insertados correctamente";
        }
        else{
                echo "error al insertar los datos" . $conexion->error;

        }

           include_once("index.php");
	}
	
}
?>