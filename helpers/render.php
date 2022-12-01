<?php
include './helpers/includePartial.php';

function render($view, $param = null){
    $fullview = "./views/" . $view . ".php";
    $data = array("title" => $view);
    
    
    includePartial("layout.php", $data, true);
    includePartial("navbar.php", $data, true);
    if($param != null){
        $data = array("title" => $view, "param" => $param);
    }
    if(file_exists($fullview)){
        include $fullview;
    }else{
        include "./views/errors/404.php";
    }
}
?>