<div class="container">
    <div class="row my-4">
        <div class="col">
            <a href="./createInventario" class="btn btn-outline-success">Agregar inventario</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="text-center">TABLA Inventario</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ProductoID</th>
                        <th scope="col">FechaIngreso</th>
                        <th scope="col">CantidadIngresada</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">NumeroFactura</th>
                        <th scope="col">FechaCaducidad</th>
                        <th scope="col">UbicacionAlmacen</th>
                        <th scope="col">Notas</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($inventarios as $inventario):
                    ?>
                    <tr>
                        <td><?php echo $inventario["ID"] ?></td>
                        <td><?php echo $inventario["ProductoID"] ?></td>
                        <td><?php echo $inventario["FechaIngreso"] ?></td>
                        <td><?php echo $inventario["CantidadIngresada"] ?></td>
                        <td><?php echo $inventario["Proveedor"] ?></td>
                        <td><?php echo $inventario["NumeroFactura"] ?></td>
                        <td><?php echo $inventario["FechaCaducidad"] ?></td>
                        <td><?php echo $inventario["UbicacionAlmacen"] ?></td>
                        <td><?php echo $inventario["Notas"] ?></td>
                        <td>
                            <a href="./updateInventario&ID=<?php echo  $inventario["ID"]?>" class="btn btn-outline-warning">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarInventario(<?php echo  $inventario['ID']?>)" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
            <div class="col text-center">
                <a href="./read" class="btn btn-outline-info text-center">Tabla productos</a>
                <a href="./readVentas" class="btn btn-outline-info text-center">Tabla ventas</a>
            </div>
        </div>
    </div>
    
</div>

<?php
    require "./app/controllers/readInventario.controller.php"
?>

