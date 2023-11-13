<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar producto</h1>
            <hr>
            <div>
                <input type="text" value="<?php echo $inventario["ID"]?>" class="form-control" id="ID" hidden>
                <div class="mb-3">
                    <label for="FechaIngreso" class="form-label">FechaIngreso</label>
                    <input type="date" value="<?php echo $inventario["FechaIngreso"]?>" class="form-control" id="FechaIngreso">
                </div>
                <div class="mb-3">
                    <label for="CantidadIngresada" class="form-label">CantidadIngresada</label>
                    <input type="number" value="<?php echo $inventario["CantidadIngresada"] ?>" class="form-control" id="CantidadIngresada">
                </div>
                <div class="mb-3">
                    <label for="Proveedor" class="form-label">Proveedor</label>
                    <input type="text" value="<?php echo $inventario["Proveedor"] ?>" class="form-control" id="Proveedor">
                </div>
                <div class="mb-3">
                    <label for="NumeroFactura" class="form-label">NumeroFactura</label>
                    <input type="number" value="<?php echo $inventario["NumeroFactura"] ?>" class="form-control" id="NumeroFactura">
                </div>
                <div class="mb-3">
                    <label for="FechaCaducidad" class="form-label">FechaCaducidad</label>
                    <input type="date" value="<?php echo $inventario["FechaCaducidad"] ?>" class="form-control" id="FechaCaducidad">
                </div>
                <div class="mb-3">
                    <label for="UbicacionAlmacen" class="form-label">UbicacionAlmacen</label>
                    <input type="text" value="<?php echo $inventario["UbicacionAlmacen"] ?>" class="form-control" id="UbicacionAlmacen">
                </div>
                <div class="mb-3">
                    <label for="Notas" class="form-label">Notas</label>
                    <input type="text" value="<?php echo $inventario["Notas"] ?>" class="form-control" id="Notas">
                </div>
                

                <button id="actualizarInventario" class="btn btn-outline-warning">Actualizar producto</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/updateInventario.controller.php"
?>