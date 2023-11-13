
<script>
    $(document).ready(() => {

        $("#actualizar").click(() => {
            let ID = $("#ID").val();
            let Nombre = $("#Nombre").val()
            let Descripcion = $("#Descripcion").val()
            let Precio = $("#Precio").val()
            let Stock = $("#Stock").val()
            let FechaCreacion = $("#FechaCreacion").val()
            let Proveedor = $("#Proveedor").val()
            let Categoria = $("#Categoria").val()
            let FechaCaducidad = $("#FechaCaducidad").val()
            $.ajax({
                data: {
                    ID, 
                    Nombre, 
                    Descripcion, 
                    Precio, 
                    Stock, 
                    FechaCreacion, 
                    Proveedor, 
                    Categoria, 
                    FechaCaducidad
                },
                url: "./app/models/process/update.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Producto actualizado',
                        text: "Actualizaste el producto con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./read"
                        }
                    })
                },
                error: () => {
                    Swal.fire({
                        title: 'Producto no actualizado',
                        text: "No actualizaste el producto correctamente!",
                        icon: 'error',
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'Ok!'
                    })
                }
            })
        })
    })
</script>