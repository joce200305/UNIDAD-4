<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require "./app/views/shared/metatags.php";
        require "./app/models/crud.class.php"
    ?>
</head>
<style>
    body {
            margin: 0; /* Elimina el margen predeterminado del body */
            font-family: Arial, sans-serif; /* Cambia la fuente según tus preferencias */
            overflow-x: hidden; /* Evita la barra de desplazamiento horizontal */
        }
     body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('./public/img/dulces.jpg');
            background-size: cover;
            background-attachment: fixed;
            z-index: -1; /* Para asegurarse de que esté detrás del contenido */
            opacity: 0.5; /* Ajusta este valor según tu preferencia */
        }

</style>
<body>
    <?php
    $crud = new Crud();
    if (isset($_GET["view"])) {       
        switch ($_GET["view"]) {
            case 'read':
                $productos = $crud->read();
                require "./app/views/read.php";
                break;
            case 'create':
                require "./app/views/create.php";
                break;
            case 'update':
                $producto = $crud->show($_REQUEST["ID"]);
                require "./app/views/update.php";
                break;
            case 'delete':
                $producto = $crud->delete($_REQUEST["ID"]);
                header("location: ./read");
                break;
            case 'readInventario':
                $inventarios = $crud->readInventario();
                require "./app/views/readInventario.php";
                break;
            case 'createInventario':
                require "./app/views/createInventario.php";
                break;
            case 'updateInventario':
                $inventario = $crud->showInventario($_REQUEST["ID"]);
                require "./app/views/updateInventario.php";
                break;
            case 'deleteInventario':
                $inventario = $crud->deleteInventario($_REQUEST["ID"]);
                header("location: ./readInventario");
                break;
            case 'readVentas':
               $ventas = $crud->readVentas();
                require "./app/views/readVentas.php";
                break;
            case 'createVentas':
                require "./app/views/createVentas.php";
                break;
            case 'updateVentas':
                $venta = $crud->showVentas($_REQUEST["ID"]);
                require "./app/views/updateVentas.php";
                break;
            case 'deleteVentas':
                $venta = $crud->deleteVentas($_REQUEST["ID"]);
                header("location: ./readVentas");
                break;
            default:
                # code...
                break;
        }
    } else {
        require "./app/views/home.php";
    }
    

    ?>

    <?php
        require "./app/views/shared/scripts.php"
    ?>
</body>
</html>