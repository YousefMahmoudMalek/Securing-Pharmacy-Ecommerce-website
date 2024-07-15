<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$directory = "pages/";
$files = glob($directory. "*.php");
$fileName = $directory . $page . '.php';

if(in_array($fileName, $files)){
    require($fileName);
}
else{
    echo "Page not found!";
    echo "Note to self: remeber to make this prettier";
}

