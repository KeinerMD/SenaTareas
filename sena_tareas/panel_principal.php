<div class="panel">
    <?php
    include 'includes/header.php';
    ?>
    <div class="bienvenida">
        <p>Bienvenido, <span><?php echo $_SESSION['rol'] . ' ' . $_SESSION['nombre']; ?></span></p>
    </div>
    <?php
    if ($_SESSION['rol'] == 'Instructor') {
        require __DIR__ . '/includes/panel_instructor.php';
    } else {
        require __DIR__ . '/includes/panel_aprendiz.php';
    }
    ?>
    <div class="cerrar-sesion">
        <a href="./FUNCIONES/cerrar_seccion.php">Cerrar Sesión</a>
    </div>
</div>