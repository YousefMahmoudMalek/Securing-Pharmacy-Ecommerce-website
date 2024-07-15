<?php
$pagesDirectory = "../private/pages/";

include ($pagesDirectory . "functions.php");

$page = isset($_GET['url']) ? $_GET['url'] : 'home';


$files = glob($pagesDirectory . "*.php");
$fileName = $pagesDirectory . $page . '.php';

if (in_array($fileName, $files)) {
    require ($fileName);
} else {
    echo "Page not found!";
    echo "Note to self: remeber to make this prettier";
}

