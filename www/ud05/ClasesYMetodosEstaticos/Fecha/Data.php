<?php

class Data
{
    private static $calendario = "Calendario gregoriano";
    private static $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

    //obtenemos los días de la semana
    private static function getDiaSemana()
    {
        //con date obtenemos los días en forma de número 
        $diaSemana = date('w'); // 0 (para Domingo) a 6 (para Sábado)
        return self::$dias[$diaSemana]; //y le asignamos un valor en letra
    }

//obtenemos la hora actual H:M:S
  private static function getHora()
    {
        return date('H:i:s');
    }


    //obtenemos la fecha actual 
    public static function getData()
    {
        $ano = date('Y'); //año en número
        $mes = date('m'); //mes en número
        $dia = date('d'); //dia en número
        $diaSemana = self::getDiaSemana();  //dia en número en  letra

        return "Hoy es $diaSemana $dia de " . self::getNombreMes($mes) . " del $ano";
    }

    private static function getNombreMes($mes)  // convertimos el mes en número a letra
    {
        $meses = [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre',
        ];

        return $meses[$mes];
    }

//nos devuelve el nombre del calendario que es el valor de la variable $calendario
    public static function getCalendar()
    {
        return "Usamos el calendario: ". self::$calendario;
    }


    //hora actual
    public static function getHoraActual()
    {
        return self::getHora();
    }



}


?>