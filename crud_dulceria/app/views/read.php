<div class="container">
    <div class="row my-4">
        <div class="col">
            <a href="./create" class="btn btn-outline-success">Agregar dulce</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="text-center">TABLA PRODUCTOS</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Fecha Creacion</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Fecha Caducidad</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($productos as $producto):
                    ?>
                    <tr>
                        <td><?php echo $producto["ID"] ?></td>
                        <td><?php echo $producto["Nombre"] ?></td>
                        <td><?php echo $producto["Descripcion"] ?></td>
                        <td><?php echo $producto["Precio"] ?></td>
                        <td><?php echo $producto["Stock"] ?></td>
                        <td><?php echo $producto["FechaCreacion"] ?></td>
                        <td><?php echo $producto["Proveedor"] ?></td>
                        <td><?php echo $producto["Categoria"] ?></td>
                        <td><?php echo $producto["FechaCaducidad"] ?></td>
                        <td>
                            <a href="./update&ID=<?php echo  $producto["ID"]?>" class="btn btn-outline-warning">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarProducto(<?php echo  $producto['ID']?>)" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
            <div class="col text-center">
                <a href="./readInventario" class="btn btn-outline-info text-center">Tabla inventario</a>
                <a href="./readVentas" class="btn btn-outline-info text-center">Tabla ventas</a>
            </div>
        </div>
    </div>
    
</div>

<?php
    require "./app/controllers/read.controller.php"
?>