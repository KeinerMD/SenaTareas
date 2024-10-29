<?php 
include 'includes/header.php'; 
/*hender*/?>

<div class="form_fondo">
    <div class="form_registro">
        <form action="" method="post">
            <fieldset class="fieldset">
                <legend class="legend">CREAR CUENTA</legend>
                <div class="camposRegistro">
                <div class="campo">
                    <label for="identifica">Identificacion</label>
                    <input type="text" id="identifica" name="identifica" placeholder="identificacion" require>
                </div>

                <div class="campo">
                    <label for="nombre1">Primer nombre</label>
                    <input type="text" id="nombre1" name="nombre1" placeholder="escriba su primer nombre" require>
                </div>

                <div class="campo">
                    <label for="nombre2">Segundo nombre</label>
                    <input type="text" id="nombre2" name="nombre2" placeholder="escriba su segundo nombre" require>
                </div>

                <div class="campo">
                <label for="apellido1">Primer apellido</label>
                <input type="text" id="apellido1" name="apellido1" placeholder="escriba su apellido paterno" require>
                </div>

                <div class="campo">
                    <label for="apellido2">Segundo apellido</label>
                    <input type="text" id="apellido2" name="apellido2" placeholder="escriba su apellido materno" require>
                </div>

                <div class="campo">
                    <label for="fecha_nac">Fecha_nacimiento</label>
                    <input type="date" id="fecha_nac" name="fecha_nac" placeholder="escriba su fecha de nacimiento" require>
                </div>

                <div class="campo">
                    <label for="celular">Contacto</label>
                    <input type="text" id="celular" name="celular" placeholder="escriba su numero de contacto" require>
                </div>

                <div class="campo">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" placeholder="example@correo.com" require>
                </div>

                </div>
                <div class="campo">                     
                    <label for="rol">Selecciona tu Rol</label>                     
                    <select id="rol" name="rol" required>                         
                        <option value="" disabled selected>Seleccione un rol</option>                         
                        <option value="Aprendiz">Aprendiz</option>                     
                        <option value="Instructor">Instructor</option>                
                    </select>                 
                </div>

                <div class="campo">
                    <label for="contra">Contraseña</label>
                    <input type="password" id="contra" name="contra" placeholder="escribe una clabe segura" require>
                </div>

                <div class="campo">
                    <input type="submit" value="CREAR CUENTA" class="btn">
                </div>

                </div>
            </fieldset>
        </form>

    </div>

</div>

<?php

function capturarDatos()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        return $_POST;
    }
}

include 'includes/footer.php';