<?php
include_once("cCliente.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST["Cedula"];
    $nombres = $_POST["Nombres"];
    $apellidos = $_POST["Apellidos"];
    $direccion = $_POST["Direccion"];
    $email = $_POST["Email"];
    $celular = $_POST["Celular"];

    $cliente = new cCliente(); 
    $cliente->registrar_cliente($cedula, $nombres, $apellidos, $direccion, $email, $celular);
}
?>
