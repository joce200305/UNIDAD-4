<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar venta</h1>
            <hr>
            <div>
                <input type="text" value="<?php echo $venta["ID"]?>" class="form-control" id="ID" hidden>
                <div class="mb-3">
                    <label for="FechaVenta" class="form-label">FechaVenta</label>
                    <input type="date" value="<?php echo $venta["FechaVenta"]?>" class="form-control" id="FechaVenta">
                </div>
                <div class="mb-3">
                    <label for="CantidadVendida" class="form-label">CantidadVendida</label>
                    <input type="number" value="<?php echo $venta["CantidadVendida"] ?>" class="form-control" id="CantidadVendida">
                </div>
                <div class="mb-3">
                    <label for="PrecioUnitario" class="form-label">PrecioUnitario</label>
                    <input type="number" value="<?php echo $venta["PrecioUnitario"] ?>" class="form-control" id="PrecioUnitario">
                </div>
                <div class="mb-3">
                    <label for="TotalVenta" class="form-label">TotalVenta</label>
                    <input type="number" value="<?php echo $venta["TotalVenta"] ?>" class="form-control" id="TotalVenta">
                </div>
                <div class="mb-3">
                    <label for="MetodoPago" class="form-label">Fecha Creacion</label>
                    <input type="text" value="<?php echo $venta["MetodoPago"] ?>" class="form-control" id="MetodoPago">
                </div>
                <div class="mb-3">
                    <label for="ClienteNombre" class="form-label">ClienteNombre</label>
                    <input type="text" value="<?php echo $venta["ClienteNombre"] ?>" class="form-control" id="ClienteNombre">
                </div>
                <div class="mb-3">
                    <label for="ClienteEmail" class="form-label">ClienteEmail</label>
                    <input type="email" value="<?php echo $venta["ClienteEmail"] ?>" class="form-control" id="ClienteEmail">
                </div>
                <div class="mb-3">
                    <label for="DireccionEnvio" class="form-label">DireccionEnvio</label>
                    <input type="text" value="<?php echo $venta["DireccionEnvio"] ?>" class="form-control" id="DireccionEnvio">
                </div>
                

                <button id="actualizarVentas" class="btn btn-outline-warning">Actualizar venta</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/updateVentas.controller.php"
?>