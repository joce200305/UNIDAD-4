<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
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
                    Nombre, 
                    Descripcion, 
                    Precio, 
                    Stock, 
                    FechaCreacion, 
                    Proveedor, 
                    Categoria, 
                    FechaCaducidad
                },
                url: "./app/models/process/create.process.php",
                type: "POST",
                success: (res) => {
                    Swal.fire({
                        title: 'Producto agregado',
                        text: "El producto fue agregado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./read"
                        }
                    })
                },
                error: (err) => {
                    console.log(err, "la peticion tuvo un error")
                }
            })
        })
    })
</script>