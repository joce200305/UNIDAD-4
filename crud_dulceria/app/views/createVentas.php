<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar Ventas</h1>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="FechaVenta" class="form-label">FechaVenta</label>
                    <input type="date" class="form-control" id="FechaVenta" required>
                </div>
                <div class="mb-3">
                    <label for="CantidadVendida" class="form-label">CantidadVendida</label>
                    <input type="number" class="form-control" id="CantidadVendida" required>
                </div>
                <div class="mb-3">
                    <label for="PrecioUnitario" class="form-label">PrecioUnitario</label>
                    <input type="number" class="form-control" id="PrecioUnitario" required>
                </div>
                <div class="mb-3">
                    <label for="TotalVenta" class="form-label">TotalVenta</label>
                    <input type="number" class="form-control" id="TotalVenta" required>
                </div>
                <div class="mb-3">
                    <label for="MetodoPago" class="form-label">MetodoPago</label>
                    <input type="text" class="form-control" id="MetodoPago" required>
                </div>
                <div class="mb-3">
                    <label for="ClienteNombre" class="form-label">ClienteNombre</label>
                    <input type="text" class="form-control" id="ClienteNombre" required>
                </div>
                <div class="mb-3">
                    <label for="ClienteEmail" class="form-label">ClienteEmail</label>
                    <input type="email" class="form-control" id="ClienteEmail" required>
                </div>
                <div class="mb-3">
                    <label for="DireccionEnvio" class="form-label">DireccionEnvio</label>
                    <input type="text" class="form-control" id="DireccionEnvio" required>
                </div>


                <button id="agregarVentas" class="btn btn-outline-success">Agregar mercacia</button>
            </div>
        </div>
    </div>
</div>
5
<?php 
    require "./app/controllers/createVentas.controller.php"
?>