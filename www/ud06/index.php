<?php

// require 'flight/Flight.php';
require 'flight/autoload.php';

Flight::route('/', function () {
    echo 'hello world!';
});


// Conexión a la base de datos
Flight::register("db", "PDO", array("mysql:host=db;dbname=pruebas", "root", "test"));



//obtenemos clientes
Flight::route('/clientes', function () {
    $setencia = Flight::db()->prepare("SELECT * from clientes");
     $setencia->execute();
     $datos=$setencia->fetchAll(PDO::FETCH_ASSOC);
     Flight::json($datos);
});


//obtenemos hoteles
Flight::route('/hoteles', function () {
    $setencia = Flight::db()->prepare("SELECT * from hoteles");
     $setencia->execute();
     $datos=$setencia->fetchAll(PDO::FETCH_ASSOC);
     Flight::json($datos);
});


//obtenemos reservas
Flight::route('/reservas', function () {
    $setencia = Flight::db()->prepare("SELECT * from reservas");
     $setencia->execute();
     $datos=$setencia->fetchAll(PDO::FETCH_ASSOC);
     Flight::json($datos);
});


//obtenemos cliente por su id
Flight::route('/cliente/@id', function($id) {
    $setencia = Flight::db()->prepare("SELECT * FROM clientes WHERE id = ?");
    $setencia->execute([$id]);
    $datos = $setencia->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($datos);
});


//obtenemos cliente por su id
Flight::route('/hotel/@id', function($id) {
    $setencia = Flight::db()->prepare("SELECT * FROM hoteles WHERE id = ?");
    $setencia->execute([$id]);
    $datos = $setencia->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($datos);
});


//obtenemos cliente por su id
Flight::route('/reserva/@id', function($id) {
    $setencia = Flight::db()->prepare("SELECT * FROM reservas WHERE id = ?");
    $setencia->execute([$id]);
    $datos = $setencia->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($datos);
});


Flight::start();


