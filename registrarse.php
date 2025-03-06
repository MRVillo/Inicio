<?php
include_once("cCliente.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Datos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            text-align: left;
            display: block;
            margin-top: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input:focus {
            border-color: #4ca1af;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        button {
            background: #4ca1af;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            width: 48%;
        }

        button:hover {
            background: #2c3e50;
        }

        .back-link {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Registrar Datos</h2>
        <form id="form1" name="form1" method="post" action="recibedatos.php">
            <label for="Cedula">Cédula</label>
            <input name="Cedula" type="text" id="Cedula" required>

            <label for="Nombres">Nombres</label>
            <input name="Nombres" type="text" id="Nombres" required>

            <label for="Apellidos">Apellidos</label>
            <input name="Apellidos" type="text" id="Apellidos" required>

            <label for="Direccion">Dirección</label>
            <input name="Direccion" type="text" id="Direccion" required>

            <label for="Email">Email</label>
            <input name="Email" type="email" id="Email" required>

            <label for="Celular">Celular</label>
            <input name="Celular" type="text" id="Celular" required>

            <div class="btn-container">
                <button type="submit">Guardar</button>
                <a href="index.php" class="back-link">Regresar</a>
            </div>
        </form>
    </div>

</body>
</html>
