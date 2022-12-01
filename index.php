<?php
include './routes/rutas.php';
include './helpers/routeVerify.php';
include './helpers/render.php';


$path   = explode('/', $_SERVER['REQUEST_URI']);
$page   = (count($path) == 3 ? $path[2] : "404");
$rpage  = (strlen($page) == 0 ? "inicio" : $page);

if(routeVerify($rpage, $rutas)){
    render($rpage);    
}else{
    render($rpage);
}
?>