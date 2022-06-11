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

if ($_SERVER['REQUEST_METHOD'] != 'GET') die();



echo '[{"id":1, "fabricante":"Ford", "modelo":"Focus", "añoLanzamiento":1998, "cantidadPuertas":2},{"id":666, "fabricante":"Volkswagen", "modelo":"Vento/Polo", "añoLanzamiento": 2010,"cantidadPuertas":4},{"id":2, "fabricante":"Fiat", "modelo":"Uno", "añoLanzamiento": 1983,"cantidadPuertas":2},{"id":3, "fabricante":"Volkswagen", "modelo":"Amarok", "añoLanzamiento":2010 ,"transmision4x4":"SI"},{"id":4, "fabricante":"Ford", "modelo":"F150", "añoLanzamiento":2015 ,"transmision4x4":"NO"},{"id":5, "fabricante":"GMC", "modelo":"Sierra 1500", "añoLanzamiento": 2010,"transmision4x4":"SI"}]';


?>