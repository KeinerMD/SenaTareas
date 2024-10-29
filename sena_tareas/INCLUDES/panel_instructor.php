<div class="contenedor_instructor">
    <h2>Aprendices de Programación de Software</h2>
    <?php
    require __DIR__ . '/consultar_apredices.php';
    $query = consultarAprendices();
    if ($query) {
        while ($resultado = mysqli_fetch_assoc($query)) {
            $fecha_nac = new DateTime($resultado['edad']);
            $fecha_act = new DateTime();
            $años = $fecha_act->diff($fecha_nac);
            $edad = $años->y;
    ?>
    <div class="registro">
        <div class="registro-item">
            <span class="icono">🆔</span>
            <span>Identificación: </span>
            <span class="dato"><?php echo ($resultado['cod']); ?></span>
        </div>
        <div class="registro-item">
            <span class="icono">👤</span>
            <span>Nombre: </span>
            <span class="dato"><?php echo ($resultado['nombre']); ?></span>
        </div>
        <div class="registro-item">
            <span class="icono">🎂</span>
            <span>Edad: </span>
            <span class="dato"><?php echo ($edad); ?></span>
        </div>
        <div class="registro-item">
            <span class="icono">📞</span>
            <span>Celular: </span>
            <span class="dato"><?php echo ($resultado['celular']); ?></span>
        </div>
        <div class="registro-item">
            <span class="icono">📧</span>
            <span>Email: </span>
            <span class="dato"><?php echo ($resultado['email']); ?></span>
        </div>
    </div>
    <?php
        }
    } else {
        echo ('<p class="no-registros">No se encontraron registros</p>');
    }
    ?>
</div>
