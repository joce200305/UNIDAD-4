<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar inventario90</h1>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="FechaIngreso" class="form-label">FechaIngreso</label>
                    <input type="date" class="form-control" id="FechaIngreso" required>
                </div>
                <div class="mb-3">
                    <label for="CantidadIngresada" class="form-label">CantidadIngresada</label>
                    <input type="number" class="form-control" id="CantidadIngresada" required>
                </div>
                <div class="mb-3">
                    <label for="Proveedor" class="form-label">Proveedor</label>
                    <input type="text" class="form-control" id="Proveedor" required>
                </div>
                <div class="mb-3">
                    <label for="NumeroFactura" class="form-label">NumeroFactura</label>
                    <input type="number" class="form-control" id="NumeroFactura" required>
                </div>
                <div class="mb-3">
                    <label for="FechaCaducidad" class="form-label">FechaCaducidad</label>
                    <input type="date" class="form-control" id="FechaCaducidad" required>
                </div>
                <div class="mb-3">
                    <label for="UbicacionAlmacen" class="form-label">UbicacionAlmacen</label>
                    <input type="text" class="form-control" id="UbicacionAlmacen" required>
                </div>     
                <div class="mb-3">
                    <label for="Notas" class="form-label">Notas</label>
                    <input type="text" class="form-control" id="Notas" required>
                </div>
        


                <button id="agregarInventario" class="btn btn-outline-success">Agregar mercacia</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/createInventario.controller.php"
?>