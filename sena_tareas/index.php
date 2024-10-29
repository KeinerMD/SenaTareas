<?php
include 'includes/header.php';
?>


<div class="main-container">
    <div class="header-image">
    </div>
    <div class="text-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/wfMRnvWj8K8?si=A5O2Y-JW5Rg9jhR0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="frases">
        <?php
        include './INCLUDES/conexion_bd.php';
        include 'frases.php';
        echo $fraseAleatoria
        ?>
    </div>
</div>


<?php include 'INCLUDES/footer.php' ?>