<?php
include './config/db.php';
$cuenta_query = $conn->query("SELECT COUNT(*) FROM t_libro WHERE titulo LIKE '" . $param . "%'");
$filas        = $cuenta_query->fetch_row();

$seleccion    = $conn->query("SELECT titulo, autor, DOI FROM t_libro WHERE titulo LIKE '" . $param . "%'");
?>
<div class="container">
<?php
    if($filas[0] != 0){
    if($filas[0] != 102){
?>
    <h1 class="text-center">
        Existen 
        <?php echo $filas[0] . ($filas[0] > 1 ? " libros" : " libro");?> 
        <?php echo ($filas[0] > 1 ? " cuyos titulos comienzan" : "cuyo titulo comienza");?> cómo <?php echo $param;?>
    </h1>
<?php
    }else{
?>
    <h1 class="text-center">Mostrando todos los libros.</h1>
<?php
    }
?>
</div>
<div class="container">
<table class="table table-striped table-dark table-bordered table-hover">
<caption>Libros encontrados.</caption>
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">DOI</th>
        </tr>
    </thead>
    <tbody>
<?php
    $counting = 1;
    while($row = $seleccion->fetch_assoc()){
?>
    <tr>
      <th scope="row"><?php echo $counting; ?></th>
      <td><?php echo $row['titulo'];?></td>
      <td><?php echo $row['autor'];?></td>
      <td><?php echo $row['DOI'];?></td>
    </tr>
<?php
    $counting++;
    }
?>
    </tbody>
    </table>
</div>
<?php
}else{
?>
    <h1 class="text-center">No se encontró ningún libro con la inicial <?php echo $param;?></h1>
<?php
    }
?>
</div>