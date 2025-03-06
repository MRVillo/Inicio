<?php 
$cedula = $_POST['Cedula'];
$nombres = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];
$direccion = $_POST['Direccion'];
$email = $_POST['Email'];
$celular = $_POST['Celular'];

include_once("Cservicios.php");
$objconsulta = new cClientes();
$result = $objconsulta->registrar_cliente($cedula, $nombres, $apellidos, $direccion, $email, $celular);
if($result=""){
echo "error";
}