<?php
function routeVerify($route, $rutas){
    $r = false;
    foreach($rutas as &$ruta){
        if($ruta == $route){
            $r = true;
        }
    }
    return $r;
}
?>