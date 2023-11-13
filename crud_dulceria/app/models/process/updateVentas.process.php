<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->updateVentas([
        "ID" => $_POST["ID"],
        "FechaVenta" => $_POST["FechaVenta"],
        "CantidadVendida" => $_POST["CantidadVendida"],
        "PrecioUnitario" => $_POST["PrecioUnitario"],
        "TotalVenta" => $_POST["TotalVenta"],
        "MetodoPago" => $_POST["MetodoPago"],
        "ClienteNombre" => $_POST["ClienteNombre"],
        "ClienteEmail" => $_POST["ClienteEmail"],
        "DireccionEnvio" => $_POST["DireccionEnvio"],
    ])
?>


