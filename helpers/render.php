<?php
include './helpers/includePartial.php';

function render($view){
    $fullview = "./views/" . $view . ".php";
    $data = array("title" => $view);
    includePartial("layout.php", $data, true);
    includePartial("navbar.php", $data, true);
    if(file_exists($fullview)){
        include $fullview;
    }else{
        include "./views/errors/404.php";
    }
}

?>