<?php 

$arreglo_asociativo= [
    "nombre" => "Jocelyn",
    "apellidos"=> ["Melo","Jocelyn"],
    "edad"=> 21,
    "direccion"=> "calle  pino"
];

foreach($arreglo_asociativo as $clave => $valor):
    print_r($clave);
    echo "<br>";
endforeach
?>