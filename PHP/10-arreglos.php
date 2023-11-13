<?php  
$arreglo=[1,2,3,4,5];

$arreglo_asociativo= [
    "nombre" => "Jocelyn",
    "apellidos"=> ["Melo","Jocelyn"],
    "edad"=> 20,
    "direccion"=> "Calle Pino"
];

echo "<pre>"
print_($arreglo);
echo "<pre>"

echo "<br>"

echo "<pre>"
print_r($arreglo_asociativo);
?>