<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senatareas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<?php
session_start()
?>

<body>
    <header>
        <div class="navbar">
            <div class="titulo">
                <a href="../index.php">
                    <h1>
                        SenaTareas
                    </h1>
                </a>
            </div>
            <div class="enlaces">
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                ?>
                    <a href="/FUNCIONES/cerrar_seccion.php">Cerrar Sesion</a>
                <?php
                } else {
                    echo '<a href="/login.php">Iniciar Sesion</a>';
                    echo '<a href="/FUNCIONES/insertar_registro.php">Crear Cuenta</a>';
                }
                ?>
            </div>
        </div>

    </header>