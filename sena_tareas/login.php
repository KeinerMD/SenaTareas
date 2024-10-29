<?php
include 'includes/header.php';
?>

<div class="login-container">
    <div class="image-container">
        <div class="img_login">
            <img src="/IMG/logoSenaNaranja.png" alt="logo_sena">
        </div>
        <div class="container1">
            <form action="" method="post">
                <fieldset class="fieldset1">
                    <legend class="legend1">Iniciar Sesión</legend>
                    <label for="usu" class="label1">Usuario</label>
                    <input type="text" placeholder="Example@correo.com" id="usu" required name="email">
                    <label for="pass" class="label1">Contraseña</label>
                    <input type="password" name="contra" id="pass" placeholder="Contraseña" required>
                    <button type="submit">Iniciar Sesión</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $password = $_POST['contra'];

    try {
        require 'includes/conexion_bd.php';

        $sql = "SELECT email, contra, rol FROM usuarios WHERE email='$correo'";
        $consulta = mysqli_query($coneccion, $sql);
        $result = mysqli_fetch_assoc($consulta);

        if ($_POST['contra'] == $result['contra']) {
            $_SESSION['nombre'] = $result['nombre'];
            $_SESSION['rol'] = $result['rol'];
            $_SESSION['login'] = true;
            header('location: panel_principal.php');
        } else {
            echo ('Usuario Y/O contraseña Incorectos');
        }
    } catch (\Throwable $th) {
        echo ($th);
    }
}

?>
<?php
include 'includes/footer.php';
?>