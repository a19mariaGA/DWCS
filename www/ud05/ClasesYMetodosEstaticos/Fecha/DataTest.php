<?php
include('Data.php');
    

echo  Data::getCalendar()."<br>";
echo Data::getData(). " y son las " . Data::getHoraActual();

?>