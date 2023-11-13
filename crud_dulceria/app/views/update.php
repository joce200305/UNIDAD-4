<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar producto</h1>
            <hr>
            <div>
                <input type="text" value="<?php echo $producto["ID"]?>" class="form-control" id="ID" hidden>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" value="<?php echo $producto["Nombre"]?>" class="form-control" id="Nombre">
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripcion</label>
                    <input type="text" value="<?php echo $producto["Descripcion"] ?>" class="form-control" id="Descripcion">
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" value="<?php echo $producto["Precio"] ?>" class="form-control" id="Precio">
                </div>
                <div class="mb-3">
                    <label for="Stock" class="form-label">Stock</label>
                    <input type="text" value="<?php echo $producto["Stock"] ?>" class="form-control" id="Stock">
                </div>
                <div class="mb-3">
                    <label for="FechaCreacion" class="form-label">Fecha Creacion</label>
                    <input type="date" value="<?php echo $producto["FechaCreacion"] ?>" class="form-control" id="FechaCreacion">
                </div>
                <div class="mb-3">
                    <label for="Proveedor" class="form-label">Proveedor</label>
                    <input type="text" value="<?php echo $producto["Proveedor"] ?>" class="form-control" id="Proveedor">
                </div>
                <div class="mb-3">
                    <label for="Categoria" class="form-label">Categoria</label>
                    <input type="text" value="<?php echo $producto["Categoria"] ?>" class="form-control" id="Categoria">
                </div>
                <div class="mb-3">
                    <label for="FechaCaducidad" class="form-label">FechaCaducidad</label>
                    <input type="date" value="<?php echo $producto["FechaCaducidad"] ?>" class="form-control" id="FechaCaducidad">
                </div>
                

                <button id="actualizar" class="btn btn-outline-warning">Actualizar producto</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/update.controller.php"
?>