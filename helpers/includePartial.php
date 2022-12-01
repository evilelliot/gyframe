<?php
function includePartial($filePath, $variables = array(), $print = true){
    $output = NULL;
    $file = "./partials/" . $filePath;
    if(file_exists($file)){
        extract($variables);
        ob_start();
        include $file;
        $output = ob_get_clean();     
    }else{
        echo __DIR__;
    }
    if ($print) {
        print $output;
    }
    return $output;

}

?>