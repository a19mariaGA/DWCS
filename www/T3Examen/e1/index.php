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

/*
//obtenemos cliente por su id
Flight::route('GET /customers/@id', function($customerNumber) {
    $setencia = Flight::db()->prepare("SELECT * FROM customers WHERE customerNumber = ?");
    $setencia->execute([$customerNumber]);
    $datos = $setencia->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($datos);
});
*/

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


    Flight::jsonp(["Cliente agregado correctamente"]);


});

Flight::start();
?>