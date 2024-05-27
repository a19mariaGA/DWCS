<?php

require 'flight/Flight.php';

// Conexión a la base de datos
Flight::register("db", "PDO", array("mysql:host=db;dbname=classicmodels", "root", "test"));



//obtenemos cliente por su id
Flight::route('GET /customers', function() {
    $setencia = Flight::db()->prepare("SELECT * FROM customers");
    $setencia->execute([]);
    $datos = $setencia->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($datos);
});





Flight::route('GET /customers/@id', function($customerNumber) {
    $setencia = Flight::db()->prepare("SELECT * FROM customers WHERE customerNumber = ?");
    $setencia->execute([$customerNumber]);
    $datos = $setencia->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($datos);
});


Flight::route('POST /customers', function(){

    
    $customerNumber = Flight::request()->data->customerNumber;
    $customerName = Flight::request()->data->customerName;
    $contactLastName = Flight::request()->data->contactLastName;
    $contactFirstName = Flight::request()->data->contactFirstName;
    $phone = Flight::request()->data->phone;
    $addressLine1 = Flight::request()->data->addressLine1;
    $addressLine2 = Flight::request()->data->addressLine2;
    $city = Flight::request()->data->city;
    $state = Flight::request()->data->state;
    $postalCode = Flight::request()->data->postalCode;
    $country = Flight::request()->data->country;
    $salesRepEmployeeNumber = Flight::request()->data->salesRepEmployeeNumber;
    $creditLimit = Flight::request()->data->creditLimit;
    
    $sql = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1,addressLine2 , city, state, 
    postalCode, country,salesRepEmployeeNumber,creditLimit) 
    VALUES (:customerNumber, :customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :addressLine2 , :city, :state, 
    :postalCode, :country, :salesRepEmployeeNumber, :creditLimit)";

    $solicitud = Flight::db()->prepare($sql);

    $solicitud->bindParam(':customerNumber', $customerNumber);
    $solicitud->bindParam(':customerName', $customerName);
    $solicitud->bindParam(':contactLastName', $contactLastName);
    $solicitud->bindParam(':contactFirstName', $contactFirstName);
    $solicitud->bindParam(':phone', $phone);
    $solicitud->bindParam(':addressLine1', $addressLine1);
    $solicitud->bindParam(':addressLine2', $addressLine2);
    $solicitud->bindParam(':city', $city);
    $solicitud->bindParam(':state', $state);
    $solicitud->bindParam(':postalCode', $postalCode);
    $solicitud->bindParam(':country', $country);
    $solicitud->bindParam(':salesRepEmployeeNumber', $salesRepEmployeeNumber);
    $solicitud->bindParam(':creditLimit', $creditLimit);

    $solicitud->execute();


    Flight::jsonp(["customers agregado correctamente"]);


});




Flight::route('DELETE /customers', function () {

    $id = Flight::request()->data->id;
   
    $sql ="DELETE FROM customers WHERE customerNumber=?";
    //Preparamos la sentencia sql
    $sentencia = Flight::db()->prepare($sql);
    //Pasamos el id 
    $sentencia->bindParam(1, $id);
    //Ejecutamos la sentencia INSERT
    $sentencia->execute();
   
    //Devolvememos en formato JSON parado una sentencia que nos indique que todo fue correctamente. 
    Flight::jsonp(["customers eliminado con customerNumber: $id"]);
   
   });
    


   Flight::route('PUT /customers', function () {

    $customerNumber = Flight::request()->data->customerNumber;
    $phone = Flight::request()->data->phone;
    
   
   
    $sql ="UPDATE customers set phone=?  WHERE customerNumber=?";
    //Preparamos la sentencia sql
    $sentencia = Flight::db()->prepare($sql);
    //Preparamos los datos obtenidos de la sentencia 
    $sentencia->bindParam(1, $phone);
    $sentencia->bindParam(2, $customerNumber);
    //Ejecutamos la sentencia INSERT
    $sentencia->execute();
   
    //Devolvememos en formato JSON parado una sentencia que nos indique que todo fue correctamente. 
    Flight::jsonp(["Cliente actualizado correctamente."]);
   
   });






Flight::start();
?>