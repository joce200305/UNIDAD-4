<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar DULCE</h1>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" required>
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" required>
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="Precio" required>
                </div>
                <div class="mb-3">
                    <label for="Stock" class="form-label">Stock</label>
                    <input type="text" class="form-control" id="Stock" required>
                </div>
                <div class="mb-3">
                    <label for="FechaCreacion" class="form-label">FechaCreacion</label>
                    <input type="date" class="form-control" id="FechaCreacion" required>
                </div>
                <div class="mb-3">
                    <label for="Proveedor" class="form-label">Proveedor</label>
                    <input type="text" class="form-control" id="Proveedor" required>
                </div>
                <div class="mb-3">
                    <label for="Categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="Categoria" required>
                </div>
                <div class="mb-3">
                    <label for="FechaCaducidad" class="form-label">FechaCaducidad</label>
                    <input type="date" class="form-control" id="FechaCaducidad" required>
                </div>


                <button id="agregar" class="btn btn-outline-success">Agregar mercacia</button>
            </div>
        </div>
    </div>
</div>
5
<?php 
    require "./app/controllers/create.controller.php"
?>