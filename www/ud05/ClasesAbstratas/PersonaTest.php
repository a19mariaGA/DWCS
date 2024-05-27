<?php
//include('Persona.php');
include('Usuario.php');
include('Administrador.php');



    $usuario1 = new Usuario("Luis", "Gomez");
    $usuario2 = new Usuario("Carlos", "Perez");


    $administrador1 = new Administrador("Javier","Otero");
    $administrador2 = new Administrador("Fran","Lema");

 
  echo  $usuario1->accion()."<br>";
  echo  $usuario2->accion()."<br>";
  echo  $administrador1->accion()."<br>";
  echo  $administrador2->accion()."<br>";
   
?>