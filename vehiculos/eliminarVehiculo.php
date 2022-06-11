<?php


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

sleep(3);

if ($_SERVER['REQUEST_METHOD'] != 'DELETE') {
    http_response_code(400);
    echo "Verbo No Autorizado";
    die();
};


$objeto = json_decode(file_get_contents('php://input'), true);

if (isset($objeto['id'])==false || $objeto['id'] == 666 || $objeto['id'] == "666") {
    http_response_code(400);
    echo "Error No se pudo procesar";
    die();
}

echo "Exito";
die();




?>