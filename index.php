<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Sistema</title>
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

        .menu-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .menu-list {
            list-style: none;
        }

        .menu-list li {
            margin: 10px 0;
        }

        .menu-list a {
            display: block;
            padding: 10px;
            background: #4ca1af;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .menu-list a:hover {
            background: #2c3e50;
        }
    </style>
</head>
<body>

    <div class="menu-container">
        <h2>Menú del Sistema</h2>
        <ul class="menu-list">
            <li><a href="registrarse.php">Registrarse</a></li>
            <li><a href="consultardatos.php">Consultar</a></li>
            <li><a href="#">Mostrar Todo</a></li>
            <li><a href="#">Actualizar</a></li>
        </ul>
    </div>

</body>
</html>

