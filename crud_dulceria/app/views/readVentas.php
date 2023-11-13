<div class="container">
    <div class="row my-4">
        <div class="col">
            <a href="./createVentas" class="btn btn-outline-success">Agregar venta</a>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h3 class="text-center">TABLA venta</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ProductoID</th>
                        <th scope="col">FechaVenta</th>
                        <th scope="col">CantidadVendida</th>
                        <th scope="col">PrecioUnitario</th>
                        <th scope="col">TotalVenta</th>
                        <th scope="col">MetodoPago</th>
                        <th scope="col">ClienteNombre</th>
                        <th scope="col">ClienteEmail</th>
                        <th scope="col">DireccionEnvio</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ventas as $venta):
                    ?>
                    <tr>
                        <td><?php echo $venta["ID"] ?></td>
                        <td><?php echo $venta["ProductoID"] ?></td>
                        <td><?php echo $venta["FechaVenta"] ?></td>
                        <td><?php echo $venta["CantidadVendida"] ?></td>
                        <td><?php echo $venta["PrecioUnitario"] ?></td>
                        <td><?php echo $venta["TotalVenta"] ?></td>
                        <td><?php echo $venta["MetodoPago"] ?></td>
                        <td><?php echo $venta["ClienteNombre"] ?></td>
                        <td><?php echo $venta["ClienteEmail"] ?></td>
                        <td><?php echo $venta["DireccionEnvio"] ?></td>
                    
                        <td>
                            <a href="./updateVentas&ID=<?php echo  $venta["ID"]?>" class="btn btn-outline-warning">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarVentas(<?php echo  $venta['ID']?>)" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php
    require "./app/controllers/readVentas.controller.php"
?>