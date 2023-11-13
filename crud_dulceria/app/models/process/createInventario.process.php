<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->createInventario([
        "FechaIngreso" => $_POST["FechaIngreso"],
        "CantidadIngresada" => $_POST["CantidadIngresada"],
        "Proveedor" => $_POST["Proveedor"],
        "NumeroFactura" => $_POST["NumeroFactura"],
        "FechaCaducidad" => $_POST["FechaCaducidad"],
        "UbicacionAlmacen" => $_POST["UbicacionAlmacen"],
        "Notas" => $_POST["Notas"],
        
    ])
?>
