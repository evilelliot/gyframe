<?php
include './routes/rutas.php';
include './helpers/routeVerify.php';
include './helpers/render.php';


$path    = explode('/', $_SERVER['REQUEST_URI']);
$page    = (count($path) == 3 ? $path[2] : "404");
$param   = (count($path) == 4 ? $path[3] : "nan");
$rpage   = (strlen($page) == 0 ? "inicio" : $page);

if(routeVerify($rpage, $rutas) && $param == "nan"){
    render($rpage);    
}else if($param != "nan"){
    render($path[2], $param);
}else{
    render($rpage);
}
?>