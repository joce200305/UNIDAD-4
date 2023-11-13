<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->update([
        "ID" => $_POST["ID"],
        "Nombre" => $_POST["Nombre"],
        "Descripcion" => $_POST["Descripcion"],
        "Precio" => $_POST["Precio"],
        "Stock" => $_POST["Stock"],
        "FechaCreacion" => $_POST["FechaCreacion"],
        "Proveedor" => $_POST["Proveedor"],
        "Categoria" => $_POST["Categoria"],
        "FechaCaducidad" => $_POST["FechaCaducidad"],
    ])
?>


