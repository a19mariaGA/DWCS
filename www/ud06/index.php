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



//insertamos un cliente
Flight::route('POST /clientes', function(){
   
    $nombre = Flight::request()->data->nombre;
    $apellidos = Flight::request()->data->apellidos;
    $edad = Flight::request()->data->edad;
    $email = Flight::request()->data->email;
    $telefono = Flight::request()->data->telefono;

 
    $sql = "INSERT INTO clientes (nombre, apellidos, edad, email, telefono) VALUES (:nombre, :apellidos, :edad, :email, :telefono)";


    $solicitud = Flight::db()->prepare($sql);

  
    $solicitud->bindParam(':nombre', $nombre);
    $solicitud->bindParam(':apellidos', $apellidos);
    $solicitud->bindParam(':edad', $edad);
    $solicitud->bindParam(':email', $email);
    $solicitud->bindParam(':telefono', $telefono);


    $solicitud->execute();

   
    Flight::jsonp(["Cliente agregado correctamente"]);
});


Flight::route('POST /hoteles', function(){
  
    // Obtener los datos de la solicitud
    $hotel = Flight::request()->data->hotel;
    $direccion = Flight::request()->data->direccion;
    $telefono = Flight::request()->data->telefono;
    $email = Flight::request()->data->email;

    // Preparar la consulta SQL
    $sql = "INSERT INTO hoteles (hotel, direccion, telefono, email) VALUES (:hotel, :direccion, :telefono, :email)";
    $consulta = Flight::db()->prepare($sql);

    // Enlazar parámetros
    $consulta->bindParam(":hotel", $hotel);
    $consulta->bindParam(":direccion", $direccion);
    $consulta->bindParam(":telefono", $telefono);
    $consulta->bindParam(":email", $email);

    // Ejecutar la consulta
    $consulta->execute();

 
        Flight::json(["Hotel agregado correctamente"]);
 
});



Flight::route('POST /reservas', function($id_cliente, $id_hotel){
   
    $fecha_entrada = Flight::request()->data->fecha_entrada;
    $fecha_salida = Flight::request()->data->fecha_salida;
    $fecha_reserva = Flight::request()->data->fecha_reserva;
    
   
    $sql = "INSERT INTO reservas (id_cliente, id_hotel, fecha_reserva, fecha_entrada, fecha_salida) VALUES (:id_cliente, :id_hotel, :fecha_reserva, :fecha_entrada, :fecha_salida)";
    $consulta = Flight::db()->prepare($sql);
    
    
    $consulta->bindParam(":id_cliente", $id_cliente);
    $consulta->bindParam(":id_hotel", $id_hotel);
    $consulta->bindParam(":fecha_reserva", $fecha_reserva);
    $consulta->bindParam(":fecha_entrada", $fecha_entrada);
    $consulta->bindParam(":fecha_salida", $fecha_salida);
    
   
    $consulta->execute();
  
        Flight::json("La reserva para el cliente se ha realizado correctamente");
}); 




Flight::route('DELETE /clientes', function () {

    $id = Flight::request()->data->id;
   
    $sql ="DELETE FROM clientes WHERE id=?";
    //Preparamos la sentencia sql
    $sentencia = Flight::db()->prepare($sql);
    //Pasamos el id 
    $sentencia->bindParam(1, $id);
    //Ejecutamos la sentencia INSERT
    $sentencia->execute();
   
    //Devolvememos en formato JSON parado una sentencia que nos indique que todo fue correctamente. 
    Flight::jsonp(["Cliente eliminado con id: $id"]);
   
   });



   Flight::route('DELETE /hoteles', function () {

    $id = Flight::request()->data->id;
   
    $sql ="DELETE FROM hoteles WHERE id=?";
    //Preparamos la sentencia sql
    $sentencia = Flight::db()->prepare($sql);
    //Pasamos el id 
    $sentencia->bindParam(1, $id);
    //Ejecutamos la sentencia INSERT
    $sentencia->execute();
   
    //Devolvememos en formato JSON parado una sentencia que nos indique que todo fue correctamente. 
    Flight::jsonp(["Hotel eliminado con id: $id"]);
   
   });


   Flight::route('DELETE /reservas', function () {

    $id = Flight::request()->data->id;
   
    $sql ="DELETE FROM reservas WHERE id=?";
    //Preparamos la sentencia sql
    $sentencia = Flight::db()->prepare($sql);
    //Pasamos el id 
    $sentencia->bindParam(1, $id);
    //Ejecutamos la sentencia INSERT
    $sentencia->execute();
   
    //Devolvememos en formato JSON parado una sentencia que nos indique que todo fue correctamente. 
    Flight::jsonp(["Cliente eliminado con id: $id"]);
   
   });


Flight::start();


