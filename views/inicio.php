<?php
include './config/db.php';
$cuenta_query = $conn->query("SELECT COUNT(*) FROM t_libro");
$filas        = $cuenta_query->fetch_row();
?>
<div class="container" style="margin-top: 100px;">
    <h1 class="text-center">Tenemos almacenados <span class="text-success"><?php echo $filas[0];?></span> libros en este momento.</h1>
    <h3 class="text-center text-info">
        Revisa nuestra sección de <a href="test">testing</a> para probar el funcionamiento.
    </h3>
</div>
